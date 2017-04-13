@extends('master')

@section('css')
	@parent
	<link rel="stylesheet" href="{{ asset('css/tutorial.css') }}">
@endsection

@section('content')

	@if(\Auth::user()->tutorial)
		@component('component.message')

			@slot('icon')
				thumbs outline up
			@endslot

			@slot('type')
				info
			@endslot

			@slot('title')
				Você ja completou o tutorial!
			@endslot
		    
			Caso queira pular ele, <a href="{{ url('/dashboard') }}"> clique aqui.</a>

		@endcomponent
	@endif

	<div style="position:fixed;top:50px;left:50px;color:white;z-index:999;" id="callbacksDiv"></div>

	<div id="pagepiling">
	    <div class="section" id="section1">
	    	
	    	<div class="ui text container">
	      		<h1 class="ui header">
	       			 Tutorial
	      		</h1>
	      		<h2>Pegue algumas dicas sobre o jogo!</h2>
	      		<a class="ui positive big animated button" tabindex="0">
	      		  <div class="hidden content">Inicial tutorial</div>
	      		  <div class="visible content">
	      		    Com certeza!
	      		  </div>
	      		</a>

	      		{{-- Completa o tutorial --}}
	      		{{ Form::open(['action' => 'TutorialController@finish', 'class' => 'form-same-line']) }}
	      			{{ Form::token() }}
		      		<button type="submit" class="ui big animated fade button tutorial-complete" tabindex="0">
		      			<div class="visible content">Deixa pra lá...</div>
		      		  	<div class="hidden content">
		      		    	Começar o jogo
		      		  	</div>
		      		</button>
		      	{{ Form::close() }}
	    	</div>

	    </div>

	    <div class="section" id="section2">
	    	
	    	<div class="ui inverted text container">
	      		<h1 class="ui header">
	       			 Atalhos do teclado
	      		</h1>	      		
	    	</div>

	    </div>
	    <div class="section" id="section4">
	    	<div class="intro">
	    	
	    		<div class="ui inverted text container">
	    	  		<h1 class="ui header">
	    	   			 Tutorial
	    	  		</h1>
	    		</div>

	    	</div>
	    </div>
	</div>

	{{-- <ul id="menu">
		<div data-menuanchor="page1" class="active"><a href="#page1">Page 1</a></div>
		<li data-menuanchor="page2"><a href="#page2">Page 2</a></li>
		<li data-menuanchor="page3"><a href="#page3">Page 3</a></li>
	</ul> --}}

@endsection

@section('js')
	@parent
	<script src="{{ asset('js/tutorial.js') }}" type="text/javascript"></script>

	<script type="text/javascript">
		$('.tutorial-complete').on('click', function(event) {
			event.preventDefault();

			$().achievement_alert({
				duration: 400,					// Duration for fade animation in milliseconds
			    display: 3000,					// How long the achievement text is displayed in milliseconds
			    title: 'Achievement', 	// Title of alert box
			    points : '350',					// Number of points to be displayed
			    currency : 'P', 				// Points description
			    name : 'Achievement Name', 		// Name of achievement
			    icon : 'fa-trophy', 			// Icon to be shown (uses font awesome)
			    sound : 'F' 					// Play achievement sound or not set to either T or F
			});
		});
	</script>
@endsection