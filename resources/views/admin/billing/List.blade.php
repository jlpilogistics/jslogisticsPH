
@extends('admin.billing.assets')
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>  
@yield('assets')
</head>
@section('content')

<!--/ start here-->
      <div class="content-detached">
        <div class="content-body">
          <section class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-head">
                  <div class="card-header">
                    <h4 class="card-title">List of Customers</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a><br>
                    <input type="search" id="search-contacts" class="form-control col-3 " placeholder="Search Customers...">
                  </div>
                </div>
                <div class="card-content">
                  <div class="card-body">
                    <!-- Task List table -->
                    <div class="table-responsive">
                      <table id="users-contacts" class="table table-white-space table-bordered row-grouping display no-wrap icheck table-middle">
                        <thead>
                          <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Company</th>
                            <th>Incoterm</th>
                            <th>Shipment Type</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($client as $clients)
                          @foreach($clients->transaction as $data)
                          <tr>
                            <td>
                              <input type="checkbox" class="input-chk">
                            </td>
                            <td>
                              <div class="media">
                                <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-online rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-2.png" alt="avatar"><i></i></span>
                                </div>
                                <div class="media-body media-middle">
                                  <a href="#" class="media-heading">{{$clients->lastName}} {{$clients->firstName}}</a>
                                </div>
                              </div>
                            </td>
                            <td class="text-center">
                              {{$clients->company}}
                            </td>

                            <td class="text-center">
                              {{$data->goods->term}}
                            </td>
                            <td>{{$data->goods->shiptypes}}</td>
                            <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i>Transaction</a>
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i>Add reports</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i>Cash Advance</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i>List of Reports</a>
                                </span>
                              </span>
                            </td>
                          </tr>
                            @endforeach
                          @endforeach
                        </tbody>
                      </table>
              </div>
            </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
@stop

      <!--/ ends here-->
