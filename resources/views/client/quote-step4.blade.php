
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
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
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
    <div class="section">
        <div class="quote-form-box">
            <div class="container">
                <form action="/products/store" method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <div class="payment ">
                                <div class="">
                                    <h3 class="payment-heading">Request for Quote Summary</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3">
                            <div class="cart-total">
                                <h5>Origin</h5>
                                <div class="total-amount clearfix">
                                    <ul class="subtotal">
                                        <li>
                                            <span>City</span><strong>{{$origin->city}}</strong>
                                        </li>
                                        <li>
                                            <span>Country</span><strong>{{$origin->country}}</strong>
                                        </li>
                                        <li>
                                            <span>Zip Code</span><strong>{{$origin->zip}}</strong>
                                        </li>
                                        <li>
                                            <span>Departure</span><strong>{{$origin->etd}}</strong>
                                        </li>
                                        <li>
                                            <span>Port/Airport</span><strong>{{$origin->port}}</strong>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="cart-total">
                                <h5>Destination</h5>
                                <div class="total-amount clearfix">
                                    <ul class="subtotal">
                                        <li>
                                            <span>City</span><strong>{{$dest->dcity}}</strong>
                                        </li>
                                        <li>
                                            <span>Country</span><strong>{{$dest->dcountry}}</strong>
                                        </li>
                                        <li>
                                            <span>Zip Code</span><strong>{{$dest->dzip}}</strong>
                                        </li>
                                        <li>
                                            <span>Arrival</span><strong>{{$dest->deta}}</strong>
                                        </li>
                                        <li>
                                            <span>Port/Airport</span><strong>{{$dest->dport}}</strong>
                                        </li>
                                    </ul>


                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-sm-4">
                            <div class="cart-total">
                                <h5>Commodity Details</h5>
                                <div class="total-amount clearfix">
                                    <ul class="subtotal">
                                        <li>
                                            <span>Commodity Type</span><strong>{{$goods->goods}}</strong>
                                        </li>
                                        <li>
                                            <span>Product Name</span><strong>{{$goods->name}}</strong>
                                        </li>
                                        <li>
                                            <span>Incoterms</span><strong>{{$goods->term}}</strong>
                                        </li>
                                        <li>
                                            <span>Dangerous</span><strong>{{$goods->danger}}</strong>
                                        </li>
                                        <li>
                                            <span>Perishable</span><strong>{{$goods->temp}}</strong>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-sm-5">
                            <div class="cart-total">
                                <h5>Notes and Instructions</h5>
                                <div class="total-amount clearfix">
                                    <ul class="subtotals">
                                        <li>{{$goods->message}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-sm-9">
                            <div class="shopping-cart">
                                <h5>Packaging Dimensions</h5>
                                <ul>
                                    <li class="shop-categories hidden-xs">
                                        <div class="total">
                                            <h6>Package</h6>
                                        </div>
                                        <div class="price">
                                            <h6>Quantity</h6>
                                        </div>
                                        <div class="price">
                                            <h6>Length</h6>
                                        </div>
                                        <div class="price">
                                            <h6>width</h6>
                                        </div>
                                        <div class="price">
                                            <h6>height</h6>
                                        </div>
                                        <div class="price">
                                            <h6>weight</h6>
                                        </div>
                                    </li>
                                    @foreach($quote->package as $items)
                                    <li class="shop-categories hidden-xs">
                                        <div class="price-value">
                                            <strong>{{$items}}</strong>
                                            <span>single license</span>
                                        </div>
                                        <div class="price-value" style="padding-left: 30px;">
                                            $15.00
                                        </div>
                                        <div class="price-value" style="padding-left: 30px;">
                                            $15.00
                                        </div>
                                        <div class="price-value" style="padding-left: 30px;">
                                            $15.00
                                        </div>
                                        <div class="price-value" style="padding-left: 30px;">
                                            $15.00
                                        </div>
                                        <div class="price-value" style="padding-left: 30px;">
                                            $15.00
                                        </div>
                                    </li>
                                        @endforeach
                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="order-wrap" style="padding-bottom: 50px; float: right;">
                            <button onclick="window.history.back(-1)" class="update-cart">Previous</button>
                            <button type="submit" class="update-cart">Request Quote</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
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
    <script>

    </script>


@stop