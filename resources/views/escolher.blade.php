@extends('master')

@section('css')
	@parent
	<link rel="stylesheet" href="{{ asset('css/escolher.css') }}">
@endsection

@section('content')
	<div class="escolher-carousel">
	  	<div><img src="http://placehold.it/400x920/323232/fefefe" alt=""></div>
	  	<div><img src="http://placehold.it/400x920" alt=""></div>	
	  	<div><img src="http://placehold.it/400x920/323232/fefefe" alt=""></div>
	  	<div><img src="http://placehold.it/400x920" alt=""></div>
	  	<div><img src="http://placehold.it/400x920/323232/fefefe" alt=""></div>
	  	<div><img src="http://placehold.it/400x920" alt=""></div>
	  	<div><img src="http://placehold.it/400x920/323232/fefefe" alt=""></div>
	  	<div><img src="http://placehold.it/400x920" alt=""></div>
	</div>
@endsection

@section('js')
	@parent
	<script src="{{ asset('js/escolher.js') }}" type="text/javascript"></script>
@endsection