@extends('public.master')

@section('content')
	<!-- Banner Wrapper -->
		<div id="banner-wrapper">

			<!--

				The slider's images (as well as its behavior) can be configured
				at the top of "js/main.js".

			-->

			<div id="slider">
				<div class="caption">
					<h2>Tente alcançar o topo!</h2>
					<p>Escolha uma classe e junte-se a nós</p>
				</div>
			</div>

		</div>

	<!-- Main Wrapper -->
		<div id="main-wrapper">

			<!-- Main -->
				<div id="intro" class="container">
					<div class="row">
						@foreach($classes as $class)
						<section class="4u 12u(mobile)">
							<span class="number">{{ $class->short_name }}</span>
							<header>
								<h2>{{ $class->name }}</h2>
								<p>{{ $class->slogan }}</p>
							</header>
							{!! $class->description !!}
						</section>
						@endforeach
						
					</div>
					<div class="actions">
						<a href="#" class="button button-big"><i class="fa fa-sign_in"></i> Criar uma conta grátis</a>
						<a href="#" class="button button-big button-alt">Fazer login</a>
					</div>
				</div>

		</div>
@endsection