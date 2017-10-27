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

	@if(\Auth::user()->tutorial)
		@component('component.message')

			@slot('icon')
				warning
			@endslot

			@slot('type')
				info
			@endslot

			@slot('title')
				Cards com o icone <i class="eye icon"></i> serão vistos apenas por você
			@endslot

		@endcomponent
	@endif

	<div class="">

		<div class="ui centered grid">

		  <div class="six wide tablet two wide computer column">

		  		@component('component.card')

		  			@slot('content')
		  				fcenter
		  			@endslot

		  			@slot('image')
		  				@if (!is_null($user->avatar()))
		  					{{ $user->avatar() }}
		  				@endif
		  			@endslot

		  			@slot('class')
		  				big
		  			@endslot
		  			 
		  			<a class="header">{{ $user->name }}</a>
	  			    <div class="meta">
	  			      	<span class="date">Nome da classe</span>
	  			    </div>
	  			    {{-- <div class="description">
	  			     	 Kristy is an art director living in New York.
	  			    </div> --}}

	  			    @slot('extra_content')
	  			    	<div class="extra fcenter content">
							@if(! $user->getBadge('platinum')->isEmpty())  			    		
		  			    		<div class="ui teal basic label">
		  			    			<a class="ui teal empty circular label"></a> {{ $user->getBadge('platinum')->count() }}
		  			    		</div>
	  			    		@endif

	  			    		@if(! $user->getBadge('gold')->isEmpty())
		  			    		<div class="ui yellow basic label">
		  			    			<a class="ui yellow empty circular label"></a>{{ $user->getBadge('gold')->count() }}
		  			    		</div>
	  			    		@endif

	  			    		@if(! $user->getBadge('silver')->isEmpty())
		  			    		<div class="ui grey basic label">
		  			    			<a class="ui grey empty circular label"></a>{{ $user->getBadge('silver')->count() }} 
		  			    		</div>
	  			    		@endif

	  			    		@if(! $user->getBadge('bronze')->isEmpty())
		  			    		<div class="ui brown basic label">
		  			    			<a class="ui brown empty circular label"></a> {{ $user->getBadge('bronze')->count() }} 
		  			    		</div>
	  			    		@endif
	  			    	</div>
	  			    @endslot

		  		@endcomponent

		  		<div class="ui fluid vertical menu">
		  		  <a class="active teal item" id="home_btn">
		  		    Home
		  		  </a>

		  		  <a class="item">
		  		    Inbox
		  		    <div class="ui {{-- teal left pointing --}}label">1</div>
		  		  </a>

		  		  <a class="item">
		  		    Senha
		  		    <div class="ui label">51</div>
		  		  </a>

		  		  <a class="item" id="config_btn">
		  		    Configurações
		  		    <i class="icon wrench"></i>
		  		  </a>
		  		  
		  		</div>

		  </div>

		  <div class="six wide tablet eight wide computer column">

		  		<div id="main">

			  		{{-- Amigos --}}
			  		@component('component.card')

			  			@slot('title')
			  				Amigos
			  			@endslot
			  		    
			  			<img class="ui avatar image" src="http://placehold.it/100x100">
			  			<span>Nome do amigo</span>

			  			<img class="ui avatar image" src="http://placehold.it/100x100">
			  			<span>Nome do amigo</span>

			  			<img class="ui avatar image" src="http://placehold.it/100x100">
			  			<span>Nome do amigo</span>

			  			<img class="ui avatar image" src="http://placehold.it/100x100">
			  			<span>Nome do amigo</span>

			  			<img class="ui avatar image" src="http://placehold.it/100x100">
			  			<span>Nome do amigo</span>

			  			<img class="ui avatar image" src="http://placehold.it/100x100">
			  			<span>Nome do amigo</span>

			  		@endcomponent

			  		{{-- Feed --}}
			  		@component('component.card')

			  			@if($has_permission)
			  				<div class="ui top right attached label"><i class="eye icon"></i> Vísivel apenas para você</div>
			  			@endif

			  			@slot('title')
			  				Feed
			  			@endslot
			  		    
			  			<div class="ui feed">
			  			  <div class="event">
			  			    <div class="label">
			  			      <img src="http://placehold.it/100x100">
			  			    </div>
			  			    <div class="content">
			  			      <div class="summary">
			  			        <a class="user">
			  			          Elliot Fu
			  			        </a> added you as a friend
			  			        <div class="date">
			  			          1 Hour Ago
			  			        </div>
			  			      </div>
			  			      <div class="meta">
			  			        <a class="like">
			  			          <i class="like icon"></i> 4 Likes
			  			        </a>
			  			      </div>
			  			    </div>
			  			  </div>
			  			  <div class="event">
			  			    <div class="label">
			  			      <img src="http://placehold.it/100x100">
			  			    </div>
			  			    <div class="content">
			  			      <div class="summary">
			  			        <a>Helen Troy</a> added <a>2 new illustrations</a>
			  			        <div class="date">
			  			          4 days ago
			  			        </div>
			  			      </div>
			  			      <div class="extra images">
			  			        <a><img src="http://placehold.it/100x100"></a>
			  			        <a><img src="http://placehold.it/100x100"></a>
			  			      </div>
			  			      <div class="meta">
			  			        <a class="like">
			  			          <i class="like icon"></i> 1 Like
			  			        </a>
			  			      </div>
			  			    </div>
			  			  </div>
			  			  <div class="event">
			  			    <div class="label">
			  			      <img src="http://placehold.it/100x100">
			  			    </div>
			  			    <div class="content">
			  			      <div class="summary">
			  			        <a class="user">
			  			          Jenny Hess
			  			        </a> added you as a friend
			  			        <div class="date">
			  			          2 Days Ago
			  			        </div>
			  			      </div>
			  			      <div class="meta">
			  			        <a class="like">
			  			          <i class="like icon"></i> 8 Likes
			  			        </a>
			  			      </div>
			  			    </div>
			  			  </div>
			  			  <div class="event">
			  			    <div class="label">
			  			      <img src="http://placehold.it/100x100">
			  			    </div>
			  			    <div class="content">
			  			      <div class="summary">
			  			        <a>Joe Henderson</a> posted on his page
			  			        <div class="date">
			  			          3 days ago
			  			        </div>
			  			      </div>
			  			      <div class="extra text">
			  			        Ours is a life of constant reruns. We're always circling back to where we'd we started, then starting all over again. Even if we don't run extra laps that day, we surely will come back for more of the same another day soon.
			  			      </div>
			  			      <div class="meta">
			  			        <a class="like">
			  			          <i class="like icon"></i> 5 Likes
			  			        </a>
			  			      </div>
			  			    </div>
			  			  </div>
			  			  <div class="event">
			  			    <div class="label">
			  			      <img src="http://placehold.it/100x100">
			  			    </div>
			  			    <div class="content">
			  			      <div class="summary">
			  			        <a>Justen Kitsune</a> added <a>2 new photos</a> of you
			  			        <div class="date">
			  			          4 days ago
			  			        </div>
			  			      </div>
			  			      <div class="extra images">
			  			        <a><img src="http://placehold.it/100x100"></a>
			  			        <a><img src="http://placehold.it/100x100"></a>
			  			      </div>
			  			      <div class="meta">
			  			        <a class="like">
			  			          <i class="like icon"></i> 41 Likes
			  			        </a>
			  			      </div>
			  			    </div>
			  			  </div>
			  			</div>

			  		@endcomponent

			  		{{-- Indefinido --}}
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