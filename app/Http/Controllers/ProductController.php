<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use App\SubImage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct()
    {
        $categories = Category::where('status',1)->get();
        $brands     = Brand::where('status',1)->get();

       return view('admin.product.add-product',[

           'categories' => $categories,
           'brands'     => $brands

       ]);
    }


    public function newProduct(Request $request)
    {

        $productImage = $request->file('product_image');
        $imageName    = $productImage->getClientOriginalName();
        $directory    = './product-images/';
        $productImage->move($directory,$imageName);
        $imageUrl     = $directory.$imageName;


        $product = new Product();

        $product->product_name      = $request->product_name;
        $product->product_code      = $request->product_code;
        $product->category_id       = $request->category_id;
        $product->brand_id          = $request->brand_id;
        $product->product_price     = $request->product_price;
        $product->stock_amount      = $request->stock_amount;
        $product->product_sku       = $request->product_sku;
        $product->short_description = $request->short_description;
        $product->long_description  = $request->long_description;
        $product->status            = $request->status;
        $product->product_image     = $imageUrl;

        $product->save();

        $files = $request->file('sub_image');
        foreach ($files as $file)
        {

            $name      = $file->getClientOriginalName();
            $directory = './sub-images/';
            $file->move($directory,$name);
            $imageUrl  = $directory.$name;

            $subImage = new SubImage();
            $subImage->product_id = $product->id;
            $subImage->sub_image  =$imageUrl;
            $subImage->save();


        }

        return redirect('/product/manage-product')->with('message','Product Info Save Successfully');

    }



    public function manageProduct()
    {
        $products = Product::orderBy('id','desc')->select('id','product_name','category_id','brand_id','product_price','stock_amount','status','product_image')->get();


        return view('admin.product.manage-product',[

            'products' => $products

        ]);
    }

    public function viewProduct($id)
    {
        $product    = Product::find($id);
        $subImages  = SubImage::where('product_id',$id)->get();

        return view('admin.product.view-product',[

            'product'    => $product,
            'subImages'  => $subImages
        ]);
    }



    public function unpublishedProduct($id)
    {
        $product = Product::find($id);
        $product->status = 0;
        $product->save();



        return redirect('/product/manage-product')->with('message','Product Info Unpublished Successfully');

    }


    public function publishedProduct($id)
    {

        $product = Product::find($id);
        $product->status = 1;
        $product->save();


        return redirect('/product/manage-product')->with('message','Product Info Published Successfully');

    }


    public function editProduct($id)
    {
        $product    = Product::find($id);
        $subImages  = SubImage::where('product_id',$id)->get();
        $categories = Category::where('status',1)->get();
        $brands     = Brand::where('status',1)->get();

        return view('admin.product.edit-product',[

            'product'    => $product,
            'subImages'  => $subImages,
            'categories' => $categories,
            'brands'     => $brands

        ]);
    }


    public function updateProduct(Request  $request)
    {
        $product           = Product::find($request->id);
        $productImage      = $request->file('product_image');



        if($productImage)
        {
            if(file_exists($product->product_image))
            {
                unlink($product->product_image);
            }


            $imageName    = time().'_'.$productImage->getClientOriginalName();
            $directory    = './product-images/';
            $productImage->move($directory,$imageName);
            $imageUrl     = $directory.$imageName;


        }else{
            $imageUrl = $product->product_image;
        }


        $product->product_name      = $request->product_name;
        $product->product_code      = $request->product_code;
        $product->category_id       = $request->category_id;
        $product->brand_id          = $request->brand_id;
        $product->product_price     = $request->product_price;
        $product->stock_amount      = $request->stock_amount;
        $product->product_sku       = $request->product_sku;
        $product->short_description = $request->short_description;
        $product->long_description  = $request->long_description;
        $product->status            = $request->status;
        $product->product_image     = $imageUrl;
        $product->save();



        $productSubImages  = SubImage::where('product_id',$request->id)->get();
        $subImages         = $request->file('sub_image');
        if($subImages)
        {

            foreach ($productSubImages as $productSubImage)
            {
                if(file_exists($productSubImage->sub_image))
                {
                    unlink($productSubImage->sub_image);
                }

                $productSubImage->delete();
            }

            foreach ($subImages as $subImage)
            {

                $name      = time().'_'. $subImage->getClientOriginalName();
                $directory = './sub-images/';
                $subImage->move($directory,$name);
                $imageUrl  = $directory.$name;


                $subImage = new SubImage();
                $subImage->product_id = $product->id;
                $subImage->sub_image  =$imageUrl;
                $subImage->save();

            }
        }

        return redirect('/product/manage-product')->with('message','Product Info Updated Successfully');


    }

    public function deleteProduct($id)
    {
        $product = Product::find($id);
        $productSubImages  = SubImage::where('product_id',$id)->get();


        if(file_exists($product->product_image))
        {
            unlink($product->product_image);
        }

        $product->delete();

        foreach ($productSubImages as $productSubImage)
        {
            if(file_exists($productSubImage->sub_image))
            {
                unlink($productSubImage->sub_image);
            }

            $productSubImage->delete();
        }

        return redirect('/product/manage-product')->with('message','Product Info Delete Successfully');


    }







}
