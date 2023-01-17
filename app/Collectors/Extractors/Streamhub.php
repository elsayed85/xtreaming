<?php

namespace App\Collectors\Extractors;

use App\Collectors\Helpers\JavaScriptUnpacker;
use Illuminate\Support\Facades\Http;
use Symfony\Component\BrowserKit\HttpBrowser;


class Streamhub
{
    public const DOMAIN = 'https://sltube.org';
    public const REFER = 'https://fmovies.ps';

    public static function getVideo($url)
    {
        try {
            $crawler = new HttpBrowser(new_http_client([
                'content-type' =>  'application/json;charset=UTF-8',
            ]));
            $eval = $crawler->request('GET', $url)->filter("style")->eq(0)->nextAll('script')->eq(0)->html();
            $eval = (new JavaScriptUnpacker())->Unpack($eval);
            $re = '/src *\: *\"([^\"]+)/i';
            preg_match($re, $eval, $matches, PREG_OFFSET_CAPTURE, 0);
            return [
                'playlist' => $matches[1][0],
            ];
        } catch (\Throwable $th) {
            return null;
        }
    }
}
