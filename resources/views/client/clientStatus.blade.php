@extends('client.layout.mainlayout')
@section('assets')
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="clients/img/Jexsan.png">
    <link rel="icon" type="image/png" sizes="96x96" href="clients/img/Jexsan.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Accounts Profile</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/clients/simple-line-icons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/clients/feather/style.css')}}">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="{{URL::asset('app/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('app/css/bootstrap.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app/rs-plugin/css/settings.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app/css/dropdown.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('app/css/owl.carousel.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('app/css/global.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('app/css/style.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('app/css/homepage-4.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('app/css/responsive.css')}}" />
    <link href="/clients/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/clients/css/animate.min.css" rel="stylesheet"/>
    <link href="/clients/css/paper-dashboard.css" rel="stylesheet"/>
    <link href="/clients/css/themify-icons.css" rel="stylesheet">

    <link href="{{URL::asset('app/css/skin.less')}}" rel="stylesheet/less">
    <link rel="stylesheet"
          href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            color: #566787;
            background: #f5f5f5;
            font-family: 'Roboto', sans-serif;
        }
        .table-wrapper {
            width: 850px;
            background: #fff;
            padding: 20px 30px 5px;
            margin: 30px auto;
            box-shadow: 0 0 1px 0 rgba(0,0,0,.25);
        }
        .table-title .btn-group {
            float: right;
        }
        .table-title .btn {
            min-width: 50px;
            border-radius: 2px;
            border: none;
            padding: 6px 12px;
            font-size: 95%;
            outline: none !important;
            height: 30px;
        }
        .table-title {
            border-bottom: 1px solid #e9e9e9;
            padding-bottom: 15px;
            margin-bottom: 5px;
            background: #fff;
            margin: -20px -31px 10px;
            padding: 15px 30px;
            color: #000;
        }
        .table-title h2 {
            margin: 2px 0 0;
            font-size: 24px;
        }
        table.table tr th, table.table tr td {
            border-color: #e9e9e9;
            padding: 12px 15px;
            vertical-align: middle;
        }
        table.table tr th:first-child {
            width: 40px;
        }
        table.table tr th:last-child {
            width: 100px;
        }
        table.table-striped tbody tr:nth-of-type(odd) {
            background-color: #fcfcfc;
        }
        table.table-striped.table-hover tbody tr:hover {
            background: #f5f5f5;
        }
        table.table td a {
            color: #2196f3;
        }
        table.table td .btn.manage {
            padding: 2px 10px;
            background: #37BC9B;
            color: #fff;
            border-radius: 2px;
        }
        table.table td .btn.manage:hover {
            background: #2e9c81;
        }
        body {
            zoom: 95%;
        }

    </style>
@stop
@section('sidenav')
    <style>
        li.list-group-item a:hover {
            background-color: transparent;
        }

        li.list-group-item.active a {
            color: #fff;
        }

        li.list-group-item.active a:hover {
            background-color: transparent;
        }

        .list-group-item.active, .list-group-item.active:focus, .list-group-item.active:hover {
            background-color: #a8a8a8;
        }
    </style>
    <div class="sidebar" data-background-color="black " data-active-color="danger">
        <!--
            Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
            Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
        -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="index.html"> <img src="{{URL::asset('app/images/Jexsanlogo.png')}}" alt="" /> </a>
            </div>

            <ul class="nav nav-sidebar list-group">
                <li class="list-group-item">

                    <a href="{{route('account',$clients->id)}}">
                        <i class="ft-user-check"></i>
                        <p> My Profile</p>
                    </a>
                </li>
                <li class="list-group-item" >
                    <a href="{{route('status', $clients->id)}}">
                        <i class="ft-monitor"></i>
                        <p>Request Status</p>
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="{{url('client-bill')}}">
                        <i class="ft-file-text"></i>
                        <p>Received Billing</p>
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="/client-request/">
                        <i class="ft-edit-3"></i>
                        <p>Request Quotation</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>


@stop
@section('content')
    @extends('client.partials.accountHeader')
    <div class="main-panel" style="background-image: url('{{url('/app/images/cli2.jpg')}}');background-repeat: no-repeat;background-size: 210%">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    @if(!$request->isEmpty())
                    <div class="col-12">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">

                                <div class="col-sm-6"><h2>Manage <b>Domains</b></h2></div>
                                <div class="col-sm-6">
                                    <div class="btn-group" data-toggle="buttons">
                                        <label class="btn btn-info active">
                                            <input type="radio" name="status" value="all" checked="checked"> All
                                        </label>
                                        <labael class="btn btn-success">
                                            <input type="radio" name="status" value="active"> Active
                                        </labael>
                                        <label class="btn btn-warning">
                                            <input type="radio" name="status" value="inactive"> Inactive
                                        </label>
                                        <label class="btn btn-danger">
                                            <input type="radio" name="status" value="expired"> Expired
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th>Request ID</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Mode</th>
                                <th>Origin</th>
                                <th>Destination</th>
                                <th width="15%"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($request as $data)
                                <tr>
                                    @foreach($data->invoices as $invoice)
                                        <td>{{$getInv = $invoice->reference}}</td>
                                    @endforeach
                                    <td>{{$data->status->name}}</td>
                                    @foreach($data->invoices as $invoice)
                                        <td>{{$invoice->created_at->toFormattedDateString()}}</td>
                                    @endforeach
                                    <td>{{$data->goods->mode}}</td>
                                    <td>{{$data->origin->city}}, {{$data->origin->country}}</td>
                                    <td>{{$data->destination->dcity}}, {{$data->destination->dcountry}}</td>
                                    <td><button type="button" onclick="window.location='{{ route('confirm.quote', [$data->transact, $getInv ,$data->client_id]) }}'" class="btn btn-success mr-1 mb-1">{{{ ($data->status_id != 2) ? 'View shipment' : 'Confirm shipment' }}}</button></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    </div>
                    @else
                    <div class="col-12">
                    <section id="section" class="spacetop">
                        <!--Section box starts Here -->
                        <div class="section">
                            <div class="error-box ">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-12 center">
                                            <h1>There are no request at this time</h1>
                                            <span>Click on the button to create a new request for quotation</span>
                                            <a href="/client-request" class="button home-link">Request for Quote</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--Section box ends Here -->

                    </section>
                    </div>
                        @endif
                </div>
                </div>
        </div>

    </div>
@stop

@section('scripts')
    <script type="text/javascript" src="{{URL::asset('app/js/jquery.repeater.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('app/js/jquery-1.11.3.min.js')}}"></script>




    <script src="clients/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="clients/js/bootstrap-checkbox-radio.js"></script>

    <!--  Charts Plugin -->
    <script src="clients/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="clients/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <script>
        $(".nav a").on("click", function() {
            $(".nav").find(".active").removeClass("active");
            $(this).parent().addClass("active");
        });
    </script>
    <script src="{{URL::asset('app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('app-assets/js/core/app.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('app-assets/js/scripts/customizer.js')}}" type="text/javascript"></script>
    <!--  client assets    -->






@stop
