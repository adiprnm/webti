@extends('layouts.website')

@section('page_title')
	Daftar Dosen
@endsection


@section('content')
	<div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--12-col-phone" style="margin-top: 40px;">
		<table id="myTable" class="table table-bordered" style="margin-top: 0px;">
			<thead>
				<th>Nama Dosen</th>
			  	<th>Pendidikan</th>
			  	<th>Bidang Riset</th>
			</thead>
			<tbody>
				@foreach($lecturer_lists as $ll)
				<tr>
					<td><a href="/sdm/dosen/{{ $ll->lecturer->id }}">{{ $ll->lecturer->lecturer_name }}</a></td>
					<td>{{ $ll->education }}</td>
					<td>{{ $ll->research_field }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection
		
		