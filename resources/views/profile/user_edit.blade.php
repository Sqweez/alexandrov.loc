@extends('layouts.profile')
@section('content')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        {!! Form::open(['url' => route('user.update',$user->id),'class'=>'form-horizontal','method'=>'put','enctype'=>'multipart/form-data']) !!}
        {!! Form::hidden('id', $user->id) !!}
        <div class="form-group">
            {!! Form::label('name', 'Имя',['class'=>'col-xs-2 control-label']) !!}
            <div class="col-xs-8">
                {!! Form::text('name', $user->name, ['class' => 'form-control','placeholder'=>'']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Почта',['class'=>'col-xs-2 control-label']) !!}
            <div class="col-xs-8">
                {!! Form::text('email', $user->email, ['class' => 'form-control','placeholder'=>'']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('user_image', 'Аватар', ['class'=>'col-xs-2 control-label']) !!}
            <div class="col-xs-8">
                {!! Form::file('user_image', ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('new_password', 'Новый пароль', ['class'=>'col-xs-2 control-label']) !!}
            <div class="col-xs-8">
                {!! Form::password('new_password', ['class' => 'form-control','placeholder'=>'', 'type' => 'password']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('new_password_confirmation', 'Потвердите новый пароль', ['class'=>'col-xs-2 control-label']) !!}
            <div class="col-xs-8">
                {!! Form::password('new_password_confirmation', ['class' => 'form-control','placeholder'=>'', 'type' => 'password']) !!}
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