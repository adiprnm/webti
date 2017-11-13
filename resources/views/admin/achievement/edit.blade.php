@extends('layouts.dashboard')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Edit Prestasi</h1>
    </div>
</div>

<form method="post" action="{{ route('achievement.update', $achievement ) }}">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-8">
                    <div class="form-group">
                        <label for="title">Nama Mahasiswa</label>
                        <input class="form-control" type="text" name="student_name" value="{{ $achievement->student_name }}">
                        @if ($errors->has('student_name'))
                            <span class="help-block">
                                <strong class="my-error-message">{{ $errors->first('student_name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="title">Nama Kegiatan</label>
                        <input class="form-control" type="text" name="event_name" value="{{ $achievement->event_name }}">
                        @if ($errors->has('event_name'))
                            <span class="help-block">
                                <strong class="my-error-message">{{ $errors->first('event_name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="title">Tingkat</label>
                        <select class="form-control" name="event_level">
                            <option value="Lokal" {{ $achievement->event_level == "Lokal" ? "selected" : "" }}>Lokal</option>
                            <option value="Wilayah" {{ $achievement->event_level == "Wilayah" ? "selected" : "" }}>Wilayah</option>
                            <option value="Nasional" {{ $achievement->event_level == "Nasional" ? "selected" : "" }}>Nasional</option>
                            <option value="Internasional" {{ $achievement->event_level == "Internasional" ? "selected" : "" }}>Internasional</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sel1">Prestasi yang Dicapai</label>
                        <textarea name="description" class="form-control" rows="4">{{ $achievement->description }}</textarea>
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