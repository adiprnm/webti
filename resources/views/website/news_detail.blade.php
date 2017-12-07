@extends('layouts.no_banner')

@section('title')
	@foreach($news as $n)
		<h3 id="hightitle">{{ $n->title }}</h3>
		<h5 id="lowtitle">{{ $n->title }}</h5>
	@endforeach
@endsection

@section('content')	
	@foreach($news as $n)
		<p style="font-size: 9pt; color: grey;">Published on <strong>{{ $n->published_date }}</strong> by <strong>{{ $n->user->fullname }}</strong></p>
		{!! $n->body !!}

		
		<div class="form-group">
		Category &nbsp; : 
		@foreach($n->category as $cat)
			<strong>{{ $cat->category_name }}</strong>,
		@endforeach
		<br>
		Tags &nbsp; : 
		@foreach($n->tag as $tag)
			<strong>{{ $tag->tag_name }}</strong>,
		@endforeach
		
		</div>

 	
	@endforeach
@endsection
