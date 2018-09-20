
@extends('admin.billing.assets')
        <!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    @yield('assets')
</head>

@section('content')
    <html lang="en">
    <body class="no-skin">
    <div class="widget-body">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="card-body pb-0">
                        <div class="grid_15">
                            <h1>
                                Liquidation form
                            </h1>
                        </div></div><!-- /.page-header -->
                    <div class="widget-toolbar hidden-480">
                        <a href="#">
                            <i class="ace-icon fa fa-print"></i>
                        </a>
                    </div>
                    <table  width="100%" >
                        <div class="widget-body">
                            <div class="widget-main padding-24">
                                <div class="row">
                                    <div class="col-sm-6">

                                        <div>
                                            <ul class="list-unstyled spaced">
                                                <li>
                                                    <i class="ace-icon fa fa-caret-right blue"></i>CONTROL NO.
                                                    <b class="red">Here</b>
                                                </li>
                                                <li>
                                                    <i class="ace-icon fa fa-caret-right blue"></i>JOB REFERENCE No:
                                                    <b class="red">Here</b>
                                                </li>
                                                <li>
                                                    <i class="ace-icon fa fa-caret-right blue"></i>CLIENT NAME:
                                                    <b class="red">Here</b>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- /.col -->

                                    <div class="col-sm-6">

                                        <div>
                                            <ul class="list-unstyled  spaced">

                                                <li>
                                                    <i class="ace-icon fa fa-caret-right blue"></i>LIQUIDATED BY:
                                                    <b class="red">Here</b>
                                                </li>

                                                <li>
                                                    <i class="ace-icon fa fa-caret-right blue"></i>LIST OF LIQUIDATED CASH ADVANCE:
                                                    <b class="red">Here</b>
                                                </li>
                                                <li>
                                                    <i class="ace-icon fa fa-caret-right blue"></i>TOTAL:
                                                    <b class="red">Here</b>
                                                </li>
                                                <li>
                                                    <i class="ace-icon fa fa-caret-right blue"></i>DATE:
                                                    <b class="red">Here</b>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- /.col -->
                                </div><!-- /.row -->


                                <table class="table table-striped table-bordered">
                                    <tr>
                                        <td>PARTICULARS</td>
                                        <td>AMOUNT</td>
                                    </tr>

                                    <tr>
                                        <td><br><br><br><br><br></td>
                                        <td><br><br><br><br>Total:</td>
                                    </tr></table>

                                <div class="well">
                                    <b>Reimbursement:</b><br>
                                    <b>Container deposit:</b>:121-13200007-3<br>
                                    <b>Check by:</b> PHILIPPINES SAVINGS BANK<br>
                                    <b>Approved by:</b> G/F GINBO BLG. 824 A ARNAIZ AVENUE, MAKATI CITY<br>


                                </div>
                 </div>
        </div>
                    </table>
    </div>

            </div>
        </div>
    </div>
    </body>
    </html>


@stop