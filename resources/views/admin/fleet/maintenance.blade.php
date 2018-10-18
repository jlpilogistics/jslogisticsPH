@extends('admin.fleet.assets')
@include('admin.fleet.Addmaintenance')

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
                        <div class="card-header"><h2><b>Maintenance Record</b></h2></div>
                <div class="panel-body">
                    <table class="table table-bordered">

                        <tr>
                            <th>Date</th>
                             <th>Description</th>
                            <th>Vehicle Model</th>
                            <th>Total Cost</th>
                        </tr>
                      @foreach($maintain as $main)
                        <tr>
                            <td>{{$main->date}}</td>
                            <td>{{$main->description}}</td>
                            <td>{{$main->vModel}}</td>
                            <td>{{$main->number_format(total,2)}}</td>
                          
                         
                </tr>
                    @endforeach
                    </table>
                </div>
            </div>
                </div>
            </div>
            <!-- { !! link_to_route('insert','Add New',null,['class' =>'btn btn-primary']) !!} -->
            <a href="" class="btn btn-success" data-toggle="modal" data-target="#mymain" id="adds">Add Record</a>
        </div>
    </div>
 <script type="text/javascript">
// $.ajaxSetup({
//     headers: {
//         'X-CSRF-TOKEN' :$('meta[name="_token"]' ).attr('content')
//     }
// })

        $("#adds").click(function(){
            $('#mymain').modal('show');
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