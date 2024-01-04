<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        if (Auth::user()->hasVerifiedEmail())
        {
            $message = 'You are logged in!';
        }
        else
        {
            $message = 'To access the full range of features and services, we kindly ask you to verify your email address';
        }
        return view('home',['message' => $message]);
    }
}
