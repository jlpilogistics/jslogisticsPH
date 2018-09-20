@extends('admin.billing.assets')
        <!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    @yield('assets')
</head>

@section('content')
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <div class="card-body pb-0">
                    <body class="no-skin">
                    <h3>JOB FILE</h3>

                    <div class="widget-toolbar hidden-480">
                        <a  id="print" onclick="javascript:printlayer('div-id-name')">
                            <i class="ace-icon fa fa-print"></i>
                        </a>
                    </div>
                    <div class="widget-body">
                        <div class="widget-main padding-24">
                            <div class="row">
                                <div class="col-sm-6">

                                    <div>

                                        <ul class="list-unstyled spaced">
                                            <li>
                                                <i class="ace-icon fa fa-caret-right blue"></i>Shipper:
                                                <b class="red">Here</b>
                                            </li>
                                            <li>
                                                <i class="ace-icon fa fa-caret-right blue"></i>Consignee:
                                                <b class="red">Here</b>
                                            </li>
                                            <li>
                                                <i class="ace-icon fa fa-caret-right blue"></i>Volume:
                                                <b class="red">Here</b>
                                            </li>
                                            <li>
                                                <i class="ace-icon fa fa-caret-right blue"></i>VSL/Flight:
                                                <b class="red">Here</b>
                                            </li>
                                            <li>
                                                <i class="ace-icon fa fa-caret-right blue"></i>Shift Mode:
                                                <b class="red">Here</b>
                                            </li>
                                            <li>
                                                <i class="ace-icon fa fa-caret-right blue"></i>HBL/HAWB No:
                                                <b class="red">Here</b>
                                            </li>
                                            <li>
                                                <i class="ace-icon fa fa-caret-right blue"></i>SI No:
                                                <b class="red">Here</b>
                                            </li>
                                            <li>
                                                <i class="ace-icon fa fa-caret-right blue"></i>SI Non VAT No:
                                                <b class="red">Here</b>
                                            </li>
                                            <li>
                                                <i class="ace-icon fa fa-caret-right blue"></i>Sales Incharge:
                                                <b class="red">Here</b>
                                            </li>

                                        </ul>
                                    </div>
                                </div><!-- /.col -->

                                <div class="col-sm-6">

                                    <div>
                                        <ul class="list-unstyled  spaced">

                                            <li>
                                                <i class="ace-icon fa fa-caret-right blue"></i>Final Destination:
                                                <b class="red">Here</b>
                                            </li>
                                            <li>
                                                <i class="ace-icon fa fa-caret-right blue"></i>POL:
                                                <b class="red">Here</b>
                                            </li>
                                            <li>
                                                <i class="ace-icon fa fa-caret-right blue"></i>Carrier:
                                                <b class="red">Here</b>
                                            </li>
                                            <li>
                                                <i class="ace-icon fa fa-caret-right blue"></i>Agent:
                                                <b class="red">Here</b>
                                            </li>
                                            <li>
                                                <i class="ace-icon fa fa-caret-right blue"></i>OBL/MAWB no:
                                                <b class="red">Here</b>
                                            </li>
                                            <li>
                                                <i class="ace-icon fa fa-caret-right blue"></i>D.R No:
                                                <b class="red">Here</b>
                                            </li>
                                            <li>
                                                <i class="ace-icon fa fa-caret-right blue"></i>P/U.R No:
                                                <b class="red">Here</b>
                                            </li>
                                            <li>
                                                <i class="ace-icon fa fa-caret-right blue"></i>Registry No:
                                                <b class="red">Here</b>
                                            </li>
                                            <li>
                                                <i class="ace-icon fa fa-caret-right blue"></i>Forex:
                                                <b class="red">Here</b>
                                            </li>
                                            <li>
                                                <i class="ace-icon fa fa-caret-right blue"></i>ETD:
                                                <b class="red">Here</b>
                                            </li>
                                            <li>
                                                <i class="ace-icon fa fa-caret-right blue"></i>ETA:
                                                <b class="red">Here</b>
                                            </li>
                                            <li>
                                                <i class="ace-icon fa fa-caret-right blue"></i>LCT:
                                                <b class="red">Here</b>
                                            </li>
                                        </ul>																</ul>
                                    </div>
                                </div><!-- /.col -->
                            </div><!-- /.row -->
                            <table class="table table-striped table-bordered">
                                <tr>
                                    <td>BILLING CHARGES</td>
                                    <td>LIQUIDATION DETAILS</td>
                                </tr>
                                <tr>
                                    <td><br><br><br><br><br><br></td>
                                    <td><br><br><br><br><br>Total:</td>
                                </tr></table>


                            <div class="space-6"></div>
                            <div class="well">
                                <b>TOTAL INVOICE AMOUNT:</b><br>
                                <b>LESS COST:</b>:121-13200007-3<br>
                                <b>PROFIT:</b> PHILIPPINES SAVINGS BANK<br>
                                <b>A.E COMMISSION:</b> G/F GINBO BLG. 824 A ARNAIZ AVENUE, MAKATI CITY<br>
                                <b>SALES ASSISTANCE:</b> G/F GINBO BLG. 824 A ARNAIZ AVENUE, MAKATI CITY<br>
                                <b>NET PROFIT:</b> PHSBPHMM

                            </div>
                            <b>PREPARED BY:</b> G/F GINBO BLG. 824 A ARNAIZ AVENUE, MAKATI CITY<br>
                            <b>NOTE BY:</b> PHSBPHMM

                        </div></body>

                </div>
            </div>
        </div>
    </div>
    @stop