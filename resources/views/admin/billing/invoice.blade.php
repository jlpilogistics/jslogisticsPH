<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Your receipt</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .invoice-box {
      max-width: 800px;
      margin: auto;
      padding: 30px;
      border: 1px solid #eee;
      box-shadow: 0 0 10px rgba(0, 0, 0, .15);
      font-size: 12px;
      line-height: 24px;
      font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
      color: #555;
    }

    .invoice-box table {
      width: 100%;
      text-align: left;
      border-spacing: 0;
      border-collapse: collapse;
    }

    .invoice-box table td {
      padding: 5px;
      vertical-align: top;
    }

    .invoice-box table tr td:nth-child(2) {
      text-align: left;
    }

    .invoice-box table tr.top table td {
      padding-bottom: 20px;
    }

    .invoice-box table tr.top table td.title {
      font-size: 45px;
      line-height: 45px;
      color: #333;
    }

    .invoice-box table tr.information table td {
      padding-bottom: 40px;
    }

    .invoice-box table tr.heading td {
      background: #eee;
      border-bottom: 1px solid #ddd;
      font-weight: bold;
    }

    .invoice-box table tr.details td {
      padding-bottom: 20px;
    }

    .invoice-box table tr.item td{
      border-bottom: 1px solid #eee;
    }

    .invoice-box table tr.item.last td {
      border-bottom: none;
    }

    .invoice-box table tr.total td:nth-child(2) {
      border-top: 2px solid #eee;
      /*font-weight: bold;*/
    }

    .text-align-right {
      text-align: right;
    }

    @media  only screen and (max-width: 600px) {
      .invoice-box table tr.top table td {
        width: 100%;
        display: block;
        text-align: center;
      }

      .invoice-box table tr.information table td {
        width: 100%;
        display: block;
        text-align: center;
      }
    }

    /** RTL **/
    .rtl {
      direction: rtl;
      font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }

    .rtl table {
      text-align: right;
    }

    .rtl table tr td:nth-child(2) {
      text-align: left;
    }

    .text-align-left {
      text-align: left;
    }
  </style>
</head>

<body>
<div class="invoice-box">
  <table>
    <tr class="top">
      <td colspan="3">
        <table>
          <tr>
            <td class="title" align="center">


              <img src="{{URL::asset('app-assets/images/logo/Jexsan.png')}}" class="center-block center" alt="company logo"/>
            </td>


          </tr>
        </table>
      </td>
    </tr>

    <tr class="information">
      <td colspan="4">
        <table>
          <tr>
            <td>

              Jexsan Logistics Philippines Inc.<br>
              Benavidez St., Raja Sulayman Bldg., Bel Air<br>
              Makati City, Metro Manila, Philippines
            </td>
            <td>
              {{$data['name']}}<br>
              {{$data['address']}}<br>
              {{$data['city']}}, {{$data['country']}}<br>


            </td>
          </tr>
          <tr>

            <td>
              Total Amount: {{$data['symbol']}} {{$data['mytotals']}} <br>
              Incoterm: {{$data['term']}}<br>
              Valid Until: {{$data['validity']}} <br>
            </td>
            <td>
              Date: {{$data['datequoted']}}<br>
              Invoice ref.: {{$invoice->reference}}
            </td>
          </tr>
        </table>
      </td>
    </tr>

    <tr class="heading">
      <td >#</td>
      <td class="text-align-left">Charges</td>
      <td>Currency</td>
      <td class="text-align-right">Amount</td>
    </tr>
    @foreach($charges as $item)
    <tr class="item">
      <td >{{$item['id']}}</td>
      <td>{{$item['charge']}}</td>
      @if($item['id'] == 1)
      <td>{{$data['symbol']}}</td>
      @else
        <td></td>
      @endif
      <td class="text-align-right">{{$item['amount']}}</td>
    </tr>
    @endforeach
    <tr class="total">
      <td></td>
        <td></td>
      <td colspan="4" class="text-align-right">
        Subtotal: {{$data['symbol']}} {{$data['subtotals']}}<br/>
        Included tax: {{$data['symbol']}} {{$data['taxes']}}<br/>
        <b>Total: {{$data['symbol']}} {{$data['mytotals']}}</b><br/>
      </td>
    </tr>
    <tr class="information">
      <td colspan="4">
        <table>
          <tr>
            <th>Terms and Conditions</th>
          </tr>
          <tr>
              <td>
                @foreach($terms as $item)
                {{$item['list']}}<br>
                @endforeach
              </td>
          </tr>
        </table>
      </td>
    </tr>

  </table>
</div>
</body>
</html>