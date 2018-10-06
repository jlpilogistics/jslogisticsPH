@extends('client.partials.clientassets')
        <!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    @yield('assets')
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css"/>
    <style type="text/css">
        .main-section{
            margin:0 auto;
            padding: 20px;
            margin-top: 100px;
            background-color: #fff;
            box-shadow: 0px 0px 20px #c1c1c1;
        }
        .fileinput-remove,
        .fileinput-upload{
            display: none;
        }
    </style>
</head>
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
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="panel-body" style="padding: 0">
                        <div class="panel-heading hbuilt border-top-small-yellow">
                            <div class="clearfix">
                                <div class="col-xs-6 col-sm-4">
                                    <div class="pull-left">
                                        <h4 class="company_name">{{$clients->company}} (id:{{$clients->client_ref}})</h4>
                                        <div class="company-adress">{{$clients->zip}} | {{$clients->city}}<br>{{$clients->country}}</div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-4 text-center">
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <div class="pull-right">
                                        <h6 class="curr_quote_id text-primary-2 font-bold">Quote-ID: {{$rate->reference}}</h6>
                                        <small class="text-success">Quoted: </small><small class="reply-date">{{$rate->created_at}}</small>
                                        <br>
                                        <label class="text-primary">Validity: </label>
                                        <label class="text-info reply-validity text-danger">{{$rate->created_at->addWeeks(1)}}</label>
                                        @if($rate->created_at == $rate->created_at->addweeks(1))
                                            <h4 class="text-danger reply-validity-expired no-margin no-padding"><b>Validity Expired</b></h4>
                                        @endif

                                    </div>
                                </div>



                            </div>
                        </div>
                        <div class="row" style="margin: 0px 20px 10px 20px">
                            <div class="col-xs-6">
                            </div>
                            <div class="col-xs-6 text-right">
                                <div class="project-value">
                                    <h2 class="text-success font-bold costs-summary">{{$quote->goods->currency}} {{$rate->total}}</h2>
                                    <h5 class="transit-summary text-info"><br>Transit time: 7 - 12 days</h5>
                                    <h5 class="vendor-summary text-info">Carrier: </h5>
                                    <h5 class="text-info via-summary">{{$quote->origin->city}} - {{$quote->destination->dcity}}</h5>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="pull-left">
                                    <h2 class="text-primary-2 font-bold costs-summary-booking-info"></h2>
                                </div>
                                <div class="pull-right">
                                    <div class="project-action m-t-md" style="margin-top: 5px">
                                        <div class="btn-group">
                                            <a target="_blank" class="btn  btn-default show-member-profile" href="cprofile.aspx?id=f110ce92-d5d7-4bb5-b68f-fdcf82a53e51">Show Profile</a>
                                            <a class="btn  btn-default show-cost-terms text-danger" style="display: none;">Terms/Note</a>
                                            <a class="btn  btn-default show-cost-details">Show Details</a>
                                            <a class="btn  btn-default show-quote-details">Confirm Shipment</a>
                                            <a class="btn  btn-default chat">Decline Quote</a>

                                        </div>
                                        <div class="btn-group">
                                            <a class="btn btn-success  book-now" style="display: none;">Book Now</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="costs-details" style="padding-left: 6px; padding-right: 6px; display: none">
                            <div class="table-responsive">
                                <input class="viewed" type="hidden" value="0">
                                <table cellpadding="1" cellspacing="1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Charge Type</th>
                                        <th class="text-right">Amount in Peso</th>
                                        <th class="text-right">Currency</th>
                                        <th class="text-right">Total</th>
                                    </tr>
                                    </thead>
                                    <?php $x = 1; ?>
                                    <tbody>
                                    @foreach($rate->lines as $rates)
                                    <tr>
                                        <td>{{$x++}}</td>
                                        <td>{{$rates->description}}</td>
                                        @if($rates->amount == 0)

                                            <td class="text-right"><b>At Cost</b></td>
                                        @else
                                            <td class="text-right">{{number_format($rates->amount * ($pesos/$gbps), 2, '.', ',')}}</td>
                                        @endif

                                        @if($x == 2)
                                            <td class="text-right">{{$quote->goods->currency}}</td>
                                        @else
                                            <td></td>
                                        @endif

                                        @if($rates->amount == 0)

                                            <td><b>At Cost</b></td>
                                        @else
                                            <td class="text-right">{{number_format($rates->amount, 2, '.', ',')}}</td>
                                        @endif

                                    </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot class="font-bold">
                                    <tr>
                                        <td colspan="3"></td>
                                        <td>Total:<span class="text-right">{{$quote->goods->currency}}</span></td>
                                        <td class="text-right">{{$rate->total}}</td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <small class="text-danger">Foreign currency exchange rates are based on the google exchange rates on the date of quote and for comparison purposes only. Actual amount billed can vary.</small>

                        </div>

                    </div>
                </div>
            </div>
        </div>
                <div class="confirm " style="padding-left: 6px; padding-right: 6px; display: none">
                <div class="col-lg-6 col-md-6">
                    <div class="card">
                        <div class="content">
                            <form action="/image-view" id="formSubmit" method="post">
                                {{ csrf_field() }}
                                {{--LEFT CARD--}}
                                <label><h5><strong>Consignee Information</strong></h5></label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Company Name</label>
                                            <input type="text" value="{{{ isset($consign) && ($quote->status_id == 3) ? $consign->company : '' }}}" class="form-control quote-city" id="company" name="company"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" value="{{{ isset($consign) && ($quote->status_id == 3) ? $consign->firstName : '' }}}" class="form-control quote-city" id="company" name="fname"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" value="{{{ isset($consign) && ($quote->status_id == 3) ? $consign->lastName : '' }}}" class="form-control quote-city" id="company" name="lname"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="text" value="{{{ isset($consign) && ($quote->status_id == 3) ? $consign->phone : '' }}}" class="form-control quote-city" id="company" name="phone"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email Address</label>
                                            <input type="text" value="{{{ isset($consign) && ($quote->status_id == 3) ? $consign->email : '' }}}" class="form-control quote-city" id="company" name="email"/>
                                        </div>
                                    </div>
                                </div>
                                <label ><h5><strong>Complete Address</strong></h5></label> <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Zip Code</label>
                                            <input type="text" value="{{{ isset($consign) && ($quote->status_id == 3) ? $consign->zip : '' }}}" class="form-control quote-city" id="company" name="zip"/>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Street Address</label>
                                            <input type="text" value="{{{ isset($consign) && ($quote->status_id == 3) ? $consign->address : '' }}}" class="form-control quote-city" id="company" name="address"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>City</label>
                                            <input type="text" value="{{{ isset($consign) && ($quote->status_id == 3) ? $consign->city : '' }}}" class="form-control quote-city" id="company" name="city"/>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Country</label>
                                            <input type="text" value="{{{ isset($consign) && ($quote->status_id == 3) ? $consign->country : '' }}}" class="form-control quote-city" id="company" name="country"/>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Postal Code</label>
                                            <input type="text" value="{{{ isset($consign) && ($quote->status_id == 3) ? $consign->postal : '' }}}" class="form-control quote-city" id="company" name="postal"/>
                                            <input type="hidden" value="{{$quote->id}}" id='img' name="transactId">
                                        </div>
                                    </div>
                                </div>
                                {{--<div class="text-center">--}}
                                {{--<button type="submit" class="btn btn-info btn-fill btn-wd">Update Profile</button>--}}
                                {{--</div>--}}
                                @if($quote->status_id == 3)
                                    <script>
                                        $("input[type=text]").attr('disabled', true);
                                    </script>
                                @endif
                                <div class="clearfix"></div>
                            </form>
                        </div>

                    </div>
                </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="card">
                            <div class="content">
                                <form action="/image-view" id="formSubmit" method="post">
                                    {{ csrf_field() }}
                                    {{--LEFT CARD--}}
                                    @if($quote->goods->shiptypes == 'Import')
                                        <label><h5><strong>Port of Origin</strong></h5></label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Company Name</label>
                                                    <input type="text" value="{{{ isset($consign) && ($quote->status_id == 3) ? $consign->company : '' }}}" class="form-control quote-city" id="company" name="company"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                </div>
                                            </div>
                                        </div>
                                        <label ><h5><strong>Date of Arrival</strong></h5></label> <hr>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Zip Code</label>
                                                    <input type="text" value="{{{ isset($consign) && ($quote->status_id == 3) ? $consign->zip : '' }}}" class="form-control quote-city" id="company" name="zip"/>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label>Street Address</label>
                                                    <input type="text" value="{{{ isset($consign) && ($quote->status_id == 3) ? $consign->address : '' }}}" class="form-control quote-city" id="company" name="address"/>
                                                </div>
                                            </div>
                                        </div>
                                        <label><h5><strong>Delivery Date</strong></h5></label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Company Name</label>
                                                    <input type="text" value="{{{ isset($consign) && ($quote->status_id == 3) ? $consign->company : '' }}}" class="form-control quote-city" id="company" name="company"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                </div>
                                            </div>
                                        </div>
                                        <label><h5><strong>Delivery Time</strong></h5></label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Company Name</label>
                                                    <input type="text" value="{{{ isset($consign) && ($quote->status_id == 3) ? $consign->company : '' }}}" class="form-control quote-city" id="company" name="company"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                </div>
                                            </div>
                                        </div>
                                    @elseif($quote->goods->shiptypes == 'Export')
                                            <label><h5><strong>Port of Loading</strong></h5></label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Company Name</label>
                                                        <input type="text" value="{{{ isset($consign) && ($quote->status_id == 3) ? $consign->company : '' }}}" class="form-control quote-city" id="company" name="company"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                    </div>
                                                </div>
                                            </div>
                                            <label ><h5><strong>Collection Point</strong></h5></label> <hr>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div  id="locationField">
                                                    {!! Form::label('port', 'Origin via Port') !!}
                                                    <input type="search" id="address-input" value="{{{ $origin->port or old('port') }}}" class="form-control quote-city font-size-small" tabindex = "1" onFocus="geolocate()" name="port"/>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    {!! Form::label('zip', 'Zip Code') !!}
                                                    <input type="text" value="{{{ $origin->zip or old('zip') }}}" class="form-control quote-city disabledInput" tabindex = "1" id="zip" readonly="readonly" name="zip"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    {!! Form::label('country', 'State') !!}
                                                    <input type="text" value="{{{ $origin->country or old('country') }}}" class="form-control quote-city" tabindex = "1" id="state" readonly="readonly" name="country"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    {!! Form::label('city', 'City') !!}
                                                    <input type="text" value="{{{ $origin->city or old('city') }}}" class="form-control quote-city" readonly="readonly" tabindex = "1" id="city" name="city"/>
                                                </div>
                                            </div>

                                        </div>
                                            <label><h5><strong>Pick-up Date</strong></h5></label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Company Name</label>
                                                        <input type="text" value="{{{ isset($consign) && ($quote->status_id == 3) ? $consign->company : '' }}}" class="form-control quote-city" id="company" name="company"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                    </div>
                                                </div>
                                            </div>
                                            <label><h5><strong>Pick-up Time</strong></h5></label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Company Name</label>
                                                        <input type="text" value="{{{ isset($consign) && ($quote->status_id == 3) ? $consign->company : '' }}}" class="form-control quote-city" id="company" name="company"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                    </div>
                                                </div>
                                            </div>
                                    @endif


                                    {{--<div class="text-center">--}}
                                    {{--<button type="submit" class="btn btn-info btn-fill btn-wd">Update Profile</button>--}}
                                    {{--</div>--}}
                                    @if($quote->status_id == 3)
                                        <script>
                                            $("input[type=text]").attr('disabled', true);
                                        </script>
                                    @endif
                                    <div class="clearfix"></div>
                            </div>

                        </div>
                    </div>

                {{--COMMODITY FORM RIGHT CARD--}}

                    <div class="col-lg-12 col-md-12">
                        <div class="card card-user" >
                            <div class="content"><br>
                                <h1 class="text-center text-danger">Upload Scanned Documents</h1><br>
                                <div class="form-group">
                                    <div class="file-loading">
                                        <input id="file-1" type="file" name="file" multiple class="file"  data-overwrite-initial="false" data-min-file-count="2">
                                    </div>
                                    <input type="submit" id="fileupload" value="Confirm Shipment">
                                </div>
                            </div>

                        </div>
                    </div>


                </form>

                </div>
            </div>
        </div>
    </div>
@stop
