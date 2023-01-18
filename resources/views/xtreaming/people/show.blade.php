@extends('layouts.app')
@section('main')
    <div class="layout-section">
        <ol class="breadcrumb d-inline-flex text-muted mb-3">
            <li class="breadcrumb-item"><a href="https://demo.codelug.com/xtreaming/peoples">
                    Peoples</a></li>
            <li class="breadcrumb-item active" aria-current="page">
                Chris Pratt </li>
        </ol>
        <div class="row gx-xl-5">
            <div class="col-md-auto d-none d-lg-block">
                <picture>
                    <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/people/71rf6zaLWM.webp"
                        type="image/webp" class="img-fluid"
                        srcset="https://demo.codelug.com/xtreaming/public/upload/people/71rf6zaLWM.webp">
                    <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/people/71rf6zaLWM.png"
                        type="image/png" class="img-fluid rounded-1"
                        srcset="https://demo.codelug.com/xtreaming/public/upload/people/71rf6zaLWM.png">
                    <img src="https://demo.codelug.com/xtreaming/public/upload/people/71rf6zaLWM.png"
                        data-src="https://demo.codelug.com/xtreaming/public/upload/people/71rf6zaLWM.png" alt=""
                        class="img-fluid rounded-1 ls-is-cached lazyloaded" width="150" height="150">
                </picture>
            </div>
            <div class="col-md">
                <h1 class="mb-0 h3 fw-semibold mt-2">
                    Chris Pratt </h1>
                <ul class="list-inline list-separator fs-xs text-gray-600 mb-3 text-center text-md-start">
                    <li class="list-inline-item">
                        Actor</li>
                    <li class="list-inline-item">
                        Jun. 21, 1979 </li>
                    <li class="list-inline-item">
                        Male </li>
                </ul>
            </div>
        </div>
        <div class="layout-section mt-4">
            <div class="layout-heading mb-3">
                <h3 class="layout-title fw-semibold fs-base">
                    Chris Pratt Filmography </h3>
            </div>
            <div class="row row-cols-xxl-6 row-cols-md-4 row-cols-2">
                <div class="col-lg-2">
                    <a href="https://demo.codelug.com/xtreaming/movie/jurassic-world-dominion" class="card card-movie">
                        <div class="card-overlay">
                            <picture>
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/vhMi831E5b.webp"
                                    type="image/webp" class="img-fluid"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/vhMi831E5b.webp">
                                <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/vhMi831E5b.png"
                                    type="image/png" class="img-fluid rounded-1"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/vhMi831E5b.png">
                                <img src="https://demo.codelug.com/xtreaming/public/upload/post/vhMi831E5b.png"
                                    data-src="https://demo.codelug.com/xtreaming/public/upload/post/vhMi831E5b.png"
                                    alt="" class="img-fluid rounded-1 ls-is-cached lazyloaded" width="250"
                                    height="375">
                            </picture>
                            <div class="card-imdb">
                                <div>
                                    7.09 </div>
                                <svg x="0px" y="0px" width="36px" height="36px" viewBox="0 0 36 36">
                                    <circle fill="none" stroke-width="1" cx="18" cy="18" r="16"
                                        stroke-dasharray="77 100" stroke-dashoffset="0" transform="rotate(-90 18 18)">
                                    </circle>
                                </svg>
                            </div>
                            <div class="card-play"></div>
                        </div>
                        <div class="card-body">
                            <ul class="list-inline list-separator fs-xs text-muted mb-1">
                                <li class="list-inline-item">
                                    Action </li>
                                <li class="list-inline-item">
                                    Jun. 01, 2022 </li>
                            </ul>
                            <h3 class="title">
                                Jurassic World Dominion </h3>
                            <h4 class="title_sub">
                                Jurassic World Dominion </h4>
                        </div>
                    </a>
                </div>
            </div>
            <div class="text-center">
            </div>
        </div>
    </div>
@endsection
