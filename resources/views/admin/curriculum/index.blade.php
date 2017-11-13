@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Kurikulum</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <a href="{{ route('curriculum.create') }}"><button style="margin-bottom: 20px;" class="btn btn-success btn-md pull-right">Tambah Kurikulum</button></a>
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
                            <th>Kode Mata Kuliah</th>
                            <th>Nama Mata Kuliah</th>
                            <th> Jumlah SKS</th>
                            <th> Semester</th>
                            <th width="75">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($curriculums as $curr)
                        <tr>
                            <td>{{ $curr->course_code }}</td>
                            <td>{{ $curr->course_name }}</td>
                            <td>{{ $curr->sks }}</td>
                            <td>{{ $curr->semester->semester_desc }}</td>
                            <td>
                                <form class="form-inline" method="post" action="{{ route('curriculum.destroy', $curr->id) }}">
                                    {{ csrf_field() }}
                                    <a href="{{ route('curriculum.edit', $curr->id) }}"><button type="button" class="btn btn-warning btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>&nbsp;
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