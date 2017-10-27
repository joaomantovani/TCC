@extends('master')

@section('navbar')
	@parent
@endsection

@section('content')

	<div class="ui container">

		<div class="ui centered grid">

		  <div class="sixteen wide tablet eight wide computer column">

		  		<h1>Ações</h1>
				<a href="{{ url("acao") }}">		  		
			  		@component('component.card')
			  			@slot('content')
			  					fcenter
			  			@endslot
			  			@slot('class')@endslot		  			 
			  			
			  			<i class="bitcoin icon"></i> Ação

			  		@endcomponent
		  		</a>

		  		<h1>Lojas de comida</h1>
				<a href="{{ url("loja/lanchonete") }}">		  		
			  		@component('component.card')
			  			@slot('content')
			  				fcenter
			  			@endslot
			  			@slot('class')@endslot		  			 
			  			
			  			<i class="bitcoin icon"></i> Lanchonete

			  		@endcomponent
		  		</a>

				<a href="{{ url("loja/bar") }}">
			  		@component('component.card')
			  			@slot('content')
			  				fcenter
			  			@endslot
			  			@slot('class')@endslot		  			 
			  			
			  			<i class="bitcoin icon"></i> Bar

			  		@endcomponent
		  		</a>

		  		<h1>Lojas de equipamento</h1>
				<a href="{{ url("loja/esquina") }}">		  		
			  		@component('component.card')
			  			@slot('content')
			  				fcenter
			  			@endslot
			  			@slot('class')@endslot		  			 
			  			
			  			<i class="bitcoin icon"></i> Loja da esquina

			  		@endcomponent
		  		</a>

				<a href="{{ url("loja/online") }}">
			  		@component('component.card')
			  			@slot('content')
			  				fcenter
			  			@endslot
			  			@slot('class')@endslot		  			 
			  			
			  			<i class="bitcoin icon"></i> Loja online

			  		@endcomponent
		  		</a>

		  		<h1>Bancos</h1>
				<a href="{{ url("banco") }}">		  		
			  		@component('component.card')
			  			@slot('content')
			  				fcenter
			  			@endslot
			  			@slot('class')@endslot		  			 
			  			
			  			<i class="bitcoin icon"></i> Banco central e investimento

			  		@endcomponent
		  		</a>

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