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
                                            <th>Client</th>
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
</html>
@endsection