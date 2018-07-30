@extends('admin.fleet.assets')

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
@yield('assets')
</head>
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Vehicle Information</h4>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Vehicle ID</th>
                                    <th>Plate No.</th>
                                    <th>Date Registered</th>
                                    <th>Date Expiration</th>
                                    <th>Vehicle Model</th>
                                    <th>Fuel Type</th>
                                    <th>Availability</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($vehicles as $vehicle)
                                    <tr>
                                        <td>{{$vehicle->vehicle_ref}}</td>
                                        <td>{{$vehicle->plate_no}}</td>
                                        <td>{{$vehicle->date_reg}}</td>
                                        <td>{{$vehicle->date_exp}}</td>
                                        <td>{{$vehicle->vehicle_model}}</td>
                                        <td>{{$vehicle->fuel_type}}</td>
                                        <td>{{$vehicle->avail}}</td>
                                        <td><a href="#" class=" btn btn-warning fas fa-trash-alt "></a><a href="#" class="btn btn-info fas fa-edit"></a> </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <a href="{{route('vehicles.create')}}" class="btn btn-success">Add New</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection