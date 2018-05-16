@extends('welcome')

@section('content')

<div class="dog-show">
	<img src="{{ asset($dogLink) }}" width="500" height="400">
</div>

@endsection