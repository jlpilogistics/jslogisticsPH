@extends('client.layout.mainlayout')
@section('assets')
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="clients/img/Jexsan.png">
    <link rel="icon" type="image/png" sizes="96x96" href="clients/img/Jexsan.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Accounts Profile</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="/clients/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="/clients/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="/clients/css/paper-dashboard.css" rel="stylesheet"/>

    <!--  Fonts and icons     -->
    <link href="/clients/css/themify-icons.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/clients/simple-line-icons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/clients/feather/style.css')}}">
    <!--  client assets    -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

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


@section('scripts')
    <!--   Core JS Files   -->
    <script src="clients/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="clients/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="clients/js/bootstrap-checkbox-radio.js"></script>

    <!--  Charts Plugin -->
    <script src="clients/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="clients/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <script>
        $(".nav a").on("click", function() {
            $(".nav").find(".active").removeClass("active");
            $(this).parent().addClass("active");
        });
    </script>
    <!--  client assets    -->
    <script>

        $(function(){
            $('#addMore').on('click', function() {
                var data = $("#tb tr:eq(1)").clone(true).appendTo("#tb");
                data.find("input").val('');


            });
            $(document).on('click', '.remove', function() {
                var trIndex = $(this).closest("tr").index();
                if(trIndex>1) {
                    $(this).closest("tr").remove();
                } else {
                    alert("Sorry!! Can't remove first row!");
                }
            });
        });
    </script>
@stop
