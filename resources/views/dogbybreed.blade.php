@extends('welcome')

@section('content')

<div class="col-md-4">
	@foreach($breedList as $breed)
	 {{ $breed }}
	@endforeach
</div>

@endsection