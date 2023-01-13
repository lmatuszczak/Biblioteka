<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Panel użytkownika </title>

    <link rel="stylesheet" href="{{asset('css/style2.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('css/fontello.css')}}" type="text/css"/>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&family=Tai+Heritage+Pro&display=swap"
          rel='stylesheet' type='text/css'>
</head>
<body>
<div id="container">
    <div id="header">
        <div class="header-element">
            <div id="logo1">
                <a href="{{route('index')}}">Biblioteka</a>
            </div>
        </div>
        </div>


        <div class="header-element">
            <a class="logout" href="{{ url('/logout') }}">Wyloguj się</a>
        </div>
    </div>
    <div id="content">

        <div class="menu-element">
            <h2>Skomentuj ksiazke</h2>
            <form id="commentform" action="{{route('store-comment')}}" method="post">
                @csrf
                <input type="hidden" name="idBook" value="{{$book}}">
                <input type="hidden" name="user" value="{{ Auth::user()->name }}">
                <textarea rows="10" cols="50" name="comment" form="commentform" required></textarea>
                <input type="submit" value="Skomentuj">
            </form>
        </div>
        <div class="menu-element">
            <table>
                <th>Uzytkonik</th>
                <th>Komentarz</th>
                <th>Data utworzenia</th>
                @foreach($comments as $comment)
                <tr>
                    <td>{{$comment->userName}}</td>
                    <td>{{$comment->comment}}</td>
                    <td>{{$comment->created_at}}</td>
                </tr>
                @endforeach
            </table>
        </div>

        <div class="menu-element">
            <i class="icon-warehouse"></i>
            <span><a class="uri-none" href="{{route('index')}}">Powrót</a></span>
        </div>

    </div>
</div>

</div>
</body>
</html>
