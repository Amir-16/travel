<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Slider;
use Auth;

class SliderController extends Controller
{
  public function index(){
    $data['allData']=Slider::all();
    //dd($data['allData']);
    return view('backend.slider.view-slider',$data);

  }

  public function add(){
    return view('backend.slider.add-slider');
  }

  public function store(Request $request){

    $data = new Slider();
    $data->created_by=Auth::user()->id;
    $data->short_title=$request->short_title;
    $data->long_title =$request->long_title;
    if($request->file('image')){
      $file= $request->file('image');
      $fileName=date('YmdHi').$file->getClientOriginalName();
      $file->move(public_path('upload/slider_images'),$fileName);
      $data['image']=$fileName;
    }
    $data->save();
    $notification=array(
                          'message'=>'Slider Successfully Added',
                          'alert-type'=>'success'
                           );
                           return redirect()->route('sliders.view')->with($notification);

  }

  public function edit($id) {
    $editData=Slider::find($id);
  return view('backend.slider.edit-slider',compact('editData'));
  //  dd($editData);

  }
  public function update(Request $request,$id){

    $data=Slider::find($id);
    $data->updated_by =Auth::user()->id;
    $data->short_title=$request->short_title;
    $data->long_title=$request->long_title;
    if($request->file('image')){
      $file= $request->file('image');
      @unlink(public_path('upload/slider_images/'.$data->image));
      $fileName=date('YmdHi').$file->getClientOriginalName();
      $file->move(public_path('upload/slider_images'),$fileName);
      $data['image']=$fileName;
    }
    $data->save();
    $notification=array(
                        'message'=>'Slider Updated successfully',
                        'alert-type'=>'success'
                        );
                  return redirect()->route('sliders.view')->with($notification);
  }

  public function delete($id){
    $slider =Slider::find($id);
    if(file_exists('public/upload/slider_images/'.$slider->image) AND ! empty($slider->image)){
      unlink('public/upload/slider_images/'.$slider->image);
    }
    $slider->delete();
    $notification=array(
                      'message'=>'Slider  Deleted!',
                        'alert-type'=>'error'
                      );
                    return redirect()->route('sliders.view')->with($notification);
  }

}
