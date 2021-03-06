<!DOCTYPE html>
<html>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-86211771-2"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-86211771-2');
	</script>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	@section('css')
	<link rel="stylesheet" href="{{ asset('css/master.css') }}">
	<link rel="stylesheet" type="text/css" href="http://devsmash.com/css/jquery.kwicks-2.2.1.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome.min.css') }}">
	<style media="screen">
		::-webkit-scrollbar {
    width: 12px;
}

::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    border-radius: 10px;
}

::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5);
		background-color: rgb(45, 46, 47);
}
	</style>
	@show

</head>
<body>
	@section('navbar')

		{{-- <span class="computer only"> --}}
			@include('common.navbar')
		{{-- </span> --}}

		<span class="computer only">
			@include('common.desktop-navbar')
		</span>

	@show

	<div class="pusher">
		<br>
		@yield('content')
		<br>

		<button class="circular ui massive black icon button" id="btn-menu-sidebar">
		  <i class="icon bars"></i>
		</button>
  	</div>

	{{-- @if ( ! isset($achievement) )
		<span class="achievement_trigger" style="display: none"
			achievement-title="{{ $achievement->name }}"
			achievement-points="{{ $achievement->exp }}"
			achievement-currency=""
			achievement-name="{{ $achievement->description }}"
			achievement-icon="fa-trophy"
			achievement-sound="T"
		></span>
	@endif --}}

	@section('js')
	<script src="{{ asset('js/master.js') }}" type="text/javascript"></script>
	<script src="http://devsmash.com/js/jquery.kwicks-2.2.1.js" type="text/javascript"></script>
	<script type="text/javascript">
		$('.message').hide();

		$('.message .close')
		.on('click', function() {
			$(this)
			.closest('.message')
			.transition('fade')
			;
		})
		;
	</script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			if( $('.achievement_trigger').length ) {

				$().achievement_alert({
					display : $('.achievement_trigger').attr('achievement-display'),
			        title : $('.achievement_trigger').attr('achievement-title'),
			        points : $('.achievement_trigger').attr('achievement-points'),
			        currency : $('.achievement_trigger').attr('achievement-currency'),
			        name : $('.achievement_trigger').attr('achievement-name'),
			        icon : $('.achievement_trigger').attr('achievement-icon'),
			        sound : $('.achievement_trigger').attr('achievement-sound'),
				});
			}
		});
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/foggy/1.1.1/jquery.foggy.min.js"></script>
	<script type="text/javascript">
		// $('.item').foggy();
		// var cont = 1;
		// var positivo = false;
		// var negativo = true;

		// function LoopForever() {
		//     if (cont < .1) { positivo = true; negativo = false; }
		//     if (cont > .9) { positivo = false; negativo = true; }

		//     if (negativo) cont -= 0.01;
		//     if (positivo) cont += 0.01;

		//     $('.item').each(function(index) {
		//        $('.item').foggy({
		//           blurRadius: cont + .2,          // In pixels.
		//           opacity: cont,           // Falls back to a filter for IE.
		//           cssFilterSupport: true  // Use "-webkit-filter" where available.
		//        });
		//     });
		// }

		// var interval = self.setInterval(function(){LoopForever()}, 1);
	</script>
	@show

</body>
</html>
