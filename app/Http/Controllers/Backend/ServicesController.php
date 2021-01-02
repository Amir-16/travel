<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Service;

class ServicesController extends Controller
{
  public function index(){
    $data['allData']=Service::all();
    //dd($data['allData']);
    return view('backend.services.view-services',$data);

  }

  public function add(){
    return view('backend.services.add-services');
  }

  public function store(Request $request){

    $data =new Service();
    $data->created_by=Auth::user()->id;
    $data->short_title=$request->short_title;
    $data->long_title =$request->long_title;
    $data->save();
    $notification=array(
                          'message'=>'Service Successfully Added',
                          'alert-type'=>'success'
                           );
                           return redirect()->route('services.view')->with($notification);

  }

  public function edit($id) {
    $editData=Service::find($id);
  return view('backend.services.edit-services',compact('editData'));
  //  dd($editData);

  }
  public function update(Request $request,$id){

    $data=Service::find($id);
    $data->updated_by =Auth::user()->id;
    $data->short_title=$request->short_title;
    $data->long_title=$request->long_title;
    $data->save();
    $notification=array(
                        'message'=>'Service Updated successfully',
                        'alert-type'=>'success'
                        );
                  return redirect()->route('services.view')->with($notification);
  }

  public function delete($id){
    $service=Service::find($id);
    $service->delete();
    $notification=array(
                      'message'=>'Services  Deleted!',
                        'alert-type'=>'error'
                      );
                    return redirect()->route('services.view')->with($notification);
  }

}
