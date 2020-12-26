<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;

class ProfileController extends Controller
{
    public function index(){
    //  dd('ok');
      $id =Auth::user()->id;
      //dd($id);
      $user=User::find($id);
      //dd($user);
      return view('backend.user.view-profile',compact('user'));
    }
      public function edit(){
      $id=Auth::user()->id;
      $editData=User::find($id);
      return view('backend.user.edit-profile',compact('editData'));

    }
    public function update(Request $request){
      $id=Auth::user()->id;
      $data = User::find($id);
      $data->name=$request->name;
      $data->email =$request->email;
      $data->mobile= $request->mobile;
      $data->address= $request->address;
      $data->gender =$request->gender;
      if($request->file('image')){
        $file= $request->file('image');
        @unlink(public_path('upload/user_images/'.$data->image));
        $fileName=date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('upload/user_images'),$fileName);
        $data['image']=$fileName;
      }
      $data->save();
      return redirect()->route('profiles.view');
    }
    public function passwordView(){
      //dd('ok');
      return view('backend.user.edit-password');
    }
    public function passwordUpdate(Request $request){
      if(Auth::attempt(['id'=>Auth::user()->id,'password'=>$request->current_password])){
        $user=User::find(Auth::user()->id);
        $user->password =bcrypt($request->new_password);
        $user->save();
        return redirect()->route('profiles.view');

      }else{
        return redirect()->back()->with('error','Sorry! your password doesnot match !');
      }
    }
}
