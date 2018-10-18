@extends('client.partials.clientassets')
        <!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    @yield('assets')
</head>
@section('sidenav')
    <style>
        li.list-group-item a:hover {
            background-color: transparent;
        }

        li.list-group-item.active a {
            color: #fff;
        }

        li.list-group-item.active a:hover {
            background-color: transparent;
        }

        .list-group-item.active, .list-group-item.active:focus, .list-group-item.active:hover {
            background-color: #a8a8a8;
        }
    </style>
    <div class="sidebar" data-background-color="black " data-active-color="danger">
        <!--
            Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
            Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
        -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="index.html"> <img src="{{URL::asset('app/images/Jexsanlogo.png')}}" alt="" /> </a>
            </div>

            <ul class="nav nav-sidebar list-group">
                <li class="list-group-item">

                    <a href="{{route('account',$clients->id)}}">
                        <i class="ft-user-check"></i>
                        <p> My Profile</p>
                    </a>
                </li>
                <li class="list-group-item" >
                    <a href="{{route('status', $clients->id)}}">
                        <i class="ft-monitor"></i>
                        <p>Request Status</p>
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="{{url('client-bill')}}">
                        <i class="ft-file-text"></i>
                        <p>Received Billing</p>
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="/client-request/">
                        <i class="ft-edit-3"></i>
                        <p>Request Quotation</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>

@stop
@section('content')
    @extends('client.partials.accountHeader')
    <div class="main-panel" style="background-image: url('{{url('/app/images/cli2.jpg')}}');background-repeat: no-repeat;background-size: 210%">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                </div>
            </div>
            <form action="/client-request" method="post">
                {{ csrf_field() }}
            <div class="col-lg-7 col-md-7">
                <div class="card">
                    <div class="content">
                            {{--LEFT CARD--}}
                            <label><h5><strong>Shipment Type</strong></h5></label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">



                                        @if(Session::has('quote'))
                                            {!! Form::select('shiptypes', $type,  Session::get('quote')->shiptypes, ['class'=>'quote-service drop ', 'id'=>'1', 'tabindex' => 1]) !!}
                                        @else
                                            {!! Form::select('shiptypes', $type, null, ['class'=>'quote-city drop form-control', 'id'=>'transaction', 'tabindex'=>1]) !!}
                                        @endif
                                        {{--<select class="form-control" name="shiptypes">--}}
                                        {{--<option {{{ (isset($product->shiptypes) && $product->shiptypes == 'Apple') ? "selected=\"selected\"" : "" }}}>Apple</option>--}}
                                        {{--<option {{{ (isset($product->shiptypes) && $product->shiptypes == 'Google') ? "selected=\"selected\"" : "" }}}>Google</option>--}}
                                        {{--<option {{{ (isset($product->shiptypes) && $product->shiptypes == 'Mi') ? "selected=\"selected\"" : "" }}}>Mi</option>--}}
                                        {{--<option {{{ (isset($product->shiptypes) && $product->shiptypes == 'Samsung') ? "selected=\"selected\"" : "" }}}>Samsung</option>--}}
                                        {{--</select>--}}                                            </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{--{{ Form::select('CompanyID', $comp, array($selectedId), array('id' => 'seCompanyID')) }}--}}
                                        @if(Session::has('quote'))
                                            @if(Session::get('quote')->shiptypes == 'Import' || Session::get('quote')->shiptypes == 'Export')
                                                {!! Form::select('mode', array(''=>'Choose Mode of Shipment','Air'=>'Air Freight', 'FCL20'=>'Full Container Load (20ft)','FCL40'=>'Full Container Load (40ft)','LCL'=>'Less than a Container Load'), $quote->mode,['class'=>'quote-service drop form-control', 'id'=>'mode'] ) !!}
                                            @elseif(Session::get('quote')->shiptypes == 'Domestic')
                                                {!! Form::select('mode', array(''=>'Choose Mode of Shipment','FTL'=>'Full Truck Load','LTL'=>'Less than a Truck Load'), $quote->mode,['class'=>'quote-service drop form-control', 'id'=>'mode'] ) !!}
                                            @endif
                                        @else
                                            {!! Form::select('mode', array(''=>'Choose Mode of Shipment'), null,['class'=>'quote-service drop form-control', 'id'=>'mode', 'tabindex'=>1] ) !!}
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <div class="form-group">

                                    </div>
                                </div>
                            </div>
                            <label ><h5><strong>ORIGIN</strong></h5></label>
                            <div class="row">
                                <div class="col-md-8">
                                    <div  id="locationField">
                                        {!! Form::label('port', 'Origin via Port') !!}
                                        <input type="search" id="address-input" value="{{{ $origin->port or old('port') }}}" class="form-control quote-city font-size-small" tabindex = "1" onFocus="geolocate()" name="port"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('zip', 'Zip Code') !!}
                                        <input type="text" value="{{{ $origin->zip or old('zip') }}}" class="form-control quote-city disabledInput" tabindex = "1" id="zip" readonly="readonly" name="zip"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('country', 'Country') !!}
                                        <input type="text" value="{{{ $origin->country or old('country') }}}" class="form-control quote-city" tabindex = "1" id="country" readonly="readonly" name="country"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('city', 'City') !!}
                                        <input type="text" value="{{{ $origin->city or old('city') }}}" class="form-control quote-city" readonly="readonly" tabindex = "1" id="city" name="city"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('etd', 'Departure Date') !!}
                                        <input type="date" value="{{{ $origin->etd or old('etd') }}}" class="form-control quote-city" tabindex = "1" id="company" name="etd"/>
                                    </div>
                                </div>
                            </div>
                            <label ><h5><strong>Destination</strong></h5></label>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        {!! Form::label('ports', 'Destination via Port') !!}
                                        <input type="search" value="{{{ $dest->dport or old('dport') }}}" class="form-control quote-city" tabindex = "1" id="searchDest" name="dport"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('zips', 'Zip Code') !!}
                                        <input type="text" value="{{{ $dest->dzip or old('dzip') }}}" class="form-control quote-city" tabindex = "1" readonly="readonly" id="zips" name="dzip"/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('countrys', 'Country') !!}
                                        <input type="text" value="{{{ $dest->dcountry or old('dcountry') }}}" class="form-control quote-city" tabindex = "1" readonly="readonly" id="countrys" name="dcountry"/>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('citys', 'City') !!}
                                        <input type="text" value="{{{ $dest->dcity or old('dcity') }}}" class="form-control quote-city" tabindex = "1" readonly="readonly" id="citys" name="dcity"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('etas', 'Arrival Date') !!}
                                        <input type="date" value="{{{ $dest->deta or old('deta') }}}" class="form-control quote-city" tabindex = "1" id="company" name="deta"/>
                                    </div>
                                </div>
                            </div>
                            {{--<div class="text-center">--}}
                            {{--<button type="submit" class="btn btn-info btn-fill btn-wd">Update Profile</button>--}}
                            {{--</div>--}}
                            <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            {{--COMMODITY FORM RIGHT CARD--}}
            <div class="col-lg-5 col-md-5">
                <div class="card card-user">
                    <div class="content">
                        <h5 class="title">Commodity Form</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('commodity', 'Commodity') !!}
                                    {!! Form::select('goods', array(''=>'Select type of goods', 'List of Goods'=>$commodity) , Session::has('goods') ? Session::get('goods')->goods : null, ['class'=>'form-control quote-service drop', 'id'=>'transact','tabindex'=>1]) !!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('prod', 'Product Name') !!}
                                    <input type="text" value="{{{ $goods->name or old('name') }}}" class="form-control quote-city" id="company" tabindex="1" name="name"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('inco', 'Incoterm') !!}
                                    {!! Form::select('term',array(''=>'Select agreement', 'Incoterms'=>$terms), Session::has('goods') ? Session::get('goods')->term : null, ['class'=>'quote-service drop', 'id'=>'transact','tabindex'=>1]) !!}
                                </div>
                            </div>
                            {{--<div class="col-md-6">--}}
                                {{--<div class="col-sm-0">--}}
                                    {{--<div class="card">--}}
                                        {{--<div class="card-header">--}}
                                            {{--<label class="card-title">Simple Switch</label>--}}
                                        {{--</div>--}}
                                        {{--<div class="card-content">--}}
                                            {{--<div class="card-body">--}}
                                                {{--<p>Add <code>.switch</code>class to checkbox to set as switch</p>--}}
                                                {{--<fieldset>--}}
                                                    {{--<div class="float-left">--}}
                                                        {{--<input type="checkbox" class="switch" id="switch1" checked="checked" />--}}
                                                    {{--</div>--}}
                                                {{--</fieldset>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-sm-0">
                                    {!! Form::label('prodT', 'Temperature Product') !!}
                                    <label class="radio">
                                        <input type="radio"id="ytemp" name="temp" tabindex="1" value="Yes" checked>
                                        <span> Yes </span>
                                    </label>
                                    <label class="radio">
                                        <input type="radio" id="ntemp" name="temp" tabindex="1" value="No">
                                        <span>NO </span>
                                    </label>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group ">
                                    {!! Form::label('prodD', 'Dangerous Product') !!}
                                    <div class="right-space">
                                        <label class="radio">
                                            <input type="radio"id="ydanger" name="danger" tabindex="1" value="Yes" checked>
                                            <span> Yes </span>
                                        </label>
                                        <label class="radio">
                                            <input type="radio" id="ndanger" name="danger" tabindex="1" value="No">
                                            <span>NO </span>
                                        </label>
                                        <br><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--<label ><h5><strong>INSURANCE COST</strong></h5></label>--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-md-6">--}}
                                {{--<div class="form-group">--}}
                                    {{--{!! Form::label('vw', 'Currency Used:') !!}--}}
                                    {{--<select name="currency" class="form-control">--}}
                                        {{--<option selected="true" disabled value="">Currency</option>--}}
                                        {{--@foreach($currency as $key=>$val)--}}
                                            {{--<option value="{{$key}}">{{$key}}</option>--}}
                                        {{--@endforeach--}}
                                    {{--</select>--}}

                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="row">
                            <div class="col-md-6">
                                    {!! Form::label('description', 'Description') !!}
                                <textarea name="description" value="{{old('description')}}" ng-model="formData.message" tabindex="1" ng-class="{'error' : errorTextarea}" rows="5" cols="55" style="height: 49px; margin: 0px; width: 391px;"></textarea>
                            </div>
                        </div>

                    </div>

                </div>
            </div>



            {{--Shipment Details--}}
            <div class="col-lg-12 col-md-7">
                <div class="card">
                    <div class="content">
                        <label><h5><strong>Packaging Dimension</strong></h5></label>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <table id="tb" data-sort="false" class="table table-borderless table-hover dimensiontable" style="width: 1000px">
                                        <thead>
                                        <tr class="tr-header">
                                            <th></th>
                                            <th>pieces</th>
                                            <th>package</th>
                                            <th>length in <span class="dimss"></span></th>
                                            <th>width in <span class="dimss"></span></th>
                                            <th>height in <span class="dimss"></span></th>
                                            <th>weight in Kg</th>
                                            <th>
                                                <button name="add-dim-row" id="addMore" type="button" class="btn btn-info btn-sm " style="width: 40px"><i class="fa fa-plus-circle"></i></button>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody class="tbodyRow">
                                        @if(Session::has('quote1'))
                                            @for($x = 1 ; $x<20; $x++)
                                                @if(Session::has('quote'.$x))
                                                    <tr id="dim-main-row">
                                                        <td>
                                                            {{--{!! Form::select('dimused', array('cm'=>'cm','inch'=>'inch'), Session::get('quote')->dimused, ['class'=>'quote-service drop form-control calculate_dims', 'id'=>'transact', 'style'=>'width: 80px']) !!}--}}
                                                            {!! Form::select('dimused[][dimused]', array('cm'=>'cm', 'inch'=>'inch'), Session::get('quote'.$x)->dimused,['class'=>'quote-service drop form-control calculate_dims', 'id'=>'transact', 'style'=>'width: 80px']) !!}
                                                        </td>
                                                        <td>
                                                            <input type="number" value="{{Session::get('quote'.$x)->quantity}}" class="form-control bfh-number dimitemfld calculate_dims quantity" min="0" name="quantity[][quantity]"></td>
                                                        <td>
                                                            {{--<select name="package[]package" class="form-control">--}}
                                                            {{--@foreach ($packages as $package)--}}
                                                            {{--<option value="{{$package->type}}" {{{ (isset($quote->package) && $quote->package == Session::get('quote')->package) ? "selected=\"selected\"" : "" }}}>{{$package->type}}</option>--}}
                                                            {{--@endforeach--}}
                                                            {{--</select>--}}
                                                            {!! Form::select('package[][package]', $packages, Session::get('quote'.$x)->package,['class'=>'quote-service drop form-control calculate_dims', 'id'=>'transact', 'style'=>'width: 80px']) !!}
                                                        </td>
                                                        <td>
                                                            <input type="number" value="{{Session::get('quote'.$x)->length}}" class="form-control bfh-number dimitemfld calculate_dims length" min="0" name="length[][length]"></td>
                                                        <td>
                                                            <input type="number" value="{{Session::get('quote'.$x)->width}}" class="form-control bfh-number dimitemfld calculate_dims width" min="0" name="width[][width]"></td>
                                                        <td>
                                                            <input type="number" value="{{Session::get('quote'.$x)->height}}" class="form-control bfh-number dimitemfld calculate_dims height" min="0" name="height[][height]"></td>
                                                        <td>
                                                            <input type="number" value="{{Session::get('quote'.$x)->weight}}" class="form-control bfh-number dimitemfld calculate_dims weight" min="0" name="weight[][weight]">
                                                        </td>
                                                        <td hidden><input type="hidden" value="{{old('charge')}}" tabindex="1" name="charge" class="charge"></td>
                                                        <td hidden> <input type="hidden" value="{{old('volumetric')}}" tabindex="1" name="volumetric" class="volumetric"></td>
                                                        <td hidden> <input type="hidden" value="{{old('cbm')}}" tabindex="1" name="cbm" class="cbm"></td>
                                                        <td hidden> <input type="hidden" value="{{old('cbf')}}" tabindex="1" name="cbf" class="cbf"></td>
                                                        <td>
                                                            <a href='javascript:void(0);'  class='remove'><button type="button" class="btn btn-danger2 btn-sm deldimrow " style="width: 40px"><i class="fa fa-remove"></i></button></a>
                                                        </td>


                                                    </tr>
                                                @endif
                                            @endfor
                                        @else
                                            <tr id="dim-main-row">
                                                <td>
                                                    {{--{!! Form::select('dimused', array('cm'=>'cm','inch'=>'inch'), Session::get('quote')->dimused, ['class'=>'quote-service drop form-control calculate_dims', 'id'=>'transact', 'style'=>'width: 80px']) !!}--}}
                                                    <select name="dimused[][dimused]"  class="form-control calculate_dims dimension" style="width: 80px">
                                                        <option value="cm">cm</option>
                                                        <option value="inch">inch</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="number" value="{{old('quantity[][quantity]')}}" class="form-control bfh-number dimitemfld calculate_dims quantity" tabindex="1" min="0" name="quantity[][quantity]"></td>
                                                <td>
                                                    {!! Form::select('package[][package]', $packages, null,['class'=>'quote-service drop form-control calculate_dims', 'id'=>'transact', 'style'=>'width: 80px','tabindex'=>1]) !!}
                                                </td>
                                                <td>
                                                    <input type="number" value="{{old('length[][length]')}}" class="form-control bfh-number dimitemfld calculate_dims length" min="0" tabindex="1" name="length[][length]"></td>
                                                <td>
                                                    <input type="number" value="{{old('width[][width]')}}" class="form-control bfh-number dimitemfld calculate_dims width" min="0" tabindex="1" name="width[][width]"></td>
                                                <td>
                                                    <input type="number" value="{{old('height[][height]')}}" class="form-control bfh-number dimitemfld calculate_dims height" min="0" tabindex="1" name="height[][height]"></td>
                                                <td>
                                                    <input type="number" value="{{old('weight[][weight]')}}" class="form-control bfh-number dimitemfld calculate_dims weight" min="0" tabindex="1" name="weight[][weight]">
                                                </td>
                                                <td hidden><input type="hidden" value="{{old('charge')}}" tabindex="1" name="charge" class="charge"></td>
                                                <td hidden> <input type="hidden" value="{{old('volumetric')}}" tabindex="1" name="volumetric" class="volumetric"></td>
                                                <td hidden> <input type="hidden" value="{{old('cbm')}}" tabindex="1" name="cbm" class="cbm"></td>
                                                <td hidden> <input type="hidden" value="{{old('cbf')}}" tabindex="1" name="cbf" class="cbf"></td>
                                                <td>
                                                    <a href='javascript:void(0);'  class='remove'><button type="button" class="btn btn-danger2 btn-sm deldimrow " style="width: 40px"><i class="fa fa-remove"></i></button></a>
                                                </td>

                                            </tr>
                                        @endif


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <label ><h5><strong>TOTAL WEIGHT</strong></h5></label>
                        <div class="row">
                            <div class="col-md-2 col-md-offset-2">
                                <div class="form-group">
                                    {!! Form::label('aw', 'Actual Weight (kg)') !!}
                                    <input type="number" tabindex="1" value="{{old('aweight')}}" readonly class="form-control bfh-number chargee" min="0" name="aweight">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    {!! Form::label('vw', 'Volume Weight (kg)') !!}
                                    <input type="number" tabindex="1" value="{{old('avolume')}}" readonly class="form-control bfh-number volumetrics" min="0" name="avolume">

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    {!! Form::label('vw', 'Total Cubic Meter (cbm)') !!}
                                    <input type="number" tabindex="1" value="{{old('cbm')}}" readonly class="form-control bfh-number cubic" min="0" name="acbm">

                                </div>
                            </div>
                        </div>
                        <label ><h5><strong>Commercial Value</strong></h5></label>
                        <div class="row">
                            <div class="col-md-3 col-md-offset-3">
                                <div class="form-group">
                                    {!! Form::label('aw', 'Currency') !!}
                                    <select name="currency" class="form-control danger">
                                        <option selected="true" disabled value="">Currency</option>
                                        @foreach($currency as $key=>$val)
                                            <option value="{{$key}}">{{$key}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    {!! Form::label('vw', 'Amount') !!}
                                    <input type="number" tabindex="1" value="{{old('insurance')}}" class="form-control bfh-number" min="0" name="insurance">

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
                        <div class="order-wrap" style="padding-bottom: 50px; float: right;">
                            <button type="submit" class="btn btn-primary">Next</button>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>


</html>
@stop
