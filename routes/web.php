<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\addbookController;
use App\Http\Controllers\favoriteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\booksController;
use App\Http\Controllers\commentController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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
Auth::routes();
Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');


Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/panel',[PanelController::class, 'index'])->name('userPanel');
    Route::get('/panel/addbook',[addbookController::class, 'index'])->name('add-book');
    Route::get('/panel/books',[PanelController::class, 'bookIndex'])->name('books');
    Route::get('/panel/books/categories',[booksController::class, 'indexCategory'])->name('indexCategory');
    Route::post('/panel/books/categories/id',[booksController::class, 'indexCategorySearch'])->name('indexCategorySearch');
    Route::post('/panel/addbook',[addbookController::class, 'store'])->name('store-book');
    Route::post('/panel/addbook/download',[addbookController::class, 'download'])->name('download-book');
    Route::post('/panel/addbook/favorite',[favoriteController::class, 'favorite'])->name('favorite-book');
    Route::get('/panel/addbook/favorite/view',[favoriteController::class, 'index'])->name('favorite-index');
    Route::get('/panel/addcategory',[addbookController::class, 'index_category'])->name('category-index');
    Route::post('/panel/addcategory',[addbookController::class, 'store_category'])->name('category-store');
    Route::post('/panel/addcategory/destroy',[addbookController::class, 'destroy_category'])->name('destroy_category');
    Route::post('/panel/comment',[commentController::class, 'index'])->name('index-comment');
    Route::post('/panel/comment/create',[commentController::class, 'store'])->name('store-comment');
});
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home', [HomeController::class, 'index'])->name('home');
