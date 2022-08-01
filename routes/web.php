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



Route::get('/', 'PostController@index');
Route::get('/search','PostController@search');
Route::get('/information','PostController@information');

Route::get('/inquiry','PostController@inquiry');
Route::get('/post' , 'PostController@post');
Route::post('/post', 'PostController@store');
//Route::get('/', function() {
//    return view('posts/index');
//});

Auth::routes();
URL::forceScheme('https');

Route::get('/home', 'HomeController@index')->name('home');
