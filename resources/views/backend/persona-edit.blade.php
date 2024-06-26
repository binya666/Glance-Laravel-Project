@extends('backend.layouts.main')
@section('title', 'Edit Persona')
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
                                <a href="{{ route('persona.index') }}">
                                    <button class="btn btn-info">Persona List</button>
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
                                    <<form method="POST" action="{{ route('persona.update', $persona->id) }}" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label class="form-label text-black">Name</label>
                                            <input type="text" class="form-control" name="persona_name" value="{{ old('persona_name', $persona->name) }}">
                                            @if ($errors->has('persona_name'))
                                            <span class="text-danger">{{ $errors->first('persona_name') }}</span>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label text-black">Short Description</label>
                                            <textarea class="form-control" name="short_description">{{ old('short_description', $persona->short_description) }}</textarea>
                                            @if ($errors->has('short_description'))
                                            <span class="text-danger">{{ $errors->first('short_description') }}</span>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label text-black">Current Image</label><br>
                                            <img src="{{ asset($persona->imgpath) }}" alt="Current Image" style="max-width: 200px;">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label text-black">New Image</label>
                                            <input type="file" class="form-control" name="personaImg">
                                            @if ($errors->has('personaImg'))
                                            <span class="text-danger">{{ $errors->first('personaImg') }}</span>
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
