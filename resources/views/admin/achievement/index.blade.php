@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Prestasi</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <a href="{{ route('achievement.create') }}"><button style="margin-bottom: 20px;" class="btn btn-success btn-md pull-right">Tambah Prestasi</button></a>
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
                            <th>Nama Mahasiswa</th>
                            <th>Nama Kegiatan</th>
                            <th>Tingkat</th>
                            <th>Prestasi yang Dicapai</th>
                            <th width="75">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($achievements as $achievement)
                        <tr>
                            <td>{{ $achievement->student_name }}</td>
                            <td>{{ $achievement->event_name }}</td>
                            <td>{{ $achievement->event_level }}</td>
                            <td>{{ $achievement->description }}</td>
                            <td>
                                <form class="form-inline" method="post" action="{{ route('achievement.destroy', $achievement->id) }}">
                                    {{ csrf_field() }}
                                    <a href="{{ route('achievement.edit', $achievement->id) }}"><button type="button" class="btn btn-warning btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>&nbsp;
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