@extends('backend.layouts.main')
@section('title', 'Edit Team Member')
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
                                <a href="{{ url('/teammember') }}">
                                    <button class="btn btn-info">Team Members List</button>
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
                                    <form method="POST" action="{{ route('team.update', $team->id) }}" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label class="form-label text-black">Name</label>
                                            <input type="text" class="form-control" name="member_name" value="{{ old('member_name', $team->name) }}">
                                            @if ($errors->has('member_name'))
                                            <span class="text-danger">{{ $errors->first('member_name') }}</span>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label text-black">Designation</label>
                                            <input type="text" class="form-control" name="designation" value="{{ old('designation', $team->designation) }}">
                                            @if ($errors->has('designation'))
                                            <span class="text-danger">{{ $errors->first('designation') }}</span>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label text-black">Current Image</label><br>
                                            <img src="{{ asset($team->imgpath) }}" alt="Current Image" style="max-width: 200px;">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label text-black">New Image</label>
                                            <input type="file" class="form-control" name="memberImg">
                                            @if ($errors->has('memberImg'))
                                            <span class="text-danger">{{ $errors->first('memberImg') }}</span>
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
