<header id="header" class="header header-style-4">
    <!-- primary header Start Here -->
    <div class="primary-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="social">
                        <li>
                            <a href="https://www.facebook.com/Jexsan-Logistics-Philippines-Inc-148031345288121/"> <i class="fa fa-facebook"></i> </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/jlpi"> <i class="fa fa-twitter"></i> </a>
                        </li>
                    </ul>
                    <div class="call">
                        <a href="tel:5917890123"> <img src="{{URL::asset('app/images/call.png')}}" alt="" /> <span>: (632) 864-0828</span> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- primary header Ends Here -->
    <!-- main header Starts Here -->
    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-3">
                    <a href="index.html" class="logo"> <img src="{{URL::asset('app/images/Jexsanlogo.png')}}" alt="" /> </a>
                </div>
                <div class="col-xs-12 col-sm-9 custom-nav">
                    <nav>
                        <div id='cssmenu'>
                            <ul class="navigation">
                                <li class='active'>
                                    <a href="{{url('/Main')}}">Home</a>

                                </li>
                                <li>
                                    <a href="{{url('/about')}}">about us</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">services</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="{{url('/import')}}">Import</a>
                                        </li>
                                        <li>
                                            <a href="{{url('/export')}}">Export</a>
                                        </li>
                                        <li>
                                            <a href="{{url('/domestic')}}">Domestic</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="{{url('/location')}}">Status</a>
                                </li>
                                <li>
                                    <a href="{{url('/users/signup')}}">Sign up</a>

                                </li>
                                @if (Auth::guest())
                                    <li>
                                        <a href="{{ url('users/login')}}">Login</a>
                                    </li>
                                @else
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">

                                            Hello, {{{ Auth::user()->name}}}<span class="caret"></span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ url('/client-status/' . Auth::user()->id) }}">Dashboard</a></li>
                                            <li><a href="{{ url('/client-account/'. Auth::user()->id) }}">Account Profile</a></li>
                                            <li><a href="{{ url('/users/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                        </ul>

                                    </li>
                                @endif


                            </ul>
                        </div>
                    </nav>

                    <div class="nav-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main header Ends Here -->
</header>