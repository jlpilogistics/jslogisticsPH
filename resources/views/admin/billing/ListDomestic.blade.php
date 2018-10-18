
@extends('admin.partials.assets')
        <!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    @yield('assets')
</head>
@section('content')

    <!--/ start here-->
    <div class="content-detached">
        <div class="content-body">
            <section class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-head">
                            <div class="card-header">
                                <h4 class="card-title">Domestic Customer</h4>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <!-- Task List table -->
                                <div class="table-responsive">
                                    <table id="users-contacts" class="table table-white-space table-bordered row-grouping display no-wrap icheck table-middle">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Company</th>
                                            <th>Incoterm</th>
                                            <th>Shipment Type</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($client as $clients)
                                            @foreach($clients->transaction as $data)
                                                <tr>
                                                    <td>{{$clients->lastName}} {{$clients->firstName}}</td>
                                                    <td>{{$clients->company}}</td>
                                                    <td>{{$data->goods->term}}</td>
                                                    <td>{{$data->goods->shiptypes}}</td>
                                                    <td><a href="{{url('/generate-domestic')}}" class="btn btn-primary">View Profile</a></td>
                                                </tr>
                                            @endforeach
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@stop

<!--/ ends here-->
