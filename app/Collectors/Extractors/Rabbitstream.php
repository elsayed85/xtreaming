<?php

namespace App\Collectors\Extractors;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Http;
use Symfony\Component\BrowserKit\HttpBrowser;


class Rabbitstream
{
    public const DOMAIN = 'https://rabbitstream.net';
    public const REFER = 'https://fmovies.ps';

    public static function getVideo($url)
    {
        $re = '/embed\-[0-9]+\/([A-z0-9]+)/';
        preg_match($re, $url, $matches);
        $id = $matches[1];
        $url = self::DOMAIN . '/ajax/embed-4/getSources?id=' . $id;
        $content = Http::withHeaders([
            'referer' => self::REFER,
            'x-requested-with' => 'XMLHttpRequest',
            'user-agent' => getRandomHost()
        ])->get($url)->json();
        $tracks = $content['tracks'];
        $hash = $content['sources'];
        if (is_array($hash) && count($hash) > 0) {
            return [
                'playlist' => $hash[0]['file'],
                'tracks' => $tracks,
            ];
        } elseif (is_array($hash) && count($hash) == 0) {
            return null;
        }
        $secretKey = self::getSecretKey();
        $data = cryptoJsAesDecrypt($hash, $secretKey);

        if (is_null($data)) {
            return null;
        }

        $decrypted = json_decode($data, true)[0];
        $playlist = $decrypted['file'];
        return [
            'playlist' => $playlist,
            'tracks' => $tracks,
        ];
    }

    public static function getSecretKey()
    {
        $key =  Http::get('https://raw.githubusercontent.com/consumet/rapidclown/rabbitstream/key.txt')->body();
        return $key;
    }
}
