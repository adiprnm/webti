@extends('layouts.dashboard')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Edit Pengabdian</h1>
    </div>
</div>

<form method="post" action="{{ route('devotion.update', $devotion->id) }}">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-8">
                    <div class="form-group">
                        <label for="title">Judul Pengabdian</label>
                        <input class="form-control" type="text" name="devotion_title" value="{{ $devotion->devotion_title }}">
                    </div>
                    <div class="form-group">
                        <label for="title">Deskripsi Pengabdian</label>
                        <textarea id="benefit" name="devotion_desc" rows="7" class="form-control">{{ $devotion->devotion_desc }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="title">Tahun Pengabdian</label>
                        <input class="form-control" type="number" name="devotion_year" value="{{ $devotion->devotion_year }}">
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