@extends('admin.partials.assets')
@include('admin.billing.Reports.SOA')
@include('admin.billing.Reports.BillingState')
@include('admin.billing.Reports.packlist')
@include('admin.billing.Reports.deliveryrec')
@include('admin.billing.Reports.Ar')
        <!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
@section('content')
    <div class="header">
        <h3 style="text-align: center;color: #0b0c0f">Client Billing Management Domestic</h3>
        <br>
    </div>
    <div class="row" id="checkbox">
        <div class="col-13">
            <div class="card">
                <div class="card-content collapse show">
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <tbody>
                            <tr>
                                <th>List Charges</th>
                                <th>Billing Invoice</th>
                                <th>Statement of Account</th>
                            </tr>
                            @foreach($ex as $port)
                                <tr>
                                    <td>
                                        {{$port->particulars}}
                                    </td>
                                    <td>
                                        <div class="icheck1">
                                            <input type="checkbox" name="" id="input-2" >
                                        </div>
                                    </td>
                                    <td>
                                        <div class="icheck1">
                                            <input type="checkbox" name="" id="input-2" >
                                        </div>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table><br><br>
                        <input type="submit" name="generate" class="btn btn-blue-grey ">
                    </div>
                </div>
            </div>
        </div>
    </div>
</html>
@stop
