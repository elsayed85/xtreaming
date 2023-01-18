@extends('layouts.app')

@section('main')
    <div class="app-detail flex-fill">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="https://demo.codelug.com/wovie/series">
                        Series</a></li>
                <li class="breadcrumb-item d-none d-md-block"><a href="https://demo.codelug.com/wovie/serie/breaking-bad-13">
                        Breaking Bad</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    1.Season, 2.Episode </li>
            </ol>
        </nav>
        <div class="detail-header d-flex align-items-center">
            <div class="nav-player-select dropdown">
                <a class="dropdown-toggle btn-service" href="#" data-embed="561" role="button" id="videoSource"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Source : <span></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="videoSource" style="">
                    <button type="button" class="btn-service dropdown-source selected" data-embed="561"><span
                            class="name"></span>
                        <span class="language">English Subtitle</span></button>
                    <button type="button" class="btn-service dropdown-source" data-embed="562"><span class="name">plyr.io
                            HLS</span>
                        <span class="language">English Subtitle</span></button>
                </div>
            </div>
            <div class="d-flex align-items-center">
                <div class="dropdown">
                    <button type="button" class="btn-svg share" role="button" id="shareDropdown" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <svg class="icon">
                            <use xlink:href="{{ asset("images/sprite.svg") }}#share"></use>
                        </svg>
                        <span>Share</span>
                    </button>
                    <div class="dropdown-menu dropdown-share" aria-labelledby="shareDropdown">
                        <a href="#" class="bg-facebook share-link" data-type="facebook"
                            data-sef="https://demo.codelug.com/wovie/serie/breaking-bad-13">
                            <svg class="icon">
                                <use xlink:href="{{ asset("images/sprite.svg") }}#facebook">
                                </use>
                            </svg>
                        </a>
                        <a href="#" class="bg-twitter share-link" data-type="twitter" data-title="Breaking Bad"
                            data-sef="https://demo.codelug.com/wovie/serie/breaking-bad-13">
                            <svg class="icon">
                                <use xlink:href="{{ asset("images/sprite.svg") }}#twitter"></use>
                            </svg>
                        </a>
                    </div>
                </div>
                <button type="button" class="btn-svg report mr-0" data-toggle="modal" data-target="#m"
                    data-remote="https://demo.codelug.com/wovie/modal/report?id=13">
                    <svg class="icon" stroke-width="3">
                        <use xlink:href="{{ asset("images/sprite.svg") }}#alert"></use>
                    </svg>
                    <span>Report</span>
                </button>
            </div>
        </div>
        <div class="app-detail-embed">
            <div class="embed-col">
                <div class="spinner d-none">
                    <div class="bounce1"></div>
                    <div class="bounce2"></div>
                    <div class="bounce3"></div>
                </div>
                <div class="embed-code d-none"></div>
                <div class="embed-play">
                    <div class="embed-cover lazy"
                        style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/large-cover-breaking-bad.webp&quot;);">
                    </div>
                    <div class="play-btn" data-id="" data-embed="561">
                        <svg class="icon">
                            <use xlink:href="{{ asset("images/sprite.svg") }}#play"></use>
                        </svg>
                    </div>
                </div>
            </div>
            <a href="https://codelug.com/item/xtreaming-movie-and-tv-show-streaming-platform-6" rel="noreferrer"
                class="ads-embed embed-ads" target="_blank"><img
                    src="https://demo.codelug.com/wovie/public/upload/ads/250-x-432.webp" alt="Reklam"></a>
        </div>
        <div class="episode-nav">
            <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-1-season-1-episode" class="pr-md-5">
                <div class="svg-icon">
                    <svg>
                        <use xlink:href="{{ asset("images/sprite.svg") }}#chevron-left"></use>
                    </svg>
                </div>
                <div class="ml-3">
                    <div class="name">
                        Prev episode </div>
                    <div class="episode">
                        1.Season 1.Episode </div>
                </div>
            </a>
            <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-1-season-3-episode" class="pl-md-5 ml-auto">
                <div class="mr-3 text-right">
                    <div class="name">
                        Next episode </div>
                    <div class="episode">
                        1.Season 3.Episode </div>
                </div>
                <div class="svg-icon">
                    <svg>
                        <use xlink:href="{{ asset("images/sprite.svg") }}#chevron-right"></use>
                    </svg>
                </div>
            </a>
        </div>
        <div class="detail-content">
            <div class="cover">
                <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13" class="media media-cover"
                    style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-breaking-bad.webp&quot;);"></a>
            </div>
            <div class="detail-text flex-fill">
                <div class="caption">
                    <div class="caption-content">
                        <h3 class="mb-1">
                            1.Season, 2.Episode </h3>
                        <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13">
                            <h1>
                                Breaking Bad </h1>
                        </a>
                        <h2>Wedding Day</h2>
                        <div class="category">
                            <a href="https://demo.codelug.com/wovie/series/drama">
                                Drama</a>
                        </div>
                    </div>
                    <div class="video-attr">
                        <div class="attr">
                            Country </div>
                        <div class="text">
                            England </div>
                    </div>
                    <div class="video-attr">
                        <div class="attr">
                            Release Date </div>
                        <div class="text">
                            2008 </div>
                    </div>
                    <div class="video-attr">
                        <div class="attr">
                            Actors </div>
                        <div class="text" data-more="" data-element="a" data-limit="6">
                            <a href="https://demo.codelug.com/wovie/actor/bryan-cranston-472">
                                Bryan Cranston</a>
                            <a href="https://demo.codelug.com/wovie/actor/aaron-paul-473">
                                Aaron Paul</a>
                            <a href="https://demo.codelug.com/wovie/actor/anna-gunn-474">
                                Anna Gunn</a>
                            <a href="https://demo.codelug.com/wovie/actor/dean-norris-475">
                                Dean Norris</a>
                            <a href="https://demo.codelug.com/wovie/actor/jonathan-banks-476">
                                Jonathan Banks</a>
                            <a href="https://demo.codelug.com/wovie/actor/bob-odenkirk-477">
                                Bob Odenkirk</a>
                            <a href="https://demo.codelug.com/wovie/actor/betsy-brandt-478" class="toggle"
                                style="display: none;">
                                Betsy Brandt</a>
                            <a href="https://demo.codelug.com/wovie/actor/rj-mitte-479" class="toggle"
                                style="display: none;">
                                RJ Mitte</a>
                            <div class="more">Show more</div>
                        </div>
                    </div>
                </div>
                <div class="action">
                    <div class="video-view">
                        <div class="view-text">
                            297<span>
                                views</span>
                        </div>
                    </div>
                    <div class="action-bar"><span style="width: NAN%"></span></div>
                    <div class="action-btns">
                        <div class="action-btn like " data-id="13">
                            <svg>
                                <use xlink:href="{{ asset("images/sprite.svg") }}#like"></use>
                            </svg>
                            <span data-votes="0">
                                0</span>
                        </div>
                        <div class="action-btn dislike " data-id="13">
                            <svg>
                                <use xlink:href="{{ asset("images/sprite.svg") }}#dislike">
                                </use>
                            </svg>
                            <span data-votes="0">
                                0</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="https://codelug.com/item/xtreaming-movie-and-tv-show-streaming-platform-6" rel="noreferrer"
            class="ads-embed my-3" target="_blank"><img
                src="https://demo.codelug.com/wovie/public/upload/ads/728-x-90.webp" alt="Reklam"></a>
        <div class="season-list">
            <div class="seasons">
                <ul class="nav" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="season-1-tab" data-toggle="tab" href="#season-1" role="tab"
                            aria-controls="season-1" aria-selected="true">
                            1.Season</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " id="season-2-tab" data-toggle="tab" href="#season-2" role="tab"
                            aria-controls="season-2" aria-selected="false">
                            2.Season</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " id="season-3-tab" data-toggle="tab" href="#season-3" role="tab"
                            aria-controls="season-3" aria-selected="false">
                            3.Season</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " id="season-4-tab" data-toggle="tab" href="#season-4" role="tab"
                            aria-controls="season-4" aria-selected="false">
                            4.Season</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " id="season-5-tab" data-toggle="tab" href="#season-5" role="tab"
                            aria-controls="season-5" aria-selected="false">
                            5.Season</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " id="season-6-tab" data-toggle="tab" href="#season-6" role="tab"
                            aria-controls="season-6" aria-selected="false">
                            6.Season</a>
                    </li>
                </ul>
            </div>
            <div class="episodes tab-content">
                <div class="tab-pane show active" id="season-1" role="tabpanel" aria-labelledby="season-1-tab">
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-1-season-1-episode">
                        <div class="episode">
                            1.Episode </div>
                        <div class="name">
                            Good Cop Bad Cop </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-1-season-2-episode" class="active">
                        <div class="episode">
                            2.Episode </div>
                        <div class="name">
                            Wedding Day </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-1-season-3-episode">
                        <div class="episode">
                            3.Episode </div>
                        <div class="name">
                            TwaughtHammer </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-1-season-4-episode">
                        <div class="episode">
                            4.Episode </div>
                        <div class="name">
                            Marie's Confession </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-1-season-5-episode">
                        <div class="episode">
                            5.Episode </div>
                        <div class="name">
                            The Break-In </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-1-season-6-episode">
                        <div class="episode">
                            6.Episode </div>
                        <div class="name">
                            Jesse Pinkman Evidence Tape </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-1-season-7-episode">
                        <div class="episode">
                            7.Episode </div>
                        <div class="name">
                            Walt's Confession </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-1-season-8-episode">
                        <div class="episode">
                            8.Episode </div>
                        <div class="name">
                            Blood Money Table Read </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-1-season-9-episode">
                        <div class="episode">
                            9.Episode </div>
                        <div class="name">
                            Gag reel </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-1-season-10-episode">
                        <div class="episode">
                            10.Episode </div>
                        <div class="name">
                            Alternate Ending </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-1-season-11-episode">
                        <div class="episode">
                            11.Episode </div>
                        <div class="name">
                            Behind The Scenes: Alternate Ending </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-1-season-12-episode">
                        <div class="episode">
                            12.Episode </div>
                        <div class="name">
                            Episode 12 </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-1-season-13-episode">
                        <div class="episode">
                            13.Episode </div>
                        <div class="name">
                            Episode 13 </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-1-season-14-episode">
                        <div class="episode">
                            14.Episode </div>
                        <div class="name">
                            Episode 14 </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-1-season-15-episode">
                        <div class="episode">
                            15.Episode </div>
                        <div class="name">
                            Episode 15 </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-1-season-16-episode">
                        <div class="episode">
                            16.Episode </div>
                        <div class="name">
                            Episode 16 </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-1-season-17-episode">
                        <div class="episode">
                            17.Episode </div>
                        <div class="name">
                            Episode 17 </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-1-season-18-episode">
                        <div class="episode">
                            18.Episode </div>
                        <div class="name">
                            Episode 18 </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-1-season-19-episode">
                        <div class="episode">
                            19.Episode </div>
                        <div class="name">
                            Episode 19 </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-1-season-20-episode">
                        <div class="episode">
                            20.Episode </div>
                        <div class="name">
                            Episode 20 </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-1-season-21-episode">
                        <div class="episode">
                            21.Episode </div>
                        <div class="name">
                            Episode 21 </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-1-season-22-episode">
                        <div class="episode">
                            22.Episode </div>
                        <div class="name">
                            Episode 22 </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-1-season-23-episode">
                        <div class="episode">
                            23.Episode </div>
                        <div class="name">
                            Episode 23 </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-1-season-24-episode">
                        <div class="episode">
                            24.Episode </div>
                        <div class="name">
                            Episode 24 </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-1-season-25-episode">
                        <div class="episode">
                            25.Episode </div>
                        <div class="name">
                            Episode 25 </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-1-season-26-episode">
                        <div class="episode">
                            26.Episode </div>
                        <div class="name">
                            Episode 26 </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-1-season-27-episode">
                        <div class="episode">
                            27.Episode </div>
                        <div class="name">
                            Episode 27 </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-1-season-28-episode">
                        <div class="episode">
                            28.Episode </div>
                        <div class="name">
                            Episode 28 </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-1-season-29-episode">
                        <div class="episode">
                            29.Episode </div>
                        <div class="name">
                            Episode 29 </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-1-season-30-episode">
                        <div class="episode">
                            30.Episode </div>
                        <div class="name">
                            Episode 30 </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-1-season-31-episode">
                        <div class="episode">
                            31.Episode </div>
                        <div class="name">
                            Episode 31 </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-1-season-32-episode">
                        <div class="episode">
                            32.Episode </div>
                        <div class="name">
                            Episode 32 </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-1-season-33-episode">
                        <div class="episode">
                            33.Episode </div>
                        <div class="name">
                            Episode 33 </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-1-season-34-episode">
                        <div class="episode">
                            34.Episode </div>
                        <div class="name">
                            Episode 34 </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-1-season-35-episode">
                        <div class="episode">
                            35.Episode </div>
                        <div class="name">
                            Episode 35 </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-1-season-36-episode">
                        <div class="episode">
                            36.Episode </div>
                        <div class="name">
                            Episode 36 </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-1-season-37-episode">
                        <div class="episode">
                            37.Episode </div>
                        <div class="name">
                            Episode 37 </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-1-season-38-episode">
                        <div class="episode">
                            38.Episode </div>
                        <div class="name">
                            Episode 38 </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-1-season-39-episode">
                        <div class="episode">
                            39.Episode </div>
                        <div class="name">
                            Episode 39 </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-1-season-40-episode">
                        <div class="episode">
                            40.Episode </div>
                        <div class="name">
                            Episode 40 </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-1-season-41-episode">
                        <div class="episode">
                            41.Episode </div>
                        <div class="name">
                            El Camino: A Breaking Bad Movie </div>
                    </a>
                </div>
                <div class="tab-pane " id="season-2" role="tabpanel" aria-labelledby="season-2-tab">
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-2-season-1-episode">
                        <div class="episode">
                            1.Episode </div>
                        <div class="name">
                            Pilot </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-2-season-2-episode" class="active">
                        <div class="episode">
                            2.Episode </div>
                        <div class="name">
                            Cat's in the Bag... </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-2-season-3-episode">
                        <div class="episode">
                            3.Episode </div>
                        <div class="name">
                            ...And the Bag's in the River </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-2-season-4-episode">
                        <div class="episode">
                            4.Episode </div>
                        <div class="name">
                            Cancer Man </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-2-season-5-episode">
                        <div class="episode">
                            5.Episode </div>
                        <div class="name">
                            Gray Matter </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-2-season-6-episode">
                        <div class="episode">
                            6.Episode </div>
                        <div class="name">
                            Crazy Handful of Nothin' </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-2-season-7-episode">
                        <div class="episode">
                            7.Episode </div>
                        <div class="name">
                            A No-Rough-Stuff-Type Deal </div>
                    </a>
                </div>
                <div class="tab-pane " id="season-3" role="tabpanel" aria-labelledby="season-3-tab">
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-3-season-1-episode">
                        <div class="episode">
                            1.Episode </div>
                        <div class="name">
                            Seven Thirty-Seven </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-3-season-2-episode" class="active">
                        <div class="episode">
                            2.Episode </div>
                        <div class="name">
                            Grilled </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-3-season-3-episode">
                        <div class="episode">
                            3.Episode </div>
                        <div class="name">
                            Bit by a Dead Bee </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-3-season-4-episode">
                        <div class="episode">
                            4.Episode </div>
                        <div class="name">
                            Down </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-3-season-5-episode">
                        <div class="episode">
                            5.Episode </div>
                        <div class="name">
                            Breakage </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-3-season-6-episode">
                        <div class="episode">
                            6.Episode </div>
                        <div class="name">
                            Peekaboo </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-3-season-7-episode">
                        <div class="episode">
                            7.Episode </div>
                        <div class="name">
                            Negro y Azul </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-3-season-8-episode">
                        <div class="episode">
                            8.Episode </div>
                        <div class="name">
                            Better Call Saul </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-3-season-9-episode">
                        <div class="episode">
                            9.Episode </div>
                        <div class="name">
                            4 Days Out </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-3-season-10-episode">
                        <div class="episode">
                            10.Episode </div>
                        <div class="name">
                            Over </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-3-season-11-episode">
                        <div class="episode">
                            11.Episode </div>
                        <div class="name">
                            Mandala </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-3-season-12-episode">
                        <div class="episode">
                            12.Episode </div>
                        <div class="name">
                            Phoenix </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-3-season-13-episode">
                        <div class="episode">
                            13.Episode </div>
                        <div class="name">
                            ABQ </div>
                    </a>
                </div>
                <div class="tab-pane " id="season-4" role="tabpanel" aria-labelledby="season-4-tab">
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-4-season-1-episode">
                        <div class="episode">
                            1.Episode </div>
                        <div class="name">
                            No Más </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-4-season-2-episode" class="active">
                        <div class="episode">
                            2.Episode </div>
                        <div class="name">
                            Caballo sin Nombre </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-4-season-3-episode">
                        <div class="episode">
                            3.Episode </div>
                        <div class="name">
                            I.F.T. </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-4-season-4-episode">
                        <div class="episode">
                            4.Episode </div>
                        <div class="name">
                            Green Light </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-4-season-5-episode">
                        <div class="episode">
                            5.Episode </div>
                        <div class="name">
                            Más </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-4-season-6-episode">
                        <div class="episode">
                            6.Episode </div>
                        <div class="name">
                            Sunset </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-4-season-7-episode">
                        <div class="episode">
                            7.Episode </div>
                        <div class="name">
                            One Minute </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-4-season-8-episode">
                        <div class="episode">
                            8.Episode </div>
                        <div class="name">
                            I See You </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-4-season-9-episode">
                        <div class="episode">
                            9.Episode </div>
                        <div class="name">
                            Kafkaesque </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-4-season-10-episode">
                        <div class="episode">
                            10.Episode </div>
                        <div class="name">
                            Fly </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-4-season-11-episode">
                        <div class="episode">
                            11.Episode </div>
                        <div class="name">
                            Abiquiu </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-4-season-12-episode">
                        <div class="episode">
                            12.Episode </div>
                        <div class="name">
                            Half Measures </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-4-season-13-episode">
                        <div class="episode">
                            13.Episode </div>
                        <div class="name">
                            Full Measure </div>
                    </a>
                </div>
                <div class="tab-pane " id="season-5" role="tabpanel" aria-labelledby="season-5-tab">
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-5-season-1-episode">
                        <div class="episode">
                            1.Episode </div>
                        <div class="name">
                            Box Cutter </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-5-season-2-episode" class="active">
                        <div class="episode">
                            2.Episode </div>
                        <div class="name">
                            Thirty-Eight Snub </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-5-season-3-episode">
                        <div class="episode">
                            3.Episode </div>
                        <div class="name">
                            Open House </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-5-season-4-episode">
                        <div class="episode">
                            4.Episode </div>
                        <div class="name">
                            Bullet Points </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-5-season-5-episode">
                        <div class="episode">
                            5.Episode </div>
                        <div class="name">
                            Shotgun </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-5-season-6-episode">
                        <div class="episode">
                            6.Episode </div>
                        <div class="name">
                            Cornered </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-5-season-7-episode">
                        <div class="episode">
                            7.Episode </div>
                        <div class="name">
                            Problem Dog </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-5-season-8-episode">
                        <div class="episode">
                            8.Episode </div>
                        <div class="name">
                            Hermanos </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-5-season-9-episode">
                        <div class="episode">
                            9.Episode </div>
                        <div class="name">
                            Bug </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-5-season-10-episode">
                        <div class="episode">
                            10.Episode </div>
                        <div class="name">
                            Salud </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-5-season-11-episode">
                        <div class="episode">
                            11.Episode </div>
                        <div class="name">
                            Crawl Space </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-5-season-12-episode">
                        <div class="episode">
                            12.Episode </div>
                        <div class="name">
                            End Times </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-5-season-13-episode">
                        <div class="episode">
                            13.Episode </div>
                        <div class="name">
                            Face Off </div>
                    </a>
                </div>
                <div class="tab-pane " id="season-6" role="tabpanel" aria-labelledby="season-6-tab">
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-6-season-1-episode">
                        <div class="episode">
                            1.Episode </div>
                        <div class="name">
                            Live Free or Die </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-6-season-2-episode" class="active">
                        <div class="episode">
                            2.Episode </div>
                        <div class="name">
                            Madrigal </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-6-season-3-episode">
                        <div class="episode">
                            3.Episode </div>
                        <div class="name">
                            Hazard Pay </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-6-season-4-episode">
                        <div class="episode">
                            4.Episode </div>
                        <div class="name">
                            Fifty-One </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-6-season-5-episode">
                        <div class="episode">
                            5.Episode </div>
                        <div class="name">
                            Dead Freight </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-6-season-6-episode">
                        <div class="episode">
                            6.Episode </div>
                        <div class="name">
                            Buyout </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-6-season-7-episode">
                        <div class="episode">
                            7.Episode </div>
                        <div class="name">
                            Say My Name </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-6-season-8-episode">
                        <div class="episode">
                            8.Episode </div>
                        <div class="name">
                            Gliding Over All </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-6-season-9-episode">
                        <div class="episode">
                            9.Episode </div>
                        <div class="name">
                            Blood Money </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-6-season-10-episode">
                        <div class="episode">
                            10.Episode </div>
                        <div class="name">
                            Buried </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-6-season-11-episode">
                        <div class="episode">
                            11.Episode </div>
                        <div class="name">
                            Confessions </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-6-season-12-episode">
                        <div class="episode">
                            12.Episode </div>
                        <div class="name">
                            Rabid Dog </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-6-season-13-episode">
                        <div class="episode">
                            13.Episode </div>
                        <div class="name">
                            To'hajiilee </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-6-season-14-episode">
                        <div class="episode">
                            14.Episode </div>
                        <div class="name">
                            Ozymandias </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-6-season-15-episode">
                        <div class="episode">
                            15.Episode </div>
                        <div class="name">
                            Granite State </div>
                    </a>
                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13-6-season-16-episode">
                        <div class="episode">
                            16.Episode </div>
                        <div class="name">
                            Felina </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="app-section">
            <div class="app-heading">
                <div class="text">
                    Similar content </div>
            </div>
            <div class="row row-cols-6 list-scrollable">
                <div class="col">
                    <div class="list-movie">
                        <a href="https://demo.codelug.com/wovie/serie/the-walking-dead-11" class="list-media">
                            <div class="list-media-attr">
                                <div class="quality">
                                    HD </div>
                            </div>
                            <div class="play-btn">
                                <svg class="icon">
                                    <use xlink:href="{{ asset("images/sprite.svg") }}#play">
                                    </use>
                                </svg>
                            </div>
                            <div class="media media-cover"
                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-the-walking-dead.webp&quot;);">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://demo.codelug.com/wovie/serie/the-walking-dead-11" class="list-titlesub">
                                The Walking Dead </a>
                            <a href="https://demo.codelug.com/wovie/serie/the-walking-dead-11" class="list-title">
                                The Walking Dead </a>
                            <a href="https://demo.codelug.com/wovie/category/drama" class="list-category">
                                Drama </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="list-movie">
                        <a href="https://demo.codelug.com/wovie/serie/riverdale-12" class="list-media">
                            <div class="list-media-attr">
                                <div class="quality">
                                    Ultra HD </div>
                            </div>
                            <div class="play-btn">
                                <svg class="icon">
                                    <use xlink:href="{{ asset("images/sprite.svg") }}#play">
                                    </use>
                                </svg>
                            </div>
                            <div class="media media-cover"
                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-riverdale.webp&quot;);">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://demo.codelug.com/wovie/serie/riverdale-12" class="list-titlesub">
                                Riverdale </a>
                            <a href="https://demo.codelug.com/wovie/serie/riverdale-12" class="list-title">
                                Riverdale </a>
                            <a href="https://demo.codelug.com/wovie/category/drama" class="list-category">
                                Drama </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="list-movie">
                        <a href="https://demo.codelug.com/wovie/serie/greys-anatomy-15" class="list-media">
                            <div class="list-media-attr">
                                <div class="quality">
                                    HD </div>
                            </div>
                            <div class="play-btn">
                                <svg class="icon">
                                    <use xlink:href="{{ asset("images/sprite.svg") }}#play">
                                    </use>
                                </svg>
                            </div>
                            <div class="media media-cover"
                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-greys-anatomy.webp&quot;);">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://demo.codelug.com/wovie/serie/greys-anatomy-15" class="list-titlesub">
                                Grey's Anatomy </a>
                            <a href="https://demo.codelug.com/wovie/serie/greys-anatomy-15" class="list-title">
                                Grey's Anatomy </a>
                            <a href="https://demo.codelug.com/wovie/category/drama" class="list-category">
                                Drama </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="list-movie">
                        <a href="https://demo.codelug.com/wovie/serie/arrow-16" class="list-media">
                            <div class="list-media-attr">
                                <div class="quality">
                                    HD </div>
                            </div>
                            <div class="play-btn">
                                <svg class="icon">
                                    <use xlink:href="{{ asset("images/sprite.svg") }}#play">
                                    </use>
                                </svg>
                            </div>
                            <div class="media media-cover"
                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-arrow.webp&quot;);">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://demo.codelug.com/wovie/serie/arrow-16" class="list-titlesub">
                                Arrow </a>
                            <a href="https://demo.codelug.com/wovie/serie/arrow-16" class="list-title">
                                Arrow </a>
                            <a href="https://demo.codelug.com/wovie/category/drama" class="list-category">
                                Drama </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="list-movie">
                        <a href="https://demo.codelug.com/wovie/serie/american-horror-story-17" class="list-media">
                            <div class="list-media-attr">
                                <div class="quality">
                                    Ultra HD </div>
                            </div>
                            <div class="play-btn">
                                <svg class="icon">
                                    <use xlink:href="{{ asset("images/sprite.svg") }}#play">
                                    </use>
                                </svg>
                            </div>
                            <div class="media media-cover"
                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-american-horror-story.webp&quot;);">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://demo.codelug.com/wovie/serie/american-horror-story-17" class="list-titlesub">
                                American Horror Story </a>
                            <a href="https://demo.codelug.com/wovie/serie/american-horror-story-17" class="list-title">
                                American Horror Story </a>
                            <a href="https://demo.codelug.com/wovie/category/drama" class="list-category">
                                Drama </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="list-movie">
                        <a href="https://demo.codelug.com/wovie/serie/fear-the-walking-dead-18" class="list-media">
                            <div class="list-media-attr">
                                <div class="quality">
                                    HD </div>
                            </div>
                            <div class="play-btn">
                                <svg class="icon">
                                    <use xlink:href="{{ asset("images/sprite.svg") }}#play">
                                    </use>
                                </svg>
                            </div>
                            <div class="media media-cover"
                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-fear-the-walking-dead.webp&quot;);">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://demo.codelug.com/wovie/serie/fear-the-walking-dead-18" class="list-titlesub">
                                Fear the Walking Dead </a>
                            <a href="https://demo.codelug.com/wovie/serie/fear-the-walking-dead-18" class="list-title">
                                Fear the Walking Dead </a>
                            <a href="https://demo.codelug.com/wovie/category/drama" class="list-category">
                                Drama </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="comments app-section pt-0" data-content="281" data-type="episode">
                    <div class="app-heading">
                        <div class="text">Comments</div>
                    </div>
                    <div class="py-3">The comment field is only for members. <a
                            href="https://demo.codelug.com/wovie/login" class="text-white font-weight-bold">Login</a>, <a
                            href="https://demo.codelug.com/wovie/register"
                            class="text-white font-weight-bold">Register</a></div>
                    <div class="d-flex align-items-center">
                        <div class="comment-total">No comments yet</div>
                        <div class="sort dropdown" style="display: none;">
                            <button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                                Sorting <span class="current">Newest</span>
                            </button>
                            <ul class="dropdown-menu selected">
                                <a href="#" class="dropdown-item" data-sort="1">Newest</a>
                                <a href="#" class="dropdown-item" data-sort="3">Popular</a>
                                <a href="#" class="dropdown-item" data-sort="2">Oldest</a>
                            </ul>
                        </div>
                    </div>
                    <div class="loader" style=""></div>
                    <ul class="list-comments" style=""></ul>
                    <div class="pagination-container"></div>
                </div>
                <script id="commentTemplate" type="text/template">
                    <li class="list-comment {% if (spoiler == '1') { %} spoiler {% } %}" data-id="{%= id %}">
                        {% if (spoiler == '1') { %}
                            <div class="spoiler-btn" data-id="{%= id %}">This comment contains spoilers. Click to read</div>
                        {% } %}
                        <div class="list-comment-content">
                            <div class="list-avatar">
                                {% if (author.url) { %}
                                <a href="{%= author.url %}" target="_blank">{%= author.avatar %}</a>
                                {% } else { %}
                                {%= author.avatar %}
                                {% } %}
                            </div>
                            <div class="list-body">
                                {% if (author.url) { %}
                                <a href="{%= author.url %}" target="_blank" class="list-name">{%= author.name %}</a>
                                {% } else { %}
                                <span class="list-name">{%= author.name %}</span>
                                {% } %}
                                <a href="#!comment={%= id %}" class="list-date">
                                    <time title="{%= created %}">{%= created %}</time>
                                </a>
                                {% if (status != '1') { %} <span class="text-warning text-12">Pending</span> {% } %}
                                <div class="text">{%= comment %}</div>
                                <form method="POST" class="edit-form comment-form">
                                    <input type="hidden" name="id" value="{%= id %}">
                                    <input type="hidden" name="action" value="update">
                                    <textarea name="comment" class="form-control mb-2" rows="1 wrap=" hard" maxlength="500" data-content="{%= comment %}" placeholder="Yorum"></textarea>
                                    <div class="comment-btn">
                                        <button type="submit" class="btn btn-theme" data-loading-text="..">Edit</button>
                                        <button type="button" class="btn cancel">Cancel</button>
                                    </div>
                                    <div class="response"></div>
                                </form>
                                <div class="list-comment-footer">
                                    <div class="votes">
                                        <a href="#" title="Beğen" class="like {%= (voted === 'up' ? 'voted' : '') %}">
                                            <svg class="icon">
                                                <use xlink:href="{{ asset("images/sprite.svg") }}#like" />
                                            </svg>
                                        <span class="likes" data-votes="{%= likes %}">
                                            {%= likes || '' %}
                                        </span>
                                        </a>
                                        <a href="#" title="Beğenme" class="dislike {%= (voted === 'down' ? 'voted' : '') %}">
                                            <svg class="icon">
                                                <use xlink:href="{{ asset("images/sprite.svg") }}#dislike" />
                                            </svg>
                                            <span class="dislikes" data-votes="{%= dislikes %}">
                                                {%= dislikes || '' %}
                                            </span>
                                        </a>
                                    </div>
                                    {% if (reply) { %}
                                    <a href="#" class="reply" data-parent="{%= id %}" data-root="{%= parent_id || id %}">Reply</a>
                                    {% } %}

                                    {% if (edit) { %}
                                    <a href="#" class="quick-edit">Edit</a>
                                    {% } %}
                                </div>
                                <div class="replybox"></div>
                            </div>
                        </div>
                        <ul class="list-comments children" data-parent="{%= id %}"></ul>
                    </li>
                </script>
                <script id="paginationTemplate" type="text/template">
                    <ul class="pagination pagination-sm">
                        <li {% if (current_page === 1) { %} class="disabled page-item" {% } %}>
                            <a href="#!page={%= prev_page %}" data-page="{%= prev_page %}" title="Prev" class="page-link">&laquo;</a>
                        </li>

                        {% if (first_adjacent_page > 1) { %}
                            <li class="page-item">
                                <a href="#!page=1" data-page="1" class="page-link">1</a>
                            </li>
                            {% if (first_adjacent_page > 2) { %}
                               <li class="disabled"><a class="page-link">...</a></li>
                            {% } %}
                        {% } %}

                        {% for (var i = first_adjacent_page; i <= last_adjacent_page; i++) { %}
                            <li class="page-item {% if (current_page === i) { %} active {% } %}">
                                <a href="#!page={%= i %}" data-page="{%= i %}" class="page-link">{%= i %}</a>
                            </li>
                        {% } %}

                        {% if (last_adjacent_page < last_page) { %}
                            {% if (last_adjacent_page < last_page - 1) { %}
                                <li class="disabled page-item"><a class="page-link">...</a></li>
                            {% } %}
                            <li class="page-item"><a href="#!page={%= last_page %}" data-page="{%= last_page %}" class="page-link">{%= last_page %}</a></li>
                        {% } %}

                        <li class="page-item {% if (current_page === last_page) { %} class="disabled" {% } %}">
                            <a href="#!page={%= next_page %}" data-page="{%= next_page %}" title="Next" class="page-link">&raquo</a>
                        </li>
                    </ul>
                </script>
                <script id="alertTemplate" type="text/template">
                    <div class="alert bg-warning-lt text-12 my-2">
                        {% if (typeof message === 'object') { %}

                                {% for (var i in message) { %}
                                    <div>{%= message[i] %}</div>
                                {% } %}

                        {% } else { %}
                            {%= message %}
                        {% } %}
                    </div>
                </script>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/plyr.hls.js') }}"></script>
    <script src="{{ asset('js/plyr.js') }}"></script>
    <script src="{{ asset('js/jquery.comment.js') }}"></script>
    <script src="{{ asset('js/detail.js') }}"></script>
@endsection
