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
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="heading "> <span>Step 1</span>
                                <h3>Basic Information</h3>
                            </div>
                            <div class="quote-form-box"  ng-controller="RequestController">
                                <form action="/products/create-step2" method="post" id="goods">
                                    {{ csrf_field() }}
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

                                            {!! Form::select('goods', array(''=>'Select type of goods', 'List of Goods'=>$commodity) , Session::has('goods') ? Session::get('goods')->goods : null, ['class'=>'quote-service drop', 'id'=>'transact']) !!}
                                        </div>
                                        <div class="col-xs-12 col-sm-offset-1 col-sm-3 right-space">
                                            <input type="text" value="{{{ $goods->name or '' }}}" class="form-control quote-city" id="company" name="name"/>
                                        </div>
                                        <div class="col-xs-12 col-sm-offset-1 col-sm-3 right-space">
                                            {!! Form::select('term',array(''=>'Select incoterms agreement', 'Incoterms'=>$terms), Session::has('goods') ? Session::get('goods')->term : null, ['class'=>'quote-service drop', 'id'=>'transact']) !!}
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
                                        <div class="col-xs-12 col-sm-3 billing-form right-space" style="padding-left: 18px;">
                                            <input type="radio" class="billing-address" id="ydanger" name="danger" value='Yes'>
                                            <label for="ydanger">Yes</label>
                                            <input type="radio" class="billing-address" id="ndanger" name="danger" value="No">
                                            <label for="ndanger">No</label>
                                        </div>
                                        <div class="col-xs-12 col-sm-offset-1 billing-form col-sm-3" style="padding-left: 18px;">
                                            <input type="radio" class="billing-address" id="ytemp" name="temp" value="Yes">
                                            <label for="ytemp">Yes</label>
                                            <input type="radio" class="billing-address" id="ntemp" name="temp" value="No">
                                            <label for="ntemp">No</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class=" col-xs-12 col-sm-4 right-space">
                                            <h6>Description</h6>
                                        </div>
                                    </div>
                                    <div class="row custom-padding">
                                        <div class="col-xs-12">
                                            <textarea name="description" ng-model="formData.message"  ng-class="{'error' : errorTextarea}" style="height:100px;">{{ $goods->message or '' }}</textarea>
                                        </div>
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
                                    <div class="order-wrap" style="padding-bottom: 50px; float: right;">
                                        <a type="button" href="/products/create-step1" class="update-cart">Previous</a>
                                        <button type="submit" class="update-cart">Next</button>
                                    </div>
                                    <div class="error error-msg" ng-class="{'submissionMessage' : submission}" ng-bind="submissionMessage" ng-disabled = "requestForm.$invalid"></div>
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
        {{--<script>--}}
            {{--$(document).ready(function(){--}}
                {{--$("#goods").on("submit", function(){--}}
                    {{--window.history.forward();--}}
                {{--});--}}
            {{--});--}}
        {{--</script>--}}

    @stop