<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\book;
use App\Models\favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class addbookController extends Controller
{
    public function index()
    {
        return view('pages.adDbook');
    }

    public function store(Request $request)
    {
        $info = 'Książka została dodana.';
        $request->file('imgPDF')->store('img', 'public');
        $path = Storage::putFile('img', $request->file('imgPDF'));
        book::create([
            'title' => $request->input('title'),
            'Description' => $request->input('description'),
            'nameFile' => $path
        ]);
        return view('pages.adDbook', ['info' => $info]);
    }

    public function download(Request $request)
    {
        return Storage::download($request->input('nameFile'));
    }



}
