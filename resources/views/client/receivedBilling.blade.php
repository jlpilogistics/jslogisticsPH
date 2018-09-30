@extends('client.partials.clientassets')
<head>
    @yield('assets')
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

                    <a href="{{url('account')}}">
                        <i class="ft-user-check"></i>
                        <p> My Profile</p>
                    </a>
                </li>
                <li class="list-group-item" >
                    <a href="{{url('status')}}">
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
                <div class="header">
                    <h3 style="text-align: center;color: white">Invoice Payments</h3>
                    <br>
                </div>
                <div class="column1" style="background-color:#cacece;">
                    <table>
                        <tbody>
                        <tr>
                            <td style="text-align: right">Client No. :</td>
                        </tr>
                        <tr>
                            <td style="text-align: right">Shipper :</td>
                        </tr>
                        <tr>
                            <td style="text-align: right; ">Shipment Type :</td>
                        </tr>
                        <tr>
                            <td style="text-align: right">Estimated Time of Arrival :</td>
                        </tr>
                        <tr>
                            <td style="text-align: right">Commodity :</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="column" style="background-color:#ffffff;">
                    <table>
                        <tbody>
                        <tr>
                            <td>ISJLP100019</td>
                        </tr>
                        <tr>
                            <td>Gulf oil</td>
                        </tr>
                        <tr>
                            <td>Import</td>
                        </tr>

                        <tr>
                            <td>September 20,2018</td>
                        </tr>
                        <tr>
                            <td>Signage</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
                <div class="column1" style="background-color:#cacece;">
                    <table>
                        <tbody>
                        <tr>
                            <td style="text-align: right">Volume :</td>
                        </tr>
                        <tr>
                            <td style="text-align: right">Final Destination :</td>
                        </tr>
                        <tr>
                            <td style="text-align: right">Port of Discharge :</td>
                        </tr>
                        <tr>
                            <td style="text-align: right">Status:</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
                <div class="column" style="background-color:#ffffff;">
                    <table>
                        <tbody>
                        <tr>
                            <td>2 x 40' HQ</td>
                        </tr>
                        <tr>
                            <td>Cebu  </td>
                        </tr>
                        <tr>
                            <td>Cebu Port </td>
                        </tr>

                        <tr>
                            <td>In Transit</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!---Info!--->

        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Striped Table</h4>
                    <p class="category">Here is a subtitle for this table</p>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Salary</th>
                        <th>Country</th>
                        <th>City</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Dakota Rice</td>
                            <td>$36,738</td>
                            <td>Niger</td>
                            <td>
                                <button type="button" class="btn btn-blue-grey" data-toggle="modal"
                                        data-backdrop="false" data-target="#info">
                                    Delivered
                                </button>
                            </td>

                        </tr>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade text-left" id="info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel11"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-info white">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <h3 align="center">Billing Statement</h3>
                        <div class="row">
                            <div class="container">
                                <div class="row">
                                    <br>
                                    <br>
                                    <div class="col-md-8">
                                        <h4><b><p style="font-family: Arial;">JEXSAN LOGISTICS PHILIPPINES INC.</p></b></h4>
                                    </div>

                                    <div class="col-md-4">
                                        <h4><p style="font-family: Arial;">02/09/18</p></h4>
                                    </div>

                                    <br>

                                    <div class="col-md-8">
                                        <h5><p style="font-family: Arial;">4C PALM COAST AVENUE ONE E COM CENTER BLDG</p></h5>
                                    </div>

                                    <div class="col-md-4">
                                        <h5><b><p style="font-family: Arial;">ISJL1710-004</p></b></h5>
                                    </div>

                                    <br>

                                    <div class="col-md-8">
                                        <h5><p style="font-family: Arial;">MALL OF ASIA COMPLEX PASAY CITY PHILIPPINES</p></h5>
                                    </div>

                                    <div class="col-md-4">
                                        <br>
                                    </div>

                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>

                                    <div class="col-md-8">
                                        <h5><p style="font-family: Arial;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                1X40"GP CNTR</p></h5>
                                    </div>
                                    <div class="col-md-4">
                                        <h5><p style="font-family: Arial;">SIMSE1710005</p></h5>
                                    </div>

                                    <br>

                                    <div class="col-md-8">
                                        <h5><p style="font-family: Arial;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                30.00CBM/12,960 KGS.</p></h5>
                                    </div>
                                    <div class="col-md-4">
                                        <h5><p style="font-family: Arial;">SINCB17034697</p></h5>
                                    </div>

                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>

                                    <div class="col-md-8">
                                        <h5><b><p style="font-family: Arial;">BROKERAGE FEE OR#AMV1657962</p></b></h5>
                                    </div>
                                    <div class="col-md-4">
                                        <h5><b><p style="font-family: Arial;">PHP   6,215.74</p></b></h5>
                                    </div>

                                    <br>
                                    <div class="col-md-8">
                                        <h5><b><p style="font-family: Arial;">TRUCKING CHARGES OR#AMV1657962</p></b></h5>
                                    </div>
                                    <div class="col-md-4">
                                        <h5><b><p style="font-family: Arial;">PHP   11,215.74</p></b></h5>
                                    </div>


                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>


                                    <div class="col-md-4"></div>
                                    <div class="col-md-2">
                                        <h5><b><p style="font-family: Arial;">VAT</p></b></h5>
                                    </div>
                                    <div class="col-md-2">
                                        <h5><b><p style="font-family: Arial;">PHP</p></b></h5>
                                    </div>
                                    <div class="col-md-4">
                                        <h5><b><p style="font-family: Arial;">22,241.04</p></b></h5>
                                    </div>

                                    <br>

                                    <div class="col-md-4"></div>
                                    <div class="col-md-2">
                                        <h5><b><p style="font-family: Arial;">ADD 12% VAT</p></b></h5>
                                    </div>
                                    <div class="col-md-2">
                                        <h5><b><p style="font-family: Arial;">PHP</p></b></h5>
                                    </div>
                                    <div class="col-md-4">
                                        <h5><b><p style="font-family: Arial;">&nbsp;&nbsp;2,668.92</p></b></h5>
                                    </div>

                                    <br>

                                    <div class="col-md-4"></div>
                                    <div class="col-md-2">
                                        <h5><b><p style="font-family: Arial;">LESS AMOUNT</p></b></h5>
                                    </div>
                                    <div class="col-md-2">
                                        <h5><b><p style="font-family: Arial;">PHP</p></b></h5>
                                    </div>
                                    <div class="col-md-4">
                                        <h5><b><p style="font-family: Arial;color:white;">e</p></b></h5>
                                    </div>

                                    <br>

                                    <div class="col-md-4"></div>
                                    <div class="col-md-2">
                                        <h5><b><p style="font-family: Arial;color:white;">e</p></b></h5>
                                    </div>
                                    <div class="col-md-2">
                                        <h5><b><p style="font-family: Arial;">PHP</p></b></h5>
                                    </div>
                                    <div class="col-md-4">
                                        <h5><b><p style="font-family: Arial;">24,909.96</p></b></h5>
                                    </div>

                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>

                                    <div class="col-md-2"></div>
                                    <div class="col-md-10">
                                        <h6><b><p style="font-family: Arial;text-align:center;">Twenty Four Thousand Nine Hundred Nine and
                                                    Ninety Six Centavos</p></b></h6>
                                    </div>

                                    <br>
                                    <br>
                                    <br>
                                    <br>

                                    <div class="col-md-8">
                                        <h5><b><p style="font-family: Arial;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    MA. JENNILOU RONO</p></b></h5>
                                    </div>

                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>

                                    <div class="col-md-12">
                                        <h6><b><p style="font-family: Arial;text-align:center;">Page 1 of 1</p></b></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-outline-info">Confirm</button>
                </div>
            </div>
        </div>
    </div>
@stop
