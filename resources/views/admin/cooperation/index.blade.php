@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Kerjasama</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <a href="{{ route('coop.create') }}"><button style="margin-bottom: 20px;" class="btn btn-success btn-md pull-right">Tambah Kerjasama</button></a>
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
                            <th width="150">Nama Instansi</th>
                            <th width="200">Jenis Kegiatan</th>
                            <th width="100">Tahun Mulai</th>
                            <th width="130">Tahun Selesai</th>
                            <th width="250">Manfaat yang Diperoleh</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cooperations as $coop)
                        <tr>
                            <td>{{ $coop->instance_name }}</td>
                            <td>{{ $coop->event_type }}</td>
                            <td>{{ $coop->year_start }}</td>
                            <td>{{ $coop->year_end }}</td>
                            <td>{{ $coop->benefit }}</td>
                            <td>
                                <form class="form-inline" method="post" action="{{ route('coop.destroy', $coop->id) }}">
                                    {{ csrf_field() }}
                                    <a href="{{ route('coop.edit', $coop->id) }}"><button type="button" class="btn btn-warning btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>&nbsp;
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