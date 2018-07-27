@extends('admin.layouts.mainlayout')

@section('assets')
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Basic DataTables - Modern Admin - Clean Bootstrap 4 Dashboard HTML Template + Bitcoin
        Dashboard
    </title>
    <link rel="apple-touch-icon" href="{{URL::asset('app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('app-assets/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
          rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
          rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/css/vendors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/css/app.css')}}">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/css/pages/users.css')}}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/style.css')}}">
    <!-- END Custom CSS-->
@stop


@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
            <h3 class="content-header-title mb-0 d-inline-block">Quotations</h3>
            <div class="row breadcrumbs-top d-inline-block">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Quotations</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Details</a>
                        </li>

                    </ol>
                </div>
            </div>
        </div>
        <div class="content-header-right col-md-6 col-12">
            <div class="dropdown float-md-right">
                <button class="btn btn-danger dropdown-toggle round btn-glow px-2" id="dropdownBreadcrumbButton"
                        type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
                <div class="dropdown-menu" aria-labelledby="dropdownBreadcrumbButton"><a class="dropdown-item" href="#"><i class="la la-calendar-check-o"></i> Calender</a>
                    <a class="dropdown-item" href="#"><i class="la la-cart-plus"></i> Cart</a>
                    <a class="dropdown-item" href="#"><i class="la la-life-ring"></i> Support</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="la la-cog"></i> Settings</a>
                </div>
            </div>
        </div>
    </div>
    <section id="sizing">
        <div class="row">
            <div class="col-md-6">
                <div class="card">

                    <div class="card-content collapse show">
                        <div class="card-body">
                            <form class="form">
                                <div class="form-body">
                                    <h4 class="form-section"><i class="ft-user"></i> Shippers's Details</h4>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    <p class="float-right">{{$data->firstName}} {{$data->lastName}}</p>
                                                    Full Name
                                                </li>
                                                <li class="list-group-item">
                                                    <p class="float-right">{{$data->company}}</p>
                                                    Company
                                                </li>
                                                <li class="list-group-item">
                                                    <p class="float-right">{{$data->address}} {{$data->city}}</p>
                                                    Address
                                                </li>
                                                <li class="list-group-item">
                                                    <p class="float-right">{{$data->email}}</p>
                                                    Email
                                                </li>
                                                <li class="list-group-item">
                                                    <p class="float-right">{{$data->phone}}</p>
                                                    Phone
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header ">
                        <div class="card profile-card-with-cover">
                            <div class="card-content">
                                <!--<img class="card-img-top img-fluid" src="../../../app-assets/images/carousel/18.jpg" alt="Card cover image">-->
                                <div class="card-img-top img-fluid bg-cover height-200" style="background: url({{URL::asset('app-assets/images/backgrounds/fb.jpg')}}) 0 30%;"></div>
                                <div class="card-profile-image">
                                    <img src="{{URL::asset('app-assets/images/portrait/small/avatar-s-4.png')}}" class="rounded-circle img-border box-shadow-1"
                                         alt="Card image">
                                </div>
                                <div class="profile-card-with-cover-content text-center">
                                    <div class="profile-details mt-2">
                                        <h4 class="card-title">Linda Holland</h4>
                                        <ul class="list-inline clearfix mt-2">
                                            <li class="mr-3">
                                                <h2 class="block">3.5K</h2> Likes</li>
                                            <li class="mr-3">
                                                <h2 class="block">2845</h2> Followers</li>
                                            <li>
                                                <h2 class="block">645</h2> Following</li>
                                        </ul>
                                    </div>

                                </div>
                                <div>&nbsp</div>
                            </div>
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
    <script src="{{URL::asset('app-assets/vendors/js/tables/datatable/datatables.min.js')}}" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN MODERN JS-->
    <script src="{{URL::asset('app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('app-assets/js/core/app.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('app-assets/js/scripts/customizer.js')}}" type="text/javascript"></script>
    <!-- END MODERN JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{URL::asset('app-assets/js/scripts/tables/datatables/datatable-basic.js')}}"
            type="text/javascript"></script>
@stop
