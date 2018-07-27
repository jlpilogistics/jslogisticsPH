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
<style type="text/css">
	       table {
  border-collapse: collapse;
  border: 1px solid gray;
  width: calc(50% - 10px);
  margin: 10px;
}

#customers {
    font-family: "Lucida Console", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 45%;
}

#customers td {
    border: 1px solid #ddd;
    padding: 5px;
    font-size: 15px;
    font-weight: 900;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    font-size: 15px;
    font-weight: 900;
    padding-top: 12px;
    padding-bottom: 9px;
    text-align: left;
    background-color: rgb(49, 69, 85);
    color: white;
}
</style>
<div class="container">
<center><h3>Domestic Rates</h3></center>
<table id="customers" style="float:left;">
  <tr>
    <th>Land Shipment</th>
    <th></th>
    <th></th>
  </tr>
  <tr>
    <td>Destination</td>
    <td>Min. 1-25Kg</td>
    <td>Excess to 25Kg
     (excess per kilo)</td>
  </tr>
  <tr>
     <td>MetroManila</td>
    <td>Php <?php echo number_format("20",2)?></td>
   <td>Php <?php echo number_format("7.50",2)?></td>
  </tr>
  <tr>
     <td>San Pablo/Angeles
     /Bulacan/Rizal</td>
  <td>Php <?php echo number_format("650",2)?></td>
  <td>Php <?php echo number_format("8.50",2)?></td>
  </tr>
  <tr>
    <td>Cabanatuan/Tarlac/Cavite
    Olongapo/Batangas/Los Banos
  /Pampanga</td>
     <td>Php <?php echo number_format("750",2)?></td>
     <td>Php <?php echo number_format("8.50",2)?></td>
  </tr>
  <tr>
     <td>Dagupan/La Union
     Pangasinan/Baguio</td>
     <td>Php <?php echo number_format("800",2)?></td>
     <td>Php <?php echo number_format("9.50",2)?></td>
  </tr>
  <tr>
    <td>Cauayan/Naga/Quezon</td>
    <td>Php <?php echo number_format("850",2)?></td>
    <td>Php <?php echo number_format("10",2)?></td>
  </tr>
  <tr>
     <td>Calapan/Mindoro</td>
 <td>Php <?php echo number_format("1850",2)?></td>
 <td>Php <?php echo number_format("11.50",2)?></td>

  </tr>
  <tr>
    <td>San Nicolas/Laog
    /Legaspi/Tuguegarao
  /Ilocos/Isabela</td>
  <td>Php <?php echo number_format("1850",2)?></td>
  <td>Php <?php echo number_format("12.50",2)?></td>

  </tr>
  <tr>
    <td>VAT</td>
     <td>12%</td>
     <td></td>
  </tr>
  
</table>

<table id="customers" style="float:left;" >
  <tr>
    <th>Air Shipment</th>
    <th></th>

   
  </tr>
  <tr>
    <td>a.) Freight AIF, MYC Insurance and Valuation Charge-as per PAL's Standard Rate</td>
    <td></td>
    
   
  </tr>
  <tr>
     <td>b.) Cartage Fee</td>
     <td></td>
  </tr>
  <tr>
   <td>Min. 1-10kg</td>
  <td>Php <?php echo number_format("20",2)?></td>
 </tr>
  <tr>
     <td>per kg in excess</td>
     <td>Php <?php echo number_format("3.50",2)?></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
  </tr>
  <tr>
     <td>c.) Delivery Fee</td>
 <td></td>
  </tr>
  <tr>
    <td>Min. 1-10kg</td>
  <td>Php <?php echo number_format("19",2)?></td>
  </tr>
  <tr>
     <td>per kg in excess</td>
     <td>Php <?php echo number_format("3.50",2)?></td>
  </tr>
 
</table>

<table id="customers" style="float:left;" >

  <tr>
    <th>Boat Shipment</th>
    <th></th>
    <th></th>
   
  </tr>
  <tr>
     <td>a.) per CBM</td>
     <td>Visayas Area</td>
    <td>Php <?php echo number_format("2300",2)?></td>
   
  </tr>
  <tr>
     <td></td>
     <td>Mindanao Area</td>
  <td>Php <?php echo number_format("2900",2)?></td>
  </tr>
  <tr>
    <td></td>
     <td></td>
     <td></td>
  </tr>
  <tr>
     <td>b.) Special Rate per Kg</td>
     <td>Visayas Area</td>
     <td>Php <?php echo number_format("8",2)?></td>
  </tr>
  <tr>
    <td></td>
     <td>Mindanao Area</td>
  <td>Php <?php echo number_format("9",2)?></td>
  
  </tr>
  <tr>
     <td>c.) Additional Charges:</td>
 <td></td> <td></td>
  </tr>
  <tr>
    <td></td>
    <td>Pick Up</td>
  <td>Php <?php echo number_format("2",2)?>/Kg</td>
  </tr>
   <tr>
    <td></td>
    <td>Handling</td>
  <td>Php <?php echo number_format("2",2)?>/Kg</td>
  </tr>
   <tr>
    <td></td>
    <td>VAT</td>
  <td>12%</td>
  </tr>
  
</table>
</div>


@stop

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