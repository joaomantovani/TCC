@extends('public.master')

@section('content')
    <!-- Banner Wrapper -->
    <span style="text-align: center">
        <h1>Preencha suas informações</h1>
        <p>Escolha seu nome e avatar</p>
    </span>

    <!-- Main Wrapper -->
        <div >
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/player/create/info') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                    <div class="col-md-8 col-md-offset-2">
                    <div class="alert alert-dismissible alert-success">
                      {{-- <button type="button" class="close" data-dismiss="alert">&times;</button> --}}
                      <strong>Sua conta está criada!</strong> Aproveite e escolha nome de usuario, apelido e um avatar para personalizar seu perfil.
                    </div>
                        <input placeholder="Nome de usuário" id="username" type="text" class="form-control input-lg" name="username" value="{{ old('username') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <input type="hidden" id="selected_avatar" name="selected_avatar">

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                    <div class="col-md-8 col-md-offset-2">
                        {{-- <input placeholder="Apelido (Nome a ser mostrado)" id="nickname" type="nickname" class="form-control input-lg" name="nickname" value="{{ old('nickname') }}" required> --}}

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <br>

                <div class="col-md-8 col-md-offset-2">
                    <div class="avatar">
                        @foreach( $avatars as $avatar )
                            <div class="slick_get_avatar" id="{{ $avatar->id }}"><img class="img-responsive img-rounded" src="{{ $avatar->getAvatar() }}"></div>
                        @endforeach
                    </div>
                </div>
                <br>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="button">
                            {{-- Criar nova conta --}}
                            Vamos jogar!
                        </button>
                    </div>
                </div>
                
            </form>
        </div>
@endsection