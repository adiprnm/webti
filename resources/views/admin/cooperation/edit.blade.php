@extends('layouts.dashboard')

@section('content')


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Edit Kerjasama</h1>
    </div>
</div>

<form method="post" action="{{ route('coop.update', $cooperation->id) }}">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-8">
                    <div class="form-group">
                        <label for="title">Nama Instansi</label>
                        <input class="form-control" type="text" name="instance_name" placeholder="Nama Instansi..." value="{{ $cooperation->instance_name }}">
                    </div>
                    <div class="form-group">
                        <label for="title">Jenis Kegiatan</label>
                        <input class="form-control" type="text" name="event_type" placeholder="Jenis Kegiatan..." value="{{ $cooperation->event_type }}">
                    </div>
                    <div class="form-group">
                        <label for="title">Tahun Mulai</label>
                        <input class="form-control" type="number" name="year_start" value="{{ $cooperation->year_start }}">
                    </div>
                    <div class="form-group">
                        <label for="title">Tahun Selesai</label>
                        <input class="form-control" type="number" name="year_end" value="{{ $cooperation->year_end }}">
                    </div>
                    <div class="form-group">
                        <label for="title">Manfaat yang diperoleh</label>
                        <textarea id="benefit" name="benefit" rows="7" class="form-control" placeholder="Write your message..">{{ $cooperation->benefit }}</textarea>
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