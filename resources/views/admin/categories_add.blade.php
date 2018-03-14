@extends('layouts.admin')
@section('content')
<div style="margin-left: 300px;" class="wrapper container-fluid" >
    {!! Form::open(['url' => route('categories.store'), 'class' => 'form-horizontal',
               'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Название категории') !!}
        <div class="col-xs-8">
            {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'Введите название категории']) !!}
        </div>
    </div>
    <div class="form-group">
        {{Form::button('Добавить подкатегорию', ['id' => 'buttonAdd', 'class' => 'btn-success'])}}
        <script>
            $('#buttonAdd').click(function () {
                var inputs = $('.sub_input input[type="text"]');
                $('.sub_input').append('{!! Form::text('subcategory_name[]', old('subcategory_name'), ['class' => 'form-control', 'placeholder' => 'Введите название категории']) !!}');
                $('.sub_input').append('<br>');
            })
        </script>
    </div>
    <div class="form-group">
        <div class="sub_input">
            {!! Form::text('subcategory_name[]', old('subcategory_name'), ['class' => 'form-control', 'placeholder' => 'Введите название подкатегории']) !!}
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