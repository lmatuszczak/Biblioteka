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
            <h3>Dodaj Kategorie</h3>
            <form action="{{route('category-store')}}" method="post" aria-label="{{ __('Upload') }}">
                @csrf
                <input name="name" type="text" placeholder="Kategoria">
                <input type="submit" value="Dodaj">
            </form>
            @isset($info)
                <span>{{$info}}</span>
            @endisset
        </div>
        <div class="menu-element">
            <table>
                <th>ID</th>
                <th>Kategoria</th>
                @foreach($categories as $category)
                    <tr>

                        <td>{{$category->id}}</td>
                        <td>{{$category->name_category}}</td>
                        <td>
                            <form action="{{route('destroy_category')}}" method="post">
                                @csrf
                                <input type="hidden" name="idCategory" value="{{$category->id}}">
                                <input type="submit" value="Usuń">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
            @isset($categories)
                {{ $categories->links() }}
            @endisset
        </div>
    </div>
</div>

</body>
</html>
