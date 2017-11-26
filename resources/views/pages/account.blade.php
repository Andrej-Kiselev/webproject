@extends('app')

@section('content')
<div class="row main" style="margin-top: 20px;">
  <div class="col-md-4">
    <div class="thumbnail">
      <img src="/images/Earth-Vector-Wallpaper-544x340.png" alt="...">
        <div class="caption">
          <button type="button" class="btn btn-lg btn-info btn-block" style="margin: 10px 0px">Загрузить фотографию</button>
        </div>
    </div>
  </div>
  <div class="col-md-7">
    <div>
      <h2 class="text-center">Фамилия Имя Отчество</h2>
      <hr style="margin: 10px">
    </div>
    <button type="button" class="btn btn-lg btn-info article_button">Добавить статью</button>
    <button type="button" class="btn btn-lg btn-info article_button" style="width: 38%;">Редактировать статью</button>
    <button type="button" class="btn btn-lg btn-info article_button">Удалить статью</button>

    <!--Циклический вывод работ автора и соавторов из БД-->
    <table style="margin: 10px; width: 100%;">
      <tr id="header">
        <td>Автор</td>
        <td>Название</td>
      </tr>
      <tr>
        <td>Автор</td>
        <td>Название</td>
      </tr>
      <tr>
        <td>Автор</td>
        <td>Название</td>
      </tr>
    </table>
  </div>
</div>
@stop