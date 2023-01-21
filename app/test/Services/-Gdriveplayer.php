<?php

namespace App\Services;

use App\Services\Helpers\JavaScriptUnpacker;
use App\Collectors\Helpers\JaroWinkler;
use Illuminate\Support\Facades\Http;
use Symfony\Component\BrowserKit\HttpBrowser;

class Gdriveplayer
{
    protected const DOMAIN = 'https://cors.squeezebox.dev/?destination=';
    public const PROVIDER = "squeezebox";

    public static function searchUrl($text, $type = "movie")
    {
        if ($type == "tv")
            return self::DOMAIN . "https://api.gdriveplayer.us/v2/series/search?title=" . str_replace(' ', '+', $text);
        else
            return self::DOMAIN . "https://api.gdriveplayer.us/v1/movie/search?title=" . str_replace(' ', '+', $text);
    }

    public static function search($data)
    {
        $data = Http::withHeaders([
            'referer' => "https://movie.squeezebox.dev/",
            'user-agent' => getRandomHost()
        ])->get(self::searchUrl($text, $type))->json();
        $new_data = collect($data)->map(function ($el) use ($text) {
            $year = null;
            if (isset($el['year'])) {
                $year = (int) $el['year'];
            }
            return [
                'id' => $el['imdb'],
                'title' => $el['title'],
                'year' => $year,
                'similraty' =>JaroWinkler::compare($el['title'], $text)
            ];
        });

        $show = collect($new_data)
            ->when($type == "movie" && !is_null($year), function ($collection) use ($year) {
                return $collection->where('year', $year);
            })
            ->sortByDesc('similraty')
            ->first();


        $player_url = self::getPlayerUrl($show['id'], $type, $season, $episode);
        if (!$player_url) {
            return null;
        }

        $sources = self::getSources($player_url);
        return $sources;
    }

    public static function getPlayerUrl($media_id, $type, $season = null, $episode = null)
    {
        $url = null;
        if ($type == "movie") {
            $url = self::DOMAIN . "https://api.gdriveplayer.us/v1/imdb/$media_id";
        }

        if ($type == "tv") {
            $url = self::DOMAIN . "https://api.gdriveplayer.us/v2/series/imdb/$media_id/season$season";
        }

        $data = Http::withHeaders([
            'referer' => "https://movie.squeezebox.dev/",
            'user-agent' => getRandomHost()
        ])->get($url)->json();

        if ($type == "movie") {
            return "https://databasegdriveplayer.xyz/player.php?imdb=" . $data['imdbID'];
        }

        if ($type == "tv") {
            $episode_data = collect($data[0]['list_episode'])
                ->where('episode', $episode)
                ->first();
            if ($episode_data) {
                return $episode_data['player_url'];
            }
            return null;
        }
        return null;
    }

    public static function getSources($url)
    {
        $crawler = new HttpBrowser(new_http_client([
            'referer' => "https://movie.squeezebox.dev/",
        ]));
        $evalScript = $crawler
            ->request('GET', self::DOMAIN . $url)
            ->filter('div#first')
            ->nextAll('script')
            ->nextAll('script')
            ->nextAll('script')
            ->nextAll('script')
            ->html();
        $eval = (new JavaScriptUnpacker())->Unpack($evalScript);
        $eval = explode("var data='" , $eval)[1];
        $eval = explode("';" , $eval)[0];
        $decryptedData = cryptoJsAesDecrypt($eval, "alsfheafsjklNIWORNiolNIOWNKLNXakjsfwnBdwjbwfkjbJjkopfjweopjASoiwnrflakefneiofrt");
    }
}
