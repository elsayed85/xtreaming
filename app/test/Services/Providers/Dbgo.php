<?php

namespace App\Services\Providers;

use App\Services\Helpers\Request;
use App\Services\Helpers\JaroWinkler;
use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpClient\HttpClient;


class Dbgo
{
    protected const DOMAIN = 'https://dbgo.fun';

    public static function searchUrl($imdb_id, $type, $season = null)
    {
        if ($type == "movie") {
            return self::DOMAIN . "/imdb.php?id=" . $imdb_id;
        } else {
            return self::DOMAIN . "/tv-imdb.php?id=" . $imdb_id . "&s=" . $season;
        }
    }

    public static function search($imdb_id, $type = "movie", $season = null, $episode = null)
    {
        $client = new_http_client();
        $crawler = new HttpBrowser($client);
        $content = $crawler->request('GET', self::searchUrl($imdb_id, $type, $season));
        $iframe = $content->filter('div.myvideo iframe')->attr('src');
        if ($type == "movie") {
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
            $file = $matches[1][0][0];
            $re = '/[\'|\"]subtitle[\'|\"]:\s?[\'|\"](.+?)[\'|\"]/';
            preg_match_all($re, $script, $matches, PREG_OFFSET_CAPTURE, 0);
            $subtitles = explode(",", $matches[1][0][0]);
            $subtitles = collect($subtitles)->map(function ($el) {
                $re = '/\[([0-9]*.*?)]/m';
                preg_match_all($re, $el, $matches, PREG_SET_ORDER, 0);
                $lang = $matches[0][1] ?? null;
                $url = str_replace("[" . $lang . "]", "", $el);
                return [
                    'lang' => $lang,
                    'url' => $url
                ];
            });
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

                if ($quality == "1080p Ultra") {
                    $quality = 2048;
                }

                $quality = str_replace("p", "", $quality);
                return [
                    'quality' => (int) $quality,
                    'urls' => $urls
                ];
            });

            return [
                "playlist" => $urls,
                'tracks' => $subtitles
            ];
        }
        return null;
    }
}
