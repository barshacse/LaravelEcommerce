<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use App\Slider;
use App\SubImage;
use Illuminate\Http\Request;

class EcommerceController extends Controller
{
    public function index()
    {
        $products   = Product::where('status',1)->orderBy('id','desc')->get();
        $categories = Category::where('status',1)->get();
        $brands     = Brand::where('status',1)->get();
        $sliders    = Slider::where('status',1)->get();


        return view('front.home.home',[

            'products'   => $products,
            'categories' => $categories,
            'brands'     => $brands,
            'sliders'    => $sliders

        ]);
    }

    public function category($id)
    {
        $categories = Category::where('status',1)->get();
        $products    = Product::where('category_id',$id)->orderBy('id','desc')->get();
        $brands     = Brand::where('status',1)->get();

        return view('front.category.category',[

            'categories' => $categories,
            'products'   => $products,
            'brands'     => $brands

        ]);
    }

    public function brand($id)
    {
        $products = Product::where('brand_id',$id)->orderBy('id','desc')->get();
        $categories = Category::where('status',1)->get();
        $brands     = Brand::where('status',1)->get();

        return view('front.brand.brand',[

            'categories' => $categories,
            'products'   => $products,
            'brands'     => $brands

        ]);

    }


    public function productDetail($id)
    {
        $categories = Category::where('status',1)->get();
        $brands     = Brand::where('status',1)->get();
        $product    = Product::find($id);
        $subImages  = SubImage::where('product_id',$id)->get();


        return view('front.product.product-details',[

            'categories' => $categories,
            'brands'     => $brands,
            'product'    => $product,
            'subImages'  => $subImages

        ]);
    }



}
