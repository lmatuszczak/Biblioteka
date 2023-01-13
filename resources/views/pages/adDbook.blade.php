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
            <h3>Dodaj książke</h3>
            <form action="{{route('store-book')}}" method="post" enctype="multipart/form-data" aria-label="{{ __('Upload') }}" id="addBook">
                @csrf
                <input name="title" type="text" placeholder="Tytuł" required>
                <input name="description" type="text" placeholder="Opis" required><br><br>
                <label for="category">Wybierz Kategorie:</label>
                <select name="category" id="category" form="addBook">
                @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name_category}}</option>
                @endforeach
                </select><br><br>
                <input type="file" name="imgPDF">
                <input type="submit" value="Wyślij">
            </form>
            @isset($info)
            <span>{{$info}}</span>
            @endisset
        </div>
    </div>
</div>

</div>
</body>
</html>
