@extends('admin.partials.assets')
        <!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    @yield('assets')
</head>
@section('content')
    <section id="configuration">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Schedule Export Haulage</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body card-dashboard">
                            <table class="table table-striped table-bordered zero-configuration " >
                                <thead>
                                <tr>
                                    <th>Date of Request</th>
                                    <th>Loading Port Area</th>
                                    <th>Street</th>
                                    <th>City</th>
                                    <th>Pick up date</th>
                                    <th>Pick up time</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                {{--Data will be coming from approved shipment--}}
                                <tr>
                                @foreach($export as $ex)
                                    <tr>
                                        <td>{{$ex->created_at}}</td>
                                        <td>{{$ex->export_haulage->loading}}</td>
                                        <td>{{$ex->export_haulage->street}}</td>
                                        <td>{{$ex->export_haulage->city}}</td>
                                        <td>{{$ex->export_haulage->pickup_date}}</td>
                                        <td>{{$ex->export_haulage->pickup_time}}</td>
                                        <td>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                                            data-backdrop="false" data-target="#info">
                                                        Schedule Now
                                                    </button>
                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel11"
                                                         aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-info white">
                                                                    <h4 class="modal-title white" id="myModalLabel11">Schedule Import Haulage</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="card-content collapse show">
                                                                        <div class="card-content">
                                                                            <div class="table-responsive">
                                                                                <table class="table table-borderless mb-0">
                                                                                    <tbody>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <h4>Shipper: </h4>
                                                                                        </td>
                                                                                        <td class="type-info text-right">Gulf Oil</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <h4>Commodity</h4>
                                                                                        </td>
                                                                                        <td class="type-info text-right">BAGS</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <h4>ETA</h4>
                                                                                        </td>
                                                                                        <td class="type-info text-right">9:00am</td>
                                                                                    </tr>

                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>

                                                                        <div class="card-body card-dashboard ">
                                                                            <div class="input-group">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><span class="la la-calendar-o"></span></span></div>
                                                                                <input type='text' class="form-control pickadate" placeholder="Select a date"
                                                                                />
                                                                            </div><br>
                                                                            <div class="input-group">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><span class="ft-clock"></span></span></div>
                                                                                <input type='text' class="form-control pickatime" placeholder="Select a time"
                                                                                />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-outline-info">Confirm</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Date of Request</th>
                                    <th>Loading Port Area</th>
                                    <th>Street</th>
                                    <th>City</th>
                                    <th>Pick up date</th>
                                    <th>Pick up time</th>
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
@endsection