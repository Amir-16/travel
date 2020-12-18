<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function index(){
    //  dd('ok');
      return view('frontend.index');
    }

    public function services(){
      return view('frontend.Services');
    }

    public function contact(){
      return view('frontend.contact');
    }
    public function about(){
      return view('frontend.about');
    }
    public function events(){
      return view('frontend.events');
    }

}
