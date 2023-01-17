<?php

namespace App\Services\Providers;

use App\Services\Helpers\JaroWinkler;
use Illuminate\Support\Facades\Http;
use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\DomCrawler\Crawler;

class Vidsrc
{
    protected const DOMAIN = 'https://v2.vidsrc.me';
    public const PROVIDER = "Svetacdn";

    public static function searchUrl($imdb_id, $type, $season = null, $episode = null)
    {
        if ($type == 'movie') {
            return self::DOMAIN . '/embed/' . $imdb_id;
        } else {
            return self::DOMAIN . '/embed/' . $imdb_id . '/' . $season . '-' . $episode;
        }
    }

    public static function search($imdb_id, $type = "movie", $season = null, $episode = null)
    {
        $client = new_http_client();
        $crawler = new HttpBrowser($client);
        $content = $crawler->request('GET', self::searchUrl($imdb_id, $type, $season, $episode));

        try {
            $src = $content->filter('#player_iframe')->attr('src');
        } catch (\Throwable $th) {
            return null;
        }

        if (!$src) {
            return null;
        }

        if ($src[0] == '/') {
            $src = 'https:' . $src;
        }

        $url = str_replace('https://source.vidsrc.me/source', 'https://vidsrc.stream/pro', $src);
        $html = Http::withHeaders([
            'referer' => 'https://source.vidsrc.me/',
        ])->get($url)->body();
        $re = '/hls\.loadSource\( *\"([^\"]+)/i';
        preg_match($re, $html, $matches, PREG_OFFSET_CAPTURE, 0);
        $hls1 = $matches[1][0];
        $re = '/video\.setAttribute\(\"src\" *\, *\"([^\"]+)/i';
        preg_match($re, $html, $matches, PREG_OFFSET_CAPTURE, 0);
        $hls2 = $matches[1][0];
        if ($hls1 == $hls2)
            return [
                'url' => $hls1,
                'label' => 'm3u'
            ];
        return [
            'url' => $hls1,
            'url2' => $hls2,
            'label' => 'm3u'
        ];
    }
}
