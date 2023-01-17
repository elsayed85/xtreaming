<?php

namespace App\Collectors\Extractors;

use Illuminate\Support\Facades\Http;
use Symfony\Component\BrowserKit\HttpBrowser;


class Voe
{
    public const DOMAIN = 'https://voe.sx';

    public static function getVideo($url)
    {
        try {
            $crawler = new HttpBrowser(new_http_client([]));
            $script = $crawler->request('GET', $url)->filter("body style")->eq(0)->previousAll('script')->eq(0)->html();
            $start = strpos($script, "const sources =");
            $str = substr($script, $start);
            $end = strpos($str, ";");
            $str = substr($str, 0, $end);
            $str = str_replace("const sources =", "", $str);
            $str = preg_replace("@\n@", "", $str);
            $str = str_replace("{", "", $str);
            $str = str_replace("}", "", $str);
            $str = trim($str);
            $str = collect(explode(",", $str))->filter(function ($el) {
                if (is_null($el) || $el == "") {
                    return null;
                }
                return $el;
            })->map(function ($el) {
                $str = trim($el);
                $parts = explode("':", $str);
                $key = trim(str_replace("'", "", $parts[0]));
                $value = trim(str_replace("'", "", $parts[1]));
                return [
                    $key => $value
                ];
            })
                ->mapWithKeys(function ($el) {
                    return $el;
                })
                ->toArray();
            if (isset($str['hls'])) {
                return [
                    "playlist" => $str['hls']
                ];
            } elseif (isset($str['mp4'])) {
                return [
                    "playlist" => $str['mp4']
                ];
            } else {
                return null;
            }
        } catch (\Throwable $th) {
            return null;
        }
    }
}
