@extends('app')

@section('content')
    <div class="row main">
        <h2>Панель администратора</h2>

        <button type="button" class="btn btn-lg btn-info " href="">Добавить автора</button>

        <button type="button" class="btn btn-lg btn-info " href="/showallusers">Показать авторов</button>

        <br><br>
        <form role="form" method="POST" action="/adduser">
            {{ csrf_field() }}

            <input type="hidden" name="record" value="">

            <div class="form-group">
                <textarea class="form-control" placeholder="Фамилия" name="surname" rows="1"></textarea>
            </div>
            <div class="form-group">
                <textarea class="form-control" placeholder="Имя" name="name" rows="1"></textarea>
            </div>
            <div class="form-group">
                <textarea class="form-control" placeholder="Отчество" name="patronymic" rows="1"></textarea>
            </div>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input class="form-control" placeholder="E-mail" name="email" value="{{ old('email') }}" type="email" required autofocus>
                @if ($errors->has('email'))
                    <span class="help-block">
                        strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <textarea class="form-control" placeholder="Пароль" name="password" rows="1"></textarea>
            </div>
            <input type="submit" class="btn">
        </form>

    </div>
@stop
