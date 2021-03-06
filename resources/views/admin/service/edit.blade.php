@extends('layouts.dashboard')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Edit Layanan</h1>
    </div>
</div>

<form method="post" action="{{ route('service.update', $service) }}">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-8">
                    <div class="form-group">
                        <label for="title">Jenis Layanan</label>
                        <input class="form-control" type="text" name="service_type" value="{{ $service->service_type }}">
                    </div>
                    <div class="form-group">
                        <label for="sel1">Implementasi Layanan</label>
                        <textarea name="service_implementation" class="form-control" rows="4">{{ $service->service_implementation }}</textarea>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" value="Publish">
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>


@endsection