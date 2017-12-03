@extends('app')

@section('content')
<div>
    <h2>Добавление публикации</h2>
    <br>
    <form role="form" method="POST" action="/addpublication">
        {{ csrf_field() }}

        <input type="hidden" name="record" value="">

      <div style="float: left; width: 45%;">
        <div class="form-group">
            <textarea class="form-control" placeholder="Соавторы" name="coauthors" rows="1"></textarea>
        </div>
        <div class="form-group">
            <textarea class="form-control" placeholder="Название" name="name" rows="1"></textarea>
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
