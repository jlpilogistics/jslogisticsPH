<!DOCTYPE html>
<html lang="en">

<head>
    @yield('assets')
</head>

<body class="vertical-layout vertical-menu-modern 1-column  bg-cyan bg-lighten-2 menu-expanded blank-page blank-page"
      data-open="click" data-menu="vertical-menu-modern" data-col="1-column">



<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            @yield('content')
        </div>
    </div>
</div>




@yield('scripts')

</body>
</html>