<?php

namespace App\Collectors\Scrapers\Indirect;

use App\Collectors\Helpers\JaroWinkler;
use App\Services\Helpers\Request;
use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpClient\HttpClient;


class Allmoviesforyou
{
    protected const DOMAIN = 'https://allmoviesforyou.net/';
    public const PROVIDER = "allmoviesforyou";

    public static function searchUrl($text)
    {
        return self::DOMAIN . '?s=' . str_replace(' ', '+', $text);
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
        
        $client = new_http_client();
        $crawler = new HttpBrowser($client);
        $content = $crawler->request('GET', self::searchUrl($text));
        $data = $content->filter('article.TPost')->each(function ($el) use ($text) {
            $item_title = $el->filter('a h2.Title')->text();
            $item_href = $el->filter('a')->attr('href');
            $item_year = $el->filter('.MvIC .Yr')->text();
            $item_type = 'movie';
            $el_type = explode('/', parse_url($item_href, PHP_URL_PATH))[1];

            if ($el_type == "series") {
                $item_type = "tv";
            }

            return [
                'title' => $item_title,
                'href' => $item_href,
                'year' => $item_year,
                'type' => $item_type,
                'similraty' => JaroWinkler::compare($item_title, $text)
            ];
        });

        $show = collect($data)
            ->when($type == "movie" && !is_null($year), function ($collection) use ($year) {
                return $collection->where('type', 'movie')->where('year', $year);
            })
            ->when($type == "tv", function ($collection) use ($season, $episode) {
                $collection = $collection->where('type', 'tv');
                if (!is_null($season) && !is_null($episode)) {
                    $collection = $collection->map(function ($item) use ($season, $episode) {
                        $new_url = rtrim(str_replace('series', 'episode', $item['href']), '/');
                        $item['href'] = $new_url . "-" . $season . "x" . $episode;
                        return $item;
                    });
                }
                return $collection;
            })
            ->sortByDesc('similraty')
            ->first();

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
        return [
            $sub_src
        ];
    }
}
