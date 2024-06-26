@extends('backend.layouts.main')
@section('title', 'Edit Product')
@section('main-container')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="d-flex flex-wrap mb-3">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block p-4 border-left-success">
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    <div class="container-fluid">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <a href="{{ url('/addproduct') }}">
                                    <button class="btn btn-info">Products List</button>
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="modal-body">
                                    @if ($message = Session::get('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert" style="background-color:#ff4f00">
                                        <strong>Success!</strong> {{ $message }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    @endif
                                    <form method="POST" action="{{ route('product.update', $product->id) }}" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="_method" value="PUT">
                                        <div class="mb-3">
                                            <label class="form-label text-black">Product Name</label>
                                            <input type="text" class="form-control" name="product_name" value="{{ old('product_name', $product->product_name) }}">
                                            @if ($errors->has('product_name'))
                                            <span class="text-danger">{{ $errors->first('product_name') }}</span>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label text-black">Product Price</label>
                                            <input type="number" class="form-control" name="product_price" value="{{ old('product_price', $product->product_price) }}">
                                            @if ($errors->has('product_price'))
                                            <span class="text-danger">{{ $errors->first('product_price') }}</span>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label text-black">Product Brand</label>
                                            <input type="text" class="form-control" name="product_brand" value="{{ old('product_brand', $product->product_brand) }}">
                                            @if ($errors->has('product_brand'))
                                            <span class="text-danger">{{ $errors->first('product_brand') }}</span>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label text-black">Category</label>
                                            <select class="form-control" name="category">
                                                <option value="shoes" {{ old('category', $product->category) === 'shoes' ? 'selected' : '' }}>Shoes</option>
                                                <option value="clothes" {{ old('category', $product->category) === 'clothes' ? 'selected' : '' }}>Clothes</option>
                                                <option value="accessories" {{ old('category', $product->category) === 'accessories' ? 'selected' : '' }}>Accessories</option>
                                            </select>
                                            @if ($errors->has('category'))
                                            <span class="text-danger">{{ $errors->first('category') }}</span>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label text-black">Current Image 1</label><br>
                                            <img src="{{ asset($product->product_Img_1) }}" alt="Current Image 1" style="max-width: 200px;">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label text-black">New Image 1</label>
                                            <input type="file" class="form-control" name="product_Img_1">
                                            @if ($errors->has('product_Img_1'))
                                            <span class="text-danger">{{ $errors->first('product_Img_1') }}</span>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label text-black">Current Image 2</label><br>
                                            <img src="{{ asset($product->product_Img_2) }}" alt="Current Image 2" style="max-width: 200px;">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label text-black">New Image 2</label>
                                            <input type="file" class="form-control" name="product_Img_2">
                                            @if ($errors->has('product_Img_2'))
                                            <span class="text-danger">{{ $errors->first('product_Img_2') }}</span>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label text-black">Current Image 3</label><br>
                                            <img src="{{ asset($product->product_Img_3) }}" alt="Current Image 3" style="max-width: 200px;">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label text-black">New Image 3</label>
                                            <input type="file" class="form-control" name="product_Img_3">
                                            @if ($errors->has('product_Img_3'))
                                            <span class="text-danger">{{ $errors->first('product_Img_3') }}</span>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label text-black">Short Discription</label>
                                            <input type="text" class="form-control" name="description" value="{{ old('description', $product->description) }}">
                                            @if ($errors->has('description'))
                                            <span class="text-danger">{{ $errors->first('description') }}</span>
                                            @endif
                                        </div>
                                        <div class="d-grid">
                                            <input class="btn btn-info btn-block" type="submit" value="Update Product" name="submit">
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
