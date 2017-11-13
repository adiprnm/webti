@extends('layouts.website')

@section('page_title')
	Prestasi
@endsection

@section('title')
	<h3 id="hightitle">Prestasi</h3>
	<h5 id="lowtitle">Prestasi</h5>
@endsection

@section('content')
	<div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--12-col-phone" style="margin-top: 40px;">
		<table id="myTable" class="table table-bordered" style="margin-top: 0px;">
			<thead>
				<th>Nama Mahasiswa</th>
			  	<th>Nama Kegiatan</th>
			  	<th>Tingkat</th>
			  	<th>Prestasi yang Dicapai</th>
			</thead>
			<tbody>
				@foreach($achievements as $achievement)
				<tr>
					<td>{{ $achievement->student_name }}</td>
					<td>{{ $achievement->event_name }}</td>
					<td>{{ $achievement->event_level }}</td>
					<td>{{ $achievement->description }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection
		
		