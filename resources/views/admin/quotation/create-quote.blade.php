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
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/vendors/css/forms/selects/select2.min.css')}}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/style.css')}}">
    <!-- END Custom CSS-->
@stop

@section('content')
    <section id="horizontal-form-layouts ">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">Create a Quote</h3>

            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="dropdown float-md-right">
                    <button class="btn btn-danger dropdown-toggle round btn-glow px-2" id="dropdownBreadcrumbButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownBreadcrumbButton"><a class="dropdown-item" href="#"><i class="la la-calendar-check-o"></i> Calender</a>
                        <a class="dropdown-item" href="#"><i class="la la-cart-plus"></i> Cart</a>
                        <a class="dropdown-item" href="#"><i class="la la-life-ring"></i> Support</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="la la-cog"></i> Settings</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-head">
                    <div class="card-header">
                        <h4 class="card-title">Quote #12314 details</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    </div>
                    <div class="px-1">
                        <ul class="list-inline list-inline-pipe text-left border-bottom-grey border-bottom-lighten-3">
                            <li>Request a Quote on:
                                <span class="text-muted">December 14, 1996 @ 4:04 pm</span>
                            </li>
                            <li>Status:
                                <span class="text-muted">Pending</span>
                            </li>

                            <li><a href="#" class="text-muted" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Export as PDF"><i class="la la-file-pdf-o"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                        <form class="form form-horizontal" method="post" action="{{action('QuotesController@store')}}">
                            {{csrf_field()}}
                            <div class="form-body">
                                <h4 class="form-section"><i class="la la-eye"></i> Quote to:</h4>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-md-4 label-control" for="userinput1">Name</label>
                                            <div class="col-md-8">
                                                <input type="text" id="userinput1" class="form-control border-primary" placeholder="First Name"
                                                       name="firstname">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-md-4 label-control" for="userinput2">Date Quoted</label>
                                            <div class="col-md-8">
                                                <input type="date" id="userinput2" class="form-control border-primary" placeholder="Last Name"
                                                       name="lastname">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">~
                                        <div class="form-group row">
                                            <label class="col-md-4 label-control" for="userinput2">Quote ID</label>
                                            <div class="col-md-8">
                                                <input type="text" id="userinput2" class="form-control border-primary" placeholder="Last Name"
                                                       name="lastname">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-md-4 label-control" for="userinput1">Email Address</label>
                                            <div class="col-md-8">
                                                <input type="text" id="userinput1" class="form-control border-primary" placeholder="First Name"
                                                       name="firstname">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-md-4 label-control" for="userinput3">Valid Until</label>
                                            <div class="col-md-8">
                                                <input type="date" id="userinput3" class="form-control border-primary" placeholder="Username"
                                                       name="username">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-md-4 label-control" for="userinput4">Nick Name</label>
                                            <div class="col-md-8">
                                                <input type="text" id="userinput4" class="form-control border-primary" placeholder="Nick Name"
                                                       name="nickname">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="form-section"><i class="ft-mail"></i> Charges/Rates</h4>
                                    <table class="table mb-0">
                                        <thead class="bg-teal bg-lighten-4">
                                            <tr>
                                                    <th >Currency</th>
                                                    <th>Charges</th>
                                                    <th>Amount</th>
                                                    <th>Unit</th>
                                                    <th style="padding-right: 80px;">Total</th>
                                                    <th>

                                                    </th>
                                                </tr>
                                        </thead>
                                    </table>
                                <div class="repeater-default" style="padding-top: 25px;">
                                    <div data-repeater-list="car">
                                        <div data-repeater-item>
                                            <div class="row">

                                                <div class="form-group mb-1 col-xs-12 col-md-2">
                                                    <select name="currency" class="form-control">
                                                        <option selected="true" disabled value="">Currency</option>
                                                        @foreach($currency as $key=>$val)
                                                            <option value="{{$val}}">{{$key}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div id="fuck " class="mb-1 col-sm-12 col-md-3">
                                                    <div class="form-group">
                                                        {!! Form::select('charge', $charges, null,['class'=>'form-control charge', 'id'=>'charge']) !!}
                                                    </div>
                                                </div>
                                                <div class="form-group mb-1 col-sm-12 col-md-2">
                                                    <textarea class="form-control" id="bio" rows="1"></textarea>
                                                </div>
                                                <div class="skin skin-flat form-group mb-1 col-sm-12 col-md-2">
                                                    {!! Form::select('charge', $charges, null,['class'=>'form-control charge', 'id'=>'charge']) !!}
                                                </div>
                                                <div class="form-group mb-1 col-sm-12 col-md-2">
                                                    <input type="text" class="form-control amount" id="amount">
                                                </div>
                                                <div class="form-group mb-1 col-sm-12 col-md-1">
                                                    <button type="button" class="btn btn-danger" data-repeater-delete> <i class="ft-x"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-7 col-sm-12 text-center text-md-left">
                                        </div>
                                        <div class="col-md-5 col-sm-12">
                                            <p class="lead">Total amount</p>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tbody>
                                                    <tr>
                                                        <td>Sub Total</td>
                                                        <td class="text-right">$ 14,900.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>TAX (12%)</td>
                                                        <td class="text-right">$ 1,788.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold-800">Total</td>
                                                        <td class="text-bold-800 text-right"> $ 16,688.00</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group overflow-hidden">
                                        <div class="col-12">
                                            <button type="button" data-repeater-create class="btn btn-primary">
                                                <i class="ft-plus"></i> Add
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="form-actions right">
                                <button type="button" class="btn btn-warning mr-1">
                                    <i class="ft-x"></i> Cancel
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    <i class="la la-check-square-o"></i> Save
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
    <script type="text/javascript" src="{{URL::asset('app/js/jquery-1.11.1.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('app/js/jquery-1.11.3.min.js')}}"></script>
    <script src="{{URL::asset('app-assets/vendors/js/forms/repeater/jquery.repeater.min.js')}}"
            type="text/javascript"></script>
    <!-- BEGIN MODERN JS-->
    <script src="{{URL::asset('app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('app-assets/js/core/app.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('app-assets/js/scripts/customizer.js')}}" type="text/javascript"></script>
    <!-- END MODERN JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{URL::asset('app-assets/js/scripts/tables/datatables/datatable-basic.js')}}"
            type="text/javascript"></script>

    <script src="{{URL::asset('app-assets/js/scripts/forms/select/form-select2.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('app-assets/js/scripts/forms/form-repeater.js')}}"  type="text/javascript"></script>
    <script>

        // $(".row").on('change',"#charge",function() {
        //     $.ajax({
        //         url: '/charges/' + $(this).val(),
        //         type: 'get',
        //         data: {},
        //         success: function(data) {
        //
        //             if (data.success == true) {
        //                 $("[car]").closest(".form-group").find('#amount').val(data.info);
        //
        //             } else {
        //                 alert('Cannot find info');
        //             }
        //
        //
        //         },
        //         error: function(jqXHR, textStatus, errorThrown) {}
        //     });
        // });

    </script>

@stop