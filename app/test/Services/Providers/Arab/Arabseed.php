<?php

namespace App\Services\Providers\Arab;

use App\Services\Helpers\Request;
use App\Services\Helpers\JaroWinkler;
use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpClient\HttpClient;


class Arabseed
{
    protected const DOMAIN = 'https://a.arabseed.ink';

    public static function search($text, $type = "movie", $year = null, $season = null, $episode = null)
    {
        $client = new_http_client();
        $crawler = new HttpBrowser($client);
        $content = $crawler->request(
            'POST',
            self::DOMAIN . "/wp-content/themes/Elshaikh2021/Ajaxat/SearchingTwo.php",
            [
                'search' => $text,
                'type' => $type == "movie" ? "movies" : "series",
            ]
        );
        $data = $content->filter('.MovieBlock')->each(function ($el) use ($text, $season) {
            $item_title = $el->filter('.BlockName h4')->text();
            $item_href = $el->filter('a')->attr('href');
            $item_type = $el->filter('span.category')->text();
            if (str_contains($item_type, 'افلام') || str_contains($item_type, 'فيلم')) {
                $item_type = 'movie';
            } else {
                $item_type = 'tv';
                $text = "مسلسل " . ucwords($text) . " " . seasonNumberAsTextInArabic($season);
            }
            return [
                'title' => $item_title,
                'text' => $text,
                'href' => $item_href,
                'type' => $item_type,
                'similraty' =>JaroWinkler::compare($item_title, $text)
            ];
        });
        $show = collect($data)
            ->sortByDesc('similraty')
            ->when($type == "movie" && !is_null($year), function ($collection) use ($year) {
                return $collection->where('type', 'movie');
            })
            ->when($type == "tv", function ($collection) use ($season, $episode) {
                return $collection->where('type', 'tv');
            })
            ->first();


        dd($show);
        if (is_null($show)) {
            return null;
        }

        if ($show['type'] == "movie") {
            return self::getWatchUrl($show['href']);
        }
        if (($show['type'] == "tv" && !is_null($season)) && !is_null($episode)) {
            return self::getWatchUrl($show['href']);
        }

        return null;
    }

    public static function getWatchUrl($url)
    {
        $client = new_http_client();
        $crawler = new HttpBrowser($client);
        $content = $crawler->request('GET', $url);
        try {
            $src_url = $content->filter('iframe')->attr('src');
        } catch (\Throwable $th) {
            return null;
        }
        $src_url = $content->filter('iframe')->attr('src');
        $sub_src = $crawler->request('GET', $src_url)->filter('iframe')->attr('src');
        return $sub_src;
    }
}
