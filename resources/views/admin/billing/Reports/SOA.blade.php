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
            #printSection {
                display: none;
            }
        }

        @media print {
            body * {
                visibility:hidden;
            }
            #printSection, #printSection * {
                visibility:visible;
            }
            #printSection {
                position:absolute;
                left:0;
                top:0;
            }
        }



    </style>
</head>
    <div class="modal fade" id="soa" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Report</h4>
                </div>
                <div class="modal-body">
                    <div id="printThis">
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
                        <h3 style="text-align: center;">STATEMENT OF ACCOUNT</h3>
                        <hr>
                        <div class="row">
                            <div class="container">
                                <div class="row">
                                    <br>
                                    <div class="col-md-8">
                                        <h4><b><p style="font-family: Arial;">JEXSAN LOGISTICS PHILIPPINES INC.</p></b></h4>
                                    </div>

                                    <div class="col-md-4">
                                        <h4><p style="font-family: Arial;">02/09/18</p></h4>
                                    </div>

                                    <br>

                                    <div class="col-md-8">
                                        <h5><p style="font-family: Arial;">4C PALM COAST AVENUE ONE E COM CENTER BLDG</p></h5>
                                    </div>

                                    <div class="col-md-4">
                                        <h5><b><p style="font-family: Arial;">ISJL1710-004</p></b></h5>
                                    </div>

                                    <br>

                                    <div class="col-md-8">
                                        <h5><p style="font-family: Arial;">MALL OF ASIA COMPLEX PASAY CITY PHILIPPINES</p></h5>
                                    </div>

                                    <div class="col-md-4">
                                        <br>
                                    </div>

                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>


                                    <div class="col-md-8">
                                        <h5><p style="font-family: Arial;">1X40"GP CNTR</p></h5>
                                    </div>
                                    <div class="col-md-4">
                                        <h5><p style="font-family: Arial;">SIMSE1710005</p></h5>
                                    </div>

                                    <br>
                                    <div class="col-md-8">
                                        <h5><p style="font-family: Arial;">30.00CBM/12,960 KGS.</p></h5>
                                    </div>
                                    <div class="col-md-4">
                                        <h5><p style="font-family: Arial;">SINCB17034697</p></h5>
                                    </div>

                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>

                                    <div class="col-md-8">
                                        <h5><b><p style="font-family: Arial;">ARRASTRE/WHARFAGE OR#AMV1657962</p></b></h5>
                                    </div>
                                    <div class="col-md-4">
                                        <br>
                                    </div>

                                    <br>
                                    <div class="col-md-8">
                                        <h5><b><p style="font-family: Arial;">ARRASTRE/WHARFAGE OR#AMV1657962</p></b></h5>
                                    </div>
                                    <div class="col-md-4">
                                        <h5><b><p style="font-family: Arial;">PHP   11,215.74</p></b></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="modal-footer">
                    <button type="submit" name="btnPrint" value="Print" id="btnPrint" class="btn btn-sucess">Print</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
</html>
<script>
    document.getElementById("btnPrint").onclick = function () {
        printElement(document.getElementById("printThis"));
    }

    function printElement(elem) {
        var domClone = elem.cloneNode(true);

        var $printSection = document.getElementById("printSection");

        if (!$printSection) {
            var $printSection = document.createElement("div");
            $printSection.id = "printSection";
            document.body.appendChild($printSection);
        }

        $printSection.innerHTML = "";
        $printSection.appendChild(domClone);
        window.print();
    }
</script>