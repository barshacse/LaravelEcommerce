@extends('admin.master')

@section('title')

    AddBrand

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

                                        <form action="{{ route('new-brand') }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label>Brand Name</label>
                                                <input type="text" required name="brand_name" class="form-control"/>
                                            </div>

                                            <div class="form-group">
                                                <label>Brand Description</label>
                                                <textarea class="form-control" required name="brand_description"></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label>Publication Status</label>
                                                <input type="radio" name="status" checked value="1"/>Published
                                                <input type="radio" name="status"  value="0"/>Unpublished
                                            </div>

                                            <div class="form-group">
                                                <input type="submit" name="btn" value="Save Brand" class="btn btn-success btn-block"/>
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
