<!DOCTYPE html>
<html>
<head>

	@section('css')
	<link rel="stylesheet" href="{{ asset('css/master.css') }}">
	<link rel="stylesheet" type="text/css" href="http://devsmash.com/css/jquery.kwicks-2.2.1.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome.min.css') }}">
	@show

</head>
<body>

	@include('common.navbar')

	@yield('content')

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
	@show

</body>
</html>
