<?php

namespace App\Collectors\Scrapers\Direct;

use App\Collectors\Helpers\JaroWinkler;
use Illuminate\Support\Facades\Http;
use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\DomCrawler\Crawler;

class Filmix
{
    protected const DOMAIN = 'https://filmix.ac';
    public const PROVIDER = "filmix";

    public static function searchUrl($text)
    {
        return 'https://filmix.ac/api/v2/suggestions?search_word=' . urlencode($text);
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

        $posts = Http::withHeaders([
            'referer' =>    self::DOMAIN,
            'x-requested-with' => 'XMLHttpRequest'
        ])->get(self::searchUrl($text))->json()['posts'] ?? [];

        if (count($posts) == 0) {
            return null;
        }

        $results  = collect($posts)->map(function ($el) use ($text, $type, $season) {
            $title = $el['original_name'];
            $id = $el['id'];
            $year = $el['year'];
            $href = $el['link'];
            $href = str_replace(self::DOMAIN, '', $href);
            $type = strpos($href, 'films') !== false ? 'movie' : 'tv';
            return [
                'title' => $title,
                'id' => $id,
                'year' => $year,
                'type' => $type,
                'similraty' => JaroWinkler::compare($title, $text),
            ];
        });

        $show = collect($results)
            ->when($type == "movie", function ($collection) use ($year) {
                return $collection->where('type', 'movie')->where('year', $year);
            })
            ->when($type == "tv", function ($collection) use ($year) {
                return $collection->where('type', 'tv');
            })
            ->sortByDesc('similraty')
            ->first();

        if (!$show)
            return null;


        $result = Http::withHeaders([
            'referer' =>    self::DOMAIN . "/",
            'x-requested-with' => 'XMLHttpRequest',
            'cookie' => "_ga=GA1.1.623268708.1674208290; x-a-key=sinatra; FILMIXNET=fjv43dv4ej3ego121nnecbfjbv; ishimura=f8f6877d0adfab78436d605c24c0ba0526abc05c; _ga_GYLWSWSZ3C=GS1.1.1674406253.2.1.1674407703.0.0.0"
        ])
            ->asForm()
            ->post("https://filmix.ac/api/movies/player_data?t=" . time(), [
                'post_id' => $show['id'],
                'showfull' => 'true'
            ])->json();

        dd($result);
    }
}
