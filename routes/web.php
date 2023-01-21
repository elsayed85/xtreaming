<?php

use App\Collectors\Scrapers\Direct\Dbgo;
use App\Collectors\Scrapers\Direct\Fluxcedene;
use App\Collectors\Scrapers\Direct\Loklok;
use App\Collectors\Scrapers\Direct\Rezka;
use App\Collectors\Scrapers\Direct\RStreamAPI;
use App\Collectors\Scrapers\Indirect\Fmovies;
use App\Collectors\Scrapers\Indirect\Goku;
use App\Collectors\Scrapers\Indirect\Onionflix;
use App\Collectors\Scrapers\Indirect\Xcine;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SerieController;
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
        Route::get("movie/{movie}/trailer", [MovieController::class, "showTrailerModal"])
            ->name('movie.trailer');

        Route::get("movie/{movie}/report", [MovieController::class, "showReportModal"])
            ->name('movie.report');
        Route::post("movie/{movie}/report", [MovieController::class, "report"])
            ->name('movie.report');
        Route::post("embed/movie", [MovieController::class, "embed"])->name('movie.embed');
        Route::post("playlist-report/movie", [MovieController::class, "reportPlaylist"])->name('report_playlist.movie');

        Route::get("series", [SerieController::class, "index"])->name('serie.index');
        Route::get("serie/{serie}", [SerieController::class, "show"])->name('serie.show');


        Route::get("serie/{serie}/e/{number}", [EpisodeController::class, "show"])->name('episode.show');
        Route::get("serie/{serie}/e/{number}/report", [EpisodeController::class, "showReportModal"])
            ->name('episode.report');
        Route::post("serie/{serie}/e/{number}/report", [EpisodeController::class, "report"])
            ->name('episode.report');
        Route::post("embed/episode", [EpisodeController::class, "embed"])->name('movie.embed');
        Route::post("playlist-report/episode", [EpisodeController::class, "reportPlaylist"])->name('report_playlist.episode');

        Route::post("search/suggestions", [SearchController::class, "searchSuggestions"])->name('search.suggestions');

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
    }
);



Route::view('explore', 'explore');
Route::view('trends', 'trends');

Route::view('discussion', 'discussion.index');
Route::view('discussion/{id}', 'discussion.show');




Route::get('test', function () {
    // https://kinogo.biz/
    // https://hdrezka.re/main.html
    // https://gidonline.io/
    // https://filmix.ac/
    // http://seasonvar.ru/

    $movie = [
        'type' => 'movie',
        'year' => 2008,
        'text' => 'dark knight',
        'tmdb_id' => 155,
        'imdb_id' => 'tt0468569'
    ];

    $serie = [
        'type' => 'serie',
        'year' => 2011,
        'text' => 'game of thrones',
        'season' => 1,
        'episode' => 1,
        'tmdb_id' => 1399,
        'imdb_id' => 'tt0944947'
    ];

    $data = Rezka::search($movie);
    dd($data);
});
