<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Vision;

class VisionController extends Controller
{
  public function add(){
    return view('backend.vision.add-vision');
  }

  public function index(){
    $data['ctvision']=Vision::count();
    //dd($data['ctvision']);
    $data['allData']=Vision::all();
    return view('backend.vision.view-vision',$data);
  }

  public function store(Request $request){
    $data= new Vision();
    $data->created_by=Auth::user()->id;
    $data->title=$request->title;
    if($request->file('image')){
      $file=$request->file('image');
      $fileName=date('YmdHi').$file->getClientOriginalName();
      $file->move(public_path('upload/vision_images'),$fileName);
      $data['image']=$fileName;

    }
    $data->save();
    $notification=array(
                  'message'=>'Vision Successfully Added',
                  'alert-type'=>'success'
                   );
                   return redirect()->route('visions.view')->with($notification);

  }

  public function edit($id){
    $editData=Vision::find($id);
    return view('backend.vision.edit-vision',compact('editData'));
  }

  public function update(Request $request,$id){
    $data=Vision::find($id);
    $data->updated_by=Auth::user()->id;
    $data->title=$request->title;
    if($request->file('image')){
      $file=$request->file('image');
      @unlink(public_path('upload/vision_images/'.$data->image));
      $fileName=date('YmdHi').$file->getClientOriginalName();
      $file->move(public_path('upload/vision_images'),$fileName);
      $data['image']=$fileName;

    }
    $data->save();
    $notification=array(
                  'message'=>'Vision Successfully Updated',
                  'alert-type'=>'success'
                   );
                   return redirect()->route('visions.view')->with($notification);

  }

  public function delete($id){
    $vision =Vision::find($id);
    if(file_exists('public/upload/vision_images/'.$vision->image) AND ! empty($vision->image)){
      unlink('public/upload/vision_images/'.$vision->image);
    }
    $vision->delete();
    $notification=array(
                      'message'=>'Vision  Deleted!',
                        'alert-type'=>'error'
                      );
                    return redirect()->route('visions.view')->with($notification);
  }

}
