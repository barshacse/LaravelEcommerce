<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use App\OrderDetail;
use App\Payment;
use App\Shipping;
use Cart;
use PDF;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function manageOrder()
    {
        $orders = Order::orderBy('id','desc')->get();

        return view('admin.order.manage-order',[

            'orders' => $orders

        ]);
    }

    public function orderDetail($id)
    {
        $order           = Order::find($id);
        $orderDetails    = OrderDetail::where('order_id',$id)->get();
        $customer        = Customer::find($order->customer_id);
        $shipping        = Shipping::find($order->shipping_id);

        return view('admin.order.order-detail',[

            'order'        => $order,
            'customer'     => $customer,
            'shipping'     => $shipping,
            'orderDetails' => $orderDetails


        ]);
    }


    public function orderInvoice($id)
    {
        $order           = Order::find($id);
        $orderDetails    = OrderDetail::where('order_id',$id)->get();
        $customer        = Customer::find($order->customer_id);
        $shipping        = Shipping::find($order->shipping_id);
        $payment         = Payment::where('order_id',$id)->first();



        return view('admin.order.invoice',[

            'order'           => $order,
            'customer'        => $customer,
            'shipping'        => $shipping,
            'orderDetails'    => $orderDetails,
            'payment'         => $payment,

        ]);
    }

    public function downloadInvoice($id)
    {
        $order           = Order::find($id);
        $orderDetails    = OrderDetail::where('order_id',$id)->get();
        $customer        = Customer::find($order->customer_id);
        $shipping        = Shipping::find($order->shipping_id);
        $payment         = Payment::where('order_id',$id)->first();


        $pdf = PDF::loadView('admin.order.download-invoice',[


            'order'           => $order,
            'customer'        => $customer,
            'shipping'        => $shipping,
            'orderDetails'    => $orderDetails,
            'payment'         => $payment,

        ]);

        return $pdf->download('000'.$order->id.'.pdf');
    }


    public function editOrder($id)
    {
        $order = Order::find($id);
        $payment         = Payment::where('order_id',$id)->first();

        return view('admin.order.edit-order',[

            'order'   => $order,
            'payment' => $payment

        ]);
    }


    public function orderComplete(Request $request)
    {
        $order = Order::find($request->id);
        $order->order_status = $request->order_status;
        $order->save();

        $payment = Payment::where('order_id',$request->id)->first();
        $payment->payment_status = $request->payment_status;
        $payment->save();

        return redirect('/order/manage-order')->with('message','Order And Payment Status Updated');

    }

    public function deleteOrder($id)
    {
        $order   = Order::find($id);
        $payment = Payment::where('order_id',$id)->first();

        $order->delete();
        $payment->delete();

        return redirect('/order/manage-order')->with('message','Order And Payment Status Deleted Sucessfully!!');
    }






}
