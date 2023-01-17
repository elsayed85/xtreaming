<?php

namespace App\Services\Providers;

use App\Services\Helpers\JaroWinkler;
use App\Services\Helpers\Request;
use App\Services\solve;
use Illuminate\Support\Facades\Http;
use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpClient\HttpClient;

class Onionflix
{
    protected const DOMAIN = 'https://onionflix.org';
    public const PROVIDER = "PTOWEMBED";

    public static function searchUrl($type, $imdb_id, $season = null, $episode = null)
    {
        if ($type == "tv")
            return self::DOMAIN . "/embed/series?imdb=" . $imdb_id . "&sea=" . $season . "&e=" . $episode;
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

        $servers_ids = $content->filter('.server.dropdown-item')->each(function ($server) {
            return $server->attr('data-id');
        });

        $movie_id = $content->filter('#embed-player')->attr('data-movie-id');
        $key = $content->filter('.g-recaptcha')->attr('data-sitekey');
        $data = collect($servers_ids)->map(function ($server_id) use ($movie_id, $key, $url) {
            $token = solve::girc($url, $key);
            $url = self::DOMAIN . "/ajax/get_stream_link";
            $data = Http::get($url, [
                "id" => $server_id,
                "movie" => $movie_id,
                "is_init" => "false",
                "captcha" => $token,
            ])->json();
            if ($data['success'] == true) {
                $link = $data['data']['link'];
                return $link;
            }
            return null;
        });
        return $data->filter()->values()->toArray();
    }
}
