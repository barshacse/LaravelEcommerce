<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Customer;
use App\Order;
use App\OrderDetail;
use App\Payment;
use App\Product;
use App\Shipping;
use Cart;
use Session;
use Mail;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{

    public function index()
    {
        $categories = Category::where('status',1)->get();
        $brands     = Brand::where('status',1)->get();
        $cartCollections = Cart::getContent();

        return view('front.checkout.checkout',[

            'categories'      => $categories,
            'brands'          => $brands,
            'cartCollections' => $cartCollections

        ]);

    }

    public function checkCustomerValidation($request)
    {
        $this->validate($request,[

            'first_name'      => 'required',
            'last_name'       => 'required',
            'email'           => 'required|email',
            'password'        => 'required|min:8|max:15',
            'phone'           => 'required|min:5|max:15',
            'address'         => 'required|min:5',


        ]);

    }

    public function newCustomer(Request $request)
    {
        $this->checkCustomerValidation($request);

        $customer = new Customer();
        $customer->first_name     = $request->first_name;
        $customer->last_name      = $request->last_name;
        $customer->email          = $request->email;
        $customer->password       = bcrypt($request->password);
        $customer->phone          = $request->phone;
        $customer->address        = $request->address;
        $customer->save();

        Session::put('customer_id',$customer->id);
        Session::put('customer_name',$request->first_name. ' '. $request->last_name);

        $data = $customer->toArray();
        Mail::send('front.email.confirmation-mail',$data, function ($message) use($data) {

            $message->to($data['email']);
            $message->subject('Confirmation Mail');

        });

        return redirect('/shipping-info');

    }

    public function shippingInfo()
    {
        $categories      = Category::where('status',1)->get();
        $brands          = Brand::where('status',1)->get();
        $cartCollections = Cart::getContent();
        $customer        = Customer::find(Session::get('customer_id'));

       return view('front.checkout.shipping-info',[

           'categories'      => $categories,
           'brands'          => $brands,
           'cartCollections' => $cartCollections,
           'customer'        => $customer

       ]);
    }

    public function newShipping(Request $request)
    {
        $shipping = new Shipping();
        $shipping->customer_id    = Session::get('customer_id');
        $shipping->first_name     = $request->first_name;
        $shipping->last_name      = $request->last_name;
        $shipping->email          = $request->email;
        $shipping->phone          = $request->phone;
        $shipping->address        = $request->address;
        $shipping->save();

        Session::put('shipping_id',$shipping->id);

        return redirect('/payment-info');

    }

    public function paymentInfo()
    {

        $categories = Category::where('status',1)->get();
        $brands     = Brand::where('status',1)->get();
        $cartCollections = Cart::getContent();

        return view('front.checkout.payment-info',[

            'categories'      => $categories,
            'brands'          => $brands,
            'cartCollections' => $cartCollections

        ]);


    }

    public function newOrder(Request $request)
    {
        $paymentType = $request->payment_type;
        if($paymentType == 'Cash On Delivery')
        {
            $order = new Order();
            $order->customer_id  = Session::get('customer_id');
            $order->shipping_id  = Session::get('shipping_id');
            $order->order_total  = Session::get('order_total');
            $order->order_status = 'pending';
            $order->order_date   = date('m/d/Y');
            $order->save();


            $cartCollections = Cart::getContent();
            foreach ($cartCollections as $cartCollection)
            {

                $orderDetail = new OrderDetail();
                $orderDetail->order_id         = $order->id;
                $orderDetail->product_id       = $cartCollection->id;
                $orderDetail->product_name     = $cartCollection->name;
                $orderDetail->product_price     = $cartCollection->price;
                $orderDetail->product_quantity = $cartCollection->quantity;
                $orderDetail->save();

            }

            $payment = new Payment();
            $payment->order_id       = $order->id;
            $payment->payment_type   = $paymentType;
            $payment->payment_status = 'Pending';
            $payment->payment_date   = date('m/d/Y');
            $payment->save();

            foreach ($cartCollections as $cartCollection)
            {
                $product  = Product::find($cartCollection->id);
                $newStock =  $product->stock_amount - $cartCollection->quantity;
                $product->stock_amount = $newStock;
                $product->save();
            }


            foreach ($cartCollections as $cartCollection)
            {
                Cart::remove($cartCollection->id);
            }

        }
        elseif ($paymentType == 'Paypal')
        {
            return view('front.checkout.paypal');
        }
        elseif ($paymentType == 'SSL_Commerce')
        {
            return view('front.checkout.ssl-commerce');
        }
        elseif ($paymentType == 'Bkash')
        {
            return view('front.checkout.bkash');
        }

        return redirect('/order/complete-order')->with('message','Your Order Post Successfully.Please wait,we will contact');

    }

    public function customerLogin(Request $request)
    {

        $customer = Customer::where('email',$request->email)->first();
        if($customer)
        {
            if (password_verify($request->password,$customer->password)) {
                Session::put('customer_id',$customer->id);
                Session::put('customer_name',$customer->first_name. ' '. $customer->last_name);
                return redirect('/shipping-info');
            } else {
                return redirect()->back()->with('message','Your password in invalid.Pleas use valid password!!');
            }
        }
        else
        {
            return redirect()->back()->with('message','Your email address in invalid.Pleas use valid email!!');
        }


    }

    public function customerLogout()
    {
        Session::forget('customer_id');
        Session::forget('customer_name');
        return redirect('/');
    }

    public function completeOrder()
    {
        $categories = Category::where('status',1)->get();
        $brands     = Brand::where('status',1)->get();
        $cartCollections = Cart::getContent();

        return view('front.checkout.complete-order',[

            'categories'      => $categories,
            'brands'          => $brands,
            'cartCollections' => $cartCollections

        ]);
    }


    public function ajaxEmailCheck($email)
    {

        $customer = Customer::where('email',$email)->first();
        $message  = '';
        if($customer)
        {
            $message = 'Email Address Already Exist';
        }
        else
        {
            $message = 'Email Address Available';
        }
        return json_encode($message);

    }








}
