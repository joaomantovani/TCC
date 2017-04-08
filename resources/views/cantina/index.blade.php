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
university 
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
					{{ Money::format(Auth::user()->wallet->money) }}
				</div>
				<div class="label">
					<i class="credit card small icon"></i> Carteira
				</div>
			</div>

			@endcomponent

		</div>

		<div class="six wide tablet eight wide computer column">

			<div class="ui segment divided items">
			  <div class="item">
			    <div class="image">
			      <img src="http://placehold.it/175x175">
			    </div>
			    <div class="content">
			      <a class="header">12 Years a Slave</a>
			      <div class="meta">
			        <span class="cinema">Union Square 14</span>
			      </div>
			      <div class="description">
			        <p></p>
			      </div>
			      <div class="extra">
			        <div class="ui label">IMAX</div>
			        <div class="ui label"><i class="globe icon"></i> Additional Languages</div>
			      </div>
			    </div>
			  </div>
			  <div class="item">
			    <div class="image">
			      <img src="http://placehold.it/175x175">
			    </div>
			    <div class="content">
			      <a class="header">My Neighbor Totoro</a>
			      <div class="meta">
			        <span class="cinema">IFC Cinema</span>
			      </div>
			      <div class="description">
			        <p></p>
			      </div>
			      <div class="extra">
			        <div class="ui right floated primary button">
			          Buy tickets
			          <i class="right chevron icon"></i>
			        </div>
			        <div class="ui label">Limited</div>
			      </div>
			    </div>
			  </div>
			  <div class="item">
			    <div class="image">
			      <img src="http://placehold.it/175x175">
			    </div>
			    <div class="content">
			      <a class="header">Watchmen</a>
			      <div class="meta">
			        <span class="cinema">IFC</span>
			      </div>
			      <div class="description">
			        <p></p>
			      </div>
			      <div class="extra">
			        <div class="ui right floated primary button">
			          Buy tickets
			          <i class="right chevron icon"></i>
			        </div>
			      </div>
			    </div>
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