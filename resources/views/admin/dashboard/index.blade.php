@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))
            <div class="alert alert-{{ $msg }}">
                {{ Session::get('alert-' . $msg) }}
            </div> 
            @endif
            @endforeach
            
            <div class="row">
                <div class="col-lg-6">
                    <h3>Halaman <a href="{{ route('page.create') }}"><button class="btn btn-primary btn-xs pull-right">Tambah Halaman</button></a></h3>
                    @foreach($page_categories as $page_category)
                    <h5>{{ $page_category->category_name }}</h5>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Nama Halaman</th>
                                <th>Status</th>
                                <th width="75">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($page_category->page as $pg)
                                <tr>
                                    <td>{{ $pg->title }}</td>
                                    <td>{{ $pg->page_status == 1 ? "Dipublikasikan" : "Draft" }}</td>
                                    <td>
                                        <form class="form-inline" method="post" action="{{ route('page.destroy', $pg) }}">
                                            {{ csrf_field() }}
                                            <a href="{{ route('page.edit', $pg) }}"><button type="button" class="btn btn-warning btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>&nbsp;
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-times-circle-o" aria-hidden="true"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endforeach
                </div>
                <div class="col-lg-6">
                    <h3>Posting Terbaru<a href="{{ route('news.create') }}"><button class="btn btn-primary btn-xs pull-right">Tambah Posting</button></a></h3>
                    <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Judul Berita</th>
                            <th width="75">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($news_list as $news)
                            <tr>
                                <td>{{ $news->title }}</td>
                                <td>
                                    <form class="form-inline" method="post" action="{{ route('news.destroy', $news) }}">
                                        {{ csrf_field() }}
                                        <a href="{{ route('news.edit', $news) }}"><button type="button" class="btn btn-warning btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>&nbsp;
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-times-circle-o" aria-hidden="true"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                </div>
            </div>
        </div>
    </div>
@endsection