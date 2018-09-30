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
            #PrintAR {
                display: none;
            }
        }

        @media print {
            body * {
                visibility:hidden;
            }
            #PrintAR, #PrintAR * {
                visibility:visible;
            }
            #PrintAR {
                position:absolute;
                left:0;
                top:0;
            }
        }
    </style>
</head>
<div class="modal fade" id="ar" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Report</h4>
            </div>
            <div class="modal-body">
                <div id="PrintAr">
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
                    <div class="row">
                        <div class="container">
                            <br>
                            <div class="col-md-12">
                                <h2><p style="font-family: Arial; text-align:center;">Acknowledgement Receipt</p></h2>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="container">
                            <br>
                            <div class="col-md-1"></div>
                            <div class="col-md-11">
                                <p style="font-family: Arial;"><b>I hereby acknowldege the receipt of the following documents:</b></p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="container">
                            <div class="col-md-1"></div>
                            <div class="col-md-11">
                                <p style="font-family: Arial;"><b>GULF OIL PHILIPPINES</b></p>

                                <p style="font-family: Arial;"><b>ISJL17-014</b></p>

                                <p style="font-family: Arial;"><b>BI 2809</b></p>

                                <p style="font-family: Arial;"><b>SOA 003696</b></p>

                            </div>
                        </div>
                    </div>
                    <br>
                    <br>

                    <div class="row">
                        <div class="container">
                            <br>
                            <div>
                                <p style="font-family: Arial;">1.   Original Receipt of Arrastre/Wharfage OR# 754411</p>

                                <p style="font-family: Arial;">2.   Original Receipt of Shipping line charges OR# 0377556</p>

                                <p style="font-family: Arial;">3.   Original Receipt of AISL OR# 351881-17</p>

                                <p style="font-family: Arial;">4.   Original Receipt of Demurrage Fee OR# 0377893</p>

                                <p style="font-family: Arial;">5.   Original Receipt of Demurrage Fee OR# 0377613</p>

                                <p style="font-family: Arial;">6.   Photocopy of Final Assesment Notice<</p>

                                <p style="font-family: Arial;">7.   Photocopy of BOC single Administrartive Document</p>

                                <p style="font-family: Arial;">8.   Photocopy of Invoice</p>

                                <p style="font-family: Arial;">9.   Packing List</p>

                                <p style="font-family: Arial;">10.  Photocopy of Bill of Lading # MOLU14230430061</p>

                                <p style="font-family: Arial;">11.  Original Copy of Atrig Received by BIR</p>

                                <p style="font-family: Arial;">12.  Original BL certification</p>


                            </div>

                            <div>
                                <br>
                                <br>
                                <br>
                                <br>

                                <b><p style="font-family: Arial;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Received by:</p>
                                </b>
                            </div>
                            <div class="col-md-3">
                                <hr style="border-width:1px;border-color: black;" >
                                <b><p style="font-family: Arial;">Signature Over Printed Name</p></b>
                                <br>
                                <b><p style="font-family: Arial;">Date Received:</p></b>
                            </div>
                        </div>
                    </div>
                </div>

                    <div class="modal-footer">
                        <button type="submit" name="btnPrint" value="Print" id="btnAr" class="btn btn-sucess">Print</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>

            </div>
        </div>
    </div>
</div>

</html>
<script>
    document.getElementById("btnAr").onclick = function () {
        printElement(document.getElementById("PrintAr"));
    }

    function printElement(elem) {
        var domClone = elem.cloneNode(true);

        var $printSection = document.getElementById("PrintAR");

        if (!$printSection) {
            var $printSection = document.createElement("div");
            $printSection.id = "PrintAR";
            document.body.appendChild($printSection);
        }

        $printSection.innerHTML = "";
        $printSection.appendChild(domClone);
        window.print();
    }
</script>