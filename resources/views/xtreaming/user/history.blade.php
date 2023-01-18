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
                    <div class="layout-heading mb-3 text-muted d-flex align-items-center">
                        <h3 class="fs-lg fw-bold mb-0">
                            Watch history </h3>
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
                        <div class="col-lg-3">
                            <a href="https://demo.codelug.com/xtreaming/serie/pantanal" class="card card-movie">
                                <div class="card-overlay">
                                    <picture>
                                        <source
                                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/t7R0lHIbAA.webp"
                                            type="image/webp" class="img-fluid"
                                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/t7R0lHIbAA.webp">
                                        <source
                                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/t7R0lHIbAA.png"
                                            type="image/png" class="img-fluid rounded-1"
                                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/t7R0lHIbAA.png">
                                        <img src="https://demo.codelug.com/xtreaming/public/upload/post/t7R0lHIbAA.png"
                                            data-src="https://demo.codelug.com/xtreaming/public/upload/post/t7R0lHIbAA.png"
                                            alt="" class="img-fluid rounded-1 ls-is-cached lazyloaded"
                                            width="250" height="375">
                                    </picture>
                                    <div class="card-imdb">
                                        <div>
                                            5.622 </div>
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
                                            Mar. 28, 2022 </li>
                                    </ul>
                                    <h3 class="title">
                                        Pantanal </h3>
                                    <h4 class="title_sub">
                                        Pantanal </h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a href="https://demo.codelug.com/xtreaming/serie/a-family-affair" class="card card-movie">
                                <div class="card-overlay">
                                    <picture>
                                        <source
                                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/HPmGlL3QiY.webp"
                                            type="image/webp" class="img-fluid"
                                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/HPmGlL3QiY.webp">
                                        <source
                                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/HPmGlL3QiY.png"
                                            type="image/png" class="img-fluid rounded-1"
                                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/HPmGlL3QiY.png">
                                        <img src="https://demo.codelug.com/xtreaming/public/upload/post/HPmGlL3QiY.png"
                                            data-src="https://demo.codelug.com/xtreaming/public/upload/post/HPmGlL3QiY.png"
                                            alt="" class="img-fluid rounded-1 ls-is-cached lazyloaded"
                                            width="250" height="375">
                                    </picture>
                                    <div class="card-imdb">
                                        <div>
                                            3.2 </div>
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
                                            Jun. 27, 2022 </li>
                                    </ul>
                                    <h3 class="title">
                                        A Family Affair </h3>
                                    <h4 class="title_sub">
                                        A Family Affair </h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a href="https://demo.codelug.com/xtreaming/serie/game-of-thrones" class="card card-movie">
                                <div class="card-overlay">
                                    <picture>
                                        <source
                                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/kcKF6P8BQH.webp"
                                            type="image/webp" class="img-fluid"
                                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/kcKF6P8BQH.webp">
                                        <source
                                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/kcKF6P8BQH.png"
                                            type="image/png" class="img-fluid rounded-1"
                                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/kcKF6P8BQH.png">
                                        <img src="https://demo.codelug.com/xtreaming/public/upload/post/kcKF6P8BQH.png"
                                            data-src="https://demo.codelug.com/xtreaming/public/upload/post/kcKF6P8BQH.png"
                                            alt="" class="img-fluid rounded-1 ls-is-cached lazyloaded"
                                            width="250" height="375">
                                    </picture>
                                    <div class="card-imdb">
                                        <div>
                                            8.423 </div>
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
                                            Apr. 17, 2011 </li>
                                    </ul>
                                    <h3 class="title">
                                        Game of Thrones </h3>
                                    <h4 class="title_sub">
                                        Game of Thrones </h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a href="https://demo.codelug.com/xtreaming/serie/peaky-blinders" class="card card-movie">
                                <div class="card-overlay">
                                    <picture>
                                        <source
                                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/egNy3srNqW.webp"
                                            type="image/webp" class="img-fluid"
                                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/egNy3srNqW.webp">
                                        <source
                                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/egNy3srNqW.png"
                                            type="image/png" class="img-fluid rounded-1"
                                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/egNy3srNqW.png">
                                        <img src="https://demo.codelug.com/xtreaming/public/upload/post/egNy3srNqW.png"
                                            data-src="https://demo.codelug.com/xtreaming/public/upload/post/egNy3srNqW.png"
                                            alt="" class="img-fluid rounded-1 ls-is-cached lazyloaded"
                                            width="250" height="375">
                                    </picture>
                                    <div class="card-imdb">
                                        <div>
                                            8.562 </div>
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
                                            Sep. 12, 2013 </li>
                                    </ul>
                                    <h3 class="title">
                                        Peaky Blinders </h3>
                                    <h4 class="title_sub">
                                        Peaky Blinders </h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a href="https://demo.codelug.com/xtreaming/serie/stranger-things" class="card card-movie">
                                <div class="card-overlay">
                                    <picture>
                                        <source
                                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/9SroQQJWVj.webp"
                                            type="image/webp" class="img-fluid"
                                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/9SroQQJWVj.webp">
                                        <source
                                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/9SroQQJWVj.png"
                                            type="image/png" class="img-fluid rounded-1"
                                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/9SroQQJWVj.png">
                                        <img src="https://demo.codelug.com/xtreaming/public/upload/post/9SroQQJWVj.png"
                                            data-src="https://demo.codelug.com/xtreaming/public/upload/post/9SroQQJWVj.png"
                                            alt="" class="img-fluid rounded-1 ls-is-cached lazyloaded"
                                            width="250" height="375">
                                    </picture>
                                    <div class="card-imdb">
                                        <div>
                                            8.635 </div>
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
                                            Jul. 15, 2016 </li>
                                    </ul>
                                    <h3 class="title">
                                        Stranger Things </h3>
                                    <h4 class="title_sub">
                                        Stranger Things </h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a href="https://demo.codelug.com/xtreaming/serie/the-boys" class="card card-movie">
                                <div class="card-overlay">
                                    <picture>
                                        <source
                                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/eYanjetTF6.webp"
                                            type="image/webp" class="img-fluid"
                                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/eYanjetTF6.webp">
                                        <source
                                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/eYanjetTF6.png"
                                            type="image/png" class="img-fluid rounded-1"
                                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/eYanjetTF6.png">
                                        <img src="https://demo.codelug.com/xtreaming/public/upload/post/eYanjetTF6.png"
                                            data-src="https://demo.codelug.com/xtreaming/public/upload/post/eYanjetTF6.png"
                                            alt="" class="img-fluid rounded-1 ls-is-cached lazyloaded"
                                            width="250" height="375">
                                    </picture>
                                    <div class="card-imdb">
                                        <div>
                                            8.471 </div>
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
                                            Jul. 25, 2019 </li>
                                    </ul>
                                    <h3 class="title">
                                        The Boys </h3>
                                    <h4 class="title_sub">
                                        The Boys </h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
