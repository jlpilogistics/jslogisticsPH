@extends('admin.fleet.assets')
@include('admin.fleet.Addfuel')

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta name="_token" content="{!! csrf_token() !!}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
@yield('assets')
</head>
@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-0">
            <div class="panel panel-default">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header"><h2><b>FUEL RECORDS</b></h2></div>
                <div class="panel-body">
                    <table class="table table-bordered ">

                        <tr>
                            <th>Fuel Date</th>
                             <th>Plate No.</th>
                            <th>Driver</th>
                            <th>Price per Liter</th>
                            <th>Fill type</th>
                            <th>Total Cost</th>
                        </tr>
                          @foreach($getFuel as $fuels)
                        <tr>
                            <td>{{$fuels->fuel_date}}</td>
                            <td>{{$fuels->plate_no}}</td>
                            <td>{{$fuels->driver}}</td>
                            <td>{{$fuels->price}}</td>
                            <td>{{$fuels->fill}}</td>
                            <td>{{$fuels->cost}}</td>
                </tr>
                      @endforeach
                    </table>
                </div>
                </div>
                </div>
            </div>
            <!-- { !! link_to_route('insert','Add New',null,['class' =>'btn btn-primary']) !!} -->
            <a href="" class="btn btn-success" data-toggle="modal" data-target="#myfuel" id="add">Add Fuel Record</a>
        </div>
    </div>
 <script type="text/javascript">
// $.ajaxSetup({
//     headers: {
//         'X-CSRF-TOKEN' :$('meta[name="_token"]' ).attr('content')
//     }
// })

        $("#add").click(function(){
            $('#myfuel').modal('show');
    });
        // $('#frmFuel').click(function(e){
        //     e.preventDefault();
        //     var form=$('#frmFuel');
        //     var formData=form.serialize();
        //     var url =form.attr('action');
        //     $.ajax({
        //         type : 'post',
        //         url : url,
        //         data : formData,
        //         // async:true,
        //         // datatype : 'json',
        //         success:function(data){
        //             console.log(data);

        //         }
        //     })

        // })
</script>   
@endsection