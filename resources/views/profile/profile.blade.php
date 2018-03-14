@extends('layouts.profile')
@section('content')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>HELLO, {{auth()->user()->name}}!</h1>
    <a href="{{route('shops.index')}}"><button class="btn btn-success">Мои магазины</button></a>
    <a href="{{route('discounts.index')}}"><button class="btn btn-success">Мои скидки</button></a>
    <a href="{{route('user.edit', ['id' => auth()->user()->id])}}"><button class="btn btn-success">Изменить</button></a>

</body>
</html>
@endsection