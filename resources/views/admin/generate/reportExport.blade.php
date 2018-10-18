@extends('admin.partials.assets')
        <!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    @yield('assets')
</head>
@section('content')

    <section id="scrolling">
        <div class="content-body">
            <section id="configuration">
                <div class="row">
                    <div class="col-12">
                        <button name="b_print" type="button" class="btn btn-primary ft-printer" onClick="printContent('printablediv')"></button>
                       <br><br> <div id="printablediv">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Export Shipment Table</h4>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard">
                                    <table class="table table-striped table-bordered">
                                        <thead class="bg-yellow bg-lighten-4">
                                        <tr>
                                            <th>Date Requested</th>
                                            <th>Shipper Id</th>
                                            <th>Shipper Name </th>
                                            <th>Origin</th>
                                            <th>Consignee Name</th>
                                            <th>Destination</th>
                                            <th>Commodity</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach( $export as $ex)
                                            <?php
                                            $client = \App\Client::where('id', $ex->client_id)->first();
                                            $consignee = \App\Consignee::where('id', $ex->consignee_id)->first();
                                            ?>
                                            <tr>
                                                <td>{{$ex->updated_at}}</td>
                                                <td>{{$ex->transact}}</td>
                                                <td>{{$client->firstName}}</td>
                                                <td>{{$ex->origin->port}}</td>
                                                <td>{{$ex->consignee_id}}</td>
                                                <td>{{$ex->destination->dport}}</td>
                                                <td>{{$ex->goods->goods}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>Date Requested</th>
                                            <th>Shipper Id</th>
                                            <th>Shipper Name </th>
                                            <th>Origin</th>
                                            <th>Consignee Name</th>
                                            <th>Destination</th>
                                            <th>Commodity</th>

                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    </div>
</html>
<script language="javascript">
    function printContent(el){
        var restorepage = $('body').html();
        var printcontent = $('#' + el).clone();
        $('body').empty().html(printcontent);
        window.print();
        $('body').html(restorepage);
    }

</script>
@endsection