<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\category;
use Illuminate\Http\Request;

class booksController extends Controller
{
    public function store(Request $request)
    {
        $book = book::all();
        return view('pages.adDbook', ['book' => $book ]);
    }
    public function indexCategory()
    {
        $categories = category::all();
        return view('pages.categoryBooks', ['books' => book::paginate(10), 'categories' => $categories]);
    }

    public function indexCategorySearch(Request $request)
    {
        $categories = category::all();
        return view('pages.categoryBooks', ['books' => book::where('id_category', $request->input('category'))->paginate(10), 'categories' => $categories]);
    }
}
