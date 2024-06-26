@extends('backend.layouts.main')
@section('main-container')
        <div class="content-body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
						<div class="d-flex flex-wrap mb-3">
							<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#addContactModal" class="btn btn-outline-primary  me-auto mb-2">Add New Team Member</a>
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
											<form method="post" action="{{ url('/teammember') }}" enctype="multipart/form-data">
                                                @csrf
												<div class="mb-3">
													<label class="form-label text-black">Name</label>
													<input type="text" class="form-control" name="member_name">
                                                    @if ($errors->has('member_name'))
                                                    <span class="text-danger">
                                                        {{$errors->first('member_name')}}
                                                    </span>
                                                    @endif
												</div>
												<div class="mb-3">
													<label class="form-label text-black">Designation</label>
													<input type="text" class="form-control" name="designation">
                                                    @if ($errors->has('designation'))
                                                    <span class="text-danger">
                                                        {{$errors->first('designation')}}
                                                    </span>
                                                    @endif
												</div>
												<div class="mb-3">
													<label class="form-label text-black">Image</label>
													<input type="file" class="form-control" name="memberImg">
                                                    @if ($errors->has('memberImg'))
                                                        <span class="text-danger">
                                                            {{$errors->first('memberImg')}}
                                                        </span>
                                                    @endif
												</div>
												<div class="">
													<button type="submit" class="btn btn-primary" name="BtnSubmit">Add Member</button>
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
										<th class="sorting_1  pe-0 text-center bg-none no-data-img ">
											<div class="form-check custom-checkbox ms-xl-4 ms-3">
												<input type="checkbox" class="form-check-input" id="checkAll" required="">
												<label class="form-check-label" for="checkAll"></label>
											</div>
										</th>
										<th><strong class="font-w600 wspace-no">Name</strong></th>
										<th><strong class="font-w600 wspace-no">Designation</strong></th>
										<th><strong class="font-w600 wspace-no">Image</strong></th>
                                        <th><strong class="font-w600 wspace-no">Actions</strong></th>
										<th class="bg-none"></th>
									</tr>
								</thead>
								<tbody>
                                    @foreach ($members as $value)
                                    <tr>
                                        <td class="sorting_1 pe-0 text-center">
                                            <div class="form-check custom-checkbox ms-xl-4 ms-3">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox{{ $loop->index }}" required>
                                                <label class="form-check-label" for="customCheckBox{{ $loop->index }}"></label>
                                            </div>
                                        </td>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->designation }}</td>
                                        <td><img src="{{ url($value->imgpath) }}" width="100px" height="50px" class="img-sm img-thumbnail" alt="Item"></td>
                                        <td>
                                            <a href="{{ route('team.edit', $value->id) }}" class="btn btn-success btn-circle btn-sm d-inline-block" style="height: 3rem; width: 3rem;">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form method="post" class="d-inline" action="{{ route('team.delete', $value->id) }}">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-circle btn-sm" onClick="return confirm('Are you sure you want to Delete Record');" title="Delete Record" style="height: 3rem; width: 3rem;">
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
