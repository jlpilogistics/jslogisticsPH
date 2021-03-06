@extends('admin.partials.assets')
        <!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    @yield('assets')
</head>
@section('content')
    <section id="scrolling">
        <div class="content-body">
            <section id="configuration">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Imports Shipment Table</h4>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead class=" bg-success white ">
                                        <tr>
                                            <th>Date Requested</th>
                                            <th>Shipper Id</th>
                                            <th>Shipper Name </th>
                                            <th>Origin</th>
                                            <th>Consignee Name</th>
                                            <th>Destination</th>
                                            <th>Commodity</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach( $quote as $quo)
                                            <?php
                                            $client = \App\Client::where('id', $quo->client_id)->first();
                                            $consignee = \App\Consignee::where('id', $quo->consignee_id)->first();
                                            ?>
                                            <tr>
                                                <td>{{$quo->updated_at}}</td>
                                                <td>{{$quo->transact}}</td>
                                                <td>{{$client->firstName}}</td>
                                                <td>{{$quo->origin->port}}</td>
                                                <td>{{$quo->consignee_id}}</td>
                                                <td>{{$quo->destination->dport}}</td>
                                                <td>{{$quo->goods->goods}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>Date Requested</th>
                                            <th>Shipper Id</th>
                                            <th>Shipper Name </th>
                                            <th>Origin</th>
                                            <th>Consignee Name</th>
                                            <th>Destination</th>
                                            <th>Commodity</th>

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
</html>
@endsection