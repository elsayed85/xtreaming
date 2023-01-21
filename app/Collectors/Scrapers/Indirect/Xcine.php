<?php

namespace App\Collectors\Scrapers\Indirect;

use App\Collectors\Helpers\JaroWinkler;
use Illuminate\Support\Facades\Http;
use Symfony\Component\BrowserKit\HttpBrowser;

class Xcine
{
    public const URL = "https://xcine.info";
    public const PROVIDER = "xcine";
    public const API = "https://api.xcine.info/";

    public static function searchUrl($text, $year)
    {
        $query = urlencode($text);
        return self::API . "/data/browse/?lang=2&keyword=$query&year=$year&type=&order_by=&page=1";
    }

    public static function search($data)
    {
        [$type, $text, $year, $season, $episode] = [
            $data['type'] ?? "movie",
            $data['text'] ?? null,
            $data['year'] ?? null,
            $data['season'] ?? null,
            $data['episode'] ?? null
        ];

        $data = Http::withHeaders([
            'user-agent' => getRandomHost(),
            'referer' => self::URL . "/"
        ])->get(self::searchUrl($text, $year))->json()['movies'];

        $show = collect($data)->map(function ($el) use ($text, $type, $season, $episode) {
            $title = isset($el['original_title']) ? $el['original_title'] : $el['title'];
            return [
                'title' => $title,
                'type' => $el['tv'] == 1 ? "tv" : "movie",
                'similraty' => JaroWinkler::compare($title, $text),
                'streams' => $el['streams']
            ];
        })->first();

        if (!$show) {
            return null;
        }

        $streams = [];
        if ($show['type'] == "movie") {
            $streams = $show['streams'];
        } else {
            $url = self::API . "data/seasons/?lang=2&original_title=" . $show['title'];
            $data = Http::withHeaders([
                'user-agent' => getRandomHost(),
                'referer' => self::URL . "/"
            ])->get($url)->json();
            $season = collect($data)->where('s', $season)->first();
            if ($season) {
                $streams =  collect($season['streams'])->where('e', $episode)->toArray();
            }
        }


        $streams = collect($streams)->map(function ($el) {
            $url = $el['stream'];

            if ($url[0] == "/") {
                $url = "https:" . $url;
            }

            if (str_contains($url, "dl.streamcloud")) {
                return $url;
            } elseif (str_contains($url, 'jetload')) {
                return null;
            }

            return $url;
        })->filter();
        return $streams;
    }
}
