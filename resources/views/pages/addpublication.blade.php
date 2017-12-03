@extends('app')

@section('content')
<script type="text/javascript">
    $(document).ready(function () {
        var count = 2;
        var sel_source = document.getElementById("number1");
        $("a#new").click(function () {
            $('#coauthors').prepend('<select id=\"number' + (count)
                + '\" name=\"user' + (count) + '\" class=\"form-control\" ondblclick=\"$(this).remove();\" >' +
                '<option></option></select>');
            var sel2 = document.getElementById("number" + count);
            sel2.innerHTML = sel_source.innerHTML;
            count++;
        });
    })
</script>

<div>
    <h2>Добавление публикации</h2>
    <br>
    <form role="form" method="POST" action="/addpublication">
        {{ csrf_field() }}

        <input type="hidden" name="record" value="">

      <div style="float: left; width: 45%;">
        <p>Соавторы:</p>

        <div id="coauthors" class="form-group">
            <select id="number1" name="user1" class="form-control" ondblclick="$(this).remove();">
                @foreach($users as $user)
                    <option value="{{$user->id}}" >{{$user->surname." ".$user->name." ".$user->patronymic}}</option>
                @endforeach
            </select>

            <a id="new" onclick='create();'><span class="glyphicon glyphicon-plus"></span></a>
        </div>
        <div class="form-group">
            <textarea class="form-control" placeholder="Название" name="name_of_publication" rows="1"></textarea>
        </div>
        <div class="form-group">
            <textarea class="form-control" placeholder="Аннотация" name="annotation" rows="4"></textarea>
        </div>
      </div>

      <div style="float: right; width: 51%;">
        <div>
          <input id="number" name="number_of_publication"placeholder="Номер публикации" type="number" class="form-control">
          <input id="number" name="year" placeholder="Год" type="number" class="form-control">
          <input id="number" name="number_of_pages"  placeholder="Количество страниц"type="number" class="form-control">
        </div>
        <div style="margin-top: 10px;">
        <p>Издательство:</p>
        <select id="number" name="publishing_houses_id" class="form-control">
            @foreach ($PublishHouses as $house)
                <option value="{{$house->id}}">{{$house->name}}</option>
            @endforeach
        </select>
        <input type="submit" class="btn btn-lg btn-info btn-block" style="width: 30%; margin-top: 30PX; margin-left: 30%;">
      </div>
      </div>
    </form>
    <br><br><br>
</div>
@stop
