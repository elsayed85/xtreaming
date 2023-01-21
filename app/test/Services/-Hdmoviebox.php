<?php

namespace App\Services;

use App\Services\Helpers\Request;
use App\Collectors\Helpers\JaroWinkler;
use Illuminate\Support\Facades\Http;
use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpClient\HttpClient;


class Hdmoviebox
{
    protected const DOMAIN = 'https://hdmoviebox.net';
    public const PROVIDER = "BHDMobiesBox";

    public static function searchUrl($type, $text, $season = null, $episode = null)
    {
        if ($type == "movie")
            return self::DOMAIN . "/watch/" . str_replace(" ", "-", $text);
        else
            return self::DOMAIN . "/watch/" . str_replace(" ", "-", $text) . "/season-" . $season . "episode-" . $episode;
    }

    public static function search($data)
    {
        $client = new_http_client();
        $crawler = new HttpBrowser($client);
        $content = $crawler->request('GET', self::searchUrl($type, $text, $season, $episode));
        try {
            $id = $content->filter('div.player div#not-loaded')->attr('data-whatwehave');
            $url = self::DOMAIN . "/ajax/service";
            $data = Http::asForm()->withHeaders([
                'content-type' => 'application/x-www-form-urlencoded; charset=UTF-8',
                'x-requested-with' => 'XMLHttpRequest',
                'user-agent' => getRandomHost()
            ])->post($url, [
                'e_id' => $id,
                'v_lang' => 'en',
                'type' => 'get_whatwehave'
            ])->json();

            $api_iframe = $data['api_iframe'];
            $crawler = new HttpBrowser(new_http_client([
                'Referer' => self::DOMAIN . "/",
            ]));
            $content = $crawler->request('GET', $api_iframe);
            $src = $content->filter('iframe')->attr('src');
            $content = $crawler->request('GET', $src);
            dd($content->html());
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
