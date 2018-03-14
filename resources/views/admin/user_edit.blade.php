@extends('layouts.admin')
@section('content')
<div class="container">
    {!! Form::open(['url' => route('users.update',$data['id']),'class'=>'form-horizontal','method'=>'put','enctype'=>'multipart/form-data']) !!}
    {!! Form::hidden('id', $data['id']) !!}
    <div class="">
        {!! Form::label('name', 'Имя',['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('name', $data['name'], ['class' => 'form-control','placeholder'=>'']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('login', 'Логин',['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('login', $data['login'], ['class' => 'form-control','placeholder'=>'']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('email', 'Почта',['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('email', $data['email'], ['class' => 'form-control','placeholder'=>'']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('role', 'Роль',['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {{Form::select('role', [
            'user' => 'Пользователи',
            'banned_users' => 'Забаненные пользователи',
            'admin' => 'Администраторы'])}}
{{--
            {!! Form::text('role', $data['role'], ['class' => 'form-control','placeholder'=>'']) !!}
--}}
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