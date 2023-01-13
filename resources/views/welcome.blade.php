<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Biblioteka </title>

    <meta name="description"
          content="Serwis prezentuje subiektywne książki z biblioteki domowej. A Ty co dziś przeczytasz?"/>
    <meta name="keywords" content="top, książki, najlepsze, ciekawe, bestsellery, czytaj"/>

    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('css/fontello.css')}}" type="text/css"/>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&family=Tai+Heritage+Pro&display=swap"
          rel='stylesheet' type='text/css'>
</head>
<body>
<div id="container">
    <div class="rectangle">
        <div class="header">
            <div id="logo">
                <a href="{{route('index')}}">Biblioteka</a>
            </div>
        </div>
        <div class="header">
            <div id="zegar">12:00:00</div>
        </div>
    </div>

    <div class="column">
        <div class="main">
            <div class="menu">
                <div class="row">
                    <div class="first-line user">
                        <i class="icon-user-1"></i>
                        @guest
                            <a class="uri-none" href="{{ url('/login') }}">Zaloguj śię</a>
                        @else
                            <a class="uri-none" href="{{ route('userPanel')  }}">Panel użytkownika</a>
                        @endguest
                    </div>

                    <div class="first-line folder">
                        <i class="icon-folder"></i>
                        <a class="uri-none" href="{{ route('books')  }}">Baza książek</a>
                    </div>
                </div>

                <div class="row">
                    <div class="second-line polecane">
                        <i class="icon-thumbs-up"></i>
                        <a class="uri-none" href="{{ route('books')  }}">Ulubione</a>
                    </div>

                    <div class="second-line spis">
                        <i class="icon-bold"></i>
                        <span><a class="uri-none" href="{{route('indexCategory')}}">Kategorie</a></span>
                    </div>
                </div>
            </div>

            <div class="cytat">
                <i> Always use the proper name for things.
                    Fear of a name increases fear of the thing itself.</i> <br/><br/>
                - J.K. Rowling
            </div>
        </div>

        <div class="main">
            <div class="user-login">
                <div>
                    @guest
                        Nie Jesteś Zalogowany
                    @else
                        {{ Auth::user()->name }} <br><br> Jesteś Zalogowany
                    @endguest
                </div>

            </div>

            <div class="icons">
                <div class="wrapper">
                    <div class="icon heart">
                        <a class="uri-none" href="{{ route('books')  }}">
                        <i class="icon-heart"></i>
                        </a>
                    </div>
                    <div class="icon globe">
                        <i class="icon-globe"></i>
                    </div>
                </div>
                <div class="wrapper">
                    <div class="icon yt">
                        <i class="icon-youtube"></i>
                    </div>
                    <div class="icon wikipedia ">
                        <i class="icon-wordpress"></i><br>
                        @auth
                            <a class="uri-none" href="{{ url('/logout') }}"> Wyloguj się </a>
                        @endauth
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div>
        2022 &copy; Kornel Karasiński, Łukasz Matuszczak, Adrian Dąbrowski - Biblioteka
    </div>

</div>
<script src="js/timer.js"></script>
</body>
</html>
