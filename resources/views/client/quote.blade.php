@section('div_class', 'common-page request-page')
@extends('layouts.master')
@section('styles')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Transport</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Karla:400,700italic,700,400italic' rel='stylesheet' type='text/css'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{URL::asset('app/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('app/css/bootstrap.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app/rs-plugin/css/settings.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app/css/dropdown.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('app/css/owl.carousel.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('app/css/global.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('app/css/style.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('app/css/homepage-4.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('app/css/responsive.css')}}" />
    <link href="{{URL::asset('app/css/skin.less')}}" rel="stylesheet/less">
    <link href="{{URL::asset('app/css/smart_wizard.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('app/css/smart_wizard_theme_circles.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('app/css/smart_wizard_theme_arrows.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('app/css/smart_wizard_theme_dots.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unpkg.com/vue-form-wizard/dist/vue-form-wizard.min.css">


@stop

@section('content')

    <div class="banner service-banner">
        <div class="banner-image-plane parallax">
            <img src="{{URL::asset('app/images/about_us.jpg')}}" alt="" />
        </div>
        <div class="banner-text">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <a href="#" class="shipping">Import</a>
                        <h1>request a quote</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="section">
        <!--Section box starts Here -->
        <div class="section">
            <div class="quote-form">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="heading "> <span>our</span>
                                <h3>quote form</h3>
                            </div>
                            <div class="quote-form-box "  ng-controller="RequestController">
                                {!! Form::open(['method="POST', 'action'=>'Client\QuotesController@create', 'class'=>'dropzone needsclick dz-clickabl']) !!}
                                    <div id="smartwizard" class="sw-main sw-theme-arrows">
                                        <ul class="nav nav-tabs step-anchor" >
                                            <li><a href="#step-1" style="height:75px; width:200px; font-size: 20px; line-height: 50px;">Basic Information<br /></a></li>
                                            <li><a href="#step-2" style="height:75px; width:200px; font-size: 20px; line-height: 50px;">Commodity<br /><small>This is tab's description</small></a></li>
                                            <li><a href="#step-3" style="height:75px; width:200px; font-size: 20px; line-height: 50px;">Shipment<br /><small>This is tab's description</small></a></li>
                                            <li><a href="#step-4" style="height:75px; width:200px; font-size: 20px; line-height: 50px;">Documents<br /><small>This is tab's description</small></a></li>
                                            <li><a href="#step-5" style="height:75px; width:200px; font-size: 20px; line-height: 50px;">Quote Summary<br /><small>This is tab's description</small></a></li>
                                        </ul>
                                        <div class="sw-container tab-content" style="min-height: 196px; padding: 50px 50px 50px; ">
                                            <div id="step-1" class="">
                                                <div class="success" ng-class="{'submissionMessage' : submission}" ng-bind="successsubmissionMessage" id="success"></div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 right-space" >
                                                            {!! Form::label('transaction', 'Transaction') !!}
                                                            {!! Form::select('transaction',array('1'=>'Import','2'=>'Domestic','3'=>'Export'),null, ['class'=>'quote-service drop', 'id'=>'transact']) !!}
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class=" col-xs-12 col-sm-4 right-space">
                                                            <h6>Origin</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row custom-padding">
                                                        <div class="col-xs-12 col-sm-3 right-space">
                                                            {!! Form::label('mode', 'Mode of Shipment') !!}
                                                            {!! Form::select('mode',array(''=>'Choose Mode of Shipment'),null, ['class'=>'quote-service drop', 'id'=>'mode']) !!}
                                                        </div>
                                                        <div class="col-xs-12 col-sm-2 right-space">
                                                            {!! Form::label('zip', 'Zip Code') !!}
                                                            {!! Form::text('zip', null, ['class'=>'quote-city', 'id'=>'company']) !!}
                                                        </div>
                                                        <div class="col-xs-12 col-sm-2 right-space">
                                                            {!! Form::label('country', 'Country') !!}
                                                            {!! Form::text('country', null, ['class'=>'quote-city', 'id'=>'company']) !!}
                                                        </div>
                                                        <div class="col-xs-12 col-sm-2 right-space">
                                                            {!! Form::label('city', 'City') !!}
                                                            {!! Form::text('city', null, ['class'=>'quote-city', 'id'=>'company']) !!}
                                                        </div>
                                                        <div class="col-xs-12 col-sm-3 right-space">
                                                            {!! Form::label('etd', 'Departure Date') !!}
                                                            {!! Form::date('etd', null, ['class'=>'quote-city', 'id'=>'company']) !!}
                                                        </div>
                                                        <div class="col-xs-12 col-sm-offset-3 col-sm-6 right-space">
                                                            {!! Form::label('origin', 'Origin via Port') !!}
                                                            {!! Form::text('origin', null, ['class'=>'quote-city', 'id'=>'company']) !!}
                                                        </div>
                                                    </div>
                                                <div class="row">
                                                    <div class=" col-xs-12 col-sm-4 right-space">
                                                        <h6>Destination</h6>
                                                    </div>
                                                </div>
                                                <div class="row custom-padding">
                                                    <div class="col-xs-12 col-sm-offset-3 col-sm-2 right-space">
                                                        {!! Form::label('zip', 'Zip Code') !!}
                                                        {!! Form::text('zip', null, ['class'=>'quote-city', 'id'=>'company']) !!}
                                                    </div>
                                                    <div class="col-xs-12 col-sm-2 right-space">
                                                        {!! Form::label('country', 'Country') !!}
                                                        {!! Form::text('country', null, ['class'=>'quote-city', 'id'=>'company']) !!}
                                                    </div>
                                                    <div class="col-xs-12 col-sm-2 right-space">
                                                        {!! Form::label('city', 'City') !!}
                                                        {!! Form::text('city', null, ['class'=>'quote-city', 'id'=>'company']) !!}
                                                    </div>
                                                    <div class="col-xs-12 col-sm-3 right-space">
                                                        {!! Form::label('etd', 'Departure Date') !!}
                                                        {!! Form::date('etd', null, ['class'=>'quote-city', 'id'=>'company']) !!}
                                                    </div>
                                                    <div class="col-xs-12 col-sm-offset-3 col-sm-6 right-space">
                                                        {!! Form::label('origin', 'Origin via Port') !!}
                                                        {!! Form::text('origin', null, ['class'=>'quote-city', 'id'=>'company']) !!}
                                                    </div>
                                                </div>
                                                <div class="error error-msg" ng-class="{'submissionMessage' : submission}" ng-bind="submissionMessage" ng-disabled = "requestForm.$invalid"></div>
                                            </div>
                                            <div id="step-2" class="">
                                                <div class="success" ng-class="{'submissionMessage' : submission}" ng-bind="successsubmissionMessage" id="success"></div>
                                                <div class="row">
                                                    <div class=" col-xs-12 col-sm-4 right-space">
                                                        <h6>Commodity</h6>
                                                    </div>
                                                    <div class=" col-xs-12 col-sm-4 right-space">
                                                        <h6>Product Name</h6>
                                                    </div>
                                                    <div class=" col-xs-12 col-sm-4 right-space">
                                                        <h6>Incoterms</h6>
                                                    </div>
                                                </div>
                                                <div class="row custom-padding">
                                                    <div class="col-xs-12 col-sm-3 right-space">
                                                        {!! Form::select('transaction',array('1'=>'Import','2'=>'Domestic','3'=>'Export'),null, ['class'=>'quote-service drop', 'id'=>'transact']) !!}
                                                    </div>
                                                    <div class="col-xs-12 col-sm-offset-1 col-sm-3 right-space">
                                                        {!! Form::select('transaction',array('1'=>'Import','2'=>'Domestic','3'=>'Export'),null, ['class'=>'quote-service drop', 'id'=>'transact']) !!}
                                                    </div>
                                                    <div class="col-xs-12 col-sm-offset-1 col-sm-3 right-space">
                                                        {!! Form::select('transaction',array('1'=>'Import','2'=>'Domestic','3'=>'Export'),null, ['class'=>'quote-service drop', 'id'=>'transact']) !!}
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class=" col-xs-12 col-sm-4 right-space">
                                                        <h6>Dangerous Product</h6>
                                                    </div>
                                                    <div class=" col-xs-12 col-sm-4 right-space">
                                                        <h6>Temperature Product</h6>
                                                    </div>
                                                </div>
                                                <div class="row custom-padding">
                                                    <div class="col-xs-12 col-sm-3">
                                                        {!! Form::select('transaction',array('1'=>'Import','2'=>'Domestic','3'=>'Export'),null, ['class'=>'quote-service drop', 'id'=>'transact']) !!}
                                                    </div>
                                                    <div class="col-xs-12 col-sm-offset-1 col-sm-3">
                                                        {!! Form::select('transaction',array('1'=>'Import','2'=>'Domestic','3'=>'Export'),null, ['class'=>'quote-service drop', 'id'=>'transact']) !!}
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class=" col-xs-12 col-sm-4 right-space">
                                                        <h6>Description</h6>
                                                    </div>
                                                </div>
                                                <div class="row custom-padding">
                                                    <div class="col-xs-12">
                                                        <textarea placeholder="Description*" name="message" ng-model="formData.message"  ng-class="{'error' : errorTextarea}" style="height:100px;"></textarea>
                                                    </div>
                                                </div>
                                                <div class="error error-msg" ng-class="{'submissionMessage' : submission}" ng-bind="submissionMessage" ng-disabled = "requestForm.$invalid"></div>
                                            </div>
                                            <div id="step-3" class="">
                                                <div class="col-xs-12" style="padding-bottom: 50px; ">
                                                    <label for="" class="text-info">Dimensions </label>
                                                    <br>
                                                    <table id="basic_dim_table" data-sort="false" class="table table-bordered table-hover dimensiontable">
                                                        <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th>pieces</th>
                                                            <th>package</th>
                                                            <th>length</th>
                                                            <th>width</th>
                                                            <th>height</th>
                                                            <th>weight Kg</th>
                                                            <th>
                                                                <button name="add-dim-row" type="button" class="btn btn-info btn-sm " style="width: 40px"><i class="fa fa-plus-circle"></i></button>
                                                            </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr id="dim-main-row">
                                                            <td>
                                                                <select name="dim_dim" class="form-control calculate_dims" style="width: 80px">
                                                                    <option value="1">cm</option>
                                                                    <option value="2">inch</option>
                                                                </select>
                                                                <input type="hidden" name="calc_vw">

                                                            </td>
                                                            <td>
                                                                <input type="number" class="form-control bfh-number dimitemfld calculate_dims" min="0" name="dim_pieces"></td>
                                                            <td>
                                                                <select name="dim_package" class="form-control"><option value="">Select Package</option><option value="1">BAGS</option><option value="7">BARREL</option><option value="6">BOXES</option><option value="3">BULK</option><option value="2">BUNDLE</option><option value="9">CANS</option><option value="18">CARTONS</option><option value="10">CASES</option><option value="13">COILS</option><option value="15">COLLIES</option><option value="14">CONTAINER</option><option value="17">CRATES</option><option value="21">DRUMS</option><option value="24">FLEXI TANK</option><option value="38">PACKAGES</option><option value="39">PALLETS</option><option value="37">PIECES</option><option value="44">ROLLS</option><option value="47">SKID &amp; SKIDDED PKGS</option><option value="55">TRAYS</option><option value="57">WOODEN CASES</option></select>
                                                            </td>
                                                            <td>
                                                                <input type="number" class="form-control bfh-number dimitemfld calculate_dims" min="0" name="dim_length"></td>
                                                            <td>
                                                                <input type="number" class="form-control bfh-number dimitemfld calculate_dims" min="0" name="dim_width"></td>
                                                            <td>
                                                                <input type="number" class="form-control bfh-number dimitemfld calculate_dims" min="0" name="dim_height"></td>
                                                            <td>
                                                                <input type="number" class="form-control bfh-number dimitemfld calculate_dims" min="0" name="dim_gw">
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-danger2 btn-sm deldimrow " style="width: 40px; display: none"><i class="fa fa-remove"></i></button>
                                                            </td>

                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-xs-12 " style="padding-bottom: 50px; ">
                                                    <label for="" class="text-info">Total weights </label>
                                                    <br>
                                                    <div class="form-horizontal">
                                                        <div class="form-group">
                                                            <label for="" class="control-label col-xs-3"><span class="fa fa-exclamation-circle reqast"></span>Actual weight <span class="aw_unit">[Kg]:</span> </label>
                                                            <div class="col-xs-6 col-sm-4">
                                                                <input type="number" class="form-control bfh-number" min="0" name="dim_gw_total">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" class="control-label col-xs-3">Volume weight <span class="vw_unit">[Kg]:</span></label>
                                                            <div class="col-xs-6 col-sm-4">
                                                                <input type="number" class="form-control bfh-number" min="0" name="dim_vw_total">
                                                            </div>
                                                        </div>
                                                        <div class="form-group hidden">
                                                            <label for="tShpName" class="control-label col-xs-3">Chargeable weight:</label>
                                                            <div class="col-xs-6 col-sm-4">
                                                                <label class="form-control label dim_cw_label">
                                                                </label></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="step-4" class="">
                                                <div class="success" ng-class="{'submissionMessage' : submission}" ng-bind="successsubmissionMessage" id="success"></div>
                                                <div class="row">
                                                    <div class=" col-xs-12 col-sm-4 right-space">
                                                        <h6>Notes</h6>
                                                    </div>
                                                </div>
                                                <div class="row custom-padding">
                                                    <div class="col-xs-12 right-space" >
                                                        {!! Form::textarea('zip', null, ['class'=>'quote-city', 'id'=>'company']) !!}
                                                    </div>
                                                </div>
                                                <div class="row custom-padding">
                                                    <div class=" col-xs-12 col-sm-4 right-space">
                                                        <h6>Upload Necessary Documents</h6>
                                                    </div>
                                                </div>
                                                <div class="row custom-padding">
                                                    <div class="col-xs-12 right-space" >
                                                        <div class="dropzone dz-message needsclick">
                                                            Drop files here or click to upload.<br>
                                                            <span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="step-5" class="">

                                            </div>
                                        </div>
                                    </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Section box ends Here -->
    </section>
@stop

@section('scripts')
    <script type="text/javascript" src="{{URL::asset('app/js/jquery-1.11.3.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('app/js/less.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('app/js/owl.carousel.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('app/js/jquery.selectbox-0.2.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('app/js/parallax.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('app/js/revolution-home-4.js')}}"></script>
    <script src="{{URL::asset('app/js/script.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{URL::asset('app/js/site.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('app/js/dropzone.js')}}"></script>

    <!-- Include SmartWizard JavaScript source -->
    <script type="text/javascript" src="{{URL::asset('app/js/jquery.smartWizard.min.js')}}"></script>

    <script type="text/javascript">
        $(document).ready(function(){

            // Toolbar extra buttons
            var btnFinish = $('<button></button>').text('Finish')
                .addClass('btn btn-info')
                .on('click', function(){ alert('Finish Clicked'); });
            var btnCancel = $('<button></button>').text('Cancel')
                .addClass('btn btn-danger')
                .on('click', function(){ $('#smartwizard').smartWizard("reset"); });

            // Smart Wizard
            $('#smartwizard').smartWizard({
                selected: 0,
                theme: 'arrows',
                transitionEffect:'fade',
                toolbarSettings: {toolbarPosition: 'bottom',
                    toolbarExtraButtons: [btnFinish, btnCancel]
                }
            });
            $("#transact").on("change", function(){
                var selected = this.value;
                if (selected == 1 || selected == 3) {
                    var resultData = ["Air", "FCL", "LCL"];
                    var myselect = $('<select>');
                    $('#mode').empty();
                    $.each(resultData, function (index, key) {
                        myselect.append($('<option></option>').val(key).html(key));
                    });
                    $('#mode').append(myselect.html());
                }
                else {
                    var resultDatas = ["FTL", "LTL"];
                    var myselect = $('<select>');
                    $('#mode').empty();
                    $.each(resultDatas, function (index, key) {
                        myselect.append($('<option></option>').val(key).html(key));
                    });
                    $('#mode').append(myselect.html());
                }
            });
        });

    </script>

@stop