<?php

namespace App\Services\Providers\Arab;

use App\Services\Helpers\Request;
use App\Collectors\Helpers\JaroWinkler;
use Illuminate\Support\Facades\Http;
use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpClient\HttpClient;


class FajerShow
{
    protected const DOMAIN = 'https://fajer.show';

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
        $code = $crawler->request('GET', self::DOMAIN)->filter('script#live_search-js-extra')->html();
        $code = str_replace('var dtGonza = ', '', $code);
        $code = str_replace(';', '', $code);
        $code = json_decode($code, true)['nonce'];
        $data = Http::get(self::DOMAIN . "/wp-json/dooplay/search/?keyword=" . urlencode($text) . "&nonce=" . $code)->json();

        $show = collect($data)
            ->map(function ($el) use ($text) {
                $item_title = $el['title'];
                $item_href = $el['url'];
                $item_type = null;
                if (str_contains($item_href, 'movies')) {
                    $item_type = "movie";
                } elseif (str_contains($item_href, 'tvshows')) {
                    $item_type = "tv";
                }
                $year = $el['extra']['date'];
                return [
                    'title' => $item_title,
                    'href' => $item_href,
                    'type' => $item_type,
                    'year' => $year,
                    'similraty' =>JaroWinkler::compare($item_title, $text)
                ];
            })
            ->sortByDesc('similraty')
            ->when($type == "movie" && !is_null($year), function ($collection) use ($year) {
                return $collection->where('type', 'movie')->where('year', $year);
            })
            ->when($type == "tv", function ($collection) use ($season, $episode) {
                return $collection->where('type', 'tv');
            })
            ->first();

        if (is_null($show)) {
            return null;
        }

        if ($show['type'] == "movie") {
            return self::getWatchUrl($show['href'], $type);
        }
        if (($show['type'] == "tv" && !is_null($season)) && !is_null($episode)) {
            return self::getWatchUrl($show['href'], $type, $season, $episode);
        }

        return null;
    }

    public static function getWatchUrl($url, $type, $season = null, $episode = null)
    {
        $client = new_http_client();
        $crawler = new HttpBrowser($client);

        if ($type == "tv") {
            $content = $crawler->request('GET', $url);
            $episodes = $content->filter(".se-c ul > li")->each(function ($el) {
                $href = $el->filter("div.episodiotitle > a")->attr('href');
                $s = explode(" - ", $el->filter("div.numerando")->text());
                $season = $s[0] ?? null;
                $episode = $s[1] ?? null;
                return [
                    'href' => $href,
                    'season' => $season,
                    'episode' => $episode
                ];
            });
            $episode = collect($episodes)->where('season', $season)->where('episode', $episode)->first();
            if (is_null($episode)) return null;
            $url = $episode['href'];
        }

        $content = $crawler->request('GET', $url);
        $serversIds = $content->filter("li.dooplay_player_option")->each(function ($el) {
            $type = $el->attr('data-type');
            $id = $el->attr('data-post');
            $number = $el->attr('data-nume');
            return [
                'type' => $type,
                'id' => $id,
                'number' => $number
            ];
        });
        $servers = collect($serversIds)->map(function ($server) {
            $data = Http::withHeaders([
                "x-requested-with" => "XMLHttpRequest",
                "referer" => self::DOMAIN
            ])->asForm()->post(self::DOMAIN . "/wp-admin/admin-ajax.php", [
                'action' => 'doo_player_ajax',
                'post' => $server['id'],
                'nume' => $server['number'],
                'type' => $server['type']
            ])->body();
            if (str_contains($data, 'iframe') == false) return null;
            $crawler = new Crawler();
            $crawler->addHTMLContent($data);
            $link = $crawler->filter('iframe')->attr('src');
            $type = null;
            if (str_contains($link, 'youtube.com/'))
                return null;

            if (str_contains($link, 'fajer.live'))
                $type = 'fajer_live';

            if (str_contains($link, 'show.alfajertv.com'))
                $type = 'alfajertv';
            return [
                'link' => $link,
                'type' => $type
            ];
        })->filter();

        $alfajertv = $servers->where('type', 'alfajertv')->map(function ($el) {
            $parts = parse_url($el['link']);
            parse_str($parts['query'], $query);
            return $query['source'] . "&id=" . $query['id'] . "&type=" . $query['type'];
        })->flatten()->toArray();

        $fajer_live = $servers->where('type', 'fajer_live')->map(function ($el) {
            $id = explode("/v/", $el['link']);
            $id = end($id);
            $id = explode("/", $id);
            $id = $id[0];
            $hostname = parse_url($el['link'], PHP_URL_HOST);
            $data = Http::post("https://" . $hostname . "/api/source/" . $id, [
                'r' => "",
                'd' => $hostname,
            ])->json();

            if ($data['success'] == false)
                return null;

            return collect($data['data'])->map(function ($el) {
                return  $el['file'];
            })->toArray();
        })->filter()->flatten()->toArray();

        $direct_links = array_merge($alfajertv, $fajer_live);
        $indirect_links = $servers->where('type', null)->map(function ($el) {
            return $el['link'];
        })->values()->toArray();
        dd($direct_links, $indirect_links);
    }
}
