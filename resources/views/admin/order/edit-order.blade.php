

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

                                    <form action="{{ route('order-complete') }}" method="POST">
                                        @csrf
                                        <table class="table table-bordered">
                                            <tr>
                                                <th>Order Status</th>
                                                <th>
                                                    <input type="radio" value="pending" name="order_status" {{ $order->order_status == 'pending' ? 'Checked' : '' }}/>Pending
                                                    <input type="radio" value="Complete" name="order_status" {{ $order->order_status == 'Complete' ? 'Checked' : '' }}/>Complete
                                                    <input type="radio" value="Cancel" name="order_status" {{ $order->order_status == 'Cancel' ? 'Checked' : '' }}/>Cancel
                                                    <input type="hidden"  value="{{ $order->id }}" name="id"/>
                                                </th>
                                            </tr>


                                            <tr>
                                                <th>Payment Status</th>
                                                <th>
                                                    <input type="radio" value="Pending" name="payment_status" {{ $payment->payment_status == 'Pending' ? 'Checked' : '' }}/>Pending
                                                    <input type="radio" value="Complete" name="payment_status" {{ $payment->payment_status == 'Complete' ? 'Checked' : '' }}/>Complete
                                                    <input type="radio" value="Cancel" name="payment_status" {{ $payment->payment_status == 'Cancel' ? 'Checked' : '' }}/>Cancel
                                                    <input type="hidden"  value="{{ $order->id }}" name="id"/>
                                                </th>
                                            </tr>


                                            <tr>
                                                <th></th>
                                                <th><input type="submit" value="Complete Order" name="btn"class="btn btn-success"/></th>
                                            </tr>

                                        </table>
                                    </form>



                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

