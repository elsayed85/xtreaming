<?php

namespace App\Collectors\Scrapers\Direct;

use Symfony\Component\BrowserKit\HttpBrowser;

class Svetacdn
{
    protected const DOMAIN = 'https://5100.svetacdn.in/IAF0wWTdNYZm';
    public const PROVIDER = "svetacdn";

    public static function searchUrl($imdb_id)
    {
        return self::DOMAIN . '?imdb_id=' . $imdb_id;
    }

    public static function search($data)
    {
        [$type, $imdb_id] = [$data['type'], $data['imdb_id']];
        if ($type != "movie") return null;
        $client = new_http_client();
        $crawler = new HttpBrowser($client);
        $content = $crawler->request('GET', self::searchUrl($imdb_id));

        try {
            $files = $content->filter('#files')->attr('value');
            $translation_id = $content->filter('#translation_id')->attr('value');
        } catch (\Throwable $th) {
            return null;
        }


        $files  = json_decode($files, true);
        $data = explode(',',  $files[$translation_id]);

        if (count($data) == 0) {
            return null;
        }

        $urls = [];
        foreach ($data as $value) {
            $value = trim($value);
            if ($value == '') continue;
            $re = '/\[([0-9]+p*)\]/i';
            preg_match($re, $value, $matches, PREG_OFFSET_CAPTURE, 0);
            $q = $matches[1][0];
            $q = str_replace('p', '', $q);
            $value = trim(preg_replace($re, '', $value));
            $parseTrimLink = explode(' or ', $value)[0];

            if ($parseTrimLink[0] == '/') {
                $parseTrimLink = 'https:' . $parseTrimLink;
            }

            $ext = pathinfo(strtok($parseTrimLink, '?'), PATHINFO_EXTENSION);
            $urls[] = [
                'label' => $q,
                'ext' => $ext,
                'url' => $parseTrimLink,
            ];
        }

        if (count($urls) == 0)
            return null;

        return [
            'urls' => $urls,
            "tracks" => [],
            "provider" => self::PROVIDER
        ];
    }
}
