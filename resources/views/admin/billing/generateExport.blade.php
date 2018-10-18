@extends('admin.partials.assets')
@include('admin.billing.Reports.SOA')
@include('admin.billing.Reports.BillingState')
@include('admin.billing.Reports.packlist')
@include('admin.billing.Reports.deliveryrec')
@include('admin.billing.Reports.Ar')
        <!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
@section('content')
    <div class="row" id="checkbox">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-header">
                    <h3 style="text-align: center;color: #0b0c0f">Client Billing Management Export</h3>
                    <br>
                </div>
                <div class="card-content collapse show">
                    <div class="table-responsive">
                        <form action="/generate" method="POST">
                            {!! csrf_field() !!}
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
                                            <input type="checkbox" name="bi[bi][]" id="input-2" value="{{$port->particulars}}" >

                                        </div>
                                    </td>

                                    <td>
                                        <div class="icheck1">
                                            <input type="checkbox" name="soa[soa][]" id="input-2" value="{{$port->particulars}}" >
                        <input type="hidden" name="price[price][]" value="{{$port->fcl20}}">
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table><br><br>
                        <input type="submit" name="generate" class="btn btn-blue-grey ">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</html>
@stop
