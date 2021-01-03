@extends('frontend.layouts.master')

@section('content')

@php
$count=0;
@endphp

  <!-- Slider Section -->
  <section class="slider_part">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          @foreach($sliders as $key=>$slider)
          <li data-target="#carouselExampleIndicators" data-slide-to="$key" class="active"></li>
          @endforeach
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          @foreach($sliders as $slider)
          <div class="carousel-item @if($count==0){ active } @endif" style="background-image: url({{asset('public/upload/slider_images/'.$slider->image)}})">
            <div class="carousel-caption d-none d-md-block">
              <h2 class="display-4">{{$slider->short_title}}</h2>
              <p class="lead">{{$slider->long_title}}</p>
            </div>
          </div>
          @php
          $count++
          @endphp

          @endforeach
          
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
    </div>
  </section>
  <!-- Mission and Vision -->
  <section class="mission_vision">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h3 style="padding-top: 15px;padding-bottom: 5px;border-bottom: 1px solid #000000; width: 70%;">Mission and Vision</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <img src="{{asset('public/upload/mission_image/' .$mission->image)}}" style="border: 1px solid #ddd;padding: 5px;background: #EFEE03;border-radius: 30px;float: left;margin-right: 10px;">
          <p style="text-align: justify;"><strong>Mission</strong> {{$mission->title}} </p>
        </div>
        <div class="col-md-6">
          <img src="{{asset('public/upload/vision_images/'.$vision->image)}}" style="border: 1px solid #ddd;padding: 5px;background: #EFEE03;border-radius: 30px;float: left;margin-right: 10px;">
          <p style="text-align: justify;"><strong>Vision</strong> {{$vision->title}} </p>
        </div>
      </div>
    </div>
  </section>
  <!-- News and Events -->
  <section class="nesw_events" style="background: #ddd">
    <div class="container">
      <div class="row">
        <div class="col-md-3" style="padding-top: 15px;">
          <h3 style="border-bottom: 1px solid #000;width: 85%">News and Events</h3>
        </div>
        <div class="col-md-9" style="padding-top: 15px;">
          <table class="table table-striped table-bordered table-hover table-md table-warning">
            <thead class="thead-dark">
              <tr>
                <th>SL</th>
                <th>Date</th>
                <th>Image</th>
                <th>Title</th>
                <th>Details</th>
              </tr>
            </thead>
            <tbody>
              @foreach($newsEvents as $key=>$newsevent)
              <tr>
                <td>{{$key+1}}</td>
                <td>{{$newsevent->date}}</td>
                <td><img src="{{asset('public/upload/news_images/'.$newsevent->image)}}"></td>
                <td>{{$newsevent->short_title}}</td>
                <td>{{$newsevent->long_title}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
  <!-- Services -->
  <section class="our_services">
    <div class="container" style="padding-top: 15px">
      <!-- Nav tab -->
      
      <ul class="nav nav-tabs">
         @php 
        $count=0;
        @endphp
        @foreach($services as $service)
        <li class="nav-item">
          <a href="#{{$service->id}}" class="nav-link @if($count==0) { active } @endif" data-toggle="tab">{{$service->short_title}}</a>
        </li>
         @php
        $count++;
        @endphp
        @endforeach
      </ul>
      <!-- Tab Content -->
      
      <div class="tab-content">
        @php 
        $count=0;
        @endphp
        @foreach($services as $service)
                <div id="{{$service->id}}" class="container tab-pane @if($count ==0) { active } @endif">
                  <h3>{{$service->short_title}}</h3>
                  <p>{{$service->long_title}}</p>
                </div>

        @php
        $count++;
        @endphp
        @endforeach
      </div>
      
    </div>
    
  </section>


@endsection
