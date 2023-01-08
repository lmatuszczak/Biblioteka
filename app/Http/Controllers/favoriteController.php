<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Models\favorite;
use Illuminate\Http\Request;

class favoriteController extends Controller
{
    public function index(Request $request)
    {
        $books = DB::table('books')
            ->join('favorites', 'title', '=', 'book')
            ->paginate(5);

     return view('pages.favorite', ['books' => $books ]);
    }

    public function favorite(Request $request)
    {
        $request->input('favorite');
        $titleBook = $request->input('titleBook');
        $favorite = $request->input('favorite');
        $name = Auth::user()->name;
        if (favorite::where('book', $titleBook)->where('name_user', $name)->exists()) {
            favorite::where('book', $titleBook)->where('name_user', $name)->delete();
            $info = 'Usunieto z ulubionych';
        }
        else
        {
            $info = 'Dodano do ulubionych';
            favorite::create([
                'name_user' => $name,
                'book' => $titleBook,
                'favorite' => $favorite
            ]);
        }

        return view('pages.adDbook',['info' => $info]);
    }
}
