@extends('master')

@section('css')
@parent
<link rel="stylesheet" href="{{ asset('css/action.css') }}">
<style type="text/css" media="screen">
	body {
		background: #ebebeb;
	}
</style>
@endsection

@section('content')

<div class="ui centered container">	

	<div class="six wide tablet eight wide computer column">
		{!! Form::open(['url' => '/action/ajax', 'method' => 'post', 'class' => 'ui form']) !!}
		{!! csrf_field() !!}

		<div class="ui segment">
			<div class="ui fluid massive search selection dropdown">
				<input type="hidden" name="country" value="">
				<i class="dropdown icon"></i>
				<div class="default text">Selecione a ação</div>
				<div class="menu">
					
				</div>
			</div>
		</div>

		{{-- Estatiscas de ação --}}
		<div id="action-template">
			<div class="ui fluid card">
				<div class="content">
					<div class="header action-name">Elliot Fu</div>
					<div class="description action-description">
						Elliot Fu is a film-maker from New York.
					</div>
				</div>
				
				<button type="submit" class="ui bottom attached fluid button" id="action-button">
					<i class="add icon"></i>
					Fazer ação
				</button>

				<div class="ui bottom attached indicating progress">
					<div class="bar"></div>
				</div>
			</div>
		</div>

		{!! Form::close() !!}

		@component('component.message')
		@slot('icon')
		warning
		@endslot
		@slot('type')
		positive
		@endslot
		@slot('title')
		Ação foi feita!
		@endslot
		@endcomponent

	</div>
</div>

@endsection

@section('js')
@parent

<script type="text/javascript">
	function showMessage(type, message, title, icon = "warning") {
		$('.message').removeClass("success negative info")
		$('.message').addClass(type);
		$('.message .header').text(title);
		$('.message .msg').text(message);
		$('.message .icon').addClass(icon);

		if ( type == 'success')
			$('.message').transition('scale');
		else 
			$('.message').transition('shake');
	}

	$(document).ready(function() {
		//Verifica se o select é acionado
		$('.item').on('click', function(event) {
			event.preventDefault();

			//Pega o objeto que representa a ação
			var action = $(this).data().value;

			//Atribui os valores para os campos
			$('#action-template .action-name').text(action.name);
			$('#action-template .action-description').text(action.description);

			//Resultado do calculo de logica fuzzy em difucldade [NW]
			$('.progress').progress({ percent: Math.floor((Math.random() * 100) + 1) });
		});
	});

	$('#action-button').on('click', function(event) {
		event.preventDefault();
		
		//Adiciona classe de carregando
		$(this).addClass('disabled loading');

		//Remove mensagem atual (se houver)
		if( $('.message').is(":visible") )
			 $('.message').transition('scale');

		//Pega os dados do item
		var data = $('.item').data().value;

		$.ajax({
			type: 'POST',
			url: '/action/ajax',
			headers: {
				'X-CSRF-TOKEN': '{{ csrf_token() }}'
			},
			data: {
				'action' : $('.item.selected').data().value,
			}
		})
		.done(function(data) {
			//Remove a classe de carregando
			console.log(data);

			//Se o jogador teve sucesso na ação
			if (data.success) {
				// $('#stamina-status').text(data.stamina);
				$('#example2').progress({
				  percent: data.stamina
				});
				$('#money-status').text(data.money);
				showMessage('success', 'Você completou a ação', 'Aehoo');
				
				$.toast({ 
				  heading : data.toast.heading,
				  text : data.toast.message, 
				  showHideTransition : 'slide',
				  // bgColor : 'blue',
				  // textColor : '#eee',
				  allowToastClose : true, 
				  hideAfter : 5000,
				  bgcolor : data.toast.bgcolor,         
				  stack : 5,               
				  textAlign : 'left',      
				  position : 'top-right'
				});
			}

			//Se o jogador não teve sucesso na ação
			if (! data.success) {
				showMessage('negative', 'Você não tem stamina suficiente para completar a ação, tente novamente mais tarde ou visite a loja', 'Sem stamina');
			}
		})
		.fail(function() {
			alert('error');
		})
		.always(function() {
			$('#action-button').removeClass('disabled loading');
		})
	});

	//Progresso
	$(document).ready(function() {
		$('.progress').progress(
		{
			percent: 0
		}
		);
	});
</script>

<script src="{{ asset('js/action.js') }}" type="text/javascript"></script>
@endsection