@extends('layouts.dashboard')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Tambah Kurikulum Baru</h1>
    </div>
</div>

<form method="post" action="{{ route('curriculum.store') }}">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-8">
                    <div class="form-group">
                        <label for="title">Kode Mata Kuliah</label>
                        <input class="form-control" type="text" name="course_code" value="{{ old('course_code') }}">
                        
                        @if ($errors->has('course_code'))
                            <span class="help-block">
                                <strong class="my-error-message">{{ $errors->first('course_code') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="title">Nama Mata Kuliah</label>
                        <input class="form-control" type="text" name="course_name" value="{{ old('course_name') }}">
                        
                        @if ($errors->has('course_name'))
                            <span class="help-block">
                                <strong class="my-error-message">{{ $errors->first('course_name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="title">Jumlah SKS</label>
                        <input class="form-control" type="number" name="sks" value="{{ old('sks') }}">
                        
                        @if ($errors->has('sks'))
                            <span class="help-block">
                                <strong class="my-error-message">{{ $errors->first('sks') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="sel1">Semester</label>
                        <select class="form-control" name="semester_id">
                            @foreach($semesters as $semester)
                            <option value="{{ $semester->id }}">{{ $semester->semester_desc }}</option>
                            @endforeach
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