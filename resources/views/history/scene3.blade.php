@extends('master')

@section('navbar')
@endsection

@section('css')
@parent
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<style type="text/css">
	body {
		background-image: linear-gradient(rgba(20,20,20, .7), rgba(20,20,20, .3)), url('https://static.pexels.com/photos/139303/pexels-photo-139303.jpeg') !important;
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

	<span class="other friend">
		<span id="typed"></span>&zwnj;
		<img class="ui middle aligned rounded image" src="illustrations/avatar/13.png">
		{{-- <img class="ui middle aligned rounded image" src="http://placehold.it/120x120"> --}}
	</span>

	<span class="you">
		<img class="ui middle aligned rounded image" src="{{ Auth::user()->getAvatar() }}">
		{{-- <img class="ui middle aligned rounded image" src="http://placehold.it/120x120"> --}}
		<span id="typed"></span>&zwnj;
	</span>
</div>

<span id="username" style="display: none">{{ Auth::user()->username }}</span>

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

	function username() {
		return $('#username').text();
	}

	function dialog1() {
		$('.other.friend').transition({ animation  : 'fly down', duration   : '2s', onComplete : function() {
			$('.other.friend').transition({ animation  : 'tada', duration   : '2s', onComplete : function() {
				var typed = new Typed(".other #typed", {
				  strings: [
				  	'Ei!', 
				  	username() + ' Ei!!!', 
				  ],
				  typeSpeed: 40,
				  startDelay: 1000,
				  cursorChar: '',
				  onComplete: (self) => {
				  	$('.you').transition({ animation  : 'fly up', duration   : '2s', onComplete : function() { dialog2(); }});
				  },
				  onStringTyped: (arrayPos, self) => {},
				});
			}});		
		}});
	}

	function dialog2() {
		var typed = new Typed(".you #typed", {
		  strings: [
		  	'E ai cara!', 
		  	'Quanto tempo', 
		  	'Como você está?', 
		  ],
		  typeSpeed: 40,
		  startDelay: 1000,
		  cursorChar: '',
		  onComplete: (self) => {
		  	dialog3();
		  },
		  onStringTyped: (arrayPos, self) => {},
		});
	}

	function dialog3() {
		var typed = new Typed(".other #typed", {
		  strings: [
		  	'Muito bem, comecei aquele curso na Faculdade', 
		  	'Estou quase formado já',
		  	'Último semestre, sou veterano hehe', 
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
		  	'Meu pai falou que eu precisava fazer algo',
		  	'Meu pai falou que eu precisava fazer algo',
		  	'mas está tudo tão tranquilo.',
		  	'Não queria começar uma nova rotina'
		  ],
		  typeSpeed: 40,
		  startDelay: 1000,
		  cursorChar: '',
		  onComplete: (self) => {
		  	$('.other.friend').addClass('animated pulse');
		  	$('.other.friend').removeClass('animated pulse');
		  	dialog5();
		  },
		  onStringTyped: (arrayPos, self) => {},
		});
	}

	function dialog5() {
		var typed = new Typed(".other #typed", {
		  strings: [
		  	'Seu pai tem razão',
		  	'Você realmente precisa fazer algo da sua vida',
		  	'Você mal percebe e o tempo já passou',
		  	'Tem que aproveitar que você é jovem',
		  	'Por que não tenta a mesma faculdade que eu?'
		  ],
		  typeSpeed: 40,
		  startDelay: 1000,
		  cursorChar: '',
		  onComplete: (self) => {
		  	$('.other.friend').addClass('animated shake');
		  	$('.other.friend').removeClass('animated shake');
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
		  	'A sua faculdade?',
		  	'Hmm...',
		  	'Eu não tinha pensado nisso...',
		  	'Onde você estuda mesmo?',
		  ],
		  typeSpeed: 40,
		  startDelay: 1000,
		  cursorChar: '',
		  onComplete: (self) => {
		  	$('.other.friend')
		  	  .transition({ animation  : 'tada', duration   : '1s', onComplete : function() {
		  	      dialog7();
		  	}});
		  },
		  onStringTyped: (arrayPos, self) => {},
		});
	}

	function dialog7() {
		var typed = new Typed(".other.friend #typed", {
		  strings: [
		  	'Estou estudando na Fatec',
		  	'Estou estudando na Fatec',
		  	'Faço a noite lá, tem vários cursos',
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
		var typed = new Typed(".friend #typed", {
		  strings: [
		  	'Agora que estamos conversando eu lembrei',
		  	'Está no período de inscrição, você tem que tentar!',
		  	'É só fazer a prova e esperar o inicio das aulas'
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
		var typed = new Typed(".you #typed", {
		  strings: [
		  	'Bem, eu acho que você tem razão',
		  	'Vou tentar passar!',
		  	'Me aguarde no próximo semestre'
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
		var typed = new Typed(".friend #typed", {
		  strings: [
		  	'É isso ai!',
		  	'É isso ai!',
		  	'Te espero no próximo semestre hein!'
		  ],
		  typeSpeed: 40,
		  startDelay: 1000,
		  cursorChar: '',
		  onComplete: (self) => {
		  	$('.other.friend').transition({ animation  : 'fly down', duration   : '2s', });
		  	$('.you').transition({ animation  : 'fly up', duration   : '2s', 	
		  		onComplete: (self) => {
		  		window.location.href = '/scene2';
		  	}});
		  },
		  onStringTyped: (arrayPos, self) => {},
		});
	}

	$('#btn-skip-history').click(function(){
	   window.location.href = '/home';
	})
</script>
@endsection