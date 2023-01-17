<?php

namespace App\Services\Providers;

use App\Services\Helpers\Request;
use App\Services\Helpers\JaroWinkler;
use Illuminate\Support\Facades\Http;
use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpClient\HttpClient;


class MoviesbayAPI
{
    protected const DOMAIN = 'https://moviesbay.live/';
    public const SHEET = "https://sheets.googleapis.com/v4/spreadsheets/12RD3HX3NkSiCyqQJxemyS8W0R9B7J4VBl35uLBa5W0E/values/main?alt=json&key=AIzaSyA_ZY8GYxyUZYlcKGkDIHuku_gmE4z-AHQ";

    public static function search($text, $type = "movie", $year = null, $season = null, $episode = null)
    {
        if ($type != "movie") return null;

        $content = Http::withHeaders([
            'referer' => self::DOMAIN
        ])->get(self::SHEET)->json();

        $title = str_replace(":", "", str_replace(" ", "-", strtolower($text)));
        $search_title =  $title . "-" . $year;
        $show = collect($content['values'])->filter(function ($el) use ($search_title, $type, $year, $season, $episode) {
            $title = $el[0];
            if ($title == $search_title) {
                return $el;
            }
            return null;
        })->filter()
            ->first();

        if (!$show) return null;

        $googleDriveUrls = collect($show)->map(function ($el, $key) use ($show) {
            $check = (strpos($el, "drive.google.com") !== false) && filter_var($el, FILTER_VALIDATE_URL);
            if ($check == true) {
                return [
                    'url' => $el,
                    'size' => $show[$key - 1],
                    'label' => $show[$key - 2],
                    'qualityName' => $show[$key - 3],
                ];
            }
        })
            ->filter()
            ->values()
            ->first();

        return $googleDriveUrls;
    }
}
