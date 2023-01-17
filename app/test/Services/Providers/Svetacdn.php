<?php

namespace App\Services\Providers;

use App\Services\Helpers\JaroWinkler;
use Illuminate\Support\Facades\Http;
use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\DomCrawler\Crawler;

class Svetacdn
{
    protected const DOMAIN = 'https://5100.svetacdn.in/IAF0wWTdNYZm';
    public const PROVIDER = "Svetacdn";

    public static function searchUrl($imdb_id)
    {
        return self::DOMAIN . '?imdb_id=' . $imdb_id;
    }

    public static function search($imdb_id, $type = "movie")
    {
        if ($type != "movie") return null;
        $client = new_http_client();
        $crawler = new HttpBrowser($client);
        $content = $crawler->request('GET', self::searchUrl($imdb_id));

        try {
            $files = $content->filter('#files')->attr('value');
        } catch (\Throwable $th) {
            return null;
        }

        $files = str_replace('"381"', "\"" . $type . "\"", $files);
        $files  = json_decode($files, true);
        $data = explode(',',  $files[$type]);

        if (count($data) == 0) {
            return null;
        }

        $urls = [];
        foreach ($data as $value) {
            $value = trim($value);
            $re = '/\[([0-9]+p*)\]/i';
            preg_match($re, $value, $matches, PREG_OFFSET_CAPTURE, 0);
            $q = $matches[1][0];
            $q = str_replace('p', '', $q);
            $value = trim(preg_replace($re, '', $value));
            $parseTrimLink = explode(' or ', $value)[0];

            if ($parseTrimLink[0] == '/') {
                $parseTrimLink = 'https:' . $parseTrimLink;
            }

            $urls[] = [
                'label' => $q,
                'url' => $parseTrimLink,
            ];
        }

        return $urls;
    }
}
