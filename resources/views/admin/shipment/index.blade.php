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
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/vendors.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/app.css">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/colors/palette-gradient.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */

        /* Optional: Makes the sample page fill the window. */

        .controls {
            background-color: #fff;
            border-radius: 2px;
            border: 1px solid transparent;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
            box-sizing: border-box;
            font-family: Roboto;
            font-size: 15px;
            font-weight: 300;
            height: 29px;
            margin-left: 17px;
            margin-top: 10px;
            outline: none;
            padding: 0 11px 0 13px;
            text-overflow: ellipsis;
            width: 400px;
        }

        .controls:focus {
            border-color: #4d90fe;
        }
        .title {
            font-weight: bold;
        }
        #infowindow-content {
            display: none;
        }
        #map #infowindow-content {
            display: inline;
        }

    </style>
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
        <div class="content-body col-md-12">
            <!-- gmaps basic maps section start -->
            <section id="gmaps-basic-maps">
                <!-- Basic Map -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Current Location</h4>
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
                                <div class="card-body col-md-12" >
                                    <input id="pac-input" class="controls" type="text"
                                           placeholder="Enter a location">
                                    <div id="map" class="height-500"></div>
                                    <div id="infowindow-content">
                                        <span id="place-name"  class="title"></span><br>
                                        Place ID <span id="place-id"></span><br>
                                        <span id="place-address"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Map Events -->
            </section>
            <section id="text-alignment">
                <div class="row">
                    <div class="col-12 mt-3 mb-1">
                        <h4 class="text-uppercase">Shipment Details</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-header mb-0">
                                <h4 class="card-title">Sender Information</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-content">
                                    <div class="card-body  py-0 px-0">
                                        <div class="list-group">
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <div class="media">
                                                    <div class="media-left pr-1">
                                                        <p class="font-small-2 mb-0 text-muted">Name:</p>
                                                    </div>
                                                    <div class="media-body w-100">
                                                        <h6 class="media-heading mb-0"><b>{{$client->firstName}} {{$client->lastName}}</b></h6>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <div class="media">
                                                    <div class="media-left pr-1">
                                                        <p class="font-small-2 mb-0 text-muted">Email:</p>
                                                    </div>
                                                    <div class="media-body w-100">
                                                        <h6 class="media-heading mb-0"><b>{{$client->email}}</b></h6>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <div class="media">
                                                    <div class="media-left pr-1">
                                                        <p class="font-small-2 mb-0 text-muted">Phone:</p>
                                                    </div>
                                                    <div class="media-body w-100">
                                                        <h6 class="media-heading mb-0"><b>{{$client->phone}}</b></h6>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <div class="media">
                                                    <div class="media-left pr-1">
                                                        <p class="font-small-2 mb-0 text-muted">Address:</p>
                                                    </div>
                                                    <div class="media-body w-100">
                                                        <h6 class="media-heading mb-0"><b>{{$client->address}}, {{$client->city}}, {{$client->country}}</b></h6>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <div class="media">
                                                    <div class="media-left pr-1">
                                                        <p class="font-small-2 mb-0 text-muted">Company:</p>
                                                    </div>
                                                    <div class="media-body w-100">
                                                        <h6 class="media-heading mb-0"><b>{{$client->company}}</b></h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-header mb-0">
                                <h4 class="card-title">Consignee Details</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-content">
                                    <div class="card-body  py-0 px-0">
                                        <div class="list-group">
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <div class="media">
                                                    <div class="media-left pr-1">
                                                        <p class="font-small-2 mb-0 text-muted">Name:</p>
                                                    </div>
                                                    <div class="media-body w-100">
                                                        <h6 class="media-heading mb-0"><b>{{$consignee->firstName}} {{$consignee->firstName}}</b></h6>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <div class="media">
                                                    <div class="media-left pr-1">
                                                        <p class="font-small-2 mb-0 text-muted">Email:</p>
                                                    </div>
                                                    <div class="media-body w-100">
                                                        <h6 class="media-heading mb-0"><b>{{$consignee->email}}</b></h6>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <div class="media">
                                                    <div class="media-left pr-1">
                                                        <p class="font-small-2 mb-0 text-muted">Phone:</p>
                                                    </div>
                                                    <div class="media-body w-100">
                                                        <h6 class="media-heading mb-0"><b>{{$consignee->phone}}</b></h6>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <div class="media">
                                                    <div class="media-left pr-1">
                                                        <p class="font-small-2 mb-0 text-muted">Address:</p>
                                                    </div>
                                                    <div class="media-body w-100">
                                                        <h6 class="media-heading mb-0"><b>{{$consignee->address}}, {{$consignee->city}}, {{$consignee->country}}</b></h6>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <div class="media">
                                                    <div class="media-left pr-1">
                                                        <p class="font-small-2 mb-0 text-muted">Postal Code:</p>
                                                    </div>
                                                    <div class="media-body w-100">
                                                        <h6 class="media-heading mb-0"><b>{{$client->postal}}</b></h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-header mb-0">
                                <h4 class="card-title">Commodity Details</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-content">
                                    <div class="card-body  py-0 px-0">
                                        <div class="list-group">
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <div class="media">
                                                    <div class="media-left pr-1">
                                                        <p class="font-small-2 mb-0 text-muted">Type:</p>
                                                    </div>
                                                    <div class="media-body w-100">
                                                        <h6 class="media-heading mb-0"><b>{{$transaction->goods->goods}}</b></h6>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <div class="media">
                                                    <div class="media-left pr-1">
                                                        <p class="font-small-2 mb-0 text-muted">Mode:</p>
                                                    </div>
                                                    <div class="media-body w-100">
                                                        @if($transaction->goods->mode == 'FCL20')
                                                            <?php $mode = 'Full Container Load(20)' ?>
                                                            @elseif($transaction->goods->mode == 'FCL40')
                                                            <?php $mode = 'Full Container Load(40)' ?>
                                                        @elseif($transaction->goods->mode == 'Air')
                                                            <?php $mode = 'Air Freight' ?>
                                                        @elseif($transaction->goods->mode == 'LCL')
                                                            <?php $mode = 'Less than a Container Load' ?>

                                                        @endif

                                                        <h6 class="media-heading mb-0"><b>{{$mode}}</b></h6>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <div class="media">
                                                    <div class="media-left pr-1">
                                                        <p class="font-small-2 mb-0 text-muted">Weight:</p>
                                                    </div>
                                                    <div class="media-body w-100">
                                                        <h6 class="media-heading mb-0"><b>{{$transaction->goods->aweight . 'kg'}}</b></h6>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <div class="media">
                                                    <div class="media-left pr-1">
                                                        <p class="font-small-2 mb-0 text-muted">Volume:</p>
                                                    </div>
                                                    <div class="media-body w-100">
                                                        <h6 class="media-heading mb-0"><b>{{$transaction->goods->avolume . 'kg'}}</b></h6>
                                                            @if(is_null($place))
                                                            <input type="hidden" value="ChIJR5S_fvrIlzMRYz_5wEXGkHE" name="place" class="newMap">
                                                                @else
                                                            <input type="hidden" value="{{$place->place_id}}" name="place" class="newMap">

                                                        @endif

                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <div class="media">
                                                    <div class="media-left pr-1">
                                                        <p class="font-small-2 mb-0 text-muted">Expected Date of Delivery:</p>
                                                    </div>
                                                    <div class="media-body w-100">
                                                        <h6 class="media-heading mb-0"><b>{{$transaction->destination->deta}}</b></h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Inland Haulage</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <td>
                                    <button class="btn btn-sm round btn-danger btn-glow"><i class="la la-close font-medium-1"></i> Cancel all</button>
                                </td>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">
                                <table class="table table-de mb-0">
                                    @if($transaction->goods->shiptypes == "Import")
                                    <thead>

                                    <tr>
                                        <th>Port of Unloading</th>
                                        <th>Estimated Date of Arrival</th>
                                        <th>Delivery Date</th>
                                        <th>Delivery Time</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <input type="hidden" id="haulage_id" value="{{$ihaulage->id}}">
                                        <td>{{$ihaulage->unloading}}</td>
                                        <td class="success">{{$ihaulage->eta}}</td>
                                        <td>{{$ihaulage->delivery_date}}</td>
                                        <td>{{$ihaulage->delivery_time}}</td>
                                        <td>
                                            <button type="button" class="btn btn-success round btn-min-width mr-1 mb-1" data-toggle="modal"
                                                    data-target="#bootstrap">Assign</button>
                                        </td>
                                    </tr>
                                    </tbody>
                                        @elseif($transaction->goods->shiptypes == "Export")
                                            <thead>
                                            <tr class="bordered">
                                                <th></th>
                                                <th colspan="2">Pick-up Date and Time</th>
                                                <th colspan="4" class="text-center">Pick-up Location</th>
                                            </tr>
                                            <tr>
                                                <th>Port of Loading</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>Address</th>
                                                <th>City</th>
                                                <th>State</th>
                                                <th>Zip Code</th>
                                                <th>Assign to Vehicle</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <input type="hidden" id="haulage_id" value="{{$ehaulage->id}}">
                                                <td class="success">{{$ehaulage->loading}}</td>
                                                <td>{{$ehaulage->pickup_date}}</td>
                                                <td>{{$ehaulage->pickup_time}}</td>
                                                <td>{{$ehaulage->street}}</td>
                                                <td>{{$ehaulage->city}}</td>
                                                <td>{{$ehaulage->state}}</td>
                                                <td>{{$ehaulage->zip}}</td>
                                                <td>
                                                    <button type="button" class="btn btn-success round btn-min-width mr-1 mb-1" data-toggle="modal"
                                                            data-target="#bootstrap">Assign</button>
                                                </td>
                                            </tr>

                                            </tbody>
                                        @endif
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Status Updates</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <td>
                                    <button type="button" class="btn btn-success round btn-min-width mr-1 mb-1" data-toggle="modal"
                                            data-target="#inlineForm">
                                        Update Status
                                    </button>
                                </td>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">
                                <table class="table table-de mb-0">
                                    <thead>
                                    <tr>
                                        <th>Date and Time</th>
                                        <th>Status</th>
                                        <th>Location</th>
                                        <th>Remarks</th>
                                        <th>Edit/Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($monitor as $where)
                                    <tr>

                                        <td>{{$where->created_at}}</td>
                                            <?php
                                                    $stats = \App\Status::where('id', $where->status)->first()
                                            ?>
                                            <td class="success">{{$stats->name}}</td>
                                        <td>{{$where->location}}</td>
                                        <td>{{$where->remarks}}</td>
                                        <td>
                                            <button class="btn btn-sm round btn-outline-danger"> Cancel</button>
                                        </td>
                                    </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="form-group">
                    <h5>Bootstrap Input Style Form</h5>
                    <p>Bootstrap Form using Floating Label fields.</p>
                    <!-- Button trigger modal -->

                    <!-- Modal -->
                    <div class="modal fade text-left" id="bootstrap" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35"
                         aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="myModalLabel35">Vehicle Assignment</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @if($transaction->goods->shiptypes == "Import")
                                <form action="{{route('haulage.assign', [$ihaulage->id,$transaction->goods->shiptypes])}}" method="POST">
                                    @elseif($transaction->goods->shiptypes == "Import")
                                    <form action="{{route('haulage.assign', [$ehaulage->id,$transaction->goods->shiptypes])}}" method="POST">
                                    @endif
                                    {!! csrf_field() !!}
                                    <div class="modal-body">
                                        <fieldset class="form-group floating-label-form-group">
                                            <label for="email">Available Vehicle</label>
                                            <select name="vehicle" id="basicSelect" class="form-control danger">
                                                <option selected="true" disabled value="">Select a Vehicle</option>
                                                @foreach($vehicle as $key=>$val)
                                                    <option value="{{$val}}">{{$key}}</option>
                                                @endforeach
                                            </select>
                                            <input type="hidden" id="vehmodel" name="vehmodel" value="">
                                        </fieldset>
                                        <br>
                                        <fieldset class="form-group floating-label-form-group">
                                            <div class="hidden" id="ref">
                                            <label for="title">Driver</label>

                                                 <input type="text" class="form-control" readonly name="driver" id="drive" placeholder="Driver">


                                                <select name="driver" id="basicSelect" class="form-control danger dropdowns">
                                                    <option selected="true" disabled value="">Select a Driver</option>
                                                    @foreach($driver as $key=>$val)
                                                        <option value="{{$key}}">{{$key}}</option>
                                                    @endforeach
                                                </select>
                                            </div>


                                        </fieldset>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="reset" class="btn btn-outline-secondary btn-md" data-dismiss="modal"
                                               value="close">
                                        <input type="submit" class="btn btn-outline-primary btn-md update" value="Assign">
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>
                    <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
                         aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <label class="modal-title text-text-bold-600" id="myModalLabel33">Add status of the shipment</label>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="/status/update" method="POST">
                                    {!! csrf_field() !!}
                                    <div class="modal-body">
                                        <label>Status</label>
                                        <input type="hidden" value="{{$transaction->id}}" name="transaction">
                                        <input type="hidden" class="places" value="" name="place_id">
                                        <input type="hidden" class="loc" value="" name="location">
                                        <select name="status" id="basicSelect" class="form-control">
                                            <option selected="true" disabled value="">Select a Status</option>
                                            @foreach($status as $key=>$val)
                                                <option value="{{$val}}">{{$key}}</option>
                                            @endforeach
                                        </select>
                                        <label>Remarks: </label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="remarks" id="remarks" placeholder="Remarks">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal"
                                               value="close">
                                        <button type="submit" class="btn btn-outline-primary btn-lg" id="add">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // gmaps basic maps section end -->
        </div>
    </div>


    @stop
@section('scripts')
    <script src="../../../app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
            <script>



                $("#add").click(function() {
                    $.ajax({
                        type: 'POST',
                        url: '/status/update',
                        data: {
                            '_token': $('input[name=_token]').val(),
                            'status': $('input[name=status]').val(),
                            'remarks': $('input[name=remarks]').val(),
                            'place_id': $('.places').val(),
                            'location': $('.loc').val(),
                            'transaction': $('input[name=transaction]').val(),
                        },
                        success: function(data) {
                            if ((data.errors)) {
                                $('.error').removeClass('hidden');
                                $('.error').text(data.errors.name);

                            } else {
                                $('.error').remove();

                                alert(data);

                            }
                        },
                    });

                });



                    $('select[name="vehicle"]').on('change', function(){
                        $('.dropdowns').removeClass('hidden');
                        $('#drive').removeClass('hidden');

                        $('#vehmodel').val($('select[name="vehicle"] option:selected').text());



                        var vehicleId = $(this).val();
                        if(vehicleId) {
                            $('.dropdowns').addClass('hidden');
                            $.ajax({
                                url: '/driver/get/'+vehicleId,
                                type:"GET",
                                dataType:"json",
                                beforeSend: function(){
                                    $('#loader').css("visibility", "visible");
                                },

                                success:function(data) {

                                    $('input[name="driver"]').val(data);


                                },
                                complete: function(){
                                    $('#loader').css("visibility", "hidden");
                                }
                            });
                        } else {

                            $('#drive').addClass('hidden');
                        }
                        $('#ref').removeClass('hidden');

                    });




                // This sample uses the Place Autocomplete widget requesting only a place
                // ID to allow the user to search for and locate a place. The sample
                // then reverse geocodes the place ID and displays an info window
                // containing the place ID and other information about the place that the
                // user has selected.
                //
                // This example requires the Places library. Include the libraries=places
                // parameter when you first load the API. For example:
                // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

                function initMap() {
                    var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 15
                    });
                    function initializeGoogleMaps() {

                    var request = {
                        placeId: $('.newMap').val(),
                    };

                    function callback(place, status) {
                        if (status == google.maps.places.PlacesServiceStatus.OK) {
                            var marker = new google.maps.Marker({
                                map: map,
                                position: place.geometry.location
                            });
                            map.setCenter(marker.getPosition());
                        }
                    }



                    service = new google.maps.places.PlacesService(map);
                    service.getDetails(request, callback);
                }
                google.maps.event.addDomListener(window, 'load', initializeGoogleMaps);


                    var input = document.getElementById('pac-input');

                    var autocomplete = new google.maps.places.Autocomplete(
                        input, {placeIdOnly: true});
                    autocomplete.bindTo('bounds', map);

                    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

                    var infowindow = new google.maps.InfoWindow();
                    var infowindowContent = document.getElementById('infowindow-content');
                    infowindow.setContent(infowindowContent);
                    var geocoder = new google.maps.Geocoder;
                    var marker = new google.maps.Marker({
                        map: map
                    });
                    marker.addListener('click', function() {
                        infowindow.open(map, marker);
                    });

                    autocomplete.addListener('place_changed', function() {
                        infowindow.close();
                        var place = autocomplete.getPlace();

                        if (!place.place_id) {
                            return;
                        }
                        geocoder.geocode({'placeId': place.place_id}, function(results, status) {

                            if (status !== 'OK') {
                                window.alert('Geocoder failed due to: ' + status);
                                return;
                            }
                            map.setZoom(50);
                            map.setCenter(results[0].geometry.location);
                            // Set the position of the marker using the place ID and location.
                            marker.setPlace({
                                placeId: place.place_id,
                                location: results[0].geometry.location
                            });
                            marker.setVisible(true);
                            infowindowContent.children['place-name'].textContent = place.name;
                            infowindowContent.children['place-id'].textContent = place.place_id;

                            $('.newMap').val(place.place_id);
                            $('.places').val(place.place_id);
                            $('.loc').val(place.name);
                            infowindowContent.children['place-address'].textContent =
                                results[0].formatted_address;
                            infowindow.open(map, marker);
                        });
                    });
                }

                    // This example requires the Places library. Include the libraries=places
                    // parameter when you first load the API. For example:
                    // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

                    // function initMap() {
                    //     var map = new google.maps.Map(document.getElementById('map'), {
                    //         center: {lat: -33.866, lng: 151.196},
                    //         zoom: 15
                    //     });
                    //
                    //     var infowindow = new google.maps.InfoWindow();
                    //     var service = new google.maps.places.PlacesService(map);
                    //
                    //     service.getDetails({
                    //         placeId: 'ChIJz1sce4nIlzMRzv6zb-RhLuU'
                    //     }, function(place, status) {
                    //         if (status === google.maps.places.PlacesServiceStatus.OK) {
                    //             var marker = new google.maps.Marker({
                    //                 map: map,
                    //                 position: place.geometry.location
                    //             });
                    //
                    //
                    //             google.maps.event.addListener(marker, 'click', function() {
                    //                 infowindow.setContent('<div><strong>' + place.name + '</strong><br>' +
                    //                     'Place ID: ' + place.place_id + '<br>' +
                    //                     place.formatted_address + '</div>');
                    //                 infowindow.open(map, this);
                    //             });
                    //         }
                    //     });
                    // }

            </script>
    <script>



        @if(Session::has('success'))

        toastr.success("{{ Session::get('success') }}");

        @endif



        @if(Session::has('info'))

        toastr.info("{{ Session::get('info') }}");

        @endif



        @if(Session::has('warning'))

        toastr.warning("{{ Session::get('warning') }}");

        @endif



        @if(Session::has('error'))

        toastr.error("{{ Session::get('error') }}");

        @endif



    </script>
    <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyBDkKetQwosod2SZ7ZGCpxuJdxY3kxo5Po&libraries=places&callback=initMap"
            async defer></script>
    <script src="../../../app-assets/vendors/js/charts/gmaps.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN MODERN JS-->
    <script src="../../../app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="../../../app-assets/js/core/app.js" type="text/javascript"></script>
    <script src="../../../app-assets/js/scripts/customizer.js" type="text/javascript"></script>
    <!-- END MODERN JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="../../../app-assets/js/scripts/charts/gmaps/maps.js" type="text/javascript"></script>

@stop
