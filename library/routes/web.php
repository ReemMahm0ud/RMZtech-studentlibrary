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
  //  $name="hamza";
   // $lion=DB::table('names')->get();
  // $lion= App\Name::all();
  //  return $lion;
   return view('home');
});
//Route::get('login', function () {
  //return view('login');
//});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/booklist','App\Http\Controllers\BookController@index');
Route::get('/search', 'App\Http\Controllers\BookController@search');
Route::get('/files/create', 'App\Http\Controllers\UploudController@create');
Route::post('/files', 'App\Http\Controllers\UploudController@store');
Route::get('/files/{id}','App\Http\Controllers\BookController@show');
Route::resource('books','BookController');
Route::resource('/favourites', 'WishlistController', ['except' => ['create', 'edit', 'show', 'update']]);
