<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\NewsEvent;

class NewsEventController extends Controller
{
  public function index(){
    $data['allData']=NewsEvent::all();
    //dd($data['allData']);
    return view('backend.news_event.view-news-event',$data);

  }

  public function add(){
    return view('backend.news_event.add-news-event');
  }

  public function store(Request $request){

    $data = new NewsEvent();
    $data->created_by=Auth::user()->id;
    $data->date=$request->date;
    $data->short_title=$request->short_title;
    $data->long_title =$request->long_title;
    if($request->file('image')){
      $file= $request->file('image');
      $fileName=date('YmdHi').$file->getClientOriginalName();
      $file->move(public_path('upload/news_images'),$fileName);
      $data['image']=$fileName;
    }
    $data->save();
    $notification=array(
                          'message'=>'NewsEvent Successfully Added',
                          'alert-type'=>'success'
                           );
                           return redirect()->route('news_events.view')->with($notification);

  }

  public function edit($id) {
    $editData=NewsEvent::find($id);
  return view('backend.news_event.edit-news-event',compact('editData'));
  //  dd($editData);

  }
  public function update(Request $request,$id){

    $data=NewsEvent::find($id);
    $data->updated_by =Auth::user()->id;
    $data->date=$request->date;
    $data->short_title=$request->short_title;
    $data->long_title=$request->long_title;
    if($request->file('image')){
      $file= $request->file('image');
      @unlink(public_path('upload/news_images/'.$data->image));
      $fileName=date('YmdHi').$file->getClientOriginalName();
      $file->move(public_path('upload/news_images'),$fileName);
      $data['image']=$fileName;
    }
    $data->save();
    $notification=array(
                        'message'=>'NewsEvent Updated successfully',
                        'alert-type'=>'success'
                        );
                  return redirect()->route('news_events.view')->with($notification);
  }

  public function delete($id){
    $newsEvent=NewsEvent::find($id);
    if(file_exists('public/upload/news_images/'.$newsEvent->image) AND ! empty($newsEvent->image)){
      unlink('public/upload/news_images/'.$newsEvent->image);
    }
    $newsEvent->delete();
    $notification=array(
                      'message'=>'NewsEvent  Deleted!',
                        'alert-type'=>'error'
                      );
                    return redirect()->route('news_events.view')->with($notification);
  }

}
