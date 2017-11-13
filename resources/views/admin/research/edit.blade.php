@extends('layouts.dashboard')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Edit Penelitian</h1>
    </div>
</div>

<form method="post" action="{{ route('research.update', $research->id) }}">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-8">
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input class="form-control" type="text" name="research_title" value="{{ $research->research_title }}">
                    </div>
                    <div class="form-group">
                        <label for="title">Nama Dosen</label>
                        <input class="form-control" type="text" name="lecturer_name" value="{{ $research->lecturer_name }}">
                    </div>
                    <div class="form-group">
                        <label for="title">Dipublikasikan pada</label>
                        <input class="form-control" type="text" name="published_at" value="{{ $research->published_at }}">
                    </div>
                    <div class="form-group">
                        <label for="title">Tahun Publikasi</label>
                        <input class="form-control" type="text" name="year_published" value="{{ $research->year_published }}">
                    </div>
                    <div class="form-group">
                        <label for="sel1">Tingkat</label>
                        <select class="form-control" name="level">
                            <option value="Regional" {{ $research->level == "Regional" ? "selected" : "" }}>Regional</option>
                            <option value="Nasional" {{ $research->level == "Nasional" ? "selected" : "" }}>Nasional</option>
                            <option value="Internasional" {{ $research->level == "Internasional" ? "selected" : "" }}>Internasional</option>
                        </select>
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