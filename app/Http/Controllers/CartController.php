<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    public function addCart(Request $request)
    {
        $product = Product::find($request->product_id);

        Cart::add([
            'id' => $product->id,
            'name' => $product->product_name,
            'price' => $product->product_price,
            'quantity' => $request->quantity,
            'attributes' =>[
                'image' => $product->product_image,
            ]
        ]);

        return redirect('/cart/show-cart');
    }

    public function showCart()
    {
        $categories = Category::where('status',1)->get();
        $brands     = Brand::where('status',1)->get();
        $cartCollections = Cart::getContent();

        return view('front.cart.show-cart',[

            'categories'      => $categories,
            'brands'          => $brands,
            'cartCollections' => $cartCollections

        ]);

    }

    public function updateCart(Request $request)
    {
        Cart::update($request->id,[
            'quantity' => [
                'relative' => false,
                'value' => $request->qty,
            ],
        ]);

        return redirect('/cart/show-cart')->with('message','Cart Updated Successfully');

    }

    public function deleteCart($id)
    {
        Cart::remove($id);

        return redirect('/cart/show-cart')->with('message','Cart Deleted Successfully');
    }



}
