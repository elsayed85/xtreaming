<?php

namespace App\Collectors\Helpers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use stdClass;

class OpensubtitlesService
{
    public static $title;
    public static $type;
    public static $lang;
    public static $imdb_id;
    public static $season_number;
    public static $episode_number;
    public static $id;

    public static function setData($id, $title, $type, $lang, $imdb_id, $season_number = null, $episode_number = null)
    {
        self::$title = $title;
        self::$type = $type;
        self::$lang = $lang;
        self::$imdb_id = $imdb_id;
        self::$id = $id;
        self::$season_number = $season_number;
        self::$episode_number = $episode_number;
        return new self;
    }

    public static function getResult()
    {
        if (self::$type == 'movie') {
            $url = "https://rest.opensubtitles.org/search/imdbid-" . self::$imdb_id . "/sublanguageid-" . self::$lang;
            $path  = self::$id;
        } else {
            $url = "https://rest.opensubtitles.org/search/episode-" . self::$episode_number . "/imdbid-" . self::$imdb_id . "/season-" . self::$season_number . "/sublanguageid-" . self::$lang;
            $path  = self::$id . '/' . self::$season_number . '/' . self::$episode_number;
        }

        $results = Http::withHeaders([
            'User-Agent' => 'XBMC_Subtitles_v1'
        ])->get($url)->json();


        return collect($results)->filter(function ($el) {
            return $el['SubFormat'] == 'srt';
        })->map(function ($el, $key) use ($path) {
            $link = $el['SubDownloadLink'];
            $file = gzdecode(file_get_contents($link));
            $srt_file_content = self::srt2vtt($file);
            if (!$srt_file_content) return false;
            $k = $key + 1;
            $subFileName = "Subtitles/$path/$k-" . self::$lang . ".vtt";
            $db_name = "$k-" . self::$lang;
            Storage::disk('local')->put($subFileName, $srt_file_content);
            return $db_name;
        })->filter();
    }

    public static function srt2vtt($srt)
    {
        try {
            $charset = mb_detect_encoding($srt, "ISO-8859-8, UTF-8");
            $srt = iconv($charset, "UTF-8", $srt);
        } catch (\Exception $e) {
            return false;
        }

        $lines = explode(PHP_EOL, $srt);

        $vtt = ["WEBVTT\n"];

        foreach ($lines as $line) {

            if (strpos($line, " --> ") !== false) {
                $line = str_replace(",", ".", $line);
            }
            $vtt[] = $line;
        }

        return implode("\n", $vtt);
    }
}
