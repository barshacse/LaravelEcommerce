<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function addBrand()
    {
        return view('admin.brand.add-brand');
    }

    public function newBrand(Request $request)
    {
        $brands = new Brand();

        $brands->brand_name        = $request->brand_name;
        $brands->brand_description = $request->brand_description;
        $brands->status            = $request->status;

        $brands->save();

        return redirect('/brand/manage-brand')->with('message','Brand save Successfully');

    }


    public function manageBrand()
    {
        $brands = Brand::all();


        return view('admin.brand.manage-brand',[

            'brands' => $brands

        ]);
    }

    public function unpublishedBrand($id)
    {

        $brand = Brand::find($id);
        $brand->status = 0;
        $brand->save();

        return redirect('/brand/manage-brand')->with('message','Brand Unpublished Successfully');

    }

    public function publishedBrand($id)
    {
        $brand = Brand::find($id);
        $brand->status = 1;
        $brand->save();

        return redirect('/brand/manage-brand')->with('message','Brand Published Successfully');

    }

    public function editBrand($id)
    {
        $brand = Brand::find($id);

        return view('admin.brand.edit-brand',[

            'brand' => $brand

        ]);

    }

    public function updateBrand(Request $request)
    {

        $brand = Brand::find($request->brand_id);

        $brand->brand_name        = $request->brand_name;
        $brand->brand_description = $request->brand_description;
        $brand->status            = $request->status;

        $brand->save();

        return redirect('/brand/manage-brand')->with('message','Brand Updated Successfully');

    }


    public function deleteBrand($id)
    {
        $brand = Brand::find($id);
        $brand->delete();

        return redirect('/brand/manage-brand')->with('message','Brand Info Delete Successfully');
    }








}
