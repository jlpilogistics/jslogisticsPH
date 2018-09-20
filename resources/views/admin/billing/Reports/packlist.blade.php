
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
                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th >PRODUCT CODE:</th>
                            <th >PRODUCT DESCRIPTION:</th>
                            <th>Packing (cl)</th>
                            <th>A/C (%)</th>
                            <th>Quantity</th>
                            <th>UOM</th>
                            <th >Lot No.</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <th>013014</th>
                            <th>MARTEL CORDON BLEU NEW 4X3L</th>
                            <th>4x300</th>
                            <th>40</th>
                            <th>208</th>
                            <th>CT</th>
                            <th>CELW9925</th>
                        </tr>
                        </tbody>

                        <tbody>
                        <tr>
                            <th></th>
                            <th></th>
                            <th style="text-align:center;">TOTAL:</th>
                            <th ></th>
                            <th style="text-align:center;">600</th>
                            <th style="text-align:center;">CT</th>
                            <th style="text-align:center;">CASES</th>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="well">
                    <div class="col-md-12" style="text-align:left;">
                        <b><p style="font-family: Arial;">For and on behalf of</p></b>
                    </div>
                    <br><br>
                    <div class="col-md-12" style="text-align:left;">
                        <b><p style="font-family: Arial;">Jexsan Logistics Philippines Inc.</p></b>
                    </div>


                </div>
            </div>
        </div>
    </div>
</html>

@stop