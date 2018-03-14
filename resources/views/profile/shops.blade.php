@extends('layouts.profile')
@section('content')
<h2>Мои магазины</h2>
<a href="{{route('shops.create')}}">
    {!! Form::button('Добавить', ['class' => 'btn btn-success', 'type' => 'submit','style' => 'margin: 0px 50px']) !!}</a>
<table class="table">
    <thead>
    <th>Название</th>
    <th>Логотип</th>
    <th>Адрес</th>
    <th>Телефон</th>
    <th>Веб-сайт</th>
    <th>Почта</th>
    <th>Вконтакте</th>
    <th>Фейсбук</th>
    <th>Одноклассники</th>
    <th>Рейтинг магазина</th>
    <th>Изменить</th>
    <th>Удалить</th>
    </thead>
    <tbody>
        @foreach($shops as $shop)
            <tr>
                <td>{{$shop->shop_name}}</td>
                <td>{{ Html::image('images/shops/' . $shop->shop_logo, '', ['width' => '100px']) }}</td>
                <td>{{$shop->shop_address}}</td>
                <td>{{$shop->shop_phone}}</td>
                <td>{{$shop->shop_web}}</td>
                <td>{{$shop->shop_mail}}</td>
                <td>{{$shop->shop_vk_url}}</td>
                <td>{{$shop->shop_fb_url}}</td>
                <td>{{$shop->shop_ok_url}}</td>
                <td>{{$shop->shop_rating}}</td>
                <td>
                    <a href="{{ route('shops.edit',['shop' => $shop->id]) }}">
                        {{Form::button('Изменить',['class' => 'btn btn-warning', 'type' => 'submit'])}}</a>
                </td>
                <td>
                    {{Form::open(['url' => route('shops.destroy',['shop' => $shop->id]), 'class' => 'form-horizontal', 'method' => 'POST'])}}
                    {{method_field('DELETE')}}
                    {{Form::button('Удалить', ['class' => 'btn btn-danger', 'type' => 'submit'])}}
                    {{Form::close()}}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection