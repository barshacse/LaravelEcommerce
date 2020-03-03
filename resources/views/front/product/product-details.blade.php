@extends('front.frontmaster')

@section('title')

    ProductPage

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
                                <li><a href="index.html">Shop</a><span class="breadcome-separator">></span></li>
                                <li><a href="index.html">Electronics</a><span class="breadcome-separator">></span></li>
                                <li><a href="index.html">Accessories</a><span class="breadcome-separator">></span></li>
                                <li><a href="index.html">Watches</a><span class="breadcome-separator">></span></li>
                                <li>typesetting animal</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Heading Banner Area End-->
    <!--Single Product Area Start-->
    <section class="single-product-area mt-20">
        <div class="container">
            <!--Single Product Info Start-->
            <div class="row single-product-info mb-50">
                <!--Single Product Image Start-->
                <div class="col-lg-6 col-md-6">
                    <!--Product Tab Content Start-->
                    <div class="single-product-tab-content tab-content">
                        <div id="w1" class="tab-pane fade in active">
                            <div class="easyzoom easyzoom--overlay">
                                <a href="">
                                    <img src="{{asset($product->product_image)}}" alt="">
                                </a>
                            </div>
                        </div>


                    </div>
                    <!--Product Tab Content End-->
                    <!--Single Product Tab Menu Start-->
                    <div class="single-product-tab">
                        <div class="nav single-product-tab-menu owl-carousel">
                            @foreach($subImages as $subImage)
                            <a data-toggle="tab" href="#w2">
                                    <img src="{{asset($subImage->sub_image)}}" alt="">
                            </a>
                            @endforeach
                        </div>
                    </div>
                    <!--Single Product Tab Menu Start-->
                </div>
                <!--Single Product Image End-->
                <!--Single Product Content Start-->
                <div class="col-lg-6 col-md-6">
                    <div class="single-product-content">
                        <!--Product Nav Start-->
                        <div class="product-nav">
                            <a href="#"><i class="fa fa-angle-left"></i></a>
                            <a href="#"><i class="fa fa-angle-right"></i></a>
                        </div>
                        <!--Product Nav End-->
                        <h1 class="product-title">{{ $product->product_name }}</h1>
                        <!--Product Rating Start-->
                        <div class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star on-color"></i>
                            <i class="fa fa-star on-color"></i>
                            <a class="review-link" href="#">(1 customer review)</a>
                        </div>
                        <!--Product Rating End-->
                        <!--Product Price Start-->
                        <div class="single-product-price">
                            <span class="new-price">TK. {{ $product->product_price }}</span>
                        </div>
                        <!--Product Price End-->
                        <!--Product Description Start-->
                        <div class="product-description">
                            <p>{{ $product->short_description }}</p>
                        </div>
                        <!--Product Description End-->
                        <!--Product Quantity Start-->
                        <div class="single-product-quantity">
                            <form action="{{ route('add-to-cart') }}"  method="POST">
                                @csrf
                                <div class="quantity">
                                    <label>Quantity</label>
                                    <input class="input-text" name="quantity" min="1"  value="1" type="number">
                                    <input class="input-text" value="{{ $product->id }}" name="product_id" type="hidden">
                                    <button class="quantity-button" type="submit">Add to cart</button>
                                </div>

{{--                               <input type="submit" name="btn" class=" btn btn-danger" value="Add To Cart"/>--}}

                            </form>
                        </div>
                        <!--Product Quantity End-->
                        <!--Wislist Compare Button Start-->
                        <div class="wislist-compare-btn">
                            <ul>
                                <li><a class="wishlist" href="#">Add To Wishlist</a></li>
                                <li><a class="compare" href="#">Compare</a></li>
                            </ul>
                        </div>
                        <!--Wislist Compare Button End-->
                        <!--Product Meta Start-->
                        <div class="product-meta">
                                <span class="posted-in">
                                    Categories:
                                    <a href="#">Accessories</a>,
                                    <a href="#">Electronics</a>,
                                    <a href="#">Tvs & Audios</a>,
                                    <a href="#">Watches</a>
                                </span>
                        </div>
                        <!--Product Meta End-->
                        <!--Product Sharing Start-->
                        <div class="single-product-sharing">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <!--Product Sharing End-->
                    </div>
                </div>
                <!--Single Product Content End-->
            </div>
            <!--Single Product Info End-->
            <!--Discription Tab Start-->
            <div class="row">
                <div class="discription-tab">
                    <div class="col-lg-12">
                        <div class="discription-review-contnet mb-40">
                            <!--Discription Tab Menu Start-->
                            <div class="discription-tab-menu">
                                <ul class="nav">
                                    <li><a class="active" data-toggle="tab" href="#description">Description</a></li>
                                    <li><a data-toggle="tab" href="#review">Reviews (1)</a></li>
                                </ul>
                            </div>
                            <!--Discription Tab Menu End-->
                            <!--Discription Tab Content Start-->
                            <div class="discription-tab-content tab-content">
                                <div id="description" class="tab-pane fade show active">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="description-content">
                                              <p>{{ $product->long_description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="review" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="review-page-comment">
                                                <div class="review-comment">
                                                    <h2>1 review for typesetting animal</h2>
                                                    <ul>
                                                        <li>
                                                            <div class="product-comment">
                                                                <img src="{{asset('/')}}/front/assets/img/comment-author/2.png" alt="">
                                                                <div class="product-comment-content">
                                                                    <p><strong>admin</strong>
                                                                        -
                                                                        <span>March 7, 2016:</span>
                                                                        <span class="pro-comments-rating">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                                    </p>
                                                                    <div class="description">
                                                                        <p>roadthemes</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="review-form-wrapper">
                                                        <div class="review-form">
                                                            <span class="comment-reply-title">Add a review </span>
                                                            <form action="#">
                                                                <p class="comment-notes">
                                                                    <span id="email-notes">Your email address will not be published.</span>
                                                                    Required fields are marked
                                                                    <span class="required">*</span>
                                                                </p>
                                                                <div class="comment-form-rating">
                                                                    <label>Your rating</label>
                                                                    <div class="rating">
                                                                        <i class="fa fa-star-o"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="input-element">
                                                                    <div class="comment-form-comment">
                                                                        <label>Comment</label>
                                                                        <textarea name="message" cols="40" rows="8"></textarea>
                                                                    </div>
                                                                    <div class="review-comment-form-author">
                                                                        <label>Name </label>
                                                                        <input required="required" type="text">
                                                                    </div>
                                                                    <div class="review-comment-form-email">
                                                                        <label>Email </label>
                                                                        <input required="required" type="text">
                                                                    </div>
                                                                    <div class="comment-submit">
                                                                        <button type="submit" class="form-button">Submit</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Discription Tab Content End-->
                        </div>
                    </div>
                </div>
            </div>
            <!--Discription Tab End-->
        </div>
    </section>
    <!--Single Product Area End-->
    <!--Related Products Area Start-->
    <section class="related-products-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--Section Title1 Start-->
                    <div class="section-title1-border">
                        <div class="section-title1">
                            <h3>Related products</h3>
                        </div>
                    </div>
                    <!--Section Title1 End-->
                </div>
            </div>
            <div class="row">
                <div class="related-products owl-carousel">
                    <!--Single Product Start-->
                    <div class="col-lg-12">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img class="first-img" src="{{asset('/')}}/front/assets/img/product/9.jpg" alt="">
                                    <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/10.jpg" alt="">
                                </a>
                                <span class="sicker">-7%</span>
                                <ul class="product-action">
                                    <li><a href="#"><i class="ion-android-favorite-outline"></i></a></li>
                                    <li><a href="#"><i class="ion-ios-shuffle-strong"></i></a></li>
                                    <li><a href="#" data-toggle="modal" title="Quick View" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <h2><a href="single-product.html">Letraset animal</a></h2>
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
                                    <a class="button add-btn" href="#">add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Single Product End-->
                    <!--Single Product Start-->
                    <div class="col-lg-12">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img class="first-img" src="{{asset('/')}}/front/assets/img/product/21.jpg" alt="">
                                    <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/22.jpg" alt="">
                                </a>
                                <span class="sicker">-7%</span>
                                <ul class="product-action">
                                    <li><a href="#"><i class="ion-android-favorite-outline"></i></a></li>
                                    <li><a href="#"><i class="ion-ios-shuffle-strong"></i></a></li>
                                    <li><a href="#" data-toggle="modal" title="Quick View" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <h2><a href="single-product.html">Natural popularised</a></h2>
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
                                    <a class="button add-btn" href="#">add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Single Product End-->
                    <!--Single Product Start-->
                    <div class="col-lg-12">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img class="first-img" src="{{asset('/')}}/front/assets/img/product/19.jpg" alt="">
                                    <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/20.jpg" alt="">
                                </a>
                                <span class="sicker">-7%</span>
                                <ul class="product-action">
                                    <li><a href="#"><i class="ion-android-favorite-outline"></i></a></li>
                                    <li><a href="#"><i class="ion-ios-shuffle-strong"></i></a></li>
                                    <li><a href="#" data-toggle="modal" title="Quick View" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <h2><a href="single-product.html">Natural simply</a></h2>
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
                                    <a class="button add-btn" href="#">add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Single Product End-->
                    <!--Single Product Start-->
                    <div class="col-lg-12">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img class="first-img" src="{{asset('/')}}/front/assets/img/product/17.jpg" alt="">
                                    <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/18.jpg" alt="">
                                </a>
                                <span class="sicker">-7%</span>
                                <ul class="product-action">
                                    <li><a href="#"><i class="ion-android-favorite-outline"></i></a></li>
                                    <li><a href="#"><i class="ion-ios-shuffle-strong"></i></a></li>
                                    <li><a href="#" data-toggle="modal" title="Quick View" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <h2><a href="single-product.html">Specimen animal</a></h2>
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
                                    <a class="button add-btn" href="#">add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Single Product End-->
                    <!--Single Product Start-->
                    <div class="col-lg-12">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img class="first-img" src="{{asset('/')}}/front/assets/img/product/11.jpg" alt="">
                                    <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/12.jpg" alt="">
                                </a>
                                <span class="sicker">-7%</span>
                                <ul class="product-action">
                                    <li><a href="#"><i class="ion-android-favorite-outline"></i></a></li>
                                    <li><a href="#"><i class="ion-ios-shuffle-strong"></i></a></li>
                                    <li><a href="#" data-toggle="modal" title="Quick View" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <h2><a href="single-product.html">Natural Contrary</a></h2>
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
                                    <a class="button add-btn" href="#">add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Single Product End-->
                    <!--Single Product Start-->
                    <div class="col-lg-12">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img class="first-img" src="{{asset('/')}}/front/assets/img/product/25.jpg" alt="">
                                    <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/26.jpg" alt="">
                                </a>
                                <span class="sicker">-7%</span>
                                <ul class="product-action">
                                    <li><a href="#"><i class="ion-android-favorite-outline"></i></a></li>
                                    <li><a href="#"><i class="ion-ios-shuffle-strong"></i></a></li>
                                    <li><a href="#" data-toggle="modal" title="Quick View" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <h2><a href="single-product.html">Dummy animal</a></h2>
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
                                    <a class="button add-btn" href="#">add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Single Product End-->
                    <!--Single Product Start-->
                    <div class="col-lg-12">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img class="first-img" src="{{asset('/')}}/front/assets/img/product/31.jpg" alt="">
                                    <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/32.jpg" alt="">
                                </a>
                                <span class="sicker">-7%</span>
                                <ul class="product-action">
                                    <li><a href="#"><i class="ion-android-favorite-outline"></i></a></li>
                                    <li><a href="#"><i class="ion-ios-shuffle-strong"></i></a></li>
                                    <li><a href="#" data-toggle="modal" title="Quick View" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
                                </ul>
                            </div>
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
                                    <a class="button add-btn" href="#">add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Single Product End-->
                    <!--Single Product Start-->
                    <div class="col-lg-12">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img class="first-img" src="{{asset('/')}}/front/assets/img/product/27.jpg" alt="">
                                    <img class="hover-img" src="{{asset('/')}}/front/assets/img/product/28.jpg" alt="">
                                </a>
                                <span class="sicker">-7%</span>
                                <ul class="product-action">
                                    <li><a href="#"><i class="ion-android-favorite-outline"></i></a></li>
                                    <li><a href="#"><i class="ion-ios-shuffle-strong"></i></a></li>
                                    <li><a href="#" data-toggle="modal" title="Quick View" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <h2><a href="single-product.html">Natural standard</a></h2>
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
                                    <a class="button add-btn" href="#">add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Single Product End-->
                </div>
            </div>
        </div>
    </section>
    <!--Related Products Area End-->

@endsection
