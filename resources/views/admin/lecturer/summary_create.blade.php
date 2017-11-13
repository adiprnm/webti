@extends('layouts.dashboard')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Tambah Dosen Baru</h1>
    </div>
</div>

<form method="post" action="{{ route('lecturer.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-8">
                    <div class="form-group">
                        <label for="title">Nama Dosen</label>
                        <input class="form-control" type="text" name="lecturer_id " value="{{ old('lecturer_name') }}">
                    </div>
                    <div class="form-group">
                        <label for="title">Nama Dosen</label>
                        <input class="form-control" type="text" name="lecturer_name " value="{{ old('lecturer_name') }}">
                    </div>
                    <div class="form-group">
                        <label for="title">Nama Dosen</label>
                        <input class="form-control" type="text" name="lecturer_name " value="{{ old('lecturer_name') }}">
                    </div>
                    
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" value="Publish">
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>


@endsection