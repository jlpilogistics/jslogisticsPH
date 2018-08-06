@section('div_class', 'homepage common-page request-page')
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
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="{{URL::asset('app/css/owl.carousel.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('app/css/global.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('app/css/style.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('app/css/homepage-4.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('app/css/responsive.css')}}" />
    <link href="{{URL::asset('app/css/skin.less')}}" rel="stylesheet/less">
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
                    <form action="/products/create-step1" method="post">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="heading "> <span>Step 1</span>
                                    <h3>Basic Information</h3>
                                </div>
                                <div class="quote-form-box"  ng-controller="RequestController">
                                        <div class="success" ng-class="{'submissionMessage' : submission}" ng-bind="successsubmissionMessage" id="success"></div>
                                        <div class="row">
                                            <div class=" col-xs-12 col-sm-4 right-space">
                                                <h6>Shipment Type</h6>
                                            </div>
                                        </div>
                                        <div class="row custom-padding">
                                            <div class="col-xs-12 col-sm-3 right-space">
                                                @if(Session::has('quote'))
                                                    {!! Form::select('shiptypes', $type,  Session::get('quote')->shiptypes, ['class'=>'quote-service drop form-control', 'id'=>'transaction']) !!}
                                                @else
                                                    {!! Form::select('shiptypes', $type, null, ['class'=>'quote-service drop form-control', 'id'=>'transaction']) !!}
                                                @endif
                                                {{--<select class="form-control" name="shiptypes">--}}
                                                    {{--<option {{{ (isset($product->shiptypes) && $product->shiptypes == 'Apple') ? "selected=\"selected\"" : "" }}}>Apple</option>--}}
                                                    {{--<option {{{ (isset($product->shiptypes) && $product->shiptypes == 'Google') ? "selected=\"selected\"" : "" }}}>Google</option>--}}
                                                    {{--<option {{{ (isset($product->shiptypes) && $product->shiptypes == 'Mi') ? "selected=\"selected\"" : "" }}}>Mi</option>--}}
                                                    {{--<option {{{ (isset($product->shiptypes) && $product->shiptypes == 'Samsung') ? "selected=\"selected\"" : "" }}}>Samsung</option>--}}
                                                {{--</select>--}}
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class=" col-xs-12 col-sm-4 right-space">
                                                <h6>Origin</h6>
                                            </div>
                                        </div>
                                        <div class="row custom-padding">
                                            <div class="col-xs-12 col-sm-3 right-space">
                                                {{--{{ Form::select('CompanyID', $comp, array($selectedId), array('id' => 'seCompanyID')) }}--}}
                                                @if(Session::has('quote'))
                                                    @if(Session::get('quote')->shiptypes == 'Import' || Session::get('quote')->shiptypes == 'Export')
                                                         {!! Form::select('mode', array(''=>'Choose Mode of Shipment','Air'=>'Air', 'FCL20'=>'FCL20','FCL40'=>'FCL40','LCL'=>'LCL'), $quote->mode,['class'=>'quote-service drop form-control', 'id'=>'mode'] ) !!}
                                                    @elseif(Session::get('quote')->shiptypes == 'Domestic')
                                                        {!! Form::select('mode', array(''=>'Choose Mode of Shipment','FTL'=>'FTL','LTL'=>'LTL'), $quote->mode,['class'=>'quote-service drop form-control', 'id'=>'mode'] ) !!}
                                                    @endif
                                                @else
                                                    {!! Form::select('mode', array(''=>'Choose Mode of Shipment'), null,['class'=>'quote-service drop form-control', 'id'=>'mode'] ) !!}
                                                @endif
                                            </div>
                                            <div class="col-xs-12 col-sm-2 right-space">
                                                {!! Form::label('zip', 'Zip Code') !!}
                                                <input type="text" value="{{{ $origin->zip or '' }}}" class="form-control quote-city" id="company" name="zip"/>
                                            </div>
                                            <div class="col-xs-12 col-sm-2 right-space">
                                                {!! Form::label('country', 'Country') !!}
                                                <input type="text" value="{{{ $origin->country or '' }}}" class="form-control quote-city" id="company" name="country"/>
                                            </div>
                                            <div class="col-xs-12 col-sm-2 right-space">
                                                {!! Form::label('city', 'City') !!}
                                                <input type="text" value="{{{ $origin->city or '' }}}" class="form-control quote-city" id="company" name="city"/>
                                            </div>
                                            <div class="col-xs-12 col-sm-3 right-space">
                                                {!! Form::label('etd', 'Departure Date') !!}
                                                <input type="date" value="{{{ $origin->etd or '' }}}" class="form-control quote-city" id="company" name="etd"/>
                                            </div>
                                            <div class="col-xs-12 col-sm-offset-3 col-sm-6 right-space">
                                                {!! Form::label('port', 'Origin via Port') !!}
                                                <input type="text" value="{{{ $origin->port or '' }}}" class="form-control quote-city" id="company" name="port"/>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class=" col-xs-12 col-sm-4 right-space">
                                                <h6>Destination</h6>
                                            </div>
                                        </div>
                                        <div class="row custom-padding">
                                            <div class="col-xs-12 col-sm-offset-3 col-sm-2 right-space">
                                                {!! Form::label('zips', 'Zip Code') !!}
                                                <input type="text" value="{{{ $dest->dzip or '' }}}" class="form-control quote-city" id="company" name="dzip"/>
                                            </div>
                                            <div class="col-xs-12 col-sm-2 right-space">
                                                {!! Form::label('countrys', 'Country') !!}
                                                <input type="text" value="{{{ $dest->dcountry or '' }}}" class="form-control quote-city" id="company" name="dcountry"/>
                                            </div>
                                            <div class="col-xs-12 col-sm-2 right-space">
                                                {!! Form::label('citys', 'City') !!}
                                                <input type="text" value="{{{ $dest->dcity or '' }}}" class="form-control quote-city" id="company" name="dcity"/>
                                            </div>
                                            <div class="col-xs-12 col-sm-3 right-space">
                                                {!! Form::label('etas', 'Arrival Date') !!}
                                                <input type="text" value="{{{ $dest->deta or '' }}}" class="form-control quote-city" id="company" name="deta"/>
                                            </div>
                                            <div class="col-xs-12 col-sm-offset-3 col-sm-6 right-space">
                                                {!! Form::label('ports', 'Origin via Port') !!}
                                                <input type="text" value="{{{ $dest->dport or '' }}}" class="form-control quote-city" id="company" name="dport"/>
                                            </div>
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            <div class="error error-msg" ng-class="{'submissionMessage' : submission}" ng-bind="submissionMessage" ng-disabled = "requestForm.$invalid"></div>
                                        </div>
                                </div>
                            </div>
                    </div>
                        <div class="order-wrap" style="padding-bottom: 50px; float: right;">
                            <button type="submit" class="update-cart">Next</button>
                        </div>
                    </form>
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
    <script type="text/javascript">
        $(document).ready(function(){

            $("#transaction").on("change", function(){
                var selected = this.value;
                if (selected == 'Import' || selected == 'Export') {
                    var resultData = ["Air", "FCL40", "FCL20", "LCL"];
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