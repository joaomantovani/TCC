@extends('master')

@section('css')
@parent
<style type="text/css">
	.history span.terminal {
		font-size: 36px;
		text-align: center;
		line-height: 24px;
	}

	.history {
		margin-top: 5em;w
	}

	.text-editor-wrap {
	  display: block;
	  margin-top: auto;
	  margin-right: auto;
	  margin-bottom: auto;
	  margin-left: auto;
	  max-width: 530px;
	  border-top-left-radius: 10px;
	  border-top-right-radius: 10px;
	  border-bottom-right-radius: 10px;
	  border-bottom-left-radius: 10px;
	  box-shadow: rgba(0, 0, 0, 0.8) 0px 20px 70px;
	  clear: both;
	  overflow-x: hidden;
	  overflow-y: hidden;
	  transition-duration: 0.5s;
	  transition-timing-function: ease-out;
	  transition-delay: initial;
	  transition-property: all;
	}
	.title-bar {
	  padding-top: 5px;
	  padding-right: 0px;
	  padding-bottom: 5px;
	  padding-left: 0px;
	  font-family: "Lucida Grande", sans-serif;
	  font-size: 0.75em;
	  text-align: center;
	  text-shadow: rgba(255, 255, 255, 0.8) 0px 1px 0px;
	  background-color: rgb(248, 248, 248);
	  background-image: -webkit-linear-gradient(top, rgb(232, 232, 232), rgb(188, 187, 188));
	  box-shadow: rgba(255, 255, 255, 0.7) 0px 1px 1px inset;
	  border-bottom-width: 1px;
	  border-bottom-style: solid;
	  border-bottom-color: rgb(106, 106, 106);
	}
	.shift-text .text-body {
	  height: 120px;
	}
	.text-body {
	  height: 250px;
	  background-color: rgba(0, 0, 0, 0.85);
	  padding-top: 10px;
	  padding-right: 10px;
	  padding-bottom: 10px;
	  padding-left: 10px;
	  color: rgb(240, 240, 240);
	  text-shadow: rgb(0, 0, 0) 0px 1px 0px;
	  font-family: Consolas, "Courier New", Courier;
	  font-size: 1.75em;
	  line-height: 1.4em;
	  font-weight: 500;
	  text-align: left;
	  overflow-x: hidden;
	  overflow-y: hidden;
	  transition-duration: 0.5s;
	  transition-timing-function: ease-out;
	  transition-delay: initial;
	  transition-property: all;
	}
	.typed-cursor {
	  opacity: 1;
	  font-weight: 100;
	  animation-duration: 0.7s;
	  animation-timing-function: initial;
	  animation-delay: initial;
	  animation-iteration-count: infinite;
	  animation-direction: initial;
	  animation-fill-mode: initial;
	  animation-play-state: initial;
	  animation-name: blink;
	}
</style>
@endsection

@section('content')

<div class="ui container history">
	<div class="ui centered grid">
		<div class="six wide tablet eight wide computer column">

			<div class="text-editor-wrap">
				<div class="title-bar"><span class="title">inicio.js — bash — 80x<span class="terminal-height">10</span></span></div>
				<div class="text-body">
					$ <span class="terminal" id="opening1"></span>
					<span class="terminal" id="opening2"></span>
					<span class="terminal" id="history1"></span>
					<span class="terminal" id="history2"></span>
				</div>
			</div>

			<br><br><br>
			<div class="fluid ui buttons" id="opening1_buttons">
			  <button class="ui black button">Não me importo</button>
			  <button class="ui black button">Claro, o que aconteceu?</button>
			</div>

		</div>
	</div>
</div>

@endsection

@section('js')
@parent
<script type="text/javascript">
	$("#opening1_buttons").hide();
</script>
<script src="{{ asset('js/state-machine.min.js') }}" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.6/typed.min.js"></script>

<script type="text/javascript">
	function text() {
		this.t1 = 't1';
		this.t2 = 't2';
	}

	var story = new text();

	console.log(story.t1);
</script>

<script type="text/javascript">
	var fsm = new StateMachine({
		init: 'opening',
		transitions: [
			{ name: 'opening1',  from: 'opening', to: 'o_que_esta_acontecendo_question' },
			{ name: 'o_que_esta_acontecendo_question',  from: 'o_que_esta_acontecendo_question', to: 'o_que_esta_acontecendo_answer'  },
			{ name: 'o_que_esta_acontecendo_answer', from: 'o_que_esta_acontecendo_answer', to: 'history2'    },
			{ name: 'history2', from: 'gas',    to: 'liquid' }
		],
		methods: {
			onOpening1: function() { 
				console.log('opening1');

				var typed2 = new Typed('#opening1', {
				    strings: ['Bem vindo <i>seu nome</i>', 'Você deve estar se perguntando', 'O que está acontecendo com a Fatec?'],
				    typeSpeed: 40,
				    backSpeed: 10,
				    fadeOut: true,
				    loop: false,
				    onComplete: function(self) { $( "#opening1_buttons" ).show("slow") },
				});

			},
			onOpening2: function() { console.log('I froze')     },
			onHistory1: function() { console.log('I vaporized') },
			onHistory2: function() { console.log('I condensed') }
		}
	});
</script>

<script type="text/javascript">
	fsm.onOpening1();
	fsm.onOpening2();
	fsm.onHistory1();
	fsm.onHistory2();
</script>
@endsection