@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dosen</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <a href="{{ route('lecturer.create') }}"><button style="margin-bottom: 20px;" class="btn btn-success btn-md pull-right">Tambah Dosen</button></a>
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
                            <th>Nama Dosen</th>
                            <th>Email</th>
                            <th>No. Telepon</th>
                            <th>Website</th>
                            <th>Foto Dosen</th>
                            <th width="75">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($lecturers as $lecturer)
                        <tr>
                            <td>{{ $lecturer->lecturer_name }}</td>
                            <td>{{ $lecturer->lecturer_email }}</td>
                            <td>{{ $lecturer->lecturer_phone }}</td>
                            <td>{{ $lecturer->lecturer_website }}</td>
                            <td align="center"><img height="120" width="90" src="{{ asset('thumbnails') . '/thumb_' . $lecturer->lecturer_photo }}"></td>
                            <td>
                                <form class="form-inline" method="post" action="{{ route('lecturer.destroy', $lecturer) }}">
                                    {{ csrf_field() }}
                                    <a href="{{ route('lecturer.edit', $lecturer) }}"><button type="button" class="btn btn-warning btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>&nbsp;
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