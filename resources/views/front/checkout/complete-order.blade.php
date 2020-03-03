@extends('front.frontmaster')

@section('title')

   OrderInfo

@endsection

@section('body')

    <!--Checkout Area Start-->
    <div class="checkout-area mt-20">
        <div class="container">
            <div class="row">
                <!--Coupon Area Start-->
                <div class="col-lg-12">
                    <div class="card card-body rounded-0">
                        <h4 class="card-title text-center text-success">{{ Session::get('message') }} </h4>
                    </div>
                </div>
                <!--Coupon Area End-->
                <!--Checkout Area Start-->
                <!--Checkout Area End-->
            </div>
        </div>
    </div>
    <!--Checkout Area End-->

@endsection

