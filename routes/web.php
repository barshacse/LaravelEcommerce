<?php

Route::get('/',[

    'uses' => 'EcommerceController@index',
    'as'   => '/'
]);

Route::get('/category-product/{id}',[

    'uses' => 'EcommerceController@category',
    'as'   => 'category-product'
]);

Route::get('/brand/brand-product/{id}',[

    'uses' => 'EcommerceController@brand',
    'as'   => 'brand-product'

]);

Route::get('/product-details/{id}',[

    'uses' => 'EcommerceController@productDetail',
    'as'   => 'product-details'

]);

Route::post('/cart/add-to-cart',[

    'uses' => 'CartController@addCart',
    'as'   => 'add-to-cart'

]);

Route::get('/cart/show-cart',[

    'uses' => 'CartController@showCart',
    'as'   => 'show-cart'

]);

Route::post('/cart/cart-update',[

   'uses' => 'CartController@updateCart',
    'as'  => 'cart-update'

]);

Route::get('/cart/delete-cart/{id}',[


    'uses' => 'CartController@deleteCart',
    'as'   => 'delete-cart'

]);

Route::get('/checkout',[

    'uses' => 'CheckoutController@index',
    'as'   => 'checkout'

]);

Route::post('/checkout/new-customer',[

    'uses' => 'CheckoutController@newCustomer',
    'as'   => 'new-customer'

]);

Route::get('/ajax-email-check/{email}',[

    'uses' => 'CheckoutController@ajaxEmailCheck',
    'as'   => 'ajax-email-check'

]);

Route::post('/checkout/customer-login',[

    'uses' => 'CheckoutController@customerLogin',
    'as'   => 'customer-login'

]);

Route::get('/customer-logout',[

    'uses' => 'CheckoutController@customerLogout',
    'as'   => 'customer-logout'

]);


Route::get('/shipping-info',[

   'uses' => 'CheckoutController@shippingInfo',
    'as'  => 'shipping-info'


]);

Route::post('shipping/new-shipping',[

    'uses' => 'CheckoutController@newShipping',
    'as'   => 'new-shipping'

]);

Route::get('/payment-info',[

    'uses' => 'CheckoutController@paymentInfo',
    'as'   => 'payment-info'

]);

Route::post('/new-order',[

    'uses' => 'CheckoutController@newOrder',
    'as'   => 'new-order'

]);

Route::get('/order/complete-order',[

    'uses' => 'CheckoutController@completeOrder',
    'as'   => 'complete-order'

]);















/*admin*/

Route::get('category/add-category',[

    'uses' => 'CategoryController@addCategory',
    'as'   => 'add-category'

]);

Route::post('category/new-category',[

    'uses' => 'CategoryController@newCategory',
    'as'   => 'new-category'

]);


Route::get('category/manage-category',[

    'uses' => 'CategoryController@manageCategory',
    'as'   => 'manage-category'
]);

Route::get('category/unpublished-category/{id}',[

    'uses' => 'CategoryController@unpublishedCategory',
    'as'   => 'unpublished-category'

]);

Route::get('category/published-category/{id}',[

    'uses' => 'CategoryController@publishedCategory',
    'as'   => 'published-category'

]);

Route::get('category/edit-category/{id}',[

    'uses' => 'CategoryController@editCategory',
    'as'   => 'edit-category'

]);

Route::post('category/update-category',[

    'uses' => 'CategoryController@updateCategory',
    'as'   => 'update-category'

]);

Route::get('category/delete-category/{id}',[

    'uses' => 'CategoryController@deleteCategory',
    'as'   => 'delete-category'

]);



Route::get('brand/add-brand',[

    'uses' => 'BrandController@addBrand',
    'as'   => 'add-brand'

]);

Route::post('brand/new-brand',[

    'uses' => 'BrandController@newBrand',
    'as'   => 'new-brand'

]);

Route::get('brand/manage-brand',[

    'uses' => 'BrandController@manageBrand',
    'as'   => 'manage-brand'

]);

Route::get('brand/unpublished-brand/{id}',[

    'uses' => 'BrandController@unpublishedBrand',
    'as'   => 'unpublished-brand'

]);

Route::get('brand/published-brand/{id}',[

    'uses' => 'BrandController@publishedBrand',
    'as'   => 'published-brand'

]);

Route::get('brand/edit-brand/{id}',[

   'uses' => 'BrandController@editBrand',
    'as'  => 'edit-brand'

]);

Route::post('brand/update-brand',[

    'uses' => 'BrandController@updateBrand',
    'as'   => 'update-brand'

]);

Route::get('brand/delete-brand/{id}',[

   'uses' => 'BrandController@deleteBrand',
    'as'  => 'delete-brand'

]);

Route::get('product/add-product',[

    'uses' => 'ProductController@addProduct',
    'as'   => 'add-product'

]);

Route::post('product/new-product',[

    'uses' => 'ProductController@newProduct',
    'as'   => 'new-product'

]);

Route::get('product/manage-product',[

    'uses' => 'ProductController@manageProduct',
    'as'   => 'manage-product'

]);

Route::get('product/unpublished-product/{id}',[

    'uses' => 'ProductController@unpublishedProduct',
    'as'   => 'unpublished-product'

]);

Route::get('product/published-product/{id}',[

    'uses' => 'ProductController@publishedProduct',
    'as'   => 'published-product'

]);

Route::get('product/view-product/{id}',[

   'uses' => 'ProductController@viewProduct',
   'as'   => 'view-product'

]);

Route::get('product/edit-product/{id}',[

    'uses' => 'ProductController@editProduct',
    'as'   => 'edit-product'

]);

Route::post('product/update-product',[

    'uses' => 'ProductController@updateProduct',
    'as'   => 'update-product'

]);


Route::get('product/delete-product/{id}',[

    'uses' => 'ProductController@deleteProduct',
    'as'   => 'delete-product'

]);


Route::get('slider/add-slider',[

    'uses' => 'SliderController@addSlider',
    'as'   => 'add-slider'

]);


Route::post('slider/new-slider',[

    'uses' => 'SliderController@newSlider',
    'as'   => 'new-slider'

]);


Route::get('slider/manage-slider',[

    'uses' => 'SliderController@manageSlider',
    'as'   => 'manage-slider'

]);


Route::get('slider/unpublished-slider/{id}',[

    'uses' => 'SliderController@unpublishedSlider',
    'as'   => 'unpublished-slider'

]);

Route::get('slider/published-slider/{id}',[

    'uses' => 'SliderController@publishedSlider',
    'as'   => 'published-slider'
]);


Route::get('slider/edit-slider/{id}',[

    'uses' => 'SliderController@editSlider',
    'as'   => 'edit-slider'

]);

Route::post('slider/update-slider',[

    'uses' => 'SliderController@updateSlider',
    'as'   => 'update-slider'

]);

Route::get('slider/delete-slider/{id}',[


    'uses' => 'SliderController@deleteSlider',
    'as'   => 'delete-slider'

]);

Route::get('/order/manage-order',[

    'uses' => 'OrderController@manageOrder',
    'as'   => 'manage-order'


]);

Route::get('/order/order-detail/{id}',[

    'uses' => 'OrderController@orderDetail',
    'as'   => 'order-detail'

]);

Route::get('/order/order-invoice/{id}',[


    'uses' => 'OrderController@orderInvoice',
    'as'   => 'order-invoice'

]);

Route::get('order/download-invoice/{id}',[


    'uses' => 'OrderController@downloadInvoice',
    'as'   => 'download-invoice'

]);


Route::get('order/edit-order/{id}',[

    'uses' => 'OrderController@editOrder',
    'as'   => 'edit-order'

]);

Route::post('order/order-complete',[

    'uses' => 'OrderController@orderComplete',
    'as'   => 'order-complete'

]);

Route::get('order/delete-order/{id}',[


    'uses' => 'OrderController@deleteOrder',
    'as'   => 'delete-order'

]);























/*admin*/


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
