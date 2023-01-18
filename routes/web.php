<?php

use App\Collectors\Scrapers\Direct\Flixhq;
use App\Collectors\Scrapers\Direct\Loklok;
use App\Collectors\Scrapers\Direct\Moviebox;
use App\Collectors\Scrapers\Direct\Svetacdn;
use App\Models\Genre;
use App\Models\Movie\Movie;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     $data = [
//         'type' => "movie",
//         'text' => "Dark Knight",
//         'year' => 2008,
//         'season' => 1,
//         'episode' => 1,
//         'imdb_id' => 'tt11564570'
//     ];
//     $provider = Loklok::search($data);
//     dd($provider);
// });

Route::post("login", function () {
    return redirect(route('filament.auth.login'));
})->name("login");



Route::get('movie', function () {
    $movie = Movie::first();
    //$movie->comment('test', auth()->user());
    return view('movie.show' , ['movie' => $movie]);
});

Route::view('explore', 'explore');
Route::view('trends', 'trends');
Route::view('search', 'search.index');

Route::view('people', 'people.index');
Route::view('people/{id}', 'people.show');

Route::view('category', 'category.index');
Route::view('category/{id}', 'category.show');

Route::view('collection', 'collection.index');
Route::view('collection/{id}', 'collection.show');

Route::view('login', 'auth.login');
Route::view('register', 'auth.register');

// Route::view('movie', 'movie.show');

Route::view('serie', 'serie.show');
Route::view('episode', 'serie.episode.show');

Route::view('discussion', 'discussion.index');
Route::view('discussion/{id}', 'discussion.show');

Route::view('404', "error.404");

Route::view('user/profile', "user.profile");
Route::view('user/settings', "user.settings");
Route::view('user/notifications', "user.notifications");


Route::prefix('ajax')->group(function () {
    Route::get('notifications', function () {
        return [];
    });
    Route::get("posts", function () {
        return [];
    });
    Route::get("follow", function () {
        return [];
    });
    Route::get("embed", function () {
        return [];
    });
    Route::get("savecollection", function () {
        return [];
    });
    Route::get("reaction", function () {
        return [];
    });
    Route::get("comments", function () {
        return [];
    });
    Route::get("post/{id}", function () {
        return [];
    });
    Route::get('delete/avatar', function () {
        return true;
    });
});
