

<!DOCTYPE html>
@extends('admin.partials.assets')
<html class="loading" lang="en" data-textdirection="ltr">
<head >
    @yield('assets')
    <script language="javascript">
        function printContent(el){
            var restorepage = $('body').html();
            var printcontent = $('#' + el).clone();
            $('body').empty().html(printcontent);
            window.print();
            $('body').html(restorepage);
        }

    </script>
    <style>

        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            padding: 4px;
            text-align: left;}
        .body td {
            text-align: right;
        }
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }

    </style>
</head>
<body>
@section('content')

    <div class="app-content content ">
        <div class="content-wrapper ">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">Invoice Template</h3>
                    <input name="b_print" type="button" class="btn btn-primary" onClick="printContent('printablediv')"  value=" Print ">
                </div>
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <form class="form form-horizontal" method="post" action="{{route('quotations.send-quote')}}">
                        {{csrf_field()}}
                        <input type="submit" class="btn btn-primary" value=" Send to Client ">
                    </form>
                </div>

            </div>
            <div class="content-body ">
                <section class="card">
                    <div id="printablediv" >
                        <div id="invoice-template" class="card-body">
                        <img src="{{URL::asset('app-assets/images/logo/Jexsan.png')}}" class="center-block center" alt="company logo"/>
                        <div id="invoice-customer-details" class="row pt-2">
                            <div class="col-sm-12 text-center text-md-left">
                            <table class="ml-2 px-0 list-unstyled">
                                <tr>
                                        <th >Jexsan Logistics Philippines Inc. </th>

                                </tr>
                                <tr>
                                    <td>Benavidez St., Raja Sulayman Bldg., Bel Air</td>
                                    <td><b> Quotation No:</b>   {{$data['quotenumber']}}  </td>
                                </tr>
                                <tr>
                                    <td>Makati City, Metro Manila, Philippines</td>
                                    <td ><b>Total Quote:</b>  {{$data['symbol']}} {{$data['mytotals']}} </td>
                                </tr>
                            </table>
                            </div>
                        </div>
                        <div id="invoice-customer-details" class="row pt-2">
                            <div class="col-sm-12 text-center text-md-left">
                                <p class="ml-2 text-muted"><b>Quote To</b></p>
                                <table class="ml-2 px-0 list-unstyled">
                                        <tr>
                                            <td class="text-bold-800">{{$data['name']}}</td>
                                        </tr>
                                        <tr><td>{{$data['address']}} </td>
                                            <td style="text-align: right"> Quote Date :</td>
                                            <td > {{$data['datequoted']}} </td>
                                        </tr>
                                        <tr><td> {{$data['city']}} </td>
                                            <td style="text-align: right">Incoterm : </td>
                                            <td class="text-muted">Due on Receipt</td>
                                        </tr>
                                        <tr><td>{{$data['country']}}  </td>
                                            <td style="text-align: right"> Valid Until :</td>
                                            <td class="text-muted">{{$data['validity']}}</td>
                                        </tr>
                                    </table>
                            </div>
                        </div>
                            <br>
                            <br>
                            <h3>Standard Charges</h3>
                            <table class="table" cellpadding="0" cellspacing="0">
                                <thead>
                                    <tr >

                                        <th class="text-lg-center" >#</th>
                                        <th class="text-lg-center" >Shipment Charges</th>
                                        <th class="text-center">Currency</th>
                                        <th class="text-right">Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $x = 0;
                                ?>
                                @foreach($charges as $item)

                                         <?php  $x++;
                                    ?>
                                <tr>
                                    <td  class="text-lg-center" style="padding: 0px 0px 0px 0px;">{{$item['id']}}</td>
                                    <td style="padding: 0px 0px 0px 0px;" class="text-lg-center">
                                        <p class="text-muted">{{$item['charge']}}</p>
                                    </td>
                                    @if($x == 1)
                                    <td style="padding: 0px 0px;" class="text-right">{{$data['symbol']}}</td>
                                    @else
                                        <td class="text-right" style="padding: 0px 0px;" ></td>
                                    @endif
                                    <td class="text-right" style="padding: 0px 40px 0px 0px;">{{$item['amount']}}</td>
                                </tr>
                                    @endforeach
                                </tbody>

                            </table>
                            <h3>Additional Charges (if applicable)</h3>
                            <table class="table" cellpadding="0" cellspacing="0">
                                <thead>
                                <tr >

                                    <th class="text-lg-center" width="15%"></th>
                                    <th class="text-lg-center" width="40%"></th>
                                    <th class="text-center"></th>
                                    <th class="text-right"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $x = 0;
                                ?>
                                @foreach($noncharges as $item)

                                    <?php  $x++;
                                    ?>
                                    <tr>
                                        <td  class="text-lg-center" style="padding: 0px 0px 0px 0px;">{{$item['id']}}</td>
                                        <td style="padding: 0px 0px 0px 0px;" class="text-lg-center">
                                            <p class="text-muted">{{$item['charge']}}</p>
                                        </td>
                                        @if($x == 1)
                                            <td style="padding: 0px 0px;" class="text-right">{{$data['symbol']}}</td>
                                        @else
                                            <td class="text-right" style="padding: 0px 0px;" ></td>
                                        @endif
                                        <td class="text-right" style="padding: 0px 40px 0px 0px;">{{$item['amount']}}</td>
                                    </tr>
                                @endforeach
                                </tbody>

                            </table>
                            <table cellpadding="0" cellspacing="0" style="width: 450px; float: left">
                                <tr><h6>Terms & Condition</h6></tr>
                                @foreach($terms as $item)
                                    <tr>

                                        <td><p>{{$item['list']}}.</p></td>
                                    </tr>
                                @endforeach
                            </table>
                            <table class="body" cellpadding="0" cellspacing="0" style="width: 250px; float: right">
                                <tr>
                                    <td width="30%" ></td>
                                    <td width="70%" >Total Amount</td>
                                </tr>
                                <tr>
                                    <td width="30%"  >Sub Total:</td>
                                    <td width="70%">{{$data['symbol']}} {{$data['subtotals']}}</td>
                                </tr>
                                <tr>
                                    <td width="30%" >TAX (12%):</td>
                                    <td width="70%" >{{$data['symbol']}} {{$data['taxes']}}</td>

                                </tr>
                                <tr>
                                    <td width="30%" >Total:</td>
                                    <td width="70%" >{{$data['symbol']}} {{$data['mytotals']}}</td>
                                </tr>
                                <tr>
                                    <td width="30%" ></td>
                                    <td width="70%" > </td>
                                </tr>
                                <tr>
                                    <td width="30%" ></td>
                                    <td width="70%">Authorized person </td>
                                </tr>
                                <tr>
                                    <td width="30%" ></td>

                                    <td width="70%" > <img src="../../../app-assets/images/pages/signature-scan.png" style="width: 70px;height: 40px"
                                        /></td>
                                </tr>
                                <tr>
                                    <td width="30%" ></td>
                                    <td width="70%" >Mr. Edison Rafol</td>
                                </tr>
                                <tr>
                                    <td width="30%" ></td>
                                    <td width="70%">Operations Manager</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                </tr>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>


</html>

