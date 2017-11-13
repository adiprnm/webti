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
        <div class="form-group">
            <h1 class="page-header">Edit Halaman<button data-toggle="modal" data-target="#myModal" class="btn btn-danger btn-sm pull-right">Delete</button></h1>
        </div>
    </div>
</div>

 @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))
            <div class="alert alert-{{ $msg }}">
                {{ Session::get('alert-' . $msg) }}
            </div> 
            @endif
            @endforeach

<form id="form1" method="post" action="{{ route('page.update', $page) }}">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input class="form-control" type="text" name="title" placeholder="News title" value="{{ $page->title }}">
                        @if ($errors->has('title'))
                            <span class="help-block">
                                <strong class="my-error-message">{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="body">Isi</label>
                        <textarea id="messageArea" name="body" rows="7" class="form-control ckeditor" placeholder="Write your message..">{{ $page->body }}</textarea>
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
                                <option value="{{ $pc->id }}" {{ $pc->id == $page->page_category_id ? "selected" : "" }}>{{ $pc->category_name }}</option>
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

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                Apakah Anda ingin menghapus halaman ini?
            </div>
            <div class="modal-footer">
                <form method="post" action="{{ route('page.destroy', $page) }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                    <button type="submit" class="btn btn-primary">Ya</button>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

@endsection