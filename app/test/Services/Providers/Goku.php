<?php

namespace App\Services\Providers;

use App\Services\Helpers\Request;
use App\Services\Helpers\JaroWinkler;
use Illuminate\Support\Facades\Http;
use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpClient\HttpClient;


class Goku
{
    protected const DOMAIN = 'https://goku.to';
    public const PROVIDER = "GOKU";

    public static function searchUrl($text)
    {
        return self::DOMAIN . "/search?keyword=" . str_replace(' ', '+', $text);
    }

    public static function search($text, $type = "movie", $year = null, $season = null, $episode = null)
    {
        $client = new_http_client();
        $crawler = new HttpBrowser($client);
        $content = $crawler->request('GET', self::searchUrl($text));
        $data = $content->filter('.section-items .item')->each(function ($el) use ($text) {
            $item_title = $el->filter('.movie-info .movie-name')->text();
            $item_href = $el->filter('.movie-info .movie-link')->attr('href');
            $item_type = explode("/", $item_href)[1];
            $item_href = self::DOMAIN . $item_href;
            $item_year = $el->filter('.info-split div')->eq(0)->text();

            if ($item_type == "series") {
                $item_type = "tv";
                $item_href = str_replace("/series/", "/watch-series/", $item_href);
            }

            if ($item_type == "movie") {
                $item_href = str_replace("/movie/", "/watch-movie/", $item_href);
            }

            return [
                'title' => $item_title,
                'href' => $item_href,
                'year' => $item_year,
                'type' => $item_type,
                'similraty' => (new JaroWinkler())->compare($item_title, $text)
            ];
        });

        $show = collect($data)
            ->when($type == "movie" && !is_null($year), function ($collection) use ($year) {
                return $collection->where('type', 'movie')->where('year', $year);
            })
            ->when($type == "tv", function ($collection) use ($year) {
                return $collection->where('type', 'tv');
            })
            ->sortByDesc('similraty')
            ->first();
            
        if (!$show) {
            return null;
        }

        if ($show['type'] == "movie") {
            $id = $crawler->request('GET', $show['href'])->filter('meta[property="og:url"]')->attr('content');
            $id = explode("/", $id);
            $id = end($id);
            $servers = self::getMovieServers($id);
            if (is_null($servers)) return null;
            return collect($servers)->map(function ($server) {
                return self::getServerDirectLink($server);
            })->toArray();
        }
        if (($show['type'] == "tv" && !is_null($season)) && !is_null($episode)) {
            $id = explode('-', $show['href']);
            $id = end($id);
            $selected_season = self::getTvSeasons($id, $season)->first();
            if (is_null($selected_season)) return null;
            $ep = self::getTvEpisodes($selected_season['id'], $episode)->first();
            if (is_null($ep)) return null;
            $servers = self::getTvEpisodeServers($ep['id']);
            if (is_null($servers)) return null;
            return collect($servers)->map(function ($server) {
                return self::getServerDirectLink($server);
            })->toArray();
        }

        return null;
    }

    public static function getMovieServers($movie_id)
    {
        $crawler = new HttpBrowser(new_http_client());
        $content = $crawler
            ->request('GET', self::DOMAIN . "/ajax/movie/episode/servers/" . $movie_id)
            ->filter('.sv-item')
            ->each(function ($server) {
                return $server->attr('data-id');
            });
        return $content;
    }

    public static function getTvSeasons($tv_id, $season_number = null)
    {
        $crawler = new HttpBrowser(new_http_client());
        $content = $crawler
            ->request('GET', self::DOMAIN . "/ajax/movie/seasons/" . $tv_id)
            ->filter('.ss-item')
            ->each(function ($season) {
                $id =  $season->attr('data-id');
                $title = $season->text();
                return [
                    'id' => $id,
                    'title' => $title,
                    'season_number' =>  (int) filter_var($title, FILTER_SANITIZE_NUMBER_INT)
                ];
            });
        $data =  collect($content)
            ->when(!is_null($season_number), function ($seasons) use ($season_number) {
                return $seasons->where('season_number', $season_number);
            });
        return $data;
    }

    public static function getTvEpisodes($season_id, $episode_number = null)
    {
        $crawler = new HttpBrowser(new_http_client());
        $content = $crawler
            ->request('GET', self::DOMAIN . "/ajax/movie/season/episodes/" . $season_id)
            ->filter('.ep-item')
            ->each(function ($ep) {
                $title = $ep->filter('strong')->text();
                $id = $ep->attr('data-id');
                return [
                    'id' => $id,
                    'title' => $title,
                    'episode_number' =>  (int) filter_var($title, FILTER_SANITIZE_NUMBER_INT)
                ];
            });
        $data =  collect($content)
            ->when(!is_null($episode_number), function ($eps) use ($episode_number) {
                return $eps->where('episode_number', $episode_number);
            });
        return $data;
    }

    public static function getTvEpisodeServers($episode_id)
    {
        $crawler = new HttpBrowser(new_http_client());
        $content = $crawler
            ->request('GET', self::DOMAIN . "/ajax/movie/episode/servers/" . $episode_id)
            ->filter('.sv-item')
            ->each(function ($server) {
                return $server->attr('data-id');
            });
        return $content;
    }


    public static function getServerDirectLink($server_id)
    {
        $content = Http::get(self::DOMAIN . "/ajax/movie/episode/server/sources/" . $server_id)->json()['data']['link'];
        return $content;
    }
}
