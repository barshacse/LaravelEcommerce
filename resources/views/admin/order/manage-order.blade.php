
@extends('admin.master')

@section('title')
    ManageOrder
@endsection

@section('body')

    <style>
        .font-size
        {
            font-max-size: 5px;
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
                                    <div class="card card-body rounded-0">
                                        <h3 class="text-center text-success"> {{ Session::get('message') }}</h3>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover">
                                                <thead>
                                                <tr>
                                                    <th class="text-center">Action</th>
                                                    <th>SL NO</th>
                                                    <th>Order Date</th>
                                                    <th>Customer Name</th>
                                                    <th>Phone Number</th>
                                                    <th>Address</th>
                                                    <th>Order Total</th>
                                                    <th>Order Status</th>
                                                    <th>Payment Type</th>
                                                    <th>Payment Status</th>

                                                </tr>
                                                </thead>

                                                <tbody>
                                                @php($i = 1)
                                                @foreach($orders as $order)
                                                    <?php
                                                       $customer = \App\Customer::find($order->customer_id);
                                                       $shipping = \App\Shipping::find($order->shipping_id);
                                                       $payment  = \App\Payment::where('order_id',$order->id)->first();


                                                    ?>
                                                    <tr>
                                                        <td>
                                                            <ul class="nav pcoded-inner-navbar">
                                                                <li data-username="Vertical Horizontal Box Layout RTL fixed static Collapse menu color icon dark" class="nav-item pcoded-hasmenu">
                                                                    <a title="Order Details" href="{{ route('order-detail',['id' => $order->id]) }}" class="nav-link "><i class="fas fa-list-alt"></i></a>
                                                                    <a title="Order Invoice" href="{{ route('order-invoice',['id' => $order->id]) }}" class="nav-link"><i class="fas fa-file-invoice"></i></a>
                                                                    <a title="Download Invoice" href="{{ route('download-invoice',['id' => $order->id]) }}" class="nav-link"><i class="fas fa-file-download"></i></a>
                                                                    <a title="Edit Order" href="{{ route('edit-order',['id' => $order->id]) }}" class="nav-link"><i class="far fa-edit"></i></a>
                                                                    <a title="Delete Order" href="{{ route('delete-order',['id' => $order->id]) }}" class="nav-link"><i class="fas fa-trash-alt"></i></a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td>{{ $i++ }}</td>
                                                        <td>{{ $order->order_date}}</td>
                                                        <td>{{ $customer->first_name.' '.$customer->last_name}}</td>
                                                        <td>{{ $customer->phone }}</td>
                                                        <td>{{ $shipping->address }}</td>
                                                        <td>{{ $order->order_total }}</td>
                                                        <td>{{ $order->order_status }}</td>
                                                        <td>{{ $payment? $payment->payment_type: '' }}</td>
                                                        <td>{{ $payment? $payment->payment_status: ''  }}</td>


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
