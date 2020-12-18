<!DOCTYPE html>

<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Adventure tour</title>
        <meta name="description" content="">
<!--
Travel Template
http://www.templatemo.com/tm-409-travel
-->
        <meta name="viewport" content="width=device-width">
		<meta name="author" content="templatemo">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600,300' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/font-awesome.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/templatemo_misc.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/templatemo_style.css')}}">

        <script src="{{asset('public/frontend/js/vendor/modernizr-2.6.1-respond-1.1.0.min.js')}}"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="{{asset('public/frontend/')}}http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <div class="site-header">
            <div class="container">
                <div class="main-header">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-10">
                            <div class="logo">
                                <a href="#">
                                    <img src="{{asset('public/frontend/images/logo.png')}}" alt="travel html5 template" title="travel html5 template">
                                </a>
                            </div> <!-- /.logo -->
                        </div> <!-- /.col-md-4 -->
                        <div class="col-md-8 col-sm-6 col-xs-2">
                            <div class="main-menu">
                                <ul class="visible-lg visible-md">
                                    <li class="active"><a href="{{url('/')}}">Home</a></li>
                                    <li><a href="{{url('services')}}">Services</a></li>
                                    <li><a href="{{url('events')}}">Events</a></li>
                                    <li><a href="{{url('about')}}">About Us</a></li>
                                    <li><a href="{{url('contact')}}">Contact</a></li>
                                </ul>
                                <a href="#" class="toggle-menu visible-sm visible-xs">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </div> <!-- /.main-menu -->
                        </div> <!-- /.col-md-8 -->
                    </div> <!-- /.row -->
                </div> <!-- /.main-header -->
                <div class="row">
                    <div class="col-md-12 visible-sm visible-xs">
                        <div class="menu-responsive">
                            <ul>
                                <li class="active"><a href="index.html">Home</a></li>
                                <li><a href="{{asset('services')}}">Services</a></li>
                                <li><a href="events.html">Events</a></li>
                                <li><a href="{{asset('about')}}">About Us</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div> <!-- /.menu-responsive -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.site-header -->
