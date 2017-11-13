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
        <h1 class="page-header">Buat Berita</h1>
    </div>
</div>

@foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))
            <div class="alert alert-{{ $msg }}">
                {{ Session::get('alert-' . $msg) }}
            </div> 
            @endif
            @endforeach
            

<form method="post" action="{{ route('news.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input class="form-control" type="text" name="title" value="{{ old('title') }}" autofocus>
                        @if ($errors->has('title'))
                            <span class="help-block">
                                <strong class="my-error-message">{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="title">Cover</label>
                        <input type="file" name="cover_url" value="{{ old('cover_url') }}">
                        @if ($errors->has('title'))
                            <span class="help-block">
                                <strong class="my-error-message">{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="body">Isi</label>
                        <textarea id="messageArea" name="body" rows="7" class="form-control ckeditor">{{ old('body') }}</textarea>
                        @if ($errors->has('body'))
                            <span class="help-block">
                                <strong class="my-error-message">{{ $errors->first('body') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="news_status" value="Publish">
                        <input class="btn btn-default" type="submit" name="news_status" value="Save as Draft">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="category">Kategori</label>
                        @foreach($categories as $category)
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="categories[]" value="{{ $category->id }}">{{ $category->category_name }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                   <div class="form-group">
                        <label for="category">Tag</label>
                        @foreach($tags as $tag)
                        <div class="checkbox">
                            <label class="checkbox-inline">
                                <input type="checkbox" name="tags[]" value="{{ $tag->id }}">{{ $tag->tag_name }}
                            </label>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>


@endsection