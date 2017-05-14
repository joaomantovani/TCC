@extends('public.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-4">

            <h1 class="dark">Login</h1>

            <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    {{-- <label for="email" class="col-md-4 control-label">Email</label> --}}

                    <div class="col-md-8">
                        <input id="email" placeholder="Email" type="email" class="form-control input-lg" name="email" value="{{ old('email') }}" required autofocus>

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
                        <input id="password" placeholder="Senha" type="password" class="form-control input-lg" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-8 col-md-offset-0">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Lembrar login
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-8 col-md-offset-0">
                        <button type="submit" class="button">
                            Login
                        </button>

                        <a type="submit" href="{{ url('redirect') }}" class="button" style="background-color: #3b5998">
                            <i class="fa fa-facebook-square"></i> Login
                        </a>

                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            Esqueceu a senha?
                        </a>

                        {{-- <a href="redirect">FB Login</a> --}}
                        
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
