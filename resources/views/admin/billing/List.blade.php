
@extends('admin.partials.assets')
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
                        <a href="{{url('/profile')}}" class="btn btn-primary">View Profile</a>
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
