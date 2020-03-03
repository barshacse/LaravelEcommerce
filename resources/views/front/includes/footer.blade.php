<!--Brand Area Start-->
<div class="brand-area ptb-30 white-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="brand-active owl-carousel">
                    <!--Single Brand Start-->
                    <div class="single-brand img-full">
                        <a href="#"><img src="{{asset('/')}}/front/assets/img/brand/1.png" alt=""></a>
                    </div>
                    <!--Single Brand End-->
                    <!--Single Brand Start-->
                    <div class="single-brand img-full">
                        <a href="#"><img src="{{asset('/')}}/front/assets/img/brand/2.png" alt=""></a>
                    </div>
                    <!--Single Brand End-->
                    <!--Single Brand Start-->
                    <div class="single-brand img-full">
                        <a href="#"><img src="{{asset('/')}}/front/assets/img/brand/3.png" alt=""></a>
                    </div>
                    <!--Single Brand End-->
                    <!--Single Brand Start-->
                    <div class="single-brand img-full">
                        <a href="#"><img src="{{asset('/')}}/front/assets/img/brand/4.png" alt=""></a>
                    </div>
                    <!--Single Brand End-->
                    <!--Single Brand Start-->
                    <div class="single-brand img-full">
                        <a href="#"><img src="{{asset('/')}}/front/assets/img/brand/5.png" alt=""></a>
                    </div>
                    <!--Single Brand End-->
                </div>
            </div>
        </div>
    </div>
</div>
<!--Brand Area End-->
<!--Footer Area Start-->
<footer>
    <div class="footer-container bg-3">
        <!--Footer Top Area Start-->
        <div class="footer-top-area ptb-50">
            <div class="container">
                <div class="row">
                    <!--Single Footer Start-->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer">
                            <!--Footer Logo Start-->
                            <div class="footer-logo">
                                <a href="{{ route('/') }}"><img src="{{asset('/')}}/front/assets/img/logo/logo3.png" alt=""></a>
                            </div>
                            <!--Footer Logo End-->
                            <!--Footer Content Start-->
                            <div class="footer-content">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majorited have suffered alteration.</p>
                                <div class="contact">
                                    <p><label>Address:</label>123 Main Street, Anytown, CA 12345 - USA.</p>
                                    <p><label>Phone:</label><a href="tel:+800123456789"></a>(+800) 123 456 789)</p>
                                    <p><label>Email:</label><a href="mailto:Support@demo.com">Support@demo.com</a></p>
                                </div>
                            </div>
                            <!--Footer Content End-->
                        </div>
                    </div>
                    <!--Single Footer End-->
                    <!--Single Footer Start-->
                    <div class="col-lg-2 col-md-6">
                        <div class="single-footer mt-30">
                            <div class="footer-title">
                                <h3>Brands</h3>
                            </div>
                            @foreach($brands as $brand)
                            <ul class="footer-info">
                                <li><a href="{{ route('brand-product',['id' => $brand->id]) }}">{{ $brand->brand_name }}</a></li>
                            </ul>
                            @endforeach
                        </div>
                    </div>
                    <!--Single Footer End-->
                    <!--Single Footer Start-->
                    <div class="col-lg-2 col-md-6">
                        <div class="single-footer mt-30">
                            <div class="footer-title">
                                <h3>My Account</h3>
                            </div>
                            <ul class="footer-info">
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Shopping cart</a></li>
                                <li><a href="#">Checkout</a></li>
                                <li><a href="#">Portfolio</a></li>
                                <li><a href="#">Frequently Questions</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--Single Footer End-->
                    <!--Single Footer Start-->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer mt-30">
                            <div class="footer-title">
                                <h3>follow us</h3>
                            </div>
                            <ul class="socil-icon mb-40">
                                <li><a href="#" data-toggle="tooltip" title="Twitter"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" title="Facebook"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" title="Google Plus"><i class="ion-social-googleplus"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" title="Youtube"><i class="ion-social-youtube"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" title="Pinterest"><i class="ion-social-pinterest"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" title="Rss"><i class="ion-social-rss"></i></a></li>
                            </ul>
                            <div class="footer-title">
                                <h3>Download Apps</h3>
                            </div>
                            <div class="footer-content">
                                <a href="#"><img src="{{asset('/')}}/front/assets/img/apps/1.jpg" alt=""></a>
                                <a href="#"><img src="{{asset('/')}}/front/assets/img/apps/2.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!--Single Footer End-->
                </div>
            </div>
        </div>
        <!--Footer Top Area End-->
        <!--Footer Middel Area Start-->
        <div class="footer-middel-area">
            <div class="container">
                <!--News Latter Area Start-->
                <div class="news-latter-area">
                    <div class="row">
                        <!--News Latter Content Start-->
                        <div class="col-lg-6 text-center">
                            <div class="news-lettar-content">
                                <div class="icon">
                                    <img src="{{asset('/')}}/front/assets/img/icon/10.png" alt="">
                                </div>
                                <p><label>Sign Up For Newsletters</label><br>Get E-mail updates about our latest shop and special offers.</p>
                            </div>
                        </div>
                        <!--News Latter Content Start-->
                        <!--News Latter Subscribe Box Start-->
                        <div class="col-lg-6">
                            <!-- Newsletter Form -->
                            <div class="news-latter-subscribe-box text-right">
                                <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="popup-subscribe-form validate" target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll">
                                        <label class="d-none hidden">Subscribe to our mailing list</label>
                                        <input class="style2" type="email" name="email" placeholder="Enter your email" required="">
                                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                        <button type="submit" name="subscribe" id="mc-embedded-subscribe"><i class="ion-ios-paperplane"></i></button>
                                    </div>
                                </form>
                            </div>
                            <!-- Newsletter Form -->
                        </div>
                        <!--News Latter Subscribe Box End-->
                    </div>
                </div>
                <!--News Latter Area End-->
                <!--Wdget Area Start-->
                <div class="wdget-area ptb-40">
                    <div class="row">
                        <div class="col-lg-6">
                            <!--Wdget Menu Start-->
                            <div class="wdget-menu">
                                <div class="wdget-title">
                                    <h4>Camera:</h4>
                                </div>
                                <ul class="wdget-nav">
                                    <li><a href="#">Brand1</a></li>
                                    <li><a href="#">Brand2</a></li>
                                    <li><a href="#">Brand3</a></li>
                                    <li><a href="#">Brand4</a></li>
                                    <li><a href="#">Brand4</a></li>
                                </ul>
                            </div>
                            <!--Wdget Menu End-->
                            <!--Wdget Menu Start-->
                            <div class="wdget-menu">
                                <div class="wdget-title">
                                    <h4>Laptop:</h4>
                                </div>
                                <ul class="wdget-nav">
                                    <li><a href="#">Brand1</a></li>
                                    <li><a href="#">Brand2</a></li>
                                    <li><a href="#">Brand3</a></li>
                                    <li><a href="#">Brand4</a></li>
                                    <li><a href="#">Brand5</a></li>
                                    <li><a href="#">Brand6</a></li>
                                    <li><a href="#">Brand7</a></li>
                                </ul>
                            </div>
                            <!--Wdget Menu End-->
                            <!--Wdget Menu Start-->
                            <div class="wdget-menu">
                                <div class="wdget-title">
                                    <h4>Smartphone:</h4>
                                </div>
                                <ul class="wdget-nav">
                                    <li><a href="#">Brand1</a></li>
                                    <li><a href="#">Brand2</a></li>
                                    <li><a href="#">Brand3</a></li>
                                    <li><a href="#">Brand4</a></li>
                                    <li><a href="#">Brand5</a></li>
                                    <li><a href="#">Brand6</a></li>
                                    <li><a href="#">Brand7</a></li>
                                    <li><a href="#">Brand8</a></li>
                                    <li><a href="#">Brand9</a></li>
                                    <li><a href="#">Brand10</a></li>
                                    <li><a href="#">Brand11</a></li>
                                </ul>
                            </div>
                            <!--Wdget Menu End-->
                        </div>
                        <div class="col-lg-6">
                            <!--Wdget Menu Start-->
                            <div class="wdget-menu">
                                <div class="wdget-title">
                                    <h4>Televisions:</h4>
                                </div>
                                <ul class="wdget-nav">
                                    <li><a href="#">Brand1</a></li>
                                    <li><a href="#">Brand2</a></li>
                                    <li><a href="#">Brand3</a></li>
                                    <li><a href="#">Brand4</a></li>
                                    <li><a href="#">Brand5</a></li>
                                    <li><a href="#">Brand6</a></li>
                                    <li><a href="#">Bravia</a></li>
                                </ul>
                            </div>
                            <!--Wdget Menu End-->
                            <!--Wdget Menu Start-->
                            <div class="wdget-menu">
                                <div class="wdget-title">
                                    <h4>Watches:</h4>
                                </div>
                                <ul class="wdget-nav">
                                    <li><a href="#">Brand1</a></li>
                                    <li><a href="shop.html">Brand7</a></li>
                                    <li><a href="#">Brand3</a></li>
                                    <li><a href="#">Brand4</a></li>
                                    <li><a href="#">Brand5</a></li>
                                    <li><a href="#">Brand6</a></li>
                                    <li><a href="#">Brand7</a></li>
                                    <li><a href="#">Brand8</a></li>
                                    <li><a href="#">Brand9</a></li>
                                </ul>
                            </div>
                            <!--Wdget Menu End-->
                            <!--Wdget Menu Start-->
                            <div class="wdget-menu">
                                <div class="wdget-title">
                                    <h4>Furniture:</h4>
                                </div>
                                <ul class="wdget-nav">
                                    <li><a href="#">Brand1</a></li>
                                    <li><a href="#">Livingroom</a></li>
                                    <li><a href="#">badroom</a></li>
                                    <li><a href="#">Sofa</a></li>
                                    <li><a href="#">Chair</a></li>
                                    <li><a href="#">Bed</a></li>
                                    <li><a href="#">Desk</a></li>
                                </ul>
                            </div>
                            <!--Wdget Menu End-->
                        </div>
                    </div>
                </div>
                <!--Wdget Area End-->
            </div>
        </div>
        <!--Footer Middel Area End-->
        <!--Footer Bottom Area Start-->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <!--Footer Left Content Start-->
                    <div class="col-lg-6 col-md-6">
                        <div class="copyright-text">
                            <p>Copyright © <script>document.write(new Date().getFullYear());</script> <a href="http://hastech.company/" target="_blank">Hastech</a>, All Rights Reserved.</p>
                        </div>
                    </div>
                    <!--Footer Left Content End-->
                    <!--Footer Right Content Start-->
                    <div class="col-lg-6 col-md-6">
                        <div class="payment-img text-right">
                            <a href="#"><img src="{{asset('/')}}/front/assets/img/payment/payment.png" alt=""></a>
                        </div>
                    </div>
                    <!--Footer Right Content End-->
                </div>
            </div>
        </div>
        <!--Footer Bottom Area End-->
    </div>
</footer>
<!--Footer Area End-->
<!--Modal Start-->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal Content Strat-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="modal-details">
                    <div class="row">
                        <!--Product Img Strat-->
                        <div class="col-xl-5 col-lg-5">
                            <!--Product Tab Content Start-->
                            <div class="tab-content">
                                <div id="watch1" class="tab-pane fade show active">
                                    <div class="modal-img img-full">
                                        <img src="{{asset('/')}}/front/assets/img/single-product/large/1.jpg" alt="">
                                    </div>
                                </div>
                                <div id="watch2" class="tab-pane fade">
                                    <div class="modal-img img-full">
                                        <img src="{{asset('/')}}/front/assets/img/single-product/large/2.jpg" alt="">
                                    </div>
                                </div>
                                <div id="watch3" class="tab-pane fade">
                                    <div class="modal-img img-full">
                                        <img src="{{asset('/')}}/front/assets/img/single-product/large/3.jpg" alt="">
                                    </div>
                                </div>
                                <div id="watch4" class="tab-pane fade">
                                    <div class="modal-img img-full">
                                        <img src="{{asset('/')}}/front/assets/img/single-product/large/4.jpg" alt="">
                                    </div>
                                </div>
                                <div id="watch5" class="tab-pane fade">
                                    <div class="modal-img img-full">
                                        <img src="{{asset('/')}}/front/assets/img/single-product/large/5.jpg" alt="">
                                    </div>
                                </div>
                                <div id="watch6" class="tab-pane fade">
                                    <div class="modal-img img-full">
                                        <img src="{{asset('/')}}/front/assets/img/single-product/large/6.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <!--Product Tab Content End-->
                            <!--Single Product Tab Menu Start-->
                            <div class="modal-product-tab">
                                <ul class="nav">
                                    <li><a class="active" data-toggle="tab" href="#watch1"><img src="{{asset('/')}}/front/assets/img/product-thumb/1.jpg" alt=""></a></li>
                                    <li><a data-toggle="tab" href="#watch2"><img src="{{asset('/')}}/front/assets/img/product-thumb/3.jpg" alt=""></a></li>
                                    <li><a data-toggle="tab" href="#watch3"><img src="{{asset('/')}}/front/assets/img/product-thumb/2.jpg" alt=""></a></li>
                                    <li><a data-toggle="tab" href="#watch4"><img src="{{asset('/')}}/front/assets/img/product-thumb/4.jpg" alt=""></a></li>
                                </ul>
                            </div>
                            <!--Single Product Tab Menu Start-->
                        </div>
                        <!--Product Img End-->
                        <!-- Product Content Start-->
                        <div class="col-xl-7 col-lg-7">
                            <div class="product-info">
                                <h2>Natural passages</h2>
                                <div class="product-price">
                                    <span class="old-price">$74.00</span>
                                    <span class="new-price">$69.00</span>
                                </div>
                                <a href="#" class="see-all">See all features</a>
                                <div class="add-to-cart quantity">
                                    <form class="add-quantity" action="#">
                                        <div class="quantity modal-quantity">
                                            <label>Quantity</label>
                                            <input type="number">
                                        </div>
                                        <div class="add-to-link">
                                            <button class="form-button" data-text="add to cart">add to cart</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="cart-description">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus.</p>
                                </div>
                                <div class="social-share">
                                    <h3>Share this product</h3>
                                    <ul class="socil-icon2">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Product Content End-->
                    </div>
                </div>
            </div>
        </div>
        <!--Modal Content Strat-->
    </div>
</div>
<!--Modal End-->
