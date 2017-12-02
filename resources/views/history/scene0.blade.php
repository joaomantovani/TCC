@extends('master')

@section('navbar')
@endsection

@section('css')
@parent
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<style type="text/css">
	body {
		background-image: linear-gradient(rgba(20,20,20, .7), rgba(20,20,20, .3)), url('https://images.pexels.com/photos/323780/pexels-photo-323780.jpeg?w=1260&h=750&auto=compress&cs=tinysrgb') !important;
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
		margin-bottom: 5em !important;
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
			margin-bottom: 2em !important;
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

	<span class="other no-one">
		<span id="typed"></span>&zwnj;
		<img class="ui middle aligned rounded image" src="">
	</span>

	<span class="other father">
		<span id="typed"></span>&zwnj;
		<img class="ui middle aligned rounded image" src="illustrations/avatar/13.png">
	</span>

	<span class="you">
		<img class="ui middle aligned rounded image" src="{{ Auth::user()->getAvatar() }}">
		<span id="typed"></span>&zwnj;
	</span>

	<span class="other mom">
		<span id="typed"></span>&zwnj;
		<img class="ui middle aligned rounded image" src="illustrations/avatar/7.png">
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
		dialogue1_short = new Audio("sfx/dialogue1_short.wav");
		dialogue1_medium = new Audio("sfx/dialogue1_medium.wav");
		dialogue1_long = new Audio("sfx/dialogue1_long.wav");
		whoosh = new Audio('sfx/whoosh.wav');

		$('.pusher').removeClass('pusher');
		// dialog1();
		whoosh.play();
		$('.you').transition({ animation  : 'fly up', duration   : '2s', onComplete : function() {
			$('.you').transition({ animation  : 'tada', duration   : '2s', onComplete : function() {
				dialog1();
			}});
		}});
	});

	function username() {
		return $('#username').text();
	}

	function dialog1() {
		var typed = new Typed(".you #typed", {
		  strings: [
		  	'Esse é ' + username(),
		  	username() + ' é um pessoa jovem e bem...',
		  	'um tanto quanto acomodado sobre sua situação atual',
		  ],
		  typeSpeed: 40,startDelay: 1000,cursorChar: '',
		  onComplete: (self) => {
				whoosh.play();
		  	$('.you').transition({ animation  : 'fly up', duration   : '2s', onComplete : function() {
					whoosh.play();
					$('.other.no-one').transition({ animation  : 'fly up', duration   : '1s', onComplete : function() {
		  			dialog2();
		  		}});
		  	}});
		  },
		  preStringTyped: (arrayPos, self) => {
				switch (arrayPos) {
					case 0: dialogue1_short.play(); break;
					case 1: dialogue1_long.play(); break;
					case 2: dialogue1_long.play(); break;
				}
			},
		});
	}

	function dialog2() {
		var typed = new Typed(".other.no-one #typed", {
		  strings: [
		  	username() + ' mora com seus pais',
		  	'numa casa grande e confortável',
		  ],
		  typeSpeed: 40, startDelay: 1000, cursorChar: '',
		  onComplete: (self) => {
				whoosh.play();
		  	$('.other.no-one').transition({ animation  : 'fly up', duration   : '1s', onComplete : function() {
					whoosh.play();
					$('.other.mom').transition({ animation  : 'fly up', duration   : '2s', onComplete : function() {
		  			dialog3();
		  		}});
		  	}});
		  },
		  preStringTyped: (arrayPos, self) => {
				switch (arrayPos) {
					case 0: dialogue1_medium.play(); break;
					case 1: dialogue1_medium.play(); break;
				}
			},
		});
	}

	function dialog3() {
		var typed = new Typed(".other.mom #typed", {
		  strings: [
		  	'Sua mãe é uma empresária de sucesso',
		  	'Ela é uma mulher forte, dedicada e com ambição',
		  	'apesar de todas as características de uma empresária',
		  	'com sua familia ela acaba tendo um coração mole',
		  	'muitas vezes mimando seu filho.',
		  ],
		  typeSpeed: 40, startDelay: 1000, cursorChar: '',
		  onComplete: (self) => {
				whoosh.play();
		  	$('.other.mom').transition({ animation  : 'fly up', duration   : '2s', onComplete : function() {
					whoosh.play();
					$('.other.father').transition({ animation  : 'fly up', duration   : '2s', onComplete : function() {
		  			dialog4();
		  		}});
		  	}});
		  },
		  preStringTyped: (arrayPos, self) => {
				switch (arrayPos) {
					case 0: dialogue1_medium.play(); break;
					case 1: dialogue1_long.play(); break;
					case 2: dialogue1_long.play(); break;
					case 3: dialogue1_long.play(); break;
					case 4: dialogue1_medium.play(); break;
				}
			},
		});
	}

	function dialog4() {
		var typed = new Typed(".other.father #typed", {
		  strings: [
		  	'Seu pai é gerente de TI',
		  	'Por ocupar uma posição de liderança',
		  	'Ele acaba passando pouco tempo com sua familia',
		  	'e também é muito estressado',
		  ],
		  typeSpeed: 40, startDelay: 1000, cursorChar: '',
		  onComplete: (self) => {
				whoosh.play();
		  	$('.other.father').transition({ animation  : 'fly up', duration   : '2s', onComplete : function() {
					whoosh.play();
					$('.you').transition({ animation  : 'fly up', duration   : '2s', onComplete : function() {
		  			window.location.href = '/scene1';
		  		}});
		  	}});
		  },
		  preStringTyped: (arrayPos, self) => {
				switch (arrayPos) {
					case 0: dialogue1_medium.play(); break;
					case 1: dialogue1_long.play(); break;
					case 2: dialogue1_long.play(); break;
					case 3: dialogue1_medium.play(); break;
				}
			},
		});
	}

	$('#btn-skip-history').click(function(){
	   window.location.href = '/scene1';
	})
</script>
@endsection
