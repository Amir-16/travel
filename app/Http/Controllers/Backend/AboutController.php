<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\About;

class AboutController extends Controller
{
    public function add(){
    	return view('backend.about.add-about');
    }

    public function index(){
    	$data['allData']=About::all();
    	return view('backend.about.view-about',$data);
    }

    public function store(Request $request){
    	$data = new About();
    	$data->created_by=Auth::user()->id;
    	$data->long_title= $request->long_title;
    	$data->save();
    	$notification =array(
    						'message' => 'About added Succesfully',
    						'alert-type'=>'success'
    					);
    			return redirect()->route('about.view')->with($notification);

    }

    public function edit($id){
    	$editData =About::find($id);
    	return view('backend.about.edit-about',compact('editData'));
    }

    public function update(Request $request,$id){
    	$data =About::find($id);
    	$data->updated_by=Auth::user()->id;
    	$data->long_title= $request->long_title;
    	$data->save();
    	$notification =array(
    						'message' => 'About updated Succesfully',
    						'alert-type'=>'success'
    					);
    			return redirect()->route('about.view')->with($notification);

    }

   public function delete($id){
   		$about=About::find($id);
   		$about->delete();
   		$notification =array(
    						'message' => 'About deleted!!',
    						'alert-type'=>'error'
    					);
    			return redirect()->route('about.view')->with($notification);
   }

}
