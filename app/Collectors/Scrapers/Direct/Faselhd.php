<?php

namespace App\Collectors\Scrapers\Direct;

use App\Collectors\Helpers\JaroWinkler;
use App\Services\Helpers\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpClient\HttpClient;


class Faselhd
{
    protected const DOMAIN = 'https://www.faselhd.club';
    public const PROVIDER = 'faselhd';

    public static function search($data)
    {
        [$type, $text, $year, $season, $episode] = [
            $data['type'] ?? "movie",
            $data['text'] ?? null,
            $data['year'] ?? null,
            $data['season'] ?? null,
            $data['episode'] ?? null
        ];

        $resp = Http::withHeaders([
            "x-requested-with" => "XMLHttpRequest",
            "referer" => self::DOMAIN
        ])->asForm()->post(self::DOMAIN . "/wp-admin/admin-ajax.php", [
            "action" => "dtc_live",
            "trsearch" => $text
        ])->body();

        $crawler = new Crawler();
        $crawler->addHTMLContent($resp);
        $results = $crawler->filter(".postDiv")->each(function ($el) use ($text) {
            $href = $el->filter("a")->attr('href');
            $title = $el->filter(".postInner .h1")->text();
            $title = str_replace("مشاهدة", "", $title);
            $title = str_replace("مسلسل", "", $title);
            $title = str_replace("الحلقة", "", $title);
            $title = str_replace("الجزء", "", $title);
            $title = str_replace("الموسم", "", $title);
            $title = str_replace("فيلم", "", $title);
            $title = str_replace("مترجم", "", $title);
            $re = '~\b\d{4}\b\+?~';
            preg_match_all($re, $title, $matches, PREG_SET_ORDER, 0);
            $year = $matches[0][0] ?? null;
            $title = str_replace($year, "", $title);
            $title = trim($title);
            $t = parse_url($href, PHP_URL_PATH);
            $t = explode("/", $t)[1];
            $type = null;
            if (str_contains($t, "movies"))
                $type = "movie";
            elseif (str_contains($t, "seasons"))
                $type = "tv";
            return [
                'href' => $href,
                'title' => $title,
                'year' => $year,
                'type' => $type,
                'similraty' => JaroWinkler::compare($title, $text)
            ];
        });

        $show = collect($results)
            ->sortByDesc('similraty')
            ->when($type == "movie" && !is_null($year), function ($collection) use ($year) {
                return $collection->where('type', 'movie')->where('year', $year);
            })
            ->when($type == "tv", function ($collection) use ($season, $episode) {
                return $collection->where('type', 'tv');
            })
            ->first();

        if (is_null($show)) return null;

        $client = new_http_client();
        $crawler = new HttpBrowser($client);
        if ($type == "tv") {
            $seasonId = $crawler->request('GET', $show['href'])->filter("#seasonList .seasonDiv")->eq($season - 1)->attr('data-href');
            $data = Http::withHeaders([
                "x-requested-with" => "XMLHttpRequest",
                "referer" => self::DOMAIN
            ])->asForm()->post(self::DOMAIN . "/series-ajax/?_action=get_season_list&_post_id=" . $seasonId, [
                "seasonID" => $seasonId,
            ])->body();
            $crawler_html = new Crawler();
            $crawler_html->addHTMLContent($data);

            $episodes = $crawler_html->filter("#epAll a")->each(function ($el) {
                return $el->attr('href');
            });

            $show['href'] = $episodes[$episode - 1] ?? null;
        }

        if (is_null($show['href'])) return null;

        $content = $crawler->request('GET', $show['href']);
        $src = $content->filter('iframe[name="player_iframe"]')->attr('src') ?? null;

        if (is_null($src)) return null;

        $content = $crawler->request('GET', $src);
        $script = $content->filter("script")->eq(0)->text();
        if (str_contains($script, "adilbo_HTML_encoder")) {
            $re = '/\/g.....(.*?)\)/m';
            preg_match_all($re, $script, $matches, PREG_SET_ORDER, 0);
            $code = $matches[0][1] ?? null;
            $file = adilbo_HTML_decoder($code, $script);
        } else {
            return null;
        }

        $urls[] = [
            'label' => 'auto',
            'ext' => 'm3u8',
            'url' => $file,
        ];

        return [
            'urls' => $urls,
            'tracks' => [],
            "provider" => self::PROVIDER
        ];
    }
}
