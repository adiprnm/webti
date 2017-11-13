@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Layanan</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <a href="{{ route('service.create') }}"><button style="margin-bottom: 20px;" class="btn btn-success btn-md pull-right">Tambah Layanan</button></a>
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
                            <th width="250">Jenis Layanan</th>
                            <th width="450">Implementasi Layanan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($services as $service)
                        <tr>
                            <td>{{ $service->service_type }}</td>
                            <td>{{ $service->service_implementation }}</td>
                            <td>
                                <form class="form-inline" method="post" action="{{ route('service.destroy', $service->id) }}">
                                    {{ csrf_field() }}
                                    <a href="{{ route('service.edit', $service->id) }}"><button type="button" class="btn btn-warning btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>&nbsp;
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