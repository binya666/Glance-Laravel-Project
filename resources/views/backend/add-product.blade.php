@extends('backend.layouts.main')
@section('main-container')
        <div class="content-body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
						<div class="d-flex flex-wrap mb-3">
							<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#addContactModal" class="btn btn-outline-primary  me-auto mb-2">Add New product</a>
							<!-- Add Order -->
							<div class="modal fade" id="addContactModal">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Add Contact</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal">
											</button>
										</div>
                                        <div class="modal-body">
                                            @if ($message = Session::get('success'))
                                                <div class="alert alert-success alert-dismissible fade show" role="alert" style="background-color:#ff4f00">
                                                    <strong>Success!</strong> {{ $message }}
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                             @endif
                                            <form method="post" action="{{ url('/addproduct') }}" enctype="multipart/form-data">
                                                @csrf
                                                <div class="mb-3">
                                                    <label class="form-label text-black">Product Name</label>
                                                    <input type="text" class="form-control" name="product_name">
                                                    @if ($errors->has('product_name'))
                                                    <span class="text-danger">
                                                        {{$errors->first('product_name')}}
                                                    </span>
                                                    @endif
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label text-black">Image 1</label>
                                                    <input type="file" class="form-control" name="product_Img_1">
                                                    @if ($errors->has('product_Img_1'))
                                                        <span class="text-danger">
                                                            {{$errors->first('product_Img_1')}}
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label text-black">Image 2</label>
                                                    <input type="file" class="form-control" name="product_Img_2">
                                                    @if ($errors->has('product_Img_2'))
                                                        <span class="text-danger">
                                                            {{$errors->first('product_Img_2')}}
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label text-black">Image 3</label>
                                                    <input type="file" class="form-control" name="product_Img_3">
                                                    @if ($errors->has('product_Img_3'))
                                                        <span class="text-danger">
                                                            {{$errors->first('product_Img_3')}}
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label text-black">Price</label>
                                                    <input type="number" placeholder="$" class="form-control" name="product_price">
                                                    @if ($errors->has('product_price'))
                                                        <span class="text-danger">
                                                            {{$errors->first('product_price')}}
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label text-black">Brand</label>
                                                    <input type="text" class="form-control" name="product_brand">
                                                    @if ($errors->has('product_Img_1'))
                                                        <span class="product_brand">
                                                            {{$errors->first('product_brand')}}
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label text-black">Category</label>
                                                    <select class="form-control" name="category" required>
                                                        <option value="shoes">Shoes</option>
                                                        <option value="clothes">Clothes</option>
                                                        <option value="accessories">Accessories</option>
                                                    </select>
                                                    @if ($errors->has('category'))
                                                        <span class="text-danger">
                                                            {{$errors->first('category')}}
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label text-black">Short Description</label>
                                                    <textarea class="form-control" placeholder="Type here" name="description" rows="4" maxlength="200"></textarea>
                                                    @if ($errors->has('description'))
                                                        <span class="text-danger">
                                                            {{$errors->first('description')}}
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="">
                                                    <button type="submit" class="btn btn-primary">Add Product</button>
                                                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </form>
                                        </div>

									</div>
								</div>
							</div>
							<select class="form-control style-2 me-3 mb-2 default-select ">
								<option>Filter</option>
								<option>Date</option>
							</select>
							<select class="form-control style-2 mb-2 default-select ">
								<option>Newest</option>
								<option>Oldest</option>
							</select>
						</div>
						<div class="table-responsive">
							<table id="dataTable1" class="display mb-4 dataTablesCard card-table text-black customer-list-tbl">
                                <thead>
                                    <tr class="bg-primary">
                                        <th class="sorting_1 pe-0 text-center bg-none no-data-img ">
                                            <div class="form-check custom-checkbox ms-xl-4 ms-3">
                                                <input type="checkbox" class="form-check-input" id="checkAll" required="">
                                                <label class="form-check-label" for="checkAll"></label>
                                            </div>
                                        </th>
                                        <th><strong class="font-w600 wspace-no">Product ID</strong></th>
                                        <th><strong class="font-w600 wspace-no">Product Name</strong></th>
                                        <th><strong class="font-w600 wspace-no">Image 1</strong></th>
                                        <th><strong class="font-w600 wspace-no">Image 2</strong></th>
                                        <th><strong class="font-w600 wspace-no">Image 3</strong></th>
                                        <th><strong class="font-w600 wspace-no">Price</strong></th>
                                        <th><strong class="font-w600 wspace-no">Brand</strong></th>
                                        <th><strong class="font-w600 wspace-no">Category</strong></th>
                                        <th><strong class="font-w600 wspace-no">Short Description</strong></th>
                                        <th><strong class="font-w600 wspace-no">Actions</strong></th>
                                        <th class="bg-none"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                    <tr>
                                        <td class="sorting_1 pe-0 text-center">
                                            <div class="form-check custom-checkbox ms-xl-4 ms-3">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox{{ $loop->index }}" required="">
                                                <label class="form-check-label" for="customCheckBox{{ $loop->index }}"></label>
                                            </div>
                                        </td>
                                        <td> {{ $product->id }}</td>
                                        <td>{{ $product->product_name }}</td>
                                        <td><img src="{{ asset('backend/images/' . $product->product_Img_1) }}" alt="Image 1" width="50"></td>
                                        <td><img src="{{ asset('backend/images/' . $product->product_Img_2) }}" alt="Image 2" width="50"></td>
                                        <td><img src="{{ asset('backend/images/' . $product->product_Img_3) }}" alt="Image 3" width="50"></td>
                                        <td>{{ $product->product_price }}</td>
                                        <td>{{ $product->product_brand }}</td>
                                        <td>{{ $product->category }}</td>
                                        <td>{{ $product->description }}</td>
                                            {{-- <div class="dropdown ms-auto c-pointer">
                                                <div class="btn-link" data-bs-toggle="dropdown" aria-expanded="false" role="button">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.0005 12C11.0005 12.5523 11.4482 13 12.0005 13C12.5528 13 13.0005 12.5523 13.0005 12C13.0005 11.4477 12.5528 11 12.0005 11C11.4482 11 11.0005 11.4477 11.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M18.0005 12C18.0005 12.5523 18.4482 13 19.0005 13C19.5528 13 20.0005 12.5523 20.0005 12C20.0005 11.4477 19.5528 11 19.0005 11C18.4482 11 18.0005 11.4477 18.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M4.00049 12C4.00049 12.5523 4.4482 13 5.00049 13C5.55277 13 6.00049 12.5523 6.00049 12C6.00049 11.4477 5.55277 11 5.00049 11C4.4482 11 4.00049 11.4477 4.00049 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item text-black" href="javascript:void(0);">
                                                        Edit
                                                    </a>
                                                    <a class="dropdown-item text-black" href="javascript:void(0);">
                                                        Delete
                                                    </a>
                                                    <a class="dropdown-item text-black" href="javascript:void(0);">
                                                        View Details
                                                    </a>
                                                </div>
                                            </div> --}}
                                            <td>
                                                <!-- Edit Button -->
                                                <a href="/editproduct/{{ $product->id }}" class="btn btn-success btn-circle btn-sm" style="height: 3rem; width: 3rem;">
                                                    <i class="fas fa-edit"></i>
                                                </a>

                                                <!-- Delete Form -->
                                                <form method="POST" action="{{ route('product.delete', $product->id) }}" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" onclick="return confirm('Are you sure you want to delete this product?')" class="btn btn-danger btn-circle btn-sm" style="height: 3rem; width: 3rem;">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
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
        @endsection
