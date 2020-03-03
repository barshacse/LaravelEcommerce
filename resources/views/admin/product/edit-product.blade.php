@extends('admin.master')

@section('title')

    EditProduct

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

                                        <form action="{{ route('update-product') }}" method="POST" enctype="multipart/form-data" name="editProductForm">
                                            @csrf
                                            <div class="form-group">
                                                <label>Product Name</label>
                                                <input type="text"  required name="product_name" value="{{ $product->product_name }}" class="form-control"/>
                                                <input type="hidden"  required name="id" value="{{ $product->id }}" class="form-control"/>
                                            </div>

                                            <div class="form-group">
                                                <label>Product Code</label>
                                                <input type="text" required name="product_code" value="{{ $product->product_code }}" class="form-control"/>
                                            </div>

                                            <div class="form-group">
                                                <label>Category Name</label>
                                                <select name="category_id"  required class="form-control">
                                                    <option value="" disabled selected>---Select Category Name---</option>

                                                    @foreach($categories as $category)
                                                        <option value="{{ $category->id }}"> {{ $category->category_name }} </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>Brand Name</label>
                                                <select name="brand_id" required class="form-control">
                                                    <option value="" disabled selected>---Select Brand Name---</option>

                                                    @foreach($brands as $brand)
                                                        <option value="{{ $brand->id }}"> {{ $brand->brand_name }} </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>Product Price</label>
                                                <input type="number" required step="any" name="product_price" value="{{ $product->product_price }}" class="form-control"/>
                                            </div>

                                            <div class="form-group">
                                                <label>Product Stock Amount</label>
                                                <input type="number" required name="stock_amount" value="{{ $product->stock_amount }}" class="form-control"/>
                                            </div>

                                            <div class="form-group">
                                                <label>Product SKU</label>
                                                <input type="number" required name="product_sku" value="{{ $product->product_sku }}"  class="form-control"/>
                                            </div>


                                            <div class="form-group">
                                                <label>Short Description</label>
                                                <textarea class="form-control" required name="short_description"  rows="4">{{ $product->short_description }}</textarea>
                                            </div>

                                            <div class="form-group">
                                                <label>Long Description</label>
                                                <textarea class="form-control" required name="long_description"  rows="4">{{ $product->long_description }}</textarea>
                                            </div>

                                            <div class="form-group">
                                                <label>Product Main Image</label>
                                                <input type="file" name="product_image" class="form-control-file"/>
                                                <img src="{{ asset($product->product_image) }}" alt="" height="100" width="100">
                                            </div>

                                            <div class="form-group">
                                                <label>Product Sub Image</label>
                                                <input type="file" name="sub_image[]" multiple class="form-control-file"/>
                                                @foreach($subImages as $subImage)
                                                    <img src="{{ asset($subImage->sub_image) }}" alt="" height="60" width="80">
                                                @endforeach
                                            </div>

                                            <div class="form-group">
                                                <label>Publication Status</label>
                                                <input type="radio" name="status" {{ $product->status == 1 ? 'checked' : '' }} value="1"/>Published
                                                <input type="radio" name="status"  {{ $product->status == 0 ? 'checked' : '' }}  value="0"/>Unpublished
                                            </div>

                                            <div class="form-group">
                                                <input type="submit" name="btn" value="Update Product" class="btn btn-success btn-block"/>
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

    <script>
        document.forms['editProductForm'].elements['category_id'].value = '{{ $product->category_id }}';
        document.forms['editProductForm'].elements['brand_id'].value = '{{ $product->brand_id }}';
    </script>

@endsection


