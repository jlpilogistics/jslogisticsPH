
@extends('admin.billing.assets')
        <!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    @yield('assets')
</head>
@section('content')

    <h1>Client's Profile</h1>
<div class="row">
    <div class="col-lg-6 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Generate Reports</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-content collapse show constrain-movement-container">
                <div class="card-body">
                    <div class="jqueryui-ele-container">
                        <div class="accordion-collapsible">
                            <h3>Transactions history</h3>
                            <div>
                                <p>
                                    Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque.
                                    Vivamus nisi metus, molestie vel, gravida in, condimentum
                                    sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam
                                    mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum
                                    a velit eu ante scelerisque vulputate.
                                </p>
                            </div>
                            <h3>Generate Reports</h3>
                            <div>
                                <p>
                                    <a href="">Bill of Lading(BL)</a><br>
                                    <a href="">Job File</a><br>
                                    <a href="">Statement of Account(SOA)</a><br>
                                    <a href="">Liquidation form</a><br>
                                    <a href="">Billing statement</a><br>
                                    <a href="">Cash Advance form</a><br>
                                    <a href="">Acknowledgement Receipt</a><br>
                                    <a href="">Delivery Receipt</a>


                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Collapse Content -->
    <div class="col-lg-6 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Documents Provided</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-content collapse show constrain-movement-container">
                <div class="card-body">
                    <div class="jqueryui-ele-container">
                        <div class="accordion-collapsible">
                            <h3>BOC documents</h3>
                            <div>
                                <p>
                                    Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque.
                                    Vivamus nisi metus, molestie vel, gravida in, condimentum
                                    sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam
                                    mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum
                                    a velit eu ante scelerisque vulputate.
                                </p>
                            </div>
                            <h3>Billing Reports</h3>
                            <div>
                                <p>
                                    Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus. Vivamus
                                    hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
                                    velit, faucibus interdum tellus libero ac justo. Vivamus
                                    non quam. In suscipit faucibus urna.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
