<?php

namespace App\Services;

use App\Services\Providers\{
    Akwam,
    Allmoviesforyou,
    Cineb,
    Cinecalidad,
    Flixhq,
    Fmovies,
    Goku,
    Moviebox,
    Series9,
    Svetacdn,
    TheFlix,
    Vidsrc,
    Fluxcedene,
    Movies123
};


class ProviderCollector
{
    public function inDirectProvider()
    {
        return [
            Allmoviesforyou::class,
            Cineb::class,
            Cinecalidad::class,
            Fmovies::class,
            Goku::class,
            Series9::class,
            Fluxcedene::class,
            Movies123::class
        ];
    }

    public function directProviders()
    {
        return [
            Akwam::class, // mp4
            Moviebox::class, // mp4
            TheFlix::class, // [mp4]
            // Svetacdn::class, // download links [mp4 + hls]
            // Vidsrc::class, // [hls only one or two links],
            // Flixhq::class, // playlist hls + tracks
        ];
    }

    public function getMovieServers($text, $year, $imdb_id = null)
    {
        $providers = $this->inDirectProvider();
        $servers = collect();

        foreach ($providers as $provider) {
            $servers =  $servers->merge($provider::search($text, 'movie', $year));
        }

        return $servers->flatten()->unique()
            ->map(function ($el) {
                $hostname = getUrlHostname($el);
                return [
                    'id' => $hostname,
                    'name' =>  $hostname,
                    'url' => $el
                ];
            })
            ->groupBy('name')
            ->map(function ($el) {
                if ($el->count() > 1) {
                    return $el->map(function ($el, $index) {
                        $el['id'] = $el['name'] . '_' . ($index + 1);
                        return $el;
                    });
                }
                return $el;
            })
            ->flatMap(function ($el) {
                return $el;
            })
            ->toArray();
    }


    public function getTvServers($text, $season, $episode, $year = null)
    {
        $providers = $this->inDirectProvider();
        $servers = collect();
        foreach ($providers as $provider) {
            $servers = $servers->merge($provider::search($text, 'tv', $year, $season, $episode));
        }
        return $servers->flatten()->unique()
            ->map(function ($el) {
                $hostname = getUrlHostname($el);
                return [
                    'id' => $hostname,
                    'name' =>  $hostname,
                    'url' => $el
                ];
            })
            ->groupBy('name')
            ->map(function ($el) {
                if ($el->count() > 1) {
                    return $el->map(function ($el, $index) {
                        $el['id'] = $el['name'] . '_' . ($index + 1);
                        return $el;
                    });
                }
                return $el;
            })
            ->flatMap(function ($el) {
                return $el;
            })
            ->toArray();
    }

    public function getMovieSingleServers($text, $year, $imdb_id = null)
    {
        $svetacdn = Svetacdn::search($imdb_id, 'movie');
        $akwam = Akwam::search($text, 'movie', $year);
        $theflix = TheFlix::search($text, 'movie', $year);
        return [
            $svetacdn,
            $akwam,
            $theflix,
        ];
    }

    public function getTvSingleServers($text, $season, $episode, $imdb_id  = null, $year = null)
    {
        $svetacdn = Svetacdn::search($imdb_id, 'tv');
        $akwam = Akwam::search($text, 'tv', $year,  $season, $episode);
        $theflix = TheFlix::search($text, 'tv', $year,  $season, $episode);
        return [
            $svetacdn,
            $akwam,
            $theflix,
        ];
    }

    public function getServerDirectData($url)
    {
        $hostname = getUrlHostname($url);
        $class = config('hosts.' . $hostname . '.service');
        if (class_exists($class)) {
            return app($class)::getVideo($url);
        }
        return null;
    }
}
