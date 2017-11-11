@extends('master')

@section('css')
	@parent
	<link rel="stylesheet" href="{{ asset('css/account.css') }}">
	<style type="text/css" media="screen">
		body {
			background: #ebebeb;
		}

		body.pushable>.pusher {
			background: #ebebeb !important;
			background-image: url('https://i.imgur.com/sfP4RMP.jpg') !important;
			background-repeat: no-repeat;
			background-attachment: fixed;;
		}

		.detail-date {
			float: right;
			color: lightgrey;
		}
	</style>
@endsection

@section('content')


	<div class="ui container">
		<h1>Banco</h1>

		<div class="ui grid">

		  <div class="sixteen wide tablet eight wide computer column">


		  		@component('component.card')

		  			@slot('content')
		  				fcenter
		  			@endslot

		  			@slot('class')
		  				big
		  			@endslot
		  			 
		  			  <div class="ui large statistic">
		  			    <div class="value">
		  			      <i class="bitcoin icon"></i> <span id="account-money"> {{ Auth::user()->account->getConvertedMoney() }} </span>
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
		  			    <div class="value" id="wallet-money">
		  			       {{ Money::format(Auth::user()->wallet->money) }}
		  			    </div>
		  			    <div class="label">
		  			      <i class="credit card small icon"></i> Carteira
		  			    </div>
		  			  </div>

		  		@endcomponent

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

		  </div>

		  <div class="sixteen wide tablet eight wide computer column">

		  		@component('component.card')

		  			@slot('title')
		  				Histórico
		  			@endslot
		  		    
		  			<h4 class="ui sub header">Rendimentos</h4>
		  			<div class="ui small feed">
		  				@forelse ($incomes as $income)
							<div class="event">
								<div class="content">
								  	<div class="summary">
								  		@if ($income->sameMoney())
								  			{{-- <div class="ui grey label"> <i class="fa fa-arrow-up"></i> Sem mudanças </div>
								  			<i class="bitcoin icon"></i> {{ $income->new_money }} --}}
								  			<div class="fluid ui basic label">
								  			  {{ $income->old_money }}  <i class="fa fa-arrows-h"></i>  {{ $income->new_money }}
								  			  <span class="detail">Manteve</span>
								  			  <span class="detail-date">{{ $income->created_at->format('d/m h:i') }}</span>
								  			</div>
								  		@elseif($income->moreMoney())
								  			{{-- <div class="ui green label"> <i class="fa fa-arrow-up"></i> Aumento </div>
								  			<i class="bitcoin icon"></i> {{ $income->new_money }} --}}
								  			<div class="ui fluid green basic label">
								  			  {{ $income->old_money }}  <i class="fa fa-arrow-up"></i>  {{ $income->new_money }}
								  			  <span class="detail">Aumento</span>
								  			  <span class="detail-date">{{ $income->created_at->format('d/m h:i') }}</span>
								  			</div>
								  		@elseif($income->lessMoney())
								  			{{-- <div class="ui red label"> <i class="fa fa-arrow-down"></i> Redução </div>
								  			<i class="bitcoin icon"></i> {{ $income->new_money }} --}}
								  			<div class="ui fluid red basic label">
								  			  {{ $income->old_money }}  <i class="fa fa-arrow-down"></i>  {{ $income->new_money }}
								  			  <span class="detail">Redução</span>
								  			  <span class="detail-date">{{ $income->created_at->format('d/m h:i') }}</span>
								  			</div>
								  		@endif
									</div>
								</div>
							</div>
						@empty
							Você não teve nenhum rendimento ainda, tente deixar um dinheiro no banco e veja seu dinheiro render!
		  				@endforelse
		  			</div>

		  		@endcomponent

		  		@component('component.card')

		  			@slot('title')
		  				Segurança
		  			@endslot
		  		    
		  			<button class="ui positive secondary basic fluid button">
		  				<i class="lock icon"></i>
		  				Conta segura
		  			</button>
		  			<small>Sua conta está protegida contra ataque de hackers, 100% garantido!</small>

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
		
		{!! Form::open(['url' => '/banco/sacar']) !!}
		  	<div class="ui range" id="range-2"></div>
		  	<br>	

		  	<div class="ui right labeled fluid input">
		  	  <div class="ui label">$</div>
		  	  <input type="text" placeholder="Quantidade" class="input-amount" id="input-sacar">
		  	  <div class="ui basic label">.00</div>
		  	</div>

		@slot('left_button')
			Cancelar
		@endslot

		<button value="submit" class="ui positive right labeled icon button" id="btn-sacar">
		  Sacar
		  <i class="checkmark icon"></i>
		</button>
	  	{!! Form::close() !!}

	@endcomponent

	@component('component.modal')
		
		@slot('id')
			depositar_modal
		@endslot

		<h2>Quanto você deseja depositar?</h2>
		
		{!! Form::open(['url' => '/banco/depositar']) !!}
		  	<div class="ui range" id="range-2"></div>
		  	<br>	

		  	<div class="ui right labeled fluid input">
		  	  <div class="ui label">$</div>
		  	  <input type="text" placeholder="Quantidade" class="input-amount" id="input-depositar">
		  	  <div class="ui basic label">.00</div>
		  	</div>

		@slot('left_button')
			Cancelar
		@endslot

		<button value="submit" class="ui positive right labeled icon button" id="btn-depositar">
		  Depositar
		  <i class="checkmark icon"></i>
		</button>
	  	{!! Form::close() !!}

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

			$('#btn-depositar').on('click', function(event) {
				event.preventDefault();

				/* Act on the event */
				$.ajax({
		            type: "POST",
		            url: 'banco/depositar',
		            dataType: 'JSON',
		            headers: {
		            	'X-CSRF-TOKEN': '{{ csrf_token() }}'
		            },
		            data: {
		            	amount: $('#input-depositar').val()
		            },
		            success: function (data) {
		                console.log(data);

		                $('#depositar_modal')
		                  .modal('hide')
		                ;

		                $('#wallet-money').text(Math.round(data.wallet));
		                $('#account-money').text(Math.round(data.account));

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

			$('#btn-sacar').on('click', function(event) {
				event.preventDefault();

				/* Act on the event */
				$.ajax({
		            type: "POST",
		            url: 'banco/sacar',
		            dataType: 'JSON',
		            headers: {
		            	'X-CSRF-TOKEN': '{{ csrf_token() }}'
		            },
		            data: {
		            	amount: $('#input-sacar').val()
		            },
		            success: function (data) {
		                console.log(data);

		                $('#sacar_modal')
		                  .modal('hide')
		                ;

		                $('#wallet-money').text(Math.round(data.wallet));
		                $('#account-money').text(Math.round(data.account));

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