@extends('layouts.profile')
@section('content')
    <div class="container-fluid">
        {{ Form::model($shop, array('route' => array('shops.update', $shop->id), 'method' => 'put')) }}
        {{ Form::hidden('id', $shop->id) }}
        <div class="form-group">
            {!! Form::label('shop_name0', 'Название магазина') !!}
            <div class="col-xs-8">
                {!! Form::text('shop_name', $shop->shop_name, ['class' => 'form-control', 'placeholder' => 'Загрузите логотип']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('shop_logo', 'Логотип магазина') !!}
            <div class="col-xs-8">
                {!! Form::file('shop_logo', ['class' => 'form-control', 'placeholder' => 'Загрузите логотип']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('shop_address', 'Введите адрес магазина')!!}
            <div class="col-xs-8">
                {!! Form::text('shop_address', $shop->shop_address, ['class' => 'form-control', 'placeholder' => 'Введите адрес магазина']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('shop_mail', 'Введите электронную почту')!!}
            <div class="col-xs-8">
                {!! Form::text('shop_mail', $shop->shop_mail, ['class' => 'form-control', 'placeholder' => 'Введите электронную почту']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('shop_web', 'Сайт магазина') !!}
            <div class="col-xs-8">
                {!! Form::text('shop_web', $shop->shop_web, ['class' => 'form-control', 'placeholder' => 'Введите сайт магазина']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('shop_phone', 'Телефон') !!}
            <div class="col-xs-8">
                {!! Form::text('shop_phone', $shop->shop_phone, ['class' => 'form-control', 'placeholder' => 'Телефон']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('shop_vk_url', 'Адрес ВК') !!}
            <div class="col-xs-8">
                {!! Form::text('shop_vk_url', $shop->shop_vk_url, ['class' => 'form-control', 'placeholder' => 'Адрес ВК']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('shop_fb_url', 'Адрес ФБ') !!}
            <div class="col-xs-8">
                {!! Form::text('shop_fb_url', $shop->shop_fb_url, ['class' => 'form-control', 'placeholder' => 'Адрес ФБ']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('shop_ok_url', 'Адрес ОК') !!}
            <div class="col-xs-8">
                {!! Form::text('shop_ok_url', $shop->shop_ok_url, ['class' => 'form-control', 'placeholder' => 'Адрес ОК']) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-2 col-xs-10">
                {!! Form::button('Сохранить', ['class' => 'btn btn-primary','type'=>'submit']) !!}
            </div>
        </div>
        {{Form::close()}}
    </div>
@endsection