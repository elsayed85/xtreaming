<?php

namespace App\Collectors\Scrapers\Direct;

use App\Services\Helpers\Request;
use App\Collectors\Helpers\JaroWinkler;
use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpClient\HttpClient;


class Dbgo
{
    protected const DOMAIN = 'https://dbgo.fun';
    public const PROVIDER = "dbgo";

    public static function searchUrl($imdb_id, $type, $season = null)
    {
        if ($type == "movie") {
            return self::DOMAIN . "/imdb.php?id=" . $imdb_id;
        } else {
            return self::DOMAIN . "/tv-imdb.php?id=" . $imdb_id . "&s=" . $season;
        }
    }

    public static function search($data)
    {
        [$imdb_id, $type, $season, $episode] = [
            $data['imdb_id'],
            $data['type'] ?? "movie",
            $data['season'] ?? null,
            $data['episode'] ?? null
        ];

        $client = new_http_client();
        $crawler = new HttpBrowser($client);
        $content = $crawler->request('GET', self::searchUrl($imdb_id, $type, $season));
        $iframe = $content->filter('div.myvideo iframe')->attr('src');

        if (!$iframe) {
            return null;
        }

        if ($type == "tv") {
            $iframe .= "&e=" . $episode;
        }


        $crawler = new HttpBrowser(new_http_client([
            'referer' => self::DOMAIN . "/"
        ]));

        $content2 = $crawler->request('GET', $iframe);

        try {
            $script = $content2->filter('#player')->nextAll()->filter('script')->eq(0)->text();
        } catch (\Throwable $th) {
            return null;
        }
        $re = '/[\'|\"]file[\'|\"]:\s?[\'|\"](.+?)[\'|\"]/';
        preg_match_all($re, $script, $matches, PREG_OFFSET_CAPTURE, 0);

        $file = $matches[1][0][0] ?? null;
        if(!$file) return null;

        $re = '/[\'|\"]subtitle[\'|\"]:\s?[\'|\"](.+?)[\'|\"]/';
        preg_match_all($re, $script, $matches, PREG_OFFSET_CAPTURE, 0);
        $subtitles = explode(",", $matches[1][0][0]);
        $subtitles = collect($subtitles)->map(function ($el) {
            $re = '/\[([0-9]*.*?)]/m';
            preg_match_all($re, $el, $matches, PREG_SET_ORDER, 0);
            $lang = $matches[0][1] ?? null;
            $url = str_replace("[" . $lang . "]", "", $el);
            $lang = html_entity_decode($lang);
            if (filterbasedOnLanguageKey($lang) == false) return null;
            return [
                'lang' => $lang,
                'url' => $url
            ];
        })->filter()->values()->toArray();

        $urls = explode(",", clearTrash($file, "#2"));
        $urls = collect($urls)->map(function ($el) {
            $re = '/\[([0-9]*p.*?)]/m';
            preg_match_all($re, $el, $matches, PREG_SET_ORDER, 0);
            $quality = $matches[0][1] ?? null;
            $url = str_replace("[" . $quality . "]", "", $el);
            $urls = explode("or", $url);
            foreach ($urls as $key => $url) {
                $urls[$key] = trim($url);
            }

            $url = $urls[0];
            $ext = pathinfo(strtok($url, '?'), PATHINFO_EXTENSION);

            if ($quality == "1080p Ultra") {
                $quality = 2048;
            }

            $quality = str_replace("p", "", $quality);
            return [
                'label' => (int) $quality,
                'url' => $url,
                'ext' => $ext
            ];
        });

        return [
            "urls" => $urls,
            'tracks' => $subtitles,
            'provider' => self::PROVIDER
        ];
    }
}
