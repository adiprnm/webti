@extends('layouts.no_banner')

@section('page_title')
	Kerja Sama
@endsection

@section('title')
	<h3 id="hightitle">Kerja Sama</h3>
	<h5 id="lowtitle">Kerja Sama</h5>
@endsection

@section('content')
	<div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--12-col-phone" style="margin-top: 40px;">
		<table id="myTable" class="table table-bordered" style="margin-top: 0px;">
			<thead>
				<th>Nama Instansi</th>
			  	<th>Jenis Kegiatan</th>
			  	<th>Tahun Mulai</th>
			  	<th>Tahun Selesai</th>
			  	<th>Manfaat yang Diperoleh</th>
			</thead>
			<tbody>
				@foreach($cooperations as $cooperation)
				<tr>
					<td>{{ $cooperation->instance_name }}</td>
					<td>{{ $cooperation->event_type }}</td>
					<td>{{ $cooperation->year_start }}</td>
					<td>{{ $cooperation->year_end }}</td>
					<td>{{ $cooperation->benefit }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection
		
		