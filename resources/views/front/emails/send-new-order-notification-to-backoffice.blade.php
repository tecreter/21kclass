<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Invoice</title>
    <style type="text/css">
        body {
            font-family: 'Arial';
            margin:0;
            padding:0;
        }

        table {
            border-collapse: collapse;
        }

        .container {
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }

        @media (min-width: 1200px)
        {
            .container {
                width: 1170px;
            }
        }

        @media (min-width: 992px)
        {
            .container {
                width: 970px;
            }
        }

        @media (min-width: 768px) {
            .container {
                width: 750px;
            }
        }

        .table-responsive {
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: rgba(0,0,0,0);
            line-height: 1.42857143;
            color: #333;
            font-size: 13px;
            box-sizing: border-box;
            min-height: .01%;
            overflow-x: auto;
            max-width: 640px;
            border: none;
        }

        .table {
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: rgba(0,0,0,0);
            line-height: 1.42857143;
            color: #333;
            font-size: 13px;
            box-sizing: border-box;
            border-spacing: 0;
            background-color: transparent;
            border-collapse: collapse;
            width: 100%;
            max-width: 100%;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            margin-top: 10px;
        }

        .table-bordered>tbody>tr>th {
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: rgba(0,0,0,0);
            color: #333;
            font-size: 13px;
            border-spacing: 0;
            border-collapse: collapse;
            box-sizing: border-box;
            text-align: center;
            min-height: 1px;
            width: 8.33333333%;
            position: static;
            display: table-cell;
            float: none;
            padding: 8px;
            line-height: 1.42857143;
            vertical-align: bottom;
            border: 1px solid #ddd;
            border-bottom-width: 2px;
            border-top: 0;
        }

        .table-bordered>tbody>tr>td, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>td, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>thead>tr>th {
            border: 1px solid #ddd;
            padding: 8px;
            line-height: 1.42857143;
            vertical-align: top;
        }
    </style>
</head>
<body>
<section class="container" style="font-size:13px;">
    <div class="row">
        <div class="col-md-12" style="width:100%;margin: 0 auto">
            <p style="margin:10px 0 15px;text-align:center;border-bottom:1px solid #e0e0e0;padding-bottom:10px">
                <img src="https://21kclass.com/images/logos/logo-top-nav.png" alt="" width="176">
            </p>
            <p>Hi <b>Backoffice Team</b>, An order has been created!</p>
            <p>
                Here are the details of the order below:
            </p>
            <p style="margin-bottom:5px">
                <span style="color:#727272">Order placed on</span> <span style="font-weight:500">{{ $order->transaction_date }}</span>
            </p>
            <p style="margin-bottom:5px">
                <span style="color:#727272">Invoice number</span> <span style="font-weight:500">#{{ $order->invoice }}</span>
            </p>
            <p style="margin-bottom:5px">
                <span style="color:#727272">Transaction ID</span> <span style="font-weight:500">{{ $order->transaction_id }}</span>
            </p>
            <div class="table-responsive" style="max-width:640px;border:none">
                <table class="table table-bordered" cellspacing="0" cellpadding="0" style="margin-top:10px;">
                    <thead>
                    <tr style="background-color:#ececec">
                        <th style="text-align:center">#</th>
                        <th style="text-align:center">Course Name</th>
                        <th style="text-align:center">Price</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($i=1)
                    @foreach($order->products as $product)
                        <tr>
                            <td style="text-align:center">{{$i}}</td>
                            <td style="white-space:pre-wrap">{{$product->name}}</td>
                            <td style="text-align:right">Rs. {{number_format($product->price * $product->quantity)}}</td>
                        </tr>
                        @php($i++)
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="2" style="text-align:right">Subtotal:</td>
                        <td style="text-align:right">Rs. {{number_format($order->order->sub_total)}}</td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align:right">Discounts:</td>
                        <td style="text-align:right">Rs. {{number_format($order->order->discounts)}}</td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align:right">Tax:</td>
                        <td style="text-align:right">Rs. {{number_format($order->order->tax)}}</td>
                    </tr>
                    <tr style="background-color:#fcf8e3">
                        <td colspan="2" style="text-align:right"><strong>Amount paid:</strong></td>
                        <td style="text-align:right"><strong>Rs. {{number_format($order->order->total)}}</strong></td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</section>
</body>
</html>
