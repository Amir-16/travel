<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Contact;

class ContactController extends Controller
{
    public function index(){
    $data['allData']=Contact::all();
    //dd($data['allData']);
    return view('backend.contact.view-contact',$data);

  }

  public function add(){
    return view('backend.contact.add-contact');
  }

  public function store(Request $request){

    $data =new Contact();
    $data->created_by=Auth::user()->id;
    $data->address=$request->address;
    $data->mobile_no =$request->mobile_no;
    $data->email =$request->email;
    $data->facebook =$request->facebook;
    $data->twitter =$request->twitter;
    $data->youtube =$request->youtube;
    $data->google_plus =$request->google_plus;
    $data->save();
    $notification=array(
                          'message'=>'Service Successfully Added',
                          'alert-type'=>'success'
                           );
                           return redirect()->route('contacts.view')->with($notification);

  }

  public function edit($id) {
    $editData=Contact::find($id);
  return view('backend.contact.edit-contact',compact('editData'));
  //  dd($editData);

  }
  public function update(Request $request,$id){

    $data=Contact::find($id);
    $data->updated_by =Auth::user()->id;
    $data->address=$request->address;
    $data->mobile_no =$request->mobile_no;
    $data->email =$request->email;
    $data->facebook =$request->facebook;
    $data->twitter =$request->twitter;
    $data->youtube =$request->youtube;
    $data->google_plus =$request->google_plus;
    $data->save();
    $notification=array(
                        'message'=>'Contact Updated successfully',
                        'alert-type'=>'success'
                        );
                  return redirect()->route('contacts.view')->with($notification);
  }

  public function delete($id){
    $contact=Contact::find($id);
    $contact->delete();
    $notification=array(
                      	'message'=>'Services  Deleted!',
                        'alert-type'=>'error'
                      );
                    return redirect()->route('contacts.view')->with($notification);
  }

}
