<?php

namespace App\Collectors\Scrapers\Direct;

use App\Collectors\Helpers\JaroWinkler;
use Illuminate\Support\Facades\Http;
use Symfony\Component\BrowserKit\HttpBrowser;

// headers = {
//     'Host': 'theflixvd.b-cdn.net',
//     'user-agent': 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36',
//    'referer': LINK_DETAIL,
// };

class TheFlix
{
    protected const DOMAIN = 'https://theflix.to';
    public const PROVIDER = "theflix";

    public static function searchUrl($type, $text)
    {
        if ($type == "tv")
            return self::DOMAIN . "/tv-shows/trending?search=" . str_replace(' ', '+', $text);
        else
            return self::DOMAIN . "/movies/trending?search=" . str_replace(' ', '+', $text);
    }

    public static function search($data)
    {
        [$type, $text, $year, $season, $episode] = [$data['type'], $data['text'], $data['year'], $data['season'], $data['episode']];
        try {
            $client = new_http_client();
            $crawler = new HttpBrowser($client);
            $content = $crawler->request('GET', self::searchUrl($type, $text));
            $json = $content->filter('script#__NEXT_DATA__')->text();
            dd($json);
            // props.pageProps.mainList.docs
            $results = json_decode($json, true)['props']['pageProps']['mainList']['docs'];
            $data = collect($results)->map(function ($el) use ($type, $text, $season, $episode) {
                $item_title = $el['name'];
                $item_year = explode('-', $el['releaseDate'])[0];
                $item_id = $el['id'];
                $item_type = array_key_exists('lastReleasedEpisode', $el) ? 'tv' : 'movie';

                if ($item_type == 'movie') {
                    $item_id = $el['videos'][0] ?? '';
                }

                if ($item_type == "movie") {
                    $item_href = "/movie/" . $item_id . "-" . str_replace(' ', '-', strtolower($item_title));
                } else {
                    $item_href = "/tv-show/" . $item_id . "-" . str_replace(' ', '-', strtolower($item_title)) . "/season-" . $season . "/episode-" . $episode;
                }

                return [
                    'id' => $item_id,
                    'type' => $item_type,
                    'title' => $item_title,
                    'href' => self::DOMAIN . $item_href,
                    'year' => $item_year,
                    'similraty' => JaroWinkler::compare($item_title, $text)
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

            $content = $crawler->request('GET', $show['href'])->filter('script#__NEXT_DATA__')->text();
            $item_type = $show['type'];

            if ($item_type == "movie") {
                $video_id = $show['id'];
                $urlDirectData = self::DOMAIN . ":5679/movies/videos/" . $video_id . "/request-access?contentUsageType=Viewing";
            } else {
                $video_id = json_decode($content, true)['props']['pageProps']['selectedTvEpisode']['videos'][0];
                $urlDirectData = self::DOMAIN . ":5679/tv/videos/" . $video_id . "/request-access?contentUsageType=Viewing";
            }

            $response = Http::withHeaders([
                'Cookie' => "theflix.ipiid=6320b59054023c11feb17fa7;",
            ])->get($urlDirectData)->json();

            if (!isset($response['url'])) {
                return null;
            }

            $url =  $response['url'];
            $re = '/.([0-9]{4})p./';
            preg_match($re, $url, $matches, PREG_OFFSET_CAPTURE, 0);
            return [
                'url' => $url,
                'label' => $matches[1][0],
            ];
        } catch (\Exception $e) {
            return null;
        }
    }
}
