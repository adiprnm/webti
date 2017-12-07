@extends('layouts.no_banner')

@section('page_title')
	Pengabdian
@endsection

@section('title')
	<h3 id="hightitle">Pengabdian</h3>
	<h5 id="lowtitle">Pengabdian</h5>
@endsection

@section('content')
	<div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--12-col-phone" style="margin-top: 40px;">
		<table id="myTable" class="table table-bordered" style="margin-top: 0px;">
			<thead>
				<th>Judul Pengabdian</th>
			  	<th>Deskripsi</th>
			  	<th>Tahun Pengabdian</th>
			</thead>
			<tbody>
				@foreach($devotions as $devotion)
				<tr>
					<td>{{ $devotion->devotion_title }}</td>
					<td>{{ $devotion->devotion_desc }}</td>
					<td>{{ $devotion->devotion_year }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection
		
		