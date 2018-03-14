@extends('layouts.admin')
@section('content')
    <div class="wrapper container-fluid">
        {!! Form::open(['url' => route('user.ban', array('id' => $user->id)), 'class' => 'form-horizontal',
                    'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group">
                {!! Form::label('text', 'Причина бана', ['class' => 'col-xs-2 control-label']) !!}
                <div class="col-xs-8">
                    {!! Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Введите причину бана']) !!}
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