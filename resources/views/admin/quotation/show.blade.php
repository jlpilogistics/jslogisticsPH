@extends('admin.layouts.mainlayout')

@section('assets')
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Admin-Jexsan Logistics
    </title>
    <link rel="apple-touch-icon" href="{{URL::asset('app-assets/images/logo/Jexsan.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('app-assets/images/logo/Jexsan.png')}}">
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
            <h3 class="content-header-title mb-0 d-inline-block">Striped Label Forms</h3>
            <div class="row breadcrumbs-top d-inline-block">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Form Layouts</a>
                        </li>
                        <li class="breadcrumb-item active"><a href="#">Striped Label Forms</a>
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
    <div class="content-body">
        <!-- Striped label form layout section start -->
        <section id="striped-label-form-layouts">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="striped-label-layout-icons">Timesheet</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <div class="card-text">
                                    <p>Add <code>.striped-labels</code> to form tag to add striped
                                        labels. In this example icons are used with form controls
                                        to show the striped labels functionality.</p>
                                </div>
                                <form class="form form-horizontal striped-labels form-bordered">
                                    <div class="form-body">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="timesheetinput1">Employee Name</label>
                                            <div class="col-md-9">
                                                <div class="position-relative has-icon-left">
                                                    <input type="text" id="timesheetinput1" class="form-control" placeholder="employee name"
                                                           name="employeename">
                                                    <div class="form-control-position">
                                                        <i class="la la-user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="timesheetinput2">Project Name</label>
                                            <div class="col-md-9">
                                                <div class="position-relative has-icon-left">
                                                    <input type="text" id="timesheetinput2" class="form-control" placeholder="project name"
                                                           name="projectname">
                                                    <div class="form-control-position">
                                                        <i class="la la-briefcase"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="timesheetinput3">Date</label>
                                            <div class="col-md-9">
                                                <div class="position-relative has-icon-left">
                                                    <input type="date" id="timesheetinput3" class="form-control" name="date">
                                                    <div class="form-control-position">
                                                        <i class="la la-calendar"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control">Rate Per Hour</label>
                                            <div class="col-md-9">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">$</span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Rate Per Hour" aria-label="Amount (to the nearest dollar)"
                                                           name="rateperhour">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="timesheetinput5">Start Time</label>
                                            <div class="col-md-9">
                                                <div class="position-relative has-icon-left">
                                                    <input type="time" id="timesheetinput5" class="form-control" name="starttime">
                                                    <div class="form-control-position">
                                                        <i class="la la-clock"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="timesheetinput6">End Time</label>
                                            <div class="col-md-9">
                                                <div class="position-relative has-icon-left">
                                                    <input type="time" id="timesheetinput6" class="form-control" name="endtime">
                                                    <div class="form-control-position">
                                                        <i class="la la-clock"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row last">
                                            <label class="col-md-3 label-control" for="timesheetinput7">Notes</label>
                                            <div class="col-md-9">
                                                <div class="position-relative has-icon-left">
                                                    <textarea id="timesheetinput7" rows="5" class="form-control" name="notes" placeholder="notes"></textarea>
                                                    <div class="form-control-position">
                                                        <i class="la la-file"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions right">
                                        <button type="button" class="btn btn-warning mr-1">
                                            <i class="la la-remove"></i> Cancel
                                        </button>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="la la-check"></i> Save
                                        </button>
                                    </div>
                                </form>
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
