<?php

use App\Collectors\Scrapers\Direct\Flixhq;
use App\Collectors\Scrapers\Direct\Loklok;
use App\Collectors\Scrapers\Direct\Moviebox;
use App\Collectors\Scrapers\Direct\Svetacdn;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\User\NotificationController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\SettingsController;
use App\Models\Genre;
use App\Models\Movie\Movie;
use App\Models\TmdbApi\Movie as TmdbApiMovie;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Route::middleware(['guest'])->group(function () {
            Route::get("register", [RegisterController::class, 'show'])->name('register');
            Route::post("register", [RegisterController::class, 'createUser'])->name('register');
            Route::get("login", [LoginController::class, 'show'])->name('login');
            Route::post("login", [LoginController::class, 'login'])->name('login');
        });

        Route::middleware(['auth'])->group(function () {
            Route::get("logout", [LogoutController::class, "logout"])->name('logout');
            Route::get('profile', [ProfileController::class, 'show'])->name('profile');
            Route::get('settings', [SettingsController::class, 'show'])->name('settings');
            Route::post('settings/update', [SettingsController::class, 'updateUserInfo'])->name('update_settings');
            Route::get('notifications', [NotificationController::class, 'index'])->name('notifications');
        });

        Route::get('/', [HomeController::class, 'index'])->name('index');

        Route::get("genres", [CategoryController::class, "index"])->name('genres');
        Route::get("genre/{genre}", [CategoryController::class, "show"])->name('genre.show');

        Route::get("actors", [PersonController::class, "index"])->name('persons');
        Route::get("actor/{person}", [PersonController::class, "show"])->name('person.show');

        Route::get("collections", [CollectionController::class, "index"])->name('collections');
        Route::get("collection/{collection}", [CollectionController::class, "show"])
            ->name('genre.collection.show');


        Route::get("movies", [MovieController::class, "index"])->name('movie.index');
        Route::get("movie/{movie}", [MovieController::class, "show"])->name('movie.show');

        Route::view('/not-found', "error.404");
    }
);



Route::view('explore', 'explore');
Route::view('trends', 'trends');
Route::view('search', 'search.index');


Route::view('movie', 'movie.show');

Route::view('serie', 'serie.show');
Route::view('episode', 'serie.episode.show');

Route::view('discussion', 'discussion.index');
Route::view('discussion/{id}', 'discussion.show');



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



Route::get('/', function () {

});
