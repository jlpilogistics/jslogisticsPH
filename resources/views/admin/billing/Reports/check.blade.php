
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
                    <h3>Check Voucher Form</h3>
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
                                            <i class="ace-icon fa fa-caret-right blue"></i>Name:
                                            <b class="red">Here</b>
                                        </li>
                                        <li>
                                            <i class="ace-icon fa fa-caret-right blue"></i>Job File No:
                                            <b class="red">Here</b>
                                        </li>

                                    </ul>
                                </div>
                            </div><!-- /.col -->

                            <div class="col-sm-6">

                                <div>
                                    <ul class="list-unstyled  spaced">

                                        <li>
                                            <i class="ace-icon fa fa-caret-right blue"></i>Date requested:
                                            <b class="red">Here</b>
                                        </li>

                                        <li>
                                            <i class="ace-icon fa fa-caret-right blue"></i>Date needed
                                            <b class="red">Here</b>
                                        </li>
                                    </ul>																</ul>
                                </div>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                        <table class="table table-striped table-bordered">
                            <td>DESCRIPTION</td>
                            <td>AMOUNT</td>
                            </tr>
                            <tr>
                                <td><br><br><br><br><br></td>
                                <td><br><br><br><br></td>
                            </tr></table>
                        <br>
                        <b>Amount in words:</b><hr><br><br>
                        <div class="well">
                            <b>Prepared by:</b><br>
                            <b>Verified by:</b><br>
                            <b>Approved by:</b><br>
                        </div>



</div>
</div>
</div>
</div>
</html>

@stop