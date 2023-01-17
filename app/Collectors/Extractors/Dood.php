<?php

namespace App\Collectors\Extractors;

use Symfony\Component\BrowserKit\HttpBrowser;


class Dood
{
    public const DOMAIN = 'https://dood.ws';

    public static function getVideo($url)
    {

        $base_url = parse_url($url);
        $domain= $base_url['scheme'] . "://" . $base_url['host'];

        $crawler = new HttpBrowser(new_http_client([
            'content-type' =>  'application/json;charset=UTF-8',
            'referer' => $domain,
        ]));


        try {
            $content = $crawler->request('GET', $url)->filter('#os_player')->html();
        } catch (\Throwable $th) {
            return null;
        }

        $re = '/(\/pass_md5\/[^\']*)/';
        preg_match($re, $content, $matches);
        if (!isset($matches[1])) {
            return null;
        }

        $url = $domain . $matches[1];
        $crawler = new HttpBrowser(new_http_client([
            'referer' => $domain,
        ]));

        $embd_url = $crawler->request('GET', $url)->filter('body p')->html();
        $last_token = explode('/', $url);
        $last_token = $last_token[count($last_token) - 1];
        $new_url = $embd_url . "zUEJeL3mUN?token=" . $last_token;
        return [
            'playlist' => $new_url,
        ];
    }
}
