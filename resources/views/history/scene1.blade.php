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
	
		$('.pusher').removeClass('pusher');

		dialog1();
	});

	function dialog1() {
		$('.other.father').transition({ animation  : 'fly down', duration   : '2s', });

		var typed = new Typed(".other #typed", {
		  strings: [
		  	'Filho', 
		  	'Venha já aqui', 
		  	'Estou mandando!', 
		  ],
		  typeSpeed: 40,
		  startDelay: 1000,
		  cursorChar: '',
		  onComp55ete: (self) => {
		  	$('.you').transition({ animation  : 'fly up', duration   : '2s', onComplete : function() { dialog2(); }});
		  },
		  onStringTyped: (arrayPos, self) => {},
		});
	}

	function dialog2() {
		var typed = new Typed(".you #typed", {
		  strings: [
		  	'Oi pai', 
		  	'Estou aqui', 
		  	'O que foi?', 
		  ],
		  typeSpeed: 40,
		  startDelay: 1000,
		  cursorChar: '',
		  onComplete: (self) => {
		  	dialog3();
		  	$('.other.father').addClass('animated pulse');
		  	$('.other.father').removeClass('animated pulse');
		  },
		  onStringTyped: (arrayPos, self) => {},
		});
	}

	function dialog3() {
		var typed = new Typed(".other #typed", {
		  strings: [
		  	'Você já terminou seus estudos e não está fazendo nada', 
		  	'Você só fica jogando nesse computador',
		  	'o dia inteiro sem parar', 
		  	'Você tem que fazer algo da sua vida', 
		  ],
		  typeSpeed: 40,
		  startDelay: 1000,
		  cursorChar: '',
		  onComplete: (self) => {
		  	// $('.you').addClass('animated shake');
		  	dialog4();
		  },
		  onStringTyped: (arrayPos, self) => {},
		});
	}

	function dialog4() {
		var typed = new Typed(".you #typed", {
		  strings: [
		  	'Mas pai...', 
		  	'Eu não quero'
		  ],
		  typeSpeed: 40,
		  startDelay: 1000,
		  cursorChar: '',
		  onComplete: (self) => {
		  	$('.other.father').addClass('animated pulse');
		  	$('.other.father').removeClass('animated pulse');
		  	dialog5();
		  },
		  onStringTyped: (arrayPos, self) => {},
		});
	}

	function dialog5() {
		var typed = new Typed(".other #typed", {
		  strings: [
		  	'"Eu não quero" nada',
		  	'Ou você vai ir estudar',
		  	'Ou você vai ir trabalhar',
		  	'Na minha casa sem fazer nada',
		  	'Você não fica'
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
		  onStringTyped: (arrayPos, self) => {},
		});
	}

	function dialog6() {
		var typed = new Typed(".you #typed", {
		  strings: [
		  	'Mãe',
		  	'Mãããe...',
		  	'Mããããããeeeee...',
		  ],
		  typeSpeed: 40,
		  startDelay: 1000,
		  cursorChar: '',
		  onComplete: (self) => {
		  	$('.other.father').addClass('animated pulse');
		  	$('.other.father').removeClass('animated pulse');

		  	$('.other.father')
		  	  .transition({
		  	    animation  : 'fly down',
		  	    duration   : '2s',
		  	    onComplete : function() {
		  	      $('.other.mom').transition({ animation  : 'fly down', duration   : '2s', onComplete : function() { dialog7(); }});
		  	    }
		  	  })
		  	;

		  },
		  onStringTyped: (arrayPos, self) => {},
		});
	}

	function dialog7() {
		var typed = new Typed(".other.mom #typed", {
		  strings: [
		  	'Oi filho',
		  	'O que foi?',
		  ],
		  typeSpeed: 40,
		  startDelay: 1000,
		  cursorChar: '',
		  onComplete: (self) => {
		  	dialog8();
		  },
		  onStringTyped: (arrayPos, self) => {},
		});
	}

	function dialog8() {
		var typed = new Typed(".you #typed", {
		  strings: [
		  	'O pai quer quer que vá logo fazer algo',
		  	'Vocês me disseram que eu poderia',
		  	'Tirar um ano de folga...'
		  ],
		  typeSpeed: 40,
		  startDelay: 1000,
		  cursorChar: '',
		  onComplete: (self) => {
		  	dialog9();
		  },
		  onStringTyped: (arrayPos, self) => {},
		});
	}

	function dialog9() {
		var typed = new Typed(".other.mom #typed", {
		  strings: [
		  	'Sim, nos dissemos',
		  	'Seu pai está meio nervoso',
		  	'Vou conversar com ele...'
		  ],
		  typeSpeed: 40,
		  startDelay: 1000,
		  cursorChar: '',
		  onComplete: (self) => {
		  	dialog10();
		  },
		  onStringTyped: (arrayPos, self) => {},
		});
	}

	function dialog10() {
		var typed = new Typed(".you #typed", {
		  strings: [
		  	'Ok mãe',
		  	'Obrigado'
		  ],
		  typeSpeed: 40,
		  startDelay: 1000,
		  cursorChar: '',
		  onComplete: (self) => {
		  	$('.other.mom').transition({ animation  : 'fly down', duration   : '2s', });
		  	$('.you').transition({ animation  : 'fly up', duration   : '2s', 	
		  		onComplete: (self) => {
		  		window.location.href = '/scene2';
		  	}});
		  },
		  onStringTyped: (arrayPos, self) => {},
		});
	}

	$('#btn-skip-history').click(function(){
	   window.location.href = '/scene2';
	})
</script>
@endsection