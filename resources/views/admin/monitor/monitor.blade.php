@extends('admin.partials.assets')
        <!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  @yield('assets')
</head>
@section('content')
  <div class="content-body">
    <section id="configuration">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Update Export Shipment</h4>
            </div>
            <div class="card-content collapse show">
              <div class="card-body card-dashboard">
                <table class="table table-striped table-bordered zero-configuration">
                  <thead>

                  <tr>
                    <th>Client No.</th>
                    <th>Commodity</th>
                    <th>ETA</th>
                    <th>Final Destination</th>
                    <th>Current Status</th>
                    <th>Remarks</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($tasks as $export)
                    <?php
                            $client = \App\Client::where('id',$export->client_id)->first();
                    $consignee = \App\Consignee::where('id',$export->client_id)->first();
                    ?>
                  <tr>
                    <td>{{$export->client_id}}</td>
                    <td>{{$export->goods->goods}}</td>
                    <td>{{$export->destination->deta}}</td>
                    <td>{{$export->destination->dcountry}}</td>
                    <td>{{$export->status_id}}</td>
                    <td>
                      <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                          <button type="button" class="btn btn-blue-grey" data-toggle="modal"
                                  data-backdrop="false" data-target="#info">
                            Delivered
                          </button>
                          <!-- Modal -->
                          <div class="modal fade text-left" id="info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel11"
                               aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header bg-info white">
                                  <h4 class="modal-title white" id="myModalLabel11">Update Status to Delivered</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <table>
                                    <tbody>
                                    <tr>
                                      <td>
                                        <p> Client No. : </p>
                                      </td>
                                      <td class="type-info text-right">ISJLP1102</td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <p>Shipper : </p>
                                      </td>
                                      <td class="type-info text-right">Pernod</td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <p>Origin : </p>
                                      </td>
                                      <td class="type-info text-right">Singapore</td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <p>Destination : </p>
                                      </td>
                                      <td class="type-info text-right">Cebu</td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <p>Commodity : </p>
                                      </td>
                                      <td class="type-info text-right">BAGS</td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <p>Product Name : </p>
                                      </td>
                                      <td class="type-info text-right">Hershel</td>
                                    </tr>

                                    </tbody>
                                  </table>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-outline-info">Confirm</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </td>
                  </tr>
  @endforeach

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Client No.</th>

                    <th>Commodity</th>
                    <th>ETA</th>
                    <th>Final Destination</th>
                    <th>Current Status</th>
                    <th>Remarks</th>
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
</html>
@endsection