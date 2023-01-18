<?php

namespace App\Collectors\Scrapers\Direct;

use App\Collectors\Helpers\JaroWinkler;
use Illuminate\Support\Facades\Http;

class Flixhq
{
    public const PROVIDER = "flixhq";

    public static function searchUrl($text)
    {
        return "https://api.consumet.org/movies/flixhq/" . str_replace(' ', '+', $text);
    }

    public static function search($data)
    {
        [$type, $text, $year, $season, $episode] = [$data['type'], $data['text'], $data['year'], $data['season'], $data['episode']];
        $data = Http::withHeaders([
            'user-agent' => getRandomHost()
        ])->get(self::searchUrl($text))->json();

        if (!isset($data['results'])) {
            return null;
        }

        $new_data = collect($data['results'])->map(function ($el) use ($text) {
            $releaseDate = null;
            $type = null;

            if ($el['type'] == "Movie" && isset($el['releaseDate'])) {
                $releaseDate = $el['releaseDate'];
                $type = "movie";
            }

            if ($el['type'] == "TV Series") {
                $type = "tv";
            }

            return [
                'id' => $el['id'],
                'title' => $el['title'],
                'year' => (int) $releaseDate,
                'type' => $type,
                'similraty' => JaroWinkler::compare($el['title'], $text)
            ];
        });


        $show = collect($new_data)
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

        $info_id = self::getID($show['id'], $type, $season, $episode);

        if (!$info_id) {
            return null;
        }

        $sources = self::getSources($show['id'], $info_id);
        return $sources;
    }

    public static function getID($media_id, $type, $season = null, $episode = null)
    {
        $data = Http::withHeaders([
            'user-agent' => getRandomHost()
        ])->get("https://api.consumet.org/movies/flixhq/info?id=" . $media_id)
            ->json();

        if (!isset($data['episodes'])) {
            return null;
        }

        $data = $data['episodes'];
        if ($type == "movie") {
            return $data[0]['id'];
        }

        if ($type == "tv") {
            $episode_data = collect($data)
                ->where('season', $season)
                ->where('number', $episode)
                ->first();
            if ($episode_data) {
                return $episode_data['id'];
            }
            return null;
        }
        return null;
    }

    public static function getSources($id, $info_id)
    {
        $data = Http::withHeaders([
            'user-agent' => getRandomHost()
        ])->get("https://api.consumet.org/movies/flixhq/watch?episodeId=" . $info_id . "&mediaId=" . $id)
            ->json();


        if (!isset($data['sources']) || !isset($data['subtitles'])) {
            return null;
        }

        $tracks = $data['subtitles'];
        $tracks = collect($tracks)->filter(function ($track) {
            return in_array($track['lang'], ["English", "english", "Arabic", "العربية", "عربي", "عربى"]);
        })->toArray();
        $sources = collect($data['sources'])
            ->map(function ($source) {
                return [
                    'url' => $source['url'],
                    'label' => $source['quality'],
                    'ext' => pathinfo(strtok($source['url'], '?'), PATHINFO_EXTENSION)
                ];
            });

        $playlist = $sources->where("label", "auto")->first();
        if (!is_null($playlist)) {
            $url = $playlist['url'];
            $ext = pathinfo(strtok($url, '?'), PATHINFO_EXTENSION);
            return [
                'urls' => [[
                    "url" => $url,
                    "label" => $playlist['label'],
                    "ext" => $ext,
                ]],
                'tracks' => $tracks,
                "provider" => self::PROVIDER
            ];
        } else {
            return [
                'urls' => $sources->toArray(),
                'tracks' => $tracks,
                "provider" => self::PROVIDER
            ];
        }
    }
}
