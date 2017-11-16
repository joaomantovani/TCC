@extends('master')

@section('css')
	@parent
	<link rel="stylesheet" href="{{ asset('css/personal.css') }}">
	<style type="text/css" media="screen">
		body {
			background: #ebebeb;
		}
	</style>
@endsection

@section('content')

		<div class="ui stackable grid">

		  {{-- <div class="six wide tablet two wide computer column"> --}}
		  	<div class="seven wide column">

		  		@component('component.card')

		  			@slot('content')
		  				fcenter
		  			@endslot
		  			
		  			 
		  			<img class="ui small circular image" src="{{ Auth::user()->getAvatar() }}">
		  			<h2>
		  				{{ $user->username }}
		  				<br>
		  				<small>{{ Auth::user()->info->class()->first()->name }}</small>
		  			</h2>
	  			    {{-- <div class="description">
	  			     	 Kristy is an art director living in New York.
	  			    </div> --}}

		  		@endcomponent

		  		@component('component.card')

		  			@slot('content')
		  				fcenter
		  			@endslot

		  			<div class="ui statistic">
		  			  <div class="value">
		  			    {{ Auth::user()->stats->calcLevel() }}
		  			  </div>
		  			  <div class="label">
		  			    Level
		  			  </div>
		  			</div>
		  				
		  			<br>
		  			 
		  			<div class="ui mini four statistics">
		  			  <div class="statistic">
		  			    <div class="value">
		  			      {{ Auth::user()->stats->inteligence }}
		  			    </div>
		  			    <div class="label">
		  			      Inteligência
		  			    </div>
		  			  </div>
		  			  
		  			  <div class="statistic">
		  			    <div class="value">
		  			      {{ Auth::user()->stats->charisma }}
		  			    </div>
		  			    <div class="label">
		  			      Carisma
		  			    </div>
		  			  </div>

		  			  <div class="statistic">
		  			    <div class="value">
		  			      {{ Auth::user()->stats->audacity }}
		  			    </div>
		  			    <div class="label">
		  			      Audacia
		  			    </div>
		  			  </div>

		  			  <div class="statistic">
		  			    <div class="value">
		  			      {{ Auth::user()->stats->luck }}
		  			    </div>
		  			    <div class="label">
		  			      Sorte
		  			    </div>
		  			  </div>
		  			</div>

		  		@endcomponent

		  		<div class="ui fluid vertical menu">
		  		  <a class="active teal item" id="home_btn">
		  		    Conquistas
		  		  </a>

		  		  <a class="item" id="config_btn">
		  		    Configurações
		  		    <i class="icon wrench"></i>
		  		  </a>
		  		  
		  		</div>

		  </div>

		  <div class="nine wide column">

		  		<div id="main">

		  			<h2>Conquistas</h2>
			  		{{-- Amigos --}}
			  		@component('component.card')

			  			@if ($user->getBadge('platinum')->isEmpty() && $user->getBadge('gold')->isEmpty() && $user->getBadge('silver')->isEmpty() && $user->getBadge('bronze')->isEmpty())
			  					<div class="fcenter">{{ Auth::user()->name }} não possui nenhum conquista ainda</div>
			  					<br>
			  			@else
			  				<div class="extra fcenter content">
			  				
							@if(! $user->getBadge('platinum')->isEmpty())  			    		
		  			    		<div class="ui teal basic label" data-tooltip="Quantidade de achievements: Platina">
		  			    			<a data-position="top right" class="ui teal empty circular label"></a> {{ $user->getBadge('platinum')->count() }}
		  			    		</div>
	  			    		@endif

	  			    		@if(! $user->getBadge('gold')->isEmpty())
		  			    		<div class="ui yellow basic label" data-tooltip="Quantidade de achievements: Ouro">
		  			    			<a data-position="top right" class="ui yellow empty circular label"></a> {{ $user->getBadge('gold')->count() }}
		  			    		</div>
	  			    		@endif

	  			    		@if(! $user->getBadge('silver')->isEmpty())
		  			    		<div class="ui grey basic label" data-tooltip="Quantidade de achievements: Prata">
		  			    			<a data-position="top right" class="ui grey empty circular label"></a> {{ $user->getBadge('silver')->count() }} 
		  			    		</div>
	  			    		@endif

	  			    		@if(! $user->getBadge('bronze')->isEmpty())
		  			    		<div class="ui brown basic label" data-tooltip="Quantidade de achievements: Bronze">
		  			    			<a data-position="top right" class="ui brown empty circular label"></a> {{ $user->getBadge('bronze')->count() }} 
		  			    		</div>
	  			    		@endif
	  			    		<h6></h6>
	  			    	</div>
			  			@endif

			  			<div class="ui list">
			  				{{-- bugfix gambiarra --}}
			  				<div class="item" style="display: none"></div>
				  			@foreach ($achievements as $achievement)
				  				{{-- Se o usuario tiver o achievement --}}
				  				@if (Auth::user()->achievements->contains($achievement->id))
				  					<span class="item">
					  				    <i class="trophy big icon" style="color: {{ $achievement->badge->color }}"></i>
					  				    <div class="content">
					  				      <strong>{{ $achievement->name }}</strong>
					  				      <br>
					  				      {{ $achievement->description }}
					  				    </div>
					  				  </span>
				  				{{-- se nao tiver o achievement --}}
				  				@else
				  				  <div data-tooltip="achievement bloqueado" class="disabled item">
				  				    <i class="disabled trophy big icon" style="color: {{ $achievement->badge->color }}"></i>
				  				    <div class="content">
				  				      <strong>{{ $achievement->name }}</strong>
				  				      <br>
				  				      {{ $achievement->description }}
				  				    </div>
				  				  </div>
				  					{{-- expr --}}
				  				@endif
			  				  <br>
				  			@endforeach
			  			</div>

			  		@endcomponent

		  		</div>

		  		<div id="config" style="display: none">

  		  			@component('component.card')

  		  				@if($has_permission)
  		  					<div class="ui top right attached label"><i class="eye icon"></i> Vísivel apenas para você</div>
  		  				@endif

  		  				@slot('title')
  		  					Username
  		  				@endslot

  		  				<div class="ui equal width form">
  		  				  <div class="fields">
  		  				    <div class="field">
  		  				      <label>Nova senha</label>
  		  				      <input type="password">
  		  				    </div>
  		  				  </div>
  		  				  <div class="fields">
  		  				    <div class="field">
  		  				      	<button class="ui secondary basic fluid button">
  				  					<i class="unlock icon"></i>
  				  					Trocar senha
  				  				</button>
  		  				    </div>
  		  				    
  		  				  </div>
  		  				</div>
  		  			   

  		  				@slot('extra_content')
  		  					<div class="ui bottom attached info message">
  		  					  <i class="icon warning"></i>
  		  					  Você pode escolher entre deixar o seu nome ou seu apelido
  		  					</div>
  		  				@endslot

  		  			@endcomponent		  			

		  			@component('component.card')

		  				@if($has_permission)
		  					<div class="ui top right attached label"><i class="eye icon"></i> Vísivel apenas para você</div>
		  				@endif

		  				@slot('title')
		  					Senha
		  				@endslot

		  				<div class="ui equal width form">
		  				  <div class="fields">
		  				    <div class="field">
		  				      <label>Nova senha</label>
		  				      <input type="password">
		  				    </div>
		  				  </div>
		  				  <div class="fields">
		  				    <div class="field">
		  				      	<button class="ui secondary basic fluid button">
				  					<i class="unlock icon"></i>
				  					Trocar senha
				  				</button>
		  				    </div>
		  				    
		  				  </div>
		  				</div>
		  			   

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
	<script src="{{ asset('js/personal.js') }}" type="text/javascript"></script>
	<script type="text/javascript">
	$(document).ready(function() {
		// Animação
		$('#config_btn').on('click', function(event) {
			
			$('#home_btn').removeClass('teal active');

			$('#main')
			  .transition({
			      animation  : 'scale',
			      onComplete : function() {

			      	$('#config_btn').addClass('teal active');			        
			      	$('#config')
			      	  .transition('scale')
			      	;

			      }
			    })
			;

			event.preventDefault();
		});

		$('#home_btn').on('click', function(event) {
			
			$('#home_btn').removeClass('teal active');

			$('#main')
			  .transition({
			      animation  : 'scale',
			      onComplete : function() {

			      	$('#home_btn').addClass('teal active');			        
			      	$('#home')
			      	  .transition('scale')
			      	;

			      }
			    })
			;

			event.preventDefault();
		});
	});
	</script>
@endsection