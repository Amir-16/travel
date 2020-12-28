<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){
      // $alldata=User::all();
      // dd($alldata->toArray());
      $data['alldata']=User::all();
      return view('backend.user.view-user',$data);

    }

    public function add(){
      return view('backend.user.add-user');
    }

    public function store(Request $request){
      $this->validate($request,[
        'name' =>'required',
        'email'=>'required|unique:users,email'
      ]);

      $data = new User();
      $data->usertype=$request->usertype;
      $data->name = $request->name;
      $data->email =$request->email;
      $data->password= bcrypt($request->password);
      $data->save();
      $notification=array(
                            'message'=>'User Successfully Added',
                            'alert-type'=>'success'
                             );
                             return redirect()->route('users.view')->with($notification);

    }

    public function edit($id) {
      $editData=User::find($id);
    return view('backend.user.edit-user',compact('editData'));
    //  dd($editData);

    }
    public function update(Request $request,$id){

      $data = User::find($id);
      $data->usertype=$request->usertype;
      $data->name = $request->name;
      $data->email =$request->email;
      $data->save();
      $notification=array(
                          'message'=>'User Updated successfully',
                          'alert-type'=>'success'
                          );
                    return redirect()->route('users.view')->with($notification);
    }

    public function delete($id){
      $user=User::find($id);
      $user->delete();
      $notification=array(
                        'message'=>'Data Deleted!',
                          'alert-type'=>'error'
                        );
                      return redirect()->route('users.view')->with($notification);
    }



}
