@extends('layouts.profile')
@section('content')
<h2>Мои скидки</h2>
<a href="{{route('discounts.create')}}">
    {!! Form::button('Добавить', ['class' => 'btn btn-success', 'type' => 'submit','style' => 'margin: 0px 50px']) !!}</a>
<table class="table">
    <thead>
        <tr>
            <th>Краткое описание скидки</th>
            <th>Полное описание скидки</th>
            <th>Условия скидки</th>
            <th>Процент скидки</th>
            <th>Изображение</th>
            <th>Имя компании</th>
            <th>Категория</th>
            <th>Подкатегория</th>
            <th>Статус скидки</th>
            <th>Изменить</th>
            <th>Удалить</th>
        </tr>
    </thead>
    <tbody>
        @foreach($discounts as $discount)
            <tr>
            <td>{{$discount->discount_short_desc}}</td>
            <td>{{$discount->discount_description}}</td>
            <td>{{$discount->discount_condition}}</td>
            <td>{{$discount->discount_percent}}</td>
            <td>{!! Html::image('/images/m_desc/'.$discount->discount_image,'', ['width' => '100px']) !!}</td>
            <td>{{$discount->shop->shop_name}}</td>
            <td>{{$discount->category->name}}</td>
                @if(isset($discount->subcategory))
                    <td>{{$discount->subcategory->subcategory_name}}</td>
                @else
                    <td></td>
                @endif
            <td>@if($discount->status === 0)
                    Ждет одобрения
                @elseif($discount->status === 1)
                    Одобрено
                @else
                    Отклонено по причине: <br> {{$discount->message->text}}
                @endif
            </td>
                <td><a href="{{route('discounts.edit',['discount' => $discount->id])}}" class="btn btn-warning">Изменить</a></td>
            <td>
                {{Form::open(['url' => route('discounts.destroy',['discount' => $discount->id]), 'class' => 'form-horizontal', 'method' => 'POST'])}}
                {{method_field("DELETE")}}
                <button class="btn btn-danger">
                    <i class="fa fa-trash-o fa-lg"></i> Удалить</button>
                {{ Form::close() }}
            </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection