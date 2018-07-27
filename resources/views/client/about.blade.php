@section('div_class', 'homepage common-page about-us-page about')
@extends('layouts.master')
@section('styles')
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Transport</title>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

	<!-- Google Font -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Karla:400,700italic,700,400italic' rel='stylesheet' type='text/css'>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{URL::asset('app/css/font-awesome.min.css')}}" />
	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{URL::asset('app/css/bootstrap.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{URL::asset('app/css/dropdown.css')}}" />
	<link rel="stylesheet" href="{{URL::asset('app/css/owl.carousel.css')}}" />
	<link rel="stylesheet" href="{{URL::asset('app/css/global.css')}}" />
	<link rel="stylesheet" href="{{URL::asset('app/css/style.css')}}" />
	<link rel="stylesheet" href="{{URL::asset('app/css/homepage-4.css')}}" />
	<link rel="stylesheet" href="{{URL::asset('app/css/responsive.css')}}" />
	<link href="{{URL::asset('app/css/skin.less')}}" rel="stylesheet/less">
@stop

@section('content')
	<div class="banner spacetop">
		<div class="banner-image parallax">
			<img src="{{URL::asset('app/images/about_us.jpg')}}" alt="" />
		</div>

		<div class="banner-text">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<a href="#" class="shipping">ground shipping</a>
						<h1>about us</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section">
					<div class="amazing-features ">
						<div class="container">
							<div class="row">
								<div class="col-xs-12 col-sm-4">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.82851128649!2d121.01564811419769!3d14.551797289833534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c911bda2eb49%3A0x6c19d12066f5f000!2sJexsan+Logistics+Philippines%2C+Inc.!5e0!3m2!1sen!2sph!4v1532611825576" width="350" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
								</div>
								<div class="col-xs-12 col-sm-8">
									<div class="amazing-text">
										<div class="heading">
											<span></span>
											<h3>all about us</h3>
										</div>
										<p>
											JEXSAN LOGISTICS PHILIPPINES INC. started offering Brokerage and Logistic Services in the Philippines in August 23, 2013. Though our company is relatively young, our experience in this field gives us the skill to offer a wide range of multi-modal services at par with international and domestic standards. These services include: SEA AND AIR FREIGHT SERVICES LAND TRANSPORT (INLAND HAULAGE) WAREHOUSING PACKING & CRATING, AND DOCUMENTS PROCESSING (BROKERAGE).
										</p>
										<p>
											With unending regulations surrounding of logistics world, this section aims to clear the fog and provide useful and reliable information which we hope you find of assistance.Valuable information relating to Incoterms, insurance, dangerous goods segregation including documentary guidance, industry terms and conditions, amongst others are featured, we are wishing to become partner in your logistics needs, to do so using our assessment and rate form.
										</p>
										<a href="about-us.php" class="button contact-us">contact us</a>
									</div>
								</div>
							</div>
						</div>
					</div>

        <div class="features ">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="features-text">
                            <div class="heading">
                                <h3>WE SERVE BETTER</h3>
                            </div>

                            <p>
                                There is nothing pretentious about Jexsan Logistics. We have built our reputation by providing a reliable and competitive service to the very best of our abilities, and we will continually endeavour to do just that.
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="features-tab bottom-border">

                            <i class="icon-ship"></i>
                            <div class="tab-text">
                                <h5>IMPORT</h5>
                                <p>
                                    ensure that goods quickly move through a supply chain and arrive at the desired destination.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="features-tab bottom-border">
                            <i class="icon-train"></i>
                            <div class="tab-text">
                                <h5>EXPORT</h5>
                                <p>
                                    help you develop innovative solutions to your complex transport needs
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="features-tab bottom-border">

                            <i class="icon-ship"></i>
                            <div class="tab-text">
                                <h5>DOMESTIC</h5>
                                <p>
                                    Jexsan Logistics Philippines Inc. is ready to provide the best domestic transportaion.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="team ">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="heading">
                            <span>memebers</span>
                            <h3>our team</h3>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 custom-margin-bottom">
                        <div class="members zoom clearfix">
                            <div class="figure-wrap">
                                <figure>
                                    <a href="#"> <img src="{{URL::asset('app/images/member-1.jpg')}}" alt="" /> </a>
                                </figure>
                                <div class="figure-overlay">
                                    <ul>
                                        <li>
                                            <a href="#"><span class="fa fa-facebook"></span></a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="fa fa-twitter"></span></a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="fa fa-google-plus"></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="members-text">
                                <h6>Angelica Espiritu</h6>
                                <p>
                                    Responsible for Documentation
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 custom-margin-bottom">
                        <div class="members zoom clearfix">
                            <div class="figure-wrap">
                                <figure>
                                    <a href="#"> <img src="{{URL::asset('app/images/jobs.jpg')}}" alt="" /> </a>
                                </figure>
                                <div class="figure-overlay">
                                    <ul>
                                        <li>
                                            <a href="#"><span class="fa fa-facebook"></span></a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="fa fa-twitter"></span></a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="fa fa-google-plus"></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="members-text">
                                <h6>Ma. jobelle suarez</h6>
                                <p>
                                    Assistant programmer
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 custom-margin-bottom">
                        <div class="members zoom clearfix">
                            <div class="figure-wrap">
                                <figure>
                                    <a href="#"><img src="{{URL::asset('app/images/ryan.jpg')}}" alt="" /> </a>
                                </figure>
                                <div class="figure-overlay">
                                    <ul>
                                        <li>
                                            <a href="#"><span class="fa fa-facebook"></span></a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="fa fa-twitter"></span></a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="fa fa-google-plus"></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="members-text">
                                <h6>Ryan Jay Retutar</h6>
                                <p>
                                    Main programmer
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 custom-margin-bottom">
                        <div class="members zoom clearfix">
                            <div class="figure-wrap">
                                <figure>
                                    <a href="#"> <img src="{{URL::asset('app/images/ira.jpg')}}" alt="" /> </a>
                                </figure>
                                <div class="figure-overlay">
                                    <ul>
                                        <li>
                                            <a href="#"><span class="fa fa-facebook"></span></a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="fa fa-twitter"></span></a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="fa fa-google-plus"></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="members-text">
                                <h6>ira paula mansueto</h6>
                                <p>
                                    Responsible for Wed Design, Documentation
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

				<!--Section box ends Here -->

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
@stop



