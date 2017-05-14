@extends('public.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                    <div class="col-md-8 col-md-offset-2">
                        <input placeholder="Nome de usuário" id="username" type="text" class="form-control input-lg" name="username" value="{{ old('username') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                    <div class="col-md-8 col-md-offset-2">
                        <input placeholder="Apelido (Nome a ser mostrado)" id="nickname" type="nickname" class="form-control input-lg" name="nickname" value="{{ old('nickname') }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <div class="avatar">
                        @foreach( $avatars as $avatar )
                            <div><img style="width: 100%" class="img-rounded" src="{{ $avatar->getAvatar() }}"></div>
                        @endforeach
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
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

<hr