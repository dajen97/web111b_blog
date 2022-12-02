<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
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


Route::namespace('/', 'App\Http\Controllers')->group(function () {
  Route::get('users\{id?}', 'UserController@show');
  Route::get('users\{id}', 'UserController@show');
});
//Route::get('users', 'App/Http\controll\UserControll@show2');



Route::get('/posts/{post}/comments/{comment}', function ($post, $comment) {
  return "posts $post,comments $comment";
});

Route::get('paint', function () {
  return view('paint');
});

Route::namespace('App\Http\Controllers')->group(function () {
  Route::get('demo', 'Sitecontroller@demo');
  Route::get('pics', 'SiteController@gallery');
  Route::get('admin', 'SiteController@dajen97');
  Route::get('1118', 'SiteController@1118work');
  Route::get('/hello', 'SiteController@hello');
  Route::any('url', 'SiteController@demo2');
  Route::any('store', 'PostController@store');
});
Route::resource('posts', 'App\Http\Controllers\PostController');
Route::resource('work', 'App\Http\Controllers\WorkController');