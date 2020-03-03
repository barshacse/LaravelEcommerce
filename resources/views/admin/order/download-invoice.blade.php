
    <style>
        .height {
            min-height: 200px;
        }


        .table > tbody > tr > .emptyrow {
            border-top: none;
        }

        .table > thead > tr > .emptyrow {
            border-bottom: none;
        }

        .table > tbody > tr > .highrow {
            border-top: 3px solid;
        }
    </style>

    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">

                            <div class="row">
                                <div class="col-md-12">

                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="text-center">
                                                <h2>Invoice for purchase # {{ $order->id }}</h2>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-xs-12 col-md-3 col-lg-3 pull-left">
                                                    <div class="panel panel-default height">
                                                        <div class="panel-heading"><h3 class="text-center text-primary"><strong>Billing Details</strong></h3></div>
                                                        <div class="panel-body">
                                                            <strong>{{ $customer->first_name.' '.$customer->last_name }}</strong><br>
                                                            {{ $customer->address }}<br>
                                                            {{ $customer->email }}<br>
                                                            {{ $customer->phone }}<br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr/>
                                                <div class="col-xs-12 col-md-3 col-lg-3">
                                                    <div class="panel panel-default height">
                                                        <div class="panel-heading"><h3 class="text-center text-primary"><strong>Payment Information</strong></h3></div>
                                                        <div class="panel-body">
                                                            <strong>Payment Date:</strong>{{$payment->payment_type}}<br>
                                                            <strong>Payment Status:</strong>{{$payment->payment_status}}<br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr/>
                                                <div class="col-xs-12 col-md-3 col-lg-3">
                                                    <div class="panel panel-default height">
                                                        <div class="panel-heading"><h3 class="text-center text-primary"><strong>Order Preferences</strong></h3></div>
                                                        <div class="panel-body">
                                                            <strong>Order No: {{ $order->id }}</strong><br>
                                                            <strong>Order Date:{{ $order->order_date }}</strong><br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr/>
                                                <div class="col-xs-12 col-md-3 col-lg-3 pull-right">
                                                    <div class="panel panel-default height">
                                                        <div class="panel-heading"><h3 class="text-center text-primary"><strong>Shipping Address</strong></h3></div>
                                                        <div class="panel-body">
                                                            <strong>{{ $shipping->first_name.' '.$shipping->last_name }}</strong><br>
                                                            {{ $shipping->address }}<br>
                                                            {{ $shipping->email }}<br>
                                                            {{ $shipping->phone }}<br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr/>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h3 class="text-center"><strong>Order summary</strong></h3>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-condensed" >
                                                            <thead>
                                                            <tr>
                                                                <td><strong>Item Name</strong></td>
                                                                <td class="text-center"><strong>Item Price</strong></td>
                                                                <td class="text-center"><strong>Item Quantity</strong></td>
                                                                <td class="text-right"><strong>Total</strong></td>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($orderDetails as $orderDetail)
                                                                @php($total = 0)
                                                                <tr>
                                                                    <td>{{ $orderDetail->product_name }}</td>
                                                                    <td class="text-center">TK. {{ $orderDetail->product_price }}</td>
                                                                    <td class="text-center">{{ $orderDetail->product_quantity }}</td>
                                                                    <td class="text-right">{{$totalItem =  $orderDetail->product_price*$orderDetail->product_quantity }}</td>
                                                                    @php($total = $total + $totalItem)
                                                                </tr>
                                                            @endforeach

                                                            <tr>
                                                                <td class="highrow"></td>
                                                                <td class="highrow"></td>
                                                                <td class="highrow text-center"><strong>Subtotal</strong></td>
                                                                <td class="highrow text-right">TK. {{ $total }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="emptyrow"></td>
                                                                <td class="emptyrow"></td>
                                                                <td class="emptyrow text-center"><strong>Shipping</strong></td>
                                                                <td class="emptyrow text-right">TK. {{ $dc = 80}}</td>
                                                            </tr>

                                                            <tr>
                                                                <td class="emptyrow"></td>
                                                                <td class="emptyrow"></td>
                                                                <td class="emptyrow text-center"><strong>Vat</strong></td>
                                                                <td class="emptyrow text-right">TK. {{ $vat = ($total*5)/100 }}</td>
                                                            </tr>

                                                            <tr>
                                                                <td class="emptyrow"></td>
                                                                <td class="emptyrow"></td>
                                                                <td class="emptyrow text-center"><strong>Total</strong></td>
                                                                <td class="emptyrow text-right">TK. {{ $grandTotal = $total + $vat + $dc  }}</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



