<?php

namespace App\Services\Providers;

use App\Services\Helpers\JaroWinkler;
use Illuminate\Support\Facades\Http;
use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\DomCrawler\Crawler;

class Series9
{
    protected const DOMAIN = 'https://series9.la';
    protected const API = 'https://searchmovieapi.net/series/ajax/suggest_search';
    public const PROVIDER = "USERIES9";

    public static function searchUrl($text)
    {
        return self::API . '?keyword=' . urlencode($text) . '&img=//cdn.themovieseries.net/&link_web=' . self::DOMAIN;
    }

    public static function search($text, $type = "movie", $year = null, $season = null, $episode = null)
    {
        // text shoudl be in spanish -----------------------------------------------
        $html = Http::withHeaders([
            'referer' =>    self::DOMAIN
        ])->get(self::searchUrl($text))->json()['content'];


        $crawler = new Crawler();
        $crawler->addHTMLContent($html);

        $data = $crawler->filter('.ss-title')->each(function ($el) use ($text, $type, $season) {
            $title = $el->text('');
            $similraty = null;
            if ($type == 'tv') {
                $tv_title = ucwords($text) . ' - Season ' . $season;
                $similraty =JaroWinkler::compare($title, $tv_title);
            } else {
                $similraty =JaroWinkler::compare($title, $text);
            }
            $href = $el->attr('href');
            $href = str_replace(self::DOMAIN, '', $href);
            $href = self::DOMAIN . "/" . $href;
            return [
                'title' => $title,
                'href' => $href,
                'similraty' => $similraty,
            ];
        });

        $search_url = collect($data)
            ->filter()
            ->sortByDesc('similraty')
            ->first();

        if (!$search_url) {
            return null;
        }

        if ($search_url) {
            $client = new_http_client();
            $crawler = new HttpBrowser($client);
            $content = $crawler->request('GET', $search_url['href']);
            if ($type == 'movie') {
                $servers = $content->filter('div#list-eps .les-content a')->each(function ($server) {
                    $player = $server->attr('player-data');
                    if ($player[0] == "/")
                        $player = "https:" . $player;
                    return $player;
                });
                $servers = array_values(array_filter($servers));
                return $servers;
            } else {
                $servers = $content->filter('div#list-eps .les-content a')->each(function ($server) use ($episode) {
                    $ep_number = $server->attr('episode-data');
                    $player = $server->attr('player-data');
                    if ($player[0] == "/")
                        $player = "https:" . $player;
                    if ($ep_number == $episode)
                        return $player;
                    return null;
                });
                $servers = array_values(array_filter($servers));
                return $servers;
            }
        }
        return null;
    }
}
