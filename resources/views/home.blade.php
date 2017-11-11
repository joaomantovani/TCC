@extends('master')

@section('navbar')
	@parent
@endsection

@section('content')

	<div class="ui container">

	<div class="ui stackable two column grid">
		<div class="sixteen wide tablet six wide computer column">
			<br>
			<div class="ui raised segment">
		      <a class="ui red ribbon label">Overview</a>
		      <span>Account Details</span>
		      <p></p>
		      <a class="ui blue ribbon label">Community</a> User Reviews
		      <p></p>
		    </div>
		</div>
		<div class="sixteen wide tablet ten wide computer column">
			@component('component.card')
			<canvas id="myChart" width="100%" height="40"></canvas>
			@endcomponent
		</div>
	</div>
		<div class="ui four stackable link cards">

			<div class="card">
				<a class="ui red right corner label">
		        	<i class="crosshairs icon"></i>
		      	</a>
			  <div class="content">
			    <div class="header">Ação</div>
			    <div class="meta">
			    	<span class="">ganhar lvl</span>
			    </div>
			    <div class="description">
			      @if (Auth::user()->info->class->slug == 'jogos-digitais')
			      	Estude programação, crie jogos, desenvolva IA e ganhe dinheiro, tudo aqui.
			      @elseif (Auth::user()->info->class->slug == 'seguranca')
			      	Estude, penetre sistemas de seguranças, ganhe dinheiro e muito mais.
			      @elseif (Auth::user()->info->class->slug == 'ads')
			      	Estude, desenvolva sistemas, ganhe dinheiro e muito mais.
			      @endif
			    </div>
			  </div>
			  <div class="extra content">
			    <span class="right floated">
			      <a href="{{ url('acao') }}">Entrar</a>
			    </span>
			    {{-- <span>
			      <i class="user icon"></i>
			      75 Friends
			    </span> --}}
			  </div>
			</div>

			<div class="card">
				<a class="ui right corner label">
		        	<i class="bitcoin icon"></i>
		      	</a>
			  <div class="content">
			    <div class="header">Banco</div>
			    <div class="meta">
			    	<span class="">bank</span>
			    </div>
			    <div class="description">
			      Guarde seu dinheiro em um local seguro e ainda veja ele rendendo em investimentos.
			    </div>
			  </div>
			  <div class="extra content">
			    <span class="right floated">
			      <a href="{{ url('banco') }}">Entrar</a>
			    </span>
			    {{-- <span>
			      <i class="user icon"></i>
			      75 Friends
			    </span> --}}
			  </div>
			</div>

			<div class="card">
				<a class="ui right corner label">
		        	<i class="bar chart icon"></i>
		      	</a>
			  <div class="content">
			    <div class="header">Highscores</div>
			    <div class="meta">
			    	<span class="">highscores</span>
			    </div>
			    <div class="description">
			      Confira os melhores jogadores e os melhores times da rodada.
			    </div>
			  </div>
			  <div class="extra content">
			    <span class="right floated">
			      <a href="{{ url('highscores') }}">Entrar</a>
			    </span>
			    {{-- <span>
			      <i class="user icon"></i>
			      75 Friends
			    </span> --}}
			  </div>
			</div>

			@foreach ($stores as $store)
				<div class="card">
					<a class="ui right corner label">
						@if ($store->slug == "lanchonete")
			        		<i class="coffee icon"></i>
			        	@elseif ($store->slug == "bar")
			        		<i class="bar icon"></i>
			        	@elseif ($store->slug == "esquina")
			        		<i class="shopping bag icon"></i>
			        	@elseif ($store->slug == "online")
			        		<i class="shop icon"></i>
			        	@elseif ($store->slug == "escola")
			        		<i class="student icon"></i>
						@endif
			      	</a>
				  {{-- <div class="image">
				    <img src="/images/avatar2/large/matthew.png">
				  </{{-- div> --}}
				  <div class="content">
				    <div class="header">{{ $store->name }}</div>
				    <div class --}}="meta">
				    	<span class="">{{ $store->type }}</span>
				    </div>
				    <div class="description">
				      {{ $store->description }}
				    </div>
				  </div>
				  <div class="extra content">
				    <span class="right floated">
				      <a href="{{ $store->getLink() }}">Entrar</a>
				    </span>
				    <span>
				      <i class="user icon"></i>
				      75 Friends
				    </span>
				  </div>
				</div>
			@endforeach
		  
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

@section('js')
@parent
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.min.js"></script>
<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["JD", "SI", "ADS"],
        datasets: [{
            label: 'Média dos lvls',
            data: [{{ $jd_sum }}, {{ $si_sum }}, {{ $ads_sum }}],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>
@endsection