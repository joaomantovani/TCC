@extends('public.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">

            <h1 class="dark">Crie uma conta</h1>

            <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                {!! csrf_field() !!}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    {{-- <label for="name" class="col-md-4 control-label">Nome</label> --}}

                    <div class="col-md-8">
                        <input placeholder="Nome" id="name" type="text" class="form-control input-lg" name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    {{-- <label for="email" class="col-md-4 control-label">E-Mail</label> --}}

                    <div class="col-md-8">
                        <input placeholder="Email" id="email" type="email" class="form-control input-lg" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    {{-- <label for="password" class="col-md-4 control-label">Senha</label> --}}

                    <div class="col-md-8">
                        <input placeholder="Senha" id="password" type="password" class="form-control input-lg" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    {{-- <label for="password-confirm" class="col-md-4 control-label">Confirmar senha</label> --}}

                    <div class="col-md-8">
                        <input placeholder="Confirmar Senha" id="password-confirm" type="password" class="form-control input-lg" name="password_confirmation" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <button type="submit" class="button">
                            Criar nova conta
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
