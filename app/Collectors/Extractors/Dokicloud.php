<?php

namespace App\Collectors\Extractors;

use Illuminate\Support\Facades\Http;
use Symfony\Component\BrowserKit\HttpBrowser;


class Dokicloud
{
    public const DOMAIN = 'https://dokicloud.one';
    public const REFER = 'https://fmovies.ps';

    public static function getVideo($url)
    {
        $url = parse_url($url);
        $id = explode('/', $url['path']);
        $id = end($id);
        $url = self::DOMAIN . '/ajax/embed-4/getSources?id=' . $id;
        $content = Http::withHeaders([
            'referer' => self::REFER,
            'x-requested-with' => 'XMLHttpRequest',
            'user-agent' => getRandomHost()
        ])->get($url)->json();

        if (!isset($content['tracks']) || !isset($content['sources'])) {
            return null;
        }

        $tracks = $content['tracks'];
        $hash = $content['sources'];

        if (is_string($hash)) {
            $secretKey = self::getSecretKey();
            $decrypted = json_decode(cryptoJsAesDecrypt($hash, $secretKey), true);
            $links = collect($decrypted)->pluck('file')->toArray();
        } else {
            $links = collect($hash)->pluck('file')->toArray();
        }
        return [
            'playlist' => $links,
            'tracks' => $tracks
        ];
    }

    public static function getSecretKey()
    {
        $key =  Http::get('https://raw.githubusercontent.com/consumet/rapidclown/rabbitstream/key.txt')->body();
        return $key;
    }
}
