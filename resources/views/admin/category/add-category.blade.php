@extends('admin.master')

@section('title')
    AddCategory
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
                                            <form action="{{ route('new-category') }}" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <label>Category Name</label>
                                                    <input type="text" required name="category_name" class="form-control"/>
                                                </div>

                                                <div class="form-group">
                                                    <label>Category Description</label>
                                                    <textarea class="form-control" required name="category_description" ></textarea>
                                                </div>

                                                <div class="form-group">
                                                    <label>Publication Status</label>
                                                    <input type="radio" name="status" checked value="1"/>Published
                                                    <input type="radio" name="status" value="0"/>Unpublished
                                                </div>

                                                <div class="form-group">

                                                    <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Category"/>
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
