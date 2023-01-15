<?php

namespace App\Providers;

use Illuminate\Support\Facades\Http;
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
        Http::macro('tmdb', function ($path, $query = []) {
            $query = array_merge($query, [
                'api_key' => config('services.tmdb.token'),
                'language' => LaravelLocalization::getCurrentLocale(),
                'image_language' => LaravelLocalization::getCurrentLocale() . ",en",
                'include_adult' => false
            ]);

            return Http::get(config('services.tmdb.url') . $path, $query)->json();
        });

    }
}
