<?php

namespace App\Collectors\Extractors;

use Illuminate\Support\Facades\Http;
use Symfony\Component\BrowserKit\HttpBrowser;


class Okru
{
    public const DOMAIN = 'https://okru.link';

    public static function getVideo($url)
    {
        $url = parse_url($url);
        parse_str($url['query'], $query);
        $id = $query['t'];

        $url = self::DOMAIN . '/details.php?v=' . $id;
        $content = Http::withHeaders([
            'x-requested-with' => 'XMLHttpRequest',
            'user-agent' => getRandomHost()
        ])->get($url)->json();


        if (!isset($content['status']) || $content['status'] != 200) {
            return null;
        }

        return [
            'playlist' => $content['file'],
        ];
    }
}
