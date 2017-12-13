@extends('layouts.no_banner')

@section('page_title')
	Detail Event
@endsection

@section('title')
		<h3 id="hightitle">Detail Event</h3>
		<h5 id="lowtitle">Detail Event</h5>
@endsection

@section('content')	
	<div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--12-col-phone" style="margin-top: 0px;">
	@foreach($event as $evnt)
		<h6 style="color: #ff8400; font-weight: 2px;">Judul Event</h6>
		<p>{{ $evnt->event_title }}</p>
		<h6 style="color: #ff8400; font-weight: 2px;">Tanggal Event</h6>
		<p>{{ date_format(date_create($evnt->event_date), "F dS, Y") }}</p>
		<h6 style="color: #ff8400; font-weight: 2px;">Lokasi Event</h6>
		<p>{{ $evnt->event_location }}</p>
		<h6 style="color: #ff8400; font-weight: 2px;">Deskripsi Event</h6>
		<p>{!! $evnt->event_desc !!}</p>
	@endforeach
	</div>
@endsection
