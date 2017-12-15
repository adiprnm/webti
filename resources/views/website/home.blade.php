@extends('layouts.website')

@section('page_title')
	Home
@endsection

@section('title')
	<h3 id="hightitle">Home</h3>
	<h5 id="lowtitle">Home</h5>
@endsection

@section('content')
	@foreach($news as $n)
	<div class="mdl-cell mdl-cell--4-col mdl-cell--3-col-tablet mdl-cell--6-col-phone" id="card-panel">
		<div class="card-square mdl-card">
			<div class="mdl-card__media">
				<img id="foto" src="{{ asset('cover_url') . '/' . $n->cover_url }}">
			</div>
			<p style="font-size: 9pt; padding-left: 0; padding-bottom: 0; margin-bottom: 0;"><strong>{{$n->published_date}}</strong></p>
			<div class="mdl-card__supporting-text">
				<h6 style="padding: 0; margin-top: 0;"><a href="/news_detail/{{ $n->slug }}">{{ $n->title }}</a></h6>
				{!! $n->body !!}
				<p style="margin-top: 30px; padding: 0;"><a href="/news_detail/{{ $n->slug }}">Baca selengkapnya</a></p>
			</div>
		</div>
	</div>
	@endforeach
@endsection

{{--  @section('pagination')
		<center>
				<div class="pagination">
						<a  href="#">&laquo;</a>
						<a href="#">1</a>
						<a class="active" href="#">2</a>
						<a href="#">3</a>
						<a href="#">4</a>
						<a href="#">5</a>
						<a href="#">6</a>
						<a href="#">&raquo;</a>
				</div>
		</center>
@endsection  --}}