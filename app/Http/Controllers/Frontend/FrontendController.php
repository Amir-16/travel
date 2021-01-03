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

}
