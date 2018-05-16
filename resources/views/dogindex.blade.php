@extends('welcome')

@section('content')

<div class="dog-index">
	
	@foreach($dogLinks as $dogLink)
	<img src="{{ asset($dogLink) }}">



	@endforeach




</div>

@endsection