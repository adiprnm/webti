@extends('layouts.no_banner')

@section('page_title')
	Kurikulum
@endsection

@section('title')
		<h3 id="hightitle">Kurikulum</h3>
		<h5 id="lowtitle">Kurikulum</h5>
@endsection

@section('content')
	<div style="z-index: 2; margin-top: 20px;" class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--12-col-phone" style="margin-top: 40px;">
			<div class="panel-group" id="accordion">
			  @foreach($semesters as $index => $semester)
			  <div class="panel panel-default">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a style="z-index: 4;" data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $index+1 }}">
			        @foreach ($semester as $sm)
							{{ $sm->semester_desc }}
							@endforeach
							</a>
			      </h4>
			    </div>
			    <div id="collapse{{ $index+1 }}" class="panel-collapse collapse">
			      <div class="panel-body">
			      	<table id="myTable" class="table table-bordered" style="margin-top: 0px;">
			      		<thead>
			      			<th>Kode Matkul</th>
			      			<th>Nama Matkul</th>
			      			<th>Jumlah SKS</th>
			      		</thead>
			      		<tbody>
									@foreach($semester as $sm)
										@foreach($sm->curricula as $curr)
											<tr>
												<td>{{ $curr->course_code }}</td>
												<td>{{ $curr->course_name }}</td>
												<td>{{ $curr->sks }}</td>
											</tr>
										@endforeach
									@endforeach
			      		</tbody>
			      	</table>
			      </div>
			    </div>
			  </div>
				@endforeach
			</div>
		</div>
@endsection
		
		