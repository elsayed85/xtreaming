<?php

namespace App\Services\Providers;

use App\Services\Helpers\JaroWinkler;
use App\Services\Helpers\Request;
use App\Services\solve;
use Illuminate\Support\Facades\Http;
use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpClient\HttpClient;

class Embed2Org
{
    protected const DOMAIN = 'https://2embed.org';
    public const PROVIDER = "PTOWEMBED";

    public static function searchUrl($type, $imdb_id, $season = null, $episode = null)
    {
        if ($type == "tv")
            return self::DOMAIN . "/embed/series?tmdb=" . $imdb_id . "&sea=" . $season . "&e=" . $episode;
        else
            return self::DOMAIN . "/embed/" . $imdb_id;
    }

    public static function search($imdb_id, $type = "movie", $season = null, $episode = null)
    {
        $client = new_http_client([
            'referer' => self::DOMAIN . "/",
        ]);
        $crawler = new HttpBrowser($client);
        $url = self::searchUrl($type, $imdb_id, $season, $episode);
        $content = $crawler->request('GET', $url);

        $servers_ids = $content->filter('a.item-server')->each(function ($server) {
            return $server->attr('data-id');
        });

        $data = collect($servers_ids)->map(function ($server_id) {
            $url = self::DOMAIN . "/ajax/embed/play?id=" . $server_id;
            return Http::get($url)->json()['link'];
        });

        $_2embed_urls = $data->filter(function ($url) {
            return strpos($url, '2embed.org/pl.php') !== false;
        })->map(function ($el) use ($crawler, $type, $season, $episode) {
            // get id query pramter
            $id = parse_url($el, PHP_URL_QUERY);
            $id = (int)str_replace("id=", "", $id);
            if ($type == "movie") {
                $url = "https://www.2embed.to/embed/tmdb/movie?id=" . $id;
            } else {
                $url = "https://www.2embed.to/embed/tmdb/tv?id=" . $id . "&s=" . $season . "&e=" . $episode;
            }
            $content = $crawler->request('GET', $url);
            $key = $content->filter('body')->attr('data-recaptcha-key');
            $server_ids = $content->filter('.dropdown-menu a')->each(function ($server) {
                return $server->attr('data-id');
            });

            $data = [];
            foreach ($server_ids as $id) {
                $token = solve::girc($url, $key);
                if ($token) {
                    $url = "https://www.2embed.to/ajax/embed/play?id=" . $id . "&_token=" . $token;
                    $data[] = Http::withHeaders([
                        'referer' => self::DOMAIN . "/",
                    ])->get($url)->json()['link'];
                }
            }
            return $data;
        })->flatten()->values();

        return $_2embed_urls;
    }
}
