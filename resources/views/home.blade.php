@extends('master')

@section('css')
	@parent
	<style type="text/css">
		.white-text {
			color: white !important;
		}
	</style>
	<style type="text/css">
		body {
		    position: absolute;
		    top: 0; bottom: 0; left: 0; right: 0;
		    height: 100%;
		}

		@if (Auth::user()->info->class()->first()->slug == "jogos-digitais")
			body.pushable>.pusher { background: #090909 !important; }
			body.pushable>.pusher:before {
				background: linear-gradient(rgba(20,20,20, .7), rgba(20,20,20, .3)), url('/illustrations/backgrounds/room-background-2-clean.jpg') !important;
			}
		@elseif (Auth::user()->info->class()->first()->slug == "seguranca")
			body.pushable>.pusher { background: #4d3a2d !important; }
			body.pushable>.pusher:before {
				background: linear-gradient(rgba(20,20,20, .7), rgba(20,20,20, .3)), url('/illustrations/backgrounds/room-background-clean.jpg') !important;
			}
		@elseif (Auth::user()->info->class()->first()->slug == "ads")
		body.pushable>.pusher { background: #2b2b2b !important; }
			body.pushable>.pusher:before {
				background: linear-gradient(rgba(20,20,20, .7), rgba(20,20,20, .3)), url('/illustrations/backgrounds/room-background-3-clean.jpg') !important;
			}
		@endif

		body.pushable>.pusher:before {
			background-size: cover !important; 
		    content: "";
		    position: absolute;
		    z-index: -1; /* Keep the background behind the content */
		    width: 1920px;
		    height: 1080px;
		    transform: scale(1.1);
		    /* don't forget to use the prefixes you need */
		    -webkit-filter: blur(5px);
		      -moz-filter: blur(5px);
		      -o-filter: blur(5px);
		      -ms-filter: blur(5px);
		      filter: blur(5px);
		}

	</style>
@endsection

@section('navbar')
	@parent
@endsection

@section('content')

	<div class="ui container">

		<div class="ui stackable grid">
			<div class="ten wide column">
				<div class="ui raised segment">
			      <a class="ui red ribbon label">Geral</a>
			      <span>
			      	<strong>{{ Auth::user()->nickname }} </strong>
            			@if (isset(Auth::user()->info->class))
            				<small>{{ Auth::user()->info->class()->first()->name }}</small>
            			@endif
            		</span>
			      	<p>	
			      		<br>
			      		<span class="ui tiny black button" data-tooltip="Seu level" data-position="top right">Lvl {{ Auth::user()->stats->calcLevel() }}</span>
						<span class="ui tiny basic black button" data-tooltip="Inteligência" data-position="top right"> INT: {{ Auth::user()->stats->inteligence }} </span>	
						<span class="ui tiny basic black button" data-tooltip="Carisma" data-position="top right"> CAR: {{ Auth::user()->stats->charisma }} </span>	
						<span class="ui tiny basic black button" data-tooltip="Audácia" data-position="top right"> AUD: {{ Auth::user()->stats->audacity }} </span>	
						<span class="ui tiny basic black button" data-tooltip="Sorte" data-position="top right"> SOR: {{ Auth::user()->stats->luck }} </span>			      
					</p>
			      <a class="ui blue ribbon label">Redondezas</a> <strong>Ultimas notícias</strong>
			      <p>Lorem ipsum dolor sit amet uasduhasd uhasduh dasuhduhsauhasdu sahduas dhsaudhausdhsaudh uasdh asudh sau hasudh asudh uasdh uhuashusahduahdasudhaus hasudhsa</p>
			    </div>
			</div>
			<div class="six wide column mobile hidden">
				@component('component.card')
					<canvas id="myChart" width="100%" height="40"></canvas>
				@endcomponent
			</div>
			<p><br></p>
		</div>

		<div class="ui four stackable link cards">

				<div class="card" style="display: none !important;">
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

				<div class="card" style="display: none !important;">
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

				<div class="card" style="display: none !important;">
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
					<div class="card" style="display: none !important;">
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
					    {{-- <span>
					      <i class="user icon"></i>
					      75 Friends
					    </span> --}}
					  </div>
					</div>
				@endforeach
		</div>

	</div>

@endsection

@section('js')
	@parent
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
jQuery(document).ready(function($) {
	$('.cards .card')
	  .transition({
	    animation : 'fly left',
	    reverse   : 'auto', // default setting
	    interval  : 200
	  })
	;
});
</script>
@endsection