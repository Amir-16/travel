@extends('frontend.layouts.master')

@section('content')

<!-- Banner Section -->
<section class="banner_part">
  <img src="{{asset('public/frontend/image/banner.jpg')}}" style="width: 100%">
</section>

<!-- About us Section -->
<section class="about_us">
  <div class="container">
    <div class="row">
      <div class="col-md-10">
          <img src="{{asset('public/upload/vision_images/'.$vision->image)}}" style="border: 1px solid #ddd;padding: 5px;background: #EFEE03;border-radius: 30px;float: left;margin-right: 10px;">
          <p style="text-align: justify;"><strong>Vision</strong> {{$vision->title}} </p>
        </div>
    </div>
  </div>
</section>

@endsection
