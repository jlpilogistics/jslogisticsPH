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
                <div class="col-13">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Schedule Import Haulage</h4>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table class="table table-borderless mb-0">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <h4>Shipper: </h4>
                                            </td>
                                            <td class="type-info text-right">Gulf Oil</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h4>Commodity</h4>
                                            </td>
                                            <td class="type-info text-right">BAGS</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h4>ETA</h4>
                                            </td>
                                            <td class="type-info text-right">9:00am</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="card-body card-dashboard ">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><span class="la la-calendar-o"></span></span></div>
                                    <input type='text' class="form-control pickadate" placeholder="Select a date"
                                    />
                                </div><br>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><span class="ft-clock"></span></span></div>
                                    <input type='text' class="form-control pickatime" placeholder="Select a time"
                                    />
                                </div><br>
                                <input type="submit" name="haulage" class="btn btn-primary">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
            </div>
        </div>
    </div>
    </div>
</html>
@endsection