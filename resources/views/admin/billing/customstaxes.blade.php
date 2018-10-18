
@extends('admin.partials.assets')
        <!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    @yield('assets')
    <style>
        td{
            font-family: "Times New Roman", Times, serif;
            font-size: medium;
            color: #000002;
            padding: 10px;
        }

    </style>
</head>
@section('content')

    <div class="content-detached">
        <div class="content-body">
            <section class="row">
                <div class="table-responsive col-sm-12">
                    <input name="b_print" type="button" class="btn btn-primary"   onClick="printContent('printablediv')"  value=" Print ">
                   <br><br> <div class="card">
                        <div id="printablediv" >
                        <div class="card-header">
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
                        </div>
                        <h4><center>COMPUTATION OF DUTIES AND TAXES</center></h4><br><br>
                        <div class="row justify-content-center">
                            <div class="col-4">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td  class="lead">Transaction Value ($)</td>
                                        <td class="text-right">FGS165461646546AA</td>
                                    </tr>
                                    <tbody>
                                    <tr>
                                        <td>Freight:</td>
                                        <td class="text-right">ABC Bank, USA</td>
                                    </tr>
                                    <tr>
                                        <td>Insurance:</td>
                                        <td class="text-right">S1654616</td>
                                    </tr>
                                    <tr>
                                        <td><b>Other Chargers:</b></td>
                                        <td class="text-right"></td>
                                    </tr>
                                    <tr>
                                        <td>Taxable value USD:</td>
                                        <td class="text-right">BTNPP34</td>
                                    </tr>
                                    <tr>
                                        <td  class="lead">Exchange Rate Php</td>
                                        <td class="text-right">FGS165461646546AA</td>
                                    </tr>


                                    <tbody>
                                    <tr>
                                        <td>Dutiable Value Php</td>
                                        <td class="text-right">$ 14,900.00</td>
                                    </tr>
                                    <tr>
                                        <td>Rate of Duty</td>
                                        <td class="text-right">$ 1,788.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-800">Customs Duty Php</td>
                                        <td class="text-bold-800 text-right"> $ 16,688.00</td>
                                    </tr>
                                    </tbody>
                                    </tbody>
                                    </tbody>
                                </table>
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td  class="lead"><b>SUMMARY: </b></td>

                                        <td class="text-right"></td>
                                    </tr>
                                    <tbody>
                                    <tr>
                                        <td>Customs Duties Php :</td>
                                        <td class="text-right">ABC Bank, USA</td>
                                    </tr>
                                    <tr>
                                        <td>VAT :</td>
                                        <td class="text-right">S1654616</td>
                                    </tr>
                                    <tr>
                                        <td>E-TAX :</td>
                                        <td class="text-right"></td>
                                    </tr>
                                    <tr>
                                        <td>CSF :</td>
                                        <td class="text-right">BTNPP34</td>
                                    </tr>
                                    <tr>
                                        <td  class="lead">CDS</td>
                                        <td class="text-right">FGS165461646546AA</td>
                                    </tr>


                                    <tbody>
                                    <tr>
                                        <td>FPF</td>
                                        <td class="text-right">$ 14,900.00</td>
                                    </tr>
                                    <tr>
                                        <td>Total:</td>
                                        <td class="text-right">$ 1,788.00</td>
                                    </tr>
                                    </tbody>
                                    </tbody>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-4">
                                <table class="table" >
                                    <tr>
                                        <td>TV Php </td>
                                        <td> 1234 </td>
                                    </tr>
                                    <tr>
                                        <td>BC</td>
                                        <td>1234</td>
                                    </tr>
                                    <tr>
                                        <td>CD </td>
                                        <td>1234</td>
                                    </tr>

                                    <tr>
                                        <td>BF </td>
                                        <td>1234</td>
                                    </tr>
                                    <tr>
                                        <td>WD </td>
                                        <td>1234</td>
                                    </tr>
                                    <tr>
                                        <td>AC </td>
                                        <td>1234</td>
                                    </tr>
                                    <tr>
                                        <td>CDS </td>
                                        <td>1234</td>
                                    </tr>
                                    <tr>
                                        <td>IPF </td>
                                        <td>1234</td>
                                    </tr>

                                    <tr>
                                        <td>LC Php </td>
                                        <td>1234</td>
                                    </tr>
                                    <tr>
                                        <td>+ET </td>
                                        <td>1234</td>
                                    </tr>
                                    <tr>
                                        <td>Total: </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>VAT </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>VAT Total Php</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td> </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>TOTAL PAYMENT AMOUNT:</td>
                                        <td>Php 34345342</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div id="invoice-template" class="card-body">
                            <div id="invoice-footer">
                                <div class="row">
                                    <div class="col-md-5 col-sm-10">
                                        <p>*Computed Customs Duty & Tax are for reference declaration purposes only. <br> Final assessment is for Philippine Bureau of Customs </p>
                                    </div>
                                    <div class="col-md-9 col-sm-10">
                                        <h6>USD to Php </h6>
                                <p>SCD to Php</p>
                                        <p>SCD to Php</p>
                                    </div>
                                </div>
                            </div>
                        <div class="text-md-left">
                            <p>Prepared by :</p><br><br>

                            <h6>Edison Rafol</h6>
                            <p class="text-muted">Operations Manager</p><br><br>
                        </div>
                        </div>
                    </div>
                </div>
                </div>
            </section>
        </div>
    </div>

    <script language="javascript">
        function printContent(el){
            var restorepage = $('body').html();
            var printcontent = $('#' + el).clone();
            $('body').empty().html(printcontent);
            window.print();
            $('body').html(restorepage);
        }

    </script>

@stop