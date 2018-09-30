@extends('client.layout.mainlayout')
@section('assets')
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="clients/img/Jexsan.png">
    <link rel="icon" type="image/png" sizes="96x96" href="clients/img/Jexsan.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Accounts Profile</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="/clients/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/clients/css/animate.min.css" rel="stylesheet"/>
    <link href="/clients/css/paper-dashboard.css" rel="stylesheet"/>
    <link href="/clients/css/themify-icons.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/clients/simple-line-icons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/clients/feather/style.css')}}">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="{{URL::asset('app/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('app/css/bootstrap.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app/rs-plugin/css/settings.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app/css/dropdown.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('app/css/owl.carousel.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('app/css/global.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('app/css/style.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('app/css/homepage-4.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('app/css/responsive.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/css/pages/gallery.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/vendors/js/gallery/photo-swipe/photoswipe.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/css/plugins/forms/switch.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/vendors/css/forms/toggle/bootstrap-switch.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/vendors/css/forms/toggle/switchery.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/css/core/colors/palette-switch.css')}}">

    <link href="{{URL::asset('app/css/skin.less')}}" rel="stylesheet/less">
    <link rel="stylesheet"
          href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css"/>
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
    <link rel="stylesheet" type="text/css" href="//github.com/downloads/lafeber/world-flags-sprite/flags16.css" />
    <script src="https://cdn.jsdelivr.net/npm/places.js@1.11.0"></script>


    <style type="text/css">
        .main-section{
            margin:0 auto;
            padding: 20px;
            margin-top: 100px;
            background-color: #fff;
            box-shadow: 0px 0px 20px #c1c1c1;
        }
        .fileinput-remove,
        .fileinput-upload{
            display: none;
        }

        * {
            box-sizing: border-box;
        }
        .modal-dialog {
            width: 85%;
            height: 60%;
            margin: 0;
            padding: 0;
            justify-content: center;

        }
        .column {
            float: left;
            width: 27%;
            padding: 10px;
            height: 300px; /* Should be removed. Only for demonstration */

        }
        .column1 {
            float: left;
            width: 23%;
            padding: 10px;
            height: 300px; /* Should be removed. Only for demonstration */

        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        td{
            font-family: "Times New Roman", Times, serif;
            font-size: medium;
            color: #000002;
            padding: 13px;

        }

        body {
            zoom: 95%;
        }
      
        input[type="text"][disabled] {
            color: red;
        }
    </style>
@stop

@section('scripts')
    <script type="text/javascript" src="{{URL::asset('app/js/jquery-1.11.1.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('app/js/jquery.repeater.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('app/js/jquery-1.11.3.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>


    <script type="text/javascript">
        $(document).ready(function(){

            $("#transaction").on("change", function(){
                var selected = this.value;
                if (selected == 'Import' || selected == 'Export') {
                    var resultData = ["Air", "FCL40", "FCL20", "LCL"];
                    var myselect = $('<select>');
                    $('#mode').empty();
                    $.each(resultData, function (index, key) {
                        myselect.append($('<option></option>').val(key).html(key));
                    });
                    $('#mode').append(myselect.html());
                }
                else {
                    var resultDatas = ["FTL", "LTL"];
                    var myselect = $('<select>');
                    $('#mode').empty();
                    $.each(resultDatas, function (index, key) {
                        myselect.append($('<option></option>').val(key).html(key));
                    });
                    $('#mode').append(myselect.html());
                }
            });


        });

    </script>

    <script src="clients/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="clients/js/bootstrap-checkbox-radio.js"></script>

    <!--  Charts Plugin -->
    <script src="clients/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="clients/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="{{URL::asset('app-assets/vendors/js/gallery/masonry/masonry.pkgd.min.js')}}"
            type="text/javascript"></script>
    <script src="{{URL::asset('app-assets/vendors/js/gallery/photo-swipe/photoswipe.min.js')}}"
            type="text/javascript"></script>
    <script src="{{URL::asset('app-assets/vendors/js/gallery/photo-swipe/photoswipe-ui-default.min.js')}}"
            type="text/javascript"></script>
    <script src="{{URL::asset('app-assets/js/scripts/gallery/photo-swipe/photoswipe-script.js')}}"

    <script>
        $(".nav a").on("click", function() {
            $(".nav").find(".active").removeClass("active");
            $(this).parent().addClass("active");
        });
    </script>
    <script src="{{URL::asset('app-assets/js/scripts/forms/switch.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{URL::asset('app-assets/vendors/js/forms/toggle/bootstrap-switch.min.js')}}"
            type="text/javascript"></script>
    <script src="{{URL::asset('app-assets/vendors/js/forms/toggle/bootstrap-checkbox.min.js')}}"
            type="text/javascript"></script>
    <script src="{{URL::asset('app-assets/vendors/js/forms/toggle/switchery.min.js')}}" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN MODERN JS-->
    <script src="{{URL::asset('app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('app-assets/js/core/app.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('app-assets/js/scripts/customizer.js')}}" type="text/javascript"></script>
    <!--  client assets    -->
    <script>

        $(function(){
            $('#addMore').on('click', function() {
                var data = $("#tb tr:eq(1)").clone(true).appendTo("#tb");
                data.find("input").val('');


            });
            $(document).on('click', '.remove', function() {
                var trIndex = $(this).closest("tr").index();
                if(trIndex>0) {
                    $(this).closest("tr").remove();
                    var rows = $(this).closest("tr");
                    rows.find('.charge').val(0);
                    rows.find('.volumetric').val(0);
                    total();
                } else {
                    alert("Sorry!! Can't remove first row!");
                }
            });
        });

        $('tbody').delegate('input, select','change',function () {
            $('.tbodyRow tr').each(function () {
                $(this).find('.charge').each(function () {

                    var row = $(this).parent().parent();
                    var dim = row.find('.dimension').val();
                    var quan = row.find('.quantity').val();
                    var length = row.find('.length').val();
                    var width = row.find('.width').val();
                    var height = row.find('.height').val();
                    var weight = row.find('.weight').val();

                    var charge = quan * weight;
                    row.find('.charge').val("");
                    row.find('.charge').val(charge);

                    if (dim == "cm"){
                        var dimCm = ((length * width * height)*quan)/6000;
                        dimCm = dimCm.toFixed(2);
                        row.find('.volumetric').val("");
                        row.find('.volumetric').val(dimCm);
                    }
                    if (dim == "inch"){
                        var dimInch = ((length * width * height)*quan)/366;
                        dimInch = dimInch.toFixed(2);
                        row.find('.volumetric').val("");
                        row.find('.volumetric').val(dimInch);
                    }
                    // row.find('.charge').val(charge);
                    total();

                });
            });
        });

        function total(){
            var total = 0;
            var tot = 0;
            $('.charge').each(function (i,e) {
                var totalRow = $(this).val()-0;
                total = total + totalRow;
            });
            $('.volumetric').each(function (i,e) {
                var totalVol = $(this).val()-0;
                tot = tot + totalVol;
            });
            var totalSub = total;
            var totalVolume = tot;
            $('.chargee').val(totalSub);
            $('.volumetrics').val(totalVolume);


        }
    </script>

    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script
            src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();

        } );

        $(".show-cost-details").click(function () {

            //open up the content needed - toggle the slide- if visible, slide up, if not slidedown.
            $('.costs-details').slideToggle(500, function () {
                //execute this after slideToggle is done
                //change text of header based on visibility of content div
                $('.show-cost-details').text(function () {
                    //change text based on condition
                    return $('.costs-details').is(":visible") ? "Hide Details" : "Show Details";
                });
            });

        }); $(".show-quote-details").click(function () {

            //open up the content needed - toggle the slide- if visible, slide up, if not slidedown.
            $('.confirm').slideToggle(500, function () {
                //execute this after slideToggle is done
                //change text of header based on visibility of content div
                $('.show-quote-details').text(function () {
                    //change text based on condition
                    return $('.confirm').is(":visible") ? "Hide Forms" : "Confirm Quote";
                });
            });

        });


            $("#file-1").fileinput({
                theme: 'fa',
                uploadUrl: "/image-upload/" + $('#img').val() ,

                uploadExtraData: function() {
                    return {
                        _token: $("input[name='_token']").val(),
                    };
                },
                allowedFileExtensions: ['jpg', 'png', 'gif'],
                overwriteInitial: false,
                maxFileSize:5000,
                maxFilesNum: 10,
                slugCallback: function (filename) {
                    return filename.replace('(', '_').replace(']', '_');
                }
            });



    </script>
    {{--<script>--}}
        {{--// This example displays an address form, using the autocomplete feature--}}
        {{--// of the Google Places API to help users fill in the information.--}}

        {{--// This example requires the Places library. Include the libraries=places--}}
        {{--// parameter when you first load the API. For example:--}}
        {{--// <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">--}}

        {{--var placeSearch, autocomplete;--}}
        {{--var componentForm = {--}}
            {{--street_number: 'short_name',--}}
            {{--route: 'long_name',--}}
            {{--locality: 'long_name',--}}
            {{--administrative_area_level_1: 'short_name',--}}
            {{--country: 'long_name',--}}
            {{--postal_code: 'short_name'--}}
        {{--};--}}

        {{--function initAutocomplete() {--}}
            {{--// Create the autocomplete object, restricting the search to geographical--}}
            {{--// location types.--}}
            {{--autocomplete = new google.maps.places.Autocomplete(--}}
                {{--/** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),--}}
                {{--{types: ['geocode']});--}}

            {{--// When the user selects an address from the dropdown, populate the address--}}
            {{--// fields in the form.--}}
            {{--autocomplete.addListener('place_changed', fillInAddress);--}}
        {{--}--}}

        {{--function fillInAddress() {--}}
            {{--// Get the place details from the autocomplete object.--}}
            {{--var place = autocomplete.getPlace();--}}

            {{--for (var component in componentForm) {--}}
                {{--document.getElementById(component).value = '';--}}
                {{--document.getElementById(component).disabled = false;--}}
            {{--}--}}

            {{--// Get each component of the address from the place details--}}
            {{--// and fill the corresponding field on the form.--}}
            {{--for (var i = 0; i < place.address_components.length; i++) {--}}
                {{--var addressType = place.address_components[i].types[0];--}}
                {{--if (componentForm[addressType]) {--}}
                    {{--var val = place.address_components[i][componentForm[addressType]];--}}
                    {{--document.getElementById(addressType).value = val;--}}
                {{--}--}}
            {{--}--}}
        {{--}--}}

        {{--// Bias the autocomplete object to the user's geographical location,--}}
        {{--// as supplied by the browser's 'navigator.geolocation' object.--}}
        {{--function geolocate() {--}}
            {{--if (navigator.geolocation) {--}}
                {{--navigator.geolocation.getCurrentPosition(function(position) {--}}
                    {{--var geolocation = {--}}
                        {{--lat: position.coords.latitude,--}}
                        {{--lng: position.coords.longitude--}}
                    {{--};--}}
                    {{--var circle = new google.maps.Circle({--}}
                        {{--center: geolocation,--}}
                        {{--radius: position.coords.accuracy--}}
                    {{--});--}}
                    {{--autocomplete.setBounds(circle.getBounds());--}}
                {{--});--}}
            {{--}--}}
        {{--}--}}
    {{--</script>--}}
    {{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41YlDT32uBPo5SPSrtcoDvv1VXX6_4Rw&libraries=places&callback=initAutocomplete"--}}
            {{--async defer></script>--}}
    {{--<script>--}}
        {{--var placesAutocomplete = places({--}}
            {{--container: document.querySelector('#address-input')--}}
        {{--});--}}
    {{--</script>--}}
    <script>
        (function() {
            var placesAutocomplete = places({
                container: document.querySelector('#address-input'),
                type: 'address',
                templates: {
                    value: function(suggestion) {
                        return suggestion.name;
                    }
                }
            });
            placesAutocomplete.on('change', function resultSelected(e) {
                document.querySelector('#country').value = e.suggestion.country || '';
                document.querySelector('#city').value = e.suggestion.city || '';
                document.querySelector('#zip').value = e.suggestion.postcode || '';
            });
        })();
        (function() {
            var placesAutocomplete = places({
                container: document.querySelector('#searchDest'),
                type: 'address',
                templates: {
                    value: function(suggestion) {
                        return suggestion.name;
                    }
                }
            });
            placesAutocomplete.on('change', function resultSelected(e) {
                document.querySelector('#countrys').value = e.suggestion.country || '';
                document.querySelector('#citys').value = e.suggestion.city || '';
                document.querySelector('#zips').value = e.suggestion.postcode || '';
            });
        })();
    </script>






@stop
