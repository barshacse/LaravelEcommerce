@extends('admin.master')

@section('title')

    EditBrand

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
                                        <h4 class="text-success text-center">{{ Session::get('message') }}</h4>

                                        <form action="{{ route('update-brand') }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label>Brand Name</label>
                                                <input type="text" name="brand_name" value="{{ $brand->brand_name }}" class="form-control"/>
                                                <input type="hidden" name="brand_id" value="{{ $brand->id }}" class="form-control"/>
                                            </div>

                                            <div class="form-group">
                                                <label>Brand Description</label>
                                                <textarea class="form-control" name="brand_description">{{ $brand->brand_description }}</textarea>
                                            </div>

                                            <div class="form-group">
                                                <label>Publication Status</label>
                                                <input type="radio" name="status" checked  {{ $brand->status == 1 ? 'checked' : '' }} value="1"/>Published
                                                <input type="radio" name="status"  {{ $brand->status == 0 ? 'checked' : '' }} value="0"/>Unpublished
                                            </div>

                                            <div class="form-group">
                                                <input type="submit" name="btn" value="Update Brand" class="btn btn-success btn-block"/>
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

