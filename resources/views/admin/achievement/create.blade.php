@extends('layouts.dashboard')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Tambah Prestasi Baru</h1>
    </div>
</div>

<form method="post" action="{{ route('achievement.store') }}">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-8">
                    <div class="form-group">
                        <label for="title">Nama Mahasiswa</label>
                        <input class="form-control" type="text" name="student_name" >
                        @if ($errors->has('student_name'))
                            <span class="help-block">
                                <strong class="my-error-message">{{ $errors->first('student_name') }}</strong>
                            </span>
                        @endif
                    
                    </div>
                    <div class="form-group">
                        <label for="title">Nama Kegiatan</label>
                        <input class="form-control" type="text" name="event_name">
                        @if ($errors->has('event_name'))
                            <span class="help-block">
                                <strong class="my-error-message">{{ $errors->first('event_name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="title">Tingkat</label>
                        <select class="form-control" name="event_level">
                            <option value="Lokal">Lokal</option>
                            <option value="Wilayah">Wilayah</option>
                            <option value="Nasional">Nasional</option>
                            <option value="Internasional">Internasional</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sel1">Prestasi yang Dicapai</label>
                        <textarea name="description" class="form-control" rows="4"></textarea>
                        @if ($errors->has('description'))
                            <span class="help-block">
                                <strong class="my-error-message">{{ $errors->first('description') }}</strong>
                            </span>
                        @endif
                    
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