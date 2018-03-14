
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="ru"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="ru"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="ru"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="ru"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>
        @if(isset($title))
        {{$title}}
        @else
        {{$globals->company_name}}
        @endif
    </title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">Вы используете <strong>устаревший</strong> браузер. Пожалуйста <a href="http://browsehappy.com/">обновите ваш браузер</a></p>
<![endif]-->
<div class="banner_app">
    <div class="banner_app__wrap">
        <a href="#">Скачайте приложение себе на телефон, и получите скидки!</a>
        <div class="banner_app__right">
            <img src="images/head/banner_app.jpg">
            <svg class="_close" width="28" height="27" viewBox="0 0 28 27"><path fill="#fff" d="M0 13.5a13.52 13.52 0 0 0 27.01 0A13.52 13.52 0 0 0 0 13.5zm1.04 0a12.47 12.47 0 0 1 24.93 0 12.47 12.47 0 0 1-24.93 0zm16.77-5.03l-4.31 4.3-4.31-4.3a.51.51 0 0 0-.73 0c-.2.2-.2.53 0 .73l4.31 4.3-4.31 4.3c-.2.2-.2.54 0 .74.1.1.23.15.37.15a.5.5 0 0 0 .36-.15l4.31-4.3 4.31 4.3c.1.1.23.15.36.15a.5.5 0 0 0 .37-.15.5.5 0 0 0 0-.73l-4.31-4.3 4.31-4.31a.5.5 0 0 0 0-.73.51.51 0 0 0-.73 0z"/></svg>
        </div>
    </div>
</div>
<header class="header">
    <div class="header__top">
        <div class="header__wrap">
            <a class="logo" href="/">
                <h1>{{$globals->company_name}}</h1>
                <h4>дисконтный клуб</h4>
            </a>
            <a class="app" href="#">
                <h3>Мобильное приложение</h3>
                <svg class="app_icon" width="30" height="31" viewBox="0 0 30 31"><path fill="#222663" d="M17.34 16.37l-3.3 3.23c-.2.2-.55.2-.76 0a.52.52 0 0 1 0-.75L16.2 16l-2.92-2.85a.52.52 0 0 1 0-.75c.21-.2.55-.2.76 0l3.3 3.23a.52.52 0 0 1 0 .74z"/></svg>
            </a>
            <nav class="menu">
                <a href="{{route('all_discounts.index')}}" class="menu__choice _current"><span>Все скидки</span></a>
                <a href="{{route('all_shares.index')}}" class="menu__choice"><span>Все акции</span></a>
                <a href="{{route('for_owners.index')}}" class="menu__choice"><span>Для держателей</span></a>
                <a href="{{route('about_card.index')}}" class="menu__choice"><span>О карте</span></a>
            </nav>
            <div class="mob_btn">
                <div class="mob_btn__line"></div>
                <div class="mob_btn__line"></div>
                <div class="mob_btn__line"></div>
            </div>
            <div class="user">
                @if(auth()->check())
                    @if(auth()->user()->role === 'admin')
                        <a href="{{route('admin')}}"><h3>{{auth()->user()->name}}</h3></a>
                    @else
                        <a href="{{route('profile')}}"><h3>{{auth()->user()->name}}</h3></a>
                    @endif
                    <img class="user_icon" width="46" height="40" src="{{asset('images/user/'. auth()->user()->user_image)}}" alt="">
                    <a href="{{route('logout')}}"><h3>Выход</h3></a>
                @else
                    <a href="{{route('login')}}"><h3>войти</h3></a>
                    <svg class="user_icon" width="40" height="40" viewBox="0 0 41 42"><path fill="#ffc900" d="M13.81 28.4v-.06c.06-1.15.53-2.2 1.31-3.07a7.32 7.32 0 0 1 3.01-1.96c.41.42.88.77 1.39 1.02a4.35 4.35 0 0 0 3.83.03c.49-.24.95-.56 1.34-.95a7.66 7.66 0 0 1 3.01 2.02 5.16 5.16 0 0 1 1.4 3.07l.02.19v1.27H13.81v-1.5l.01-.06zm11.23-16.6a7.1 7.1 0 0 1 1.42 4.33 7.1 7.1 0 0 1-1.42 4.35 4.53 4.53 0 0 1-3.57 1.87 4.53 4.53 0 0 1-3.58-1.87 7.03 7.03 0 0 1-1.42-4.35c0-1.69.54-3.22 1.42-4.34a4.56 4.56 0 0 1 3.58-1.87c1.4 0 2.67.72 3.57 1.87zm-3.57-.85c-1.07 0-2.04.57-2.75 1.47a6.02 6.02 0 0 0-1.2 3.71c0 1.46.46 2.77 1.2 3.71a3.51 3.51 0 0 0 2.75 1.47 3.5 3.5 0 0 0 2.74-1.47 6.02 6.02 0 0 0 1.19-3.7c0-1.46-.45-2.78-1.19-3.72a3.53 3.53 0 0 0-2.74-1.47zm-8.72 17V31h17.42v-3.06h-.08a6.26 6.26 0 0 0-1.6-3.2 8.92 8.92 0 0 0-3.76-2.42l-.34-.11-.23.26c-.37.4-.8.73-1.26.95a3.39 3.39 0 0 1-2.92-.02 4.12 4.12 0 0 1-1.29-1.02l-.22-.27-.33.1a8.39 8.39 0 0 0-3.8 2.37 6 6 0 0 0-1.55 3.36z"/></svg>
                @endif
            </div>
        </div>
    </div>
    <div class="header__bottom">
        <div class="header__wrap">
            <div class="menu">
                <a href="#" class="menu__choice">Все</a>
                <a href="#" class="menu__choice">Новые</a>
                @foreach($categories as $category)
                <a href="#" class="menu__choice">{{$category->name}}</a>
                @endforeach
               {{-- <a href="#" class="menu__choice">Красота и здоровье</a>
                <a href="#" class="menu__choice">Товары</a>
                <a href="#" class="menu__choice">Услуги</a>
                <a href="#" class="menu__choice">Туризм, отели</a>--}}
            </div>
            <form class="search" action="/">
                <input class="_input" type="text" placeholder="Поиск" required>
                <button type="submit" class="search_icon"><svg width="19" height="19" viewBox="0 0 18 19"><path fill="#fff" d="M12.9 12.34a7.1 7.1 0 0 0 1.61-4.52A6.95 6.95 0 0 0 7.64.8 6.96 6.96 0 0 0 .76 7.82a6.96 6.96 0 0 0 6.88 7.03 6.7 6.7 0 0 0 3.94-1.28l4.08 4.34a.88.88 0 0 0 1.27.03.92.92 0 0 0 .02-1.3zm-.18-4.52a5.14 5.14 0 0 1-5.08 5.2 5.14 5.14 0 0 1-5.08-5.2 5.14 5.14 0 0 1 5.08-5.19c2.8 0 5.08 2.33 5.08 5.2z"/></svg></button>
            </form>
        </div>
    </div>
    <div class="mob_header">
        <div class="mob_header__container">
            <a class="app" href="#">
                <h3>Мобильное приложение</h3>
                <svg class="app_icon" width="40" height="41" viewBox="0 0 30 31"><path fill="#fff" d="M17.34 16.37l-3.3 3.23c-.2.2-.55.2-.76 0a.52.52 0 0 1 0-.75L16.2 16l-2.92-2.85a.52.52 0 0 1 0-.75c.21-.2.55-.2.76 0l3.3 3.23a.52.52 0 0 1 0 .74z"/></svg>
            </a>
            <div class="menu">
                <a href="#" class="menu__choice _current"><span>Все скидки</span></a>
                <a href="#" class="menu__choice"><span>Все акции</span></a>
                <a href="#" class="menu__choice"><span>Для держателей</span></a>
                <a href="#" class="menu__choice"><span>О карте</span></a>
            </div>
            <form class="search" action="/">
                <input class="_input" type="text" name="search" placeholder="Поиск">
                <button type="submit"><svg class="search_icon" width="19" height="19" viewBox="0 0 18 19"><path fill="#fff" d="M12.9 12.34a7.1 7.1 0 0 0 1.61-4.52A6.95 6.95 0 0 0 7.64.8 6.96 6.96 0 0 0 .76 7.82a6.96 6.96 0 0 0 6.88 7.03 6.7 6.7 0 0 0 3.94-1.28l4.08 4.34a.88.88 0 0 0 1.27.03.92.92 0 0 0 .02-1.3zm-.18-4.52a5.14 5.14 0 0 1-5.08 5.2 5.14 5.14 0 0 1-5.08-5.2 5.14 5.14 0 0 1 5.08-5.19c2.8 0 5.08 2.33 5.08 5.2z"/></svg></button>
            </form>
            <div class="menu_app">
                <a href="#" class="menu_app__choice">Все</a>
                <a href="#" class="menu_app__choice">Новые</a>
                <a href="#" class="menu_app__choice">Развлечения и отдых</a>
                <a href="#" class="menu_app__choice">Красота и здоровье</a>
                <a href="#" class="menu_app__choice">Товары</a>
                <a href="#" class="menu_app__choice">Услуги</a>
                <a href="#" class="menu_app__choice">Туризм, отели</a>
            </div>
        </div>
    </div>
</header>