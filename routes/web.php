<?php

use App\Collectors\Scrapers\Direct\Flixhq;
use App\Collectors\Scrapers\Direct\Loklok;
use App\Collectors\Scrapers\Direct\Moviebox;
use App\Collectors\Scrapers\Direct\Svetacdn;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\SettingsController;
use App\Models\Genre;
use App\Models\Movie\Movie;
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
        });
    }
);
Route::get('/', function () {
    return view('index');
})->name('index');

Route::view('explore', 'explore');
Route::view('trends', 'trends');
Route::view('search', 'search.index');

Route::view('people', 'people.index');
Route::view('people/{id}', 'people.show');

Route::view('category', 'category.index');
Route::view('category/{id}', 'category.show');

Route::view('collection', 'collection.index');
Route::view('collection/{id}', 'collection.show');

Route::view('movie', 'movie.show');

Route::view('serie', 'serie.show');
Route::view('episode', 'serie.episode.show');

Route::view('discussion', 'discussion.index');
Route::view('discussion/{id}', 'discussion.show');

Route::view('404', "error.404");

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
