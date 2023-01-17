<?php

namespace App\Services\Providers;

use App\Services\Helpers\Request;
use App\Services\Helpers\JaroWinkler;
use Illuminate\Support\Facades\Http;
use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpClient\HttpClient;


class Cineb
{
    protected const DOMAIN = 'https://cineb.net';
    public const PROVIDER = "CINEB";

    public static function searchUrl($text)
    {
        return self::DOMAIN . "/search/" . str_replace(' ', '-', $text);
    }

    public static function search($text, $type = "movie", $year = null, $season = null, $episode = null)
    {
        $client = new_http_client();
        $crawler = new HttpBrowser($client);
        $content = $crawler->request('GET', self::searchUrl($text));
        $data = $content->filter('div.film_list-wrap .flw-item')->each(function ($el) use ($text) {
            $item_title = $el->filter('.film-poster-ahref')->attr('title');
            $item_href = $el->filter('.film-poster-ahref')->attr('href');
            $item_pramters = explode("-", $item_href);
            $item_type = explode("/", $item_href)[1];
            $item_id = end($item_pramters);
            $item_href = self::DOMAIN . $item_href;
            $item_year = $el->filter('.fdi-item')->eq(0)->text();

            return [
                'id' => $item_id,
                'title' => $item_title,
                'href' => $item_href,
                'year' => $item_year,
                'type' => $item_type,
                'similraty' =>JaroWinkler::compare($item_title, $text)
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
            $servers = self::getMovieServers($show['id']);
            return collect($servers)->map(function ($server) {
                return self::getServerDirectLink($server);
            })
                ->toArray();
        }
        if (($show['type'] == "tv" && !is_null($season)) && !is_null($episode)) {
            $selected_season = self::getTvSeasons($show['id'], $season)->first();
            if(!$selected_season) return null;
            $ep = self::getTvEpisodes($selected_season['id'], $episode)->first();
            if(!$ep) return null;
            $servers = self::getTvEpisodeServers($ep['id']);
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
            ->request('GET', self::DOMAIN . "/ajax/movie/episodes/" . $movie_id)
            ->filter('.link-item')
            ->each(function ($server) {
                return $server->attr('data-linkid');
            });
        return $content;
    }

    public static function getTvSeasons($tv_id, $season_number = null)
    {
        $crawler = new HttpBrowser(new_http_client());
        $content = $crawler
            ->request('GET', self::DOMAIN . "/ajax/v2/tv/seasons/" . $tv_id)
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
            ->request('GET', self::DOMAIN . "/ajax/v2/season/episodes/" . $season_id)
            ->filter('.eps-item')
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
            ->request('GET', self::DOMAIN . "/ajax/v2/episode/servers/" . $episode_id)
            ->filter('.link-item')
            ->each(function ($server) {
                return $server->attr('data-id');
            });
        return $content;
    }


    public static function getServerDirectLink($server_id)
    {
        $content = Http::get(self::DOMAIN . "/ajax/get_link/" . $server_id)->json()['link'];
        return $content;
    }
}
