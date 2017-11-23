@extends('master')

@section('css')
@parent
<link rel="stylesheet" href="{{ asset('css/action.css') }}">
<style type="text/css" media="screen">
	body {
		background: #ebebeb;
	}

	@media only screen and (max-width: 768px) {
		#first-label {
			width: 100%;
			margin-bottom: 5px;
		}

		#second-label {
			width: 100%;
			margin-bottom: 5px;
		}
	}
</style>
@endsection

@section('content')

<div class="ui centered container">	
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
	                    @foreach($actions as $action)
	                    <div class="select item" data-value="{{ $action }}">
	                        @if ($action->class_id)
	                        <span class="ui right pointing red basic label">Exclusivo {{ Auth::user()->info->class()->first()->name }}</span>
	                        @endif
	                        {{ $action->name }} 
	                    </div>
	                    @endforeach
	                </div>
	            </div>
	        </div>
	        {{-- Estatiscas de ação --}}
	        <div id="action-template">
	            <div class="ui fluid card">
	                <div class="content">
	                    <div class="header action-name">Escolha uma ação para fazer</div>
	                    <div class="description action-description">
	                        Na parte de cima, clique no dropdown para abrir a lista de ações
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
</div>

@endsection

@section('js')
@parent

<script type="text/javascript">
	function showMessage(type, message, title, icon = "warning") {
		$('.message').removeClass("success negative info")
		$('.message').addClass(type);
		$('.message .header').text(title);
		$('.message .msg').html(message);
		$('.message .icon').addClass(icon);

		if ( type == 'success')
			$('.message').transition('scale');
		else 
			$('.message').transition('shake');
	}

	$(document).ready(function() {
		//Verifica se o select é acionado
		$('.select.item').on('click', function(event) {
			event.preventDefault();

			//Pega o objeto que representa a ação
			var action = $(this).data().value;
			var dificuldade = action.difficult;
			var dificuldade_text = '';
			console.log(action);

			if      (dificuldade <= 10)  { dificuldade_text = 'Fácil';       color_class = 'green'; }
			else if (dificuldade <= 30)  { dificuldade_text = 'Tranquilo';   color_class = 'green'; }
			else if (dificuldade <= 50)  { dificuldade_text = 'Razoavél';    color_class = 'olive'; }
			else if (dificuldade <= 70)  { dificuldade_text = 'Complicado';  color_class = 'yellow'; }
			else if (dificuldade <= 90)  { dificuldade_text = 'Díficil';     color_class = 'orange'; }
			else if (dificuldade <= 99)  { dificuldade_text = 'Muito díficil';     color_class = 'red'; }
			else if (dificuldade <= 100)  { dificuldade_text = 'Extremo';     color_class = 'black'; }

			//Atribui os valores para os campos
			$('#action-template .action-name').text(action.name);
			$('#action-template .action-description').text(action.description);
			$('#action-template .action-description').append(  "<h2></h2>" );
			$('#action-template .action-description').append('<div id="first-label" class="ui large label"> <i class="lightning yellow icon"></i> <strong>'+ action.energy_required +'</strong> <div class="detail">Stamina necessária</div></div>');
			$('#action-template .action-description').append('<div id="second-label" class="ui large label"> <i class="bitcoin yellow icon"></i> <strong>'+ action.reward +'</strong> <div class="detail">Recompensa</div></div>');
			$('#action-template .action-description').append(  "<h2></h2>" );
			$('#action-template .action-description').append('<div id="bardiff" class="ui active '+ color_class +' progress" data-percent="'+ dificuldade +'"> <div class="bar" style="transition-duration: 300ms; width: '+ dificuldade +'%;"> <div class="label progress">'+ dificuldade +'</div> </div> <div class="label">'+ dificuldade_text +'</div> </div>');

			

			//Resultado do calculo de logica fuzzy em difucldade [NW]
			// $('.progress').progress({ percent: Math.floor((Math.random() * 100) + 1) });
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
		var data = $('.select.item').data().value;

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
			changeStamina(data.stamina);
			changeTensao(data.tensao);
			changeMoney(data.money);

			//Se o jogador teve sucesso na ação
			if (data.success) {
				// $('#stamina-status').text(data.stamina);
				$('#example2').progress({
				  percent: data.stamina
				});
				
				showMessage('success', data.message + data.stats_results, data.title, 'checkmark');
				
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
				showMessage('negative', 'Você não tem stamina suficiente para completar a ação, tente novamente mais tarde ou visite a loja', 'Sem stamina', 'battery empty');
			}
		})
		.fail(function() {
			alert('error');
		})
		.always(function() {
			$('#action-button').removeClass('disabled loading');
		})
	});
</script>

<script src="{{ asset('js/action.js') }}" type="text/javascript"></script>
@endsection