<?php

namespace App\Collectors\Extractors;

use Illuminate\Support\Facades\Http;
use Symfony\Component\BrowserKit\HttpBrowser;


class Streamtape
{
    public const DOMAIN = 'https://streamtape.com/';

    public static function getVideo($url)
    {
        $content = Http::withHeaders([
            'referer' => self::DOMAIN,
            'user-agent' => getRandomHost()
        ])->get($url)->body();

        try {
            $re = '/\'norobotlink\'\)\.innerHTML\s?=\s?\'(.+?)\'\s?\+\s?\(\'(.+?)\'\)/i';
            preg_match_all($re, $content, $matches, PREG_OFFSET_CAPTURE, 0);
            $p2 = $matches[2][0][0];
            $_p2 = explode("?", $p2)[1];
            return [
                'playlist' => "https://streamtape.com/get_video?" . $_p2
            ];
        } catch (\Exception $e) {
            return null;
        }
    }
}
