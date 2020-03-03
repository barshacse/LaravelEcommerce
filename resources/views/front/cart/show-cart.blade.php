@extends('front.frontmaster')

@section('title')

    ShowCart

@endsection

@section('body')

    <section class="heading-banner-area pt-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-banner">
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="{{ route('/') }}">Home</a><span class="breadcome-separator">></span></li>
                                <li>Shopping Cart</li>
                            </ul>
                        </div>
                        <div class="heading-banner-title">
                            <h1>Shopping Cart</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--Shopping Cart Area Start-->
    <div class="shopping-cart-area mt-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <form class="shop-form" action="#">
                        <div class="wishlist-table table-responsive">
                            <h1 class="text-center text-success">{{ Session::get('message') }}</h1>
                            <table>
                                <thead>
                                <tr>
                                    <th class="product-cart-img">
                                        <span class="nobr">SL NO</span>
                                    </th>
                                    <th class="product-cart-img">
                                        <span class="nobr">Image</span>
                                      </th>
                                    <th class="product-name">
                                        <span class="nobr">Product Name</span>
                                    </th>
                                    <th class="product-quantity">
                                        <span class="nobr">quantity</span>
                                    </th>
                                    <th class="product-price">
                                        <span class="nobr">Price </span>
                                    </th>
                                    <th class="product-total-price">
                                        <span class="nobr"> Sub Total</span>
                                    </th>
                                    <th class="product-remove">Remove</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php($i = 1)
                                @php($total = 0)
                                @foreach($cartCollections as $cartCollection)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td class="product-cart-img">
                                        <a href="#"><img src="{{ asset($cartCollection->attributes->image) }}" alt="" width="50px" height="50px"></a>
                                    </td>
                                    <td class="product-name">{{ $cartCollection->name }}</td>
                                    <td>
                                        <form action="{{ route('cart-update') }}" method="POST">
                                            @csrf
                                            <input type="number" name="qty"  min="1" value="{{ $cartCollection->quantity }}"/>
                                            <input type="hidden" name="id"  value="{{ $cartCollection->id }}"/>
                                            <button type="submit" class="quantity-button">Quantity</button>
                                        </form>
                                    </td>
                                    <td class="product-price">
                                         <ins>TK. {{ $cartCollection->price }}</ins></span>
                                    </td>
                                    <td class="product-total-price">
                                        <span> {{$totalItem =  $cartCollection->price*$cartCollection->quantity }}</span>
                                    </td>
                                    <td class="product-remove">
                                        <a href="{{ route('delete-cart',['id' =>$cartCollection->id]) }}" class="text-danger">×</a>
                                    </td>
                                    @php($total = $total + $totalItem)
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <form action="#">
                        <div class="cart-collaterals">
                            <div class="cart-cuppon">
                                <div class="coupon">
                                    <input name="coupon_code" class="input-copun" value="" placeholder="Coupon code" type="text">
                                    <button type="submit" class="wishlist-btn shopping-btn">Apply coupon</button>
                                </div>
                                <button class="update-btn" type="submit">Update cart</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="shopping-cart-total">
                        <h2>Cart totals</h2>
                        <div class="shop-table table-responsive">
                            <table>
                                <tbody>
                                <tr class="cart-subtotal">
                                    <td data-title="Subtotal"><span>TK. {{ $total }}</span></td>
                                </tr>
                                <tr class="shipping">
                                    <td data-title="Vat">Vat (5%) <Span>TK. {{ $vat = ($total*5/100) }}</Span> <a href="#"></a></td>
                                </tr>
                                <tr class="shipping">
                                    <td data-title="Shipping">Flat Rate: <Span>TK. {{ $dc = 80 }}</Span> <a href="#"></a></td>
                                </tr>
                                <tr class="order-total">
                                    <td data-title="GrandTotal"><span><strong>TK. {{ $grandTotal = $total + $vat + $dc  }}</strong></span></td>
                                    <?php
                                        Session::put('order_total',$grandTotal);
                                    ?>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="proceed-to-checkout">
                            <a class="checkout-button " href="{{ route('checkout') }}">Proceed to checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Shopping Cart Area End-->

@endsection
