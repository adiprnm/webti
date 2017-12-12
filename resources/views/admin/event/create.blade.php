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
            

<form method="post" action="{{ route('event.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="title">Judul Event</label>
                        <input class="form-control" type="text" name="event_title" value="{{ old('event_title') }}" autofocus>
                        @if ($errors->has('title'))
                            <span class="help-block">
                                <strong class="my-error-message">{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="title">Tanggal Event</label>
                        <input class="form-control" type="date" name="event_date" value="{{ old('event_date') }}" autofocus>
                        @if ($errors->has('title'))
                            <span class="help-block">
                                <strong class="my-error-message">{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="title">Lokasi Event</label>
                        <input class="form-control" type="text" name="event_location" value="{{ old('event_location') }}" autofocus>
                        @if ($errors->has('title'))
                            <span class="help-block">
                                <strong class="my-error-message">{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                    
                    <div class="form-group">
                        <label for="body">Deskripsi</label>
                        <textarea id="messageArea" name="event_desc" rows="7" class="form-control ckeditor">{{ old('event_desc') }}</textarea>
                        @if ($errors->has('body'))
                            <span class="help-block">
                                <strong class="my-error-message">{{ $errors->first('body') }}</strong>
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