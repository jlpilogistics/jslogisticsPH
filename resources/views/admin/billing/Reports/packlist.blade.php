
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
            #printSection1 {
                display: none;
            }
        }
        @media print {
            body * {
                visibility:hidden;
            }
            #printSection1, #printSection1 * {
                visibility:visible;
            }
            #printSection1 {
                position:absolute;
                left:0;
                top:0;
            }
        }
    </style>
</head>
<div class="modal fade" id="pl" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Report</h4>
            </div>
            <div class="modal-body">
                <div id="printPL">
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
                    <table class="table-striped" style="width: 40%">
                        <thead>
                        <tr>
                            <th >PRODUCT CODE:</th>
                            <th >PRODUCT DESCRIPTION:</th>
                            <th>Packing (cl)</th>
                            <th>A/C (%)</th>
                            <th>Quantity</th>
                            <th>UOM</th>
                            <th >Lot No.</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <th>013014</th>
                            <th>MARTEL CORDON BLEU NEW 4X3L</th>
                            <th>4x300</th>
                            <th>40</th>
                            <th>208</th>
                            <th>CT</th>
                            <th>CELW9925</th>
                        </tr>
                        </tbody>

                        <tbody>
                        <tr>
                            <th></th>
                            <th></th>
                            <th style="text-align:center;">TOTAL:</th>
                            <th ></th>
                            <th style="text-align:center;">600</th>
                            <th style="text-align:center;">CT</th>
                            <th style="text-align:center;">CASES</th>
                        </tr>
                        </tbody>
                    </table>
            <div class="well">
                <div class="col-md-12" style="text-align:left;">
                    <b><p style="font-family: Arial;">For and on behalf of</p></b>
                </div>
                <br><br>
                <div class="col-md-12" style="text-align:left;">
                    <b><p style="font-family: Arial;">Jexsan Logistics Philippines Inc.</p></b>
                </div>
            </div>
            </div>

                <div class="modal-footer">
                    <button type="submit" name="btnPrint" value="Print" id="Print" class="btn">Print</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
            </div>
        </div>
    </div>
</div>
</html>
<script>
    document.getElementById("Print").onclick = function () {
        printElement(document.getElementById("printPL"));
    }
    function printElement(elem) {
        var domClone = elem.cloneNode(true);

        var $printSection = document.getElementById("printSection1");

        if (!$printSection) {
            var $printSection = document.createElement("div");
            $printSection.id = "printSection1";
            document.body.appendChild($printSection);
        }

        $printSection.innerHTML = "";
        $printSection.appendChild(domClone);
        window.print();
    }
</script>