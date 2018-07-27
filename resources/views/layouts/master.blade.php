<!DOCTYPE html>
<html>
    <head>
        @yield('styles')
    </head>
 <body>
     <div class="loader-block">
         <div class="loader">
             Loading...
         </div>
     </div>
     <div id="wrapper" class="@yield('div_class')">
            @include('client.partials.header')
            @yield('content')

     @include('client.partials.footer')
     </div>
     @yield('scripts')
</body>
</html>


