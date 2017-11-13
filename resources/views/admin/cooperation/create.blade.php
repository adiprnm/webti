@extends('layouts.dashboard')

@section('content')

<script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Tambah Kerjasama Baru</h1>
    </div>
</div>

<form method="post" action="{{ route('coop.store') }}">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-8">
                    <div class="form-group">
                        <label for="title">Nama Instansi</label>
                        <input class="form-control" type="text" name="instance_name" placeholder="Nama Instansi...">
                    </div>
                    <div class="form-group">
                        <label for="title">Jenis Kegiatan</label>
                        <input class="form-control" type="text" name="event_type" placeholder="Jenis Kegiatan...">
                    </div>
                    <div class="form-group">
                        <label for="title">Tahun Mulai</label>
                        <input class="form-control" type="number" name="year_start">
                    </div>
                    <div class="form-group">
                        <label for="title">Tahun Selesai</label>
                        <input class="form-control" type="number" name="year_end">
                    </div>
                    <div class="form-group">
                        <label for="title">Manfaat yang diperoleh</label>
                        <textarea id="benefit" name="benefit" rows="7" class="form-control" placeholder="Write your message.."></textarea>
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