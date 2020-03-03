@extends('admin.master')

@section('title')
    ViewProduct
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
                                        <table class="table table-bordered table-hover">

                                            <tr>
                                                <th>Product Id</th>
                                                <td>{{ $product->id }}</td>
                                            </tr>

                                            <tr>
                                                <th>Product Name</th>
                                                <td>{{ $product->product_name }}</td>
                                            </tr>

                                            <tr>
                                                <th>Product Code</th>
                                                <td>{{ $product->product_code }}</td>
                                            </tr>

                                            <tr>
                                                <th>Category Name</th>
                                                <td>{{ $product->category->category_name }}</td>
                                            </tr>

                                            <tr>
                                                <th>Brand Name</th>
                                                <td>{{ $product->brand->brand_name }}</td>
                                            </tr>

                                            <tr>
                                                <th>Product Price</th>
                                                <td>{{ $product->product_price }}</td>
                                            </tr>

                                            <tr>
                                                <th>Stock Amount</th>
                                                <td>{{ $product->stock_amount }}</td>
                                            </tr>

                                            <tr>
                                                <th>Product SKU</th>
                                                <td>{{ $product->product_sku }}</td>
                                            </tr>

                                            <tr>
                                                <th>Short Description</th>
                                                <td>{{ $product->short_description}}</td>
                                            </tr>
                                            <tr>
                                                <th>Long Description</th>
                                                <td>{{ $product->long_description}}</td>
                                            </tr>

                                            <tr>
                                                <th>Publication Status</th>
                                                <td>{{ $product->status}}</td>
                                            </tr>

                                            <tr>
                                                <th>Product Image</th>
                                                <td><img src="{{ asset($product->product_image) }}" alt="" height="60" width="80"/></td>
                                            </tr>

                                            <tr>
                                                <th>Product SubImage</th>
                                                <td>

                                                    @foreach($subImages as $subImage)
                                                        <img src="{{ asset($subImage->sub_image) }}" alt="" height="60" width="80"/>
                                                    @endforeach

                                                </td>
                                            </tr>



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
