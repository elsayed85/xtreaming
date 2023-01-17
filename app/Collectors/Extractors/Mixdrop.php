<?php

namespace App\Collectors\Extractors;

use App\Collectors\Helpers\JavaScriptUnpacker;
use Illuminate\Support\Facades\Http;
use Symfony\Component\BrowserKit\HttpBrowser;


class Mixdrop
{
    public const DOMAIN = 'https://mixdrop.co';

    public static function getVideo($url)
    {
        try {
            $crawler = new HttpBrowser(new_http_client([]));
            $eval = $crawler->request('GET', $url)->filter(".title")->eq(0)->previousAll('script')->eq(0)->html();
            $eval = explode(PHP_EOL, trim($eval))[2];
            $eval = (new JavaScriptUnpacker())->Unpack($eval);
            $re = '/wurl.*?=.*?"(.*?)"/';
            preg_match($re, $eval, $matches, PREG_OFFSET_CAPTURE, 0);
            $url = $matches[1][0];
            if ($url[0] == "/") {
                $url = "https:" . $url;
            }
            return [
                'playlist' => $url,
            ];
        } catch (\Throwable $th) {
            return null;
        }
    }
}
