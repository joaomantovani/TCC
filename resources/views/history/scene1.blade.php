@extends('master')

@section('navbar')
@endsection

@section('css')
@parent
<style type="text/css">
	#btn-menu-sidebar {
		display: none;
	}
	#typed, .typed-cursor  {
		font-size: 2em;	
	}

	#typed  {
		padding-left: 1em;
	}

	.you {
		bottom: 0 !important;
		position: absolute;
		margin-bottom: 5em;
		display: none;
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
			margin-bottom: 350px !important;
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

	<span class="other">
		<span id="typed"></span>
		<img class="ui middle aligned rounded image" src="illustrations/avatar/13.png">
	</span>

	<span class="you">
		<img class="ui middle aligned rounded image" src="{{ Auth::user()->getAvatar() }}">
		<span id="typed"></span>
	</span>
</div>

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
		$('.you').transition('fly up');
		$('.other').transition('fly down');

		var typed = new Typed(".other #typed", {
		  strings: [
		  	'Filho', 
		  	'Venha já aqui', 
		  	'Estou mandando!', 
		  ],
		  typeSpeed: 20,
		  startDelay: 1000,
		  onComplete: (self) => {
		  	dialog2();
		  },
		  onStringTyped: (arrayPos, self) => {},
		});
	}

	function dialog2() {
		var typed = new Typed(".you #typed", {
		  strings: [
		  	'Filho', 
		  	'Venha já aqui', 
		  	'Estou mandando!', 
		  ],
		  typeSpeed: 20,
		  startDelay: 1000,
		  onComplete: (self) => {
		  	dialog3();
		  },
		  onStringTyped: (arrayPos, self) => {},
		});
	}

	function dialog3() {
		var typed = new Typed(".other #typed", {
		  strings: [
		  	'Agora vamos mudar de texto', 
		  	'kk eae men', 
		  	'MUAHAUHUA!', 
		  ],
		  typeSpeed: 20,
		  startDelay: 1000,
		  onComplete: (self) => {
		  	// dialog2();
		  },
		  onStringTyped: (arrayPos, self) => {},
		});
	}
</script>
@endsection