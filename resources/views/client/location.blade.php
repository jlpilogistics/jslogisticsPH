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

	<!-- REVOLUTION BANNER CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="{{URL::asset('app/rs-plugin/css/settings.css')}}" media="screen" />
	<link rel="stylesheet" type="text/css" href="{{URL::asset('app/css/dropdown.css')}}" />

	<link rel="stylesheet" href="{{URL::asset('app/css/owl.carousel.css')}}" />
	<link rel="stylesheet" href="{{URL::asset('app/css/global.css')}}" />
	<link rel="stylesheet" href="{{URL::asset('app/css/style.css')}}" />
	<link rel="stylesheet" href="{{URL::asset('app/css/homepage-4.css')}}" />
	<link rel="stylesheet" href="{{URL::asset('app/css/responsive.css')}}" />
	<link href="{{URL::asset('app/css/skin.less')}}" rel="stylesheet/less">
@stop
@section('content')


			<!--banner Section ends Here -->
			<!--Section area starts Here -->
		<div class="container">
			<section id="section">
				<!--Section box starts Here -->
				<div class="section shop-section">
					<div class="our-location ">
						<div class="container">
							<div class="row">
								<div class="col-xs-12">
									<div class="heading">
										<span>Track</span>
										<h3>Cargo Status</h3>
									</div>
									<div class="our-office">
										<div class="search-office">
											<div class="office-search-box">
												<input id="search" type="text" placeholder="Search ID number" />
												<input type="submit" value="" />
											</div>
										
										</div>
									
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
				<!--Section box ends Here -->
		</div>

@endsection
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
