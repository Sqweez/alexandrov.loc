@extends('layouts.admin')
@section('content')
{{Form::model($globals, array('route' => array('globals.update', $globals->id), 'method' => 'put'))}}
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<table class="table">
    <thead>
    <tr>
        <th>Название параметра</th>
        <th>Содержимое параметра</th>
    </tr>
    </thead>
    <tr>
        <td>имя компании</td>
        <td>{!!  Form::text('company_name', $globals->company_name, ['class' => 'form-control']) !!}</td>
    </tr>
    <tr>
        <td>адрес в вк</td>
        <td>{!!  Form::text('vk_url', $globals->vk_url, ['class' => 'form-control']) !!}</td>
    </tr>
    <tr>
        <td>адрес в фейсбуке</td>
        <td>{!!  Form::text('fb_url', $globals->fb_url, ['class' => 'form-control']) !!}</td>
    </tr>
    <tr>
        <td>адрес в одноклассниках</td>
        <td>{!!  Form::text('ok_url', $globals->ok_url, ['class' => 'form-control']) !!}</td>
    </tr>
    <tr>
        <td>телефон 1</td>
        <td>{!!  Form::text('phone_1', $globals->phone_1, ['class' => 'form-control']) !!}</td>
    </tr>
    <tr>
        <td>телефон 2</td>
        <td>{!!  Form::text('phone_2', $globals->phone_2, ['class' => 'form-control']) !!}</td>
    </tr>
    <tr>
        <td>Юридическая информация</td>
        <td>{!!  Form::text('IIN', $globals->IIN, ['class' => 'form-control']) !!}</td>
    </tr>
</table>
{{ Form::button('Сохранить изменения', ['class' => 'btn btn-primary', 'type' => 'submit']) }}
{{Form::close()}}
@endsection