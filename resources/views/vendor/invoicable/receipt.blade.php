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
            font-size: 16px;
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
            text-align: right;
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
    </style>
</head>

<body>
<div class="invoice-box">
    <table>
        <tr class="top">
            <td colspan="3">
                <table>
                    <tr>
                        <td class="title">
                            Jexsan Logistics Philippines Inc.
                        </td>

                        <td>
                            Date: 2018-03-28<br>
                            Invoice ref.: 2018-03-28-GKSJWD
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="information">
            <td colspan="3">
                <table>
                    <tr>
                        <td>

                            My Company<br>
                            123 Street<br>
                            Example City
                        </td>
                        <td>
                            Client name<br>
                            456 Street<br>
                            Client City

                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="heading">
            <td>Item</td>
            <td>Tax</td>
            <td class="text-align-right">Price</td>
        </tr>

        <tr class="item">
            <td>Et maiores consequatur nihil omnis.</td>
            <td>21%</td>
            <td class="text-align-right">€ 639,77</td>
        </tr>
        <tr class="item">
            <td>Omnis omnis id sed mollitia sit.</td>
            <td>21%</td>
            <td class="text-align-right">€ 74,94</td>
        </tr>
        <tr class="item last">
            <td>Libero minus repellendus nulla modi quisquam aut qui sint.</td>
            <td>21%</td>
            <td class="text-align-right">€ 761,92</td>
        </tr>

        <tr class="total">
            <td></td>
            <td colspan="2">
                <b>Total: € 1.476,63</b><br />
                Included tax: € 256,27
            </td>
        </tr>

    </table>
</div>
</body>
</html>