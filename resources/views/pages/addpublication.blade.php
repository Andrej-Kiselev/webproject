@extends('app')

@section('content')
    <div class="row main">
        <h2>Добавление публикации</h2>

        <br>
        <form role="form" method="POST" action="/addpublication">
            {{ csrf_field() }}

            <input type="hidden" name="record" value="">

            <div class="form-group">
                <textarea class="form-control" placeholder="Название" name="name" rows="1"></textarea>
            </div>
            <div class="form-group">
                <textarea class="form-control" placeholder="Аннотация" name="annotation" rows="3"></textarea>
            </div>
            <div class="form-group">
                <input id="number" name="number_of_publication"placeholder="Номер публикации" type="number">
            </div>
            <div class="form-group">
                <input id="number" name="year" placeholder="Год" type="number">
            </div>
            <div class="form-group">
                <input id="number" name="number_of_pages"  placeholder="Количество страниц"type="number">
            </div>

            <p>Издательство:</p>
            <select name="publishing_houses_id" class="inp form-control">
                @foreach ($PublishHouses as $house)
                    <option value="{{$house->id}}">{{$house->name}}</option>
                @endforeach
            </select>
            <br>
            <input type="submit" class="btn">
        </form>
        <br><br><br>
    </div>
@stop
