@extends('layouts.app')
@section('main')
    <div class="layout-section">
        <ol class="breadcrumb text-muted mb-3">
            <li class="breadcrumb-item"><a href="https://demo.codelug.com/xtreaming">
                    Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">
                admin </li>
        </ol>
        <div class="row gx-xl-6 gx-lg-5">
            <div class="col-lg-4">
                <div class="card mb-3">
                    <div class="card-body p-lg-5">
                        <div class="text-center">
                            <div class="avatar avatar-2xl rounded-circle text-white mb-3 fs-lg"
                                style="background-color:#864bfc;">A</div>
                            <h1 class="mb-0 h4 fw-semibold">
                                Xtreaming Xtreaming <svg width="20" height="20" fill="var(--theme-color)"
                                    class="ms-1">
                                    <use
                                        xlink:href="{{ asset('images/icons.svg') }}#badge-check">
                                    </use>
                                </svg>
                            </h1>
                            <ul class="list-inline list-separator fs-xs text-muted mb-1">
                                <li class="list-inline-item">
                                    @admin </li>
                                <li class="list-inline-item">
                                    Joined Jun. 19, 2022 </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="layout-section">
                    <div class="row gx-lg-5 align-items-lg-center">
                        <div class="col-lg-auto">
                            <img src="https://demo.codelug.com/xtreaming/public/static/rank/4.svg" height="100">
                        </div>
                        <div class="col-lg">
                            <div class="h4 mb-1">
                                Enthusiast Level 4 </div>
                            <div class="fs-sm text-muted">
                                This player have exceeded 1270 xp</div>
                            <div class="progress mt-3 bg-gray-200" style="height: 12px;">
                                <div class="progress-bar bg-theme rounded-pill" role="progressbar" style="width: 27%"
                                    aria-valuenow="27" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="layout-section">
                    <div class="layout-heading mb-3 text-muted d-flex align-items-center">
                        <h3 class="fs-lg fw-bold mb-0">
                            Watch history </h3>
                        <a href="https://demo.codelug.com/xtreaming/user/admin/history" class="fs-sm text-current ms-auto">
                            View all</a>
                    </div>
                    <div class="row row-cols-2">
                        <div class="col-lg-3">
                            <a href="https://demo.codelug.com/xtreaming/serie/she-hulk-attorney-at-law"
                                class="card card-movie">
                                <div class="card-overlay">
                                    <picture>
                                        <source
                                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/CgbKaRC2H9.webp"
                                            type="image/webp" class="img-fluid"
                                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/CgbKaRC2H9.webp">
                                        <source
                                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/CgbKaRC2H9.png"
                                            type="image/png" class="img-fluid rounded-1"
                                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/CgbKaRC2H9.png">
                                        <img src="https://demo.codelug.com/xtreaming/public/upload/post/CgbKaRC2H9.png"
                                            data-src="https://demo.codelug.com/xtreaming/public/upload/post/CgbKaRC2H9.png"
                                            alt="" class="img-fluid rounded-1 ls-is-cached lazyloaded"
                                            width="250" height="375">
                                    </picture>
                                    <div class="card-imdb">
                                        <div>
                                            7.5 </div>
                                        <svg x="0px" y="0px" width="36px" height="36px"
                                            viewBox="0 0 36 36">
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
                                            Aug. 18, 2022 </li>
                                    </ul>
                                    <h3 class="title">
                                        She-Hulk: Attorney at Law </h3>
                                    <h4 class="title_sub">
                                        She-Hulk: Attorney at Law </h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a href="https://demo.codelug.com/xtreaming/serie/the-lord-of-the-rings-the-rings-of-power"
                                class="card card-movie">
                                <div class="card-overlay">
                                    <picture>
                                        <source
                                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/bwhMUEDcC9.webp"
                                            type="image/webp" class="img-fluid"
                                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/bwhMUEDcC9.webp">
                                        <source
                                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/bwhMUEDcC9.png"
                                            type="image/png" class="img-fluid rounded-1"
                                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/bwhMUEDcC9.png">
                                        <img src="https://demo.codelug.com/xtreaming/public/upload/post/bwhMUEDcC9.png"
                                            data-src="https://demo.codelug.com/xtreaming/public/upload/post/bwhMUEDcC9.png"
                                            alt="" class="img-fluid rounded-1 ls-is-cached lazyloaded"
                                            width="250" height="375">
                                    </picture>
                                    <div class="card-imdb">
                                        <div>
                                            7.4 </div>
                                        <svg x="0px" y="0px" width="36px" height="36px"
                                            viewBox="0 0 36 36">
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
                                            Sep. 01, 2022 </li>
                                    </ul>
                                    <h3 class="title">
                                        The Lord of the Rings: The Rings of Power </h3>
                                    <h4 class="title_sub">
                                        The Lord of the Rings: The Rings of Power </h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a href="https://demo.codelug.com/xtreaming/serie/house-of-the-dragon"
                                class="card card-movie">
                                <div class="card-overlay">
                                    <picture>
                                        <source
                                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/YEkUHipzkj.webp"
                                            type="image/webp" class="img-fluid"
                                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/YEkUHipzkj.webp">
                                        <source
                                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/YEkUHipzkj.png"
                                            type="image/png" class="img-fluid rounded-1"
                                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/YEkUHipzkj.png">
                                        <img src="https://demo.codelug.com/xtreaming/public/upload/post/YEkUHipzkj.png"
                                            data-src="https://demo.codelug.com/xtreaming/public/upload/post/YEkUHipzkj.png"
                                            alt="" class="img-fluid rounded-1 ls-is-cached lazyloaded"
                                            width="250" height="375">
                                    </picture>
                                    <div class="card-imdb">
                                        <div>
                                            8.817 </div>
                                        <svg x="0px" y="0px" width="36px" height="36px"
                                            viewBox="0 0 36 36">
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
                                            Aug. 21, 2022 </li>
                                    </ul>
                                    <h3 class="title">
                                        House of the Dragon </h3>
                                    <h4 class="title_sub">
                                        House of the Dragon </h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a href="https://demo.codelug.com/xtreaming/serie/the-sandman" class="card card-movie">
                                <div class="card-overlay">
                                    <picture>
                                        <source
                                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/5dv6eZGxyI.webp"
                                            type="image/webp" class="img-fluid"
                                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/5dv6eZGxyI.webp">
                                        <source
                                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/5dv6eZGxyI.png"
                                            type="image/png" class="img-fluid rounded-1"
                                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/5dv6eZGxyI.png">
                                        <img src="https://demo.codelug.com/xtreaming/public/upload/post/5dv6eZGxyI.png"
                                            data-src="https://demo.codelug.com/xtreaming/public/upload/post/5dv6eZGxyI.png"
                                            alt="" class="img-fluid rounded-1 ls-is-cached lazyloaded"
                                            width="250" height="375">
                                    </picture>
                                    <div class="card-imdb">
                                        <div>
                                            8.2 </div>
                                        <svg x="0px" y="0px" width="36px" height="36px"
                                            viewBox="0 0 36 36">
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
                                            Aug. 05, 2022 </li>
                                    </ul>
                                    <h3 class="title">
                                        The Sandman </h3>
                                    <h4 class="title_sub">
                                        The Sandman </h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a href="https://demo.codelug.com/xtreaming/serie/lucifer" class="card card-movie">
                                <div class="card-overlay">
                                    <picture>
                                        <source
                                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/cQ3Qb12u1r.webp"
                                            type="image/webp" class="img-fluid"
                                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/cQ3Qb12u1r.webp">
                                        <source
                                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/cQ3Qb12u1r.png"
                                            type="image/png" class="img-fluid rounded-1"
                                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/cQ3Qb12u1r.png">
                                        <img src="https://demo.codelug.com/xtreaming/public/upload/post/cQ3Qb12u1r.png"
                                            data-src="https://demo.codelug.com/xtreaming/public/upload/post/cQ3Qb12u1r.png"
                                            alt="" class="img-fluid rounded-1 ls-is-cached lazyloaded"
                                            width="250" height="375">
                                    </picture>
                                    <div class="card-imdb">
                                        <div>
                                            8.517 </div>
                                        <svg x="0px" y="0px" width="36px" height="36px"
                                            viewBox="0 0 36 36">
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
                                            Crime </li>
                                        <li class="list-inline-item">
                                            Jan. 25, 2016 </li>
                                    </ul>
                                    <h3 class="title">
                                        Lucifer </h3>
                                    <h4 class="title_sub">
                                        Lucifer </h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a href="https://demo.codelug.com/xtreaming/serie/the-secret-house" class="card card-movie">
                                <div class="card-overlay">
                                    <picture>
                                        <source
                                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/bEumEOmDYu.webp"
                                            type="image/webp" class="img-fluid"
                                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/bEumEOmDYu.webp">
                                        <source
                                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/bEumEOmDYu.png"
                                            type="image/png" class="img-fluid rounded-1"
                                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/bEumEOmDYu.png">
                                        <img src="https://demo.codelug.com/xtreaming/public/upload/post/bEumEOmDYu.png"
                                            data-src="https://demo.codelug.com/xtreaming/public/upload/post/bEumEOmDYu.png"
                                            alt="" class="img-fluid rounded-1 ls-is-cached lazyloaded"
                                            width="250" height="375">
                                    </picture>
                                    <div class="card-imdb">
                                        <div>
                                            5.25 </div>
                                        <svg x="0px" y="0px" width="36px" height="36px"
                                            viewBox="0 0 36 36">
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
                                            Apr. 11, 2022 </li>
                                    </ul>
                                    <h3 class="title">
                                        The Secret House </h3>
                                    <h4 class="title_sub">
                                        비밀의 집 </h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="layout-section">
                    <div class="layout-heading mb-3 text-muted d-flex align-items-center">
                        <h3 class="fs-lg fw-bold mb-0">
                            Collections </h3>
                        <a href="https://demo.codelug.com/xtreaming/user/admin/collection"
                            class="fs-sm text-current ms-auto">View all</a>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card card-collection h-100" style="background-color: #a43ff2">
                                <div class="card-body">
                                    <h3 class="title mb-1"><a
                                            href="https://demo.codelug.com/xtreaming/collection/the-best-tv-and-movies-to-watch-in-jun-3"
                                            class="text-white">
                                            The Best TV and Movies to Watch in Jun</a></h3>
                                    <ul class="list-inline mb-0 fs-xs text-white-50">
                                        <li class="list-inline-item"><a
                                                href="https://demo.codelug.com/xtreaming/user/admin"
                                                class="text-current fw-semibold">
                                                admin</a></li>
                                        <li class="list-inline-item">
                                            7 post avaible </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card card-collection h-100" style="background-color: #ffc933">
                                <div class="card-body">
                                    <h3 class="title mb-1"><a
                                            href="https://demo.codelug.com/xtreaming/collection/new-movies-to-be-released-in-2022-2"
                                            class="text-white">
                                            New movies to be released in 2022</a></h3>
                                    <ul class="list-inline mb-0 fs-xs text-white-50">
                                        <li class="list-inline-item"><a
                                                href="https://demo.codelug.com/xtreaming/user/admin"
                                                class="text-current fw-semibold">
                                                admin</a></li>
                                        <li class="list-inline-item">
                                            6 post avaible </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card card-collection h-100" style="background-color: #34cfbd">
                                <div class="card-body">
                                    <h3 class="title mb-1"><a
                                            href="https://demo.codelug.com/xtreaming/collection/everything-new-on-netflix-in-february-list-1"
                                            class="text-white">
                                            Everything New on Netflix in February list</a></h3>
                                    <ul class="list-inline mb-0 fs-xs text-white-50">
                                        <li class="list-inline-item"><a
                                                href="https://demo.codelug.com/xtreaming/user/admin"
                                                class="text-current fw-semibold">
                                                admin</a></li>
                                        <li class="list-inline-item">
                                            8 post avaible </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="layout-section">
                    <div class="layout-heading mb-3 text-muted d-flex align-items-center">
                        <h3 class="fs-lg fw-bold mb-0">
                            What I like </h3>
                        <a href="https://demo.codelug.com/xtreaming/user/admin/like" class="fs-sm text-current ms-auto">
                            View all</a>
                    </div>
                    <div class="row row-cols-2">
                        <div class="col-lg-3">
                            <a href="https://demo.codelug.com/xtreaming/movie/top-gun-maverick" class="card card-movie">
                                <div class="card-overlay">
                                    <picture>
                                        <source
                                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/LnwJa8zxE2.webp"
                                            type="image/webp" class="img-fluid"
                                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/LnwJa8zxE2.webp">
                                        <source
                                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/LnwJa8zxE2.png"
                                            type="image/png" class="img-fluid rounded-1"
                                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/LnwJa8zxE2.png">
                                        <img src="https://demo.codelug.com/xtreaming/public/upload/post/LnwJa8zxE2.png"
                                            data-src="https://demo.codelug.com/xtreaming/public/upload/post/LnwJa8zxE2.png"
                                            alt="" class="img-fluid rounded-1 ls-is-cached lazyloaded"
                                            width="250" height="375">
                                    </picture>
                                    <div class="card-imdb">
                                        <div>
                                            8.377 </div>
                                        <svg x="0px" y="0px" width="36px" height="36px"
                                            viewBox="0 0 36 36">
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
                                            May. 24, 2022 </li>
                                    </ul>
                                    <h3 class="title">
                                        Top Gun: Maverick </h3>
                                    <h4 class="title_sub">
                                        Top Gun: Maverick </h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a href="https://demo.codelug.com/xtreaming/serie/house-of-the-dragon"
                                class="card card-movie">
                                <div class="card-overlay">
                                    <picture>
                                        <source
                                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/YEkUHipzkj.webp"
                                            type="image/webp" class="img-fluid"
                                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/YEkUHipzkj.webp">
                                        <source
                                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/YEkUHipzkj.png"
                                            type="image/png" class="img-fluid rounded-1"
                                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/YEkUHipzkj.png">
                                        <img src="https://demo.codelug.com/xtreaming/public/upload/post/YEkUHipzkj.png"
                                            data-src="https://demo.codelug.com/xtreaming/public/upload/post/YEkUHipzkj.png"
                                            alt="" class="img-fluid rounded-1 ls-is-cached lazyloaded"
                                            width="250" height="375">
                                    </picture>
                                    <div class="card-imdb">
                                        <div>
                                            8.817 </div>
                                        <svg x="0px" y="0px" width="36px" height="36px"
                                            viewBox="0 0 36 36">
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
                                            Aug. 21, 2022 </li>
                                    </ul>
                                    <h3 class="title">
                                        House of the Dragon </h3>
                                    <h4 class="title_sub">
                                        House of the Dragon </h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a href="https://demo.codelug.com/xtreaming/movie/office-invasion" class="card card-movie">
                                <div class="card-overlay">
                                    <picture>
                                        <source
                                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/LNjw2xfL3L.webp"
                                            type="image/webp" class="img-fluid"
                                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/LNjw2xfL3L.webp">
                                        <source
                                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/LNjw2xfL3L.png"
                                            type="image/png" class="img-fluid rounded-1"
                                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/LNjw2xfL3L.png">
                                        <img src="https://demo.codelug.com/xtreaming/public/upload/post/LNjw2xfL3L.png"
                                            data-src="https://demo.codelug.com/xtreaming/public/upload/post/LNjw2xfL3L.png"
                                            alt="" class="img-fluid rounded-1 ls-is-cached lazyloaded"
                                            width="250" height="375">
                                    </picture>
                                    <div class="card-imdb">
                                        <div>
                                            5.903 </div>
                                        <svg x="0px" y="0px" width="36px" height="36px"
                                            viewBox="0 0 36 36">
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
                        <div class="col-lg-3">
                            <a href="https://demo.codelug.com/xtreaming/movie/black-site" class="card card-movie">
                                <div class="card-overlay">
                                    <picture>
                                        <source
                                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/0wvDyaGmQP.webp"
                                            type="image/webp" class="img-fluid"
                                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/0wvDyaGmQP.webp">
                                        <source
                                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/0wvDyaGmQP.png"
                                            type="image/png" class="img-fluid rounded-1"
                                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/0wvDyaGmQP.png">
                                        <img src="https://demo.codelug.com/xtreaming/public/upload/post/0wvDyaGmQP.png"
                                            data-src="https://demo.codelug.com/xtreaming/public/upload/post/0wvDyaGmQP.png"
                                            alt="" class="img-fluid rounded-1 ls-is-cached lazyloaded"
                                            width="250" height="375">
                                    </picture>
                                    <div class="card-imdb">
                                        <div>
                                            7.068 </div>
                                        <svg x="0px" y="0px" width="36px" height="36px"
                                            viewBox="0 0 36 36">
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
                        <div class="col-lg-3">
                            <a href="https://demo.codelug.com/xtreaming/serie/lucifer" class="card card-movie">
                                <div class="card-overlay">
                                    <picture>
                                        <source
                                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/cQ3Qb12u1r.webp"
                                            type="image/webp" class="img-fluid"
                                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/cQ3Qb12u1r.webp">
                                        <source
                                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/cQ3Qb12u1r.png"
                                            type="image/png" class="img-fluid rounded-1"
                                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/cQ3Qb12u1r.png">
                                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                            data-src="https://demo.codelug.com/xtreaming/public/upload/post/cQ3Qb12u1r.png"
                                            alt="" class="lazyload img-fluid rounded-1" width="250"
                                            height="375">
                                    </picture>
                                    <div class="card-imdb">
                                        <div>
                                            8.517 </div>
                                        <svg x="0px" y="0px" width="36px" height="36px"
                                            viewBox="0 0 36 36">
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
                                            Crime </li>
                                        <li class="list-inline-item">
                                            Jan. 25, 2016 </li>
                                    </ul>
                                    <h3 class="title">
                                        Lucifer </h3>
                                    <h4 class="title_sub">
                                        Lucifer </h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a href="https://demo.codelug.com/xtreaming/serie/the-secret-house" class="card card-movie">
                                <div class="card-overlay">
                                    <picture>
                                        <source
                                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/bEumEOmDYu.webp"
                                            type="image/webp" class="img-fluid"
                                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/bEumEOmDYu.webp">
                                        <source
                                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/bEumEOmDYu.png"
                                            type="image/png" class="img-fluid rounded-1"
                                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/bEumEOmDYu.png">
                                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                            data-src="https://demo.codelug.com/xtreaming/public/upload/post/bEumEOmDYu.png"
                                            alt="" class="lazyload img-fluid rounded-1" width="250"
                                            height="375">
                                    </picture>
                                    <div class="card-imdb">
                                        <div>
                                            5.25 </div>
                                        <svg x="0px" y="0px" width="36px" height="36px"
                                            viewBox="0 0 36 36">
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
                                            Apr. 11, 2022 </li>
                                    </ul>
                                    <h3 class="title">
                                        The Secret House </h3>
                                    <h4 class="title_sub">
                                        비밀의 집 </h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
