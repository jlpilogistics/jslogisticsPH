<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    @yield('assets')
</head>
<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar"
      data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
<!-- fixed-top-->

<!-- ////////////////////////////////////////////////////////////////////////////-->
@include('admin.partials.nav')
@include('admin.partials.leftsidenav')

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            @yield('content')
        </div>
    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->
@include('admin.partials.footer')
@yield('scripts')
<!-- END PAGE LEVEL JS-->
</body>
</html>