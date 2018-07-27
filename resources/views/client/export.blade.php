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
 <style>
 
#customers {
    font-family: "Lucida Console", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 70%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 9px;
    font-size: 15px;
    font-weight: 900;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: rgb(49, 69, 85);
    color: white;
}
</style>
<div class="container">

<center><h3>Export Rates</h3></center>
<table id="customers" align="center"> <br>
  <tr>
    <th></th>
    <th>Full Container Load</th>
    <th>Less than a Container load</th>
  </tr>
  <tr>
     <td>Container Size</td>
    <td>20'</td>
    <td>40'</td>
  </tr>
  <tr>
     <td>Brokerage</td>
  <td>Php <?php echo number_format("1300",2)?></td>
    <td>Php <?php echo number_format("1300",2)?></td>
  </tr>
  <tr>
    <td>Processing Fee</td>
     <td>Php <?php echo number_format("1500",2)?></td>
    <td>Php <?php echo number_format("1500",2)?></td>
  </tr>
  <tr>
     <td>Documentation</td>
     <td>Php <?php echo number_format("500",2)?></td>
    <td>Php <?php echo number_format("500",2)?></td>
  </tr>
  <tr>
    <td>Handling Fee</td>
    <td>Php <?php echo number_format("500",2)?></td>
    <td>Php <?php echo number_format("500",2)?></td>
  </tr>
  <tr>
     <td>Import Entry</td>
 <td>Php <?php echo number_format("315",2)?></td>
    <td>Php <?php echo number_format("315",2)?></td>
  </tr>
  <tr>
    <td>Customs Entry</td>
  <td>Php <?php echo number_format("2500",2)?></td>
    <td>Php <?php echo number_format("2500",2)?></td>
  </tr>
  <tr>
   <td>Atrig</td>
   <td>Php <?php echo number_format("300",2)?></td>
    <td>Php <?php echo number_format("300",2)?></td>
  </tr>
  <tr>
    <td>Collectors</td>
     <td>Php <?php echo number_format("1500",2)?></td>
    <td>Php <?php echo number_format("1500",2)?></td>
  </tr>
  <tr>
     <td>Receipted</td>
    <td>Php <?php echo number_format("12",2)?></td>
    <td>Php <?php echo number_format("12",2)?></td>
  </tr>
  <tr>
    <td>Freight Charge</td>
   <td>Php <?php echo number_format("18000",2)?></td>
    <td>Php <?php echo number_format("20000",2)?></td>

   </tr>
 
</table>  <br>
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