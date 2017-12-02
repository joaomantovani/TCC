@extends('master')

@section('navbar')
@endsection

@section('css')
@parent
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<style type="text/css">
	body {
		background-image: linear-gradient(rgba(20,20,20, .7), rgba(20,20,20, .3)), url('https://images.pexels.com/photos/189333/pexels-photo-189333.jpeg?w=940&h=650&auto=compress&cs=tinysrgb') !important;
		background-size:     cover !important;
	    background-repeat:   no-repeat !important;
	    background-position: center center !important;
	}

	::-webkit-scrollbar {
	    display: none;
	}

	#btn-menu-sidebar {
		display: none;
	}
	#typed, .typed-cursor  {
		font-size: 2em;
	}

	#typed  {
		padding-left: 1em;
		padding-right: 1em;
	}

	.you {
		bottom: 0 !important;
		position: absolute;
		margin-bottom: 5em;
		display: none;
	}

	#typed, .typed-cursor  {
		color: white !important;
		text-shadow: 2px 4px 3px rgba(0,0,0,0.3) !important;
	}

	@media only screen and (max-width: 767px) {
		.you img, .other img {
			width: 70px;
		    height: auto;
		    font-size: .78571429rem;
		}

		.other {
			margin-top: 50px !important;
		}

		.you {
			margin-bottom: 10px !important;
		}


		#typed, .typed-cursor  {
			font-size: 1.37em;
		}
	}

	.other {
		float: right !important;
		margin-top: 3em;
		display: none;
	}
</style>
@endsection

@section('content')
<div class="ui container">

	<span class="other father">
		<span id="typed"></span>&zwnj;
		<img class="ui middle aligned rounded image" src="illustrations/avatar/13.png">
		{{-- <img class="ui middle aligned rounded image" src="http://placehold.it/120x120"> --}}
	</span>

	<span class="you">
		<img class="ui middle aligned rounded image" src="{{ Auth::user()->getAvatar() }}">
		{{-- <img class="ui middle aligned rounded image" src="http://placehold.it/120x120"> --}}
		<span id="typed"></span>&zwnj;
	</span>

	<span class="other mom">
		<span id="typed"></span>&zwnj;
		<img class="ui middle aligned rounded image" src="illustrations/avatar/7.png">
		{{-- <img class="ui middle aligned rounded image" src="http://placehold.it/120x120?text=mae"> --}}
	</span>
</div>

<button class="circular ui small black icon button" id="btn-skip-history">
  <i class="icon arrow right"></i> Pular
</button>

@endsection

@section('js')
@parent
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.6/typed.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		dialogue1_short = new Audio("sfx/dialogue1_short.wav");
		dialogue1_medium = new Audio("sfx/dialogue1_medium.wav");
		dialogue1_long = new Audio("sfx/dialogue1_long.wav");
		whoosh = new Audio('sfx/whoosh.wav');
		$('.pusher').removeClass('pusher');

		whoosh.play();
		$('.you').transition({ animation  : 'fly up', duration   : '2s', onComplete : function() { dialog2(); }});
	});

	function dialog2() {
		var typed = new Typed(".you #typed", {
		  strings: [
		  	'Pai!!',
		  	'Mãe!!',
		  	'Eu passei!',
		  ],
		  typeSpeed: 40,
		  startDelay: 1000,
		  cursorChar: '',
		  onComplete: (self) => {
				whoosh.play();
		  	$('.other.father').transition({ animation  : 'fly up', duration   : '2s', onComplete : function() { dialog3(); }});
		  	$('.other.father').addClass('animated pulse');
		  	$('.other.father').removeClass('animated pulse');
		  },
		  preStringTyped: (arrayPos, self) => {
				switch (arrayPos) {
					case 0: dialogue1_short.play(); break;
					case 1: dialogue1_short.play(); break;
					case 2: dialogue1_short.play(); break;
				}
			},
		});
	}

	function dialog3() {
		var typed = new Typed(".other #typed", {
		  strings: [
		  	'Passou?',
		  	'Como assim passou?',
		  	'Não estou entendendo nada',
		  ],
		  typeSpeed: 40,
		  startDelay: 1000,
		  cursorChar: '',
		  onComplete: (self) => {
		  	// $('.you').addClass('animated shake');
		  	dialog4();
		  },
		  preStringTyped: (arrayPos, self) => {
				switch (arrayPos) {
					case 0: dialogue1_short.play(); break;
					case 1: dialogue1_short.play(); break;
					case 2: dialogue1_medium.play(); break;
				}
			},
		});
	}

	function dialog4() {
		var typed = new Typed(".you #typed", {
		  strings: [
		  	'Eu fiz a prova la da Fatec',
				'Eu fiz a prova la da Fatec',
		  	'Encontrei um amigo que me convenceu',
		  ],
		  typeSpeed: 40,
		  startDelay: 1000,
		  cursorChar: '',
		  onComplete: (self) => {
		  	$('.other.father').addClass('animated pulse');
		  	$('.other.father').removeClass('animated pulse');
		  	dialog5();
		  },
		  preStringTyped: (arrayPos, self) => {
				switch (arrayPos) {
					case 0: dialogue1_medium.play(); break;
					case 1: dialogue1_medium.play(); break;
					case 2: dialogue1_long.play(); break;
				}
			},
		});
	}

	function dialog5() {
		var typed = new Typed(".other #typed", {
		  strings: [
		  	'HAHAHA',
				'HAHAHA',
		  	'Isso era uma coisa que eu não esperava',
		  	'Meus parabéns',
		  	'Mas que curso você escolheu?',
		  ],
		  typeSpeed: 40,
		  startDelay: 1000,
		  cursorChar: '',
		  onComplete: (self) => {
		  	$('.other.father').addClass('animated shake');
		  	$('.other.father').removeClass('animated shake');
		  	$('.you').addClass('animated swing');
		  	$('.you').removeClass('animated swing');
		  	dialog6();
		  },
		  preStringTyped: (arrayPos, self) => {
				switch (arrayPos) {
					case 0: dialogue1_short.play(); break;
					case 1: dialogue1_short.play(); break;
					case 2: dialogue1_long.play(); break;
					case 3: dialogue1_short.play(); break;
					case 4: dialogue1_medium.play(); break;
				}
			},
		});
	}

	function dialog6() {
		var typed = new Typed(".you #typed", {
		  strings: [
		  	'Eu escolhi o curso...',
				'Eu escolhi o curso...',
		  ],
		  typeSpeed: 40,
		  startDelay: 1000,
		  cursorChar: '',
		  onComplete: (self) => {
				window.location.href = '/home';
		  },
		  preStringTyped: (arrayPos, self) => {
				switch (arrayPos) {
					case 0: dialogue1_medium.play(); break;
					case 1: dialogue1_medium.play(); break;
				}
			},
		});
	}



	$('#btn-skip-history').click(function(){
	   window.location.href = '/home';
	})
</script>
@endsection
