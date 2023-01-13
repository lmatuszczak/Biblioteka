<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Panel użytkownika </title>

    <link rel="stylesheet" href="{{asset('css/style2.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('css/fontello.css')}}" type="text/css"/>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&family=Tai+Heritage+Pro&display=swap"  rel='stylesheet' type='text/css'>
</head>
<body>
<div id="container">
    <div id="header">
        <div class="header-element">
            <div id="logo1">
                <a href="{{route('index')}}">Biblioteka</a>
            </div>
        </div>

        <div class="header-element">
            <span>Witaj {{Auth::user()->name}}</span>
        </div>

        <div class="header-element">
            <a class="logout" href="{{ url('/logout') }}">Wyloguj się</a>
        </div>
    </div>

    <div id="content">
        <div class="menu-element">
            <i class="icon-warehouse"></i>
            <span><a class="uri-none" href="{{route('index')}}">Powrót</a></span>
        </div>
        <div class="menu-element">
            <i class="icon-folder"></i>
            <span><a class="uri-none" href="{{route('add-book')}}">Dodaj książke</a></span>
        </div>
        <div class="menu-element">
            <i class="icon-thumbs-up"></i>
            <span>Dodaj Polecaną ksiązka</span>
        </div>
        <div class="menu-element">
            <i class="icon-star"></i>
            <span><a class="uri-none" href="{{route('favorite-index')}}">Ulubione</a></span>
        </div>
        <div class="menu-element">
            <i class="icon-book"></i>
            <span><a class="uri-none" href="{{route('category-index')}}">Dodaj kategorie</a></span>
        </div>
        <div class="menu-element">
            <i class="icon-user-1"></i>
            <span>Dodaj użytkownika</span>
        </div>
    </div>
</div>
</body>
</html>
