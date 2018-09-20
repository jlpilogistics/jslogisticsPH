
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
                    <h3>Cash Advance Form</h3>
                    <div class="widget-toolbar hidden-480">
                        <a href="#">
                            <i class="ace-icon fa fa-print"></i>
                        </a>
                    </div>
                    <div class="widget-main padding-24">
                        <div class="row">
                            <div class="col-sm-6">

                                <div>
                                    <ul class="list-unstyled spaced">
                                        <li>
                                            <i class="ace-icon fa fa-caret-right blue"></i>Control No:
                                            <b class="red">Here</b>
                                        </li>
                                        <li>
                                            <i class="ace-icon fa fa-caret-right blue"></i>Job Reference No:
                                            <b class="red">Here</b>
                                        </li>
                                        <li>
                                            <i class="ace-icon fa fa-caret-right blue"></i>Client Name:
                                            <b class="red">Here</b>
                                        </li>

                                    </ul>
                                </div>
                            </div><!-- /.col -->

                            <div class="col-sm-6">

                                <div>
                                    <ul class="list-unstyled  spaced">

                                        <li>
                                            <i class="ace-icon fa fa-caret-right blue"></i>Date:
                                            <b class="red">Here</b>
                                        </li>

                                        <li>
                                            <i class="ace-icon fa fa-caret-right blue"></i>Type:
                                            <b class="red">Here</b>
                                        </li>
                                    </ul>																</ul>
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
                        <br>

                        <b>Amount in words:</b><hr><br><br>
                        <div class="well">
                            <b>Verified by:</b><br>
                            <b>Noted by:</b><br>
                            <b>Requested by:</b><br>
                            <b>Approved by:</b><br>
                            <b>Recieved by:</b><br>
                        </div>


                    </div>
            </div>
        </div>
    </div>
    </div>
</html>

@stop