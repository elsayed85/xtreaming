<?php

namespace App\Collectors\Extractors;

use Illuminate\Support\Facades\Http;
use Symfony\Component\BrowserKit\HttpBrowser;


class Streamlare
{
    public const DOMAIN = 'https://sltube.org';
    public const REFER = 'https://fmovies.ps';

    public static function getVideo($url)
    {
        $new_url = str_replace('streamlare.com', 'sltube.org', $url);
        $id = explode('/', parse_url($new_url)['path']);
        $id = end($id);

        $content = Http::withHeaders([
            'referer' => $url,
            'user-agent' => getRandomHost(),
            "content-type" => 'application/json;charset=UTF-8'
        ])->post(self::DOMAIN . "/api/video/stream/get", [
            'id' => $id,
        ])->json();

        if ($content['status'] == 'success') {
            return collect($content['result'])->map(function ($el) {
                return [
                    'file' => $el['file'],
                    'label' => str_replace('p', '', $el['label']),
                ];
            })->values()->toArray();
        }
        return null;
    }
}
