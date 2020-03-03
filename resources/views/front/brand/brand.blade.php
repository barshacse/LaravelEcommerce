
@extends('front.frontmaster')

@section('title')
    BrandPage

@endsection

@section('body')

    <!--Heading Banner Area Start-->
    <div class="heading-banner-area pt-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-banner">
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="{{ route('/') }}">Home</a><span class="breadcome-separator">></span></li>
                                <li>Shop</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Heading Banner Area End-->
    <!--Product List Grid View Area Start-->
    <div class="product-list-grid-view-area mt-20">
        <div class="container">
            <div class="row">
                <!--Shop Product Area Start-->
                <div class="col-lg-12">
                    <div class="shop-desc-container">
                        <div class="row">
                            <!--Shop Product Image Start-->
                            <div class="col-lg-12">
                                <div class="shop-product-img mb-30 img-full">
                                    <img src="{{asset('/')}}/front/assets/img/offer/24.jpg" alt="">
                                </div>
                            </div>
                            <!--Shop Product Image Start-->
                        </div>
                    </div>
                    <!--Shop Tab Menu Start-->
                    <div class="shop-tab-menu">
                        <div class="row">
                            <!--List & Grid View Menu Start-->
                            <div class="col-lg-5 col-md-5 col-xl-6 col-12">
                                <div class="shop-tab">
                                    <ul class="nav">
                                        <li><a class="active" data-toggle="tab" href="#grid-view"><i class="ion-android-apps"></i></a></li>
                                        <li><a data-toggle="tab" href="#list-view"><i class="ion-navicon-round"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--List & Grid View Menu End-->
                            <!-- View Mode Start-->
                            <div class="col-lg-7 col-md-7 col-xl-6 col-12">
                                <div class="toolbar-form">
                                    <form action="#">
                                        <div class="toolbar-select">
                                            <span>Short by:</span>
                                            <select data-placeholder="Choose a Country..." class="order-by" tabindex="1">
                                                <option value="Default sorting">Default sorting</option>
                                                <option value="United States">United States</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Aland Islands">Aland Islands</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                                <div class="show-result">
                                    <p>Showing 1–16 of 56 results</p>
                                </div>
                            </div>
                            <!-- View Mode End-->
                        </div>
                    </div>
                    <!--Shop Tab Menu End-->
                    <!--Shop Product Area Start-->
                    <div class="shop-product-area">
                        <div class="tab-content">
                            <!--Grid View Start-->
                            <div id="grid-view" class="tab-pane fade show active">
                                <div class="row product-container">
                                    <!--Single Product Start-->
                                    @foreach($products as $product)
                                        <div class="col-lg-3 col-md-3 item-col2">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="{{ route('product-details',['id' =>$product->id]) }}">
                                                        <img class="first-img" src="{{asset($product->product_image)}}" alt="">
                                                        <img class="hover-img" src="{{asset($product->product_image)}}" alt="">
                                                    </a>
                                                    <ul class="product-action">
                                                        <li><a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                        <li><a href="#" data-toggle="modal" title="Quick View" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-content">
                                                    <h2><a href="single-product.html">{{ $product->product_name }}</a></h2>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span class="new-price">TK. {{ $product->product_price }}</span>
                                                        <a class="button add-btn" href="#" data-toggle="tooltip" title="Add to Cart">add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                @endforeach
                                <!--Single Product End-->

                                </div>
                            </div>
                            <!--Grid View End-->
                        </div>
                    </div>
                    <!--Shop Product Area End-->
                    <!--Pagination Start-->
                    <div class="pagination justify-content-center pb-10">
                        <ul class="page-number">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                        </ul>
                    </div>
                    <!--Pagination End-->
                </div>
                <!--Shop Product Area End-->
            </div>
        </div>
    </div>
    <!--Product List Grid View Area End-->

@endsection
