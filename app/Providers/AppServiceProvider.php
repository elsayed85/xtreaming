<?php

namespace App\Providers;

use App\Models\Movie\Movie;
use App\Models\Serie\Serie;
use App\Observers\Movie\MovieObserver;
use App\Observers\Serie\SerieObserver;
use CmsMulti\FilamentClearCache\Facades\FilamentClearCache;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Movie::observe(MovieObserver::class);
        Serie::observe(SerieObserver::class);
        FilamentClearCache::addCommand('cache:clear');
        Http::macro('tmdb', function ($path, $query = []) {
            $query = array_merge([
                'api_key' => config('services.tmdb.token'),
                'language' => config('services.tmdb.language'),
                'image_language' => "ar",
                'include_adult' => false
            ], $query);

            return Http::get(config('services.tmdb.url') . $path, $query)->json();
        });

        view()->composer('*', function ($view) {
            $view->with('u', auth()->user());
        });

        Paginator::useBootstrap();
    }
}
