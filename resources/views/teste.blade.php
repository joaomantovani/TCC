@extends('master')

@section('css')
	@parent
@endsection

@section('content')
	
	<button type="" id="click_button">kkk</button>

@endsection

@section('js')
	@parent

	<script type="text/javascript">
			$().achievement_alert({
				display: 3500,
		        title: 'O campeão',
		        points : '80',
		        currency : '',
		        name : 'Ser top #1 do servidor por 1 semana',
		        icon : 'fa-trophy',
		        sound : 'T'
			});
	</script>
@endsection