@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">News</h1>
            
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))
            <div class="alert alert-{{ $msg }}">
                {{ Session::get('alert-' . $msg) }}
            </div> 
            @endif
            @endforeach
            
            <div class="table-responsive">
                <a href="{{ route('news.create') }}"><button type="button" class="btn btn-success pull-right">Buat Berita Baru</button></a>
                <h4>Telah dipublikasikan</h4>
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Judul Berita</th>
                            <th>Kategori</th>
                            <th>Tag</th>
                            <th width="75">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($published as $pb)
                        <tr>
                            <td>{{ $pb->title }}</td>
                            <td>
                                @foreach($pb->category as $category)
                                    {{ $category->category_name }}, 
                                @endforeach
                            </td>    
                            <td>
                                @foreach($pb->tag as $tag)
                                    {{ $tag->tag_name }}, 
                                @endforeach
                            </td>
                            <td>
                                <form class="form-inline" method="post" action="{{ route('news.destroy', $pb) }}">
                                    {{ csrf_field() }}
                                    <a href="{{ route('news.edit', $pb) }}"><button type="button" class="btn btn-warning btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>&nbsp;
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-times-circle-o" aria-hidden="true"></i></button>
                                </form>
                            </td>
                        @endforeach
                    </tbody>
                </table>

                <div class="table-responsive">
                <h4>Draft</h4>
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Judul Berita</th>
                            <th>Kategori</th>
                            <th>Tag</th>
                            <th width="75">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($drafted as $drft)
                        <tr>
                            <td>{{ $drft->title }}</td>
                            <td>
                                @foreach($drft->category as $category)
                                    {{ $category->category_name }}, 
                                @endforeach
                            </td>    
                            <td>
                                @foreach($drft->tag as $tag)
                                    {{ $tag->tag_name }}, 
                                @endforeach
                            </td>
                            <td>
                                <form class="form-inline" method="post" action="{{ route('news.destroy', $drft) }}">
                                    {{ csrf_field() }}
                                    <a href="{{ route('news.edit', $drft) }}"><button type="button" class="btn btn-warning btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>&nbsp;
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-times-circle-o" aria-hidden="true"></i></button>
                                </form>
                            </td>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
@endsection