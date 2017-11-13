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
        <h1 class="page-header">Buat Halaman Baru</h1>
    </div>
</div>

<form method="post" action="{{ route('page.store') }}">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input class="form-control" type="text" name="title" placeholder="News title">
                        @if ($errors->has('title'))
                            <span class="help-block">
                                <strong class="my-error-message">{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    
                    </div>
                    <div class="form-group">
                        <label for="body">Isi</label>
                        <textarea id="messageArea" name="body" rows="7" class="form-control ckeditor" placeholder="Write your message.."></textarea>
                        @if ($errors->has('body'))
                            <span class="help-block">
                                <strong class="my-error-message">{{ $errors->first('body') }}</strong>
                            </span>
                        @endif
                    
                    </div>
                    <div class="form-group">
                        <label for="select">Kategori Halaman</label>
                        <select class="form-control" id="sel1" name="page_category">
                            @foreach($page_categories as $pc)
                                <option value="{{ $pc->id }}">{{ $pc->category_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="page_status" value="Publish">
                        <input class="btn btn-default" type="submit" name="page_status" value="Save as Draft">
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>


@endsection