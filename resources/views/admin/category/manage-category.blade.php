@extends('admin.master')

@section('title')
    ManageCategory
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
                                        <h3 class="text-center text-success"> {{ Session::get('message') }}</h3>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>SL NO</th>
                                                        <th>Category Name</th>
                                                        <th>Category Description</th>
                                                        <th>Publication Status</th>
                                                        <th class="text-center">Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    @php($i = 1)
                                                    @foreach($categories as $category)
                                                    <tr>
                                                        <td>{{ $i++ }}</td>
                                                        <td>{{ $category->category_name }}</td>
                                                        <td>{{ $category->category_description }}</td>
                                                        <td>{{ $category->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                                        <td>
                                                            @if($category->status == 1)
                                                            <a href="{{ route('unpublished-category',['id' => $category->id]) }}" class="btn btn-primary btn-sm">Published</a>
                                                            @else
                                                            <a href="{{ route('published-category',['id' => $category->id]) }}" class="btn btn-warning btn-sm">Unpublished</a>
                                                            @endif
                                                            <a href="{{ route('edit-category',['id' => $category->id]) }}" class="btn btn-success btn-sm">Edit</a>
                                                            <a href="{{ route('delete-category',['id' => $category->id]) }}" onclick="return confirm('Are You Sure To Delete Category?!!!')" class="btn btn-danger btn-sm">Delete</a>
                                                        </td>

                                                    </tr>
                                                        @endforeach
                                                </tbody>

                                            </table>
                                        </div>
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
