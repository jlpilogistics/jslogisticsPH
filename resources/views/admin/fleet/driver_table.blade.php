@include('admin.fleet.AvailModal')
@extends('admin.fleet.assets')
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>  
@yield('assets')
</head>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-11 col-md-offset-1">
            <!--  <a class="btn btn-success" data-toggle="modal" data-target="#myAvail">Assign Vehicle</a> <br><br> -->
            <div class="panel panel-default">
                <div class="panel-heading">Driver's Information</div>
                <div class="panel-body">
                   
                    <table class="table">
                        <tr>
                             <th>Image</th>
                            <th>Driver ID</th>
                            <th>Full Name</th>
                            <th>Address</th>
                            <th>Date Of Birth</th>
                            <th>Contact No.</th>
                            <th>License No.</th>
                            <th>Expiration Date</th>
                            <th>Assign Vehicle</th>
                          <!--   <th>Action</th> -->
                        </tr>
                        @foreach($tasks as $task)
                        <tr>
                            <td><img src="{{asset($task->img)}}" alt="" width="50" height="50"></td>
                            <td>{{$task->driver_id }}</td>
                            <td>{{$task->fname}}</td>
                            <td>{{$task->address}}</td>
                            <td>{{$task->dateofbirth}}</td>
                            <td>{{$task->phoneNum}}</td>
                            <td>{{$task->licenceNo}}</td>
                            <td>{{$task->expDate}}</td>
                            <td><button type="button" class="btn btn-primary la la-truck" data-toggle="modal" data-target="#myAvail"  id="add"></button></td>
                          <!--  <td><a href="#" class=" btn btn-warning fas fa-trash-alt "></a><a href="#" class="btn btn-primary fas fa-edit"></a> </td> -->
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>

             <script type="text/javascript">
        $("#add").click(function(){
            $('#myAvail').modal('show');

    });

</script>   
            <!-- { !! link_to_route('insert','Add New',null,['class' =>'btn btn-primary']) !!} -->
            <a href="{{route('drivers.create')}}" class="btn btn-primary">Add New</a>
        </div>
    </div>
</div>


@endsection