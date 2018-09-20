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
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/style.css')}}">
    <!-- END Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/vendors/css/forms/icheck/custom.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/vendors/css/forms/icheck/icheck.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/css/plugins/forms/checkboxes-radios.css')}}">
    <!-- Pickers-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/vendors/css/pickers/daterange/daterangepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/vendors/css/pickers/pickadate/pickadate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/css/plugins/pickers/daterange/daterange.css')}}">
    <!-- EndPickers-->
    <!-- Jquery-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/vendors/css/forms/selects/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/css/plugins/animate/animate.css')}}">
@stop
@section('content')
    <section id="scrolling">
        <div class="content-body">
            <section id="configuration">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Approved Request Table</h4>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                        <tr>
                                            <th>Client No. </th>
                                            <th>Commodity</th>
                                            <th>Quantity</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>

                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>2009/01/12</td>
                                            <td>$86,000</td>

                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>2012/03/29</td>
                                            <td>$433,060</td>

                                        </tr>

                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>Date Requested</th>
                                            <th>Client</th>
                                            <th>Quantity</th>
                                            <th>Status</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
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
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN MODERN JS-->
    <script src="{{URL::asset('app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('app-assets/js/core/app.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('app-assets/js/scripts/customizer.js')}}" type="text/javascript"></script>
    <!-- END MODERN JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{URL::asset('app-assets/js/scripts/pages/dashboard-sales.js')}}" type="text/javascript"></script>

    <script src="{{URL::asset('app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('app-assets/vendors/js/forms/icheck/icheck.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('app-assets/js/scripts/forms/checkbox-radio.js')}}" type="text/javascript"></script>


    <script src="{{URL::asset('app-assets/vendors/js/tables/datatable/datatables.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('app-assets/js/scripts/tables/datatables/datatable-styling.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('app-assets/vendors/js/tables/buttons.flash.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('app-assets/vendors/js/tables/jszip.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('app-assets/vendors/js/tables/pdfmake.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('app-assets/vendors/js/tables/vfs_fonts.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('app-assets/vendors/js/tables/buttons.html5.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('app-assets/vendors/js/tables/buttons.print.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('app-assets/js/scripts/tables/datatables/datatable-advanced.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('app-assets/js/scripts/tables/datatables/datatable-basic.js')}}"
            type="text/javascript"></script>

    <!-- Picker Script-->
    <script src="{{URL::asset('app-assets/vendors/js/pickers/pickadate/picker.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('app-assets/vendors/js/pickers/pickadate/picker.date.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('app-assets/vendors/js/pickers/pickadate/picker.time.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('app-assets/vendors/js/pickers/pickadate/legacy.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('app-assets/vendors/js/pickers/daterange/daterangepicker.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js')}}" type="text/javascript"></script>
    <!-- End Picker Scripts-->
    <!-- Modal Script-->
    <script src="{{URL::asset('app-assets/js/scripts/forms/select/form-select2.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('app-assets/js/scripts/modal/components-modal.js')}}" type="text/javascript"></script>
@stop
