@extends('admin.partials.assets')
@include('admin.billing.Reports.SOA')
@include('admin.billing.Reports.BillingState')
@include('admin.billing.Reports.packlist')
@include('admin.billing.Reports.deliveryrec')
@include('admin.billing.Reports.Ar')
        <!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    @yield('assets')
    <style>
        .column {
            float: left;
            width: 27%;
            height: 130px;

        }
        .column1 {
            float: right;
            width: 27%;
            height: 130px;
        }
        td{
            font-family: "Times New Roman", Times, serif;
            font-size: medium;
            color: #000002;
            padding: 10px;
        }

    </style>
</head>
@section('content')
    <div class="header">
        <h3 style="text-align: center;color: #0b0c0f">Client Billing Management</h3>
        <br>
    </div>
    <section id="scrolling">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Transaction</h4>
                    </div>
                    <div class="card-content collapse show">
                        <div class="column">
                            <table>
                                <tbody>
                                <tr>
                                    <td>Client No. :</td>
                                    <td>EAJLP31231</td>
                                </tr>
                                <tr>
                                    <td >Shipper :</td>
                                    <td>Pernod</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="column1">
                            <table>
                                <tbody>
                                <tr>
                                    <td>Date :</td>
                                    <td>09/09/18</td>
                                </tr>
                                <tr>
                                    <td >Commodity : </td>
                                    <td>Bags</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <table class="table">
                            <tr>
                                <th>Quantity</th>
                                <th>Volume</th>
                                <th>Height</th>
                                <th>Weight</th>
                                <th>Location</th>
                                <th>Status</th>
                            </tr>


                            <tr>
                                <td>1234124</td>
                                <td>41241</td>
                                <td>42413</td>
                                <td>dfsfd</td>
                                <td>fdfsfd</td>
                                <td>fdfsfsf</td>
                            </tr>
                        </table>
                    </div>

                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Documents Provided</h4>
                    </div>
                    <ul>
                        <li><a href="#">BL</a></li>
                        <li><a href="#">Certificate</a></li>
                        <li><a  href="#">Invoice</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Generate Billing Reports</h4>
                    </div>
                        <div class="card-body card-dashboard ">
                            <div class="row skin skin-line">
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <button type="button" class="btn btn-blue-grey" data-toggle="modal"
                                                data-backdrop="false" data-target="#soa">
                                            Statement of Account
                                        </button>
                                    </fieldset>
                                    <fieldset>
                                        <button type="button" class="btn btn-blue-grey" data-toggle="modal"
                                                data-backdrop="false" data-target="#bs">
                                            Billing Statement
                                        </button>
                                    </fieldset>
                                    <fieldset>
                                        <button type="button" class="btn btn-blue-grey" data-toggle="modal"
                                                data-backdrop="false" data-target="#pl">
                                            Packing List
                                        </button>

                                    </fieldset>

                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <button type="button" class="btn btn-blue-grey" data-toggle="modal"
                                                data-backdrop="false" data-target="#ar">
                                            Acknowledgement Receipt
                                        </button>
                                    </fieldset>
                                    <fieldset>
                                        <button type="button" class="btn btn-blue-grey" data-toggle="modal"
                                                data-backdrop="false" data-target="#dl">
                                            Delivery Receipt
                                        </button>
                                    </fieldset>

                                </div>
                            </div>
                        </div>
                </div>
            </div>

        </div>

    </section>
    <script type="text/javascript">
        $("#soa").click(function(){
            $('#soa').modal('show');
        });
        $("#bs").click(function(){
            $('#bs').modal('show');
        });
        $("#pl").click(function(){
            $('#pl').modal('show');
        });
        $("#dl").click(function(){
            $('#dl').modal('show');
        });
        $("#ar").click(function(){
            $('#ar').modal('show');
        });
    </script>
@stop
