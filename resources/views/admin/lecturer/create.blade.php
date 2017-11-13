@extends('layouts.dashboard')

@section('content')

<script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>

<script type="text/javascript">
    CKEDITOR.replace('messageArea',
    {
        customConfig: 'config.js',
        toolbar: 'simple'
    });
</script>

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
                        <input class="form-control" type="text" name="lecturer_name" value="{{ old('lecturer_name') }}">
                    </div>
                    <div class="form-group">
                        <label for="title">Pendidikan</label>
                        <textarea name="education" class="form-control" cols="4">{{ old('education') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="title">Bidang Riset</label>
                        <textarea name="research_field" class="form-control" cols="4">{{ old('research_field') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="title">Ruangan Dosen</label>
                        <input class="form-control" type="text" name="lecturer_room" value="{{ old('lecturer_room') }}">
                    </div>
                    <div class="form-group">
                        <label for="title">Email Dosen</label>
                        <input class="form-control" type="text" name="lecturer_email" value="{{ old('lecturer_email') }}">
                    </div>
                    <div class="form-group">
                        <label for="title">No. Telepon</label>
                        <input class="form-control" type="text" name="lecturer_phone" value="{{ old('lecturer_phone') }}">
                    </div>
                    <div class="form-group">
                        <label for="title">Website</label>
                        <input class="form-control" type="text" name="lecturer_website" value="{{ old('lecturer_website') }}">                        
                    </div>
                    <div class="form-group">
                        <label for="sel1">Foto Dosen</label>
                        <input type="file" name="lecturer_photo">
                    </div>
                    <div class="form-group">
                        <label for="body">Pengajaran</label>
                        <textarea id="messageArea" name="lecturer_teaching" rows="7" class="form-control ckeditor">{{ old('lecturer_teaching') }}</textarea>    
                    </div>
                    <div class="form-group">
                        <label for="body">Penelitian</label>
                        <textarea id="messageArea" name="lecturer_research" rows="7" class="form-control ckeditor">{{ old('lecturer_research') }}</textarea>    
                    </div>
                    <div class="form-group">
                        <label for="body">Pengabdian</label>
                        <textarea id="messageArea" name="lecturer_devotion" rows="7" class="form-control ckeditor">{{ old('lecturer_devotion') }}</textarea>    
                    </div>
                    <div class="form-group">
                        <label for="body">Penunjang</label>
                        <textarea id="messageArea" name="lecturer_support" rows="7" class="form-control ckeditor">{{ old('lecturer_support') }}</textarea>    
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