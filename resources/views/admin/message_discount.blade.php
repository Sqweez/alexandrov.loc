@extends('layouts.admin')
@section('content')
    <h2>Введите текст сообщения пользователю</h2>
    <div class="wrapper container-fluid">
            {!! Form::open(['url' => route('discount.decline', array('id' => $data['id'])), 'class' => 'form-horizontal',
                    'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group">
                {!! Form::label('text', 'Текст', ['class' => 'col-xs-2 control-label']) !!}
                <div class="col-xs-8">
                    {!! Form::textarea('text', '', ['class' => 'form-control', 'placeholder' => 'Введите сообщение пользователю']) !!}
                </div>
            </div>
        <div class="form-group">
            <div class="col-xs-offset-2 col-xs-10">
                {!! Form::button('Сохранить', ['class' => 'btn btn-primary','type'=>'submit']) !!}
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection