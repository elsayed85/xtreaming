@extends('layouts.app')
@section('main')
    <div class="layout-section">
        <ol class="breadcrumb d-inline-flex text-muted mb-3">
            <li class="breadcrumb-item"><a href="https://demo.codelug.com/xtreaming/movies">
                    Movies</a></li>
            <li class="breadcrumb-item active" aria-current="page">
                Day Shift </li>
        </ol>
        <div class="row gx-lg-4 gx-0">
            <div class="col-lg">
                <div class="mb-4">
                    <div class="ratio ratio-16x9 rounded ratio-trailer overflow-hidden">
                        <video id="trailer" class="video-js vjs-default-skin" controls
                            data-setup='{ "techOrder": ["youtube"], "poster":"", "sources": [{ "type": "video/youtube", "src": "https://www.youtube.com/embed/GN_IwBptKi4"}], "youtube": { "customVars": { "wmode": "transparent" ,"iv_load_policy": 1,"ytControls": 0} } }'></video>
                    </div>
                </div>
            </div>
        </div>
        <div class="post-toolbar">
            <ul data-ajax-tab="">
                <li>
                    <a href="https://demo.codelug.com/xtreaming/movie/day-shift"
                        data-url="https://demo.codelug.com/xtreaming/movie/day-shift/overview?ajax=true"
                        class="active">Overview</a>
                </li>
                <li>
                    <a href="https://demo.codelug.com/xtreaming/movie/day-shift/casting"
                        data-url="https://demo.codelug.com/xtreaming/movie/day-shift/casting?ajax=true"
                        class="">Casting</a>
                </li>
                <li>
                    <a href="https://demo.codelug.com/xtreaming/movie/day-shift/comments"
                        data-url="https://demo.codelug.com/xtreaming/movie/day-shift/comments?ajax=true"
                        class="">Comment<span class="ms-2 fs-xs opacity-50">0</span></a>
                </li>
                <li class="mx-xl-3"></li>
                <li>
                    <a href="https://demo.codelug.com/xtreaming/movie/day-shift/subtitle"
                        data-url="https://demo.codelug.com/xtreaming/movie/day-shift/subtitle?ajax=true"
                        class="">Subtitle</a>
                </li>
                <li>
                    <a href="https://demo.codelug.com/xtreaming/movie/day-shift/multimedia"
                        data-url="https://demo.codelug.com/xtreaming/movie/day-shift/multimedia?ajax=true"
                        class="">Multimedia</a>
                </li>
                <li>
                    <a href="https://demo.codelug.com/xtreaming/movie/day-shift/download"
                        data-url="https://demo.codelug.com/xtreaming/movie/day-shift/download?ajax=true"
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
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/HqKDuWvcm7.webp"
                                    type="image/webp" class="img-fluid"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/HqKDuWvcm7.webp">
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/HqKDuWvcm7.png"
                                    type="image/png" class="img-fluid rounded-1"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/HqKDuWvcm7.png">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="https://demo.codelug.com/xtreaming/public/upload/post/HqKDuWvcm7.png"
                                    alt="" class="lazyload img-fluid rounded-1" width="250" height="375">
                            </picture>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="row gx-lg-5">
                            <div class="col-lg">
                                <ul class="list-inline list-separator fs-xs text-gray-500 mb-1">
                                    <li class="list-inline-item"><a href="" class="text-current fw-semibold">
                                            United States Of America</a></li>
                                    <li class="list-inline-item">
                                        Aug. 10, 2022 </li>
                                    <li class="list-inline-item">
                                        1 hr 53 min </li>
                                </ul>
                                <h1 class="h3 fw-semibold mb-1">
                                    Day Shift </h1>
                                <h2 class="fs-base fw-normal text-muted mb-2">
                                    Day Shift </h2>
                                <div class="mb-3 d-flex align-items-center mt-2 mt-md-0">
                                    <button class="btn btn-ghost rounded-pill me-2 px-xl-4" data-bs-toggle="modal"
                                        data-bs-target="#xl"
                                        data-remote="https://demo.codelug.com/xtreaming/modal/trailer?link=https://www.youtube.com/embed/GN_IwBptKi4">
                                        Watch trailer</button>
                                </div>
                            </div>
                            <div class="col-md-auto">
                                <div class="w-100 w-lg-150px mt-2 mt-lg-0">
                                    <div class="text-lg-end">
                                        <div class="fs-sm">
                                            136 view </div>
                                        <div class="progress bg-gray-200 mt-2" style="height: 6px;">
                                            <div class="progress-bar bg-theme rounded-pill" role="progressbar"
                                                style="width: 100%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>
                                        <div class="mt-3 mb-3">
                                            <button class="btn btn-square btn-ghost rounded-circle btn-reaction btn-like "
                                                data-id="7">
                                                <svg width="16" height="16" fill="currentColor">
                                                    <use xlink:href="{{ asset('images/icons.svg') }}#like">
                                                    </use>
                                                </svg>
                                                <span class="like-count" data-votes="0">
                                                    0</span>
                                            </button>
                                            <button
                                                class="btn btn-square btn-ghost rounded-circle btn-reaction btn-dislike ms-1 "
                                                data-id="7">
                                                <svg width="16" height="16" fill="currentColor">
                                                    <use xlink:href="{{ asset('images/icons.svg') }}#dislike">
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
                            <a href="https://demo.codelug.com/xtreaming/explore?genre=1">
                                Action</a>
                            <a href="https://demo.codelug.com/xtreaming/explore?genre=4">
                                Comedy</a>
                            <a href="https://demo.codelug.com/xtreaming/explore?genre=9">
                                Fantasy</a>
                            <a href="https://demo.codelug.com/xtreaming/explore?genre=11">
                                Horror</a>
                        </div>
                        <p class="text-muted fs-sm" data-more="" data-limit="200">
                            An LA vampire hunter has a week to come up with the cash to pay for his
                            kid's tuition and braces. Trying to make a living these days just might kill
                            him. </p>
                        <div class="card-tags">
                            <a href="https://demo.codelug.com/xtreaming/tag/vampire+hunter" class="">
                                vampire hunter</a>
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
            <div class="row row-cols-xxl-6 row-cols-md-4 row-cols-2">
                <div class="col-lg-2">
                    <a href="https://demo.codelug.com/xtreaming/movie/office-invasion" class="card card-movie">
                        <div class="card-overlay">
                            <picture>
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/LNjw2xfL3L.webp"
                                    type="image/webp" class="img-fluid"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/LNjw2xfL3L.webp">
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/LNjw2xfL3L.png"
                                    type="image/png" class="img-fluid rounded-1"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/LNjw2xfL3L.png">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="https://demo.codelug.com/xtreaming/public/upload/post/LNjw2xfL3L.png"
                                    alt="" class="lazyload img-fluid rounded-1" width="250" height="375">
                            </picture>
                            <div class="card-imdb">
                                <div>
                                    5.903 </div>
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
                                    Action </li>
                                <li class="list-inline-item">
                                    Aug. 10, 2022 </li>
                            </ul>
                            <h3 class="title">
                                Office Invasion </h3>
                            <h4 class="title_sub">
                                Office Invasion </h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a href="https://demo.codelug.com/xtreaming/movie/black-site" class="card card-movie">
                        <div class="card-overlay">
                            <picture>
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/0wvDyaGmQP.webp"
                                    type="image/webp" class="img-fluid"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/0wvDyaGmQP.webp">
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/0wvDyaGmQP.png"
                                    type="image/png" class="img-fluid rounded-1"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/0wvDyaGmQP.png">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="https://demo.codelug.com/xtreaming/public/upload/post/0wvDyaGmQP.png"
                                    alt="" class="lazyload img-fluid rounded-1" width="250" height="375">
                            </picture>
                            <div class="card-imdb">
                                <div>
                                    7.068 </div>
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
                                    Action </li>
                                <li class="list-inline-item">
                                    May. 05, 2022 </li>
                            </ul>
                            <h3 class="title">
                                Black Site </h3>
                            <h4 class="title_sub">
                                Black Site </h4>
                        </div>
                    </a>
                </div>
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
                                    Action </li>
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
                    <a href="https://demo.codelug.com/xtreaming/movie/sniper-rogue-mission" class="card card-movie">
                        <div class="card-overlay">
                            <picture>
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/HiSVcgm1Ga.webp"
                                    type="image/webp" class="img-fluid"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/HiSVcgm1Ga.webp">
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/HiSVcgm1Ga.png"
                                    type="image/png" class="img-fluid rounded-1"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/HiSVcgm1Ga.png">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="https://demo.codelug.com/xtreaming/public/upload/post/HiSVcgm1Ga.png"
                                    alt="" class="lazyload img-fluid rounded-1" width="250" height="375">
                            </picture>
                            <div class="card-imdb">
                                <div>
                                    6.935 </div>
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
                                    Action </li>
                                <li class="list-inline-item">
                                    Aug. 15, 2022 </li>
                            </ul>
                            <h3 class="title">
                                Sniper: Rogue Mission </h3>
                            <h4 class="title_sub">
                                Sniper: Rogue Mission </h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a href="https://demo.codelug.com/xtreaming/movie/prey" class="card card-movie">
                        <div class="card-overlay">
                            <picture>
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/7fZMjEAx7T.webp"
                                    type="image/webp" class="img-fluid"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/7fZMjEAx7T.webp">
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/7fZMjEAx7T.png"
                                    type="image/png" class="img-fluid rounded-1"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/7fZMjEAx7T.png">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="https://demo.codelug.com/xtreaming/public/upload/post/7fZMjEAx7T.png"
                                    alt="" class="lazyload img-fluid rounded-1" width="250" height="375">
                            </picture>
                            <div class="card-imdb">
                                <div>
                                    8.01 </div>
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
                                    Action </li>
                                <li class="list-inline-item">
                                    Aug. 02, 2022 </li>
                            </ul>
                            <h3 class="title">
                                Prey </h3>
                            <h4 class="title_sub">
                                Prey </h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a href="https://demo.codelug.com/xtreaming/movie/luck" class="card card-movie">
                        <div class="card-overlay">
                            <picture>
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/mdNJW3Up0a.webp"
                                    type="image/webp" class="img-fluid"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/mdNJW3Up0a.webp">
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/mdNJW3Up0a.png"
                                    type="image/png" class="img-fluid rounded-1"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/mdNJW3Up0a.png">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="https://demo.codelug.com/xtreaming/public/upload/post/mdNJW3Up0a.png"
                                    alt="" class="lazyload img-fluid rounded-1" width="250" height="375">
                            </picture>
                            <div class="card-imdb">
                                <div>
                                    8.072 </div>
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
                                    Comedy </li>
                                <li class="list-inline-item">
                                    Aug. 05, 2022 </li>
                            </ul>
                            <h3 class="title">
                                Luck </h3>
                            <h4 class="title_sub">
                                Luck </h4>
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
