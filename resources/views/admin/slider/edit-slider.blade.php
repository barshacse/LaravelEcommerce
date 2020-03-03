
@extends('admin.master')

@section('title')

    AddSlider

@endsection

@section('body')

    <div class="pcoded-main-container">

        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card card-body rounded-0">
                                        <h4 class="text-center text-success">{{ Session::get('message') }}</h4>
                                        <form action="{{ route('update-slider') }}" method="POST" enctype="multipart/form-data">
                                            @csrf

                                            <div class="form-group">
                                                <label>Slider Image</label>
                                                <input type="file" name="slider_image" class="form-control-file"/>
                                                <input type="hidden" name="id" value="{{ $slider->id }}" class="form-control-file"/>
                                                <img src="{{ asset($slider->slider_image) }}" alt="" height="100" width="100">
                                            </div>

                                            <div class="form-group">
                                                <label>Publication Status</label>
                                                <input type="radio" name="status" {{ $slider->status == 1 ? 'checked' : '' }} value="1"/>Published
                                                <input type="radio" name="status" {{ $slider->status == 0 ? 'checked' : '' }} value="0"/>Unpublished
                                            </div>

                                            <div class="form-group">
                                                <input type="submit" name="btn" value="Save Slider Image" class="btn btn-success btn-block"/>
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
    </div>

@endsection


