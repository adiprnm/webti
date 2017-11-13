@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Penelitian</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <a href="{{ route('research.create') }}"><button style="margin-bottom: 20px;" class="btn btn-success btn-md pull-right">Tambah Penelitian</button></a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))
            <div class="alert alert-{{ $msg }}">
                {{ Session::get('alert-' . $msg) }}
            </div> 
            @endif
            @endforeach
            
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="200">Judul</th>
                            <th width="200">Nama Dosen</th>
                            <th width="250">Dipublikasikan pada</th>
                            <th width="100">Tahun</th>
                            <th width="100">Tingkat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($researches as $res)
                        <tr>
                            <td>{{ $res->research_title }}</td>
                            <td>{{ $res->lecturer_name }}</td>
                            <td>{{ $res->published_at }}</td>
                            <td>{{ $res->year_published }}</td>
                            <td>{{ $res->level }}</td>
                            <td>
                                <form class="form-inline" method="post" action="{{ route('research.destroy', $res->id) }}">
                                    {{ csrf_field() }}
                                    <a href="{{ route('research.edit', $res->id) }}"><button type="button" class="btn btn-warning btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>&nbsp;
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