@extends('app')

@section('content')
<div>
  <h2>Панель администратора</h2>
  <br>
  <form role="form" method="POST" action="/adduser">
      {{ csrf_field() }}
      
      <div style="float: left; width: 45%;">
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
        <input type="submit" class="btn btn-lg btn-info btn-block" value="Добавить автора">
      </div>
  </form>
  <!-- Вывод всех пользователей -->
  <div style="float: right; width: 51%; height: 300px;">
    <table>
      <tr id="header">
        <td>Пользователь</td>
        <td>E-mail</td><td></td>
      </tr>
      <tr>
        <td>Автор Автор Автор Автор</td>
        <td>Почта Почта Почта</td>
        <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
      </tr>
      <tr>
        <td>Автор Автор Автор Автор</td>
        <td>Почта Почта Почта</td>
        <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
      </tr>
    </table>
  </div>
</div>

<hr >

<div>
  <div style="float: left; width: 45%; margin-top: 10px;">
  <form role="form" method="POST" action="/adduser">
    <div class="form-group" >
        <textarea class="form-control" placeholder="Издательство" name="name_of_publishing_house" rows="1"></textarea>
    </div>
    <input type="submit" class="btn btn-lg btn-info btn-block" value="Добавить издательство">
  </form>
</div>
<div style="float: right; width: 51%; height: 400px;">
  <table>
    <tr id="header">
      <td>Издательство</td><td></td>
    </tr>
    <tr>
      <td>Автор Автор Автор Автор</td>
      <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
    </tr>
    <tr>
      <td>Автор Автор Автор Автор</td>
      <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
    </tr>
  </table>
</div>
</div>
@stop
