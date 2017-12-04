@extends('app')

@section('content')
    <div class="row main" style="margin-top: 20px;">
        {!! Form::model($list, ['method' => 'PATCH', 'url'=> 'editor/'.$list->id]) !!}
        <div style="float: left; width: 50%;">
            {!! Form::label('name_of_publication', 'Название публикаци:') !!}
            {!! Form::text('name_of_publication', null, ['class' => 'form-control']) !!}
            {!! Form::label('annotation', 'Аннотация:') !!}
            {!! Form::textarea('annotation', null, ['class' => 'form-control']) !!}
            {!! Form::submit('Обновить публикацию', ['class'=>'btn btn-lg btn-info btn-block']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@stop
