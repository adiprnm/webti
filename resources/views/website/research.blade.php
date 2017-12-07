@extends('layouts.no_banner')

@section('page_title')
	Penelitian
@endsection

@section('title')
	<h3 id="hightitle">Penelitian</h3>
	<h5 id="lowtitle">Penelitian</h5>
@endsection

@section('content')
	<div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--12-col-phone" style="margin-top: 40px;">
		<table id="myTable" class="table table-bordered" style="margin-top: 0px;">
			<thead>
				<th>Judul</th>
			  	<th>Nama Dosen</th>
			  	<th>Dipublikasikan pada</th>
			  	<th>Tahun</th>
			  	<th>Tingkat</th>
			</thead>
			<tbody>
				@foreach($researches as $research)
				<tr>
					<td>{{ $research->research_title }}</td>
					<td>{{ $research->lecturer_name }}</td>
					<td>{{ $research->published_at }}</td>
					<td>{{ $research->year_published }}</td>
					<td>{{ $research->level }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection
		
		