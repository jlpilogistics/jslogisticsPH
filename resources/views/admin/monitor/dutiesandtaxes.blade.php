@extends('admin.partials.assets')

        <!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    @yield('assets')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>
@section('content')
    <section id="configuration">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Duties and Taxes</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body card-dashboard">
                            <table class="table table-striped table-bordered zero-configuration " >
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Type Commodity</th>
                                    <th>Tariff Rate</th>
                                    <th>Edit Tariff</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($comm as $com)
                                <tr>

                                    <td>{{$com->id}}</td>
                                    <td>{{$com->type}}</td>
                                        <td>{{$com->tax}}%</td>
                                    <td>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <button class="btn btn-info fas fa-edit open_modal tariff" value="{{$com->id}}"  data-toggle="modal"
                                                   data-backdrop="false" data-target="#edit"></button>
                                                </div>
                                        </div>
                                    </td>

                                </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Type Commodity</th>
                                    <th>Tariff Rate</th>
                                    <th>Edit Tariff</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!-- Modal -->
    <div class="modal fade text-left" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel11"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-info white">
                    <h4 class="modal-title white" id="myModalLabel11">Edit Tariff Rate</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="card-content collapse show">
                        <div class="card-body card-dashboard ">

                            <form action="{{action('tarffRateController@update', 1) }}" method="PATCH">
                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                <div class="input-group">
                                    <input type='text' name="editType" class="form-control tariff" id="type" value=""
                                    readonly/>
                                </div><br>
                                <div class="input-group">
                                    <input type='text' name="editTax" class="form-control" id="tax" value=""
                                    />
                                </div>

                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-info">Save Changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>

@endsection