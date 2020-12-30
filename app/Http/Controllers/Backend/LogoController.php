<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Logo;
use Auth;

class LogoController extends Controller
{
  public function index(){
    $data['countLogo']=Logo::count();
    //dd($data['countLogo']);
    $data['allData']=Logo::all();
    //dd($data['allData']);
    return view('backend.logo.view-logo',$data);

  }

  public function add(){
    return view('backend.logo.add-logo');
  }

  public function store(Request $request){

    $data = new Logo();
    $data->created_by=Auth::user()->id;
    if($request->file('image')){
      $file= $request->file('image');
      $fileName=date('YmdHi').$file->getClientOriginalName();
      $file->move(public_path('upload/logo_images'),$fileName);
      $data['image']=$fileName;
    }
    $data->save();
    $notification=array(
                          'message'=>'Logo Successfully Added',
                          'alert-type'=>'success'
                           );
                           return redirect()->route('logos.view')->with($notification);

  }

  public function edit($id) {
    $editData=Logo::find($id);
  return view('backend.logo.edit-logo',compact('editData'));
  //  dd($editData);

  }
  public function update(Request $request,$id){

    $data=Logo::find($id);
    $data->updated_by=Auth::user()->id;
    if($request->file('image')){
      $file= $request->file('image');
      @unlink(public_path('upload/logo_images/'.$data->image));
      $fileName=date('YmdHi').$file->getClientOriginalName();
      $file->move(public_path('upload/logo_images'),$fileName);
      $data['image']=$fileName;
    }
    $data->save();
    $notification=array(
                        'message'=>'Logo Updated successfully',
                        'alert-type'=>'success'
                        );
                  return redirect()->route('logos.view')->with($notification);
  }

  public function delete($id){
    $logo=Logo::find($id);
    if(file_exists('public/upload/logo_images/'.$logo->image) AND ! empty($logo->image)){
      unlink('public/upload/logo_images/'.$logo->image);
    }
    $logo->delete();
    $notification=array(
                      'message'=>'Data Deleted!',
                        'alert-type'=>'error'
                      );
                    return redirect()->route('logos.view')->with($notification);
  }

}
