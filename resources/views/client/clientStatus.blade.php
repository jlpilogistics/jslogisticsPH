@extends('client.partials.clientassets')
        <!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    @yield('assets')
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
                            <div class="header">
                                <h4 class="title">My Shipment Status</h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped" id="table">
                                    <thead>
                                        <th>Request ID</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>Mode</th>
                                        <th>Origin</th>
                                        <th>Destination</th>
                                        <th width="15%"></th>
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
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop
