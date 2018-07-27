@section('div_class', 'common-page request-page')
@extends('layouts.master')
@section('styles')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Transport</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Karla:400,700italic,700,400italic' rel='stylesheet' type='text/css'>
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
                                <form ng-submit="submitForm()" name="requestForm" method="post" novalidate>
                                    <div id="smartwizard" class="sw-main sw-theme-arrows">
                                        <ul class="nav nav-tabs step-anchor" >
                                            <li><a href="#step-1" style="height:100px; width:200px; font-size: 20px; line-height: 75px;">Basic Information<br /></a></li>
                                            <li><a href="#step-2" style="height:100px; width:200px; font-size: 20px; line-height: 75px;">Commodity<br /><small>This is tab's description</small></a></li>
                                            <li><a href="#step-3" style="height:100px; width:200px; font-size: 20px; line-height: 75px;">Shipment<br /><small>This is tab's description</small></a></li>
                                            <li><a href="#step-4" style="height:100px; width:200px; font-size: 20px; line-height: 75px;">Documents<br /><small>This is tab's description</small></a></li>
                                            <li><a href="#step-5" style="height:100px; width:200px; font-size: 20px; line-height: 75px;">Quote Summary<br /><small>This is tab's description</small></a></li>
                                        </ul>
                                        <div class="sw-container tab-content" style="min-height: 196px; padding: 50px 50px 50px; ">
                                            <div id="step-1" class="">
                                                <div class="success" ng-class="{'submissionMessage' : submission}" ng-bind="successsubmissionMessage" id="success"></div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 right-space">
                                                            {!! Form::label('transaction', 'Transaction') !!}
                                                            {!! Form::select('transaction',array('1'=>'Import','2'=>'Domestic','3'=>'Export'),null, ['class'=>'quote-service drop', 'id'=>'cars']) !!}
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class=" col-xs-12 col-sm-4 right-space">
                                                            <h6>Origin</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row custom-padding">
                                                        <div class="col-xs-12 col-sm-4 left-space ">
                                                            {!! Form::label('zip', 'Zip Code') !!}
                                                            {!! Form::text('zip', null, ['class'=>'quote-city', 'id'=>'company']) !!}
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 right-space">
                                                            {!! Form::label('city', 'City') !!}
                                                            {!! Form::text('city', null, ['class'=>'quote-city', 'id'=>'company']) !!}
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 right-space">
                                                            {!! Form::label('country', 'Country') !!}
                                                            {!! Form::text('country', null, ['class'=>'quote-city', 'id'=>'company']) !!}
                                                        </div>
                                                        <div class="col-xs-12 col-sm-6 left-space">
                                                            <input id="city" class="quote-city" type="text" placeholder="City*"  name="city" ng-model="formData.city"  ng-class="{'error' : errorCity}"/>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-6 right-space">
                                                            <input id="service" class="quote-service" type="text" placeholder="Service*"  name="service" ng-model="formData.service"  ng-class="{'error' : errorService}"/>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-6 left-space">
                                                            <input id="subject" class="quote-subject" type="text" placeholder="Subject*"  name="subject" ng-model="formData.subject"  ng-class="{'error' : errorSubject}"/>
                                                        </div>
                                                        <div class="col-xs-12">
                                                            <textarea placeholder="Comment*" name="message" ng-model="formData.message"  ng-class="{'error' : errorTextarea}"></textarea>
                                                        </div>
                                                    </div>
                                                <div class="error error-msg" ng-class="{'submissionMessage' : submission}" ng-bind="submissionMessage" ng-disabled = "requestForm.$invalid"></div>
                                            </div>
                                            <div id="step-2" class="">

                                            </div>
                                            <div id="step-3" class="">

                                            </div>
                                            <div id="step-4" class="">

                                            </div>
                                            <div id="step-5" class="">

                                            </div>
                                        </div>
                                    </div>
                                </form>
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
        });
    </script>

@stop