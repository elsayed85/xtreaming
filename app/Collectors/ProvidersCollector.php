<?php

namespace App\Collectors;

class ProvidersCollector
{
    public function collect($class, $data)
    {
        $links = app($class)::search($data);
        if (is_null($links)) {
            return null;
        }

        // dd($links);

        $extractors = config('extractors');

        return collect($links)->map(function ($link) use ($extractors) {
            // check if the link domain is in the extractors config
            $host = parse_url($link, PHP_URL_HOST);
            $host = explode('.', $host)[0];
            $extractor = collect($extractors)->filter(function ($extractor) use ($host) {
                return in_array($host, $extractor['hostnames']);
            })->first();
            if ($extractor) {
                $link = app($extractor['extractor'])::getVideo($link);
                return $link;
            }
            return null;
        })->filter()->values()->toArray();
    }
}
