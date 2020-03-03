<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function addSlider()
    {

        return view('admin.slider.add-slider');
    }

    public function newSlider(Request $request)
    {

        $sliderImage = $request->file('slider_image');
        $imageName   = $sliderImage->getClientOriginalName();
        $directory   = './slider-image/';
        $sliderImage->move($directory,$imageName);
        $imageUrl    = $directory.$imageName;

        $slider = new Slider();

        $slider->slider_image = $imageUrl;
        $slider->status       = $request->status;
        $slider->save();

        return redirect('/slider/manage-slider')->with('message','Slider Image Upload Successfully');



    }

    public function manageSlider()
    {
        $sliders = Slider::all();

       return view('admin.slider.manage-slider',[

           'sliders' => $sliders

       ]);
    }

    public function  unpublishedSlider($id)
    {
        $slider = Slider::find($id);
        $slider->status = 0;
        $slider->save();


        return redirect('/slider/manage-slider')->with('message','Slider Unpublished Successfully');
    }

    public function publishedSlider($id)
    {
        $slider = Slider::find($id);
        $slider->status = 1;
        $slider->save();


        return redirect('/slider/manage-slider')->with('message','Slider Published Successfully');
    }

    public function editSlider($id)
    {
        $slider = Slider::find($id);

        return view('admin.slider.edit-slider',[

            'slider'  => $slider

        ]);
    }

    public function updateSlider(Request $request)
    {

        $slider       = Slider::find($request->id);
        $sliderImage  = $request->file('slider_image');

        if($sliderImage)
        {
            if(file_exists($slider->slider_image))
            {
                unlink($slider->slider_image);
            }

            $imageName   = time().'_'.$sliderImage->getClientOriginalName();
            $directory   = './slider-image/';
            $sliderImage->move($directory,$imageName);
            $imageUrl    = $directory.$imageName;


        }else{
            $imageUrl = $slider->slider_image;
        }


        $slider->slider_image     = $imageUrl;
        $slider->status            = $request->status;
        $slider->save();

        return redirect('/slider/manage-slider')->with('message','Slider Info Updated Successfully');


    }

    public function deleteSlider($id)
    {
        $slider = Slider::find($id);

        if(file_exists($slider->slider_image))
        {
            unlink($slider->slider_image);
        }

        $slider->delete();

        return redirect('/slider/manage-slider')->with('message','Slider Info Delete Successfully');



    }




}
