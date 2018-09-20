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
            <div class="col-md-12">
                <div class="card">
                    <div class="panel-body" style="padding: 0">
                        <div class="panel-heading hbuilt border-top-small-yellow">
                            <div class="clearfix">
                                <div class="col-xs-6 col-sm-4">
                                    <div class="pull-left">
                                        <h4 class="company_name">{{$client->company}} (id:{{$client->client_ref}})</h4>
                                        <div class="company-adress">{{$client->zip}} | {{$client->city}}<br>{{$client->country}}</div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-4 text-center">
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <div class="pull-right">
                                        <h6 class="curr_quote_id text-primary-2 font-bold">Quote-ID: {{$rate->reference}}</h6>
                                        <small class="text-success">Quoted: </small><small class="reply-date">{{$rate->created_at}}</small>
                                        <br>
                                        <label class="text-primary">Validity: </label>
                                        <label class="text-info reply-validity text-danger">{{$rate->created_at->addWeeks(1)}}</label>
                                        @if($rate->created_at == $rate->created_at->addweeks(1))
                                            <h4 class="text-danger reply-validity-expired no-margin no-padding"><b>Validity Expired</b></h4>
                                        @endif

                                    </div>
                                </div>



                            </div>
                        </div>
                        <div class="row" style="margin: 0px 20px 10px 20px">
                            <div class="col-xs-6">
                            </div>
                            <div class="col-xs-6 text-right">
                                <div class="project-value">
                                    <h2 class="text-success font-bold costs-summary">{{$quote->goods->currency}} {{$rate->total}}</h2>
                                    <h5 class="transit-summary text-info"><br>Transit time: 7 - 12 days</h5>
                                    <h5 class="vendor-summary text-info">Carrier: </h5>
                                    <h5 class="text-info via-summary">{{$quote->origin->city}} - {{$quote->destination->dcity}}</h5>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="pull-left">
                                    <h2 class="text-primary-2 font-bold costs-summary-booking-info"></h2>
                                </div>
                                <div class="pull-right">
                                    <div class="project-action m-t-md" style="margin-top: 5px">
                                        <div class="btn-group">
                                            <a target="_blank" class="btn  btn-default show-member-profile" href="cprofile.aspx?id=f110ce92-d5d7-4bb5-b68f-fdcf82a53e51">Show Profile</a>
                                            <a class="btn  btn-default show-cost-terms text-danger" style="display: none;">Terms/Note</a>
                                            <a class="btn  btn-default show-cost-details">Show Details</a>
                                            <a class="btn  btn-default show-quote-details">Confirm Shipment</a>
                                            <a class="btn  btn-default chat">Decline Quote</a>

                                        </div>
                                        <div class="btn-group">
                                            <a class="btn btn-success  book-now" style="display: none;">Book Now</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="costs-details" style="padding-left: 6px; padding-right: 6px; display: none">
                            <div class="table-responsive">
                                <input class="viewed" type="hidden" value="0">
                                <table cellpadding="1" cellspacing="1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Charge Type</th>
                                        <th class="text-right">Amount in Peso</th>
                                        <th>Currency</th>
                                        <th>Rate</th>
                                        <th class="text-right">Total</th>
                                        <th class="text-right"></th>
                                        <th class="text-right">Total</th>
                                    </tr>
                                    </thead>
                                    <?php $x = 1; ?>
                                    <tbody>
                                    @foreach($rate->lines as $rates)
                                    <tr>
                                        <td>{{$x++}}</td>
                                        <td>{{$rates->description}}</td>
                                        <td>{{$rates->amount * ($pesos/$gbps)}}</td>
                                        @if($x == 2)
                                            <td>{{$quote->goods->currency}}</td>
                                        @else
                                            <td></td>
                                        @endif
                                        @if($x == 2)
                                            <td>{{$pesos/$gbps}}</td>
                                        @else
                                            <td></td>
                                        @endif

                                        <td>{{$rates->amount}}</td>
                                        @if($x == 2)
                                            <td>{{$quote->goods->currency}}</td>
                                            @else
                                            <td></td>
                                        @endif
                                        <td class="text-right">{{$rates->amount}}</td>
                                    </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot class="font-bold">
                                    <tr>
                                        <td colspan="6"></td>
                                        <td>Total:</td>
                                        <td class="text-right">{{$rate->total}}</td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <small class="text-danger">Foreign currency exchange rates are based on the google exchange rates on the date of quote and for comparison purposes only. Actual amount billed can vary.</small>

                        </div>

                    </div>
                </div>
            </div>
        </div>
                <div class="confirm " style="padding-left: 6px; padding-right: 6px; display: none">
                <div class="col-lg-6 col-md-6">
                    <div class="card">
                        <div class="content">
                            <form action="/image-view" id="formSubmit" method="post">
                                {{ csrf_field() }}
                                {{--LEFT CARD--}}
                                <label><h5><strong>Consignee Information</strong></h5></label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Company Name</label>
                                            <input type="text" value="{{{ isset($consign) && ($quote->status_id == 3) ? $consign->company : '' }}}" class="form-control quote-city" id="company" name="company"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" value="{{{ isset($consign) && ($quote->status_id == 3) ? $consign->firstName : '' }}}" class="form-control quote-city" id="company" name="fname"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" value="{{{ isset($consign) && ($quote->status_id == 3) ? $consign->lastName : '' }}}" class="form-control quote-city" id="company" name="lname"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="text" value="{{{ isset($consign) && ($quote->status_id == 3) ? $consign->phone : '' }}}" class="form-control quote-city" id="company" name="phone"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email Address</label>
                                            <input type="text" value="{{{ isset($consign) && ($quote->status_id == 3) ? $consign->email : '' }}}" class="form-control quote-city" id="company" name="email"/>
                                        </div>
                                    </div>
                                </div>
                                <label ><h5><strong>Complete Address</strong></h5></label> <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Zip Code</label>
                                            <input type="text" value="{{{ isset($consign) && ($quote->status_id == 3) ? $consign->zip : '' }}}" class="form-control quote-city" id="company" name="zip"/>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Street Address</label>
                                            <input type="text" value="{{{ isset($consign) && ($quote->status_id == 3) ? $consign->address : '' }}}" class="form-control quote-city" id="company" name="address"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>City</label>
                                            <input type="text" value="{{{ isset($consign) && ($quote->status_id == 3) ? $consign->city : '' }}}" class="form-control quote-city" id="company" name="city"/>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Country</label>
                                            <input type="text" value="{{{ isset($consign) && ($quote->status_id == 3) ? $consign->country : '' }}}" class="form-control quote-city" id="company" name="country"/>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Postal Code</label>
                                            <input type="text" value="{{{ isset($consign) && ($quote->status_id == 3) ? $consign->postal : '' }}}" class="form-control quote-city" id="company" name="postal"/>
                                            <input type="hidden" value="{{$quote->id}}" id='img' name="transactId">
                                        </div>
                                    </div>
                                </div>
                                {{--<div class="text-center">--}}
                                {{--<button type="submit" class="btn btn-info btn-fill btn-wd">Update Profile</button>--}}
                                {{--</div>--}}
                                @if($quote->status_id == 3)
                                    <script>
                                        $("input[type=text]").attr('disabled', true);
                                    </script>
                                @endif
                                <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                {{--COMMODITY FORM RIGHT CARD--}}
                    @if($quote->status_id == 3)
                        <section id="image-gallery" class="card">
                            <div class="card-header">
                                <h4 class="card-title">Image gallery</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="card-text">
                                        <p>Image gallery grid with photo-swipe integration. Display images gallery
                                            in 4-2-1 columns and photo-swipe provides gallery features.</p>
                                    </div>
                                </div>
                                <div class="card-body  my-gallery" itemscope itemtype="http://schema.org/ImageGallery">

                                    <div class="row">
                                        @foreach($docu as $document)
                                            <figure class="col-lg-3 col-md-6 col-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                                <a href="/upload/{{$document->file}}" itemprop="contentUrl" data-size="480x360">
                                                    <img class="img-thumbnail img-fluid" src="/upload/{{$document->file}}"
                                                         itemprop="thumbnail" alt="Image description" />
                                                </a>
                                            </figure>
                                        @endforeach
                                    </div>

                                </div>
                                <!--/ Image grid -->
                                <!-- Root element of PhotoSwipe. Must have class pswp. -->
                                <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
                                    <!-- Background of PhotoSwipe.
                                   It's a separate element as animating opacity is faster than rgba(). -->
                                    <div class="pswp__bg"></div>
                                    <!-- Slides wrapper with overflow:hidden. -->
                                    <div class="pswp__scroll-wrap">
                                        <!-- Container that holds slides.
                                        PhotoSwipe keeps only 3 of them in the DOM to save memory.
                                        Don't modify these 3 pswp__item elements, data is added later on. -->
                                        <div class="pswp__container">
                                            <div class="pswp__item"></div>
                                            <div class="pswp__item"></div>
                                            <div class="pswp__item"></div>
                                        </div>
                                        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                                        <div class="pswp__ui pswp__ui--hidden">
                                            <div class="pswp__top-bar">
                                                <!--  Controls are self-explanatory. Order can be changed. -->
                                                <div class="pswp__counter"></div>
                                                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                                                <button class="pswp__button pswp__button--share" title="Share"></button>
                                                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                                                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                                                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                                                <!-- element will get class pswp__preloader-active when preloader is running -->
                                                <div class="pswp__preloader">
                                                    <div class="pswp__preloader__icn">
                                                        <div class="pswp__preloader__cut">
                                                            <div class="pswp__preloader__donut"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                                <div class="pswp__share-tooltip"></div>
                                            </div>
                                            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                                            </button>
                                            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                                            </button>
                                            <div class="pswp__caption">
                                                <div class="pswp__caption__center"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ PhotoSwipe -->
                        </section>
                    @else

                        <div class="col-lg-6 col-md-6">
                            <div class="card card-user" >
                                <div class="content"><br>
                                    <h1 class="text-center text-danger">Upload Scanned Documents</h1><br>
                                    <div class="form-group">
                                        <div class="file-loading">
                                            <input id="file-1" type="file" name="file" multiple class="file"  data-overwrite-initial="false" data-min-file-count="2">
                                        </div>
                                        <input type="submit" id="fileupload" value="Confirm Shipment">
                                    </div>
                                </div>

                            </div>
                        </div>

                        @endif





                </div>
            </form>
            </div>
        </div>
    </div>
@stop
