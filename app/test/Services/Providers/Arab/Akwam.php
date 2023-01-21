<?php

namespace App\test\Services\Providers\Arab;

use App\Collectors\Helpers\JaroWinkler;
use Symfony\Component\BrowserKit\HttpBrowser;

class Akwam
{
    protected const DOMAIN = 'https://akwam.cam';
    public const PROVIDER = "AKWAM";

    public static function searchUrl($text)
    {
        return self::DOMAIN . "/search?q=" . str_replace(' ', '+', $text);
    }

    public static function search($data)
    {
        [$type, $text, $year, $season, $episode] = [
            $data['type'] ?? "movie",
            $data['text'] ?? null,
            $data['year'] ?? null,
            $data['season'] ?? null,
            $data['episode'] ?? null
        ];

        $client = new_http_client([
            'referer' => self::DOMAIN,
        ]);

        $crawler = new HttpBrowser($client);
        $content = $crawler->request('GET', self::searchUrl($text));
        $data = $content->filter('div.entry-box-1')->each(function ($item) use ($text, $season) {
            $item_href = $item->filter('div.entry-image a.box')->attr('href');
            $item_title = $item->filter('.entry-title')->text('');
            $item_year = $item->filter('span.badge-secondary.ml-1')->text('');
            $item_type = explode('/', parse_url($item_href)['path'])[1];

            $seasonSimliarty = 0;
            if ($item_type == "series") {
                $item_type = "tv";
                $seasonSimliarty = (new JaroWinkler())
                    ->compare($item_title, $text . " " . seasonNumberAsTextInArabic($season));
            }

            if (in_array($item_type, ['tv', 'movie'])) {
                return [
                    'type' => $item_type,
                    'title' => $item_title,
                    'href' => $item_href,
                    'year' => $item_year,
                    'similraty' => JaroWinkler::compare($item_title, $text),
                    'seasonSimliarty' => $seasonSimliarty,
                ];
            }
            return null;
        });

        $show = collect($data)
            ->filter()
            ->sortByDesc('similraty')
            ->when($type == "movie" && !is_null($year), function ($collection) use ($year) {
                return $collection->where('type', 'movie')->where('year', $year);
            })
            ->when($type == "tv", function ($collection) use ($year) {
                return $collection->where('type', 'tv')
                    ->sortByDesc('seasonSimliarty');
            })
            ->first();

        if (!$show) {
            return null;
        }

        if ($show['type'] == 'movie') {
            $sources = self::getSources($show['href']);
            return $sources;
        } elseif ($show['type'] == 'tv') {
            $episode = self::getTvEpisodes($show['href'], $text, $season, $episode);
            if ($episode) {
                return self::getSources($episode['url']);
            }
            return null;
        }

        return null;
    }

    public static function getSources($url)
    {
        $client = new_http_client([
            'referer' => self::DOMAIN
        ]);

        $crawler = new HttpBrowser($client);
        $content = $crawler->request('GET', $url);
        $qualities = $content
            ->filter('div.page-film div.container .header-tabs-container ul li')
            ->each(function ($quality) {
                return [
                    'quality' => $quality->filter('a')->text(),
                    'id' => str_replace('#', '', $quality->filter('a')->attr('href')),
                ];
            });


        $url_pramters = explode("/", $url);
        $show_id = $url_pramters[count($url_pramters) - 2];
        $show_title = $url_pramters[count($url_pramters) - 1];
        $main = $content->filter('div.page-film div.container .header-tabs-container')->nextAll();
        $first_watch_url = collect($qualities)->map(function ($quality) use ($main, $show_id, $show_title) {
            $link = $main->filter('#' . $quality['id'] . ' a.link-show')->attr('href');
            $pramters = explode("/", $link);
            $id = end($pramters);
            $url = "https://akwam.to/watch/" . $id . "/" . $show_id . "/" . $show_title;
            return [
                'quality' => $quality['quality'],
                'url' => $url
            ];
        })->first();

        $content = $crawler->request('GET', $first_watch_url['url']);
        $video_sources = $content->filter('.page-movie video source')->each(function ($source) {
            return [
                'url' => $source->attr('src'),
                'label' => (int) $source->attr('size'),
            ];
        });

        return $video_sources;
    }

    public static function getTvEpisodes($season_url,  $text, $season, $episode)
    {
        $client = new_http_client([
            'referer' => self::DOMAIN
        ]);

        $crawler = new HttpBrowser($client);
        $content = $crawler->request('GET', $season_url);
        $episodes = $content->filter('div#series-episodes')->eq(0)
            ->filter('.widget-body h2 a')->each(function ($ep) use ($text, $season, $episode) {
                $title = $ep->text();
                $text = ucwords($text);
                $full_title = "حلقة $episode : مسلسل $text " . seasonNumberAsTextInArabic($season);
                $diff = str_replace($full_title, "", $title);
                $diff = trim($diff);
                $_title = str_replace($diff, "", $title);
                return [
                    'title' => $title,
                    'url' => $ep->attr('href'),
                    'full_title' => $full_title,
                    "episode_similraty" => (new JaroWinkler())
                        ->compare($_title, $full_title)
                ];
            });

        return collect($episodes)->sortByDesc('episode_similraty')->first();
    }
}
