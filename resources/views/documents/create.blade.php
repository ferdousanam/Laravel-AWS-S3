@extends('layouts.main')

@section('content')
    <div class="row m-5">
        <div class="col-12 align-items-center">
            <form action="{{ route('documents.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label for="document" class="col-sm-2 col-form-label">Document file</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control-file" name="document" id="document">
                    </div>
                </div>
                <div class="form-group mt-5">
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </form>
        </div>
    </div>
@endsection
