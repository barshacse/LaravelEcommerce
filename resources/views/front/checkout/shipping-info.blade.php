@extends('front.frontmaster')

@section('title')

    ShippingInfo

@endsection

@section('body')

    <!--Checkout Area Start-->
    <div class="checkout-area mt-20">
        <div class="container">
            <div class="row">
                <!--Coupon Area Start-->
                <div class="col-lg-12">
                    <div class="card card-body rounded-0">
                        <h4 class="card-title text-success">
                            Wellcome {{ Session::get('customer_name') }}. You have to give us product shipping info to complete your valuable order.
                        </h4>
                    </div>
                </div>
                <!--Coupon Area End-->
                <!--Checkout Area Start-->
                <div class="col-md-12">
                    <div class="checkout-form-area">
                        <div class="checkout-title">
                            <h3>Shipping Info</h3>
                        </div>
                        <h2 class="text-center text-success">Please submit order shipping info,if your billing and shipping info are same then just press save shipping button </h2>
                        <br/><br/>
                        <div class="ceckout-form">
                            <form action="{{ route('new-shipping') }}" method="POST">
                            @csrf
                            <!--Billing Fields Start-->
                                <div class="billing-fields">
                                    <div class="form-fild">
                                        <p><label>First name</label></p>
                                        <input type="text" placeholder="" name="first_name" value="{{ $customer->first_name }}">
                                        <span class="text-danger">{{ $errors->has('first_name')?$errors->first('first_name'):'' }}</span>
                                    </div>
                                    <div class="form-fild">
                                        <p><label>Last name</label></p>
                                        <input type="text" placeholder="" name="last_name" value="{{ $customer->last_name }}">
                                        <span class="text-danger">{{ $errors->has('last_name')?$errors->first('last_name'):'' }}</span>

                                    </div>
                                    <div class="form-fild">
                                        <p><label>Email</label></p>
                                        <input type="email" placeholder="" name="email" value="{{ $customer->email }}">
                                        <span class="text-danger">{{ $errors->has('email')?$errors->first('email'):'' }}</span>
                                    </div>
                                    <div class="form-fild">
                                        <p><label>Phone</label></p>
                                        <input type="text" placeholder="" name="phone" value="{{ $customer->phone }}">
                                        <span class="text-danger">{{ $errors->has('phone')?$errors->first('phone'):'' }}</span>
                                    </div>

                                    <div class="form-group">
                                        <p><label>Address</label></p>
                                        <textarea name="address"  placeholder="" rows="2" cols="5">{{ $customer->address }}</textarea>
                                        <span class="text-danger">{{ $errors->has('address')?$errors->first('address'):'' }}</span>
                                    </div>

                                    <div class="form-group">
                                        <p><label></label></p>
                                        <input type="submit" name="btn" value="Save Shipping Info" class="btn btn-success"/>
                                    </div>

                                </div>
                            </form>

                            <!--Billing Fields End-->
                            <!--Account Fields Start-->
                            <div class="account-fields">
                                <div class="create-acc">
                                    <input id="cbox" type="checkbox">
                                    <label>Create an account?</label>
                                </div>
                                <div id="cbox_info" class="create-account">
                                    <div class="form-fild billing_password">
                                        <p><label><span class="create-pass">Create account password</span><span class="required"></span> </label></p>
                                        <input name="password" placeholder="Password" type="password">
                                    </div>
                                </div>
                            </div>
                            <!--Account Fields End-->
                            <!--Shipping Fields Start-->
                            <div class="shipping-fields">
                                <div class="ship-fild">
                                    <input id="ship-box" type="checkbox">
                                    <label>Ship to a different address?</label>
                                </div>
                                <div id="ship-box-info" class="ship-box">
                                    <div class="ship-box-billing-fild">
                                        <div class="form-fild first-name">
                                            <p><label>First name<span class="required">*</span></label></p>
                                            <input type="text" placeholder="" name="billing_first_name" value="">
                                        </div>
                                        <div class="form-fild last-name">
                                            <p><label>First name<span class="required">*</span></label></p>
                                            <input type="text" placeholder="" name="billing_last_name" value="">
                                        </div>
                                        <div class="form-fild company-name">
                                            <p><label>Company Name</label></p>
                                            <input type="text" placeholder="" name="billing_company_name" value="">
                                        </div>
                                        <div class="form-fild country">
                                            <p><label>Country<span class="required">*</span></label></p>
                                            <select name="billing_country" id="billing_country2" data-placeholder="Choose a Country..." class="chosen-select" tabindex="-1">
                                                <option value="Select a country…">Select a country…</option>
                                                <option value="United States">United States</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Aland Islands">Aland Islands</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                            </select>
                                        </div>
                                        <div class="form-fild billing_address_1">
                                            <p><label>Street address<span class="required">*</span></label></p>
                                            <input type="text" placeholder="House number and street name" name="billing_company_name" value="">
                                        </div>
                                        <div class="form-fild billing_address_2">
                                            <input type="text" placeholder="Apartment, suite, unit etc. (optional)" name="billing_company_name" value="">
                                        </div>
                                        <div class="form-fild billing_postcode">
                                            <p><label>Postcode / ZIP<span class="required">*</span></label></p>
                                            <input type="text" placeholder="" name="billing_company_name" value="">
                                        </div>
                                        <div class="form-fild billing_city">
                                            <p><label>Town / City<span class="required">*</span></label></p>
                                            <input type="text" placeholder="" name="billing_company_name" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Shipping Fields End-->
                            <!--Additional Fields Start-->
                            <div class="additional-fields">
                                <div class="order-notes">
                                    <div class="form-fild order-name">
                                        <p><label>Order notes</label></p>
                                        <textarea name="order_comments" id="checkout-mess" placeholder="Notes about your order, e.g. special notes for delivery." rows="2" cols="5"></textarea>
                                    </div>
                                </div>
                            </div>
                            <!--Additional Fields End-->
                            <!--Your Order Fields Start-->
                            <div class="your-order-fields mt-30">
                                <div class="your-order-title">
                                    <h3>Your order</h3>
                                </div>
                                <div class="your-order-table table-responsive">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th class="product-name">SL NO</th>
                                            <th class="product-name">Price</th>
                                            <th class="product-name">Image</th>
                                            <th class="product-name">Sub Total</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php($i = 1)
                                        @php($total =0 )
                                        @foreach($cartCollections as $cartCollection)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td class="product-name"><strong class="product-quantity"></strong>TK. {{ $cartCollection->price }}</td>
                                                <td><img src="{{asset($cartCollection->attributes->image)}}" alt="" width="50px" height="50px"/></td>
                                                <td>{{$itemTotal= $cartCollection->price*$cartCollection->quantity}}</td>
                                            </tr>
                                            @php($total = $total + $itemTotal)
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr class="cart-subtotal">
                                            <th>Subtotal</th>
                                            <td><span class="amount">TK. {{ $total }}</span></td>
                                        </tr>
                                        <tr class="shipping">
                                            <th>Shipping</th>
                                            <td data-title="shipping"><p>TK. {{ $dc =100 }}</p></td>
                                        </tr>
                                        <tr class="shipping">
                                            <th>Vat</th>
                                            <td data-title="shipping"><p>TK. {{ $vat = ($total*5)/100 }}</p></td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Total</th>
                                            <td><strong><span class="total-amount">{{ $grandTotal = $total + $dc + $vat }}</span></strong></td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <!--Your Order Fields End-->
                            <div class="checkout-payment">
                                <ul>
                                    <li class="payment_method_cheque-li">
                                        <input id="payment_method_cheque" class="input-radio" name="payment_method" checked="checked" value="bacs" type="radio">
                                        <label for="payment_method_cheque">Check payments</label>
                                        <div class="pay-box payment_method_cheque">
                                            <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                        </div>
                                    </li>
                                    <li class="payment_method_paypal-li">
                                        <input id="payment_method_paypal" class="input-rado" name="payment_method" value="paypal" data-order_button_text="Proceed to PayPal" type="radio">
                                        <label for="payment_method_paypal">	PayPal <a href="#"><img src="img/payment/payment2.png" alt=""/>What is PayPal?</a></label>
                                        <div class="pay-box payment_method_paypal">
                                            <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                        </div>
                                    </li>
                                </ul>
                                <button class="order-btn" type="submit">Place order</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Checkout Area End-->
            </div>
        </div>
    </div>
    <!--Checkout Area End-->

@endsection
