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
	@show

</body>
</html>
