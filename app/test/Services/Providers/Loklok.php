<?php

namespace App\Services\Providers;

use App\Services\Helpers\JaroWinkler;
use Illuminate\Support\Facades\Http;
use Symfony\Component\BrowserKit\HttpBrowser;

class Loklok
{
    public const URL = "https://loklok.com";
    public const API = "https://ga-mobile-api.loklok.tv/cms/app";
    public const jikanAPI = "https://api.jikan.moe/v4";
    public const HEADERS = [
        "lang" => "en",
        "versioncode" => "11",
        "clienttype" => "ios_jike_default"
    ];

    public static function search($text, $type = "movie", $year = null, $season = null, $episode = null)
    {
        $resp = Http::withHeaders(self::HEADERS)->post(self::API . "/search/v1/searchWithKeyWord", [
            "searchKeyWord" => $text,
            "size" => "50",
            "sort" => "",
            "searchType" => "",
        ])->json();

        if ($resp['msg'] == "Success") {
            $show = collect($resp['data']['searchResults'])
                ->map(function ($el) use ($type, $text, $season, $episode) {
                    $el_type = strtolower($el['dramaType']['code']);

                    if ($type == "tv") {
                        $text = $text . " Season " . $season;
                        $category = 1;
                    } else {
                        $category = 0;
                    }

                    return [
                        'title' => $el['name'],
                        'year' => $el['releaseTime'],
                        'id' => $el['id'],
                        'type' => $el_type,
                        'category' => $category,
                        'similraty' => (new JaroWinkler())->compare($el['name'], $text)
                    ];
                })
                ->sortByDesc('similraty')
                ->when($type == "movie" && !is_null($year), function ($collection) use ($year) {
                    return $collection->where('type', 'movie')->where('year', $year);
                })
                ->when($type == "tv", function ($collection) use ($year) {
                    return $collection->where('type', 'tv');
                })
                ->first();

            if (!$show)
                return null;

            $url = self::API . "/movieDrama/get?id=" . $show['id'] . "&category=" . $show['category'];
            $resp2 = Http::withHeaders(self::HEADERS)->get($url)->json();

            if ($resp2['msg'] == "Success") {
                $data = $resp2['data'];
                $el_type = null;
                $category = $data['category'];
                if ($category == 0) {
                    $el_type = "movie";
                } elseif ($category != 0 & !str_contains($category, "Anime")) {
                    $el_type = "tv";
                }

                $el_episode = collect($data['episodeVo'])
                    ->filter(function ($el) use ($el_type, $type, $episode) {
                        if ($el_type == "tv" && $type == "tv") {
                            return $el['seriesNo'] == $episode;
                        }
                        return $el;
                    })->map(function ($el) use ($category, $show) {
                        $url = self::API . "/media/bathGetplayInfo";
                        $definition = collect($el['definitionList'])
                            ->map(function ($def) use ($el, $category, $show, $url) {
                                $body = [[
                                    'category' => $category,
                                    'contentId' => $show['id'],
                                    'episodeId' => $el['id'],
                                    'definition' => $def['code']
                                ]];
                                $resp3 = Http::withHeaders(self::HEADERS)
                                    ->withBody(json_encode($body), "application/json")
                                    ->post($url)
                                    ->json();
                                if ($resp3['msg'] == "Success" && isset($resp3['data'][0])) {
                                    return [
                                        'url' => $resp3['data'][0]['mediaUrl'],
                                        'quality' => (int)str_replace("p", "", $def['description'])
                                    ];
                                }
                                return null;
                            })
                            ->filter();

                        $subtitling = collect($el['subtitlingList'])->map(function ($el) {
                            return [
                                'lang' => $el['language'],
                                'url' => $el['subtitlingUrl']
                            ];
                        })->toArray();
                        return [
                            'urls' => $definition,
                            'subs' => $subtitling
                        ];
                    })->first();
                return $el_episode;
            }
        }
        return null;
    }
}
