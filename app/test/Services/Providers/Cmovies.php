<?php

namespace App\Services\Providers;

use App\Services\Helpers\JaroWinkler;
use Illuminate\Support\Facades\Http;
use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\DomCrawler\Crawler;

class Cmovies
{
    protected const DOMAIN = 'https://cmovies.so/';
    protected const API = 'https://searchmovieapi.net/ajax';
    public const PROVIDER = "USERIES9";

    public static function searchUrl($text)
    {
        return self::API . '/suggest_search?keyword=' . urlencode($text) . '&img=https://cdn.themovieseries.net/&link_web=https://cmovies.so/';
    }

    public static function search($text, $type = "movie", $year = null, $season = null, $episode = null)
    {
        // text shoudl be in spanish -----------------------------------------------
        $html = Http::withHeaders([
            'referer' =>    self::DOMAIN,
            'x-requested-with' => 'XMLHttpRequest'
        ])->get(self::searchUrl($text))->json()['content'];

        $crawler = new Crawler();
        $crawler->addHTMLContent($html);

        $data = $crawler->filter('.ss-title')->each(function ($el) use ($text, $type, $season, $episode) {
            $title = $el->text('');
            $similraty = null;
            $href = $el->attr('href');
            $href = str_replace(self::DOMAIN, '', $href);
            $href = self::DOMAIN . $href;

            if ($type == 'tv') {
                $tv_title = ucwords($text) . ' - Season ' . $season;
                $similraty =JaroWinkler::compare($title, $tv_title);
                $href .= "?ep=" . $episode;
            } else {
                $similraty =JaroWinkler::compare($title, $text);
            }

            return [
                'title' => $title,
                'href' => $href,
                'similraty' => $similraty,
            ];
        });

        $show = collect($data)
            ->filter()
            ->sortByDesc('similraty')
            ->first();

        if (!$show)
            return null;

        if ($show) {
            $client = new_http_client();
            $crawler = new HttpBrowser($client);
            $content = $crawler->request('GET', $show['href']);
            $servers = $content->filter('.anime_muti_link ul li')->each(function ($el) {
                $href = $el->attr('data-video');
                if ($href[0] == "/") {
                    $href = "https:" . $href;
                }
                return $href;
            });
            return $servers;
        }
        return null;
    }
}
