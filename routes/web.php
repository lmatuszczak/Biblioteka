<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\addbookController;
use App\Http\Controllers\favoriteController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('index');

Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::get('/panel',[PanelController::class, 'index'])->name('userPanel');
    Route::get('/panel/addbook',[addbookController::class, 'index'])->name('add-book');
    Route::get('/panel/books',[PanelController::class, 'bookIndex'])->name('books');
    Route::post('/panel/addbook',[addbookController::class, 'store'])->name('store-book');
    Route::post('/panel/addbook/download',[addbookController::class, 'download'])->name('download-book');
    Route::post('/panel/addbook/favorite',[favoriteController::class, 'favorite'])->name('favorite-book');
    Route::get('/panel/addbook/favorite/view',[favoriteController::class, 'index'])->name('favorite-index');
});
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home', [HomeController::class, 'index'])->name('home');
