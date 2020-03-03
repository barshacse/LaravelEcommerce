
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
                                        <h3 class="text-center text-success"> {{ Session::get('message') }}</h3>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover">
                                                <thead>
                                                <tr>
                                                    <th class="text-center">Action</th>
                                                    <th>SL NO</th>
                                                    <th>Product Name</th>
                                                    <th>Category Name</th>
                                                    <th>Brand Name</th>
                                                    <th>Product Price</th>
                                                    <th>Stock Amount</th>
                                                    <th>Image</th>
                                                    <th>Publication Status</th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                    @php($i = 1)
                                                    @foreach($products as $product)
                                                    <tr>
                                                        <td>
                                                            @if($product->status == 1)
                                                                <a title="Unpublihsed Product" href="{{ route('unpublished-product',['id'=> $product->id]) }}" class="nav-link"><i class="fas fa-thumbs-down"></i></a>
                                                            @else
                                                                <a title="Published Product" href="{{ route('published-product',['id'=>$product->id]) }}" class="nav-link"><i class="fas fa-thumbs-up"></i></a>
                                                            @endif
                                                            <a title="View Product" href="{{ route('view-product',['id' =>$product->id]) }}" class="nav-link"><i class="fas fa-gift"></i></a>
                                                            <a title="Edit Product" href="{{ route('edit-product',['id' =>$product->id]) }}" class="nav-link" ><i class="far fa-edit"></i></a>
                                                            <a title="Delete Product" href="{{ route('delete-product',['id' =>$product->id]) }}" class="nav-link" onclick="return confirm('Are You Sure to Remove This?..')" ><i class="fas fa-trash-alt"></i></a>
                                                        </td>
                                                        <td>{{ $i++ }}</td>
                                                        <td>{{ $product->product_name }}</td>
                                                        <td>{{ $product? $product->category->category_name : ''}}</td>
                                                        <td>{{ $product->brand->brand_name }}</td>
                                                        <td>{{ $product->product_price }}</td>
                                                        <td>{{ $product->stock_amount }}</td>
                                                        <td><img src="{{ asset($product->product_image)}}" alt="" height="60" width="80"/></td>
                                                        <td>{{ $product->status == 1 ? 'Published' : 'Unpublished'}}</td>

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
