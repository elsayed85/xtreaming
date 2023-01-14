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
    return view('index');
});


Route::view('explore', 'explore');
Route::view('search', 'explore');

Route::view('people', 'people.index');
Route::view('people/{id}', 'people.show');

Route::view('keyword/{id}', 'keyword.show');

Route::view('collection/{id}', 'collection.show');
Route::view('collection/{id}/edit', 'collection.edit');


Route::view('login', 'auth.login');
Route::view('register', 'auth.register');

Route::view('movie', 'movie.show');

Route::view('tv', 'tv.show');
Route::view('episode', 'tv.episode.show');

Route::view('community', 'community.index');
Route::view('community/{id}', 'community.show_guest');

Route::view('guest/request', "guest_request");
Route::view('request', "request.index");
Route::view('404', "error.404");

Route::view('user/profile', "user.profile");
Route::view('user/settings', "user.settings");
Route::view('user/collections', "user.collections");
Route::view('user/history', "user.history");
