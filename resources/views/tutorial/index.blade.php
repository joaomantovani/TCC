@extends('master')

@section('css')
	@parent
	<link rel="stylesheet" href="{{ asset('css/tutorial.css') }}">

@endsection

@section('navbar')
@endsection

@section('content')

	@if(\Auth::user()->tutorial)
		@component('component.message')

			@slot('icon')
				thumbs outline up
			@endslot

			@slot('type')
				info
			@endslot

			@slot('title')
				Você ja completou o tutorial!
			@endslot
		    
			Caso queira pular ele, <a href="{{ url('/dashboard') }}"> clique aqui.</a>

		@endcomponent
	@endif

	<div style="position:fixed;top:50px;left:50px;color:white;z-index:999;" id="callbacksDiv"></div>

	<div id="pagepiling">
	    <div class="section" id="section1">
	    	
	    	<div class="ui text container">
	      		<h1 class="ui header">
	       			 Tutorial
	      		</h1>
	      		<h2>Pegue algumas dicas sobre o jogo!</h2>
	      		<button class="ui positive big animated button" tabindex="0" id="btn-start-tutorial">
	      		  <div class="hidden content">Inicial tutorial</div>
	      		  <div class="visible content">
	      		    Com certeza!
	      		  </div>
	      		</button>

	      		{{-- Completa o tutorial --}}
	      		{{ Form::open(['action' => 'TutorialController@finish', 'class' => 'form-same-line']) }}
	      			{{ Form::token() }}
		      		<button type="submit" class="ui big animated fade button tutorial-complete" tabindex="0">
		      			<div class="visible content">Deixa pra lá...</div>
		      		  	<div class="hidden content">
		      		    	Começar o jogo
		      		  	</div>
		      		</button>
		      	{{ Form::close() }}
	    	</div>

	    </div>

	    <div class="section" id="section2">
	    	
	    	<div class="ui inverted text container">
	      		<h1 class="ui header">
	       			Primeiros passos...
	      		</h1>
	      		Para navegar pelo tutorial, <span class="ui purple label">use as setas do teclado</span> ou <span class="ui purple label">deslize a tela com os dedos</span>

	      		<br><br>
	      		<div class="ui big purple label">Vamos, tente você!</div>
	    	</div>

	    </div>
	    
	    <div class="section" id="section3">
			<div class="ui text container">
				<h1>Comandos básicos</h1>
				<table class="ui celled padded table">
				  <thead>
				    <tr><th class="single line">Tecla</th>
				    <th>Efeito</th>
				  </tr></thead>
				  <tbody>
				    
				    <tr>
				      <td><h2 class="ui center aligned header">F2</h2></td>
				      <td class="single line">Abre a loja</td>
				    </tr>

				    <tr>
				      <td><h2 class="ui center aligned header">F3</h2></td>
				      <td class="single line">Abre o banco</td>
				    </tr>

				    <tr>
				      <td><h2 class="ui center aligned header">F4</h2></td>
				      <td class="single line">Abre o menu de ações</td>
				    </tr>

				    <tr>
				      <td><h2 class="ui center aligned header">F5</h2></td>
				      <td class="single line">Abre o perfil</td>
				    </tr>

				    {{-- <tr>
				      <td><h2 class="ui center aligned header">F5</h2></td>
				      <td class="single line">Abre o banco</td>
				    </tr> --}}

				  </tbody>
				</table>
			</div>
	    </div>

	    <div class="section" id="section4">
	    	<div class="ui text container">
				<h1>Stamina e tensão</h1>
				Esses dois são quem determina o que você pode fazer e se vai conseguir fazer eficaciamente.
				<br>
				<h3>A stamina</h3>
				Serve para fazer as ações no jogo, sem ela você fica incapaz de fazer quase tudo.
				<br><br>
				Para recuperar stamina, você deve se alimentar ou esperar apenas um tempo, mas fique esperto, a tensão influencia na recuperação da sua stamina!.
			      <h3>Tensão</h3>
			      Influencia diretamente no seu sucesso para realizar ações, quanto mais tenso estiver, maior será a chance de fracasso!
			      <br><br>
			      Caso esteja muito tenso, tente comer algo diferente, fazer alguma outra atividade ou até mesmo descansar um pouco.
			</div>
	    </div>

	    <div class="section" id="section5">
	    	<div class="ui text container">
				<h1>Ações</h1>
				Cada classe (Jogos, ADS ou SI) tem ações em comum e ações exclusivas.
				<br><br>
				É através desse local que o você vai começar a ganhar dinheiro e mais status, mas como nem tudo são flores, você vai começar a gastar sua stamina e aumentar a sua tensão em troca de poder comprar melhores equipamentos e realizar melhores ações.
			</div>
	    </div>

	    <div class="section" id="section6">
	    	<div class="ui text container">
				<h1>Lojas</h1>
				Caso a sua stamina esteja baixa, você esteja muito tenso ou simplesmente deseje melhorar suas habilidades ou equipamentos, você deve visitar a loja.
				<br><br>
				<table class="ui celled padded table">
				  <thead>
				    <tr><th class="single line">Tipo de loja</th>
				    <th>O que vende?</th>
				  </tr></thead>
				  <tbody>
				    
				    <tr>
				      <td><h2 class="ui center aligned header">Comida</h2></td>
				      <td class="">Comidas e bebidas que aumentam a sua stamina e diminuem a sua tensão</td>
				    </tr>

				    <tr>
				      <td><h2 class="ui center aligned header">Equipamentos</h2></td>
				      <td class="">Acessórios e periféricos para melhorar as suas ações</td>			
				    </tr>

				    <tr>
				      <td><h2 class="ui center aligned header">Cursos</h2></td>
				      <td class="">Venda de cursos para a melhora dos status</td>
				    </tr>

				  </tbody>
				</table> 
			</div>
	    </div>

	    <div class="section" id="section7">
	    	<div class="ui text container">
				<h1>Efeitos colaterais</h1>
				<h3>Tudo em excesso faz mal!</h3>
				Vá com calma, se você consumir muita cerveja pode acabar ficando bebado, se consumir muitos docês pode até pegar uma diabetes ou até pode entrar em estado de choque se ficar muito tenso.
				<br><br>
				Cada efeito colateral vai causar algum tipo de debuff para você, então manere nas suas ações!
			</div>
	    </div>

	    <div class="section" id="section8">
	    	<div class="ui text container">
				<h1>Banco</h1>
				Simples e rápido. Guarde seu dinheiro aqui para evitar perde-lo caso algum imprevisto aconteça e até mesmo veja o seu dinheiro rendendo na poupança. 
			</div>
	    </div>

	    <div class="section" id="section9">
	    	<div class="ui text container">
				<h1>Vilões</h1>
				São totalmente imprevisiveis e muitas vezes inevitaveis, em algum momento você pode dar de cara com algum vilão, nem todos são maus, alguns só querem imitar a esfinge ou tirar você do sério.
				<br><br>
				<strong>Fique de olho aberto!</strong>
			</div>
	    </div>

	    <div class="section" id="section10">
	    	<div class="ui text container">
				<h1>Yeah</h1>
				Você já sabe algumas dicas iniciais, o resto você pode descobrir jogando.
				<br><br>
				{{ Form::open(['action' => 'TutorialController@finish', 'class' => 'form-same-line']) }}
	      			{{ Form::token() }}
		      		<button type="submit" class="ui big animated fade button tutorial-complete" tabindex="0">
		      			<div class="visible content">Terminar o tutorial</div>
		      		  	<div class="hidden content">
		      		    	Começar o jogo
		      		  	</div>
		      		</button>
		      	{{ Form::close() }}
			</div>
	    </div>

	</div>

	{{-- <ul id="menu">
		<div data-menuanchor="page1" class="active"><a href="#page1">Page 1</a></div>
		<li data-menuanchor="page2"><a href="#page2">Page 2</a></li>
		<li data-menuanchor="page3"><a href="#page3">Page 3</a></li>
	</ul> --}}

@endsection

@section('js')
	@parent
	<script src="{{ asset('js/tutorial.js') }}" type="text/javascript"></script>
@endsection