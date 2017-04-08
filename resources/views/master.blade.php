<!DOCTYPE html>
<html>
<head>

	@section('css')
	<link rel="stylesheet" href="{{ asset('css/master.css') }}">
	@show

</head>
<body>

	@include('common.navbar')

	@yield('content')

	@section('js')
	<script src="{{ asset('js/master.js') }}" type="text/javascript"></script>
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
