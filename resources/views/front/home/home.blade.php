@extends('front.frontmaster')

@section('title')
    HomePage

@endsection

@section('body')

    <!--Slider Area Start-->
    <section class="slider-area ptb-30 white-bg">
        <div class="container">
            <div class="row">
                <!--Slider Start-->

                <div class="col-lg-9 col-md-9">

                    <div class="slider-wrapper theme-default">

                        <!--Slider Background Image Start-->
                        <div id="slider" class="nivoSlider">
                            @foreach($sliders as $slider)

                            <img src="{{asset($slider->slider_image)}}"  alt="" title="#htmlcaption" />
                            @endforeach
                        </div>
                        <!--Slider Background Image End-->
                        <!--1st Slider Caption Start-->
                        <div id="htmlcaption" class="nivo-html-caption">
                            <div class="slider-caption">
                                <div class="slider-text">
                                    <h5 class="wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">Exclusive Offer -30% Off This Week </h5>
                                    <h1 class="wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">Well Food For <br>Better Health</h1>
                                    <h4 class="wow animated fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.5s">We're Growing Something Good</h4>
                                    <div class="slider-button">
                                        <a href="#" class="wow button animated fadeInLeft" data-text="Shop now" data-wow-duration="2.5s" data-wow-delay="0.5s">shopping Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--1st Slider Caption End-->

                    </div>

                </div>
                <!--Slider End-->
                <!--Offer Image Start-->
                <div class="col-lg-3 col-md-3">
                    <div class="single-offer mb-20">
                        <div class="offer-img img-full">
                            <a href="#"><img src="{{asset('/')}}/front/assets/img/offer/18.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="offer">
                        <div class="offer-img2 img-full">
                            <a href="#"><img src="{{asset('/')}}/front/assets/img/offer/19.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <!--Offer Image End-->
            </div>
        </div>
    </section>
    <!--Slider Area End-->
    <!--Corporate About Start-->
    <section class="corporate-about white-bg pb-30">
        <div class="container">
            <div class="row all-about no-gutters">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-about">
                        <div class="block-wrapper">
                            <div class="about-content">
                                <h5>Free Delivery</h5>
                                <p>Free shipping on all order</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-about">
                        <div class="block-wrapper2">
                            <div class="about-content">
                                <h5>Free Delivery</h5>
                                <p>Free shipping on all order</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-about">
                        <div class="block-wrapper3">
                            <div class="about-content">
                                <h5>Free Delivery</h5>
                                <p>Free shipping on all order</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-about not-border">
                        <div class="block-wrapper4">
                            <div class="about-content">
                                <h5>Free Delivery</h5>
                                <p>Free shipping on all order</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Corporate About End-->
    <!--All Product Area Start-->
    <section class="All Product Area pt-100">
        <div class="container">
            <div class="row">
                <!--Left Side Product Start-->
                <div class="col-lg-9 col-md-9">
                    <!--Orange Juice Product Start-->
                    <div class="orange-juice-product">
                        <div class="row">
                            <div class="col-lg-12">
                                <!--Section Title1 Start-->
                                <div class="section-title1-border">
                                    <div class="section-title1">
                                        <h3>New Product</h3>
                                    </div>
                                </div>
                                <!--Section Title1 End-->
                            </div>
                        </div>

                        <!--Product Tab Start-->
                        <div class="tab-content">
                            <div id="apple" class="tab-pane fade show active">
                                <div class="row">
                                    <div class="all-product mb-85  owl-carousel">
                                        <!--Single Product Start-->
                                        @foreach($products as $product)
                                        <div class="col-lg-12 item-col">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="{{ route('product-details',['id' =>$product->id]) }}">
                                                        <img class="first-img" src=" {{ asset($product->product_image) }} " alt="">
                                                        <img class="hover-img" src=" {{ asset($product->product_image) }} " alt="">
                                                    </a>
                                                    <span class="sicker">-7%</span>
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
                            </div>

                        </div>
                        <!--Product Tab End-->
                        <!--Offer Image Start-->
                        <!--Offer Image End-->
                    </div>
                    <!--Orange Juice Product End-->
                    <!--Vegetable Fresh Product Start-->
                    <div class="vegetable-fresh-product pt-100">
                        <div class="row">
                            <div class="col-lg-12">
                                <!--Section Title1 Start-->
                                <div class="section-title1-border">
                                    <div class="section-title1">
                                        <h3>Vegetable Fresh</h3>
                                    </div>
                                </div>
                                <!--Section Title1 End-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <!--Product Tab Menu Start-->
                                <div class="product-tab-menu-area">
                                    <div class="product-tab">
                                        <ul class="nav">
                                            <li><a class="active" data-toggle="tab" href="#banana">banana</a></li>
                                            <li><a data-toggle="tab" href="#cabbage">cabbage</a></li>
                                            <li><a data-toggle="tab" href="#eggplant">eggplant</a></li>
                                            <li><a data-toggle="tab" href="#salads">salads</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!--Product Tab Menu End-->
                            </div>
                        </div>
                        <!--Product Tab Start-->
                        <div class="tab-content">
                            <div id="banana" class="tab-pane fade show active">
                                <div class="row">
                                    <div class="all-list-product mb-85  owl-carousel">
                                        <div class="group">
                                            <!--Single Product Start-->
                                            <div class="col-lg-12">
                                                <div class="row no-gutters single-product style-2">
                                                    <div class="col-4">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="first-img" src="{{asset('/')}}/front/assets/img/product/49.jpg" alt="">
                                                                <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="product-content">
                                                            <h2><a href="single-product.html">Simply animal</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="product-price">
                                                                <span class="old-price">$74.00</span>
                                                                <span class="new-price">$69.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Single Product End-->
                                            <!--Single Product Start-->
                                            <div class="col-lg-12">
                                                <div class="row no-gutters single-product style-2">
                                                    <div class="col-4">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="first-img" src="{{asset('/')}}/front/assets/img/product/50.jpg" alt="">
                                                                <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="product-content">
                                                            <h2><a href="single-product.html">Simply animal</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="product-price">
                                                                <span class="old-price">$74.00</span>
                                                                <span class="new-price">$69.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Single Product End-->
                                        </div>
                                        <div class="group">
                                            <!--Single Product Start-->
                                            <div class="col-lg-12">
                                                <div class="row no-gutters single-product style-2">
                                                    <div class="col-4">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="first-img" src="{{asset('/')}}/front/assets/img/product/74.jpg" alt="">
                                                                <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="product-content">
                                                            <h2><a href="single-product.html">Simply animal</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="product-price">
                                                                <span class="old-price">$70.00</span>
                                                                <span class="new-price">$60.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Single Product End-->
                                            <!--Single Product Start-->
                                            <div class="col-lg-12">
                                                <div class="row no-gutters single-product style-2">
                                                    <div class="col-4">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="first-img" src="{{asset('/')}}/front/assets/img/product/51.jpg" alt="">
                                                                <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="product-content">
                                                            <h2><a href="single-product.html">Simply animal</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="product-price">
                                                                <span class="old-price">$74.00</span>
                                                                <span class="new-price">$69.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Single Product End-->
                                        </div>
                                        <div class="group">
                                            <!--Single Product Start-->
                                            <div class="col-lg-12">
                                                <div class="row no-gutters single-product style-2">
                                                    <div class="col-4">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="first-img" src="{{asset('/')}}/front/assets/img/product/56.jpg" alt="">
                                                                <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="product-content">
                                                            <h2><a href="single-product.html">Simply animal</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="product-price">
                                                                <span class="old-price">$74.00</span>
                                                                <span class="new-price">$69.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Single Product End-->
                                            <!--Single Product Start-->
                                            <div class="col-lg-12">
                                                <div class="row no-gutters single-product style-2">
                                                    <div class="col-4">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="first-img" src="{{asset('/')}}/front/assets/img/product/58.jpg" alt="">
                                                                <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="product-content">
                                                            <h2><a href="single-product.html">Simply animal</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="product-price">
                                                                <span class="old-price">$85.00</span>
                                                                <span class="new-price">$75.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Single Product End-->
                                        </div>
                                        <div class="group">
                                            <!--Single Product Start-->
                                            <div class="col-lg-12">
                                                <div class="row no-gutters single-product style-2">
                                                    <div class="col-4">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="first-img" src="{{asset('/')}}/front/assets/img/product/63.jpg" alt="">
                                                                <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="product-content">
                                                            <h2><a href="single-product.html">Simply animal</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="product-price">
                                                                <span class="old-price">$100.00</span>
                                                                <span class="new-price">$95.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Single Product End-->
                                            <!--Single Product Start-->
                                            <div class="col-lg-12">
                                                <div class="row no-gutters single-product style-2">
                                                    <div class="col-4">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="first-img" src="{{asset('/')}}/front/assets/img/product/70.jpg" alt="">
                                                                <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="product-content">
                                                            <h2><a href="single-product.html">Simply animal</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="product-price">
                                                                <span class="old-price">$65.00</span>
                                                                <span class="new-price">$55.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Single Product End-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="cabbage" class="tab-pane fade">
                                <div class="row">
                                    <div class="all-list-product mb-85  owl-carousel">
                                        <div class="group">
                                            <!--Single Product Start-->
                                            <div class="col-lg-12">
                                                <div class="row no-gutters single-product style-2">
                                                    <div class="col-4">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="first-img" src="{{asset('/')}}/front/assets/img/product/56.jpg" alt="">
                                                                <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="product-content">
                                                            <h2><a href="single-product.html">Simply animal</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="product-price">
                                                                <span class="old-price">$74.00</span>
                                                                <span class="new-price">$69.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Single Product End-->
                                            <!--Single Product Start-->
                                            <div class="col-lg-12">
                                                <div class="row no-gutters single-product style-2">
                                                    <div class="col-4">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="first-img" src="{{asset('/')}}/front/assets/img/product/58.jpg" alt="">
                                                                <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="product-content">
                                                            <h2><a href="single-product.html">Simply animal</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="product-price">
                                                                <span class="old-price">$85.00</span>
                                                                <span class="new-price">$75.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Single Product End-->
                                        </div>
                                        <div class="group">
                                            <!--Single Product Start-->
                                            <div class="col-lg-12">
                                                <div class="row no-gutters single-product style-2">
                                                    <div class="col-4">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="first-img" src="{{asset('/')}}/front/assets/img/product/63.jpg" alt="">
                                                                <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="product-content">
                                                            <h2><a href="single-product.html">Simply animal</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="product-price">
                                                                <span class="old-price">$100.00</span>
                                                                <span class="new-price">$95.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Single Product End-->
                                            <!--Single Product Start-->
                                            <div class="col-lg-12">
                                                <div class="row no-gutters single-product style-2">
                                                    <div class="col-4">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="first-img" src="{{asset('/')}}/front/assets/img/product/70.jpg" alt="">
                                                                <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="product-content">
                                                            <h2><a href="single-product.html">Simply animal</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="product-price">
                                                                <span class="old-price">$65.00</span>
                                                                <span class="new-price">$55.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Single Product End-->
                                        </div>
                                        <div class="group">
                                            <!--Single Product Start-->
                                            <div class="col-lg-12">
                                                <div class="row no-gutters single-product style-2">
                                                    <div class="col-4">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="first-img" src="{{asset('/')}}/front/assets/img/product/49.jpg" alt="">
                                                                <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="product-content">
                                                            <h2><a href="single-product.html">Simply animal</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="product-price">
                                                                <span class="old-price">$74.00</span>
                                                                <span class="new-price">$69.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Single Product End-->
                                            <!--Single Product Start-->
                                            <div class="col-lg-12">
                                                <div class="row no-gutters single-product style-2">
                                                    <div class="col-4">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="first-img" src="{{asset('/')}}/front/assets/img/product/50.jpg" alt="">
                                                                <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="product-content">
                                                            <h2><a href="single-product.html">Simply animal</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="product-price">
                                                                <span class="old-price">$74.00</span>
                                                                <span class="new-price">$69.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Single Product End-->
                                        </div>
                                        <div class="group">
                                            <!--Single Product Start-->
                                            <div class="col-lg-12">
                                                <div class="row no-gutters single-product style-2">
                                                    <div class="col-4">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="first-img" src="{{asset('/')}}/front/assets/img/product/74.jpg" alt="">
                                                                <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="product-content">
                                                            <h2><a href="single-product.html">Simply animal</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="product-price">
                                                                <span class="old-price">$70.00</span>
                                                                <span class="new-price">$60.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Single Product End-->
                                            <!--Single Product Start-->
                                            <div class="col-lg-12">
                                                <div class="row no-gutters single-product style-2">
                                                    <div class="col-4">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="first-img" src="{{asset('/')}}/front/assets/img/product/51.jpg" alt="">
                                                                <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="product-content">
                                                            <h2><a href="single-product.html">Simply animal</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="product-price">
                                                                <span class="old-price">$74.00</span>
                                                                <span class="new-price">$69.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Single Product End-->
                                        </div>
                                        <div class="group">
                                            <!--Single Product Start-->
                                            <div class="col-lg-12">
                                                <div class="row no-gutters single-product style-2">
                                                    <div class="col-4">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="first-img" src="{{asset('/')}}/front/assets/img/product/74.jpg" alt="">
                                                                <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="product-content">
                                                            <h2><a href="single-product.html">Simply animal</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="product-price">
                                                                <span class="old-price">$50.00</span>
                                                                <span class="old-price">$47.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Single Product End-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="eggplant" class="tab-pane fade">
                                <div class="row">
                                    <div class="all-list-product mb-85  owl-carousel">
                                        <div class="group">
                                            <!--Single Product Start-->
                                            <div class="col-lg-12">
                                                <div class="row no-gutters single-product style-2">
                                                    <div class="col-4">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="first-img" src="{{asset('/')}}/front/assets/img/product/49.jpg" alt="">
                                                                <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="product-content">
                                                            <h2><a href="single-product.html">Simply animal</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="product-price">
                                                                <span class="old-price">$74.00</span>
                                                                <span class="new-price">$69.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Single Product End-->
                                            <!--Single Product Start-->
                                            <div class="col-lg-12">
                                                <div class="row no-gutters single-product style-2">
                                                    <div class="col-4">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="first-img" src="{{asset('/')}}/front/assets/img/product/50.jpg" alt="">
                                                                <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="product-content">
                                                            <h2><a href="single-product.html">Simply animal</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="product-price">
                                                                <span class="old-price">$74.00</span>
                                                                <span class="new-price">$69.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Single Product End-->
                                        </div>
                                        <div class="group">
                                            <!--Single Product Start-->
                                            <div class="col-lg-12">
                                                <div class="row no-gutters single-product style-2">
                                                    <div class="col-4">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="first-img" src="{{asset('/')}}/front/assets/img/product/74.jpg" alt="">
                                                                <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="product-content">
                                                            <h2><a href="single-product.html">Simply animal</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="product-price">
                                                                <span class="old-price">$70.00</span>
                                                                <span class="new-price">$60.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Single Product End-->
                                            <!--Single Product Start-->
                                            <div class="col-lg-12">
                                                <div class="row no-gutters single-product style-2">
                                                    <div class="col-4">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="first-img" src="{{asset('/')}}/front/assets/img/product/51.jpg" alt="">
                                                                <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="product-content">
                                                            <h2><a href="single-product.html">Simply animal</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="product-price">
                                                                <span class="old-price">$74.00</span>
                                                                <span class="new-price">$69.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Single Product End-->
                                        </div>
                                        <div class="group">
                                            <!--Single Product Start-->
                                            <div class="col-lg-12">
                                                <div class="row no-gutters single-product style-2">
                                                    <div class="col-4">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="first-img" src="{{asset('/')}}/front/assets/img/product/56.jpg" alt="">
                                                                <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="product-content">
                                                            <h2><a href="single-product.html">Simply animal</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="product-price">
                                                                <span class="old-price">$74.00</span>
                                                                <span class="new-price">$69.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Single Product End-->
                                            <!--Single Product Start-->
                                            <div class="col-lg-12">
                                                <div class="row no-gutters single-product style-2">
                                                    <div class="col-4">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="first-img" src="{{asset('/')}}/front/assets/img/product/58.jpg" alt="">
                                                                <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="product-content">
                                                            <h2><a href="single-product.html">Simply animal</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="product-price">
                                                                <span class="old-price">$85.00</span>
                                                                <span class="new-price">$75.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Single Product End-->
                                        </div>
                                        <div class="group">
                                            <!--Single Product Start-->
                                            <div class="col-lg-12">
                                                <div class="row no-gutters single-product style-2">
                                                    <div class="col-4">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="first-img" src="{{asset('/')}}/front/assets/img/product/63.jpg" alt="">
                                                                <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="product-content">
                                                            <h2><a href="single-product.html">Simply animal</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="product-price">
                                                                <span class="old-price">$100.00</span>
                                                                <span class="new-price">$95.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Single Product End-->
                                            <!--Single Product Start-->
                                            <div class="col-lg-12">
                                                <div class="row no-gutters single-product style-2">
                                                    <div class="col-4">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="first-img" src="{{asset('/')}}/front/assets/img/product/70.jpg" alt="">
                                                                <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="product-content">
                                                            <h2><a href="single-product.html">Simply animal</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="product-price">
                                                                <span class="old-price">$65.00</span>
                                                                <span class="new-price">$55.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Single Product End-->
                                        </div>
                                        <div class="group">
                                            <!--Single Product Start-->
                                            <div class="col-lg-12">
                                                <div class="row no-gutters single-product style-2">
                                                    <div class="col-4">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="first-img" src="{{asset('/')}}/front/assets/img/product/74.jpg" alt="">
                                                                <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="product-content">
                                                            <h2><a href="single-product.html">Simply animal</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="product-price">
                                                                <span class="old-price">$50.00</span>
                                                                <span class="old-price">$47.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Single Product End-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="salads" class="tab-pane fade">
                                <div class="row">
                                    <div class="all-list-product mb-85  owl-carousel">
                                        <div class="group">
                                            <!--Single Product Start-->
                                            <div class="col-lg-12">
                                                <div class="row no-gutters single-product style-2">
                                                    <div class="col-4">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="first-img" src="{{asset('/')}}/front/assets/img/product/63.jpg" alt="">
                                                                <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="product-content">
                                                            <h2><a href="single-product.html">Simply animal</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="product-price">
                                                                <span class="old-price">$100.00</span>
                                                                <span class="new-price">$95.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Single Product End-->
                                            <!--Single Product Start-->
                                            <div class="col-lg-12">
                                                <div class="row no-gutters single-product style-2">
                                                    <div class="col-4">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="first-img" src="{{asset('/')}}/front/assets/img/product/70.jpg" alt="">
                                                                <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="product-content">
                                                            <h2><a href="single-product.html">Simply animal</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="product-price">
                                                                <span class="old-price">$65.00</span>
                                                                <span class="new-price">$55.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Single Product End-->
                                        </div>
                                        <div class="group">
                                            <!--Single Product Start-->
                                            <div class="col-lg-12">
                                                <div class="row no-gutters single-product style-2">
                                                    <div class="col-4">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="first-img" src="{{asset('/')}}/front/assets/img/product/49.jpg" alt="">
                                                                <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="product-content">
                                                            <h2><a href="single-product.html">Simply animal</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="product-price">
                                                                <span class="old-price">$74.00</span>
                                                                <span class="new-price">$69.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Single Product End-->
                                            <!--Single Product Start-->
                                            <div class="col-lg-12">
                                                <div class="row no-gutters single-product style-2">
                                                    <div class="col-4">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="first-img" src="{{asset('/')}}/front/assets/img/product/50.jpg" alt="">
                                                                <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="product-content">
                                                            <h2><a href="single-product.html">Simply animal</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="product-price">
                                                                <span class="old-price">$74.00</span>
                                                                <span class="new-price">$69.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Single Product End-->
                                        </div>
                                        <div class="group">
                                            <!--Single Product Start-->
                                            <div class="col-lg-12">
                                                <div class="row no-gutters single-product style-2">
                                                    <div class="col-4">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="first-img" src="{{asset('/')}}/front/assets/img/product/56.jpg" alt="">
                                                                <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="product-content">
                                                            <h2><a href="single-product.html">Simply animal</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="product-price">
                                                                <span class="old-price">$74.00</span>
                                                                <span class="new-price">$69.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Single Product End-->
                                            <!--Single Product Start-->
                                            <div class="col-lg-12">
                                                <div class="row no-gutters single-product style-2">
                                                    <div class="col-4">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="first-img" src="{{asset('/')}}/front/assets/img/product/58.jpg" alt="">
                                                                <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="product-content">
                                                            <h2><a href="single-product.html">Simply animal</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="product-price">
                                                                <span class="old-price">$85.00</span>
                                                                <span class="new-price">$75.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Single Product End-->
                                        </div>
                                        <div class="group">
                                            <!--Single Product Start-->
                                            <div class="col-lg-12">
                                                <div class="row no-gutters single-product style-2">
                                                    <div class="col-4">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="first-img" src="{{asset('/')}}/front/assets/img/product/74.jpg" alt="">
                                                                <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="product-content">
                                                            <h2><a href="single-product.html">Simply animal</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="product-price">
                                                                <span class="old-price">$70.00</span>
                                                                <span class="new-price">$60.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Single Product End-->
                                            <!--Single Product Start-->
                                            <div class="col-lg-12">
                                                <div class="row no-gutters single-product style-2">
                                                    <div class="col-4">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="first-img" src="{{asset('/')}}/front/assets/img/product/51.jpg" alt="">
                                                                <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="product-content">
                                                            <h2><a href="single-product.html">Simply animal</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="product-price">
                                                                <span class="old-price">$74.00</span>
                                                                <span class="new-price">$69.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Single Product End-->
                                        </div>
                                        <div class="group">
                                            <!--Single Product Start-->
                                            <div class="col-lg-12">
                                                <div class="row no-gutters single-product style-2">
                                                    <div class="col-4">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="first-img" src="{{asset('/')}}/front/assets/img/product/74.jpg" alt="">
                                                                <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="product-content">
                                                            <h2><a href="single-product.html">Simply animal</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="product-price">
                                                                <span class="old-price">$50.00</span>
                                                                <span class="old-price">$47.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Single Product End-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Product Tab End-->
                        <!--Offer Image Start-->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="single-offer">
                                    <div class="offer-img img-full">
                                        <a href="#"><img src="{{asset('/')}}/front/assets/img/offer/21.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Offer Image End-->
                    </div>
                    <!--Vegetable Fresh Product End-->
                    <!--Food & Bevereages Product Start-->
                    <div class="food-and-beverages pt-100">
                        <div class="row">
                            <div class="col-lg-12">
                                <!--Section Title1 Start-->
                                <div class="section-title1-border">
                                    <div class="section-title1">
                                        <h3>Food & Beverages</h3>
                                    </div>
                                </div>
                                <!--Section Title1 End-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <!--Product Tab Menu Start-->
                                <div class="product-tab-menu-area">
                                    <div class="product-tab">
                                        <ul class="nav">
                                            <li><a class="active" data-toggle="tab" href="#drinks">drinks</a></li>
                                            <li><a data-toggle="tab" href="#hamburger">hamburger</a></li>
                                            <li><a data-toggle="tab" href="#icream">icream</a></li>
                                            <li><a data-toggle="tab" href="#potatochips">potato chips</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!--Product Tab Menu End-->
                            </div>
                        </div>
                        <!--Product Tab Start-->
                        <div class="tab-content">
                            <div id="drinks" class="tab-pane fade show active">
                                <div class="row">
                                    <div class="all-product mb-85  owl-carousel">
                                        <!--Single Product Start-->
                                        <div class="col-lg-12 item-col">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="single-product.html">
                                                        <img class="first-img" src="{{asset('/')}}/front/assets/img/product/62.jpg" alt="">
                                                        <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                    </a>
                                                    <span class="sicker">-7%</span>
                                                    <ul class="product-action">
                                                        <li><a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                        <li><a href="#" data-toggle="modal" title="Quick View" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-content">
                                                    <h2><a href="single-product.html">Cras neque</a></h2>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span class="old-price">$74.00</span>
                                                        <span class="new-price">$69.00</span>
                                                        <a class="button add-btn" href="#" data-toggle="tooltip" title="Add to Cart">add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Single Product End-->
                                        <!--Single Product Start-->
                                        <div class="col-lg-12 item-col">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="single-product.html">
                                                        <img class="first-img" src="{{asset('/')}}/front/assets/img/product/64.jpg" alt="">
                                                        <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                    </a>
                                                    <span class="sicker">-7%</span>
                                                    <ul class="product-action">
                                                        <li><a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                        <li><a href="#" data-toggle="modal" title="Quick View" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-content">
                                                    <h2><a href="single-product.html">Cras neque furniture</a></h2>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span class="old-price">$74.00</span>
                                                        <span class="new-price">$69.00</span>
                                                        <a class="button add-btn" href="#" data-toggle="tooltip" title="Add to Cart">add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Single Product End-->
                                        <!--Single Product Start-->
                                        <div class="col-lg-12 item-col">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="single-product.html">
                                                        <img class="first-img" src="{{asset('/')}}/front/assets/img/product/65.jpg" alt="">
                                                        <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                    </a>
                                                    <span class="sicker">-7%</span>
                                                    <ul class="product-action">
                                                        <li><a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                        <li><a href="#" data-toggle="modal" title="Quick View" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-content">
                                                    <h2><a href="single-product.html">Cras neque metus</a></h2>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span class="old-price">$74.00</span>
                                                        <span class="new-price">$69.00</span>
                                                        <a class="button add-btn" href="#" data-toggle="tooltip" title="Add to Cart">add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Single Product End-->
                                        <!--Single Product Start-->
                                        <div class="col-lg-12 item-col">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="single-product.html">
                                                        <img class="first-img" src="{{asset('/')}}/front/assets/img/product/66.jpg" alt="">
                                                        <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                    </a>
                                                    <span class="sicker">-7%</span>
                                                    <ul class="product-action">
                                                        <li><a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                        <li><a href="#" data-toggle="modal" title="Quick View" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-content">
                                                    <h2><a href="single-product.html">Dignissim furniture</a></h2>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span class="old-price">$74.00</span>
                                                        <span class="new-price">$69.00</span>
                                                        <a class="button add-btn" href="#" data-toggle="tooltip" title="Add to Cart">add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Single Product End-->
                                        <!--Single Product Start-->
                                        <div class="col-lg-12 item-col">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="single-product.html">
                                                        <img class="first-img" src="{{asset('/')}}/front/assets/img/product/52.jpg" alt="">
                                                        <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                    </a>
                                                    <ul class="product-action">
                                                        <li><a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                        <li><a href="#" data-toggle="modal" title="Quick View" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-content">
                                                    <h2><a href="single-product.html">Nullam maximus</a></h2>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span class="old-price">$74.00</span>
                                                        <span class="new-price">$69.00</span>
                                                        <a class="button add-btn" href="#" data-toggle="tooltip" title="Add to Cart">add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Single Product End-->
                                        <!--Single Product Start-->
                                        <div class="col-lg-12 item-col">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="single-product.html">
                                                        <img class="first-img" src="{{asset('/')}}/front/assets/img/product/23.jpg" alt="">
                                                        <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                    </a>
                                                    <span class="sicker">-7%</span>
                                                    <ul class="product-action">
                                                        <li><a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                        <li><a href="#" data-toggle="modal" title="Quick View" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-content">
                                                    <h2><a href="single-product.html">Aliquam furniture</a></h2>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span class="old-price">$74.00</span>
                                                        <span class="new-price">$69.00</span>
                                                        <a class="button add-btn" href="#" data-toggle="tooltip" title="Add to Cart">add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Single Product End-->
                                    </div>
                                </div>
                            </div>
                            <div id="hamburger" class="tab-pane fade">
                                <div class="row">
                                    <div class="all-product mb-85  owl-carousel">
                                        <!--Single Product Start-->
                                        <div class="col-lg-12 item-col">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="single-product.html">
                                                        <img class="first-img" src="{{asset('/')}}/front/assets/img/product/65.jpg" alt="">
                                                        <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                    </a>
                                                    <span class="sicker">-7%</span>
                                                    <ul class="product-action">
                                                        <li><a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                        <li><a href="#" data-toggle="modal" title="Quick View" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-content">
                                                    <h2><a href="single-product.html">Cras neque metus</a></h2>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span class="old-price">$74.00</span>
                                                        <span class="new-price">$69.00</span>
                                                        <a class="button add-btn" href="#" data-toggle="tooltip" title="Add to Cart">add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Single Product End-->
                                        <!--Single Product Start-->
                                        <div class="col-lg-12 item-col">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="single-product.html">
                                                        <img class="first-img" src="{{asset('/')}}/front/assets/img/product/66.jpg" alt="">
                                                        <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                    </a>
                                                    <span class="sicker">-7%</span>
                                                    <ul class="product-action">
                                                        <li><a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                        <li><a href="#" data-toggle="modal" title="Quick View" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-content">
                                                    <h2><a href="single-product.html">Dignissim furniture</a></h2>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span class="old-price">$74.00</span>
                                                        <span class="new-price">$69.00</span>
                                                        <a class="button add-btn" href="#" data-toggle="tooltip" title="Add to Cart">add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Single Product End-->
                                        <!--Single Product Start-->
                                        <div class="col-lg-12 item-col">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="single-product.html">
                                                        <img class="first-img" src="{{asset('/')}}/front/assets/img/product/52.jpg" alt="">
                                                        <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                    </a>
                                                    <ul class="product-action">
                                                        <li><a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                        <li><a href="#" data-toggle="modal" title="Quick View" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-content">
                                                    <h2><a href="single-product.html">Nullam maximus</a></h2>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span class="old-price">$74.00</span>
                                                        <span class="new-price">$69.00</span>
                                                        <a class="button add-btn" href="#" data-toggle="tooltip" title="Add to Cart">add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Single Product End-->
                                        <!--Single Product Start-->
                                        <div class="col-lg-12 item-col">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="single-product.html">
                                                        <img class="first-img" src="{{asset('/')}}/front/assets/img/product/23.jpg" alt="">
                                                        <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                    </a>
                                                    <span class="sicker">-7%</span>
                                                    <ul class="product-action">
                                                        <li><a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                        <li><a href="#" data-toggle="modal" title="Quick View" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-content">
                                                    <h2><a href="single-product.html">Aliquam furniture</a></h2>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span class="old-price">$74.00</span>
                                                        <span class="new-price">$69.00</span>
                                                        <a class="button add-btn" href="#" data-toggle="tooltip" title="Add to Cart">add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Single Product End-->
                                        <!--Single Product Start-->
                                        <div class="col-lg-12 item-col">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="single-product.html">
                                                        <img class="first-img" src="{{asset('/')}}/front/assets/img/product/62.jpg" alt="">
                                                        <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                    </a>
                                                    <span class="sicker">-7%</span>
                                                    <ul class="product-action">
                                                        <li><a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                        <li><a href="#" data-toggle="modal" title="Quick View" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-content">
                                                    <h2><a href="single-product.html">Cras neque</a></h2>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span class="old-price">$74.00</span>
                                                        <span class="new-price">$69.00</span>
                                                        <a class="button add-btn" href="#" data-toggle="tooltip" title="Add to Cart">add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Single Product End-->
                                        <!--Single Product Start-->
                                        <div class="col-lg-12 item-col">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="single-product.html">
                                                        <img class="first-img" src="{{asset('/')}}/front/assets/img/product/64.jpg" alt="">
                                                        <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                    </a>
                                                    <span class="sicker">-7%</span>
                                                    <ul class="product-action">
                                                        <li><a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                        <li><a href="#" data-toggle="modal" title="Quick View" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-content">
                                                    <h2><a href="single-product.html">Cras neque furniture</a></h2>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span class="old-price">$74.00</span>
                                                        <span class="new-price">$69.00</span>
                                                        <a class="button add-btn" href="#" data-toggle="tooltip" title="Add to Cart">add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Single Product End-->
                                    </div>
                                </div>
                            </div>
                            <div id="icream" class="tab-pane fade">
                                <div class="row">
                                    <div class="all-product mb-85  owl-carousel">
                                        <!--Single Product Start-->
                                        <div class="col-lg-12 item-col">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="single-product.html">
                                                        <img class="first-img" src="{{asset('/')}}/front/assets/img/product/66.jpg" alt="">
                                                        <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                    </a>
                                                    <span class="sicker">-7%</span>
                                                    <ul class="product-action">
                                                        <li><a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                        <li><a href="#" data-toggle="modal" title="Quick View" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-content">
                                                    <h2><a href="single-product.html">Dignissim furniture</a></h2>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span class="old-price">$74.00</span>
                                                        <span class="new-price">$69.00</span>
                                                        <a class="button add-btn" href="#" data-toggle="tooltip" title="Add to Cart">add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Single Product End-->
                                        <!--Single Product Start-->
                                        <div class="col-lg-12 item-col">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="single-product.html">
                                                        <img class="first-img" src="{{asset('/')}}/front/assets/img/product/52.jpg" alt="">
                                                        <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                    </a>
                                                    <ul class="product-action">
                                                        <li><a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                        <li><a href="#" data-toggle="modal" title="Quick View" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-content">
                                                    <h2><a href="single-product.html">Nullam maximus</a></h2>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span class="old-price">$74.00</span>
                                                        <span class="new-price">$69.00</span>
                                                        <a class="button add-btn" href="#" data-toggle="tooltip" title="Add to Cart">add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Single Product End-->
                                        <!--Single Product Start-->
                                        <div class="col-lg-12 item-col">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="single-product.html">
                                                        <img class="first-img" src="{{asset('/')}}/front/assets/img/product/23.jpg" alt="">
                                                        <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                    </a>
                                                    <span class="sicker">-7%</span>
                                                    <ul class="product-action">
                                                        <li><a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                        <li><a href="#" data-toggle="modal" title="Quick View" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-content">
                                                    <h2><a href="single-product.html">Aliquam furniture</a></h2>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span class="old-price">$74.00</span>
                                                        <span class="new-price">$69.00</span>
                                                        <a class="button add-btn" href="#" data-toggle="tooltip" title="Add to Cart">add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Single Product End-->
                                        <!--Single Product Start-->
                                        <div class="col-lg-12 item-col">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="single-product.html">
                                                        <img class="first-img" src="{{asset('/')}}/front/assets/img/product/62.jpg" alt="">
                                                        <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                    </a>
                                                    <span class="sicker">-7%</span>
                                                    <ul class="product-action">
                                                        <li><a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                        <li><a href="#" data-toggle="modal" title="Quick View" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-content">
                                                    <h2><a href="single-product.html">Cras neque</a></h2>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span class="old-price">$74.00</span>
                                                        <span class="new-price">$69.00</span>
                                                        <a class="button add-btn" href="#" data-toggle="tooltip" title="Add to Cart">add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Single Product End-->
                                        <!--Single Product Start-->
                                        <div class="col-lg-12 item-col">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="single-product.html">
                                                        <img class="first-img" src="{{asset('/')}}/front/assets/img/product/64.jpg" alt="">
                                                        <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                    </a>
                                                    <span class="sicker">-7%</span>
                                                    <ul class="product-action">
                                                        <li><a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                        <li><a href="#" data-toggle="modal" title="Quick View" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-content">
                                                    <h2><a href="single-product.html">Cras neque furniture</a></h2>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span class="old-price">$74.00</span>
                                                        <span class="new-price">$69.00</span>
                                                        <a class="button add-btn" href="#" data-toggle="tooltip" title="Add to Cart">add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Single Product End-->
                                        <!--Single Product Start-->
                                        <div class="col-lg-12 item-col">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="single-product.html">
                                                        <img class="first-img" src="{{asset('/')}}/front/assets/img/product/65.jpg" alt="">
                                                        <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                    </a>
                                                    <span class="sicker">-7%</span>
                                                    <ul class="product-action">
                                                        <li><a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                        <li><a href="#" data-toggle="modal" title="Quick View" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-content">
                                                    <h2><a href="single-product.html">Cras neque metus</a></h2>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span class="old-price">$74.00</span>
                                                        <span class="new-price">$69.00</span>
                                                        <a class="button add-btn" href="#" data-toggle="tooltip" title="Add to Cart">add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Single Product End-->
                                    </div>
                                </div>
                            </div>
                            <div id="potatochips" class="tab-pane fade">
                                <div class="row">
                                    <div class="all-product mb-85  owl-carousel">
                                        <!--Single Product Start-->
                                        <div class="col-lg-12 item-col">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="single-product.html">
                                                        <img class="first-img" src="{{asset('/')}}/front/assets/img/product/52.jpg" alt="">
                                                        <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                    </a>
                                                    <ul class="product-action">
                                                        <li><a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                        <li><a href="#" data-toggle="modal" title="Quick View" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-content">
                                                    <h2><a href="single-product.html">Nullam maximus</a></h2>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span class="old-price">$74.00</span>
                                                        <span class="new-price">$69.00</span>
                                                        <a class="button add-btn" href="#" data-toggle="tooltip" title="Add to Cart">add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Single Product End-->
                                        <!--Single Product Start-->
                                        <div class="col-lg-12 item-col">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="single-product.html">
                                                        <img class="first-img" src="{{asset('/')}}/front/assets/img/product/23.jpg" alt="">
                                                        <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                    </a>
                                                    <span class="sicker">-7%</span>
                                                    <ul class="product-action">
                                                        <li><a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                        <li><a href="#" data-toggle="modal" title="Quick View" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-content">
                                                    <h2><a href="single-product.html">Aliquam furniture</a></h2>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span class="old-price">$74.00</span>
                                                        <span class="new-price">$69.00</span>
                                                        <a class="button add-btn" href="#" data-toggle="tooltip" title="Add to Cart">add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Single Product End-->
                                        <!--Single Product Start-->
                                        <div class="col-lg-12 item-col">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="single-product.html">
                                                        <img class="first-img" src="{{asset('/')}}/front/assets/img/product/62.jpg" alt="">
                                                        <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                    </a>
                                                    <span class="sicker">-7%</span>
                                                    <ul class="product-action">
                                                        <li><a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                        <li><a href="#" data-toggle="modal" title="Quick View" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-content">
                                                    <h2><a href="single-product.html">Cras neque</a></h2>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span class="old-price">$74.00</span>
                                                        <span class="new-price">$69.00</span>
                                                        <a class="button add-btn" href="#" data-toggle="tooltip" title="Add to Cart">add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Single Product End-->
                                        <!--Single Product Start-->
                                        <div class="col-lg-12 item-col">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="single-product.html">
                                                        <img class="first-img" src="{{asset('/')}}/front/assets/img/product/64.jpg" alt="">
                                                        <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                    </a>
                                                    <span class="sicker">-7%</span>
                                                    <ul class="product-action">
                                                        <li><a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                        <li><a href="#" data-toggle="modal" title="Quick View" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-content">
                                                    <h2><a href="single-product.html">Cras neque furniture</a></h2>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span class="old-price">$74.00</span>
                                                        <span class="new-price">$69.00</span>
                                                        <a class="button add-btn" href="#" data-toggle="tooltip" title="Add to Cart">add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Single Product End-->
                                        <!--Single Product Start-->
                                        <div class="col-lg-12 item-col">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="single-product.html">
                                                        <img class="first-img" src="{{asset('/')}}/front/assets/img/product/65.jpg" alt="">
                                                        <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                    </a>
                                                    <span class="sicker">-7%</span>
                                                    <ul class="product-action">
                                                        <li><a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                        <li><a href="#" data-toggle="modal" title="Quick View" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-content">
                                                    <h2><a href="single-product.html">Cras neque metus</a></h2>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span class="old-price">$74.00</span>
                                                        <span class="new-price">$69.00</span>
                                                        <a class="button add-btn" href="#" data-toggle="tooltip" title="Add to Cart">add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Single Product End-->
                                        <!--Single Product Start-->
                                        <div class="col-lg-12 item-col">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="single-product.html">
                                                        <img class="first-img" src="{{asset('/')}}/front/assets/img/product/66.jpg" alt="">
                                                        <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                    </a>
                                                    <span class="sicker">-7%</span>
                                                    <ul class="product-action">
                                                        <li><a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                        <li><a href="#" data-toggle="modal" title="Quick View" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-content">
                                                    <h2><a href="single-product.html">Dignissim furniture</a></h2>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span class="old-price">$74.00</span>
                                                        <span class="new-price">$69.00</span>
                                                        <a class="button add-btn" href="#" data-toggle="tooltip" title="Add to Cart">add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Single Product End-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Product Tab End-->
                        <!--Offer Image Start-->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="single-offer">
                                    <div class="offer-img img-full">
                                        <a href="#"><img src="{{asset('/')}}/front/assets/img/offer/22.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Offer Image End-->
                    </div>
                    <!--Food & Bevereages Product End-->
                    <!--Bestseller Product Start-->
                    <div class="bestseller-product pt-100 pb-85">
                        <div class="row">
                            <div class="col-lg-12">
                                <!--Section Title1 Start-->
                                <div class="section-title1-border">
                                    <div class="section-title1">
                                        <h3>bestseller</h3>
                                    </div>
                                </div>
                                <!--Section Title1 End-->
                            </div>
                        </div>
                        <!--Best Sell Product Start-->
                        <div class="best-sell-product">
                            <div class="row">
                                <div class="all-list-product owl-carousel">
                                    <div class="group">
                                        <!--Single Product Start-->
                                        <div class="col-lg-12">
                                            <div class="row no-gutters single-product style-2">
                                                <div class="col-4">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="first-img" src="{{asset('/')}}/front/assets/img/product/56.jpg" alt="">
                                                            <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="product-content">
                                                        <h2><a href="single-product.html">Simply animal</a></h2>
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="product-price">
                                                            <span class="old-price">$74.00</span>
                                                            <span class="new-price">$69.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Single Product End-->
                                        <!--Single Product Start-->
                                        <div class="col-lg-12">
                                            <div class="row no-gutters single-product style-2">
                                                <div class="col-4">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="first-img" src="{{asset('/')}}/front/assets/img/product/58.jpg" alt="">
                                                            <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="product-content">
                                                        <h2><a href="single-product.html">Simply animal</a></h2>
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="product-price">
                                                            <span class="old-price">$85.00</span>
                                                            <span class="new-price">$75.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Single Product End-->
                                    </div>
                                    <div class="group">
                                        <!--Single Product Start-->
                                        <div class="col-lg-12">
                                            <div class="row no-gutters single-product style-2">
                                                <div class="col-4">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="first-img" src="{{asset('/')}}/front/assets/img/product/63.jpg" alt="">
                                                            <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="product-content">
                                                        <h2><a href="single-product.html">Simply animal</a></h2>
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="product-price">
                                                            <span class="old-price">$100.00</span>
                                                            <span class="new-price">$95.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Single Product End-->
                                        <!--Single Product Start-->
                                        <div class="col-lg-12">
                                            <div class="row no-gutters single-product style-2">
                                                <div class="col-4">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="first-img" src="{{asset('/')}}/front/assets/img/product/70.jpg" alt="">
                                                            <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="product-content">
                                                        <h2><a href="single-product.html">Simply animal</a></h2>
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="product-price">
                                                            <span class="old-price">$65.00</span>
                                                            <span class="new-price">$55.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Single Product End-->
                                    </div>
                                    <div class="group">
                                        <!--Single Product Start-->
                                        <div class="col-lg-12">
                                            <div class="row no-gutters single-product style-2">
                                                <div class="col-4">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="first-img" src="{{asset('/')}}/front/assets/img/product/49.jpg" alt="">
                                                            <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="product-content">
                                                        <h2><a href="single-product.html">Simply animal</a></h2>
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="product-price">
                                                            <span class="old-price">$74.00</span>
                                                            <span class="new-price">$69.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Single Product End-->
                                        <!--Single Product Start-->
                                        <div class="col-lg-12">
                                            <div class="row no-gutters single-product style-2">
                                                <div class="col-4">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="first-img" src="{{asset('/')}}/front/assets/img/product/50.jpg" alt="">
                                                            <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="product-content">
                                                        <h2><a href="single-product.html">Simply animal</a></h2>
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="product-price">
                                                            <span class="old-price">$74.00</span>
                                                            <span class="new-price">$69.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Single Product End-->
                                    </div>
                                    <div class="group">
                                        <!--Single Product Start-->
                                        <div class="col-lg-12">
                                            <div class="row no-gutters single-product style-2">
                                                <div class="col-4">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="first-img" src="{{asset('/')}}/front/assets/img/product/74.jpg" alt="">
                                                            <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="product-content">
                                                        <h2><a href="single-product.html">Simply animal</a></h2>
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="product-price">
                                                            <span class="old-price">$70.00</span>
                                                            <span class="new-price">$60.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Single Product End-->
                                        <!--Single Product Start-->
                                        <div class="col-lg-12">
                                            <div class="row no-gutters single-product style-2">
                                                <div class="col-4">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="first-img" src="{{asset('/')}}/front/assets/img/product/51.jpg" alt="">
                                                            <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="product-content">
                                                        <h2><a href="single-product.html">Simply animal</a></h2>
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="product-price">
                                                            <span class="old-price">$74.00</span>
                                                            <span class="new-price">$69.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Single Product End-->
                                    </div>
                                    <div class="group">
                                        <!--Single Product Start-->
                                        <div class="col-lg-12">
                                            <div class="row no-gutters single-product style-2">
                                                <div class="col-4">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="first-img" src="{{asset('/')}}/front/assets/img/product/74.jpg" alt="">
                                                            <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="product-content">
                                                        <h2><a href="single-product.html">Simply animal</a></h2>
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="product-price">
                                                            <span class="old-price">$50.00</span>
                                                            <span class="old-price">$47.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Single Product End-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Best Sell Product End-->
                    </div>
                    <!--Bestseller Product End-->
                </div>
                <!--Left Side Product End-->
                <!--Right Side Product Start-->
                <div class="col-lg-3 col-md-3">
                    <!--Hot Deal Product Start-->
                    <div class="right-side-product pb-100">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="hot-deal-product">
                                    <!--Section Title2 Start-->
                                    <div class="section-title2">
                                        <h3>Hot deals</h3>
                                    </div>
                                    <!--Section Title2 End-->
                                    <!--Hot Deal Single Product Start-->
                                    <div class="hot-del-single-product">
                                        <div class="row">
                                            <div class="slide-active">
                                                <!--Single Product Start-->
                                                <div class="col-lg-12">
                                                    <div class="single-product hot-deal">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="first-img" src="{{asset('/')}}/front/assets/img/product/74.jpg" alt="">
                                                                <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                            </a>
                                                            <span class="sicker">-7%</span>
                                                            <ul class="product-action">
                                                                <li><a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                                <li><a href="#" data-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                                <li><a href="#" data-toggle="modal" title="Quick View" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-content">
                                                            <div class="count-down-box">
                                                                <div class="count-box">
                                                                    <div class="pro-countdown" data-countdown="2020/09/04"></div>
                                                                </div>
                                                            </div>
                                                            <h2><a href="single-product.html">Specimen animal</a></h2>
                                                            <div class="pro-rating-price">
                                                                <div class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="product-price">
                                                                    <span class="old-price">$74.00</span>
                                                                    <span class="old-price">$69.00</span>
                                                                    <a class="button add-btn big" href="#" data-toggle="tooltip" title="Add to Cart">add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Single Product End-->
                                                <!--Single Product Start-->
                                                <div class="col-lg-12">
                                                    <div class="single-product hot-deal">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="first-img" src="{{asset('/')}}/front/assets/img/product/64.jpg" alt="">
                                                                <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                            </a>
                                                            <span class="sicker">-7%</span>
                                                            <ul class="product-action">
                                                                <li><a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                                <li><a href="#" data-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                                <li><a href="#" data-toggle="modal" title="Quick View" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-content">
                                                            <div class="count-down-box">
                                                                <div class="count-box">
                                                                    <div class="pro-countdown" data-countdown="2020/09/04"></div>
                                                                </div>
                                                            </div>
                                                            <h2><a href="single-product.html">Natural simply</a></h2>
                                                            <div class="pro-rating-price">
                                                                <div class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="product-price">
                                                                    <span class="old-price">$74.00</span>
                                                                    <span class="old-price">$69.00</span>
                                                                    <a class="button add-btn big" href="#" data-toggle="tooltip" title="Add to Cart">add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Single Product End-->
                                                <!--Single Product Start-->
                                                <div class="col-lg-12">
                                                    <div class="single-product hot-deal">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="first-img" src="{{asset('/')}}/front/assets/img/product/48.jpg" alt="">
                                                                <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                            </a>
                                                            <span class="sicker">-7%</span>
                                                            <ul class="product-action">
                                                                <li><a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                                <li><a href="#" data-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                                <li><a href="#" data-toggle="modal" title="Quick View" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-content">
                                                            <div class="count-down-box">
                                                                <div class="count-box">
                                                                    <div class="pro-countdown" data-countdown="2020/09/04"></div>
                                                                </div>
                                                            </div>
                                                            <h2><a href="single-product.html">Natural popularised</a></h2>
                                                            <div class="pro-rating-price">
                                                                <div class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="product-price">
                                                                    <span class="old-price">$74.00</span>
                                                                    <span class="old-price">$69.00</span>
                                                                    <a class="button add-btn big" href="#" data-toggle="tooltip" title="Add to Cart">add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Single Product End-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--Hot Deal Single Product Start-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Hot Deal Product End-->
                    <!--Offer Image Start-->
                    <div class="offer-img-area pb-100">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="single-offer mb-20">
                                    <div class="offer-img img-full">
                                        <a href="#"><img src="{{asset('/')}}/front/assets/img/offer/25.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="single-offer mb-20">
                                    <div class="offer-img img-full">
                                        <a href="#"><img src="{{asset('/')}}/front/assets/img/offer/26.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="single-offer">
                                    <div class="offer-img img-full">
                                        <a href="#"><img src="{{asset('/')}}/front/assets/img/offer/27.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Offer Image End-->
                    <!--New arrivals Product Start-->
                    <div class="new-arrivals-product mb-100">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="new-arrivals-product-title">
                                    <!--Section Title2 Start-->
                                    <div class="section-title2">
                                        <h3>New arrivals</h3>
                                    </div>
                                    <!--Section Title2 End-->
                                    <!--Hot Deal Single Product Start-->
                                    <div class="hot-del-single-product">
                                        <div class="row slide-active2">
                                            <!--Single Product Start-->
                                            <div class="col-lg-12">
                                                <div class="row no-gutters single-product style-2">
                                                    <div class="col-4">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="first-img" src="{{asset('/')}}/front/assets/img/product/56.jpg" alt="">
                                                                <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="product-content">
                                                            <h2><a href="single-product.html">Aliquam furniture</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="product-price">
                                                                <span class="old-price">$74.00</span>
                                                                <span class="new-price">$69.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Single Product End-->
                                            <!--Single Product Start-->
                                            <div class="col-lg-12">
                                                <div class="row no-gutters single-product style-2">
                                                    <div class="col-4">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="first-img" src="{{asset('/')}}/front/assets/img/product/58.jpg" alt="">
                                                                <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="product-content">
                                                            <h2><a href="single-product.html">Condimentum posuere</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="product-price">
                                                                <span class="old-price">$85.00</span>
                                                                <span class="new-price">$75.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Single Product End-->
                                            <!--Single Product Start-->
                                            <div class="col-lg-12">
                                                <div class="row no-gutters single-product style-2">
                                                    <div class="col-4">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="first-img" src="{{asset('/')}}/front/assets/img/product/62.jpg" alt="">
                                                                <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="product-content">
                                                            <h2><a href="single-product.html">Cras neque</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="product-price">
                                                                <span class="old-price">$85.00</span>
                                                                <span class="new-price">$75.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Single Product End-->
                                            <!--Single Product Start-->
                                            <div class="col-lg-12">
                                                <div class="row no-gutters single-product style-2">
                                                    <div class="col-4">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="first-img" src="{{asset('/')}}/front/assets/img/product/69.jpg" alt="">
                                                                <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="product-content">
                                                            <h2><a href="single-product.html">Cras neque furniture</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="product-price">
                                                                <span class="old-price">$85.00</span>
                                                                <span class="new-price">$75.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Single Product End-->
                                            <!--Single Product Start-->
                                            <div class="col-lg-12">
                                                <div class="row no-gutters single-product style-2">
                                                    <div class="col-4">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="first-img" src="{{asset('/')}}/front/assets/img/product/23.jpg" alt="">
                                                                <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="product-content">
                                                            <h2><a href="single-product.html">Cras neque metus</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="product-price">
                                                                <span class="old-price">$85.00</span>
                                                                <span class="new-price">$75.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Single Product End-->
                                            <!--Single Product Start-->
                                            <div class="col-lg-12">
                                                <div class="row no-gutters single-product style-2">
                                                    <div class="col-4">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="first-img" src="{{asset('/')}}/front/assets/img/product/63.jpg" alt="">
                                                                <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="product-content">
                                                            <h2><a href="single-product.html">Simply animal</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="product-price">
                                                                <span class="old-price">$85.00</span>
                                                                <span class="new-price">$75.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Single Product End-->
                                            <div class="col-lg-12">
                                                <div class="row no-gutters single-product style-2">
                                                    <div class="col-4">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="first-img" src="{{asset('/')}}/front/assets/img/product/69.jpg" alt="">
                                                                <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="product-content">
                                                            <h2><a href="single-product.html">Cras neque furniture</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="product-price">
                                                                <span class="old-price">$85.00</span>
                                                                <span class="new-price">$75.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Single Product End-->
                                            <!--Single Product Start-->
                                            <div class="col-lg-12">
                                                <div class="row no-gutters single-product style-2">
                                                    <div class="col-4">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="first-img" src="{{asset('/')}}/front/assets/img/product/23.jpg" alt="">
                                                                <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="product-content">
                                                            <h2><a href="single-product.html">Cras neque metus</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="product-price">
                                                                <span class="old-price">$85.00</span>
                                                                <span class="new-price">$75.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Single Product End-->
                                            <!--Single Product Start-->
                                            <div class="col-lg-12">
                                                <div class="row no-gutters single-product style-2">
                                                    <div class="col-4">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="first-img" src="{{asset('/')}}/front/assets/img/product/63.jpg" alt="">
                                                                <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="product-content">
                                                            <h2><a href="single-product.html">Simply animal</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="product-price">
                                                                <span class="old-price">$85.00</span>
                                                                <span class="new-price">$75.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Single Product End-->
                                        </div>
                                    </div>
                                    <!--Hot Deal Single Product Start-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--New arrivals Product End-->
                </div>
                <!--Right Side Product End-->
            </div>
        </div>
    </section>
    <!--All Product Area End-->
    <!--Offer Image Area Start-->
    <div class="offer-img-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single-offer">
                        <div class="offer-img img-full">
                            <a href="#"><img src="{{asset('/')}}/front/assets/img/offer/23.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single-offer">
                        <div class="offer-img img-full">
                            <a href="#"><img src="{{asset('/')}}/front/assets/img/offer/24.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Offer Image Area End-->
    <!--Hot Categories Area Start-->
    <Section class="hot-categories-area pt-100 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--Section Title1 Start-->
                    <div class="section-title1-border">
                        <div class="section-title1">
                            <h3>HOT CATEGORIES</h3>
                        </div>
                    </div>
                    <!--Section Title1 End-->
                </div>
            </div>
            <!--Hot Categories Start-->
            <div class="row hot-categories">
                <!--Single Categories Start-->
                <div class="col-lg-3 col-md-6">
                    <div class="single-categories">
                        <div class="categories-img img-full">
                            <a href="#"><img src="{{asset('/')}}/front/assets/img/categories/6.jpg" alt=""></a>
                        </div>
                        <div class="categories-content">
                            <h3><a href="#">Laptops & Tablets</a></h3>
                            <ul class="catgories-list">
                                <li><a href="#">laptop</a></li>
                                <li><a href="#">Macbook</a></li>
                                <li><a href="#">Smartphone</a></li>
                                <li><a href="#">Tablets</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Single Categories End-->
                <!--Single Categories Start-->
                <div class="col-lg-3 col-md-6">
                    <div class="single-categories">
                        <div class="categories-img img-full">
                            <a href="#"><img src="{{asset('/')}}/front/assets/img/categories/7.jpg" alt=""></a>
                        </div>
                        <div class="categories-content">
                            <h3><a href="#">Tvs & Audios</a></h3>
                            <ul class="catgories-list">
                                <li><a href="#">Amply</a></li>
                                <li><a href="#">Smart TV</a></li>
                                <li><a href="#">Speaker</a></li>
                                <li><a href="#">TV</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Single Categories End-->
                <!--Single Categories Start-->
                <div class="col-lg-3 col-md-6">
                    <div class="single-categories">
                        <div class="categories-img img-full">
                            <a href="#"><img src="{{asset('/')}}/front/assets/img/categories/8.jpg" alt=""></a>
                        </div>
                        <div class="categories-content">
                            <h3><a href="#">Accessories</a></h3>
                            <ul class="catgories-list">
                                <li><a href="#">Headphone</a></li>
                                <li><a href="#">Keyboard</a></li>
                                <li><a href="#">Mouse</a></li>
                                <li><a href="#">Watches</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Single Categories End-->
                <!--Single Categories Start-->
                <div class="col-lg-3 col-md-6">
                    <div class="single-categories">
                        <div class="categories-img img-full">
                            <a href="#"><img src="{{asset('/')}}/front/assets/img/categories/9.jpg" alt=""></a>
                        </div>
                        <div class="categories-content">
                            <h3><a href="#">Accessories</a></h3>
                            <ul class="catgories-list">
                                <li><a href="#">Headphone</a></li>
                                <li><a href="#">Keyboard</a></li>
                                <li><a href="#">Mouse</a></li>
                                <li><a href="#">Watches</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Single Categories End-->
            </div>
            <!--Hot Categories End-->
        </div>
    </Section>
    <!--Hot Categories Area End-->
    <!--All Slide Product Area Start-->
    <section class="all-slide-product pt-100 white-bg">
        <div class="container">
            <div class="row">
                <!--Single Slide Product Start-->
                <div class="col-lg-4 col-md-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <!--Section Title2 Start-->
                            <div class="section-title2">
                                <h3>Special Products</h3>
                            </div>
                            <!--Section Title2 End-->
                        </div>
                    </div>
                    <!--Special Single Product Start-->
                    <div class="hot-del-single-product">
                        <div class="row">
                            <div class="slide-active3">
                                <!--Single Product Start-->
                                <div class="col-lg-12">
                                    <div class="row no-gutters single-product style-2">
                                        <div class="col-4">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="first-img" src="{{asset('/')}}/front/assets/img/product/56.jpg" alt="">
                                                    <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="product-content">
                                                <h2><a href="single-product.html">Aliquam furniture</a></h2>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="old-price">$74.00</span>
                                                    <span class="new-price">$69.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Single Product End-->
                                <!--Single Product Start-->
                                <div class="col-lg-12">
                                    <div class="row no-gutters single-product style-2">
                                        <div class="col-4">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="first-img" src="{{asset('/')}}/front/assets/img/product/58.jpg" alt="">
                                                    <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="product-content">
                                                <h2><a href="single-product.html">Condimentum posuere</a></h2>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="old-price">$85.00</span>
                                                    <span class="new-price">$75.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Single Product End-->
                                <!--Single Product Start-->
                                <div class="col-lg-12">
                                    <div class="row no-gutters single-product style-2">
                                        <div class="col-4">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="first-img" src="{{asset('/')}}/front/assets/img/product/62.jpg" alt="">
                                                    <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="product-content">
                                                <h2><a href="single-product.html">Cras neque</a></h2>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="old-price">$85.00</span>
                                                    <span class="new-price">$75.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Single Product End-->
                                <!--Single Product Start-->
                                <div class="col-lg-12">
                                    <div class="row no-gutters single-product style-2">
                                        <div class="col-4">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="first-img" src="{{asset('/')}}/front/assets/img/product/69.jpg" alt="">
                                                    <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="product-content">
                                                <h2><a href="single-product.html">Cras neque furniture</a></h2>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="old-price">$85.00</span>
                                                    <span class="new-price">$75.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Single Product End-->
                                <!--Single Product Start-->
                                <div class="col-lg-12">
                                    <div class="row no-gutters single-product style-2">
                                        <div class="col-4">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="first-img" src="{{asset('/')}}/front/assets/img/product/23.jpg" alt="">
                                                    <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="product-content">
                                                <h2><a href="single-product.html">Cras neque metus</a></h2>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="old-price">$85.00</span>
                                                    <span class="new-price">$75.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Single Product End-->
                                <!--Single Product Start-->
                                <div class="col-lg-12">
                                    <div class="row no-gutters single-product style-2">
                                        <div class="col-4">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="first-img" src="{{asset('/')}}/front/assets/img/product/63.jpg" alt="">
                                                    <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="product-content">
                                                <h2><a href="single-product.html">Simply animal</a></h2>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="old-price">$85.00</span>
                                                    <span class="new-price">$75.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Single Product End-->
                            </div>
                        </div>
                    </div>
                    <!--Special Single Product Start-->
                </div>
                <!--Single Slide Product Start-->
                <!--Single Slide Product Start-->
                <div class="col-lg-4 col-md-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <!--Section Title2 Start-->
                            <div class="section-title2">
                                <h3>New arrivals</h3>
                            </div>
                            <!--Section Title2 End-->
                        </div>
                    </div>
                    <!--New Arrivals Single Product Start-->
                    <div class="hot-del-single-product">
                        <div class="row">
                            <div class="slide-active3">
                                <!--Single Product Start-->
                                <div class="col-lg-12">
                                    <div class="row no-gutters single-product style-2">
                                        <div class="col-4">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="first-img" src="{{asset('/')}}/front/assets/img/product/56.jpg" alt="">
                                                    <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="product-content">
                                                <h2><a href="single-product.html">Aliquam furniture</a></h2>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="old-price">$74.00</span>
                                                    <span class="new-price">$69.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Single Product End-->
                                <!--Single Product Start-->
                                <div class="col-lg-12">
                                    <div class="row no-gutters single-product style-2">
                                        <div class="col-4">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="first-img" src="{{asset('/')}}/front/assets/img/product/58.jpg" alt="">
                                                    <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="product-content">
                                                <h2><a href="single-product.html">Condimentum posuere</a></h2>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="old-price">$85.00</span>
                                                    <span class="new-price">$75.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Single Product End-->
                                <!--Single Product Start-->
                                <div class="col-lg-12">
                                    <div class="row no-gutters single-product style-2">
                                        <div class="col-4">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="first-img" src="{{asset('/')}}/front/assets/img/product/62.jpg" alt="">
                                                    <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="product-content">
                                                <h2><a href="single-product.html">Cras neque</a></h2>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="old-price">$85.00</span>
                                                    <span class="new-price">$75.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Single Product End-->
                                <!--Single Product Start-->
                                <div class="col-lg-12">
                                    <div class="row no-gutters single-product style-2">
                                        <div class="col-4">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="first-img" src="{{asset('/')}}/front/assets/img/product/69.jpg" alt="">
                                                    <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="product-content">
                                                <h2><a href="single-product.html">Cras neque furniture</a></h2>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="old-price">$85.00</span>
                                                    <span class="new-price">$75.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Single Product End-->
                                <!--Single Product Start-->
                                <div class="col-lg-12">
                                    <div class="row no-gutters single-product style-2">
                                        <div class="col-4">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="first-img" src="{{asset('/')}}/front/assets/img/product/23.jpg" alt="">
                                                    <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="product-content">
                                                <h2><a href="single-product.html">Cras neque metus</a></h2>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="old-price">$85.00</span>
                                                    <span class="new-price">$75.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Single Product End-->
                                <!--Single Product Start-->
                                <div class="col-lg-12">
                                    <div class="row no-gutters single-product style-2">
                                        <div class="col-4">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="first-img" src="{{asset('/')}}/front/assets/img/product/63.jpg" alt="">
                                                    <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="product-content">
                                                <h2><a href="single-product.html">Simply animal</a></h2>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="old-price">$85.00</span>
                                                    <span class="new-price">$75.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Single Product End-->
                            </div>
                        </div>
                    </div>
                    <!--New Arrivals Single Product Start-->
                </div>
                <!--Single Slide Product Start-->
                <!--Single Slide Product Start-->
                <div class="col-lg-4 col-md-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <!--Section Title2 Start-->
                            <div class="section-title2">
                                <h3>On Sale</h3>
                            </div>
                            <!--Section Title2 End-->
                        </div>
                    </div>
                    <!--On Sale Single Product Start-->
                    <div class="hot-del-single-product">
                        <div class="row">
                            <div class="slide-active3">
                                <!--Single Product Start-->
                                <div class="col-lg-12">
                                    <div class="row no-gutters single-product style-2">
                                        <div class="col-4">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="first-img" src="{{asset('/')}}/front/assets/img/product/56.jpg" alt="">
                                                    <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="product-content">
                                                <h2><a href="single-product.html">Aliquam furniture</a></h2>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="old-price">$74.00</span>
                                                    <span class="new-price">$69.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Single Product End-->
                                <!--Single Product Start-->
                                <div class="col-lg-12">
                                    <div class="row no-gutters single-product style-2">
                                        <div class="col-4">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="first-img" src="{{asset('/')}}/front/assets/img/product/58.jpg" alt="">
                                                    <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="product-content">
                                                <h2><a href="single-product.html">Condimentum posuere</a></h2>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="old-price">$85.00</span>
                                                    <span class="new-price">$75.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Single Product End-->
                                <!--Single Product Start-->
                                <div class="col-lg-12">
                                    <div class="row no-gutters single-product style-2">
                                        <div class="col-4">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="first-img" src="{{asset('/')}}/front/assets/img/product/62.jpg" alt="">
                                                    <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="product-content">
                                                <h2><a href="single-product.html">Cras neque</a></h2>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="old-price">$85.00</span>
                                                    <span class="new-price">$75.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Single Product End-->
                                <!--Single Product Start-->
                                <div class="col-lg-12">
                                    <div class="row no-gutters single-product style-2">
                                        <div class="col-4">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="first-img" src="{{asset('/')}}/front/assets/img/product/69.jpg" alt="">
                                                    <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="product-content">
                                                <h2><a href="single-product.html">Cras neque furniture</a></h2>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="old-price">$85.00</span>
                                                    <span class="new-price">$75.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Single Product End-->
                                <!--Single Product Start-->
                                <div class="col-lg-12">
                                    <div class="row no-gutters single-product style-2">
                                        <div class="col-4">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="first-img" src="{{asset('/')}}/front/assets/img/product/23.jpg" alt="">
                                                    <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="product-content">
                                                <h2><a href="single-product.html">Cras neque metus</a></h2>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="old-price">$85.00</span>
                                                    <span class="new-price">$75.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Single Product End-->
                                <!--Single Product Start-->
                                <div class="col-lg-12">
                                    <div class="row no-gutters single-product style-2">
                                        <div class="col-4">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="first-img" src="{{asset('/')}}/front/assets/img/product/63.jpg" alt="">
                                                    <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/24.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="product-content">
                                                <h2><a href="single-product.html">Simply animal</a></h2>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="old-price">$85.00</span>
                                                    <span class="new-price">$75.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Single Product End-->
                            </div>
                        </div>
                    </div>
                    <!--On Sale Single Product Start-->
                </div>
                <!--Single Slide Product Start-->
            </div>
        </div>
    </section>
    <!--All Slide Product Area End-->

@endsection
