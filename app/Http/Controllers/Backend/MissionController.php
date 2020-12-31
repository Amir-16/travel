<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Mission;
use Auth;

class MissionController extends Controller
{
    public function add(){
      return view('backend.mission.add-mission');
    }

    public function index(){
      $data['countMission']=Mission::count();
      //dd($data['countMission']);
      $data['allData']=Mission::all();
      return view('backend.mission.view-mission',$data);
    }

    public function store(Request $request){
      $data= new Mission();
      $data->created_by=Auth::user()->id;
      $data->title=$request->title;
      if($request->file('image')){
        $file=$request->file('image');
        $fileName=date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('upload/mission_image'),$fileName);
        $data['image']=$fileName;

      }
      $data->save();
      $notification=array(
                    'message'=>'Mission Successfully Added',
                    'alert-type'=>'success'
                     );
                     return redirect()->route('missions.view')->with($notification);

    }

    public function edit($id){
      $editData=Mission::find($id);
      return view('backend.mission.edit-mission',compact('editData'));
    }
    public function update(Request $request,$id){
      $data=Mission::find($id);
      $data->updated_by=Auth::user()->id;
      $data->title=$request->title;
      if($request->file('image')){
        $file=$request->file('image');
        @unlink(public_path('upload/mission_image/'.$data->image));
        $fileName=date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('upload/mission_image'),$fileName);
        $data['image']=$fileName;

      }
      $data->save();
      $notification=array(
                    'message'=>'Mission Successfully Updated',
                    'alert-type'=>'success'
                     );
                     return redirect()->route('missions.view')->with($notification);

    }

    public function delete($id){
      $mission =Mission::find($id);
      if(file_exists('public/upload/mission_image/'.$mission->image) AND ! empty($mission->image)){
        unlink('public/upload/mission_image/'.$mission->image);
      }
      $mission->delete();
      $notification=array(
                        'message'=>'Mission  Deleted!',
                          'alert-type'=>'error'
                        );
                      return redirect()->route('missions.view')->with($notification);
    }


}
