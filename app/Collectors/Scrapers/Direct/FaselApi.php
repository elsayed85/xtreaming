<?php

namespace App\Collectors\Scrapers\Direct;

use App\Collectors\Helpers\JaroWinkler;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class FaselApi
{
    protected const DOMAIN = 'https://netcore.faselhd.pro/api/v1.0/';
    public const PROVIDER = 'faselhd';
    public const TOKEN = "CMrdhDW04Ce9ZcWFsNCAgTKCMHKD88bjgxomBVOL+VDippsR9/YvclNOKrYwRSRYYwP0uJ6AXtUFMk1iNdQgGsFC2G/5fO05l4hGbODXi41X91/TbE117NdC0fl/ZRKBu1kn08dQIoG4GvW9ypci03/DxjqPHzVffnegq4WRy+NZ0BPbob3pf2TODnKj1Zc7iR+fSQVE479J/V3dMm46N41AjfJuXFpyj1wxg0husAnVpj647nv0EDBc+kOC+CtdLOV/LFvzoxj+fEKkzhEJ1wC9IqI3J6+DIkoYg8Skvjm+yfIHewNGmAhrb0MMi+v28AeimhfMIHq28QgyKI0Sulkm8coU+a/O";

    public static function search($data)
    {
        [$type, $text, $year, $season, $episode] = [
            $data['type'] ?? "movie",
            $data['text'] ?? null,
            $data['year'] ?? null,
            $data['season'] ?? null,
            $data['episode'] ?? null
        ];

        $results = Http::withHeaders([
            'content-type' => 'application/json',
        ])
            ->withToken(self::TOKEN)
            ->post(self::DOMAIN . "Content/ContentSearch", [
                'data' => [
                    'pageNumber' => 1,
                    'data' => [
                        'searchText' => $text,
                    ],
                    'pageSize' => 50
                ]
            ])->json();



        if ($results['statusCode'] != 1) {
            return null;
        }


        $new_data = collect($results['result']['result'])->map(function ($el) use ($text, $season) {
            $href = $el['title'];
            $title = $href;
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
            $title = str_replace("--", " ", $title);
            $title = str_replace("-", " ", $title);
            $title = trim($title);
            $type = null;
            if (str_contains($href, "فيلم"))
                $type = "movie";
            elseif (str_contains($href, "مسلسل"))
                $type = "tv";


            if ($type == "tv") {
                $text = $text . " " . seasonNumberAsTextInArabic($season);
                $simliarty = JaroWinkler::compare($title, $text);
            } else {
                $simliarty = JaroWinkler::compare($title, $text);
            }

            return [
                'id' => $el['id'],
                'title' => $title,
                'text' => $text,
                'year' => $year,
                'type' => $type,
                'similraty' => $simliarty,
            ];
        });


        $show = collect($new_data)
            ->when($type == "movie" && !is_null($year), function ($collection) use ($year) {
                return $collection->where('type', 'movie')->where('year', $year);
            })
            ->when($type == "tv", function ($collection) use ($season, $episode) {
                return $collection->where('type', 'tv');
            })
            ->sortByDesc('similraty')
            ->first();


        if (is_null($show)) return null;

        $results = Http::withHeaders([
            'content-type' => 'application/json',
        ])
            ->withToken(self::TOKEN)
            ->get(self::DOMAIN . "Content/GetContent", [
                'ContentId' => $show['id'],
            ])->json();


        if ($results['statusCode'] != 1) {
            return null;
        }

        $results = $results['result'];
        if (isset($results['episodesVideosIds'])) {
            $video_id = $results['episodesVideosIds'][$episode - 1]['videoId'] ?? null;
        } else {
            $video_id = $results['videoId'] ?? null;
        }

        if (is_null($video_id)) return null;

        $results = Http::withHeaders([
            'content-type' => 'application/json',
        ])
            ->withToken(self::TOKEN)
            ->get(self::DOMAIN . "Video/Stream?video_id=", [
                'video_id' => $video_id,
            ])->json();


        if ($results['statusCode'] != 1) {
            return null;
        }

        $data = $results['result']['data'];

        $urls = collect($data['mp4']);

        $urls = collect($urls)->map(function ($el) {
            $label = str_replace("p", "", $el['label']);
            return [
                'label' => $label,
                'url' => $el['url'],
                'ext' => "mp4"
            ];
        })->toArray();

        return [
            "urls" => $urls,
            'tracks' => [],
            'provider' => self::PROVIDER
        ];
    }
}
