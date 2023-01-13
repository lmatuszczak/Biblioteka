<?php

namespace App\Http\Controllers;

use App\Models\comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.comment', ['book' => $request->input('id'), 'comments' => comment::all()]);
    }

    public function store(Request $request)
    {
        comment::create([
            'userName' => $request->input('user'),
            'comment' => $request->input('comment'),
            'idBook' => $request->input('idBook')
        ]);
        return view('pages.comment', ['book' => $request->input('idBook'), 'comments' => comment::all()]);
    }
}
