@extends('client.partials.clientassets')
        <!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>

    @yield('assets')
</head>
@section('content')
    @extends('client.partials.accountHeader')
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="card">
                          <br>
                            <div class="content">
                                <form action="client-request" method="post">
                                    {{ csrf_field() }}
                                    {{--LEFT CARD--}}
                                    <label><h5><strong>Shipment Type</strong></h5></label>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">

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
                                                {{--</select>--}}                                            </div>
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
                                    <div class="row">

                                    </div>
                                    <label ><h5><strong>ORIGIN</strong></h5></label>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Mode of shipment</label>
                                                {{--{{ Form::select('CompanyID', $comp, array($selectedId), array('id' => 'seCompanyID')) }}--}}
                                                @if(Session::has('quote'))
                                                    @if(Session::get('quote')->shiptypes == 'Import' || Session::get('quote')->shiptypes == 'Export')
                                                        {!! Form::select('mode', array(''=>'Choose Mode of Shipment','Air'=>'Air', 'FCL20'=>'FCL20','FCL40'=>'FCL40','LCL'=>'LCL'), $quote->mode,['class'=>'quote-service drop form-control', 'id'=>'mode'] ) !!}
                                                    @elseif(Session::get('quote')->shiptypes == 'Domestic')
                                                        {!! Form::select('mode', array(''=>'Choose Mode of Shipment','FTL'=>'FTL','LTL'=>'LTL'), $quote->mode,['class'=>'quote-service drop form-control', 'id'=>'mode'] ) !!}
                                                    @endif
                                                @else
                                                    {!! Form::select('mode', array(''=>'Choose Mode of Shipment'), null,['class'=>'quote-service drop form-control', 'id'=>'mode'] ) !!}
                                                @endif      </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                {!! Form::label('zip', 'Zip Code') !!}
                                                <input type="text" value="{{{ $origin->zip or '' }}}" class="form-control quote-city" id="company" name="zip"/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                {!! Form::label('country', 'Country') !!}
                                                <input type="text" value="{{{ $origin->country or '' }}}" class="form-control quote-city" id="company" name="country"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                {!! Form::label('city', 'City') !!}
                                                <input type="text" value="{{{ $origin->city or '' }}}" class="form-control quote-city" id="company" name="city"/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                {!! Form::label('etd', 'Departure Date') !!}
                                                <input type="date" value="{{{ $origin->etd or '' }}}" class="form-control quote-city" id="company" name="etd"/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                {!! Form::label('port', 'Origin via Port') !!}
                                                <input type="text" value="{{{ $origin->port or '' }}}" class="form-control quote-city" id="company" name="port"/>
                                            </div>
                                        </div>
                                    </div>
                                    <label ><h5><strong>Destination</strong></h5></label> <hr>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                {!! Form::label('zips', 'Zip Code') !!}
                                                <input type="text" value="{{{ $dest->dzip or '' }}}" class="form-control quote-city" id="company" name="dzip"/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                {!! Form::label('countrys', 'Country') !!}
                                                <input type="text" value="{{{ $dest->dcountry or '' }}}" class="form-control quote-city" id="company" name="dcountry"/>

                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                {!! Form::label('citys', 'City') !!}
                                                <input type="text" value="{{{ $dest->dcity or '' }}}" class="form-control quote-city" id="company" name="dcity"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                {!! Form::label('etas', 'Arrival Date') !!}
                                                <input type="date" value="{{{ $dest->deta or '' }}}" class="form-control quote-city" id="company" name="deta"/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                {!! Form::label('ports', 'Destination via Port') !!}
                                                <input type="text" value="{{{ $dest->dport or '' }}}" class="form-control quote-city" id="company" name="dport"/>
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
                <div class="card card-user"  style="height: 650px">
                    <div class="content"><br>
                        <h5 class="title">Commodity Form</h5><br>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('commodity', 'Commodity') !!}
                                    {!! Form::select('goods', array(''=>'Select type of goods', 'List of Goods'=>$commodity) , Session::has('goods') ? Session::get('goods')->goods : null, ['class'=>'form-control quote-service drop', 'id'=>'transact']) !!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('prod', 'Product Name') !!}
                                    <input type="text" value="{{{ $goods->name or '' }}}" class="form-control quote-city" id="company" name="name"/><br><br>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    {!! Form::label('inco', 'Incoterm') !!}
                                    {!! Form::select('term',array(''=>'Select agreement', 'Incoterms'=>$terms), Session::has('goods') ? Session::get('goods')->term : null, ['class'=>'quote-service drop', 'id'=>'transact']) !!}
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-sm-0">
                                    {!! Form::label('prodT', 'Temperature Product') !!}
                                        <label class="radio">
                                            <input type="radio"id="ytemp" name="temp" value="Yes" checked>
                                            <span> Yes </span>
                                        </label>
                                        <label class="radio">
                                            <input type="radio" id="ntemp" name="temp" value="No">
                                            <span>NO </span>
                                        </label>

                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group ">
                                    {!! Form::label('prodD', 'Dangerous Product') !!}
                                    <div class="right-space">
                                        <label class="radio">
                                            <input type="radio"id="ydanger" name="danger" value="Yes" checked>
                                            <span> Yes </span>
                                        </label>
                                        <label class="radio">
                                            <input type="radio" id="ndanger" name="danger" value="No">
                                            <span>NO </span>
                                        </label>
                                        <br><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-sm-0"><br><br>
                                    {!! Form::label('description', 'Description') !!}
                                    <textarea name="description" ng-model="formData.message"  ng-class="{'error' : errorTextarea}" rows="5" cols="60" style="height:100px;">{{ $goods->message or '' }}</textarea>

                                </div>
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
                        <hr>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Mode of shipment</label>

                                    <table id="tb" data-sort="false" class="table table-bordered table-hover dimensiontable" style="width: 1000px">
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
                            </div>
                        </div>
                    <label ><h5><strong>TOTAL WEIGHT</strong></h5></label>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('aw', 'Actual Weight (kg)') !!}
                                <input type="number" class="form-control bfh-number" min="0" name="aweight">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('vw', 'Volume Weight (kg)') !!}
                                <input type="number" class="form-control bfh-number" min="0" name="avolume">

                            </div>
                        </div>
                    </div>
                    <label ><h5><strong>INSURANCE COST</strong></h5></label>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('cv', 'Commercial Value:') !!}
                                <input type="number" class="form-control bfh-number" min="0" name="insurance">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('vw', 'Currency Used:') !!}
                                <select name="currency" class="form-control">
                                    <option selected="true" disabled value="">Currency</option>
                                    @foreach($currency as $key=>$val)
                                        <option value="{{$key}}">{{$key}}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>


</html>
@stop
