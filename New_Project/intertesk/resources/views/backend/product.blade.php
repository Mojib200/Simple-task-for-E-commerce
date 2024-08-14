@extends('dashbroad')
@section('content')
    <div class="container">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)"> Product </a></li>
            </ol>
        </div>

        <div class="row">
            @can('add_product')
                <div class="col-lg-12">
                    <div class="card bg-danger text-primary">
                        <div class="card-header">
                            <h1> ---Product Information--- </h1>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <label for=""class="form-label">Product Category Name </label>
                                        <select name="category_id" class="form-control" id="category_id">
                                            <option value="">---Select Category Name---</option>
                                            @foreach ($categorys as $category)
                                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for=""class="form-label">Product Category Name </label>
                                        <select name="subcategory_id" class="form-control " id="subcategory_name">
                                            <option value="">---Select Category Name---</option>
                                            @foreach ($sub_categorys as $sub_categorys)
                                                <option value="{{ $sub_categorys->id }}">
                                                    {{ $sub_categorys->sub_category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>



                                    <div class="col-lg-4 mb-3">
                                        <label for=""class="form-label">Product name</label>
                                        <input type="text" class="form-control" name="product_name">
                                    </div>
                                    @error('product_name')
                                        <div class="alert alert-danger mb-3">{{ $message }}
                                        </div>
                                    @enderror


                                    <div class=" col-lg-4 mb-3">
                                        <label for=""class="form-label">Product Slug</label>
                                        <input type="text" class="form-control" name="product_slug">
                                    </div>
                                    @error('product_slug')
                                        <div class="alert alert-danger mb-3">{{ $message }}
                                        </div>
                                    @enderror

                                    <div class="col-lg-4 mb-3">
                                        <label for=""class="form-label">Product Reguler Price</label>
                                        <input type="number" class="form-control" name="product_reguler_price">
                                    </div>
                                    @error('product_reguler_price')
                                        <div class="alert alert-danger mb-3">{{ $message }}
                                        </div>
                                    @enderror



                                    <div class="col-lg-4 mb-3">
                                        <label for=""class="form-label">Product Discount % </label>
                                        <input type="number" class="form-control" name="product_discount_price">
                                    </div>
                                    @error('product_discount_price')
                                        <div class="alert alert-danger mb-3">{{ $message }}
                                        </div>
                                    @enderror

                                    <div class="col-lg-4 mb-3">
                                        <label for=""class="form-label">Product After Discount price</label>
                                        <input type="number" class="form-control" name="product_after_discount_price">
                                    </div>
                                    @error('product_after_discount_price')
                                        <div class="alert alert-danger mb-3">{{ $message }}
                                        </div>
                                    @enderror



                                    <div class="col-lg-6 mb-3">
                                        <label for=""class="form-label">Short Description</label>
                                        <input type="text" class="form-control " name="short_description">
                                    </div>
                                    @error('short_description')
                                        <div class="alert alert-danger mb-3">{{ $message }}
                                        </div>
                                    @enderror

                                    <div class="col-lg-6 mb-3">
                                        <label for=""class="form-label">Long Description</label>
                                        <textarea type="text" class="form-control " id="summernote" name="long_description"></textarea>

                                    </div>
                                    @error('long_description')
                                        <div class="alert alert-danger mb-3">{{ $message }}
                                        </div>
                                    @enderror


                                    <div class="col-lg-6 mb-3">
                                        <label for=""class="form-label">Product Preview</label>
                                        <input type="file" class="form-control" name="preview">
                                    </div>

                                    @error('preview')
                                        <div class="alert alert-danger mb-3">{{ $message }}
                                        </div>
                                    @enderror

                                    <div class=" col-lg-6 mb-3">
                                        <label for=""class="form-label">Thumbnails</label>
                                        <input type="file" class="form-control" name="thumbnails[]" multiple>
                                    </div>


                                    @error('thumbnails')
                                        <div class="alert alert-danger mb-3">{{ $message }}
                                        </div>
                                    @enderror


                                </div>

                                <div class=" col-lg-12 mb-3 pt-2">
                                    <button class="btn btn-primary" type="submit">Add Product</button>
                                </div>
                            </form>

                        </div>
                    </div>
                @endcan
            </div>


        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-center">View Product</h1>
        
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Product Name</th>
                                    <th>Regular Price</th>
                                    <th>Discount Price %</th>
                                    <th>Preview</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $key => $product)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $product->product_name }}</td>
                                        <td>{{ $product->product_reguler_price }}</td>
                                        <td>{{ $product->product_discount_price == null ? 'No Discount' : $product->product_discount_price }}
                                        </td>
                                        <td><img src="{{ asset('/product') }}/{{ $product->preview }}"
                                                alt="" width="40" height="40"></td>
                                    </tr>
                                @endforeach
                            </tbody>
        
        
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
