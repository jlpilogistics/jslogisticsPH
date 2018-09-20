@extends('admin.layouts.mainlayout')
@section('assets')
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Account Admin
    </title>
    <link rel="apple-touch-icon" href="{{URL::asset('app-assets/images/logo/Jexsan.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('app-assets/images/logo/Jexsan.png')}}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
          rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
          rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/css/vendors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/vendors/css/weather-icons/climacons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/fonts/meteocons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/vendors/css/charts/morris.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/vendors/css/charts/chartist.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/vendors/css/charts/chartist-plugin-tooltip.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/css/app.css')}}">
    <!-- END MODERN CSS-->

    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/vendors/css/charts/morris.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/fonts/simple-line-icons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/css/core/colors/palette-gradient.css')}}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/style.css')}}">
    <!-- END Custom CSS-->
@stop

@section('content')
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h3 class="info">30</h3>
                                <h6>Request Quotation</h6>
                            </div>
                            <div>
                                <i class="icon-book-open info font-large-2 float-right"></i>
                            </div>
                        </div>
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 80%"
                                 aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h3 class="warning">20</h3>
                                <h6>Approved Quotation</h6>
                            </div>
                            <div>
                                <i class="icon-like warning font-large-2 float-right"></i>
                            </div>
                        </div>
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 65%"
                                 aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h3 class="success">146</h3>
                                <h6>New Customers</h6>
                            </div>
                            <div>
                                <i class="icon-user-follow success font-large-2 float-right"></i>
                            </div>
                        </div>
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 75%"
                                 aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h3 class="danger">$10000.00</h3>
                                <h6>Collection</h6>
                            </div>
                            <div>
                                <i class="icon-wallet danger font-large-2 float-right"></i>
                            </div>
                        </div>
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 85%"
                                 aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Recent Transactions -->
    <div class="row">
        <div id="recent-transactions" class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Recent Transactions</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                </div>
                <div class="card-content">
                    <div class="table-responsive">
                        <table id="recent-orders" class="table table-hover table-xl mb-0">
                            <thead>
                            <tr>
                                <th class="border-top-0">Status</th>
                                <th class="border-top-0">Invoice#</th>
                                <th class="border-top-0">Customer Name</th>
                                <th class="border-top-0">Commodity</th>
                                <th class="border-top-0">Product Name</th>
                                <th class="border-top-0">Shipping</th>
                                <th class="border-top-0">Amount</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-truncate"><i class="la la-dot-circle-o success font-medium-1 mr-1"></i>                          Paid</td>
                                <td class="text-truncate"><a href="#">INV-001001</a></td>
                                <td class="text-truncate">
                          <span class="avatar avatar-xs">
                            <img class="box-shadow-2" src="../../../app-assets/images/portrait/small/avatar-s-4.png"
                                 alt="avatar">
                          </span>
                                    <span>Elizabeth W.</span>
                                </td>
                                <td class="text-truncate p-1">
                                    <ul class="list-unstyled users-list m-0">
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Primdonna"
                                            class="avatar avatar-sm pull-up">
                                            <p>BAGS</p>
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-danger round">Food</button>
                                </td>
                                <td>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 25%"
                                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="text-truncate">$ 1200.00</td>
                            </tr>
                            <tr>
                                <td class="text-truncate"><i class="la la-dot-circle-o danger font-medium-1 mr-1"></i>                          Declined</td>
                                <td class="text-truncate"><a href="#">INV-001002</a></td>
                                <td class="text-truncate">
                          <span class="avatar avatar-xs">
                            <img class="box-shadow-2" src="../../../app-assets/images/portrait/small/avatar-s-5.png"
                                 alt="avatar">
                          </span>
                                    <span>Doris R.</span>
                                </td>
                                <td class="text-truncate p-1">
                                    <ul class="list-unstyled users-list m-0">
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Volta Chem"
                                            class="avatar avatar-sm pull-up">
                                            <p>CHEMICAL</p>
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-warning round">Electronics</button>
                                </td>
                                <td>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 45%"
                                             aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="text-truncate">$ 1850.00</td>
                            </tr>
                            <tr>
                                <td class="text-truncate"><i class="la la-dot-circle-o warning font-medium-1 mr-1"></i>                          Pending</td>
                                <td class="text-truncate"><a href="#">INV-001003</a></td>
                                <td class="text-truncate">
                          <span class="avatar avatar-xs">
                            <img class="box-shadow-2" src="../../../app-assets/images/portrait/small/avatar-s-6.png"
                                 alt="avatar">
                          </span>
                                    <span>Megan S.</span>
                                </td>
                                <td class="text-truncate p-1">
                                    <ul class="list-unstyled users-list m-0">
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Fine Estate"
                                            class="avatar avatar-sm pull-up">
                                            <p>JEWELRY </p>
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-success round">Groceries</button>
                                </td>
                                <td>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 75%"
                                             aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="text-truncate">$ 3200.00</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@section('scripts')
    <!-- BEGIN VENDOR JS-->
    <script src="{{URL::asset('app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{URL::asset('app-assets/vendors/js/charts/chart.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('app-assets/vendors/js/charts/raphael-min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('app-assets/vendors/js/charts/morris.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js')}}"
            type="text/javascript"></script>
    <script src="{{URL::asset('app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js')}}"
            type="text/javascript"></script>
    <script src="{{URL::asset('app-assets/data/jvector/visitor-data.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('app-assets/vendors/js/timeline/horizontal-timeline.js')}}" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN MODERN JS-->
    <script src="{{URL::asset('app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('app-assets/js/core/app.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('app-assets/js/scripts/customizer.js')}}" type="text/javascript"></script>
    <!-- END MODERN JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{URL::asset('app-assets/js/scripts/pages/dashboard-sales.js')}}" type="text/javascript"></script>
@stop










