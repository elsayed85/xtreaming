<?php

namespace App\Services\Providers;

use App\Services\Helpers\JaroWinkler;
use Illuminate\Support\Facades\Http;
use Symfony\Component\BrowserKit\HttpBrowser;

class Cinecalidad
{
    protected const DOMAIN = 'https://cinecalidad.ms';

    public static function searchUrl($text)
    {
        return self::DOMAIN . "/?s=" . urlencode($text);
    }

    public static function search($text, $type = "movie", $year = null, $season = null, $episode = null)
    {
        // text shoudl be in spanish -----------------------------------------------
        $client = new_http_client();
        $crawler = new HttpBrowser($client);
        $content = $crawler->request('GET', self::searchUrl($text));
        $data = $content->filter('.relative.group')->each(function ($item) use ($text, $season) {
            $item_href = $item->filter('a.w-full.h-full')->attr('href');
            $item_title = $item->filter('.sr-only')->text('');
            $item_year = (int) $item->filter('div')->eq(0)->text('');
            $item_type = explode("/", str_replace(self::DOMAIN, "", $item_href))[1];
            if ($item_type == "pelicula") {
                $item_type = "movie";
            } else {
                $item_type = "tv";
            }

            return [
                'type' => $item_type,
                'title' => $item_title,
                'href' => $item_href,
                'year' => $item_year,
                'similraty' =>JaroWinkler::compare($item_title, $text),
            ];
        });

        $show = collect($data)
            ->filter()
            ->sortByDesc('similraty')
            ->when($type == "movie" && !is_null($year), function ($collection) use ($year) {
                return $collection->where('type', 'movie')->where('year', $year);
            })
            ->when($type == "tv", function ($collection) {
                return $collection->where('type', 'tv');
            })
            ->first();

        if (!$show) {
            return null;
        }

        if ($show['type'] == 'movie') {
            return self::getMovieUrls($show['href']);
        } elseif ($show['type'] == 'tv') {
            return self::getEpisodeUrls($show['href'], $season, $episode);
        }

        return null;
    }

    public static function getMovieUrls($url)
    {
        $client = new_http_client([]);

        $crawler = new HttpBrowser($client);
        $content = $crawler->request('GET', $url);
        $urls = $content
            ->filter('ul.options li')
            ->each(function ($item) use ($crawler) {
                $href = $item->filter('a')->attr('data-src');
                $href = base64_decode($href);
                if (strpos($href, 'cinecalidad') !== false) {
                    return $crawler->request('GET', $href)->filter('iframe')->attr('src');
                }
                return $href;
            });
        return $urls;
    }

    public static function getEpisodeUrls($url, $season = null, $episode = null)
    {
        $url = str_replace('/serie/', '/episodio/', $url);
        $url = substr($url, 0, -1) . "-" . $season . 'x' . $episode;
        $client = new_http_client([]);

        $crawler = new HttpBrowser($client);
        $content = $crawler->request('GET', $url);
        $urls = $content
            ->filter('ul.options li')
            ->each(function ($item) use ($crawler) {
                $href = $item->filter('a')->attr('data-src');
                $href = base64_decode($href);
                if (strpos($href, 'cinecalidad') !== false) {
                    return $crawler->request('GET', $href)->filter('iframe')->attr('src');
                }
                return $href;
            });
        return $urls;
    }
}
