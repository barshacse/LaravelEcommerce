@extends('admin.master')

@section('title')
    EditCategory
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
                                        <form action="{{ route('update-category') }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label>Category Name</label>
                                                <input type="text" name="category_name" value="{{ $category->category_name }}" class="form-control"/>
                                                <input type="hidden" name="category_id" value="{{ $category->id }}" class="form-control"/>
                                            </div>

                                            <div class="form-group">
                                                <label>Category Description</label>
                                                <textarea class="form-control" name="category_description" >{{ $category->category_description }}</textarea>
                                            </div>

                                            <div class="form-group">
                                                <label>Publication Status</label>
                                                <input type="radio" name="status"  {{ $category->status == 1 ? 'checked' : '' }} value="1"/>Published
                                                <input type="radio" name="status" {{ $category->status == 0 ? 'checked' : '' }} value="0"/>Unpublished
                                            </div>

                                            <div class="form-group">

                                                <input type="submit" name="btn" class="btn btn-success btn-block" value="Update Category"/>
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

