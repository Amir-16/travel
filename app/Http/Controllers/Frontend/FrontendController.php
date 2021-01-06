<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Logo;
use App\Model\Slider;
use App\Model\Mission;
use App\Model\Vision;
use App\Model\NewsEvent;
use App\Model\Service;
use App\Model\About;
use App\Model\Contact;
use App\Model\Communicate;
use Mail;
class FrontendController extends Controller
{

    public function index(){
      $data['logo']=Logo::first();
      $data['sliders']=Slider::all();
      $data['mission']=Mission::first();
      $data['contact']=Contact::first();
      $data['vision'] =Vision::first();
      $data['newsEvents']=NewsEvent::orderby('id','desc')->get();
      $data['services'] =Service::all();
      return view('frontend.index',$data);
    }

    public function contact(){
      $data['logo']=Logo::first();
      $data['abouts'] =About::first();
       $data['contact']=Contact::first();
      return view('frontend.contact',$data);
    }

    public function about(){
      $data['logo']=Logo::first();
      $data['abouts'] =About::first();
       $data['contact']=Contact::first();
      return view('frontend.about',$data);
    }

    public function mission(){
      $data['logo']=Logo::first();
      $data['abouts'] =About::first();
       $data['contact']=Contact::first();
       $data['mission']=Mission::first();
      return view('frontend.mision',$data);
    }

    public function vision(){
      $data['logo']=Logo::first();
      $data['abouts'] =About::first();
       $data['contact']=Contact::first();
       $data['vision']=Vision::first();
      return view('frontend.vision',$data);
    }

    public function store(Request  $request){
      $obj =new Communicate();
      $obj->name =$request->name;
      $obj->email =$request->email;
      $obj->mobile_no=$request->mobile_no;
      $obj->address =$request->address;
      $obj->msg= $request->msg;
      $obj->save();


      $data =array(

        'name' => $request->name,
        'email' => $request->email,
        'mobile_no' => $request->mobile_no,
        'address' => $request->address,
        'msg' => $request->msg,

      );

      Mail::send('frontend.emails.contact',$data,function($message) use($data){

        $message->from('greenfitter516@gmail.com','Data Science');
        $message->to($data['email']);
        $message->subject('Thanks for contact us');

      });

      return redirect()->back()->with('success','Your message successfully sent we will contact with you');

    }

}
