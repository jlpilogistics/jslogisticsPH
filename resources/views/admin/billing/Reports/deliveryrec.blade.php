<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{URL::asset('app-assets/css-rtl/bootstrap.min.css')}}">
    <script src="{{URL::asset('app-assets/js/core/libraries/jquery.min.js')}}"></script>
    <script src="{{URL::asset('app-assets/vendors/js/editors/ckeditor/styles.js')}}"></script>
    <style>
        @media screen {
            #printDr {
                display: none;
            }
        }

        @media print {
            body * {
                visibility:hidden;
            }
            #printDr, #printDr * {
                visibility:visible;
            }
            #printDr {
                position:absolute;
                left:0;
                top:0;
            }
        }
    </style>
</head>
<div class="modal fade" id="dl" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Report</h4>
            </div>
            <div class="modal-body">
                <div id="printthisDr">

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
                    <br>
                    <div class="col-md-6">
                        <h4><b><p style="font-family: Arial;text-align:left;">DELIVERY RECEIPT</p></b></h4>
                    </div>
                    <div class="col-md-12">
                        <h4><b><p style="font-family:Cambria;text-align:left;font-size:90%">
                                    Date:
                                    <br>
                                    Delivered to:
                                    <br>
                                    Address     :
                                </p></b></h4>
                    </div>


                    <div class="row;col-md-12;">
                        <br>
                        <table class="table table-bordered">
                            <tr>
                                <th style="text-align:center;">QTY</th>
                                <th style="text-align:center;">Unit</th>
                                <th style="text-align:center;">DESCRIPTION</th>
                            </tr>
                            <tr>
                                <th style="text-align:center;color:white;">x</th>
                                <th style="text-align:center;"></th>
                                <th style="text-align:center;"></th>
                            </tr>
                            <tr>
                                <th style="text-align:center;color:white;">x</th>
                                <th style="text-align:center;"></th>
                                <th style="text-align:center;"></th>
                            </tr>
                            <tr>
                                <th style="text-align:center;color:white;">x</th>
                                <th style="text-align:center;"></th>
                                <th style="text-align:center;"></th>
                            </tr>
                            <tr>
                                <th style="text-align:center;color:white;">x</th>
                                <th style="text-align:center;"></th>
                                <th style="text-align:center;"></th>
                            </tr>
                            <tr>
                                <th style="text-align:center;color:white;">x</th>
                                <th style="text-align:center;"></th>
                                <th style="text-align:center;"></th>
                            </tr>
                            <tr>
                                <th style="text-align:center;color:white;">x</th>
                                <th style="text-align:center;"></th>
                                <th style="text-align:center;"></th>
                            </tr>
                            <tr>
                                <th style="text-align:center;color:white;">x</th>
                                <th style="text-align:center;"></th>
                                <th style="text-align:center;"></th>
                            </tr>
                            <tr>
                                <th style="text-align:center;color:white;">x</th>
                                <th style="text-align:center;"></th>
                                <th style="text-align:center;"></th>
                            </tr>
                            <tr>
                                <th style="text-align:center;color:white;">x</th>
                                <th style="text-align:center;"></th>
                                <th style="text-align:center;"></th>
                            </tr>
                            <tr>
                                <th style="text-align:center;color:white;">x</th>
                                <th style="text-align:center;"></th>
                                <th style="text-align:center;"></th>
                            </tr>
                            <tr>
                                <th style="text-align:center;color:white;">x</th>
                                <th style="text-align:center;"></th>
                                <th style="text-align:center;"></th>
                            </tr>
                            <tr>
                                <th style="text-align:center;color:white;">x</th>
                                <th style="text-align:center;"></th>
                                <th style="text-align:center;"></th>
                            </tr>
                            <tr>
                                <th style="text-align:center;color:white;">x</th>
                                <th style="text-align:center;"></th>
                                <th style="text-align:center;">TOTAL</th>
                            </tr>

                        </table>
                    </div>
                    <br>

                    <div class="row">

                        <div class="col-md-6">

                            <h5><b><p style="font-family: Cambria;text-align:justify;">
                                        Customer acknowledges receipt herein described in good order and
                                        condition and agrees to pay invoice value thereof C.O.D. unless
                                        credit has been arranged with 12% interest per annum on all over
                                        due accounts, plus 25% of the total amount for attorney's fee and
                                        courts cost in case of legal action which shall be brought in Court.
                                </b></h5></p>

                        </div>


                        <div class="col-md-6">
                            <br>
                            <h4><b><p style="font-family: Cambria;text-align:center;">
                                        Received the above goods in good order and condition.
                                </b></h4></p>
                        </div>

                    </div>
                    <br>
                    <br>


                    <div class="row">
                        <div class="col-md-6">
                            <h4><b><p style="font-family: Cambria;text-align:left;">DELIVERY RECEIPT:
                                    </p></b></h4>

                            <p style="font-family:Arial+Narrow"><b><h5>
                                        50 Bkits. (50x3) 0001001-0003500 BIR Authority to Print No. OCN9AU0000712779E
                                        <br>
                                        Date Issued: 10-18-18 Expiry Date 10-17-23
                                        <br>
                                        APP Reference No. : APP/217817/2016
                                        <br>
                                        Printed by: Jessia Printing Press
                                        <br>
                                        0392 Quirino Ave. Dongali Pque. City
                                        <br>
                                        VAT REG. TIN: 212-902-597-00000
                                    </h5>  </b> </p>
                        </div>
                        <div class="col-md-6">
                            <h4><b><p style="font-family: Cambria;text-align:left;">BY:</p></b></h4>

                            <p style="font-family:Arial+Narrow"><b><h5>
                            <p style="text-align:center;">Authorized Signature</p>
                            <br>
                            Printer's Accreditation No. 052MP20140000000025
                            <br>
                            Date Issued: 10-18-18
                            <br>
                            Date of Expiration: 10-17-23
                            <br>
                            <br>
                            <br>
                            <br>
                            <p style="text-align:center;">"THIS DOCUMENT IS NOT VALID FOR CLAIMING INPUT TAXES"</p>
                            <p style="text-align:center;">"THIS DELIVERY RECEIPT SHALL BE VALID FOR FIVE (5)
                                YEARS FROM THE DATE OF ATP"</p>
                            </p></b></h5>
                        </div>
                    </div>

                </div>
                     <div class="modal-footer">
                            <input type="submit" name="btnRD" value="Print" id="btnRD" class="btn btn-sucess">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
            </div>
        </div>
    </div>
</div>
</html>

<script>
    document.getElementById("btnRD").onclick = function () {
        printElement(document.getElementById("printthisDr"));
    }

    function printElement(elem) {
        var domClone = elem.cloneNode(true);

        var $printSection = document.getElementById("printDr");

        if (!$printSection) {
            var $printSection = document.createElement("div");
            $printSection.id = "printDr";
            document.body.appendChild($printSection);
        }

        $printSection.innerHTML = "";
        $printSection.appendChild(domClone);
        window.print();
    }
</script>