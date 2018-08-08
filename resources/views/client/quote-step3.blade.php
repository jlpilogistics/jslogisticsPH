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
                    <form action="/products/create-step3" method="post">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="heading "> <span>Step 1</span>
                                    <h3>Basic Information</h3>
                                </div>
                                <div class="col-xs-12" style="padding-bottom: 50px; ">
                                    <label for="" class="text-info">Dimensions </label>
                                    <br>
                                    <table id="tb" data-sort="false" class="table table-bordered table-hover dimensiontable">
                                        <thead>
                                        <tr class="tr-header">
                                            <th></th>
                                            <th>pieces</th>
                                            <th>package</th>
                                            <th>length</th>
                                            <th>width</th>
                                            <th>height</th>
                                            <th>weight Kg</th>
                                            <th>
                                                <button name="add-dim-row" id="addMore" type="button" class="btn btn-info btn-sm " style="width: 40px"><i class="fa fa-plus-circle"></i></button>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(Session::has('quote1'))
                                            @for($x = 1 ; $x<20; $x++)
                                                @if(Session::has('quote'.$x))
                                                <tr id="dim-main-row">
                                                    <td>
                                                        {{--{!! Form::select('dimused', array('cm'=>'cm','inch'=>'inch'), Session::get('quote')->dimused, ['class'=>'quote-service drop form-control calculate_dims', 'id'=>'transact', 'style'=>'width: 80px']) !!}--}}
                                                        {!! Form::select('dimused[][dimused]', array('cm'=>'cm', 'inch'=>'inch'), Session::get('quote'.$x)->dimused,['class'=>'quote-service drop form-control calculate_dims', 'id'=>'transact', 'style'=>'width: 80px']) !!}
                                                    </td>
                                                    <td>
                                                        <input type="number" value="{{Session::get('quote'.$x)->quantity}}" class="form-control bfh-number dimitemfld calculate_dims" min="0" name="quantity[][quantity]"></td>
                                                    <td>
                                                    {{--<select name="package[]package" class="form-control">--}}
                                                        {{--@foreach ($packages as $package)--}}
                                                            {{--<option value="{{$package->type}}" {{{ (isset($quote->package) && $quote->package == Session::get('quote')->package) ? "selected=\"selected\"" : "" }}}>{{$package->type}}</option>--}}
                                                        {{--@endforeach--}}
                                                    {{--</select>--}}
                                                        {!! Form::select('package[][package]', $packages, Session::get('quote'.$x)->package,['class'=>'quote-service drop form-control calculate_dims', 'id'=>'transact', 'style'=>'width: 80px']) !!}
                                                    </td>
                                                    <td>
                                                        <input type="number" value="{{Session::get('quote'.$x)->length}}" class="form-control bfh-number dimitemfld calculate_dims" min="0" name="length[][length]"></td>
                                                    <td>
                                                        <input type="number" value="{{Session::get('quote'.$x)->width}}" class="form-control bfh-number dimitemfld calculate_dims" min="0" name="width[][width]"></td>
                                                    <td>
                                                        <input type="number" value="{{Session::get('quote'.$x)->height}}" class="form-control bfh-number dimitemfld calculate_dims" min="0" name="height[][height]"></td>
                                                    <td>
                                                        <input type="number" value="{{Session::get('quote'.$x)->weight}}" class="form-control bfh-number dimitemfld calculate_dims" min="0" name="weight[][weight]">
                                                    </td>
                                                    <td>
                                                         <a href='javascript:void(0);'  class='remove'><button type="button" class="btn btn-danger2 btn-sm deldimrow " style="width: 40px; display: none"><i class="fa fa-remove"></i></button></a>
                                                    </td>

                                                </tr>
                                                @endif
                                            @endfor



                                        {{--@if(isset(Session::has('quote')->package)))--}}
                                        {{--@foreach(Session::get('quote')->package as $measure)--}}

                                            {{--<tr id="dim-main-row">--}}
                                                {{--<td>--}}
                                                    {{--{!! Form::select('dimused', array('cm'=>'cm','inch'=>'inch'), Session::get('quote')->dimused, ['class'=>'quote-service drop form-control calculate_dims', 'id'=>'transact', 'style'=>'width: 80px']) !!}--}}
                                                    {{--{!! Form::select('quote[]', array('cm'=>'cm', 'inch'=>'inch'), Session::get('quote')->dimused,['class'=>'quote-service drop form-control calculate_dims', 'id'=>'transact', 'style'=>'width: 80px']) !!}--}}
                                                {{--</td>--}}
                                                {{--<td>--}}
                                                    {{--<input type="number" class="form-control bfh-number dimitemfld calculate_dims" min="0" name="quote[]"></td>--}}
                                                {{--<td>--}}
                                                    {{--<select name="package[]" class="form-control">--}}
                                                    {{--@foreach ($packages as $package)--}}
                                                    {{--<option value="{{$package->type}}" {{{ (isset($quote->package) && $quote->package == Session::get('quote')->package) ? "selected=\"selected\"" : "" }}}>{{$package->type}}</option>--}}
                                                    {{--@endforeach--}}
                                                    {{--</select>--}}
                                                    {{--{!! Form::select('quote[]', $packages, $measure,['class'=>'quote-service drop form-control calculate_dims', 'id'=>'transact', 'style'=>'width: 80px']) !!}--}}
                                                {{--</td>--}}
                                                {{--<td>--}}
                                                    {{--<input type="number" class="form-control bfh-number dimitemfld calculate_dims" min="0" name="quote[]"></td>--}}
                                                {{--<td>--}}
                                                    {{--<input type="number" class="form-control bfh-number dimitemfld calculate_dims" min="0" name="quote[]"></td>--}}
                                                {{--<td>--}}
                                                    {{--<input type="number" class="form-control bfh-number dimitemfld calculate_dims" min="0" name="quote[]"></td>--}}
                                                {{--<td>--}}
                                                    {{--<input type="number" class="form-control bfh-number dimitemfld calculate_dims" min="0" name="quote[]">--}}
                                                {{--</td>--}}
                                                {{--<td>--}}
                                                    {{--<a href='javascript:void(0);'  class='remove'><button type="button" class="btn btn-danger2 btn-sm deldimrow " style="width: 40px; display: none"><i class="fa fa-remove"></i></button></a>--}}
                                                {{--</td>--}}

                                            {{--</tr>--}}
                                        {{--@endforeach--}}
                                        @else
                                            <tr id="dim-main-row">
                                                <td>
                                                    {{--{!! Form::select('dimused', array('cm'=>'cm','inch'=>'inch'), Session::get('quote')->dimused, ['class'=>'quote-service drop form-control calculate_dims', 'id'=>'transact', 'style'=>'width: 80px']) !!}--}}
                                                    <select name="dimused[][dimused]"  class="form-control calculate_dims" style="width: 80px">
                                                        <option value="cm">cm</option>
                                                        <option value="inch">inch</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="number" class="form-control bfh-number dimitemfld calculate_dims" min="0" name="quantity[][quantity]"></td>
                                                <td>
                                                    {!! Form::select('package[][package]', $packages, null,['class'=>'quote-service drop form-control calculate_dims', 'id'=>'transact', 'style'=>'width: 80px']) !!}
                                                </td>
                                                <td>
                                                    <input type="number" class="form-control bfh-number dimitemfld calculate_dims" min="0" name="length[][length]"></td>
                                                <td>
                                                    <input type="number" class="form-control bfh-number dimitemfld calculate_dims" min="0" name="width[][width]"></td>
                                                <td>
                                                    <input type="number" class="form-control bfh-number dimitemfld calculate_dims" min="0" name="height[][height]"></td>
                                                <td>
                                                    <input type="number" class="form-control bfh-number dimitemfld calculate_dims" min="0" name="weight[][weight]">
                                                </td>
                                                <td>
                                                    <a href='javascript:void(0);'  class='remove'><button type="button" class="btn btn-danger2 btn-sm deldimrow " style="width: 40px; display: none"><i class="fa fa-remove"></i></button></a>
                                                </td>

                                            </tr>
                                        @endif


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
                                                <input type="number" class="form-control bfh-number" min="0" name="aweight">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="control-label col-xs-3">Volume weight <span class="vw_unit">[Kg]:</span></label>
                                            <div class="col-xs-6 col-sm-4">
                                                <input type="number" class="form-control bfh-number" min="0" name="avolume">
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
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="order-wrap" style="padding-bottom: 50px; float: right;">
                            <a type="button" href="/products/create-step2" class="update-cart">Previous</a>
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
    <script type="text/javascript" src="{{URL::asset('app/js/jquery-1.11.1.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('app/js/jquery.repeater.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('app/js/jquery-1.11.3.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('app/js/less.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('app/js/owl.carousel.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('app/js/jquery.selectbox-0.2.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('app/js/parallax.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('app/js/revolution-home-4.js')}}"></script>
    <script src="{{URL::asset('app/js/script.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{URL::asset('app/js/site.js')}}"></script>
    <script>

        $(function(){
            $('#addMore').on('click', function() {
                var data = $("#tb tr:eq(1)").clone(true).appendTo("#tb");
                data.find("input").val('');


            });
            $(document).on('click', '.remove', function() {
                var trIndex = $(this).closest("tr").index();
                if(trIndex>1) {
                    $(this).closest("tr").remove();
                } else {
                    alert("Sorry!! Can't remove first row!");
                }
            });
        });
    </script>

@stop