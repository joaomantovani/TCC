@extends('master')

@section('css')
	@parent
	<link rel="stylesheet" href="{{ asset('css/account.css') }}">
	<style type="text/css" media="screen">
		body {
			background: #ebebeb;
		}
	</style>
@endsection

@section('content')

	@if(\Auth::user()->tutorial)
		@component('component.message')

			@slot('icon')
				bitcoin 
			@endslot

			@slot('type')
				info
			@endslot

			@slot('title')
				Bem vindo ao seu banco
			@endslot

		@endcomponent
	@endif

	<div class="ui container">

		<div class="ui centered grid">

		  <div class="six wide tablet eight wide computer column">

		  		@component('component.card')

		  			@slot('content')
		  				fcenter
		  			@endslot

		  			@slot('class')
		  				big
		  			@endslot
		  			 
		  			  <div class="ui large statistic">
		  			    <div class="value">
		  			      <i class="bitcoin icon"></i> {{ Auth::user()->account->money }}
		  			    </div>
		  			    <div class="label">
		  			      Banco
		  			    </div>
		  			  </div>

		  		@endcomponent

		  		@component('component.card')

		  			@slot('content')
		  				fcenter
		  			@endslot

		  			@slot('class')
		  				small
		  			@endslot
		  			  <div class="ui small statistic">
		  			    <div class="value">
		  			      <i class="pocket small icon"></i> {{ Auth::user()->wallet->money }}
		  			    </div>
		  			    <div class="label">
		  			      Carteira
		  			    </div>
		  			  </div>

		  		@endcomponent

		  </div>

		  <div class="six wide tablet eight wide computer column">

		  		@component('component.card')

		  			@slot('title')
		  				Acesso rápido
		  			@endslot
		  		    
		  			<div class="ui buttons">
		  			  <button class="ui orange button" id="sacar">Sacar</button>
		  			  <div class="or" data-text="ou"></div>
		  			  <button class="ui green button" id="depositar">Depositar</button>
		  			</div>

		  		@endcomponent

		  		@component('component.card')

		  			@slot('title')
		  				Histórico
		  			@endslot
		  		    
		  			<h4 class="ui sub header">Activity</h4>
		  			<div class="ui small feed">
		  			  <div class="event">
		  			    <div class="content">
		  			      <div class="summary">
		  			         <a>Elliot Fu</a> added <a>Jenny Hess</a> to the project
		  			      </div>
		  			    </div>
		  			  </div>
		  			  <div class="event">
		  			    <div class="content">
		  			      <div class="summary">
		  			         <a>Stevie Feliciano</a> was added as an <a>Administrator</a>
		  			      </div>
		  			    </div>
		  			  </div>
		  			  <div class="event">
		  			    <div class="content">
		  			      <div class="summary">
		  			         <a>Helen Troy</a> added two pictures
		  			      </div>
		  			    </div>
		  			  </div>
		  			</div>

		  		@endcomponent

		  		@component('component.card')

		  			@slot('title')
		  				Segurança
		  			@endslot
		  		    
		  			<button class="ui secondary basic fluid button">
		  				<i class="unlock icon"></i>
		  				Vulnerável
		  			</button>

		  			@slot('extra_content')
		  				<div class="ui bottom attached negative message">
		  				  <i class="icon warning"></i>
		  				  Você não tem senha, <a href="#">clique aqui</a> para criar.
		  				</div>
		  			@endslot

		  		@endcomponent

		  </div>

		</div>

	</div>

	@component('component.modal')
		
		@slot('id')
			sacar_modal
		@endslot

		<h2>Quanto você deseja sacar?</h2>
		
	  	<div class="ui range" id="range-2"></div>
	  	<br>	

	  	<div class="ui right labeled fluid input">
	  	  <div class="ui label">$</div>
	  	  <input type="text" placeholder="Quantidade" id="input-2">
	  	  <div class="ui basic label">.00</div>
	  	</div>

		@slot('left_button')
			Cancelar
		@endslot

		@slot('right_button')
			Sacar
		@endslot

	@endcomponent

	@component('component.modal')
		
		@slot('id')
			depositar_modal
		@endslot

		<h2>Quanto você deseja depositar?</h2>
		
	  	<div class="ui range" id="range-2"></div>
	  	<br>	

	  	<div class="ui right labeled fluid input">
	  	  <div class="ui label">$</div>
	  	  <input type="text" placeholder="Quantidade" id="input-2">
	  	  <div class="ui basic label">.00</div>
	  	</div>

		@slot('left_button')
			Cancelar
		@endslot

		@slot('right_button')
			Depositar
		@endslot

	@endcomponent

@endsection

@section('js')
	@parent
	<script src="{{ asset('js/account.js') }}" type="text/javascript"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {

			$('#sacar').on('click', function(event) {
				event.preventDefault();
				
				$('#sacar_modal')
				  .modal('show')
				;
			});

			$('#depositar').on('click', function(event) {
				event.preventDefault();
				
				$('#depositar_modal')
				  .modal('show')
				;
			});

		
			$('#range-2').range({
			  min: 0,
			  max: 100000,
			  start: 2000,
			  input: '#input-2'
			});
		});
	</script>
@endsection