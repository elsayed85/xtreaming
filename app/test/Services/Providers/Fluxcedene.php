<?php

namespace App\Services\Providers;

use App\Services\Helpers\Request;
use App\Services\Helpers\JaroWinkler;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpClient\HttpClient;

class Fluxcedene
{
    protected const API = 'https://fluxcedene.net/api/gql';

    public static function searchQuery($type, $text)
    {
        if ($type == "tv")
            return [
                "operationName" => "searchAll",
                "variables" => [
                    "input" => $text
                ],
                "query" => 'query searchAll($input: String!) { searchSerie(input: $input, limit: 10) {  slug name  __typename }}'
            ];
        else
            return [
                "operationName" => "searchAll",
                "variables" => [
                    "input" => $text
                ],
                "query" => 'query searchAll($input: String!) { searchFilm(input: $input, limit: 10) { slug name  release_date  __typename }}'
            ];
    }

    public static function deatils($type, $slug)
    {
        if ($type == "tv")
            return [
                "operationName" => "detailSerie",
                "variables" => [
                    "slug" => $slug
                ],
                "query" => 'query detailSerie($slug: String!) {  detailSerie(filter: { slug: $slug }) {  _id  name  name_es number_of_seasons  slug   poster_path   }}'
            ];
        else
            return [
                "operationName" => "detailFilm",
                "variables" => [
                    "slug" => $slug
                ],
                "query" => 'query detailFilm($slug: String!) { detailFilm(filter: { slug: $slug }) {   name   name     name_es   poster_path   links_online { link }   __typename }}'
            ];
    }

    public static function listEposides($tv_id, $season)
    {
        return [
            "operationName" => "listEpisodesPagination",
            "variables" => [
                "serie_id" => $tv_id,
                "season_number" => $season,
                "page" => 1
            ],
            "query" => 'query listEpisodesPagination($page: Int!, $serie_id: MongoID!, $season_number: Float!) { paginationEpisode(   page: $page   perPage: 50   sort: NUMBER_ASC   filter: {type_serie: "serie", serie_id: $serie_id, season_number: $season_number} ) {   count   items { name     episode_number     season_number links_online }   pageInfo {     hasNextPage     __typename   }   __typename }}'
        ];
    }

    public static function headers($token)
    {
        return [
            "authority" => "fluxcedene.net",
            "accept" => "*/*",
            "accept-language" => "en-US,en;q=0.9,ar;q=0.8",
            "authorization" => "Bear",
            "cache-control" => "no-cache",
            "content-type" => "application/json",
            "dnt" => "1",
            "origin" => "https://peliculasflix.co",
            "platform" => "peliculasgo",
            "pragma" => "no-cache",
            "referer" => "https://peliculasflix.co/",
            "sec-ch-ua" => "\" Not A;Brand\";v=\"99\", \"Chromium\";v=\"102\", \"Google Chrome\";v=\"102\"",
            "sec-ch-ua-mobile" => "?0",
            "sec-ch-ua-platform" => "\"macOS\"",
            "sec-fetch-dest" => "empty",
            "sec-fetch-mode" => "cors",
            "sec-fetch-site" => "cross-site",
            "x-access-platform" => $token,
            "user-agent" => "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36",
            "x-access-jwt-token" => "",
            "x-requested-with" => ""
        ];
    }

    private static function getToken()
    {
        $base = randomString(10) . "_" . randomString(12) . "_" . randomString(5);
        $date = base64_encode(strval(round(time()) + 43200)) . "==";
        return $base . $date;
    }

    public static function search($text, $type = "movie", $year = null, $season = null, $episode = null)
    {
        $type = "movie";
        $token = self::getToken();
        $request = Http::withHeaders(self::headers($token))->post(self::API, self::searchQuery($type, $text));
        $json = $request->json();
        if ($request->successful() && isset($json['data'])) {
            if ($type == "movie") {
                $show = collect($json['data']['searchFilm'])->map(function ($el) use ($text) {
                    return [
                        'title' => $el['name'],
                        'year' => Carbon::parse($el['release_date'])->year,
                        'slug' => $el['slug'],
                        'similraty' =>JaroWinkler::compare($el['name'], $text)
                    ];
                })
                    ->sortByDesc('similraty')
                    ->where('year', $year)
                    ->first();

                if (!$show)
                    return null;

                $details = Http::withHeaders(self::headers($token))->post(self::API, self::deatils($type, $show['slug']))->json();
                return collect($details['data']['detailFilm']['links_online'])->flatten()->toArray();
            } else {
                $show = collect($json['data']['searchSerie'])->map(function ($el) use ($text) {
                    return [
                        'title' => $el['name'],
                        'slug' => $el['slug'],
                        'similraty' =>JaroWinkler::compare($el['name'], $text)
                    ];
                })
                    ->sortByDesc('similraty')
                    ->first();
                if (!$show)
                    return null;
                $details = Http::withHeaders(self::headers($token))->post(self::API, self::deatils($type, $show['slug']))->json();
                $tv = $details['data']['detailSerie'];
                $data = Http::withHeaders(self::headers($token))
                    ->post(self::API, self::listEposides($tv['_id'], $season))
                    ->json();
                $episodes = $data['data']['paginationEpisode']['items'];
                $episode = collect($episodes)->where('episode_number', $episode)->first();
                return collect($episode['links_online'])->pluck('link')->toArray();
            }
        }
    }
}
