@section('div_class', 'homepage error-page')
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
    <link rel="stylesheet" href="{{URL::asset('app/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{URL::asset('app/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('app/css/auth-elements.css')}}">
    <link rel="stylesheet" href="{{URL::asset('app/css/auth-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app/rs-plugin/css/settings.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app/css/dropdown.css')}}" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Bootstrap -->

    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/dropdown.css')}}" />
    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/rs-plugin/css/settings.css')}}" media="screen" />

    <link rel="stylesheet" href="{{URL::asset('app/css/owl.carousel.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('app/css/global.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('app/css/style.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('app/css/homepage-4.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('app/css/responsive.css')}}" />
    <link href="{{URL::asset('app/css/skin.less')}}" rel="stylesheet/less">

@stop
@section('content')
    <!--header Section Ends Here -->
    <!--Section area starts Here -->
    <section id="section" class="spacetop">
        <!--Section box starts Here -->
        <div class="section" style="background-image: url('{{url('/app/images/MOTW.jpg')}}');background-repeat: no-repeat;background-size: cover">
            <div class="top-content">
                <div class="inner-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6" >
                                <div class="banner-text"  >
                                    <div class="form-box"  >
                                        {{--<h2  style="position: relative;bottom: 5px; height: 200px; width: 50%;">Sign Up now--}}
                                        {{--and--}}
                                        {{--be a part of our journey</h2>--}}
                                    </div>

                                </div>
                            </div>

                            <div class="col-sm-5">
                                <div class="form-box">
                                    <div class="form-top">
                                        <div class="form-top-left">
                                            <h3>Login to our site</h3>
                                            <p>Enter username and password to log on:</p>
                                        </div>
                                        <div class="form-top-right">
                                            <i class="fa fa-key"></i>
                                        </div>
                                    </div>
                                    <div class="form-bottom">
                                        @if (session('status'))
                                            <div class="alert alert-success">
                                                {{ session('status') }}
                                            </div>
                                        @endif
                                        @if (session('warning'))
                                            <div class="alert alert-warning">
                                                {{ session('warning') }}
                                            </div>
                                        @endif
                                            @if ($errors->has('password'))
                                                <div class="alert alert-warning">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </div>
                                            @endif
                                            @if ($errors->has('email'))
                                                <div class="alert alert-warning">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </div>
                                            @endif

                                        <form role="form" action="{{route('user.login.submit')}}" method="post" class="login-form">
                                            {{ csrf_field() }}
                                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                            <div class="form-group">
                                                <label class="sr-only" for="form-username">Email Address</label>
                                                <input type="text" name="email" placeholder="Email Address ..." class="form-username form-control" value="{{ old('email') }}" id="form-username">

                                            </div>
                                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <div class="form-group">
                                                <label class="sr-only" for="form-password">Password</label>
                                                <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">

                                            </div>
                                            <button type="submit" class="btn">Sign in!</button>
                                        </form>
                                    </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <!--Section box ends Here -->

    </section>
@stop
<!--Section area ends Here -->
<!--Footer area starts Here -->

<!--Footer area ends Here -->


<!--Wrapper Section ends Here -->
@section('scripts')
    <script type="text/javascript" src="{{URL::asset('app/js/jquery-1.11.3.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('app/js/less.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('app/js/owl.carousel.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('app/js/jquery.selectbox-0.2.min.js')}}"></script>

    <script src="{{URL::asset('app/js/script.js" type="text/javascript')}}"></script>
    <script type="text/javascript" src="{{URL::asset('app/js/site.js')}}"></script>
    <script src="{{URL::asset('app/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('app/js/scripts.js')}}"></script>

    <!--[if lt IE 10]>

    <![endif]-->
@stop