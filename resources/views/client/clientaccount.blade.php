
@extends('client.partials.clientassets')
        <!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    @yield('assets')
</head>
@section('content')
    @extends('client.partials.accountHeader')
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 col-md-push-1">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Profile</h4>
                            </div>
                            <div class="content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                @foreach( $clients as $getClient)
                                                <label>First Name</label>
                                                <input type="text" class="form-control border-input" value="{{$getClient -> firstName}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control border-input" value="{{$getClient -> lastName}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">

                                                <label>Company</label>
                                                <input type="text" class="form-control border-input" value="{{$getClient -> company}}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Contact Number</label>
                                                <input type="text" class="form-control border-input" value="{{$getClient -> phone}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control border-input" value="{{$getClient -> email}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control border-input" value="{{$getClient -> address}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" class="form-control border-input" value="{{$getClient -> city}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input type="text" class="form-control border-input" value="{{$getClient -> country}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Postal Code</label>
                                                <input type="number" class="form-control border-input" value="{{$getClient -> zip}}">
                                            </div>
                                        </div>
                                    </div>
@endforeach

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Update Profile</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>
</html>
@stop
