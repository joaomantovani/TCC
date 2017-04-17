@extends('master')

@section('css')
@parent
<link rel="stylesheet" href="{{ asset('css/account.css') }}">
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

		<div class="six wide tablet four wide computer column">

			@component('component.card')

			<img src="{{ asset('illustrations/avatar/garcom.png') }}" class="ui fluid image">

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
					Cantina
				</div>
				<div class="label">
					{{-- Faça suas compras aqui! --}}
				</div>
			</div>

			@endcomponent

		</div>

		<div class="sixteen wide tablet eight wide computer column">

			<div class="ui segment divided items">
			@foreach( $store->products as $product)
			  <div class="item" id="{{ $product->slug }}">
			    <div class="image">
			      <img src="{{ $product->image }}">
			    </div>
			    <div class="content">
			      <a class="header">{{ $product->name }}</a>
			      <div class="meta">
			        <span class="cinema">{{ $product->description }}</span>
			      </div>
			      <div class="description">
			        <p>R$ {{ $product->price }}</p>
			      </div>
			      <div class="extra">
			      	@foreach($product->effects as $effect)
				        <div class="ui label">{{ $effect->allInformation() }}</div>
			        @endforeach
			      </div>

			      <div class="extra bottom aligned content">
			      	{!! Form::open(['url' => '/cantina', 'method' => 'post']) !!}
			      	{!! csrf_field() !!}
				        <div class="ui right floated primary button buy_product" id="{{ $product->id }}">
		                  Comprar
		                  <i class="right chevron icon"></i>
		                </div>
			  		{{ Form::close() }}
	               </div>

			    </div>
			  </div>
			  @endforeach
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

			//Compra um novo item
			$('.buy_product').on('click', function(event) {
				event.preventDefault();

				//Coloca classe de carregando no botão
				var btn = $(this);
				btn.addClass('loading');

				$.ajax({
		            type: "POST",
		            url: 'cantina',
		            headers: {
		            	'X-CSRF-TOKEN': '{{ csrf_token() }}'
		            },
		            data: {
		            	product_id: btn.attr('id')
		            },
		            success: function (data) {
		                console.log(data);
		                btn.removeClass('loading');

		                $('#stamina-status').text(data.stamina);
		                $('#money-status').text(data.money);

	                	$.toast({ 
	                	  heading : data.toast.heading,
	                	  text : data.toast.message, 
	                	  showHideTransition : 'slide',
	                	  allowToastClose : true, 
	                	  hideAfter : 5000,
	                	  bgcolor : data.toast.bgcolor,         
	                	  stack : 5,               
	                	  textAlign : 'left',      
	                	  position : 'bottom-right',
	                	  icon: (data.success) ? 'success' : 'error' 
	                	});
		            },
		            error: function (data) {
		            	alert('error');
		                console.log('Error:', data);
		            	btn.removeClass('loading');
		            }
		        });				
			});			
		});
	</script>
	@endsection