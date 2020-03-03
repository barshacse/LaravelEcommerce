@extends('admin.master')

@section('title')
    ManageProduct
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
                                        <table class="table table-hover table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>SL NO</th>
                                                    <th>Slider Image</th>
                                                    <th>Publication Status</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php($i = 1)
                                                @foreach($sliders as $slider)
                                                <tr>
                                                    <td>{{ $i++ }}</td>
                                                    <td><img src="{{asset($slider->slider_image)}}" alt="" height="60" width="60"></td>
                                                    <td>{{ $slider->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                                    <td>
                                                        @if($slider->status == 1)
                                                        <a href="{{ route('unpublished-slider',['id' =>$slider->id]) }}" class="btn btn-primary">Published</a>
                                                        @else
                                                        <a href="{{ route('published-slider',['id' =>$slider->id]) }}" class="btn btn-warning">Unpublished</a>
                                                        @endif
                                                        <a href="{{ route('edit-slider',['id' =>$slider->id]) }}" class="btn btn-success">Edit</a>
                                                        <a href="{{ route('delete-slider',['id' =>$slider->id]) }}" onclick="return confirm('Are You Sure to Delete This?!!!')" class="btn btn-danger">Delete</a>
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

@endsection
