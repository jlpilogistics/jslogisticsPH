@extends('admin.layouts.mainlayout')

@section('assets')
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>gmaps - Basic Maps - Modern Admin - Clean Bootstrap 4 Dashboard HTML Template +
        Bitcoin Dashboard</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
          rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
          rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/vendors.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/app.css">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/colors/palette-gradient.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */

        /* Optional: Makes the sample page fill the window. */

        .controls {
            background-color: #fff;
            border-radius: 2px;
            border: 1px solid transparent;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
            box-sizing: border-box;
            font-family: Roboto;
            font-size: 15px;
            font-weight: 300;
            height: 29px;
            margin-left: 17px;
            margin-top: 10px;
            outline: none;
            padding: 0 11px 0 13px;
            text-overflow: ellipsis;
            width: 400px;
        }

        .controls:focus {
            border-color: #4d90fe;
        }
        .title {
            font-weight: bold;
        }
        #infowindow-content {
            display: none;
        }
        #map #infowindow-content {
            display: inline;
        }

    </style>
    @stop
@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
        <h3 class="content-header-title mb-0 d-inline-block">Quotations</h3>
        <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Quotations</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Requests</a>
                    </li>

                </ol>
            </div>
        </div>
        </div>
        <div class="content-body col-md-12">
            <!-- gmaps basic maps section start -->
            <section id="gmaps-basic-maps">
                <!-- Basic Map -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Current Location</h4>
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
                            <div class="card-content collapse show">
                                <div class="card-body col-md-12" >
                                    <input id="pac-input" class="controls" type="text"
                                           placeholder="Enter a location">
                                    <div id="map" class="height-400"></div>
                                    <div id="infowindow-content">
                                        <span id="place-name"  class="title"></span><br>
                                        Place ID <span id="place-id"></span><br>
                                        <span id="place-address"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Map Events -->
            </section>
            <section id="text-alignment">
                <div class="row">
                    <div class="col-12 mt-3 mb-1">
                        <h4 class="text-uppercase">Shipment Details</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-header mb-0">
                                <h4 class="card-title">Sender Information</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-content">
                                    <div class="card-body  py-0 px-0">
                                        <div class="list-group">
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <div class="media">
                                                    <div class="media-left pr-1">
                                                        <p class="font-small-2 mb-0 text-muted">Name:</p>
                                                    </div>
                                                    <div class="media-body w-100">
                                                        <h6 class="media-heading mb-0">Berra Eric</h6>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <div class="media">
                                                    <div class="media-left pr-1">
                                                        <p class="font-small-2 mb-0 text-muted">Email:</p>
                                                    </div>
                                                    <div class="media-body w-100">
                                                        <h6 class="media-heading mb-0">Berra Eric</h6>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <div class="media">
                                                    <div class="media-left pr-1">
                                                        <p class="font-small-2 mb-0 text-muted">Phone:</p>
                                                    </div>
                                                    <div class="media-body w-100">
                                                        <h6 class="media-heading mb-0">Berra Eric</h6>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <div class="media">
                                                    <div class="media-left pr-1">
                                                        <p class="font-small-2 mb-0 text-muted">Email:</p>
                                                    </div>
                                                    <div class="media-body w-100">
                                                        <h6 class="media-heading mb-0">Berra Eric</h6>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <div class="media">
                                                    <div class="media-left pr-1">
                                                        <p class="font-small-2 mb-0 text-muted">Address:</p>
                                                    </div>
                                                    <div class="media-body w-100">
                                                        <h6 class="media-heading mb-0">Berra Eric</h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-header mb-0">
                                <h4 class="card-title">Consignee Details</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-content">
                                    <div class="card-body  py-0 px-0">
                                        <div class="list-group">
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <div class="media">
                                                    <div class="media-left pr-1">
                                                        <p class="font-small-2 mb-0 text-muted">Name:</p>
                                                    </div>
                                                    <div class="media-body w-100">
                                                        <h6 class="media-heading mb-0">Berra Eric</h6>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <div class="media">
                                                    <div class="media-left pr-1">
                                                        <p class="font-small-2 mb-0 text-muted">Email:</p>
                                                    </div>
                                                    <div class="media-body w-100">
                                                        <h6 class="media-heading mb-0">Berra Eric</h6>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <div class="media">
                                                    <div class="media-left pr-1">
                                                        <p class="font-small-2 mb-0 text-muted">Phone:</p>
                                                    </div>
                                                    <div class="media-body w-100">
                                                        <h6 class="media-heading mb-0">Berra Eric</h6>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <div class="media">
                                                    <div class="media-left pr-1">
                                                        <p class="font-small-2 mb-0 text-muted">Email:</p>
                                                    </div>
                                                    <div class="media-body w-100">
                                                        <h6 class="media-heading mb-0">Berra Eric</h6>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <div class="media">
                                                    <div class="media-left pr-1">
                                                        <p class="font-small-2 mb-0 text-muted">Address:</p>
                                                    </div>
                                                    <div class="media-body w-100">
                                                        <h6 class="media-heading mb-0">Berra Eric</h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-header mb-0">
                                <h4 class="card-title">Commodity Details</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-content">
                                    <div class="card-body  py-0 px-0">
                                        <div class="list-group">
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <div class="media">
                                                    <div class="media-left pr-1">
                                                        <p class="font-small-2 mb-0 text-muted">Name:</p>
                                                    </div>
                                                    <div class="media-body w-100">
                                                        <h6 class="media-heading mb-0">Berra Eric</h6>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <div class="media">
                                                    <div class="media-left pr-1">
                                                        <p class="font-small-2 mb-0 text-muted">Email:</p>
                                                    </div>
                                                    <div class="media-body w-100">
                                                        <h6 class="media-heading mb-0">Berra Eric</h6>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <div class="media">
                                                    <div class="media-left pr-1">
                                                        <p class="font-small-2 mb-0 text-muted">Phone:</p>
                                                    </div>
                                                    <div class="media-body w-100">
                                                        <h6 class="media-heading mb-0">Berra Eric</h6>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <div class="media">
                                                    <div class="media-left pr-1">
                                                        <p class="font-small-2 mb-0 text-muted">Email:</p>
                                                    </div>
                                                    <div class="media-body w-100">
                                                        <h6 class="media-heading mb-0">Berra Eric</h6>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <div class="media">
                                                    <div class="media-left pr-1">
                                                        <p class="font-small-2 mb-0 text-muted">Address:</p>
                                                    </div>
                                                    <div class="media-body w-100">
                                                        <h6 class="media-heading mb-0">Berra Eric</h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="heading-buttons1">Manage Inland Haulage</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <button type="button" class="btn btn-sm btn-icon btn-success">
                                    <i class="ft-user white"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-primary">Click</button>
                                <button type="button" class="btn btn-sm bg-blue-grey white"><i class="ft-settings white"></i> Click</button>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p class="card-title">Content title</p>
                                <span class="text-right">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie
                                    roll bonbon liquorice tiramisu pie powder.Donut sweet roll
                                    marzipan pastry cookie cake tootsie roll oat cake cookie.</span>
                                <p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie
                                    roll pie marshmallow lollipop chupa chups donut fruitcake cake.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // gmaps basic maps section end -->
        </div>
    </div>


    @stop
@section('scripts')
    <script src="../../../app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
            <script>
                // This sample uses the Place Autocomplete widget requesting only a place
                // ID to allow the user to search for and locate a place. The sample
                // then reverse geocodes the place ID and displays an info window
                // containing the place ID and other information about the place that the
                // user has selected.

                // This example requires the Places library. Include the libraries=places
                // parameter when you first load the API. For example:
                // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

                function initMap() {
                    var map = new google.maps.Map(document.getElementById('map'), {
                        center: {lat: -33.8688, lng: 151.2195},
                        zoom: 13
                    });

                    var input = document.getElementById('pac-input');

                    var autocomplete = new google.maps.places.Autocomplete(
                        input, {placeIdOnly: true});
                    autocomplete.bindTo('bounds', map);

                    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

                    var infowindow = new google.maps.InfoWindow();
                    var infowindowContent = document.getElementById('infowindow-content');
                    infowindow.setContent(infowindowContent);
                    var geocoder = new google.maps.Geocoder;
                    var marker = new google.maps.Marker({
                        map: map
                    });
                    marker.addListener('click', function() {
                        infowindow.open(map, marker);
                    });

                    autocomplete.addListener('place_changed', function() {
                        infowindow.close();
                        var place = autocomplete.getPlace();

                        if (!place.place_id) {
                            return;
                        }
                        geocoder.geocode({'placeId': place.place_id}, function(results, status) {

                            if (status !== 'OK') {
                                window.alert('Geocoder failed due to: ' + status);
                                return;
                            }
                            map.setZoom(50);
                            map.setCenter(results[0].geometry.location);
                            // Set the position of the marker using the place ID and location.
                            marker.setPlace({
                                placeId: place.place_id,
                                location: results[0].geometry.location
                            });
                            marker.setVisible(true);
                            infowindowContent.children['place-name'].textContent = place.name;
                            infowindowContent.children['place-id'].textContent = place.place_id;
                            infowindowContent.children['place-address'].textContent =
                                results[0].formatted_address;
                            infowindow.open(map, marker);
                        });
                    });
                }
            </script>
    <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyBDkKetQwosod2SZ7ZGCpxuJdxY3kxo5Po&libraries=places&callback=initMap"
            async defer></script>
    <script src="../../../app-assets/vendors/js/charts/gmaps.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN MODERN JS-->
    <script src="../../../app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="../../../app-assets/js/core/app.js" type="text/javascript"></script>
    <script src="../../../app-assets/js/scripts/customizer.js" type="text/javascript"></script>
    <!-- END MODERN JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="../../../app-assets/js/scripts/charts/gmaps/maps.js" type="text/javascript"></script>
@stop
