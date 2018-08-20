@section('div_class', 'homepage homepage-4')
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

@endsection

@section('content')
    <div class="bannercontainer spacetop">
        <div class="banner">
            <ul>
                <!-- THE BOXSLIDE EFFECT EXAMPLES  WITH LINK ON THE MAIN SLIDE EXAMPLE -->

                <li data-transition="random" data-slotamount="1">
                    <img src="{{URL::asset('app/images/jlpiland.jpg')}}" alt="" />
                    <div class="banner-text">
                        <div class="caption sft big_white" data-x="0" data-y="100" data-speed="center" data-start="1700" data-easing="Power4.easeInOut">
                            <a href="#" class="shipping">LAND TRANSPORT</a>
                        </div>
                        <div class="caption sfb big_orange clearfix"  data-x="100" data-y="350" data-speed="500" data-start="1900" data-easing="Power4.easeInOut">
                            <h2>Inland Haulage</h2>
                        </div>
                        <div class="caption lfr medium_grey"  data-x="left" data-y="center" data-speed="300" data-start="2000">

                        </div>

                    </div>
                </li>
                <li data-transition="random" data-slotamount="1">
                    <img src="{{URL::asset('app/images/jlpisea.jpg')}}" alt="" />
                    <div class="banner-text">
                        <div class="caption sft big_white" data-x="0" data-y="100" data-speed="700" data-start="1700" data-easing="Power4.easeInOut">
                            <a href="#" class="shipping">Ocean Freight</a>
                        </div>
                        <div class="caption sfb big_orange clearfix"  data-x="100" data-y="350" data-speed="500" data-start="1900" data-easing="Power4.easeInOut">
                            <h2>Air Freight Services</h2>
                        </div>
                        <div class="caption lfr medium_grey" data-x="left" data-y="center" data-speed="300" data-start="2000">

                        </div>
                    </div>
                </li>
                <li data-transition="random" data-slotamount="1">
                    <img src="{{URL::asset('app/images/jlpiair.jpg')}}" alt="" />
                    <div class="banner-text">
                        <div class="caption sft big_white" data-x="0" data-y="100" data-speed="700" data-start="1700" data-easing="Power4.easeInOut">
                            <a href="#" class="shipping">Air Freight</a>
                        </div>
                        <div class="caption sfb big_orange clearfix"  data-x="100" data-y="350" data-speed="500" data-start="1900" data-easing="Power4.easeInOut">
                            <h2>Air Freight Services</h2>
                        </div>
                        <div class="caption lfr medium_grey"  data-x="left" data-y="center" data-speed="300" data-start="2000">

                        </div>

                    </div>
                </li>



            </ul>
        </div>
    </div>
    <!--banner Section ends Here -->
    <!--Section area starts Here -->
    <section id="section">
        <!--Section box starts Here -->
        <div class="section">
            <!--Our info starts Here -->
            <div class="services">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="heading">
                                <span>LOGISTIC SERVICES</span>
                                <h2>OUR SERVICES</h2>
                            </div>
                        </div>
                    </div>
                    <div id="services-slides" class="services-slider">
                        <div class="slides-tab zoom">
                            <figure>
                                <a href="#"><img src="{{URL::asset('app/images/goods-train.jpg')}}" alt="" /></a>
                            </figure>
                            <div class="slides-text">
                                <h4><a href="#">LAND TRANSPORT</a></h4>
                                <p>
                                    To any point of Luzon, our customers enjoy the benefit of professional trucking services with the company
                                    that is an industry leader in trucking safety, technology, service and security. We transport your cargo
                                    with passion and care, and ensure on timely pick up and delivery.
                                </p>

                            </div>
                        </div>
                        <div class="slides-tab zoom">
                            <figure>
                                <a href="#"><img src="{{URL::asset('app/images/plane.jpg')}}" alt="" /></a>
                            </figure>
                            <div class="slides-text">
                                <h4><a href="#">SEA AND AIR FREIGHT SERVICES</a></h4>
                                <p>
                                    The Company provides customized air and ocean transportation that best fit your requirements;
                                    we coordinate all activities associated with the transfer of goods from the point of origin to
                                    its final destination.
                                </p>

                            </div>
                        </div>
                        <div class="slides-tab zoom">
                            <figure>
                                <a href="#"><img src="{{URL::asset('app/images/yard.jpg')}}" alt="" /></a>
                            </figure>
                            <div class="slides-text">
                                <h4><a href="#">BROKERAGE</a></h4>
                                <p>
                                    Jexsan Logistics Philippines Inc. engages a team of expert licensed customs brokers, import and
                                    export specialist to help our client successfully navigate complicated Philippines Customs
                                    regulations as well as global trade customs regulations and thereby avoiding additional import
                                    tax payments or penalties and delivery delays.
                                </p>

                            </div>
                        </div>
                        <div></div>
                        <div class="slides-tab zoom">
                            <figure>
                                <a href="#"><img src="{{URL::asset('app/images/yard.jpg')}}" alt="" /></a>
                            </figure>
                            <div class="slides-text">
                                <h4><a href="#">WAREHOUSING</a></h4>
                                <p class="overflow ellipsis">
                                    Cost effective warehousing service is often a major concern of importers and exporters by
                                    integrating the design and management of dedicated and public warehousing, order fulfillment,
                                    hazardous materials management, transportation, technology, information management and other
                                    value added services, Jexsan Logistics Philippines Inc. constantly meets the needs and
                                    exceeds the expectations of all our clients.
                                </p>

                            </div>
                        </div>
                        <div class="slides-tab zoom">
                            <figure>
                                <a href="#"><img src="{{URL::asset('app/images/yard.jpg')}}" alt="" /></a>
                            </figure>
                            <div class="slides-text">
                                <h4><a href="#">SEA DELIVERY</a></h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adip
                                    iscing elit. Aenean in ante magna. Quisque
                                    sodales, exid fermentum tempor.
                                </p>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="testimonial">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="heading">
                                <span>what people say</span>
                                <h2>testimonials</h2>
                            </div>
                        </div>
                    </div>

                    <div id="feedback">
                        <div class="feedback clearfix">
                            <div class="feebback-person">
                                <figure>
                                    <a href="#"><img class="img-circle" src="{{URL::asset('app/images/person-1.jpg')}}" alt="" /></a>
                                </figure>
                            </div>
                            <div class="feedback-text">
                                <blockquote class="custom-quote">
                                    <span class="fa fa-quote-left custom-fa"></span>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                                        and scrambled it to make a type specimen book. It has survived not only five centuries, but
                                    </p>
                                    <footer>
                                        <h6> JOHNATHAN DOE <span>DESIGNER, THEME DESIGNER</span></h6>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                        <div class="feedback clearfix">
                            <div class="feebback-person">
                                <figure>
                                    <a href="#"><img class="img-circle" src="{{URL::asset('app/images/person-1.jpg')}}" alt="" /></a>
                                </figure>
                            </div>
                            <div class="feedback-text">
                                <blockquote class="custom-quote">
                                    <span class="fa fa-quote-left custom-fa"></span>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                                        and scrambled it to make a type specimen book. It has survived not only five centuries, but
                                    </p>
                                    <footer>
                                        <h6> JOHNATHAN DOE <span>DESIGNER, THEME DESIGNER</span></h6>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                        <div class="feedback clearfix">
                            <div class="feebback-person">
                                <figure>
                                    <a href="#"><img class="img-circle" src="{{URL::asset('app/images/person-1.jpg')}}" alt="" /></a>
                                </figure>
                            </div>
                            <div class="feedback-text">
                                <blockquote class="custom-quote">
                                    <span class="fa fa-quote-left custom-fa"></span>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                                        and scrambled it to make a type specimen book. It has survived not only five centuries, but
                                    </p>
                                    <footer>
                                        <h6> JOHNATHAN DOE <span>DESIGNER, THEME DESIGNER</span></h6>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Testimonial section ends here -->
            <!-- Query section starts here -->
            <div class="query">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-10">
                            <h5>DO YOU STILL HAVE A QUESTION REGARING OUR SERVICES?</h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc consequat elementum tempor. Duis porta lectus ut dui consequat.
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-2">
                            <a href="contact-us.html" class="contact-us button">contact us</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Query section ends here -->
            <!-- Newsletter starts here -->
            <div class="newsletter">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-3">
                            <span> <i class="fa fa-envelope-o"></i> NEWSLETTER SIGNUP </span>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-9">
                            <form class="sign-up">
                                <input id="name" class="contact-name" type="text" placeholder="Name">
                                <input id="mail" class="mail" type="text" name="email" placeholder="Email Address">
                                <button class="fa fa-paper-plane"></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Newsletter ends here -->
        </div>
        <!--Section box ends Here -->
    </section>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{URL::asset('app/js/jquery-1.11.3.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('app/js/less.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('app/js/owl.carousel.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('app/js/jquery.selectbox-0.2.min.js')}}"></script>

    <!--Parrallax -->
    <script type="text/javascript" src="{{URL::asset('app/js/parallax.js')}}"></script>

    <!-- jQuery REVOLUTION Slider  -->
    <script type="text/javascript" src="{{URL::asset('app/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('app/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('app/js/revolution-home-4.js')}}"></script>
    <script src="{{URL::asset('app/js/script.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{URL::asset('app/js/site.js')}}"></script>
@endsection