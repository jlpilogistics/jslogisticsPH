

<!DOCTYPE html>
@extends('admin.billing.assets')
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

    </style>
</head>
<body>
@section('content')

    <div class="app-content content ">
        <div class="content-wrapper ">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">Invoice Template</h3>
                    <input name="b_print" type="button" class="btn btn-primary"   onClick="printContent('printablediv')"  value=" Print ">

                </div>

            </div>
            <div class="content-body  ">
                <section class="card">
                    <div id="invoice-template" class="card-body">
                        <!-- Invoice Company Details -->
                        <div id="printablediv" >

                            <img src="../../../app-assets/images/logo/Jexsan.png" alt="company logo" class=""
                            />

                            <table class="ml-2 px-0 list-unstyled">
                                <tr>
                                    <th >Modern Creative Studio </th>
                                    <th > INVOICE </th>
                                </tr>
                                <tr>
                                    <td>4025 Oak Avenue,</td>
                                    <td># INV-001001 </td>
                                </tr>
                                <tr>
                                    <td>Melbourne,</td>
                                    <th >Balance Due
                                    </th>
                                </tr>
                                <tr>
                                    <td>Florida 32940,</td>
                                    <td>$ 12,000.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>USA</td>
                                </tr>

                            </table>
                            <div id="invoice-customer-details" class="row pt-2">
                                <div class="col-sm-12 text-center text-md-left">
                                    <p class="text-muted"><b>Bill To</b></p>
                                    <table class="px-0 list-unstyled">
                                        <tr>
                                            <td class="text-bold-800">Mr. Bret Lezama  </td>
                                        </tr>
                                        <tr><td> 4879 Westfall Avenue, </td>
                                            <td> Invoice Date :</td>
                                            <td > 06/05/2017 </td>
                                        </tr>
                                        <tr><td> Albuquerque, </td>
                                            <td >Terms : </td>
                                            <td class="text-muted">Due on Receipt</td>
                                        </tr>
                                        <tr><td>New Mexico-87102.  </td>
                                            <td> Due Date :</td>
                                            <td class="text-muted">10/05/2017</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <table class="table">
                                <thead>
                                <tr >
                                    <th class="text-lg-left" >#</th>
                                    <th class="text-lg-left" >Item & Description</th>
                                    <th class="text-right">Rate</th>
                                    <th class="text-right">Hours</th>
                                    <th class="text-right">Amount</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td >1</td>
                                    <td>
                                        <p class="text-muted">Simply dummy text of the printing and typesetting industry.</p>
                                    </td>
                                    <td class="text-right">$ 20.00/hr</td>
                                    <td class="text-right">120</td>
                                    <td class="text-right">$ 2400.00</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <p>iOS Application Development</p>
                                    </td>
                                    <td class="text-right">$ 25.00/hr</td>
                                    <td class="text-right">260</td>
                                    <td class="text-right">$ 6500.00</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>

                                        <p class="text-muted">Vestibulum euismod est eu elit convallis.</p>
                                    </td>
                                    <td class="text-right">$ 20.00/hr</td>
                                    <td class="text-right">300</td>
                                    <td class="text-right">$ 6000.00</td>
                                </tr>
                                </tbody>
                            </table>
                            <table class="table table-borderless ml-2 px-0 " >
                                <tr>
                                    <th >
                                        Payment Methods:
                                    </th>
                                    <th class="text-right">
                                        Total dues
                                    </th>
                                </tr>
                                <tr>
                                    <td >Bank name: ABC Bank, USA</td>

                                    <td class="text-right">Sub Total::$ 14,900.00</td>
                                </tr>
                                <tr>
                                    <td >Acc name: Amanda Orton</td>

                                    <td class="text-right">TAX (12%)::$ 1,788.00</td>
                                </tr>
                                <tr>
                                    <td>IBAN:FGS165461646546AA</td>

                                    <td class="text-right">Total::$ 16,688.00</td>
                                </tr>
                                <tr>
                                    <td>SWIFT code:BTNPP34</td>

                                    <td class="text-right">Payment Made::(-) $ 4,688.00</td>
                                </tr>
                                <tr>
                                    <td ></td>

                                    <td class=" text-right">Balance Due::$ 12,000.00</td>
                                </tr>
                                <tr>
                                    <td colspan="3"></td>

                                    <td class=" text-right">Authorized person </td>
                                </tr>
                                <tr>
                                    <td colspan="3"></td>

                                    <td class=" text-right"> <img src="../../../app-assets/images/pages/signature-scan.png" style="width: 70px;height: 70px"
                                        /></td>
                                </tr>
                                <tr>
                                    <td colspan="3"></td>

                                    <td class=" text-right">Amanda Orton </td>
                                </tr>
                                <tr>
                                    <td colspan="3"></td>

                                    <td class=" text-right">Managing Director</td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <!-- Invoice Footer -->
                    <div id="invoice-footer">
                        <div class="row">
                            <div class="col-md-7 col-sm-12">
                                <h6>Terms & Condition</h6>
                                <p>You know, being a test pilot isn't always the healthiest business
                                    in the world. We predict too much for the next year and yet far
                                    too little for the next 10.</p>
                            </div>
                            <div class="col-md-5 col-sm-12 text-center">
                                <button type="button" class="btn btn-info btn-lg my-1"><i class="la la-paper-plane-o"></i> Send Invoice</button>
                            </div>
                        </div>
                    </div>
                    <!--/ Invoice Footer -->
            </div>
            </section>
        </div>
    </div>

</body>

</html>

