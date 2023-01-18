@extends('layouts.app')
@section('main')
    <div class="layout-section">
        <ol class="breadcrumb d-inline-flex text-muted mb-2">
            <li class="breadcrumb-item"><a href="https://demo.codelug.com/xtreaming">
                    Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">
                Explore </li>
        </ol>
        <div id="content">
            <input type="hidden" name="_PAGE" value="https://demo.codelug.com/xtreaming/explore">
            <div class="layout-filter">
                <h1 class="mb-0 h3">
                    Explore </h1>
                <form method="post" action="https://demo.codelug.com/xtreaming/explore"
                    class="flex-fill d-flex align-items-center ms-xl-5 ms-md-4" data-form="ajax">
                    <input type="hidden" name="_TOKEN"
                        value="JDJ5JDEwJFU3b3Z2SzNlRDhwbjU0R2pZTko4WE8yYWhEU3BhNnd0a0NmYnI0cDlsZzR1aEV5cENWU0NH">
                    <input type="hidden" name="_ACTION" value="filter">
                    <div class="dropdown-filter">
                        <div class="dropdown-toggle " role="button" id="filter-type" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside">
                            <div class="dropdown-value">
                                Genre </div>
                            <div class="dropdown-btn"></div>
                        </div>
                        <div class="dropdown-menu dropdown-menu-lg border-0 w-lg-300 p-4" aria-labelledby="filter-type">
                            <div class="form-category">
                                <label class="form-check">
                                    <input type="checkbox" name="genre[]" value="1" class="form-check-input">
                                    <span class="form-check-label">
                                        Action</span>
                                </label>
                                <label class="form-check">
                                    <input type="checkbox" name="genre[]" value="2" class="form-check-input">
                                    <span class="form-check-label">
                                        Adventure</span>
                                </label>
                                <label class="form-check">
                                    <input type="checkbox" name="genre[]" value="3" class="form-check-input">
                                    <span class="form-check-label">
                                        Animation</span>
                                </label>
                                <label class="form-check">
                                    <input type="checkbox" name="genre[]" value="4" class="form-check-input">
                                    <span class="form-check-label">
                                        Comedy</span>
                                </label>
                                <label class="form-check">
                                    <input type="checkbox" name="genre[]" value="5" class="form-check-input">
                                    <span class="form-check-label">
                                        Crime</span>
                                </label>
                                <label class="form-check">
                                    <input type="checkbox" name="genre[]" value="6" class="form-check-input">
                                    <span class="form-check-label">
                                        Documentary</span>
                                </label>
                                <label class="form-check">
                                    <input type="checkbox" name="genre[]" value="7" class="form-check-input">
                                    <span class="form-check-label">
                                        Drama</span>
                                </label>
                                <label class="form-check">
                                    <input type="checkbox" name="genre[]" value="8" class="form-check-input">
                                    <span class="form-check-label">
                                        Family</span>
                                </label>
                                <label class="form-check">
                                    <input type="checkbox" name="genre[]" value="9" class="form-check-input">
                                    <span class="form-check-label">
                                        Fantasy</span>
                                </label>
                                <label class="form-check">
                                    <input type="checkbox" name="genre[]" value="10" class="form-check-input">
                                    <span class="form-check-label">
                                        History</span>
                                </label>
                                <label class="form-check">
                                    <input type="checkbox" name="genre[]" value="11" class="form-check-input">
                                    <span class="form-check-label">
                                        Horror</span>
                                </label>
                                <label class="form-check">
                                    <input type="checkbox" name="genre[]" value="12" class="form-check-input">
                                    <span class="form-check-label">
                                        Music</span>
                                </label>
                                <label class="form-check">
                                    <input type="checkbox" name="genre[]" value="13" class="form-check-input">
                                    <span class="form-check-label">
                                        Mystery</span>
                                </label>
                                <label class="form-check">
                                    <input type="checkbox" name="genre[]" value="14" class="form-check-input">
                                    <span class="form-check-label">
                                        Romance</span>
                                </label>
                                <label class="form-check">
                                    <input type="checkbox" name="genre[]" value="15" class="form-check-input">
                                    <span class="form-check-label">
                                        Science Fiction</span>
                                </label>
                                <label class="form-check">
                                    <input type="checkbox" name="genre[]" value="16" class="form-check-input">
                                    <span class="form-check-label">
                                        TV Movie</span>
                                </label>
                                <label class="form-check">
                                    <input type="checkbox" name="genre[]" value="17" class="form-check-input">
                                    <span class="form-check-label">
                                        Thriller</span>
                                </label>
                                <label class="form-check">
                                    <input type="checkbox" name="genre[]" value="18" class="form-check-input">
                                    <span class="form-check-label">
                                        War</span>
                                </label>
                                <label class="form-check">
                                    <input type="checkbox" name="genre[]" value="19" class="form-check-input">
                                    <span class="form-check-label">
                                        Western</span>
                                </label>
                            </div>
                            <div class="mt-3 d-grid">
                                <button type="submit" class="btn btn-theme rounded-pill">
                                    Apply</button>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-filter">
                        <div class="dropdown-toggle " role="button" id="filter-type" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside">
                            <div class="dropdown-value">
                                Release date </div>
                            <div class="dropdown-btn"></div>
                        </div>
                        <div class="dropdown-menu dropdown-menu-md border-0 w-300 px-4 pb-3 pt-3"
                            aria-labelledby="filter-type">
                            <label class="form-label fs-xs text-muted">
                                Release date </label>
                            <input class="range-slider" type="text" name="released" value="" data-min="1960"
                                data-prettify-enabled="false" data-max="2023" data-from="1960" data-to="2023"
                                data-type="double" data-grid="true">
                            <div class="mt-3 d-grid">
                                <button type="submit" class="btn btn-theme rounded-pill">
                                    Apply</button>
                            </div>
                            <div class="text-muted d-flex align-items-center fs-xs mt-2">
                                <a href="https://demo.codelug.com/xtreaming/movies/?released=2022;2022"
                                    class="text-current p-2">This year</a>
                                <a href="https://demo.codelug.com/xtreaming/movies/?released=2021;2021"
                                    class="text-current p-2">Last year</a>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-filter">
                        <div class="dropdown-toggle " role="button" id="filter-type" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside">
                            <div class="dropdown-value">
                                Imdb </div>
                            <div class="dropdown-btn"></div>
                        </div>
                        <div class="dropdown-menu dropdown-menu-md border-0 w-300 px-4 pb-4 pt-3"
                            aria-labelledby="filter-type">
                            <label class="form-label fs-xs text-muted">
                                Imdb </label>
                            <input class="range-slider" type="text" name="imdb" value="" data-min="5"
                                data-prettify-enabled="false" data-max="10" data-from="5.0" data-to="10.0"
                                data-type="double" data-grid="true" data-step="0.1">
                            <div class="mt-3 d-grid">
                                <button type="submit" class="btn btn-theme rounded-pill">
                                    Apply</button>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-filter">
                        <div class="dropdown-toggle " role="button" id="filter-type" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside">
                            <div class="dropdown-value">
                                Sorting </div>
                            <div class="dropdown-btn"></div>
                        </div>
                        <div class="dropdown-menu border-0 w-200 px-3 pb-3 pt-3" aria-labelledby="filter-type">
                            <div class="form-radio">
                                <label class="form-check d-flex">
                                    <input type="radio" name="sorting" value="newest" class="form-check-input">
                                    <span class="form-check-label">
                                        Newest</span>
                                </label>
                                <label class="form-check d-flex">
                                    <input type="radio" name="sorting" value="popular" class="form-check-input">
                                    <span class="form-check-label">
                                        Most popular</span>
                                </label>
                                <label class="form-check d-flex">
                                    <input type="radio" name="sorting" value="released" class="form-check-input">
                                    <span class="form-check-label">
                                        Release date</span>
                                </label>
                                <label class="form-check d-flex">
                                    <input type="radio" name="sorting" value="imdb" class="form-check-input">
                                    <span class="form-check-label">
                                        Imdb rating</span>
                                </label>
                            </div>
                            <div class="mt-3 d-grid">
                                <button type="submit" class="btn btn-theme rounded-pill">
                                    Apply</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row row-cols-xxl-6 row-cols-md-4 row-cols-2" id="content">
                <div class="col-lg-2">
                    <a href="https://demo.codelug.com/xtreaming/serie/the-lord-of-the-rings-the-rings-of-power"
                        class="card card-movie">
                        <div class="card-overlay">
                            <picture>
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/GCpI9UIZnz.webp"
                                    type="image/webp" class="img-fluid"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/GCpI9UIZnz.webp">
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/GCpI9UIZnz.png"
                                    type="image/png" class="img-fluid rounded-1"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/GCpI9UIZnz.png">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="https://demo.codelug.com/xtreaming/public/upload/post/GCpI9UIZnz.png"
                                    alt="" class="lazyload img-fluid rounded-1" width="250" height="375">
                            </picture>
                            <div class="card-imdb">
                                <div>
                                    7.4 </div>
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
                                    2022 </li>
                            </ul>
                            <h3 class="title">
                                The Lord of the Rings: The Rings of Power </h3>
                            <h4 class="title_sub">
                                The Lord of the Rings: The Rings of Power </h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a href="https://demo.codelug.com/xtreaming/serie/the-secret-house" class="card card-movie">
                        <div class="card-overlay">
                            <picture>
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/bEumEOmDYu.webp"
                                    type="image/webp" class="img-fluid"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/bEumEOmDYu.webp">
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/bEumEOmDYu.png"
                                    type="image/png" class="img-fluid rounded-1"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/bEumEOmDYu.png">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="https://demo.codelug.com/xtreaming/public/upload/post/bEumEOmDYu.png"
                                    alt="" class="lazyload img-fluid rounded-1" width="250" height="375">
                            </picture>
                            <div class="card-imdb">
                                <div>
                                    5.25 </div>
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
                                    2022 </li>
                            </ul>
                            <h3 class="title">
                                The Secret House </h3>
                            <h4 class="title_sub">
                                비밀의 집 </h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a href="https://demo.codelug.com/xtreaming/serie/a-family-affair" class="card card-movie">
                        <div class="card-overlay">
                            <picture>
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/HPmGlL3QiY.webp"
                                    type="image/webp" class="img-fluid"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/HPmGlL3QiY.webp">
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/HPmGlL3QiY.png"
                                    type="image/png" class="img-fluid rounded-1"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/HPmGlL3QiY.png">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="https://demo.codelug.com/xtreaming/public/upload/post/HPmGlL3QiY.png"
                                    alt="" class="lazyload img-fluid rounded-1" width="250" height="375">
                            </picture>
                            <div class="card-imdb">
                                <div>
                                    3.2 </div>
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
                                    2022 </li>
                            </ul>
                            <h3 class="title">
                                A Family Affair </h3>
                            <h4 class="title_sub">
                                A Family Affair </h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a href="https://demo.codelug.com/xtreaming/serie/lucifer" class="card card-movie">
                        <div class="card-overlay">
                            <picture>
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/Y6V8PmapWk.webp"
                                    type="image/webp" class="img-fluid"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/Y6V8PmapWk.webp">
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/Y6V8PmapWk.png"
                                    type="image/png" class="img-fluid rounded-1"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/Y6V8PmapWk.png">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="https://demo.codelug.com/xtreaming/public/upload/post/Y6V8PmapWk.png"
                                    alt="" class="lazyload img-fluid rounded-1" width="250" height="375">
                            </picture>
                            <div class="card-imdb">
                                <div>
                                    8.517 </div>
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
                                    Crime </li>
                                <li class="list-inline-item">
                                    2016 </li>
                            </ul>
                            <h3 class="title">
                                Lucifer </h3>
                            <h4 class="title_sub">
                                Lucifer </h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a href="https://demo.codelug.com/xtreaming/serie/lucifer" class="card card-movie">
                        <div class="card-overlay">
                            <picture>
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/cQ3Qb12u1r.webp"
                                    type="image/webp" class="img-fluid"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/cQ3Qb12u1r.webp">
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/cQ3Qb12u1r.png"
                                    type="image/png" class="img-fluid rounded-1"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/cQ3Qb12u1r.png">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="https://demo.codelug.com/xtreaming/public/upload/post/cQ3Qb12u1r.png"
                                    alt="" class="lazyload img-fluid rounded-1" width="250" height="375">
                            </picture>
                            <div class="card-imdb">
                                <div>
                                    8.517 </div>
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
                                    Crime </li>
                                <li class="list-inline-item">
                                    2016 </li>
                            </ul>
                            <h3 class="title">
                                Lucifer </h3>
                            <h4 class="title_sub">
                                Lucifer </h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a href="https://demo.codelug.com/xtreaming/serie/the-boys" class="card card-movie">
                        <div class="card-overlay">
                            <picture>
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/eYanjetTF6.webp"
                                    type="image/webp" class="img-fluid"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/eYanjetTF6.webp">
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/eYanjetTF6.png"
                                    type="image/png" class="img-fluid rounded-1"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/eYanjetTF6.png">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="https://demo.codelug.com/xtreaming/public/upload/post/eYanjetTF6.png"
                                    alt="" class="lazyload img-fluid rounded-1" width="250" height="375">
                            </picture>
                            <div class="card-imdb">
                                <div>
                                    8.471 </div>
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
                                    Crime </li>
                                <li class="list-inline-item">
                                    2019 </li>
                            </ul>
                            <h3 class="title">
                                The Boys </h3>
                            <h4 class="title_sub">
                                The Boys </h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a href="https://demo.codelug.com/xtreaming/serie/pantanal" class="card card-movie">
                        <div class="card-overlay">
                            <picture>
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/37EDh5Cb6u.webp"
                                    type="image/webp" class="img-fluid"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/37EDh5Cb6u.webp">
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/37EDh5Cb6u.png"
                                    type="image/png" class="img-fluid rounded-1"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/37EDh5Cb6u.png">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="https://demo.codelug.com/xtreaming/public/upload/post/37EDh5Cb6u.png"
                                    alt="" class="lazyload img-fluid rounded-1" width="250" height="375">
                            </picture>
                            <div class="card-imdb">
                                <div>
                                    5.622 </div>
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
                                    2022 </li>
                            </ul>
                            <h3 class="title">
                                Pantanal </h3>
                            <h4 class="title_sub">
                                Pantanal </h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a href="https://demo.codelug.com/xtreaming/serie/the-lord-of-the-rings-the-rings-of-power"
                        class="card card-movie">
                        <div class="card-overlay">
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
                            <div class="card-imdb">
                                <div>
                                    7.4 </div>
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
                                    2022 </li>
                            </ul>
                            <h3 class="title">
                                The Lord of the Rings: The Rings of Power </h3>
                            <h4 class="title_sub">
                                The Lord of the Rings: The Rings of Power </h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a href="https://demo.codelug.com/xtreaming/serie/peaky-blinders" class="card card-movie">
                        <div class="card-overlay">
                            <picture>
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/egNy3srNqW.webp"
                                    type="image/webp" class="img-fluid"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/egNy3srNqW.webp">
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/egNy3srNqW.png"
                                    type="image/png" class="img-fluid rounded-1"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/egNy3srNqW.png">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="https://demo.codelug.com/xtreaming/public/upload/post/egNy3srNqW.png"
                                    alt="" class="lazyload img-fluid rounded-1" width="250" height="375">
                            </picture>
                            <div class="card-imdb">
                                <div>
                                    8.562 </div>
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
                                    Crime </li>
                                <li class="list-inline-item">
                                    2013 </li>
                            </ul>
                            <h3 class="title">
                                Peaky Blinders </h3>
                            <h4 class="title_sub">
                                Peaky Blinders </h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a href="https://demo.codelug.com/xtreaming/serie/pantanal" class="card card-movie">
                        <div class="card-overlay">
                            <picture>
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/t7R0lHIbAA.webp"
                                    type="image/webp" class="img-fluid"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/t7R0lHIbAA.webp">
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/t7R0lHIbAA.png"
                                    type="image/png" class="img-fluid rounded-1"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/t7R0lHIbAA.png">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="https://demo.codelug.com/xtreaming/public/upload/post/t7R0lHIbAA.png"
                                    alt="" class="lazyload img-fluid rounded-1" width="250" height="375">
                            </picture>
                            <div class="card-imdb">
                                <div>
                                    5.622 </div>
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
                                    2022 </li>
                            </ul>
                            <h3 class="title">
                                Pantanal </h3>
                            <h4 class="title_sub">
                                Pantanal </h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a href="https://demo.codelug.com/xtreaming/serie/stranger-things" class="card card-movie">
                        <div class="card-overlay">
                            <picture>
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/9SroQQJWVj.webp"
                                    type="image/webp" class="img-fluid"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/9SroQQJWVj.webp">
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/9SroQQJWVj.png"
                                    type="image/png" class="img-fluid rounded-1"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/9SroQQJWVj.png">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="https://demo.codelug.com/xtreaming/public/upload/post/9SroQQJWVj.png"
                                    alt="" class="lazyload img-fluid rounded-1" width="250" height="375">
                            </picture>
                            <div class="card-imdb">
                                <div>
                                    8.635 </div>
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
                                    2016 </li>
                            </ul>
                            <h3 class="title">
                                Stranger Things </h3>
                            <h4 class="title_sub">
                                Stranger Things </h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a href="https://demo.codelug.com/xtreaming/serie/game-of-thrones" class="card card-movie">
                        <div class="card-overlay">
                            <picture>
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/kcKF6P8BQH.webp"
                                    type="image/webp" class="img-fluid"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/kcKF6P8BQH.webp">
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/kcKF6P8BQH.png"
                                    type="image/png" class="img-fluid rounded-1"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/kcKF6P8BQH.png">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="https://demo.codelug.com/xtreaming/public/upload/post/kcKF6P8BQH.png"
                                    alt="" class="lazyload img-fluid rounded-1" width="250" height="375">
                            </picture>
                            <div class="card-imdb">
                                <div>
                                    8.423 </div>
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
                                    2011 </li>
                            </ul>
                            <h3 class="title">
                                Game of Thrones </h3>
                            <h4 class="title_sub">
                                Game of Thrones </h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a href="https://demo.codelug.com/xtreaming/serie/the-sandman" class="card card-movie">
                        <div class="card-overlay">
                            <picture>
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/5dv6eZGxyI.webp"
                                    type="image/webp" class="img-fluid"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/5dv6eZGxyI.webp">
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/5dv6eZGxyI.png"
                                    type="image/png" class="img-fluid rounded-1"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/5dv6eZGxyI.png">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="https://demo.codelug.com/xtreaming/public/upload/post/5dv6eZGxyI.png"
                                    alt="" class="lazyload img-fluid rounded-1" width="250" height="375">
                            </picture>
                            <div class="card-imdb">
                                <div>
                                    8.2 </div>
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
                                    2022 </li>
                            </ul>
                            <h3 class="title">
                                The Sandman </h3>
                            <h4 class="title_sub">
                                The Sandman </h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a href="https://demo.codelug.com/xtreaming/serie/house-of-the-dragon" class="card card-movie">
                        <div class="card-overlay">
                            <picture>
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/YEkUHipzkj.webp"
                                    type="image/webp" class="img-fluid"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/YEkUHipzkj.webp">
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/YEkUHipzkj.png"
                                    type="image/png" class="img-fluid rounded-1"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/YEkUHipzkj.png">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="https://demo.codelug.com/xtreaming/public/upload/post/YEkUHipzkj.png"
                                    alt="" class="lazyload img-fluid rounded-1" width="250" height="375">
                            </picture>
                            <div class="card-imdb">
                                <div>
                                    8.817 </div>
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
                                    2022 </li>
                            </ul>
                            <h3 class="title">
                                House of the Dragon </h3>
                            <h4 class="title_sub">
                                House of the Dragon </h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a href="https://demo.codelug.com/xtreaming/serie/she-hulk-attorney-at-law" class="card card-movie">
                        <div class="card-overlay">
                            <picture>
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/CgbKaRC2H9.webp"
                                    type="image/webp" class="img-fluid"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/CgbKaRC2H9.webp">
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/CgbKaRC2H9.png"
                                    type="image/png" class="img-fluid rounded-1"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/CgbKaRC2H9.png">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="https://demo.codelug.com/xtreaming/public/upload/post/CgbKaRC2H9.png"
                                    alt="" class="lazyload img-fluid rounded-1" width="250" height="375">
                            </picture>
                            <div class="card-imdb">
                                <div>
                                    7.5 </div>
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
                                    2022 </li>
                            </ul>
                            <h3 class="title">
                                She-Hulk: Attorney at Law </h3>
                            <h4 class="title_sub">
                                She-Hulk: Attorney at Law </h4>
                        </div>
                    </a>
                </div>
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
                                    2022 </li>
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
                                    2022 </li>
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
                                    2022 </li>
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
                                    alt="" class="lazyload img-fluid rounded-1" width="250"
                                    height="375">
                            </picture>
                            <div class="card-imdb">
                                <div>
                                    6.935 </div>
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
                                    2022 </li>
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
                                <source
                                    data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/7fZMjEAx7T.webp"
                                    type="image/webp" class="img-fluid"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/7fZMjEAx7T.webp">
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/7fZMjEAx7T.png"
                                    type="image/png" class="img-fluid rounded-1"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/7fZMjEAx7T.png">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="https://demo.codelug.com/xtreaming/public/upload/post/7fZMjEAx7T.png"
                                    alt="" class="lazyload img-fluid rounded-1" width="250"
                                    height="375">
                            </picture>
                            <div class="card-imdb">
                                <div>
                                    8.01 </div>
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
                                    2022 </li>
                            </ul>
                            <h3 class="title">
                                Prey </h3>
                            <h4 class="title_sub">
                                Prey </h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a href="https://demo.codelug.com/xtreaming/movie/after-ever-happy" class="card card-movie">
                        <div class="card-overlay">
                            <picture>
                                <source
                                    data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/plV3C2b36U.webp"
                                    type="image/webp" class="img-fluid"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/plV3C2b36U.webp">
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/plV3C2b36U.png"
                                    type="image/png" class="img-fluid rounded-1"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/plV3C2b36U.png">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="https://demo.codelug.com/xtreaming/public/upload/post/plV3C2b36U.png"
                                    alt="" class="lazyload img-fluid rounded-1" width="250"
                                    height="375">
                            </picture>
                            <div class="card-imdb">
                                <div>
                                    6.485 </div>
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
                                    2022 </li>
                            </ul>
                            <h3 class="title">
                                After Ever Happy </h3>
                            <h4 class="title_sub">
                                After Ever Happy </h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a href="https://demo.codelug.com/xtreaming/movie/day-shift" class="card card-movie">
                        <div class="card-overlay">
                            <picture>
                                <source
                                    data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/HqKDuWvcm7.webp"
                                    type="image/webp" class="img-fluid"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/HqKDuWvcm7.webp">
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/HqKDuWvcm7.png"
                                    type="image/png" class="img-fluid rounded-1"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/HqKDuWvcm7.png">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="https://demo.codelug.com/xtreaming/public/upload/post/HqKDuWvcm7.png"
                                    alt="" class="lazyload img-fluid rounded-1" width="250"
                                    height="375">
                            </picture>
                            <div class="card-imdb">
                                <div>
                                    6.903 </div>
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
                                    2022 </li>
                            </ul>
                            <h3 class="title">
                                Day Shift </h3>
                            <h4 class="title_sub">
                                Day Shift </h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a href="https://demo.codelug.com/xtreaming/movie/luck" class="card card-movie">
                        <div class="card-overlay">
                            <picture>
                                <source
                                    data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/mdNJW3Up0a.webp"
                                    type="image/webp" class="img-fluid"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/mdNJW3Up0a.webp">
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/mdNJW3Up0a.png"
                                    type="image/png" class="img-fluid rounded-1"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/mdNJW3Up0a.png">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="https://demo.codelug.com/xtreaming/public/upload/post/mdNJW3Up0a.png"
                                    alt="" class="lazyload img-fluid rounded-1" width="250"
                                    height="375">
                            </picture>
                            <div class="card-imdb">
                                <div>
                                    8.072 </div>
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
                                    Adventure </li>
                                <li class="list-inline-item">
                                    2022 </li>
                            </ul>
                            <h3 class="title">
                                Luck </h3>
                            <h4 class="title_sub">
                                Luck </h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a href="https://demo.codelug.com/xtreaming/movie/top-gun-maverick" class="card card-movie">
                        <div class="card-overlay">
                            <picture>
                                <source
                                    data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/LnwJa8zxE2.webp"
                                    type="image/webp" class="img-fluid"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/LnwJa8zxE2.webp">
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/LnwJa8zxE2.png"
                                    type="image/png" class="img-fluid rounded-1"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/LnwJa8zxE2.png">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="https://demo.codelug.com/xtreaming/public/upload/post/LnwJa8zxE2.png"
                                    alt="" class="lazyload img-fluid rounded-1" width="250"
                                    height="375">
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
                                    2022 </li>
                            </ul>
                            <h3 class="title">
                                Top Gun: Maverick </h3>
                            <h4 class="title_sub">
                                Top Gun: Maverick </h4>
                        </div>
                    </a>
                </div>
            </div>
            <div class="text-center">
                <ul class="pagination pagination-spaced">
                    <li class="page-item active"><a class="page-link border-0"
                            href='https://demo.codelug.com/xtreaming/explore?page=1'
                            data-url='https://demo.codelug.com/xtreaming/explore?page=1' &ajax=true rel="nofollow">1</a>
                    <li class="page-item "><a class="page-link border-0"
                            href='https://demo.codelug.com/xtreaming/explore?page=2'
                            data-url='https://demo.codelug.com/xtreaming/explore?page=2' &ajax=true rel="nofollow">2</a>
                </ul>
            </div>
        </div>
    </div>
    <div class="position-fixed start-0 bottom-0 p-xl-4 p-3 modal-cookie d-none">
        <div class="position-relative">
            <div class="card shadow-lg bg-white border-0 rounded-lg-pill">
                <div class="card-body text-center px-4 d-flex align-items-center flex-nowrap">
                    <p class="fs-sm text-muted mb-0 me-3">
                        This website uses cookies to ensure you get the best experience on our website
                        <a href="https://demo.codelug.com/xtreaming/page/cookie" class="text-theme">
                            Cookie policy</a>
                    </p>
                    <button type="button" class="btn-close close-cookie btn-sm ms-auto shadow-none"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>
@endsection
