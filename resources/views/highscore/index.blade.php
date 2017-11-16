@extends('master')

@section('css')
@parent
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highcharts/6.0.2/css/highcharts.css" />
{{-- <link rel="stylesheet" href="{{ asset('css/account.css') }}"> --}}
@endsection

@section('content')
	<div class="ui container">

		<div class="ui stackable grid">
			<div class="seven wide column">
				<h1>Melhores jogadores</h1>
				@component('component.card')
					<div class="ui grid">
						<span class="two wide column">
						</span>
						{{-- segundo lugar --}}
						<span class="four wide column">
							<br><br>
							<span>
								<img class="ui centered tiny circular image" src="{{ $strongest[1]['user']->getAvatar() }}">
								<i class="grey huge trophy icon"></i>
								<a href="{{ url('jogador/' . $strongest[1]['user']->username) }}">
									<h3 class="no-margin">#2 {{ $strongest[1]['user']->username }}</h3>
								</a>
							</span>
						</span>

						{{-- primeiro lugar --}}
						<span class="four wide column">
							{{-- <br> --}}
							<span>
								<img class="ui centered tiny circular image" src="{{ $strongest[0]['user']->getAvatar() }}">
								<i class="yellow huge trophy icon"></i>
								<a href="{{ url('jogador/' . $strongest[0]['user']->username) }}">
									<h3 class="no-margin">#1 {{ $strongest[0]['user']->username }}</h3>
								</a>
							</span>
						</span>

						{{-- terceiro lugar --}}
						<span class="four wide column">
							<br><br><br>
							<span>
								<img class="ui centered tiny circular image" src="{{ $strongest[2]['user']->getAvatar() }}">
								<i class="brown huge trophy icon"></i>
								<a href="{{ url('jogador/' . $strongest[2]['user']->username) }}">
									<h3 class="no-margin">#3 {{ $strongest[2]['user']->username }}</h3>
								</a>
							</span>
						</span>
					</div>
				@endcomponent
			</div>

			<div class="three wide column">
				<h1>JD</h1>
				@foreach ($jd_strongest as $player)
					<img class="ui avatar image" src="{{ $player['user']->getAvatar() }}">
					<span>
						@if ($loop->iteration == 1) <i class="yellow small trophy icon"></i>
						@elseif ($loop->iteration == 2) <i class="grey small trophy icon"></i>
						@elseif ($loop->iteration == 3) <i class="brown small trophy icon"></i>
						@endif
						{{ $player['user']->username }} <strong>Lvl {{ $player['level'] }}</strong> 
					</span>
					<br><br>
				@endforeach
			</div>

			<div class="three wide column">
				<h1>SI</h1>
				@foreach ($si_strongest as $player)
					<img class="ui avatar image" src="{{ $player['user']->getAvatar() }}">
					<span>
						@if ($loop->iteration == 1) <i class="yellow small trophy icon"></i>
						@elseif ($loop->iteration == 2) <i class="grey small trophy icon"></i>
						@elseif ($loop->iteration == 3) <i class="brown small trophy icon"></i>
						@endif
						{{ $player['user']->username }} <strong>Lvl {{ $player['level'] }}</strong> 
					</span>
					<br><br>
				@endforeach
			</div>

			<div class="three wide column">
				<h1>ADS</h1>
				@foreach ($ads_strongest as $player)
					<img class="ui avatar image" src="{{ $player['user']->getAvatar() }}">
					<span>
						@if ($loop->iteration == 1) <i class="yellow small trophy icon"></i>
						@elseif ($loop->iteration == 2) <i class="grey small trophy icon"></i>
						@elseif ($loop->iteration == 3) <i class="brown small trophy icon"></i>
						@endif
						{{ $player['user']->username }} <strong>Lvl {{ $player['level'] }}</strong> 
					</span>
					<br><br>
				@endforeach
			</div>

			<div class="sixteen wide column">
				<h1>Times mais fortes</h1>
				@component('component.card')
					<canvas id="myChart" width="100%" height="40"></canvas>
				@endcomponent
			</div>
		</div>

	</div>
@endsection

@section('js')
	@parent
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.min.js"></script>
	<script>
	var ctx = document.getElementById("myChart").getContext('2d');
	var myChart = new Chart(ctx, {
	    type: 'bar',
	    data: {
	        labels: ["Jogos Digitais", "Segurança", "Analise e desenvolvimento"],
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