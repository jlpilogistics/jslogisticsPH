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
        <div class="section">
            <div class="top-content">

                <div class="inner-bg">
                    <div class="container">


                        <div class="row">
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
                                        <form role="form" action="" method="post" class="login-form">
                                            <div class="form-group">
                                                <label class="sr-only" for="form-username">Username</label>
                                                <input type="text" name="form-username" placeholder="Username..." class="form-username form-control" id="form-username">
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only" for="form-password">Password</label>
                                                <input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
                                            </div>
                                            <button type="submit" class="btn">Sign in!</button>
                                        </form>
                                    </div>
                                </div>

                            </div>




                            <div class="col-sm-7">

                                <div class="form-box">
                                    <div class="form-top">
                                        <div class="form-top-left">
                                            <h3>Sign up now</h3>
                                            <p>Fill in the form below to get instant access:</p>
                                        </div>
                                        <div class="form-top-right">
                                            <i class="fa fa-pencil"></i>
                                        </div>
                                    </div>
                                    <div class="form-bottom">
                                        <form role="form" action="" method="post" class="registration-form">
                                            <div class="form-group row">
                                                <div class=" col-xs-12 col-sm-6 right-space">
                                                    <label class="sr-only" for="form-first-name">First name</label>
                                                    <input type="text" name="form-first-name" placeholder="First name..." class="form-first-name form-control" id="form-first-name">
                                                </div>
                                                <div class=" col-xs-12 col-sm-6 right-space">
                                                    <label class="sr-only" for="form-last-name">Last name</label>
                                                    <input type="text" name="form-last-name" placeholder="Last name..." class="form-last-name form-control" id="form-last-name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class=" col-xs-12 col-sm-6 right-space">
                                                    <label class="sr-only" for="form-email">Email</label>
                                                    <input type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email">
                                                </div>
                                                <div class=" col-xs-12 col-sm-6 right-space">
                                                    <label class="sr-only" for="form-number">Phone Number</label>
                                                    <input type="text" name="form-number" placeholder="Phone Number"
                                                           class="form-about-yourself form-control" id="form-number">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only" for="form-company">Company</label>
                                                <input type="text" name="form-company" placeholder="Company Name" class="form-email form-control" id="form-company">
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only" for="form-address">Billing Address</label>
                                                <input type="text" name="form-address" placeholder="Address" class="form-email form-control" id="form-address">
                                            </div>
                                            <div class="form-group row">
                                                <div class=" col-xs-12 col-sm-4 right-space">
                                                    <label class="sr-only" for="form-zip">Zip Code</label>
                                                    <input type="text" name="form-zip" placeholder="Zip Code" class="form-email form-control" id="form-zip">
                                                </div>
                                                <div class=" col-xs-12 col-sm-4 right-space">
                                                    <label class="sr-only" for="form-city">City</label>
                                                    <input type="text" name="form-city" placeholder="City ..."
                                                           class="form-about-yourself form-control" id="form-city">
                                                </div>
                                                <div class=" col-xs-12 col-sm-4 right-space">
                                                    <label class="sr-only" for="form-country">Country</label>
                                                    <input type="text" name="form-country" placeholder="Country ..."
                                                           class="form-about-yourself form-control" id="form-country">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only" for="form-password">Password</label>
                                                <input type="text" name="form-password" placeholder="Password ..." class="form-email form-control" id="form-password">
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only" for="form-confirm">Confirm Password</label>
                                                <input type="text" name="form-confirm" placeholder="Confirm Password .." class="form-email form-control" id="form-confirm">
                                            </div>

                                            <button type="submit" class="btn">Sign me up!</button>
                                        </form>
                                    </div>
                                </div>

                            </div>
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