<?php

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
\Illuminate\Support\Facades\Auth::logOut(1);
Route::get('/', function () {
    //return App\User::all();
    return view('welcome');
});

Route::resource('posts','PostController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
