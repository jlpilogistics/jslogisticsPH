@extends('admin.layouts.mainlayout')

@section('assets')
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Basic DataTables - Modern Admin - Clean Bootstrap 4 Dashboard HTML Template + Bitcoin
        Dashboard
    </title>
    <link rel="apple-touch-icon" href="{{URL::asset('app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('app-assets/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
          rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
          rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/css/vendors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->

    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/css/app.css')}}">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/css/pages/users.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/vendors/css/forms/selects/select2.min.css')}}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/style.css')}}">
    <!-- END Custom CSS-->
@stop

@section('content')
    <section id="horizontal-form-layouts ">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">Create a Quote</h3>

            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="dropdown float-md-right">
                    <button class="btn btn-danger dropdown-toggle round btn-glow px-2" id="dropdownBreadcrumbButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownBreadcrumbButton"><a class="dropdown-item" href="#"><i class="la la-calendar-check-o"></i> Calender</a>
                        <a class="dropdown-item" href="#"><i class="la la-cart-plus"></i> Cart</a>
                        <a class="dropdown-item" href="#"><i class="la la-life-ring"></i> Support</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="la la-cog"></i> Settings</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-head">
                    <div class="card-header">
                        <h4 class="card-title">Quote #{{$data->transact}} details</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    </div>
                    <div class="px-1">
                        <ul class="list-inline list-inline-pipe text-left border-bottom-grey border-bottom-lighten-3">
                            <li>Requested a Quote on:
                                <span class="text-muted">{{$data->created_at}}</span>
                            </li>
                            <li>Status:
                                <span class="text-muted">{{$data->status->name}}</span>
                            </li>

                            <li><a href="#" class="text-muted" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Export as PDF"><i class="la la-file-pdf-o"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                        <form class="form form-horizontal" method="post" action="{{action('QuotesController@store')}}">
                            {{csrf_field()}}
                            <input type="hidden" name="user_id" value="{{$client->id}}">
                            <input type="hidden" name="id" value="{{$data->id}}">
                            <input type="hidden" name="name" value="{{$client->firstName}} {{$client->lastName}}">
                            <input type="hidden" name="address" value="{{$client->address}}">
                            <input type="hidden" name="quotenumber" value="{{$data->transact}}">
                            <input type="hidden" name="city" value="{{$client->city}}">
                            <input type="hidden" name="country" value="{{$client->country}}">
                            <input type="hidden" name="term" value="{{$data->goods->term}}">
                            <input type="hidden" name="mail" value="{{$client->email}}">
                            <input type="hidden" class="mode" value="{{$ref_id}}">
                            <input type="hidden" name="client_ref" value="{{$client->client_ref}}">
                            <div class="form-body">
                                <h4 class="form-section"><i class="la la-eye"></i> Quote to:</h4>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-md-4 label-control" for="userinput1">Name</label>
                                            <div class="col-md-8">
                                                <p class="float-right">{{$client->firstName}} {{$client->lastName}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-md-4 label-control" for="userinput2">Date Quoted</label>
                                            <div class="col-md-8">
                                                {{{$mytime = Carbon\Carbon::now()->toFormattedDateString()}}}
                                                <input type="hidden" name="datequoted" value="{{$mytime}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">~
                                        <div class="form-group row">
                                            <label class="col-md-4 label-control" for="userinput2">Quote ID</label>
                                            <div class="col-md-8">
                                                <p class="float-right">{{$data->transact}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-md-5 label-control" for="userinput1">Email Address</label>
                                            <div class="col-md-7">
                                                <p class="float-right">{{$client->email}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-md-4 label-control" for="userinput3">Valid Until</label>
                                            <div class="col-md-8">
                                                <input type="date" id="userinput3" class="form-control border-primary" placeholder="Username"
                                                       name="validity">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="form-section"><i class="ft-mail"></i> Charges/Rates</h4>
                                <div class="col-lg-12 col-sm-12">
                                    <table class="table table-bordered">
                                        <thead class="bg-teal bg-lighten-4">
                                            <tr>
                                                    <th width="20%">Currency</th>
                                                    <th width="30%">Charges</th>
                                                    <th width="20%">Enter Amount in Peso</th>
                                                    <th width="20%">Total</th>
                                                    <th width="10%" style="text-align: center;">
                                                        <a href="#/" class="addRow"><i class="glyphicon glyphicon-plus"></i>+</a>
                                                    </th>
                                                </tr>
                                        </thead>
                                        <tbody class="tbodyRow">
                                        @if(Session::has('session1'))
                                            @for($x = 1 ; $x<20; $x++)
                                                @if(Session::has('session'.$x))
                                            <tr>
                                                @if($x < 2)
                                                <td><select name="currency" class="form-control currency">
                                                        <option selected="true" value="{{ Session::get('session')['currency']}}">{{ Session::get('session')['symbol']}}</option>
                                                        @foreach($currency as $key=>$val)
                                                            <option value="{{$val}}">{{$key}}</option>
                                                        @endforeach
                                                    </select></td>
                                                    @else
                                                    <td></td>
                                                @endif
                                                <td>{!! Form::select('charge[]', $charge, Session::get('session'. $x)->charge,['class'=>'form-control charge', 'id'=>'charge']) !!}</td>

                                                <td><input type="text" class="form-control amount numbersOnly" name="amount[]" value="{{ Session::get('session')['amount'][$x-1]}}"></td>
                                                <td><span style="font-size: 14px" class="current">{{Session::get('session')['symbol']}}</span><p class="lead totalRow float-right" >{{Session::get('session'. $x)->amount}}</p></td>
                                                <input type="hidden" value="{{$pesos}}" class="pesoRate" name="pesoRate">
                                                <td><a href="#/" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i>x</a></td>
                                            </tr>
                                            @endif
                                                @endfor
                                            @else
                                            <tr>
                                                <td><select name="currency" class="form-control currency">
                                                        <option selected="true" disabled value="">Currency</option>
                                                        @foreach($currency as $key=>$val)
                                                            <option value="{{$val}}">{{$key}}</option>
                                                        @endforeach
                                                    </select></td>
                                                <td>{!! Form::select('charge[]', $charge, null,['class'=>'form-control charge', 'id'=>'charge']) !!}</td>
                                                <td><input type="text" class="form-control amount numbersOnly" name="amount[]"></td>
                                                <td><span style="font-size: 14px" class="current"></span><p class="lead totalRow float-right" ></p></td>
                                                <input type="hidden" value="{{$pesos}}" class="pesoRate" name="pesoRate">
                                                <td><a href="#/" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i>x</a></td>
                                            </tr>
                                            @endif
                                            <input type="hidden" name="symbol" value="" id="myText">
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-md-7 col-sm-12 text-center text-md-left">
                                        <table class="table table-bordered">
                                            <thead class="bg-teal bg-lighten-4">
                                            <tr>
                                                <th>Terms and Conditions <a href="#/" class="addTerms" style="float: right"><i class="glyphicon glyphicon-plus"></i>+</a></th>
                                            </tr>
                                            </thead>
                                            <tbody class="terms">
                                            <tr>
                                                <td><textarea type="text" class="form-control" style="resize: none" name="conditions[]"></textarea></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-5 col-sm-12">
                                        <p class="lead">Total amount</p>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                <tr>
                                                    <td>Sub Total</td>
                                                    <td class="text-right"><b class="subtotal">{{Session::get('session')['subtotals']}}</b> </td>
                                                </tr>
                                                <tr>
                                                    <td>TAX (12%)</td>
                                                    <td class="text-right tax">{{Session::get('session')['taxes']}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-bold-800">Total</td>
                                                    <td class="text-bold-800 text-right total">{{Session::get('session')['mytotals']}}</td>
                                                </tr>
                                                <input type="hidden" name="subtotals" value="" id="mySub">
                                                <input type="hidden" name="taxes" value="" id="myTax">
                                                <input type="hidden" name="mytotals" value="" id="myTotal">
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions right">
                                <button type="button" class="btn btn-warning mr-1">
                                    <i class="ft-x"></i> Cancel
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    <i class="la la-check-square-o"></i> Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
@stop

@section('scripts')
    <script src="{{URL::asset('app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{URL::asset('app-assets/vendors/js/tables/datatable/datatables.min.js')}}" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <script type="text/javascript" src="{{URL::asset('app/js/jquery-1.11.1.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('app/js/jquery-1.11.3.min.js')}}"></script>
    <script src="{{URL::asset('app-assets/vendors/js/forms/repeater/jquery.repeater.min.js')}}"
            type="text/javascript"></script>
    <!-- BEGIN MODERN JS-->
    <script src="{{URL::asset('app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('app-assets/js/core/app.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('app-assets/js/scripts/customizer.js')}}" type="text/javascript"></script>
    <!-- END MODERN JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{URL::asset('app-assets/js/scripts/tables/datatables/datatable-basic.js')}}"
            type="text/javascript"></script>

    <script src="{{URL::asset('app-assets/js/scripts/forms/select/form-select2.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('app-assets/js/scripts/forms/form-repeater.js')}}"  type="text/javascript"></script>
    <script type="text/javascript">
        $('tbody').delegate('.amount,.totalRow,.currency','keyup',function () {
            var row = $(this).parent().parent();
            var curName = $('.currency option:selected').text(); // The value of the selected option
            $('.current').html(curName);
            // alert(row.find('.currency').val());
            row.find('.amount').addClass('numbersOnly');
            var cur = $('.currency').val(); // The value of the selected option
            var peso = $('.pesoRate').val();
            var rate  = cur / peso;
            var amount = row.find('.amount').val();
            var tot = amount * rate;
            var tota = tot.toFixed(2);
            row.find('.totalRow').text("");
            row.find('.totalRow').text(tota);
            total();

        });
        // $('tr').delegate('.currency','change',function () {
        //
        //     var curName = $('.currency option:selected').text();
        //     document.getElementById("myText").value = curName;// The value of the selected option
        //     $('.current').html(curName);
        //
        //
        // });
        $('tbody').delegate('.currency','change',function () {

            var curName = $('.currency option:selected').text();
            document.getElementById("myText").value = curName;// The value of the selected option
            $('.current').html(curName);

            $('.tbodyRow tr').each(function () {
                //processing this row
                //how to process each cell(table td) where there is checkbox

                $(this).find('.amount').each(function () {
                    var row = $(this).parent().parent();
                    var curName = $('.currency option:selected').text(); // The value of the selected option
                    $('.current').html(curName);
                    // alert(row.find('.currency').val());
                    row.find('.amount').addClass('numbersOnly');
                    var cur = $('.currency').val(); // The value of the selected option
                    var peso = $('.pesoRate').val();
                    var rate  = cur / peso;
                    var amount = row.find('.amount').val();
                    var tot = amount * rate;
                    var tota = tot.toFixed(2);
                        row.find('.totalRow').text("");
                        row.find('.totalRow').text(tota);
                    total();
                });
                // $(this).find('td').each(function () {
                //     alert('x');
                //     // it is checked, your code here...
                // });

            });


        });

        $('.addTerms').on('click', function () {
            addTerm();

        });

        $('.addRow').on('click', function () {
            addRow();

        });

        function total(){
            var total = 0;
            $('.totalRow').each(function (i,e) {
                var totalRow = $(this).text()-0;
                total += totalRow;
            });
            var totalSub = total;
            var tSub = totalSub.toFixed(2);
            $('.subtotal').html(tSub);
            var tax = total * 0.12;
            var taxes = tax.toFixed(2);
            $('.tax').html(taxes);
            var all = total + tax;
            var amt = all.toFixed(2);
            $('.total').html(amt);
            document.getElementById("mySub").value = tSub;
            document.getElementById("myTax").value = taxes;
            document.getElementById("myTotal").value = amt;
        }

        function addRow(){
            var tr = '<tr>\n' +
                '                                                <td></td>\n' +
                '                                                <td><select name="charge[]" class="form-control charge">\n' +
                '                                                        <option selected="true" disabled value="">Select Charges</option>\n' +
                '                                                        @foreach($charge as $key=>$val)\n' +
                '                                                            <option value="{{$val}}">{{$val}}</option>\n' +
                '                                                        @endforeach\n' +
                '                                                    </select></td>\n' +
                '                                                <td><input type="text" class="form-control amount numbersOnly" name="amount[]"></td>\n' +
                '                                                <td><span style="font-size: 14px" class="current"></span><p class="lead totalRow float-right" ></p></td>\n' +
                '                                                <td><a href="#/" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i>x</a></td>\n' +
                '                                            </tr>';

                $('.tbodyRow').append(tr);


                    $('.amount').addClass('numbersOnly');


        }

        function addTerm(){
            var termtr = ' <tr>\n' +
                '                                                <td><textarea type="text" class="form-control" style="resize: none" name="conditions[]"></textarea></td>\n' +
                '                                            </tr>';
            $('.terms').append(termtr);
        }


        $('body').delegate('.remove' ,'click', function () {

            $(this).parent().parent().remove();
        });
        $('.numbersOnly').keyup(function () {
            if (this.value != this.value.replace(/[^0-9\.]/g, '')) {
                this.value = this.value.replace(/[^0-9\.]/g, '');
            }
        });


        $('tbody').delegate('.charge','change',function () {

            var row = $(this).parent().parent();
            $.ajax({
                url: '/charges/' + $(this).val() + '/' + $('.mode').val(),
                type: 'get',
                data: {},
                success: function(data) {

                    if (data.success == true) {

                        row.find('.amount').val(data.info);
                        var curName = $('.currency option:selected').text(); // The value of the selected option
                        $('.current').html(curName);
                        // alert(row.find('.currency').val());
                        row.find(".amount").addClass("numbersOnly");
                        var cur = $('.currency').val(); // The value of the selected option
                        var peso = $('.pesoRate').val();
                        var rate  = cur / peso;
                        var amount = row.find('.amount').val();
                        var tot = amount * rate;
                        var tota = tot.toFixed(2);
                        row.find('.totalRow').text("");
                        row.find('.totalRow').text(tota);
                        total();

                    } else {
                        alert('Cannot find info');
                    }


                },
                error: function(jqXHR, textStatus, errorThrown) {}
            });
        });

    </script>

@stop