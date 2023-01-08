<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;
use Auth;

class PanelController extends Controller
{
    public function index()
    {
        $name = Auth::user()->name;
        if ($name == "admin")
            return view('panel.adminPanel');
        else
            return view('panel.userPanel');
    }

    public function bookIndex()
    {
        $books = book::paginate(5);
        return view('pages.books',['books' => $books]);
    }
}
