<?php

namespace App\Collectors\Extractors;

use Illuminate\Support\Facades\Http;
use Symfony\Component\BrowserKit\HttpBrowser;


class Membed
{
    public const DOMAIN = 'https://membed.net';

    public static function getVideo($url)
    {
        $crawler = new HttpBrowser();
        $hash = $crawler->request('GET', $url)->filter('script[data-name="crypto"]')->attr("data-value");

        if (is_string($hash)) {
            $secretKey = "25742532592" . "1384967446658" . "79883281";
            $iv = "922567" . "90839" . "61858";
            $decrypted = openssl_decrypt($hash, 'aes-256-cbc', $secretKey, 0, $iv);
            dd($decrypted);
            $links = collect($decrypted)->pluck('file')->toArray();
        } else {
            $links = collect($hash)->pluck('file')->toArray();
        }
        return [
            'playlist' => $links,
        ];
    }
}
