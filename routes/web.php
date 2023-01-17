<?php

use App\Collectors\Scrapers\Direct\Flixhq;
use App\Collectors\Scrapers\Direct\Loklok;
use App\Collectors\Scrapers\Direct\Moviebox;
use App\Collectors\Scrapers\Direct\Svetacdn;
use App\Models\Genre;
use App\Models\Movie\Movie;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data = [
        'type' => "movie",
        'text' => "Dark Knight",
        'year' => 2008,
        'season' => 1,
        'episode' => 1,
        'imdb_id' => 'tt11564570'
    ];
    $provider = Flixhq::search($data);
    dd($provider);
});

Route::post("login", function () {
    return redirect(route('filament.auth.login'));
})->name("login");



Route::get('home', function () {
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
