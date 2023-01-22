<?php

use App\Collectors\Extractors\Dokicloud;
use App\Collectors\Extractors\Dood;
use App\Collectors\Extractors\Mixdrop;
use App\Collectors\Extractors\Okru;
use App\Collectors\Extractors\Rabbitstream;
use App\Collectors\Extractors\Streamhub;
use App\Collectors\Extractors\Streamlare;
use App\Collectors\Extractors\Streamtape;
use App\Collectors\Extractors\Voe;

return [
    [
        "hostnames" => ["mixdrop"],
        'extractor' => Mixdrop::class,

    ],
    [
        'hostnames' => ['streamtape'],
        'extractor' => Streamtape::class,
    ],
    [
        'hostnames' => ['ok'],
        'extractor' => Okru::class,
    ],
    [
        "hostnames" => ["dokicloud"],
        'extractor' => Dokicloud::class,
    ],
    // [
    //     "hostnames" => ["dood"],
    //     'extractor' => Dood::class,
    // ],
    // [
    //     "hostnames" => ["rabbitstream"],
    //     'extractor' => Rabbitstream::class,
    // ],
    [
        "hostnames" => ["streamhub"],
        'extractor' => Streamhub::class,
    ],
    [
        "hostnames" => ["streamlare"],
        'extractor' => Streamlare::class,
    ],
    [
        "hostnames" => ["voe"],
        'extractor' => Voe::class,
    ],
];
