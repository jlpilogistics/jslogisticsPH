@extends('layouts.auth')

@section('assets')
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Jexsan Logistics Login</title>
    <link rel="apple-touch-icon" href="{{URL::asset('app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('app-assets/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
          rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
          rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/css/vendors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/vendors/css/forms/icheck/icheck.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/vendors/css/forms/icheck/custom.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/css/app.css')}}">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/css/pages/login-register.css')}}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/style.css')}}">
@stop
@section('content')

    <section class="flexbox-container">
        <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 box-shadow-2 p-0">
                <div class="card border-grey border-lighten-3 m-0">
                    <div class="card-header border-0">
                        <div class="card-title text-center">
                            <div class="">
                                <img height="75" src="{{URL::asset('app-assets/images/logo/Jexsan.png')}}" alt="branding logo">
                            </div>
                        </div>
                        <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                            <span>Login Using Account Details</span>
                        </h6>
                    </div>
                    <div class="card-content">
                        <div class="card-body pt-0">
                            <form class="form-horizontal" method="POST" action="{{ route('admin.login.submit') }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <fieldset class="form-group floating-label-form-group">
                                        <label for="email">Employee ID</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Employee ID" value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                        @endif
                                    </fieldset>
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <fieldset class="form-group floating-label-form-group mb-1">
                                        <label for="user-password">Enter Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                         </span>
                                        @endif
                                    </fieldset>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6 col-12 text-center text-sm-left">
                                        <fieldset>
                                            <input type="checkbox" name="remember" class="chk-remember">
                                            <label for="remember-me"> Remember Me</label>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 col-12 float-sm-left text-center text-sm-right"><a href="{{ url('/password/reset') }}" class="card-link">Forgot Password?</a></div>
                                </div>
                                <button type="submit" class="btn btn-outline-info btn-block"><i class="ft-unlock"></i> Login</button>
                            </form>
                        </div>
                        <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1">
                            <span>Request for an Admin Account ?</span>
                        </p>
                        <div class="card-body">
                            <a href="register-with-bg.html" class="btn btn-outline-danger btn-block"><i class="ft-user"></i> Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@stop

@section('scripts')
    <script src="{{URL::asset('app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{URL::asset('app-assets/vendors/js/forms/icheck/icheck.min.js')}}" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN MODERN JS-->
    <script src="{{URL::asset('app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('app-assets/js/core/app.js')}}" type="text/javascript"></script>
    <!-- END MODERN JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{URL::asset('app-assets/js/scripts/forms/form-login-register.js')}}" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
@endsection