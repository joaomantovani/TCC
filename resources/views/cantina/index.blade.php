@extends('master')

@section('css')
@parent
<link rel="stylesheet" href="{{ asset('css/account.css') }}">
<style type="text/css">
	body.pushable>.pusher {
		background: #ebebeb !important;
		background-repeat: no-repeat;
		background-attachment: fixed;;
	}

	@if ($store->slug == "lanchonete")
		body.pushable>.pusher { background-image: url('/illustrations/backgrounds/lanchonete.jpg') !important; }
	@elseif ($store->slug == "bar")
		body.pushable>.pusher { background-image: url('https://i.imgur.com/dYR0OfB.jpg') !important; }
	@elseif ($store->slug == "esquina")
		body.pushable>.pusher { background-image: url('https://i.imgur.com/dYR0OfB.jpg') !important; }
	@elseif ($store->slug == "online")
		body.pushable>.pusher { background-image: url('https://i.imgur.com/yA4MnLo.jpg') !important; }
	@elseif ($store->slug == "escola")
		body.pushable>.pusher { background-image: url('https://i.imgur.com/dYR0OfB.jpg') !important; }
	@endif
</style>
@endsection

@section('content')

<div class="ui container">

	<div class="ui centered grid">
	<br>
		<span class="mobile space">
			<div class="only sixteen wide mobile six wide tablet four wide computer column personal-hud" style="display: none">
				@component('component.card')

				@slot('content')
				fcenter
				@endslot

				@slot('class')
				small mobile hidden
				@endslot

				<h3>
				    {{ Auth::user()->nickname }} <br>
				    @if (isset(Auth::user()->info->class))
				    <small>{{ Auth::user()->info->class()->first()->name }}</small>
				    @endif
				</h3>

				<div class="ui fluid teal large label">
				    Dinheiro
				    <div class="detail"> <i class="money icon"></i> {{ Auth::user()->wallet->getMoney() }}</div>
				</div>

				<p><br></p>

				<div class="ui active indicating progress" data-percent="100" id="example2">
				    <div class="bar">
				    	<div class="progress">{{ Auth::user()->stats->stamina }}%</div>
				    </div>
				    <div class="white-text label">Stamina</div>
				</div>
				<div class="ui active indicating progress" data-percent="100" id="example3">
				    <div class="bar">
				    	<div class="progress">{{ Auth::user()->stats->pression }}%</div>
				    </div>
				    <div class="label">Tensão</div>
				</div>

				@endcomponent

				@component('component.card')

				@slot('content')
				fcenter
				@endslot

				@slot('class')
				small
				@endslot


				<a class="ui fluid basic button" href="{{ url('home') }}"><i class="home icon"></i> Voltar para home</a>
				@endcomponent
			</div>
		</span>

		<div class="twelve wide tablet four wide computer column splash-bar-owner" style="display: none">

			@component('component.card')
				@if (isset($store->avatar))
					<img src="{{ asset($store->avatar->path) }}" class="ui fluid image">
				@endif
			@endcomponent

			@component('component.card')

			@slot('content')
			fcenter
			@endslot

			@slot('class')
			small
			@endslot
			<div class="ui tiny statistic">
				<div class="value">
					{{ $store->name }}
				</div>
				<br>
				<div class="label">
					{{ $store->description }}
				</div>
			</div>

			@endcomponent

		</div>

		<div class="sixteen wide tablet eight wide computer column">

			<div class="ui segment divided items products">
			@foreach( $store->products as $product)
			  <div class="item" id="{{ $product->slug }}" style="display: none">
			    <div class="image">
			      <img src="{{ asset($product->image) }}">
			    </div>
			    <div class="content">
			      <a class="header">{{ $product->name }}</a>
			      <div class="meta">
			        <span class="cinema">{{ $product->description }}</span>
			      </div>
			      <div class="description price">
			        <h3>R$ <span class="item-price">{{ $product->price }}</span></h3>
			      </div>
			      <div class="extra">
			      	@foreach($product->effects as $effect)
			      		@component('component.effect', ['effect' => $effect])
			      		@endcomponent
				        @if (!$loop->last)
				          <br>
				        @endif
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
		            url: 'comprar',
		            headers: {
		            	'X-CSRF-TOKEN': '{{ csrf_token() }}'
		            },
		            data: {
		            	product_id: btn.attr('id')
		            },
		            success: function (data) {
		                btn.removeClass('loading');

		                if (data.success) {
		                	changeStamina(data.stamina);
		                	changeTensao(data.tensao);
		                	changeMoney(data.money);
		                }

	                	$.toast({
	                	  heading : data.toast.heading,
	                	  text : data.toast.message,
	                	  showHideTransition : 'slide',
	                	  allowToastClose : true,
	                	  hideAfter : 5000,
	                	  bgcolor : data.toast.bgcolor,
	                	  stack : 5,
	                	  textAlign : 'left',
	                	  position : 'bottom-left',
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
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$('.splash-bar-owner')
			  .transition({
			    animation : 'fly up',
			    duration  : 1000,
			  })
			;

			$('.products .item')
			  .transition({
			    animation : 'fly left',
			    reverse   : 'auto', // default setting
			    interval  : 200
			  })
			;

			$('.personal-hud')
			  .transition({
			    animation : 'fly right',
			    duration  : 1000,
			  })
			;
		});
	</script>
	@endsection
