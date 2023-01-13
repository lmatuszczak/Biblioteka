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
        <h3>Książki</h3>
        <table>
            <tr>
                <th>Tytuł</th>
                <th>Opis</th>
                <th>Ulubione</th>
                <form action="{{route('indexCategorySearch')}}" method="post" id="addBook">
                    @csrf
                    <th></th>
                    <th>
                        Kategorie:
                        <select name="category" id="category" form="addBook">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name_category}}</option>
                            @endforeach
                        </select>
                    </th>
                    <th>
                        <input type="submit" value="Szukaj">
                    </th>
                </form>
            </tr>
            @if($books->count() == 0)
                Brak ksiazek w danej kategorii
            @endif
            @foreach($books as $book)
                <tr><!--{{$book->nameFile}}-->
                    <td>{{$book->title}}</td>
                    <td>{{$book->Description}}</td>
                    <td>
                        <form action="{{route('favorite-book')}}" method="post">
                            @csrf
                            <input type="hidden" name="titleBook" value="{{$book->title}}">
                            <input type="hidden" name="favorite" value="1">
                            <input type="submit" value="Dodaj/Usuń">
                        </form>
                    </td>
                    <td>
                        <form action="{{route('download-book')}}" method="post">
                            @csrf
                            <input type="hidden" name="nameFile" value="{{$book->nameFile}}">
                            <input type="submit" value="Otwórz">
                        </form>
                    </td>
                    <td>
                        <form action="{{route('index-comment')}}" method="post">
                            @csrf
                            <input type="hidden" name="bookId" value="{{$book->id}}">
                            <input type="submit" value="Komentarze">
                        </form>
                    </td>

                </tr>
            @endforeach
        </table>
        @isset($books)
            {{ $books->links() }}
        @endisset

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
