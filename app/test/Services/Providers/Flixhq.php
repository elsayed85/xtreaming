<?php

namespace App\Services\Providers;

use App\Services\Helpers\JaroWinkler;
use Illuminate\Support\Facades\Http;
use Symfony\Component\BrowserKit\HttpBrowser;

class Flixhq
{
    public const PROVIDER = "squeezebox";

    public static function searchUrl($text)
    {
        return "https://api.consumet.org/movies/flixhq/" . str_replace(' ', '+', $text);
    }

    public static function search($text, $type = "movie", $year = null, $season = null, $episode = null)
    {
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
                'similraty' => (new JaroWinkler())->compare($el['title'], $text)
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
        $sources = collect($data['sources'])->filter(function ($source) {
            return strpos($source['url'], 'playlist.m3u8') !== false;
        })->first();

        if ($sources) {
            return [
                'playlist' => $sources['url'],
                'tracks' => $tracks
            ];
        } else {
            return [
                'playlist' => $data['sources'],
                'tracks' => $tracks
            ];
        }
    }
}
