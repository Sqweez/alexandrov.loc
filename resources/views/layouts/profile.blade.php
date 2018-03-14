<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<h2 align="center">ЛИЧНЫЙ КАБИНЕТ</h2>
@yield('content')
@if(Route::currentRouteName() === 'profile')
    <br>
    <a href="{{route('main_page')}}">Вернуться на сайт</a>
@else
    <a href="{{route('profile')}}">На главную</a>
@endif