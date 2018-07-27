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
                        <li class="breadcrumb-item"><a href="#">Requests</a>
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
    <section id="configuration">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Pending Requests</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
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
                        <div class="card-body card-dashboard">
                            <table class="table table-striped table-bordered table-xs">
                                <thead>
                                <tr>
                                    <th>Date of Request</th>
                                    <th>Type of Shipment</th>
                                    <th>Requested By</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                {{--<tbody>--}}
                                {{--@foreach($quote as $quotes)--}}
                                {{--<tr>--}}
                                    {{--<td>{{$quotes->loadType}}</td>--}}
                                    {{--<td>{{$quotes->commodity}}</td>--}}
                                    {{--<td>{{$quotes->sender->address}}</td>--}}
                                    {{--<td>{{$quotes->sender->email}}</td>--}}


                                    {{--<td>{{$quotes->sender->city}}</td>--}}
                                {{--</tr>--}}
                                    {{--@endforeach--}}
                                {{--</tbody>--}}
                                <tbody>
                                @foreach($client as $senders)
                                    @foreach($senders->quotation as $quote)
                                        @foreach($quote->shiptypes as $shiptype)
                                        <tr>

                                            <td>{{$quote->created_at}}</td>
                                            <td>{!! \App\Shiptype::whereId($shiptype->pivot->shiptype_id)->first()->name; !!}</td>
                                            <td>{{$senders->firstName}} {{$senders->lastName}}</td>
                                            <td class="text-center">

                                                    <i class="ft-alert-octagon font-medium-2"></i>
                                                    <span>Pending</span>

                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-info mr-1 mb-1"  onclick="window.location='{{ route('quotations.show', $senders->id) }}'"><i class="la la-folder-open"></i>View Request</button>
                                            </td>


                                         </tr>
                                        @endforeach
                                    @endforeach
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Date of Request</th>
                                    <th>Type of Shipment</th>
                                    <th>Requested By</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
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
