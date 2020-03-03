
@extends('admin.master')

@section('title')
    OrderDetail
@endsection

@section('body')

    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card card-body rounded-0">
                                        <h3>Order Basic Info</h3>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover">
                                                <thead>
                                                <tr>
                                                    <th>Order No</th>
                                                    <th>Order Date</th>
                                                    <th>Order Total</th>
                                                    <th>Order Status</th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td>{{ $order->id}}</td>
                                                        <td>{{ $order->order_date}}</td>
                                                        <td>{{ $order->order_total }}</td>
                                                        <td>{{ $order->order_status }}</td>

                                                    </tr>
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>

                                    <hr/>

                                    <div class="card card-body rounded-0">
                                        <h3>Order Customer Info</h3>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover">
                                                <thead>
                                                <tr>
                                                    <th>Customer Name</th>
                                                    <th>Email Address</th>
                                                    <th>Phone Number</th>
                                                    <th>Address</th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                <tr>
                                                    <td>{{ $customer->first_name.' '.$customer->last_name}}</td>
                                                    <td>{{ $customer->email}}</td>
                                                    <td>{{ $customer->phone }}</td>
                                                    <td>{{ $customer->address }}</td>

                                                </tr>
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>

                                    <hr/>

                                    <div class="card card-body rounded-0">
                                        <h3>Order Shipping Info</h3>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover">
                                                <thead>
                                                <tr>
                                                    <th>Person Name</th>
                                                    <th>Email Address</th>
                                                    <th>Phone Number</th>
                                                    <th>Address</th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                <tr>
                                                    <td>{{ $shipping->first_name.' '.$customer->last_name}}</td>
                                                    <td>{{ $shipping->email}}</td>
                                                    <td>{{ $shipping->phone }}</td>
                                                    <td>{{ $shipping->address }}</td>

                                                </tr>
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>

                                    <hr/>

                                    <div class="card card-body rounded-0">
                                        <h3>Order Product Detail Info</h3>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover">
                                                <thead>
                                                <tr>
                                                    <th>SL NO</th>
                                                    <th>Product Name</th>
                                                    <th>Product Price</th>
                                                    <th>Product Quantity</th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                @php($i = 1)
                                                @foreach($orderDetails as $orderDetail)
                                                    <tr>
                                                        <td>{{ $i++ }}</td>
                                                        <td>{{ $orderDetail->product_name }}</td>
                                                        <td>{{ $orderDetail->product_price }}</td>
                                                        <td>{{ $orderDetail->product_quantity }}</td>

                                                    </tr>
                                                @endforeach
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

@endsection

