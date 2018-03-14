@extends('layouts.admin')
@section('content')
    <a href="{{route('categories.create')}}">
{!! Form::button('Добавить', ['class' => 'btn btn-success', 'type' => 'submit','style' => 'margin: 0px 50px']) !!}</a>
    <table class="table">
        <thead>
        <tr>
            <th>Категория</th>
            <th>Подкатегории</th>
            <th>Изменить</th>
            <th>Удалить</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{$category->name}}</td>
                <td>
                    @foreach($category->sub_categories as $sub_category)
                        {{$sub_category->subcategory_name}}
                        <br>
                    @endforeach
                </td>
                <td></td>
                <td></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection