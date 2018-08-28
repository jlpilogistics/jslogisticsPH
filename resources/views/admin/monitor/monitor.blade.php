@extends('admin.fleet.assets')
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
@yield('assets')
</head>
@section('content')
  <section id="scrolling">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Monitor Cargo</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                      <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body card-dashboard " style="overflow-x:auto;">
                    <table class="table table-striped table-bordered scrolling-dataTable">
                      <thead>
                        <tr>
                          <th>Client ID</th>
                           <th>Status Update</th>
                          <th>Origin</th>
                          <th>Destination</th>
                          <th>Consignee</th>
                          <th>Email</th>
                          <th>Update Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>KSI312123</td>
                          <td>In transit</td>
                          <td>Edinburgh</td>
                          <td>Philippines</td>
                          <td>Tiger Nixon</td>
                          <td>tiger@yahoo.com</td>
                          <td><a href="" class=" btn btn-primary fas fa-trash-alt">Delivered</a></td>
                        </tr>
                        <tr>
                          <td>LDK324234</td>
                          <td>Pending</td>
                          <td>Tokyo</td>
                          <td>Philippines</td>
                          <td>Garrett Winters</td>
                          <td>garrnett@yahoo.com</td>
                        <td><a href="" class=" btn btn-primary fas fa-trash-alt">Delivered</a></td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>Client ID</th>
                           <th>Status Update</th>
                          <th>Origin</th>
                          <th>Destination</th>
                          <th>Consignee</th>
                          <th>Email</th>
                           <th>Update Status</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--/ Scrolling DataTable table -->

        @endsection