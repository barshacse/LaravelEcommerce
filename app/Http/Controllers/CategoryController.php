<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory()
    {
        return view('admin.category.add-category');
    }



    public function newCategory(Request $request)
    {
        $category = new Category();

        $category->category_name        = $request->category_name;
        $category->category_description = $request->category_description;
        $category->status               = $request->status;
        $category->save();

        return redirect('/category/manage-category')->with('message','Category Info Save Successfully');
    }

    public function manageCategory()
    {
       $categories = Category::all();



        return view('admin.category.manage-category',[
            'categories' => $categories
        ]);
    }

    public function unpublishedCategory($id)
    {
        $category = Category::find($id);
        $category->status = 0;
        $category->save();
        return redirect('/category/manage-category')->with('message','Category Info Unpublished Successfully');
    }

    public function publishedCategory($id)
    {
        $category = Category::find($id);
        $category->status = 1;
        $category->save();

        return redirect('/category/manage-category')->with('message','Category Info Published Successfully');
    }

    public function editCategory($id)
    {
        $category = Category::find($id);

        return view('admin.category.edit-category',[

            'category' => $category

        ]);
    }

    public function updateCategory(Request $request)
    {
       $category = Category::find($request->category_id);

        $category->category_name        = $request->category_name;
        $category->category_description = $request->category_description;
        $category->status               = $request->status;
        $category->save();


        return redirect('/category/manage-category')->with('message','Category Info Updated Successfully');

    }


    public function deleteCategory($id)
    {

        $category = Category::find($id);
        $category->delete();

        return redirect('/category/manage-category')->with('message','Category Info Delete Successfully');
    }











}


