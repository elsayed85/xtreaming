@extends('layouts.app')
@section('main')
    <div class="layout-section">
        <ol class="breadcrumb d-inline-flex text-muted mb-3">
            <li class="breadcrumb-item"><a href="https://demo.codelug.com/xtreaming/series">
                    Episode</a></li>
            <li class="breadcrumb-item active" aria-current="page">
                The Lord of the Rings: The Rings of Power </li>
        </ol>
        <div class="row gx-lg-4 gx-0">
            <div class="col-lg">
                <div class="mb-4">
                    <div class="ratio ratio-16x9 rounded overflow-hidden">
                        <div class="embed-responsive-item ratio-embed"></div>
                    </div>
                    <div class="card-stream mt-2 ">
                        <button class="btn btn-stream btn-ghost btn-sm me-1 active" data-id="355">
                            Stream #1</button>
                        <button class="btn btn-stream btn-ghost btn-sm me-1 " data-id="356">
                            Stream #2</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-auto">
                <div class="w-lg-300 d-none d-lg-block">
                    <div class="d-flex align-items-center flex-nowrap justify-content-between mb-3">
                        <a href="https://demo.codelug.com/xtreaming/serie/the-lord-of-the-rings-the-rings-of-power-1-season-1-episode"
                            class="btn btn-square btn-ghost rounded-circle">
                            <svg width="18" height="18" stroke="currentColor" fill="none" stroke-width="2">
                                <use xlink:href="{{ asset('images/icons.svg') }}#prev" />
                            </svg>
                        </a>
                        <div class="fw-semibold fs-sm">
                            Episodes of the TV Show </div>
                        <a href="https://demo.codelug.com/xtreaming/serie/the-lord-of-the-rings-the-rings-of-power-1-season-3-episode"
                            class="btn btn-square btn-ghost rounded-circle">
                            <svg width="18" height="18" stroke="currentColor" fill="none" stroke-width="2">
                                <use xlink:href="{{ asset('images/icons.svg') }}#next" />
                            </svg>
                        </a>
                    </div>
                    <ul class="card-episode-nav">
                        <li><a href="https://demo.codelug.com/xtreaming/serie/the-lord-of-the-rings-the-rings-of-power-1-season-1-episode"
                                title="The Lord of the Rings: The Rings of Power 1. Season 1. Episode">
                                1</a></li>
                        <li><a href="https://demo.codelug.com/xtreaming/serie/the-lord-of-the-rings-the-rings-of-power-1-season-2-episode"
                                class="active" title="The Lord of the Rings: The Rings of Power 1. Season 2. Episode">
                                2</a></li>
                        <li><a href="https://demo.codelug.com/xtreaming/serie/the-lord-of-the-rings-the-rings-of-power-1-season-3-episode"
                                title="The Lord of the Rings: The Rings of Power 1. Season 3. Episode">
                                3</a></li>
                        <li><a href="https://demo.codelug.com/xtreaming/serie/the-lord-of-the-rings-the-rings-of-power-1-season-4-episode"
                                title="The Lord of the Rings: The Rings of Power 1. Season 4. Episode">
                                4</a></li>
                        <li><a href="https://demo.codelug.com/xtreaming/serie/the-lord-of-the-rings-the-rings-of-power-1-season-5-episode"
                                title="The Lord of the Rings: The Rings of Power 1. Season 5. Episode">
                                5</a></li>
                        <li><a href="https://demo.codelug.com/xtreaming/serie/the-lord-of-the-rings-the-rings-of-power-1-season-6-episode"
                                title="The Lord of the Rings: The Rings of Power 1. Season 6. Episode">
                                6</a></li>
                        <li><a href="https://demo.codelug.com/xtreaming/serie/the-lord-of-the-rings-the-rings-of-power-1-season-7-episode"
                                title="The Lord of the Rings: The Rings of Power 1. Season 7. Episode">
                                7</a></li>
                        <li><a href="https://demo.codelug.com/xtreaming/serie/the-lord-of-the-rings-the-rings-of-power-1-season-8-episode"
                                title="The Lord of the Rings: The Rings of Power 1. Season 8. Episode">
                                8</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="post-toolbar">
            <ul data-ajax-tab="">
                <li>
                    <a href="https://demo.codelug.com/xtreaming/serie/the-lord-of-the-rings-the-rings-of-power"
                        data-url="https://demo.codelug.com/xtreaming/serie/the-lord-of-the-rings-the-rings-of-power/overview?ajax=true"
                        class="active">Overview</a>
                </li>
                <li>
                    <a href="https://demo.codelug.com/xtreaming/serie/the-lord-of-the-rings-the-rings-of-power-1-season-2-episode/comments"
                        data-url="https://demo.codelug.com/xtreaming/serie/the-lord-of-the-rings-the-rings-of-power-1-season-2-episode/comments?ajax=true"
                        class="">Comment<span class="ms-2 fs-xs opacity-50">0</span></a>
                </li>
                <li class="mx-xl-3"></li>
                <li>
                    <a href="https://demo.codelug.com/xtreaming/serie/the-lord-of-the-rings-the-rings-of-power-1-season-2-episode/subtitle"
                        data-url="https://demo.codelug.com/xtreaming/serie/the-lord-of-the-rings-the-rings-of-power-1-season-2-episode/subtitle?ajax=true"
                        class="">Subtitle</a>
                </li>
                <li>
                    <a href="https://demo.codelug.com/xtreaming/serie/the-lord-of-the-rings-the-rings-of-power-1-season-2-episode/download"
                        data-url="https://demo.codelug.com/xtreaming/serie/the-lord-of-the-rings-the-rings-of-power-1-season-2-episode/download?ajax=true"
                        class="">Download</a>
                </li>
            </ul>
        </div>
        <div class="layout-section pt-2">
            <div class="layout-tab-content">
                <div class="row gx-xl-5">
                    <div class="col-md-auto">
                        <div class="w-md-200 w-150px mb-3 d-none d-lg-block mx-auto">
                            <picture>
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/bwhMUEDcC9.webp"
                                    type="image/webp" class="img-fluid"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/bwhMUEDcC9.webp">
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/bwhMUEDcC9.png"
                                    type="image/png" class="img-fluid rounded-1"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/bwhMUEDcC9.png">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="https://demo.codelug.com/xtreaming/public/upload/post/bwhMUEDcC9.png"
                                    alt="" class="lazyload img-fluid rounded-1" width="250" height="375">
                            </picture>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="row gx-lg-5">
                            <div class="col-lg">
                                <ul class="list-inline list-separator fs-xs text-gray-500 mb-1">
                                    <li class="list-inline-item">
                                        Sep. 01, 2022 </li>
                                </ul>
                                <h1 class="h3 fw-semibold mb-1">
                                    The Lord of the Rings: The Rings of Power <span class="h5 ms-2 fw-semibold">Season: 1,
                                        Episode: 2</span>
                                </h1>
                                <h2 class="fs-base fw-normal text-muted mb-2">
                                    The Lord of the Rings: The Rings of Power </h2>
                                <div class="mb-3 d-flex align-items-center mt-2 mt-md-0">
                                    <button class="btn btn-ghost rounded-pill me-2 px-xl-4" data-bs-toggle="modal"
                                        data-bs-target="#xl"
                                        data-remote="https://demo.codelug.com/xtreaming/modal/trailer?link=https://www.youtube.com/embed/aqz-KE-bpKQ">
                                        Watch trailer</button>
                                </div>
                            </div>
                            <div class="col-md-auto">
                                <div class="w-100 w-lg-150px mt-2 mt-lg-0">
                                    <div class="text-lg-end">
                                        <div class="fs-sm">
                                            32.8 K view </div>
                                        <div class="progress bg-gray-200 mt-2" style="height: 6px;">
                                            <div class="progress-bar bg-theme rounded-pill" role="progressbar"
                                                style="width: 100%" aria-valuenow="0" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                        <div class="mt-3 mb-3">
                                            <button class="btn btn-square btn-ghost rounded-circle btn-reaction btn-like "
                                                data-id="22">
                                                <svg width="20" height="20" fill="currentColor">
                                                    <use
                                                        xlink:href="{{ asset('images/icons.svg') }}#like">
                                                    </use>
                                                </svg>
                                                <span class="like-count" data-votes="1">
                                                    1</span>
                                            </button>
                                            <button
                                                class="btn btn-square btn-ghost rounded-circle btn-reaction btn-dislike ms-1 "
                                                data-id="22">
                                                <svg width="18" height="18" fill="currentColor">
                                                    <use
                                                        xlink:href="{{ asset('images/icons.svg') }}#dislike">
                                                    </use>
                                                </svg>
                                                <span class="dislike-count" data-votes="0">
                                                    0</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fs-xs text-muted">
                            Category </div>
                        <div class="card-tag mb-3">
                            <a href="https://demo.codelug.com/xtreaming/explore?genre=7">
                                Drama</a>
                        </div>
                        <p class="text-muted fs-sm" data-more="" data-limit="200">
                            Beginning in a time of relative peace, we follow an ensemble cast of
                            characters as they confront the re-emergence of evil to Middle-earth. From
                            the darkest depths of the Misty Mountains, to the majestic forests of
                            Lindon, to the breathtaking island kingdom of Númenor, to the furthest
                            reaches of the map, these kingdoms and characters will carve out legacies
                            that live on long after they are gone. </p>
                        <div class="card-tags">
                            <a href="https://demo.codelug.com/xtreaming/tag/based+on+novel+or+book" class="">
                                based on novel or book</a>
                            <a href="https://demo.codelug.com/xtreaming/tag/based+on+movie" class="">
                                based on movie</a>
                            <a href="https://demo.codelug.com/xtreaming/tag/high+fantasy" class="">
                                high fantasy</a>
                            <a href="https://demo.codelug.com/xtreaming/tag/sword+and+sorcery" class="">
                                sword and sorcery</a>
                            <a href="https://demo.codelug.com/xtreaming/tag/middle-earth" class="">
                                middle-earth</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="layout-section">
            <div class="layout-heading mb-3">
                <h3 class="layout-title fw-semibold fs-lg">
                    Recommended For You </h3>
            </div>
            <div class="row row-cols-xxl-8 row-cols-lg-6 row-cols-2">
                <div class="col-lg-2">
                    <a href="https://demo.codelug.com/xtreaming/movie/samaritan" class="card card-movie">
                        <div class="card-overlay">
                            <picture>
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/ailZSgtrYi.webp"
                                    type="image/webp" class="img-fluid"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/ailZSgtrYi.webp">
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/ailZSgtrYi.png"
                                    type="image/png" class="img-fluid rounded-1"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/ailZSgtrYi.png">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="https://demo.codelug.com/xtreaming/public/upload/post/ailZSgtrYi.png"
                                    alt="" class="lazyload img-fluid rounded-1" width="250" height="375">
                            </picture>
                            <div class="card-imdb">
                                <div>
                                    6.916 </div>
                                <svg x="0px" y="0px" width="36px" height="36px" viewBox="0 0 36 36">
                                    <circle fill="none" stroke-width="1" cx="18" cy="18"
                                        r="16" stroke-dasharray="77 100" stroke-dashoffset="0"
                                        transform="rotate(-90 18 18)"></circle>
                                </svg>
                            </div>
                            <div class="card-play"></div>
                        </div>
                        <div class="card-body">
                            <ul class="list-inline list-separator fs-xs text-muted mb-1">
                                <li class="list-inline-item">
                                    Drama </li>
                                <li class="list-inline-item">
                                    Aug. 25, 2022 </li>
                            </ul>
                            <h3 class="title">
                                Samaritan </h3>
                            <h4 class="title_sub">
                                Samaritan </h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a href="https://demo.codelug.com/xtreaming/movie/after-ever-happy" class="card card-movie">
                        <div class="card-overlay">
                            <picture>
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/plV3C2b36U.webp"
                                    type="image/webp" class="img-fluid"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/plV3C2b36U.webp">
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/plV3C2b36U.png"
                                    type="image/png" class="img-fluid rounded-1"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/plV3C2b36U.png">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="https://demo.codelug.com/xtreaming/public/upload/post/plV3C2b36U.png"
                                    alt="" class="lazyload img-fluid rounded-1" width="250" height="375">
                            </picture>
                            <div class="card-imdb">
                                <div>
                                    6.485 </div>
                                <svg x="0px" y="0px" width="36px" height="36px" viewBox="0 0 36 36">
                                    <circle fill="none" stroke-width="1" cx="18" cy="18"
                                        r="16" stroke-dasharray="77 100" stroke-dashoffset="0"
                                        transform="rotate(-90 18 18)"></circle>
                                </svg>
                            </div>
                            <div class="card-play"></div>
                        </div>
                        <div class="card-body">
                            <ul class="list-inline list-separator fs-xs text-muted mb-1">
                                <li class="list-inline-item">
                                    Drama </li>
                                <li class="list-inline-item">
                                    Aug. 24, 2022 </li>
                            </ul>
                            <h3 class="title">
                                After Ever Happy </h3>
                            <h4 class="title_sub">
                                After Ever Happy </h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a href="https://demo.codelug.com/xtreaming/movie/top-gun-maverick" class="card card-movie">
                        <div class="card-overlay">
                            <picture>
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/LnwJa8zxE2.webp"
                                    type="image/webp" class="img-fluid"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/LnwJa8zxE2.webp">
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/LnwJa8zxE2.png"
                                    type="image/png" class="img-fluid rounded-1"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/LnwJa8zxE2.png">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="https://demo.codelug.com/xtreaming/public/upload/post/LnwJa8zxE2.png"
                                    alt="" class="lazyload img-fluid rounded-1" width="250" height="375">
                            </picture>
                            <div class="card-imdb">
                                <div>
                                    8.377 </div>
                                <svg x="0px" y="0px" width="36px" height="36px" viewBox="0 0 36 36">
                                    <circle fill="none" stroke-width="1" cx="18" cy="18"
                                        r="16" stroke-dasharray="77 100" stroke-dashoffset="0"
                                        transform="rotate(-90 18 18)"></circle>
                                </svg>
                            </div>
                            <div class="card-play"></div>
                        </div>
                        <div class="card-body">
                            <ul class="list-inline list-separator fs-xs text-muted mb-1">
                                <li class="list-inline-item">
                                    Drama </li>
                                <li class="list-inline-item">
                                    May. 24, 2022 </li>
                            </ul>
                            <h3 class="title">
                                Top Gun: Maverick </h3>
                            <h4 class="title_sub">
                                Top Gun: Maverick </h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a href="https://demo.codelug.com/xtreaming/movie/the-next-365-days" class="card card-movie">
                        <div class="card-overlay">
                            <picture>
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/aIRzeHI1nV.webp"
                                    type="image/webp" class="img-fluid"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/aIRzeHI1nV.webp">
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/aIRzeHI1nV.png"
                                    type="image/png" class="img-fluid rounded-1"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/aIRzeHI1nV.png">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="https://demo.codelug.com/xtreaming/public/upload/post/aIRzeHI1nV.png"
                                    alt="" class="lazyload img-fluid rounded-1" width="250" height="375">
                            </picture>
                            <div class="card-imdb">
                                <div>
                                    6.886 </div>
                                <svg x="0px" y="0px" width="36px" height="36px" viewBox="0 0 36 36">
                                    <circle fill="none" stroke-width="1" cx="18" cy="18"
                                        r="16" stroke-dasharray="77 100" stroke-dashoffset="0"
                                        transform="rotate(-90 18 18)"></circle>
                                </svg>
                            </div>
                            <div class="card-play"></div>
                        </div>
                        <div class="card-body">
                            <ul class="list-inline list-separator fs-xs text-muted mb-1">
                                <li class="list-inline-item">
                                    Drama </li>
                                <li class="list-inline-item">
                                    Aug. 19, 2022 </li>
                            </ul>
                            <h3 class="title">
                                The Next 365 Days </h3>
                            <h4 class="title_sub">
                                Kolejne 365 dni </h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('after_js')
<script src="{{ asset('js/jquery.tmpl.js') }}"></script>
<script src="{{ asset('js/jquery.comment.js') }}"></script>
<script src="{{ asset('js/jquery.lightbox.js') }}"></script>
<script src="{{ asset('js/video.min.js') }}"></script>
<script src="{{ asset('js/ads.min.js') }}"></script>
<script src="{{ asset('js/youtube.min.js') }}"></script>
<script src="{{ asset('js/ima.js') }}"></script>
@endsection
