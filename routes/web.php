<?php

use Illuminate\Support\Facades\Route;

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
    Route::get('/panel',[App\Http\Controllers\PanelController::class, 'index'])->name('userPanel');
    Route::get('/panel/addbook',[App\Http\Controllers\addbookController::class, 'index'])->name('add-book');
    Route::get('/panel/books',[App\Http\Controllers\PanelController::class, 'bookIndex'])->name('books');
    Route::post('/panel/addbook',[App\Http\Controllers\addbookController::class, 'store'])->name('store-book');
    Route::post('/panel/addbook/download',[App\Http\Controllers\addbookController::class, 'download'])->name('download-book');
    Route::post('/panel/addbook/favorite',[App\Http\Controllers\favoriteController::class, 'favorite'])->name('favorite-book');
    Route::get('/panel/addbook/favorite/view',[App\Http\Controllers\favoriteController::class, 'index'])->name('favorite-index');
});
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
