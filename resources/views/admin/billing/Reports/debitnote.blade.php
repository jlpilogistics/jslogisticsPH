
@extends('admin.billing.assets')
        <!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    @yield('assets')
</head>

@section('content')
    <body class="no-skin">
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <div class="card-body pb-0">

                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="widget-box transparent">
                            <div class="widget-header widget-header-large">
                                <h3 class="widget-title grey lighter">
                                    Debit Note
                                </h3>

                                <table class="table table-striped table-bordered">
                                    <thead>

                                    <tr>
                                        <th class="center">Details of Charges:</th>
                                        <th>Amoun:t</th>

                                    </tr>
                                    <tr>

                                        <th>Ocean Freight:</th>
                                        <th></th>

                                    </tr>
                                    </thead>

                                    <tbody>
                                    <tr>
                                        <td>Amount in Words:</td>
                                        <td>Total:</td>

                                    </tr>

                                    </tbody>
                                </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                </div>
            </div>
    </body>
    @stop