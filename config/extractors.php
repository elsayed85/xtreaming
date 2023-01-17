<?php

return [
    'mixdrop' => [
        "domains" => ["mixdrop.co", "mixdrop.sx", "mixdrop.to", "mixdrop.so", "mixdrop.cc", "mixdrop.tv", "mixdrop.link", "mixdrop.site", "mixdrop.video", "mixdrop.biz", "mixdrop.us", "mixdrop.xyz", "mixdrop.net", "mixdrop.download", "mixdrop.online", "mixdrop.space", "mixdrop.farm", "mixdrop.world", "mixdrop.fyi", "mixdrop.run", "mixdrop.click", "mixdrop.wtf", "mixdrop.pw", "mixdrop.info", "mixdrop.me", "mixdrop.tk", "mixdrop.uk", "mixdrop.ca"],
        'extractor' => \App\Collectors\Extractors\Mixdrop::class,

    ],
    'streamtape' => [
        'domains' => ['streamtape.com', 'streamtape.net', 'streamtape.org', 'streamtape.cc', 'streamtape.biz', 'streamtape.us', 'streamtape.xyz'],
        'extractor' => \App\Collectors\Extractors\Streamtape::class,
    ],
    'okru' => [
        'domains' => ['ok.ru'],
        'extractor' => \App\Collectors\Extractors\Okru::class,
    ],
    "dokicloud" => [
        "domains" => ["dokicloud.com", "dokicloud.net", "dokicloud.org", "dokicloud.cc", "dokicloud.biz", "dokicloud.us", "dokicloud.xyz", "dokicloud.link", "dokicloud.site", "dokicloud.video", "dokicloud.download", "dokicloud.online", "dokicloud.space", "dokicloud.farm", "dokicloud.world", "dokicloud.fyi", "dokicloud.run", "dokicloud.click", "dokicloud.wtf", "dokicloud.pw", "dokicloud.info", "dokicloud.me", "dokicloud.tk", "dokicloud.uk", "dokicloud.ca"],
        'extractor' => \App\Collectors\Extractors\DokiCloud::class,
    ],
    "dood" => [
        "domains" => ["dood.to", "dood.watch", "dood.la", "dood.so", "dood.ws", "dood.cx", "dood.cc", "dood.tv", "dood.link", "dood.site", "dood.video", "dood.download", "dood.online", "dood.space", "dood.farm", "dood.world", "dood.fyi", "dood.run", "dood.click", "dood.wtf", "dood.pw", "dood.info", "dood.me", "dood.tk", "dood.uk", "dood.ca", "doodstream.com", "dood.sh", "dood.pm", "dood.wf"],
        'extractor' => \App\Collectors\Extractors\Dood::class,
    ],
    "Rabbitstream" => [
        "domains" => ["rabbitstream.com", "rabbitstream.net", "rabbitstream.org", "rabbitstream.cc", "rabbitstream.biz", "rabbitstream.us", "rabbitstream.xyz", "rabbitstream.link", "rabbitstream.site", "rabbitstream.video", "rabbitstream.download", "rabbitstream.online", "rabbitstream.space", "rabbitstream.farm", "rabbitstream.world", "rabbitstream.fyi", "rabbitstream.run", "rabbitstream.click", "rabbitstream.wtf", "rabbitstream.pw", "rabbitstream.info", "rabbitstream.me", "rabbitstream.tk", "rabbitstream.uk", "rabbitstream.ca"],
        'extractor' => \App\Collectors\Extractors\Rabbitstream::class,
    ],
    "streamhub" => [
        "domains" => ["streamhub.to", "streamhub.cc", "streamhub.biz", "streamhub.us", "streamhub.xyz", "streamhub.link", "streamhub.site", "streamhub.video", "streamhub.download", "streamhub.online", "streamhub.space", "streamhub.farm", "streamhub.world", "streamhub.fyi", "streamhub.run", "streamhub.click", "streamhub.wtf", "streamhub.pw", "streamhub.info", "streamhub.me", "streamhub.tk", "streamhub.uk", "streamhub.ca"],
        'extractor' => \App\Collectors\Extractors\Streamhub::class,
    ],
    "streamlare" => [
        "domains" => ["streamlare.com", "streamlare.net", "streamlare.org", "streamlare.cc", "streamlare.biz", "streamlare.us", "streamlare.xyz", "streamlare.link", "streamlare.site", "streamlare.video", "streamlare.download", "streamlare.online", "streamlare.space", "streamlare.farm", "streamlare.world", "streamlare.fyi", "streamlare.run", "streamlare.click", "streamlare.wtf", "streamlare.pw", "streamlare.info", "streamlare.me", "streamlare.tk", "streamlare.uk", "streamlare.ca"],
        'extractor' => \App\Collectors\Extractors\Streamlare::class,
    ],
    "voe" => [
        "domains" => ["voe.sx"],
        'extractor' => \App\Collectors\Extractors\Voe::class,
    ],
];
