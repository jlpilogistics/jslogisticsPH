@extends('layouts.master')
@section('styles')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Transport</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

    <!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Karla:400,700italic,700,400italic' rel='stylesheet' type='text/css'>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{URL::asset('app/css/font-awesome.min.css')}}" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{URL::asset('app/css/bootstrap.css')}}" />

    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app/rs-plugin/css/settings.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app/css/dropdown.css')}}" />

    <link rel="stylesheet" href="{{URL::asset('app/css/owl.carousel.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('app/css/global.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('app/css/style.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('app/css/homepage-4.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('app/css/responsive.css')}}" />
    <link href="{{URL::asset('app/css/skin.less')}}" rel="stylesheet/less">
@stop
@section('content')
<div class="container">
    <section id="section" class="spacetop">
    <!--Section box starts Here -->
        <div class="section">
            <div class="error-box ">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 center">
                            <img src="assets/images/error-image.png" alt="" />
                            <h1>Sorry the page not found</h1>
                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc</span>
                            <a href="index.html" class="button home-link">back to home page</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="query ">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-10">
                            <h5>DO YOU STILL HAVE A QUESTION REGARING OUR SERVICES?</h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc consequat elementum tempor. Duis porta lectus ut dui consequat.
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-2">
                            <a href="contact-us.html" class="contact-us button">contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
    <!--Section box ends Here -->
    @endsection
@section('scripts')
    <script type="text/javascript" src="{{URL::asset('app/js/jquery-1.11.3.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('app/js/less.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('app/js/owl.carousel.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('app/js/jquery.selectbox-0.2.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('app/js/parallax.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('app/js/revolution-home-4.js')}}"></script>
    <script src="{{URL::asset('app/js/script.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{URL::asset('app/js/site.js')}}"></script>
@stop