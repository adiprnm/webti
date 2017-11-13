@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Pengabdian kepada Masyarakat</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <a href="{{ route('devotion.create') }}"><button style="margin-bottom: 20px;" class="btn btn-success btn-md pull-right">Tambah Pengabdian</button></a>
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
                            <th>Judul Pengabdian</th>
                            <th>Deskripsi</th>
                            <th>Tahun Pengabdian</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($devotions as $dev)
                        <tr>
                            <td>{{ $dev->devotion_title }}</td>
                            <td>{{ $dev->devotion_desc }}</td>
                            <td>{{ $dev->devotion_year }}</td>
                            <td>
                                <form class="form-inline" method="post" action="{{ route('devotion.destroy', $dev->id) }}">
                                    {{ csrf_field() }}
                                    <a href="{{ route('devotion.edit', $dev->id) }}"><button type="button" class="btn btn-warning btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>&nbsp;
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