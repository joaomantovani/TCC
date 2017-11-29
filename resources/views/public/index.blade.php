@extends('public.master')

@section('content')
	<!-- Banner Wrapper -->
	<span style="text-align: center">
		<h1>Bem vindo a sua nova aventura</h1>
		<p>Crie uma conta e escolha a sua classe para começar a jogar</p>
	</span>

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