@extends('layouts.no_banner')

@section('page_title')
	@foreach($page as $pg)
		{{ $pg->title }}
	@endforeach
@endsection

@section('title')
	@foreach($page as $pg)
		<h3 id="hightitle">{{ $pg->title }}</h3>
		<h5 id="lowtitle">{{ $pg->title }}</h5>
	@endforeach
@endsection

@section('content')	
	@foreach($page as $pg)
		{!! $pg->body !!}
	@endforeach
@endsection
