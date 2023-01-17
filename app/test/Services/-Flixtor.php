<?php

namespace App\Services\Providers;

use App\Services\Cipher;
use App\Services\Helpers\JaroWinkler;
use Symfony\Component\BrowserKit\HttpBrowser;

class Flixtor
{
    protected const DOMAIN = 'https://flixtor.id';
    protected  $nineAnimeKey = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";
    protected const  cipherKey = "DZmuZuXqa9O0z3b7";
    public static function searchUrl($text, $vrf)
    {
        return self::DOMAIN . "ajax/film/search?vrf=$vrf&keyword=" . str_replace(' ', '+', $text);
    }

    public static function generateVrf($text)
    {
        $data = (new Cipher())->setKey(self::cipherKey)->encrypt(urlencode($text));
    }

    public static function search($text, $type = "movie", $year = null, $season = null, $episode = null)
    {
        $vrf = self::generateVrf($text);
        dd($vrf);
        $client = new_http_client([
            'referer' => self::DOMAIN,
        ]);

        $crawler = new HttpBrowser($client);
    }
}
