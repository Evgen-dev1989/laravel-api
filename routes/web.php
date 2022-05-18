<?php

use Illuminate\Support\Facades\Route;
use App\Repository\Category\CategoryRepository;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArticleController;

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
});

Route::resource('category','CategoryController');
Route::resource('article','ArticleController');



Route::get('/categories' ,'App\Http\Controllers\CategoryController@getAllCategories');
Route::get('/categories/{id}', 'App\Http\Controllers\CategoryController@getByIdCategories');



Route::get('/articles' ,'App\Http\Controllers\ArticleController@getAllArticles');
Route::get('/articles/{id}', 'App\Http\Controllers\ArticleController@getByIdArticles');















Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
