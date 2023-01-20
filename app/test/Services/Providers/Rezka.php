<?php

namespace App\test\Services\Providers;

use App\Collectors\Helpers\JaroWinkler;
use App\Services\Helpers\Request;
use Illuminate\Support\Facades\Http;
use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpClient\HttpClient;


class Rezka
{
    protected const DOMAIN = 'https://rezka.ag';


    public static function search($text, $type = "movie", $year = null, $season = null, $episode = null)
    {
        $html = Http::withHeaders([
            'referer' =>    self::DOMAIN . "/",
            'x-requested-with' => 'XMLHttpRequest'
        ])->get(self::DOMAIN . "/engine/ajax/search.php", [
            'q' => $text
        ])->body();

        $crawler = new Crawler();
        $crawler->addHTMLContent($html);
        $data = $crawler->filter('.b-search__section_list li')->each(function ($el) use ($text) {
            $original_title = $el->filter('a')->text();
            $re = '/\(([^}]*)\)/';
            preg_match($re, $original_title, $matches, PREG_OFFSET_CAPTURE, 0);
            $item_title = explode(",", $matches[1][0])[0] ?? null;

            $re = '~\b\d{4}\b\+?~';
            preg_match($re, $original_title, $matches_year, PREG_OFFSET_CAPTURE, 0);
            $item_year = $matches_year[0][0];


            if (!is_null($item_year)) {
                $item_year = (int) trim($item_year);
            }

            $item_href = $el->filter('a')->attr('href');

            $clean_url = str_replace(self::DOMAIN, "", $item_href);
            $item_type = null;

            if (str_contains($clean_url, "films") || str_contains($clean_url, "cartoons")) {
                $item_type = "movie";
            } elseif (str_contains($clean_url, "series")) {
                $item_type = "tv";
            } else {
                return null;
            }

            return [
                'title' => $item_title,
                'href' => $item_href,
                'type' => $item_type,
                'year' => $item_year,
                'similraty' =>JaroWinkler::compare($item_title, $text)
            ];
        });


        $show = collect($data)
            ->filter()
            ->when($type == "movie" && !is_null($year), function ($collection) use ($year) {
                return $collection->where('type', 'movie')->where('year', $year);
            })
            ->when($type == "tv", function ($collection) use ($season, $episode) {
                return $collection->where('type', 'tv');
            })
            ->sortByDesc('similraty')
            ->first();

        if (is_null($show)) {
            return null;
        }

        if ($show['type'] == "movie") {
            return self::getMovie($show['href']);
        }
        if (($show['type'] == "tv" && !is_null($season)) && !is_null($episode)) {
            return self::getTv($show['href'], $season, $episode);
        }

        return null;
    }

    public static function getMovie($url)
    {
        $client = new_http_client([
            'referer' =>    self::DOMAIN . "/",
        ]);

        $id = parse_url($url, PHP_URL_PATH);
        $id = explode("/", $id);
        $id = end($id);
        $id = explode("-", $id);
        $id = $id[0];
        $crawler = new HttpBrowser($client);
        $content = $crawler->request('GET', $url);
        $favs = $content->filter('input#ctrl_favs')->attr('value');
        $data = Http::withHeaders([
            'referer' =>    $url,
            "host" => "rezka.ag",
            "origin" => "https://rezka.ag",
            'x-requested-with' => 'XMLHttpRequest',
        ])
            ->asForm()
            ->post(self::DOMAIN . "/ajax/get_cdn_series/?t=" . time(), [
                'id' => $id,
                'favs' => $favs,
                'is_camrip' => 0,
                'is_ads' => 0,
                'is_director' => 0,
                'translator_id' => 238,
                'action' => 'get_movie'
            ])
            ->json();

        if ($data['success'] != true || !$data['url']) {
            return null;
        }

        $subtitles = explode(",", $data['subtitle']);
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

        $urls = explode(",", clearTrash($data['url']));
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

    public static function getTv($url, $season, $episode)
    {
        $client = new_http_client([
            'referer' =>    self::DOMAIN . "/",
        ]);

        $id = parse_url($url, PHP_URL_PATH);
        $id = explode("/", $id);
        $id = end($id);
        $id = explode("-", $id);
        $id = $id[0];


        $crawler = new HttpBrowser($client);
        $content = $crawler->request('GET', $url . "#t:238-s:$season-e:$episode");
        $favs = $content->filter('input#ctrl_favs')->attr('value');
        $data = Http::withHeaders([
            'referer' =>    self::DOMAIN . "/",
            'x-requested-with' => 'XMLHttpRequest'
        ])
            ->asForm()
            ->post(self::DOMAIN . "/ajax/get_cdn_series/?t=" . time(), [
                'id' => $id,
                'favs' => $favs,
                'season' => $season,
                'episode' => $episode,
                'translator_id' => 238,
                'action' => 'get_stream'
            ])
            ->json();

        if ($data['success'] != true || !$data['url']) {
            return null;
        }
        $subtitles = explode(",", $data['subtitle']);
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

        $urls = explode(",", clearTrash($data['url']));
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
}
