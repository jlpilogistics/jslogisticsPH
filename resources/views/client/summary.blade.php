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
    <section id="section">
        <!--Section box starts Here -->
        <div class="section shop-section">
            <div class="shipping-product">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <h4 class="text-center">Summary &amp; Submit</h4>
                            <br>
                            <div class="row summary_div">
                                <div class="col-lg-3 text-center">
                                    <i class="pe-7s-check fa-5x text-muted bc-main-color"></i>
                                    <p class="small m-t-md">
                                        <strong>One click</strong><br>
                                        Now is the chance to review your request data. <span class="one_click2">You can always go back and make changes if needed. Just follow the yellow button "Previous Step"</span>
                                    </p>
                                </div>
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <label>My Ref#:</label>
                                        </div>
                                        <div class="col-xs-9">
                                            <label class="sum_ref font-bold text-success"></label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <label>Mode:</label>
                                        </div>
                                        <div class="col-xs-9">
                                            <label class="sum_mode">
                                                {{$data['transaction']}}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <label>Origin:</label>
                                        </div>
                                        <div class="col-xs-9">
                                            <label class="sum_origin">{{$data['port']}}</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <label>Pickup Date:</label>
                                        </div>
                                        <div class="col-xs-9">
                                            <label class="sum_pickdate">{{$data['etd']}}</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <label>Destination:</label>
                                        </div>
                                        <div class="col-xs-9">
                                            <label class="sum_destination">{{$data['ports']}}</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <label>Delivery Date:</label>
                                        </div>
                                        <div class="col-xs-9">
                                            <label class="sum_deldate">{{$data['etd']}}</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <label>Commodity:</label>
                                        </div>
                                        <div class="col-xs-9">
                                            <label class="sum_commodity">{{$data['goods']}}</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <label>Product:</label>
                                        </div>
                                        <div class="col-xs-9">
                                            <label class="sum_product">{{$data['name']}}</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <label>DG:</label>
                                        </div>
                                        <div class="col-xs-9">
                                            <label class="sum_dg">{{$data['danger']}}</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <label>Temp:</label>
                                        </div>
                                        <div class="col-xs-9">
                                            <label class="sum_temp">{{$data['temp']}}</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <label>Incoterm:</label>
                                        </div>
                                        <div class="col-xs-9">
                                            <label class="sum_incoterm">{{$data['term']}}</label>
                                        </div>
                                    </div>
                                    <div class="row sum_dimension_table" style="display: block;">
                                        <div class="col-xs-3">
                                            <label>Dimensions:</label>
                                        </div>
                                        <div class="col-xs-9">
                                            <table class="table table-bordered table-responsive sum_dimension">
                                                <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>pieces</th>
                                                    <th>package</th>
                                                    <th>length</th>
                                                    <th>width</th>
                                                    <th>height</th>
                                                    <th>weight Kg</th>
                                                </tr>
                                                </thead>
                                                <tbody class="tbsumdim"><tr><td>{{$data['dimused']}}</td><td>{{$data['quantity']}}</td><td>{{$data['package']}}</td><td>{{$data['length']}}</td><td>{{$data['width']}}</td><td>{{$data['height']}}</td><td>{{$data['weight']}}</td></tr></tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="row sumweights" style="display: none;">
                                        <div class="col-xs-3">
                                            <label>Weights [Kg]:</label>
                                        </div>
                                        <div class="col-xs-9">
                                            <label class="sum_weight">{{$data['aweight']}}</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <label>Note:</label>
                                        </div>
                                        <div class="col-xs-9">
                                            <label class="sum_note">{{$data['notes']}}</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <label>Document upload:</label>
                                        </div>
                                        <div class="col-xs-9">
                                            <label class="sum_documents">0 Documents</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                         </div>
                     </div>
                </div>
        </div>
        <!--Section box ends Here -->
            {!! Form::model(['method="PATCH', 'action'=>['Client\QuotesController@summary',$data]]) !!}
                {!! Form::submit('Request a Quote') !!}
            {!! Form::close() !!}
        </div>
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


@stop