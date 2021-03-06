@extends('app')

@section('content')
<div class="row main" style="margin-top: 20px;">
  <div class="col-md-4">
    <div class="thumbnail">
      <img src="/images/{{Auth::user()->image}}" alt="...">

        <form enctype="multipart/form-data" action="/profile" method="POST">
          <input style="margin: 10px 0px" class="btn btn-lg btn-info btn-block" type="file" name="avatar">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="submit" class="btn btn-lg btn-info btn-block" value="Загрузить" style="margin: 10px 0px">
        </form>


    </div>
  </div>
  <div class="col-md-7">
    <div>
      <h2 class="text-center">{{Auth::user()->surname}} {{Auth::user()->name}} {{Auth::user()->patronymic}}</h2>
      <hr style="margin: 10px">
    </div>

    <form>
      <input type="button"class="btn btn-lg btn-info article_button" value="Добавить статью" onClick='location.href="showaddpubl"'>
    </form>
        <!--Циклический вывод работ автора и соавторов из БД-->
    <table>
      <tr id="header">
        <td>Название</td>
        <td>Авторы</td>
        <td></td>
        <td></td>
      </tr>

      @foreach($publications as $publication)
        @foreach($publUsers as $record)

          @if($record->user_id == Auth::user()->id && $publication->id == $record->id)
            <tr>
              <td> {{$publication->name_of_publication}}</td>
              <td>
                @foreach($publUsers as $publAuthor)
                  @if($publication->id == $publAuthor->id)
                    {{$publAuthor->surname." ".$publAuthor->name." ".$publAuthor->patronymic}}
                    <br>
                  @endif
                @endforeach
              </td>
              <td><a href="editor/{{$publication->id}}/edit"><span class="glyphicon glyphicon-pencil"></span></a></td>
              <td><a href="/user/publish/{{$publication->id}}"><span class="glyphicon glyphicon-trash"></span></a></td>
            </tr>
            @break
          @endif

        @endforeach
      @endforeach

    </table>
  </div>
</div>
@stop
