@extends('layouts.dashboard')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Tambah Penelitian Baru</h1>
    </div>
</div>

<form method="post" action="{{ route('research.store') }}">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-8">
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input class="form-control" type="text" name="research_title" >
                    </div>
                    <div class="form-group">
                        <label for="title">Nama Dosen</label>
                        <input class="form-control" type="text" name="lecturer_name">
                    </div>
                    <div class="form-group">
                        <label for="title">Dipublikasikan pada</label>
                        <input class="form-control" type="text" name="published_at">
                    </div>
                    <div class="form-group">
                        <label for="title">Tahun Publikasi</label>
                        <input class="form-control" type="text" name="year_published">
                    </div>
                    <div class="form-group">
                        <label for="sel1">Tingkat</label>
                        <select class="form-control" name="level">
                            <option value="Regional">Regional</option>
                            <option value="Nasional">Nasional</option>
                            <option value="Internasional">Internasional</option>
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