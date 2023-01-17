<?php

namespace App\Collectors\Helpers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;


class Subtitles
{
    public $imdbID;
    public $lang;
    public $type;
    public $season;
    public $episode;

    function __construct($type  = 'movie', $lang = 'eng', $imdbID, $season = null, $episode = null)
    {
        $this->type = $type;
        $this->lang = $lang;
        $this->imdbID = substr($imdbID, 2);
        $this->season = $season;
        $this->episode = $episode;
    }

    // GET RESULT FROM TMDB API
    public function getResult()
    {
        if ($this->type == 'movie') {
            $url = "https://rest.opensubtitles.org/search/imdbid-" . $this->imdbID . "/sublanguageid-" . $this->lang;
            $path  = 'Subtitles/' . $this->imdbID . '/';
        } else {
            $url = "https://rest.opensubtitles.org/search/episode-" . $this->episode . "/imdbid-" . $this->imdbID . "/season-" . $this->season . "/sublanguageid-" . $this->lang;
            $path  = 'Subtitles/' . $this->imdbID . '/' . $this->season . '/' . $this->episode . '/';
        }

        $result = Http::withHeaders([
            'X-User-Agent' => getRandomHost()
        ])->get($url)->json();


        $result = collect($result)->filter(function ($el) {
            return $el['SubFormat'] == 'srt';
        })->map(function ($el, $key) use ($path) {
            $link = $el['SubDownloadLink'];
            $file = gzdecode(file_get_contents($link));
            $srt_file_content = $this->srt2vtt($file);

            $subFileName = $path . ($key + 1) . "-" . $this->lang . '.vtt';
            Storage::disk('public')->put($subFileName, $srt_file_content);
            return ($key + 1) . "-" . $this->lang . '.vtt';
        });

        return $result;
    }

    public function srt2vtt($srt)
    {
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
