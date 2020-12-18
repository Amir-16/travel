@extends('frontend.layouts.master')

@section('content')

<div class="page-top" id="templatemo_events">
</div> <!-- /.page-header -->

<div class="middle-content">
    <div class="container">

        <div class="row"><!-- first row -->

          <div class="col-md-4"><!-- first column -->

                <div class="widget-item">

                    <h3 class="widget-title">Upcoming Events</h3>
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-rocket"></i>
                        </div> <!-- /.service-icon -->
                      <div class="service-content">
                        <h4>Tour Promotion</h4>
                          <p>Change icons by <a rel="nofollow" href="http://fontawesome.info/font-awesome-icon-world-map/">Font Awesome</a> (version 4). Example: <strong>&lt;i class=&quot;fa fa-rocket&quot;&gt;&lt;/i&gt;</strong></p>
                        </div>
                        <!-- /.service-content -->
                    </div> <!-- /.service-item -->

                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-trophy"></i>
                        </div> <!-- /.service-icon -->
                        <div class="service-content">
                            <h4>Europe Tour</h4>
                            <p>Nunc aliquam vestibulum veliesat, et aliquet lorem aliquet nec. Sed orsum rhoncus.</p>
                        </div> <!-- /.service-content -->
                    </div> <!-- /.service-item -->

                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-heart"></i>
                        </div> <!-- /.service-icon -->
                        <div class="service-content">
                            <h4>Tour to Asia</h4>
                            <p>Nunc aliquam vestibulum veliesat, et aliquet lorem aliquet nec. Sed orsum rhoncus.</p>
                        </div> <!-- /.service-content -->
                    </div> <!-- /.service-item -->

                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-globe"></i>
                        </div> <!-- /.service-icon -->
                        <div class="service-content">
                            <h4>New Adventure</h4>
                            <p>Nunc aliquam vestibulum veliesat, et aliquet lorem aliquet nec. Sed orsum rhoncus.</p>
                        </div> <!-- /.service-content -->
                    </div> <!-- /.service-item -->

                </div> <!-- /.widget-item -->

            </div> <!-- /.col-md-4 -->

            <div class="col-md-4"><!-- second column -->
                <div class="widget-item">
                    <h3 class="widget-title">Tour Event</h3>
                    <div class="sample-thumb">
                        <img src="{{asset('public/frontend/images/event_1.jpg')}}" alt="New Event" title="New Event">
                    </div> <!-- /.sample-thumb -->
                    <h4 class="consult-title">Donec auctor iaculis libero</h4>
                    <p>Cras mollis bibendum fringilla. Donec malesuada convallis ligula, iaculis tincidunt massa tempus at. Interdum et fames ac ante ipsum primis in faucibus. Aliquam justo lectus, fermentum vitae libero. <br><br>Vestibulum congue lorem odio, at sodales nisi luctus quis. Suspendisse suscipit ligula libero, id consectetur magna dictum sed.</p>
                </div> <!-- /.widget-item -->
            </div> <!-- /.col-md-4 -->

            <div class="col-md-4"><!-- third column -->
                <div class="widget-item">
                    <h3 class="widget-title">Special Eve</h3>
                    <div class="sample-thumb">
                        <img src="{{asset('public/frontend/images/event_2.jpg')}}" alt="Special Eve" title="Special Eve">
                    </div> <!-- /.sample-thumb -->
                    <h4 class="consult-title">Donec auctor iaculis libero ut ullamcorper</h4>
                    <p> Aenean in lacus ut ligula fermentum congue. Etiam et urna sodales, pellentesque leo non, volutpat lorem. Pellentesque aliquam turpis venenatis libero fermentum, in blandit nisl aliquam.<br><br>Vestibulum congue lorem odio, at sodales nisi luctus quis. Suspendisse suscipit ligula libero, id consectetur magna dictum sed.</p>
                </div> <!-- /.widget-item -->
            </div> <!-- /.col-md-4 -->



        </div> <!-- /.row first -->

        <div class="row"><!-- second row -->

          <div class="col-md-4"><!-- first column -->
                <div class="widget-item">
                    <h3 class="widget-title">Attractions</h3>
                    <div class="sample-thumb">
                        <img src="{{asset('public/frontend/images/event_3.jpg')}}" alt="New Event" title="New Event">
                    </div> <!-- /.sample-thumb -->
                    <h4 class="consult-title">Donec auctor iaculis libero ut ullamcorper</h4>
                    <p>Suspendisse id felis ac orci dignissim efficitur non eget elit. Maecenas lacinia sodales aliquet. Maecenas consequat orci et neque convallis volutpat.<br><br>Vestibulum congue lorem odio, at sodales nisi luctus quis. Suspendisse suscipit ligula libero, id consectetur magna dictum sed.</p>
                </div> <!-- /.widget-item -->
            </div> <!-- /.col-md-4 -->

            <div class="col-md-4"><!-- second column -->
                <div class="widget-item">
                    <h3 class="widget-title">Promotions</h3>
                    <div class="sample-thumb">
                        <img src="{{asset('public/frontend/images/event_4.jpg')}}" alt="New Event" title="New Event">
                    </div> <!-- /.sample-thumb -->
                    <h4 class="consult-title">Donec auctor iaculis libero ut ullamcorper</h4>
                    <p>Interdum et fames ac ante ipsum primis in faucibus. Aliquam justo lectus, fermentum vitae libero, tincidunt accumsan magns. <br><br>Suspendisse id felis ac orci dignissim efficitur non eget elit. Maecenas lacinia sodales aliquet. Maecenas consequat orci et neque convallis volutpat.</p>
                </div> <!-- /.widget-item -->
            </div> <!-- /.col-md-4 -->

            <div class="col-md-4"><!-- third column -->
                <div class="widget-item">
                    <h3 class="widget-title">Best Hotels</h3>
                    <div class="sample-thumb">
                        <img src="{{asset('public/frontend/images/event_5.jpg')}}" alt="Special Eve" title="Special Eve">
                    </div> <!-- /.sample-thumb -->
                    <h4 class="consult-title">Donec auctor iaculis libero ut ullamcorper</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus id laoreet nibh. Quisque at feugiat magna. Nulla tincidunt nisi vitae ante consectetur commodo.<br><br>Fusce pharetra viverra commodo. Maecenas at iaculis quam. Praesent quis dui vitae erat sollicitudin aliquet.</p>
                </div> <!-- /.widget-item -->
            </div> <!-- /.col-md-4 -->



        </div> <!-- /.row second -->

    </div> <!-- /.container -->
</div> <!-- /.middle-content -->

@endesection
