@extends('layouts.website')

@section('page_title')
	Search result for : {{ $keyword }}
@endsection

@section('title')
	<h3 id="hightitle">Search result for : {{ $keyword }}</h3>
	<h5 id="lowtitle">Search result for : {{ $keyword }}</h5>
@endsection

@section('content')
	<div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--12-col-phone" style="margin-top: 40px;">
		@foreach($results as $result)
		<div class="form-group">
			<h4><a href="/news_detail/{{ $result->slug }}">{{ $result->title }}</a></h4>
			<p style="padding-left: 0">{{ $result->body }}</p>
			<p style="padding-left:0; padding-top: 0;"><a href="/news_detail/{{ $result->slug }}">Baca selengkapnya...</a></p>
		</div>
		@endforeach
	</div>
@endsection
		
		