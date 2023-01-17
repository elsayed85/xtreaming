<?php

namespace App\Services;

use App\Services\Helpers\JaroWinkler;
use Illuminate\Support\Facades\Http;
use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\DomCrawler\Crawler;


class Vumoo
{
    protected const DOMAIN = 'https://embed.meomeo.pw';
    public const PROVIDER = "VUMOO";

    public static function searchUrl($imdb_id, $type, $season = null, $episode = null)
    {
        if ($type == "movie")
            return self::DOMAIN . "/fastmedia/" . $imdb_id;
        else
            return self::DOMAIN . "/fastmedia/" . $imdb_id . "-" . $season . '-' . $episode;
    }

    public static function search($imdb_id, $type = "movie", $season = null, $episode = null)
    {
        $client = new_http_client([
            'referer' => 'https://vumoo.to/'
        ]);

        $crawler = new HttpBrowser($client);
        $content = $crawler->request('GET', self::searchUrl($imdb_id, $type , $season, $episode));

        // cloudflare issue
    }
}
