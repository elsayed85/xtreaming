<?php

namespace App\Services\Providers;

use App\Services\Helpers\Request;
use App\Services\Helpers\JaroWinkler;
use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpClient\HttpClient;


class RStreamAPI
{
    protected const DOMAIN = 'https://fsa.remotestre.am';

    public static function showUrl($tmdb_id, $type, $season = null, $episode = null)
    {
        if ($type == "movie") {
            return self::DOMAIN . "/Movies/$tmdb_id/$tmdb_id.mp4";
        } else {
            return self::DOMAIN . "/Shows/$tmdb_id/$season/$episode.mp4";
        }
    }

    public static function search($tmdb_id, $type = "movie", $season = null, $episode = null)
    {
        return [
            'url' => self::showUrl($tmdb_id, $type, $season, $episode),
        ];
    }
}
