<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Doner;

class DonerController extends Controller
{
    public function add(){
      return view('backend.doner.add-doner');
    }
    public function index(){
      $data['allData']=Doner::all();
      return view('backend.doner.view-doner',$data);
    }

    public function store(Request $request){
      $this->validate($request,[
        'name'=> 'required|unique:doners,name',
        'email' =>'required|unique:doners,email'
      ]);

      $data= new Doner();
      $data->name =$request->name;
      $data->email=$request->email;
      $data->mobile=$request->mobile;
      $data->address=$request->address;
      $data->blood_group=$request->blood_group;
      $data->gender=$request->gender;
      $data->save();
      return redirect()->route('doners.view');

    }

}
