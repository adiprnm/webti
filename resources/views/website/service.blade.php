@extends('layouts.website')

@section('page_title')
	Layanan
@endsection

@section('title')
	<h3 id="hightitle">Layanan</h3>
	<h5 id="lowtitle">Layanan</h5>
@endsection

@section('content')
	<div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--12-col-phone" style="margin-top: 40px;">
		<table id="myTable" class="table table-bordered" style="margin-top: 0px;">
			<thead>
				<th>Jenis Layanan</th>
			  	<th>Implementasi Layanan</th>
			</thead>
			<tbody>
				@foreach($services as $service)
				<tr>
					<td>{{ $service->service_type }}</td>
					<td>{{ $service->service_implementation }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection
		
		