@extends('layouts.no_banner')

@section('page_title')
	Search result for : {{ $keyword }}
@endsection

@section('title')
	<h3 id="hightitle">Search result for : {{ $keyword }}</h3>
	<h5 id="lowtitle">Search result for : {{ $keyword }}</h5>
@endsection

@section('content')
	{{--  <div style="z-index: 2;" class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--12-col-phone" style="margin-top: 40px;">  --}}
		@if(!empty($error))
		<div class="form-group">
			<p style="padding-left: 0">{!! $error !!}</p>
		</div>
		@endif
		@foreach($results as $result)
		<div class="form-group">
			<h4><a style="z-index: 4;" href="/news_detail/{{ $result->slug }}">{!! $result->title !!}</a></h4>
			<p>{!! $result->body !!}</p>
			<p style="margin-top: 20px;"><a style="z-index: 4;" href="/news_detail/{{ $result->slug }}">Baca selengkapnya...</a></p>
		</div>
		@endforeach
	{{--  </div>  --}}
@endsection
		
		