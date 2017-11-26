@extends('app')

@section('content')
<div class="row main">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default" style="margin-top: 20px;">
                <div class="panel-heading">
                    <h3 class="panel-title">Пожалуйста, войдите в систему</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <fieldset>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input class="form-control" placeholder="E-mail" name="email" value="{{ old('email') }}" type="email" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <!-- Change this to a button or input when using this as a form -->
                            <button class="btn btn-lg btn-primary btn-block">Войти</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
