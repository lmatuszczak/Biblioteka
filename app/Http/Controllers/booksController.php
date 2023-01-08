<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;

class booksController extends Controller
{
    public function store(Request $request)
    {
        $book = book::all();
        return view('pages.adDbook', ['book' => $book ]);
    }
}
