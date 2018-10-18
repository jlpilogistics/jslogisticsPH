@extends('admin.partials.assets')
        <!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head> <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
        table, td, th {

            font-size: large;
        }

        table {

            width: 100%;
        }

        th, td {
            padding: 15px;
        }
    </style>
</head>
@section('content')
    <button name="b_print" type="button" class="btn btn-primary ft-printer" onClick="printContent('printablediv')"></button>
    <br><br>
    <div id="printablediv">
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <div class="card-body pb-0">
                    <body>
                    <div class="container">

                        <b><p style="font-family:Cambria;font-size:250%;text-align:center;">JEXSAN LOGISTICS
                                PHILIPPINES  INC.</p></b>
                        <b><p style="font-family:Arial;font-size:90%;text-align:center;">
                                5th Flr. Raha Sulayman Bldg., 108 Benavidez St.
                                <br>
                                Legaspi Village Makati City, Philippines 1229
                                <br>
                                Telephone No. : (632) 813-2071 / Telefax No. : (632) 864-0828
                                <br>
                                VAT REG TIN: 008-603-352-00000
                                <br>
                                www.jlpi.com
                            </p></b>
                        <h3 style="text-align: center;">BILLING INVOICE</h3>
                        <hr>
                        <div class="row">
                            <div class="container">

                                        <table>
                                            <tr>
                                                <th>JEXSAN LOGISTICS PHILIPPINES INC.</th>
                                                <th style="text-align: left">Date:10/11/18 </th>
                                            </tr>
                                            <tr>
                                                <th>4C PALM COAST AVENUE ONE E COM CENTER BLDG</th>
                                                <th style="text-align: left">12311710-004</th>
                                            </tr><br>

                                            @foreach($data as $charge)
                                                @for ($x = 0; $x < count($charge['bi']); $x++)
                                                    <tr>
                                                        <td><h5><b><p style="font-family: Arial;font-size: large">
                                                                        {{$charge['bi'][$x] }}
                                                                    </p></b></h5></td>
                                                        <td>{{$charge['price'][$x] }}</td>

                                                    </tr>
                                                @endfor
                                            @endforeach

                                            @foreach($price as $charge)
                                                @for ($x = 0; $x < count($charge['price']); $x++)
                                                    <tr>
                                                      {{$charge['price'][1]}}

                                                    </tr>
                                                    @endfor
                                                    @endforeach


                                        </table>

                                </div>

                        </div>
                    </div>
                </div>
        </div>
    </div>
        </div>

    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <div class="card-body pb-0">
                    <b><p style="font-family:Cambria;font-size:250%;text-align:center;">JEXSAN LOGISTICS
                            PHILIPPINES  INC.</p></b>
                    <b><p style="font-family:Arial;font-size:90%;text-align:center;">
                            5th Flr. Raha Sulayman Bldg., 108 Benavidez St.
                            <br>
                            Legaspi Village Makati City, Philippines 1229
                            <br>
                            Telephone No. : (632) 813-2071 / Telefax No. : (632) 864-0828
                            <br>
                            VAT REG TIN: 008-603-352-00000
                            <br>
                            www.jlpi.com
                        </p></b>
                    <br>
                    <h3 style="text-align: center;">STATEMENT OF ACCOUNT</h3>
                    <hr>
                    <div class="row">
                        <div class="container">
                            <div class="row">
                                <table>
                                    <tr>
                                    <th>JEXSAN LOGISTICS PHILIPPINES INC.</th>
                                        <th style="text-align: right">Date: </th>
                                    </tr>
                                    <tr>
                                    <th>4C PALM COAST AVENUE ONE E COM CENTER BLDG</th>
                                    <th style="text-align: right">4234234-004</th>
                                    </tr><br>

                                    <tr>
                                        {{--<td style="text-align: right">Service</td>--}}
                                        {{--<td style="text-align: right">Service</td>--}}
                                    @foreach($soa as $charge)
                                        @for ($x = 0; $x < count($charge['soa']); $x++)

                                            <tr>
                                           <td><h5><b><p style="font-family: Arial;font-size: large">
                                                {{$charge['soa'][$x]}}
                                            </p></b></h5></td>

                                                <td style="text-align: right"> Price</td>

                                        @endfor
                                    @endforeach
                                            </tr>

<tr>
            <td></td>
                                    <td></td>
            <td></td>
        </tr>


                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <a href="javascript:showhide('uniquename')">
       Add Charges
    </a>

    <div id="uniquename" style="display:none;">
        <form action="">
            <div class="col-md-4">
            <div class="card">
                <div class="card-body">
        <div class="col-lg-8 col-sm-4">
            <div class="form-group">
                <input type="text" name="charge1" class="form-control" placeholder="Add Charges">
            </div>
        </div>
        <div class="col-lg-8 col-sm-4">
            <div class="form-group">
                <input type="text" name="charge2" class="form-control" placeholder="Add Charges">
            </div>
        </div>
            <div class="col-lg-4 col-sm-4">
                <div class="form-group">
                    <input type="submit" name="plate_no" class="btn btn-primary">
                </div>
            </div>
                </div>
            </div>
            </div>
        </form>
    </div>
</body>
</html>
<script language="javascript">
    function printContent(el){
        var restorepage = $('body').html();
        var printcontent = $('#' + el).clone();
        $('body').empty().html(printcontent);
        window.print();
        $('body').html(restorepage);
    }

</script>
<script>
    function showhide(id) {
        var e = document.getElementById(id);
        e.style.display = (e.style.display == 'block') ? 'none' : 'block';
    }
</script>
@stop
