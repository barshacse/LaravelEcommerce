@extends('admin.master')

@section('title')

    ManageBrand

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
                                        <div class="table-responsive">

                                            <table class="table table-hover table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>SL NO</th>
                                                        <th>Brand Name</th>
                                                        <th>Brand Description </th>
                                                        <th>Publication Status</th>
                                                        <th class="text-center">Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    @php($i = 1)
                                                    @foreach($brands as $brand)
                                                    <tr>
                                                        <td>{{ $i++ }}</td>
                                                        <td>{{ $brand->brand_name }}</td>
                                                        <td>{{ $brand->brand_description }}</td>
                                                        <td>{{ $brand->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                                        <td>
                                                            @if($brand->status == 1)
                                                            <a href="{{ route('unpublished-brand',['id' => $brand->id]) }}" class="btn btn-sm btn-primary">Published</a>
                                                            @else
                                                            <a href="{{ route('published-brand',['id' => $brand->id]) }}" class="btn btn-sm btn-warning">Unpublished</a>
                                                            @endif
                                                            <a href="{{ route('edit-brand',['id' => $brand->id]) }}" class="btn btn-sm btn-success">Edit</a>
                                                            <a href="{{ route('delete-brand',['id' => $brand->id]) }}" onclick="return confirm('Are You Sure To Delete Brand?!!!')" class="btn btn-sm btn-danger">Delete</a>
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
