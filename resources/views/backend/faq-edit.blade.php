@extends('backend.layouts.main')
@section('main-container')
        <div class="content-body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
						<div class="d-flex flex-wrap mb-3">
							<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#addContactModal" class="btn btn-outline-primary  me-auto mb-2">Add New Faq</a>
							<!-- Add Order -->
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success alert-block p-4 border-left-success">
                                        <strong>
                                            {{$message}}
                                        </strong>
                                    </div>
                                @endif
                                <div class="container-fluid">
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <a href="{{url('/add-faqs')}}"><button class="btn btn-info">FAQs List</button></a></a>
                                    </div>
                                    <div class="card-body">
										<div class="modal-body">
                                            <form method="post" action="/admin/faq-edit/{{$faqs->id}}">
                                                @csrf
                                                @method('put')
                                                <div class="mb-3">
                                                    <label class="form-label text-black">FAQ Title</label>
                                                    <input type="text" class="form-control" name="faq_title" value="{{old('faq_title', $faqs->faq_title)}}">
                                                    @if ($errors->has('faq_title'))
                                                        <span class="text-danger">
                                                            {{$errors->first('faq_title')}}
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label text-black">Description</label>
                                                    <input class="form-control" name="description" value="{{old('description', $faqs->description)}}"></input>
                                                    @if ($errors->has('description'))
                                                        <span class="text-danger">
                                                            {{$errors->first('description')}}
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="d-grid">
                                                    <input class="btn btn-info btn-block" type="submit" value="Submit" name="submit">
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
