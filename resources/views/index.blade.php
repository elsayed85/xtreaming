@extends('layouts.app')
@section('main')
<nav class="navbar navbar-expand-lg layout-header navbar-dark mb-lg-2 d-lg-flex">
    <div class="collapse navbar-collapse" id="navbar">
        <form class="form-search w-lg-300 py-1 mb-3 mb-lg-0"
            action="https://demo.codelug.com/xtreaming/search" method="post">
            <input type="hidden" name="_TOKEN"
                value="JDJ5JDEwJHFoNHRTRW5iY2dnOThlMUJOa213MXVocGJ1LmtvRVVXT0wuYk9WRlVYY1NoMlg3V28vQnQ2">
            <input type="hidden" name="_ACTION" value="search">
            <div class="input-group input-group-inline shadow-none">
                <span class="input-group-text bg-transparent border-0 text-gray-500 shadow-none">
                    <svg width="18" height="18" stroke="currentColor" stroke-width="1.75"
                        fill="none">
                        <use
                            xlink:href="{{ asset("images/icons.svg") }}#search">
                        </use>
                    </svg>
                </span>
                <input type="text" name="q"
                    class="form-control form-control-flush bg-transparent border-0 ps-0" id="search"
                    placeholder="Search .." aria-label="Search" required="true" minlength="3">
            </div>
        </form>
        <ul class="navbar-nav mb-2 mb-lg-0 fw-semibold flex-row align-items-lg-center ms-xl-auto">
            <li class="nav-item dropdown" data-notify="">
                <a href="#" class="nav-link dropdown-toggle" href="#" id="notifyDropdown"
                    data-bs-type="ajax" data-bs-toggle="dropdown" aria-expanded="false"
                    data-bs-auto-close="outside"
                    data-remote="https://demo.codelug.com/xtreaming/modal/notifications">
                    <div class="position-relative">
                        <svg width="18" height="18" stroke="currentColor" stroke-width="1.75"
                            fill="none">
                            <use
                                xlink:href="{{ asset("images/icons.svg") }}#bell">
                            </use>
                        </svg>
                        <span class="notify-badge d-none"></span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end w-lg-400 mt-3 border-0 rounded-3 p-4"
                    aria-labelledby="notifyDropdown">
                    <div class="fw-semibold fs-sm pb-2">
                        Notifications</div>
                    <div class="navbar-notifications">
                    </div>
                    <div class="pt-2 text-muted">
                        <a href="https://demo.codelug.com/xtreaming/dashboard/notifications"
                            class="text-current fw-normal fs-xs">
                            View all</a>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown ms-lg-0 ms-3">
                <a class="nav-link dropdown-toggle d-flex align-items-center py-0" role="button"
                    id="Profile" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <div class="position-relative">
                        <div class="avatar rounded-circle text-white fs-xs"
                            style="background-color:#864bfc;">A</div>
                    </div>
                    <div class="ps-3 lh-xs d-block d-lg-none">
                        <div class="text-muted fs-xs">Hello,</div>
                        <div class="fs-xs fw-semibold">Xtreaming</div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-md border-0 mt-3 py-4 px-3 rounded-3"
                    aria-labelledby="Profile">
                    <div class="px-3">
                        <div class="row align-items-center mb-3">
                            <div class="col-8">
                                <div class="fs-xs text-heading fw-semibold">
                                    Enthusiast </div>
                                <div class="fs-xxs text-muted fw-bold">
                                    1270 XP </div>
                                <div class="progress mt-2 bg-gray-300" style="height: 6px;">
                                    <div class="progress-bar bg-theme rounded-pill"
                                        role="progressbar" style="width: 27%" aria-valuenow="27"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-3 ms-auto">
                                <img src="https://demo.codelug.com/xtreaming/public/static/rank/4.svg"
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="px-1 my-3 d-grid">
                        <a class="btn btn-theme fs-xs rounded-pill"
                            href="https://demo.codelug.com/xtreaming/admin" target="_blank">
                            Admin panel </a>
                    </div>
                    <a class="dropdown-item fs-sm"
                        href="https://demo.codelug.com/xtreaming/user/admin">
                        Profile </a>
                    <a class="dropdown-item fs-sm"
                        href="https://demo.codelug.com/xtreaming/user/admin/history">
                        Watch history </a>
                    <a class="dropdown-item fs-sm"
                        href="https://demo.codelug.com/xtreaming/user/admin/like">
                        Likes </a>
                    <a class="dropdown-item fs-sm"
                        href="https://demo.codelug.com/xtreaming/user/admin/collection">
                        Collections </a>
                    <div class="dropdown-item fs-xs text-muted mt-3"></div>
                    <a class="dropdown-item fs-sm"
                        href="https://demo.codelug.com/xtreaming/dashboard/settings">
                        Settings </a>
                    <a class="dropdown-item fs-sm" href="https://demo.codelug.com/xtreaming/logout">
                        Logout </a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<div class="layout-slider carousel slide carousel-fade" data-bs-ride="carousel" id="layoutSlider"
    data-bs-interval="5000" data-bs-pause="false">
    <div class="carousel-absolute">
        <div class="carousel-indicators">
            <div class="slide-btn active" data-bs-target="#layoutSlider" data-bs-slide-to="0"
                aria-current="true" aria-label="Slide 0">
                <div class="slide-heading">
                    She-Hulk: Attorney at Law </div>
                <div class="slide-desc">
                    <div class="overview h-2x">
                        Jennifer Walters navigates the complicated life of a single, 30-something
                        attorney who also happens to be a green 6-foot-7-inch superpowered hulk.
                    </div>
                    <a href="https://demo.codelug.com/xtreaming/serie/she-hulk-attorney-at-law"
                        class="btn btn-theme">
                        Watch now</a>
                    <a href="https://demo.codelug.com/xtreaming/serie/she-hulk-attorney-at-law"
                        class="btn d-none d-md-inline-block">
                        More detail</a>
                </div>
                <div class="progress-bar"></div>
            </div>
            <div class="slide-btn " data-bs-target="#layoutSlider" data-bs-slide-to="1" aria-label="Slide 1">
                <div class="slide-heading">
                    After Ever Happy </div>
                <div class="slide-desc">
                    <div class="overview h-2x">
                        As a shocking truth about a couple's families emerges, the two lovers
                        discover they are not so different from each other. Tessa is no longer the
                        sweet, simple, good girl she was when she met Hardin — any more than he is
                        the cruel, moody boy she fell so hard for. </div>
                    <a href="https://demo.codelug.com/xtreaming/movie/after-ever-happy"
                        class="btn btn-theme">
                        Watch now</a>
                    <a href="https://demo.codelug.com/xtreaming/movie/after-ever-happy"
                        class="btn d-none d-md-inline-block">
                        More detail</a>
                </div>
                <div class="progress-bar"></div>
            </div>
            <div class="slide-btn " data-bs-target="#layoutSlider" data-bs-slide-to="2" aria-label="Slide  2">
                <div class="slide-heading">
                    Day Shift </div>
                <div class="slide-desc">
                    <div class="overview h-2x">
                        An LA vampire hunter has a week to come up with the cash to pay for his
                        kid's tuition and braces. Trying to make a living these days just might kill
                        him. </div>
                    <a href="https://demo.codelug.com/xtreaming/movie/day-shift"
                        class="btn btn-theme">
                        Watch now</a>
                    <a href="https://demo.codelug.com/xtreaming/movie/day-shift"
                        class="btn d-none d-md-inline-block">
                        More detail</a>
                </div>
                <div class="progress-bar"></div>
            </div>
            <div class="slide-btn " data-bs-target="#layoutSlider" data-bs-slide-to="3" aria-label="Slide 3">
                <div class="slide-heading">
                    Luck </div>
                <div class="slide-desc">
                    <div class="overview h-2x">
                        Suddenly finding herself in the never-before-seen Land of Luck, the
                        unluckiest person in the world must unite with the magical creatures there
                        to turn her luck around. </div>
                    <a href="https://demo.codelug.com/xtreaming/movie/luck" class="btn btn-theme">
                        Watch now</a>
                    <a href="https://demo.codelug.com/xtreaming/movie/luck"
                        class="btn d-none d-md-inline-block">
                        More detail</a>
                </div>
                <div class="progress-bar"></div>
            </div>
            <div class="slide-btn " data-bs-target="#layoutSlider" data-bs-slide-to="4" aria-label="Slide 4">
                <div class="slide-heading">
                    Top Gun: Maverick </div>
                <div class="slide-desc">
                    <div class="overview h-2x">
                        After more than thirty years of service as one of the Navy’s top aviators,
                        and dodging the advancement in rank that would ground him, Pete “Maverick”
                        Mitchell finds himself training a detachment of TOP GUN graduates for a
                        specialized mission the likes of which no living pilot has ever seen. </div>
                    <a href="https://demo.codelug.com/xtreaming/movie/top-gun-maverick"
                        class="btn btn-theme">
                        Watch now</a>
                    <a href="https://demo.codelug.com/xtreaming/movie/top-gun-maverick"
                        class="btn d-none d-md-inline-block">
                        More detail</a>
                </div>
                <div class="progress-bar"></div>
            </div>
        </div>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="card card-slide">
                <div class="carousel-gradient"></div>
                <div class="ratio"
                    style="--slide-aspect;background-image: url('https://demo.codelug.com/xtreaming/public/upload/post/p0yb9QLOAY.webp');">
                </div>
            </div>
        </div>
        <div class="carousel-item ">
            <div class="card card-slide">
                <div class="carousel-gradient"></div>
                <div class="ratio"
                    style="--slide-aspect;background-image: url('https://demo.codelug.com/xtreaming/public/upload/post/ZiCS1mXe2W.webp');">
                </div>
            </div>
        </div>
        <div class="carousel-item ">
            <div class="card card-slide">
                <div class="carousel-gradient"></div>
                <div class="ratio"
                    style="--slide-aspect;background-image: url('https://demo.codelug.com/xtreaming/public/upload/post/GeY0sRaJGg.webp');">
                </div>
            </div>
        </div>
        <div class="carousel-item ">
            <div class="card card-slide">
                <div class="carousel-gradient"></div>
                <div class="ratio"
                    style="--slide-aspect;background-image: url('https://demo.codelug.com/xtreaming/public/upload/post/HuD0yKnaKt.webp');">
                </div>
            </div>
        </div>
        <div class="carousel-item ">
            <div class="card card-slide">
                <div class="carousel-gradient"></div>
                <div class="ratio"
                    style="--slide-aspect;background-image: url('https://demo.codelug.com/xtreaming/public/upload/post/pknKB7Rl9J.webp');">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="layout-section">
    <div class="layout-heading">
        <div class="layout-title">
            Xtreaming,
            continue watched </div>
    </div>
    <div class="row row-cols-xxl-6 row-cols-md-4 row-cols-2">
        <div class="col-lg-2">
            <a href="https://demo.codelug.com/xtreaming/serie/she-hulk-attorney-at-law"
                class="card card-movie">
                <div class="card-overlay">
                    <picture>
                        <source
                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-p0yb9QLOAY.webp"
                            type="image/webp" class="img-fluid"
                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-p0yb9QLOAY.webp">
                        <source
                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-p0yb9QLOAY.png"
                            type="image/png" class="img-fluid rounded-1"
                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-p0yb9QLOAY.png">
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-src="https://demo.codelug.com/xtreaming/public/upload/post/thumb-p0yb9QLOAY.png"
                            alt="" class="lazyload img-fluid rounded-1" width="300" height="200">
                    </picture>
                    <div class="card-play"></div>
                </div>
                <div class="card-body">
                    <h3 class="title">
                        She-Hulk: Attorney at Law </h3>
                    <h4 class="title_sub">
                        She-Hulk: Attorney at Law </h4>
                </div>
            </a>
        </div>
        <div class="col-lg-2">
            <a href="https://demo.codelug.com/xtreaming/serie/the-lord-of-the-rings-the-rings-of-power"
                class="card card-movie">
                <div class="card-overlay">
                    <picture>
                        <source
                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-wwaBfWMi4v.webp"
                            type="image/webp" class="img-fluid"
                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-wwaBfWMi4v.webp">
                        <source
                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-wwaBfWMi4v.png"
                            type="image/png" class="img-fluid rounded-1"
                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-wwaBfWMi4v.png">
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-src="https://demo.codelug.com/xtreaming/public/upload/post/thumb-wwaBfWMi4v.png"
                            alt="" class="lazyload img-fluid rounded-1" width="300" height="200">
                    </picture>
                    <div class="card-play"></div>
                </div>
                <div class="card-body">
                    <h3 class="title">
                        The Lord of the Rings: The Rings of Power </h3>
                    <h4 class="title_sub">
                        The Lord of the Rings: The Rings of Power </h4>
                </div>
            </a>
        </div>
        <div class="col-lg-2">
            <a href="https://demo.codelug.com/xtreaming/serie/house-of-the-dragon"
                class="card card-movie">
                <div class="card-overlay">
                    <picture>
                        <source
                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-lIytaIrXrU.webp"
                            type="image/webp" class="img-fluid"
                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-lIytaIrXrU.webp">
                        <source
                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-lIytaIrXrU.png"
                            type="image/png" class="img-fluid rounded-1"
                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-lIytaIrXrU.png">
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-src="https://demo.codelug.com/xtreaming/public/upload/post/thumb-lIytaIrXrU.png"
                            alt="" class="lazyload img-fluid rounded-1" width="300" height="200">
                    </picture>
                    <div class="card-play"></div>
                </div>
                <div class="card-body">
                    <h3 class="title">
                        House of the Dragon </h3>
                    <h4 class="title_sub">
                        House of the Dragon </h4>
                </div>
            </a>
        </div>
        <div class="col-lg-2">
            <a href="https://demo.codelug.com/xtreaming/serie/the-sandman" class="card card-movie">
                <div class="card-overlay">
                    <picture>
                        <source
                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-LyCmWyKmjb.webp"
                            type="image/webp" class="img-fluid"
                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-LyCmWyKmjb.webp">
                        <source
                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-LyCmWyKmjb.png"
                            type="image/png" class="img-fluid rounded-1"
                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-LyCmWyKmjb.png">
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-src="https://demo.codelug.com/xtreaming/public/upload/post/thumb-LyCmWyKmjb.png"
                            alt="" class="lazyload img-fluid rounded-1" width="300" height="200">
                    </picture>
                    <div class="card-play"></div>
                </div>
                <div class="card-body">
                    <h3 class="title">
                        The Sandman </h3>
                    <h4 class="title_sub">
                        The Sandman </h4>
                </div>
            </a>
        </div>
        <div class="col-lg-2">
            <a href="https://demo.codelug.com/xtreaming/serie/lucifer" class="card card-movie">
                <div class="card-overlay">
                    <picture>
                        <source
                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-zXgCcfgQML.webp"
                            type="image/webp" class="img-fluid"
                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-zXgCcfgQML.webp">
                        <source
                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-zXgCcfgQML.png"
                            type="image/png" class="img-fluid rounded-1"
                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-zXgCcfgQML.png">
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-src="https://demo.codelug.com/xtreaming/public/upload/post/thumb-zXgCcfgQML.png"
                            alt="" class="lazyload img-fluid rounded-1" width="300" height="200">
                    </picture>
                    <div class="card-play"></div>
                </div>
                <div class="card-body">
                    <h3 class="title">
                        Lucifer </h3>
                    <h4 class="title_sub">
                        Lucifer </h4>
                </div>
            </a>
        </div>
        <div class="col-lg-2">
            <a href="https://demo.codelug.com/xtreaming/serie/the-secret-house"
                class="card card-movie">
                <div class="card-overlay">
                    <picture>
                        <source
                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-Adgnja4Szr.webp"
                            type="image/webp" class="img-fluid"
                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-Adgnja4Szr.webp">
                        <source
                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-Adgnja4Szr.png"
                            type="image/png" class="img-fluid rounded-1"
                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-Adgnja4Szr.png">
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-src="https://demo.codelug.com/xtreaming/public/upload/post/thumb-Adgnja4Szr.png"
                            alt="" class="lazyload img-fluid rounded-1" width="300" height="200">
                    </picture>
                    <div class="card-play"></div>
                </div>
                <div class="card-body">
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
    <div class="layout-heading mb-4">
        <h3 class="layout-title">
            The newest Movies </h3>
        <div class="layout-heading-filter">
            <a href="https://demo.codelug.com/xtreaming/movies" class="fs-sm">
                Newest</a>
            <a href="https://demo.codelug.com/xtreaming/movies?sorting=popular" class="fs-sm ">
                Most popular</a>
        </div>
    </div>
    <div class="row row-cols-xxl-6 row-cols-md-4 row-cols-2">
        <div class="col-lg-2">
            <a href="https://demo.codelug.com/xtreaming/movie/office-invasion"
                class="card card-movie">
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
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-src="https://demo.codelug.com/xtreaming/public/upload/post/LNjw2xfL3L.png"
                            alt="" class="lazyload img-fluid rounded-1" width="250" height="375">
                    </picture>
                    <div class="card-imdb">
                        <span>
                            5.903</span>
                        <svg x="0px" y="0px" width="36px" height="36px" viewBox="0 0 36 36">
                            <circle fill="none" stroke-width="1" cx="18" cy="18" r="16"
                                stroke-dasharray="77 100" stroke-dashoffset="0"
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
                        <source
                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/0wvDyaGmQP.webp"
                            type="image/webp" class="img-fluid"
                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/0wvDyaGmQP.webp">
                        <source
                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/0wvDyaGmQP.png"
                            type="image/png" class="img-fluid rounded-1"
                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/0wvDyaGmQP.png">
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-src="https://demo.codelug.com/xtreaming/public/upload/post/0wvDyaGmQP.png"
                            alt="" class="lazyload img-fluid rounded-1" width="250" height="375">
                    </picture>
                    <div class="card-imdb">
                        <span>
                            7.068</span>
                        <svg x="0px" y="0px" width="36px" height="36px" viewBox="0 0 36 36">
                            <circle fill="none" stroke-width="1" cx="18" cy="18" r="16"
                                stroke-dasharray="77 100" stroke-dashoffset="0"
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
                        <source
                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/ailZSgtrYi.webp"
                            type="image/webp" class="img-fluid"
                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/ailZSgtrYi.webp">
                        <source
                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/ailZSgtrYi.png"
                            type="image/png" class="img-fluid rounded-1"
                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/ailZSgtrYi.png">
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-src="https://demo.codelug.com/xtreaming/public/upload/post/ailZSgtrYi.png"
                            alt="" class="lazyload img-fluid rounded-1" width="250" height="375">
                    </picture>
                    <div class="card-imdb">
                        <span>
                            6.916</span>
                        <svg x="0px" y="0px" width="36px" height="36px" viewBox="0 0 36 36">
                            <circle fill="none" stroke-width="1" cx="18" cy="18" r="16"
                                stroke-dasharray="77 100" stroke-dashoffset="0"
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
            <a href="https://demo.codelug.com/xtreaming/movie/sniper-rogue-mission"
                class="card card-movie">
                <div class="card-overlay">
                    <picture>
                        <source
                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/HiSVcgm1Ga.webp"
                            type="image/webp" class="img-fluid"
                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/HiSVcgm1Ga.webp">
                        <source
                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/HiSVcgm1Ga.png"
                            type="image/png" class="img-fluid rounded-1"
                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/HiSVcgm1Ga.png">
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-src="https://demo.codelug.com/xtreaming/public/upload/post/HiSVcgm1Ga.png"
                            alt="" class="lazyload img-fluid rounded-1" width="250" height="375">
                    </picture>
                    <div class="card-imdb">
                        <span>
                            6.935</span>
                        <svg x="0px" y="0px" width="36px" height="36px" viewBox="0 0 36 36">
                            <circle fill="none" stroke-width="1" cx="18" cy="18" r="16"
                                stroke-dasharray="77 100" stroke-dashoffset="0"
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
                        <source
                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/7fZMjEAx7T.png"
                            type="image/png" class="img-fluid rounded-1"
                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/7fZMjEAx7T.png">
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-src="https://demo.codelug.com/xtreaming/public/upload/post/7fZMjEAx7T.png"
                            alt="" class="lazyload img-fluid rounded-1" width="250" height="375">
                    </picture>
                    <div class="card-imdb">
                        <span>
                            8.01</span>
                        <svg x="0px" y="0px" width="36px" height="36px" viewBox="0 0 36 36">
                            <circle fill="none" stroke-width="1" cx="18" cy="18" r="16"
                                stroke-dasharray="77 100" stroke-dashoffset="0"
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
            <a href="https://demo.codelug.com/xtreaming/movie/after-ever-happy"
                class="card card-movie">
                <div class="card-overlay">
                    <picture>
                        <source
                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/plV3C2b36U.webp"
                            type="image/webp" class="img-fluid"
                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/plV3C2b36U.webp">
                        <source
                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/plV3C2b36U.png"
                            type="image/png" class="img-fluid rounded-1"
                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/plV3C2b36U.png">
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-src="https://demo.codelug.com/xtreaming/public/upload/post/plV3C2b36U.png"
                            alt="" class="lazyload img-fluid rounded-1" width="250" height="375">
                    </picture>
                    <div class="card-imdb">
                        <span>
                            6.485</span>
                        <svg x="0px" y="0px" width="36px" height="36px" viewBox="0 0 36 36">
                            <circle fill="none" stroke-width="1" cx="18" cy="18" r="16"
                                stroke-dasharray="77 100" stroke-dashoffset="0"
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
                        <source
                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/HqKDuWvcm7.png"
                            type="image/png" class="img-fluid rounded-1"
                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/HqKDuWvcm7.png">
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-src="https://demo.codelug.com/xtreaming/public/upload/post/HqKDuWvcm7.png"
                            alt="" class="lazyload img-fluid rounded-1" width="250" height="375">
                    </picture>
                    <div class="card-imdb">
                        <span>
                            6.903</span>
                        <svg x="0px" y="0px" width="36px" height="36px" viewBox="0 0 36 36">
                            <circle fill="none" stroke-width="1" cx="18" cy="18" r="16"
                                stroke-dasharray="77 100" stroke-dashoffset="0"
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
                        <source
                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/mdNJW3Up0a.png"
                            type="image/png" class="img-fluid rounded-1"
                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/mdNJW3Up0a.png">
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-src="https://demo.codelug.com/xtreaming/public/upload/post/mdNJW3Up0a.png"
                            alt="" class="lazyload img-fluid rounded-1" width="250" height="375">
                    </picture>
                    <div class="card-imdb">
                        <span>
                            8.072</span>
                        <svg x="0px" y="0px" width="36px" height="36px" viewBox="0 0 36 36">
                            <circle fill="none" stroke-width="1" cx="18" cy="18" r="16"
                                stroke-dasharray="77 100" stroke-dashoffset="0"
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
            <a href="https://demo.codelug.com/xtreaming/movie/top-gun-maverick"
                class="card card-movie">
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
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-src="https://demo.codelug.com/xtreaming/public/upload/post/LnwJa8zxE2.png"
                            alt="" class="lazyload img-fluid rounded-1" width="250" height="375">
                    </picture>
                    <div class="card-imdb">
                        <span>
                            8.377</span>
                        <svg x="0px" y="0px" width="36px" height="36px" viewBox="0 0 36 36">
                            <circle fill="none" stroke-width="1" cx="18" cy="18" r="16"
                                stroke-dasharray="77 100" stroke-dashoffset="0"
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
        <div class="col-lg-2">
            <a href="https://demo.codelug.com/xtreaming/movie/the-black-phone"
                class="card card-movie">
                <div class="card-overlay">
                    <picture>
                        <source
                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/t0VKzmt2Ed.webp"
                            type="image/webp" class="img-fluid"
                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/t0VKzmt2Ed.webp">
                        <source
                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/t0VKzmt2Ed.png"
                            type="image/png" class="img-fluid rounded-1"
                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/t0VKzmt2Ed.png">
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-src="https://demo.codelug.com/xtreaming/public/upload/post/t0VKzmt2Ed.png"
                            alt="" class="lazyload img-fluid rounded-1" width="250" height="375">
                    </picture>
                    <div class="card-imdb">
                        <span>
                            7.944</span>
                        <svg x="0px" y="0px" width="36px" height="36px" viewBox="0 0 36 36">
                            <circle fill="none" stroke-width="1" cx="18" cy="18" r="16"
                                stroke-dasharray="77 100" stroke-dashoffset="0"
                                transform="rotate(-90 18 18)"></circle>
                        </svg>
                    </div>
                    <div class="card-play"></div>
                </div>
                <div class="card-body">
                    <ul class="list-inline list-separator fs-xs text-muted mb-1">
                        <li class="list-inline-item">
                            Fantasy </li>
                        <li class="list-inline-item">
                            2022 </li>
                    </ul>
                    <h3 class="title">
                        The Black Phone </h3>
                    <h4 class="title_sub">
                        The Black Phone </h4>
                </div>
            </a>
        </div>
        <div class="col-lg-2">
            <a href="https://demo.codelug.com/xtreaming/movie/the-next-365-days"
                class="card card-movie">
                <div class="card-overlay">
                    <picture>
                        <source
                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/aIRzeHI1nV.webp"
                            type="image/webp" class="img-fluid"
                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/aIRzeHI1nV.webp">
                        <source
                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/aIRzeHI1nV.png"
                            type="image/png" class="img-fluid rounded-1"
                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/aIRzeHI1nV.png">
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-src="https://demo.codelug.com/xtreaming/public/upload/post/aIRzeHI1nV.png"
                            alt="" class="lazyload img-fluid rounded-1" width="250" height="375">
                    </picture>
                    <div class="card-imdb">
                        <span>
                            6.886</span>
                        <svg x="0px" y="0px" width="36px" height="36px" viewBox="0 0 36 36">
                            <circle fill="none" stroke-width="1" cx="18" cy="18" r="16"
                                stroke-dasharray="77 100" stroke-dashoffset="0"
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
                        The Next 365 Days </h3>
                    <h4 class="title_sub">
                        Kolejne 365 dni </h4>
                </div>
            </a>
        </div>
        <div class="col-lg-2">
            <a href="https://demo.codelug.com/xtreaming/movie/jurassic-world-dominion"
                class="card card-movie">
                <div class="card-overlay">
                    <picture>
                        <source
                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/vhMi831E5b.webp"
                            type="image/webp" class="img-fluid"
                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/vhMi831E5b.webp">
                        <source
                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/vhMi831E5b.png"
                            type="image/png" class="img-fluid rounded-1"
                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/vhMi831E5b.png">
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-src="https://demo.codelug.com/xtreaming/public/upload/post/vhMi831E5b.png"
                            alt="" class="lazyload img-fluid rounded-1" width="250" height="375">
                    </picture>
                    <div class="card-imdb">
                        <span>
                            7.09</span>
                        <svg x="0px" y="0px" width="36px" height="36px" viewBox="0 0 36 36">
                            <circle fill="none" stroke-width="1" cx="18" cy="18" r="16"
                                stroke-dasharray="77 100" stroke-dashoffset="0"
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
                        Jurassic World Dominion </h3>
                    <h4 class="title_sub">
                        Jurassic World Dominion </h4>
                </div>
            </a>
        </div>
    </div>
</div>
<div class="layout-section">
    <div class="row gx-xl-5">
        <div class="col-xxl-5 col-xl-6">
            <div class="mb-3">
                <div class="layout-heading">
                    <div class="layout-title fs-base">
                        Featured people </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <a href="https://demo.codelug.com/xtreaming/people/chris-hemsworth-2"
                            class="card card-people">
                            <picture>
                                <source
                                    data-srcset="https://demo.codelug.com/xtreaming/public/upload/people/JLjTavKbU3.webp"
                                    type="image/webp" class="img-fluid"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/people/JLjTavKbU3.webp">
                                <source
                                    data-srcset="https://demo.codelug.com/xtreaming/public/upload/people/JLjTavKbU3.png"
                                    type="image/png" class="img-fluid rounded-1"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/people/JLjTavKbU3.png">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="https://demo.codelug.com/xtreaming/public/upload/people/JLjTavKbU3.png"
                                    alt="" class="lazyload img-fluid rounded-1" width="300"
                                    height="300">
                            </picture>
                            <div class="card-body text-center">
                                <h3 class="title fs-xs">
                                    Chris Hemsworth </h3>
                                <div class="department">
                                    Actor </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-6">
                        <a href="https://demo.codelug.com/xtreaming/people/christian-bale-3"
                            class="card card-people">
                            <picture>
                                <source
                                    data-srcset="https://demo.codelug.com/xtreaming/public/upload/people/zc0fQYugMu.webp"
                                    type="image/webp" class="img-fluid"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/people/zc0fQYugMu.webp">
                                <source
                                    data-srcset="https://demo.codelug.com/xtreaming/public/upload/people/zc0fQYugMu.png"
                                    type="image/png" class="img-fluid rounded-1"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/people/zc0fQYugMu.png">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="https://demo.codelug.com/xtreaming/public/upload/people/zc0fQYugMu.png"
                                    alt="" class="lazyload img-fluid rounded-1" width="300"
                                    height="300">
                            </picture>
                            <div class="card-body text-center">
                                <h3 class="title fs-xs">
                                    Christian Bale </h3>
                                <div class="department">
                                    Actor </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-6">
                        <a href="https://demo.codelug.com/xtreaming/people/tessa-thompson-4"
                            class="card card-people">
                            <picture>
                                <source
                                    data-srcset="https://demo.codelug.com/xtreaming/public/upload/people/UgUxzKz5no.webp"
                                    type="image/webp" class="img-fluid"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/people/UgUxzKz5no.webp">
                                <source
                                    data-srcset="https://demo.codelug.com/xtreaming/public/upload/people/UgUxzKz5no.png"
                                    type="image/png" class="img-fluid rounded-1"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/people/UgUxzKz5no.png">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="https://demo.codelug.com/xtreaming/public/upload/people/UgUxzKz5no.png"
                                    alt="" class="lazyload img-fluid rounded-1" width="300"
                                    height="300">
                            </picture>
                            <div class="card-body text-center">
                                <h3 class="title fs-xs">
                                    Tessa Thompson </h3>
                                <div class="department">
                                    Actor </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-6">
            <div class="mb-3">
                <div class="layout-heading">
                    <div class="layout-title fs-base">
                        Community </div>
                    <div class="layout-heading-filter">
                        <a href="https://demo.codelug.com/xtreaming/community/" class="fs-sm">
                            Newest</a>
                        <a href="https://demo.codelug.com/xtreaming/community/popular"
                            class="fs-sm ">
                            Most popular</a>
                    </div>
                </div>
                <div class="py-2">
                    <div class="row">
                        <div class="col-auto">
                            <a href="https://demo.codelug.com/xtreaming/user/admin" class="d-block"
                                data-bs-tooltip="tooltip" data-bs-placement="top"
                                title="Xtreaming - @admin">
                                <div class="avatar avatar-lg rounded-circle text-white fs-xs"
                                    style="background-color:#864bfc;">A</div>
                            </a>
                        </div>
                        <div class="col text-gray-600">
                            <h3 class="fs-sm text-heading fw-semibold mb-1 h-1x"><a
                                    href="https://demo.codelug.com/xtreaming/thread/the-lord-of-the-rings-the-rings-of-power-2"
                                    class="text-current">
                                    The Lord of the Rings: The Rings of Power</a></h3>
                            <ul class="list-inline list-separator fs-xs text-gray-500">
                                <li class="list-inline-item"><a
                                        href="https://demo.codelug.com/xtreaming/user/admin"
                                        class="text-current fw-semibold">
                                        admin</a></li>
                                <li class="list-inline-item">
                                    Sep. 02, 2022 </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="py-2">
                    <div class="row">
                        <div class="col-auto">
                            <a href="https://demo.codelug.com/xtreaming/user/admin" class="d-block"
                                data-bs-tooltip="tooltip" data-bs-placement="top"
                                title="Xtreaming - @admin">
                                <div class="avatar avatar-lg rounded-circle text-white fs-xs"
                                    style="background-color:#864bfc;">A</div>
                            </a>
                        </div>
                        <div class="col text-gray-600">
                            <h3 class="fs-sm text-heading fw-semibold mb-1 h-1x"><a
                                    href="https://demo.codelug.com/xtreaming/thread/great-movies-to-watch-1"
                                    class="text-current">
                                    Great movies to watch</a></h3>
                            <ul class="list-inline list-separator fs-xs text-gray-500">
                                <li class="list-inline-item"><a
                                        href="https://demo.codelug.com/xtreaming/user/admin"
                                        class="text-current fw-semibold">
                                        admin</a></li>
                                <li class="list-inline-item">
                                    Sep. 02, 2022 </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-xl-12">
            <div class="mb-3">
                <div class="layout-heading">
                    <div class="layout-title fs-base">
                        Genre </div>
                </div>
                <div class="card-genres">
                    <a href="https://demo.codelug.com/xtreaming/explore?genre=1" class="fs-xs">
                        Action</a>
                    <a href="https://demo.codelug.com/xtreaming/explore?genre=2" class="fs-xs">
                        Adventure</a>
                    <a href="https://demo.codelug.com/xtreaming/explore?genre=3" class="fs-xs">
                        Animation</a>
                    <a href="https://demo.codelug.com/xtreaming/explore?genre=4" class="fs-xs">
                        Comedy</a>
                    <a href="https://demo.codelug.com/xtreaming/explore?genre=5" class="fs-xs">
                        Crime</a>
                    <a href="https://demo.codelug.com/xtreaming/explore?genre=6" class="fs-xs">
                        Documentary</a>
                    <a href="https://demo.codelug.com/xtreaming/explore?genre=7" class="fs-xs">
                        Drama</a>
                    <a href="https://demo.codelug.com/xtreaming/explore?genre=8" class="fs-xs">
                        Family</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="layout-section">
    <div class="row gx-xl-5">
        <div class="col-xl-auto">
            <div class="w-xl-250 mb-3 text-muted">
                <h3 class="mb-3 fw-semibold fs-lg">Recommend Collections</h3>
                <div class="text-muted fs-sm mb-3">If you are looking for new series and movies to
                    watch, these lists are for you</div>
            </div>
        </div>
        <div class="col-xl">
            <div class="row">
                <div class="col-xxl-4 col-xl-6">
                    <div class="card card-collection">
                        <div class="card-cover">
                            <picture>
                                <source
                                    data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-t0VKzmt2Ed.webp"
                                    type="image/webp" class="img-fluid"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-t0VKzmt2Ed.webp">
                                <source
                                    data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-t0VKzmt2Ed.png"
                                    type="image/png" class="img-fluid rounded-1"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-t0VKzmt2Ed.png">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="https://demo.codelug.com/xtreaming/public/upload/post/thumb-t0VKzmt2Ed.png"
                                    alt="" class="lazyload img-fluid rounded-1" width="250"
                                    height="375">
                            </picture>
                            <picture>
                                <source
                                    data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-egNy3srNqW.webp"
                                    type="image/webp" class="img-fluid"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-egNy3srNqW.webp">
                                <source
                                    data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-egNy3srNqW.png"
                                    type="image/png" class="img-fluid rounded-1"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-egNy3srNqW.png">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="https://demo.codelug.com/xtreaming/public/upload/post/thumb-egNy3srNqW.png"
                                    alt="" class="lazyload img-fluid rounded-1" width="250"
                                    height="375">
                            </picture>
                            <picture>
                                <source
                                    data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-LnwJa8zxE2.webp"
                                    type="image/webp" class="img-fluid"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-LnwJa8zxE2.webp">
                                <source
                                    data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-LnwJa8zxE2.png"
                                    type="image/png" class="img-fluid rounded-1"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-LnwJa8zxE2.png">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="https://demo.codelug.com/xtreaming/public/upload/post/thumb-LnwJa8zxE2.png"
                                    alt="" class="lazyload img-fluid rounded-1" width="250"
                                    height="375">
                            </picture>
                        </div>
                        <div class="ps-4">
                            <h3 class="title mb-1"><a
                                    href="https://demo.codelug.com/xtreaming/collection/the-best-tv-and-movies-to-watch-in-jun-3"
                                    class="text-current">The Best TV and Movies to Watch in Jun</a>
                            </h3>
                            <ul class="list-inline list-separator fs-xs text-gray-500">
                                <li class="list-inline-item"><a
                                        href="https://demo.codelug.com/xtreaming/user/admin"
                                        class="text-current fw-semibold">admin</a></li>
                                <li class="list-inline-item">
                                    7 post available</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-6">
                    <div class="card card-collection">
                        <div class="card-cover">
                            <picture>
                                <source
                                    data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-YEkUHipzkj.webp"
                                    type="image/webp" class="img-fluid"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-YEkUHipzkj.webp">
                                <source
                                    data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-YEkUHipzkj.png"
                                    type="image/png" class="img-fluid rounded-1"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-YEkUHipzkj.png">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="https://demo.codelug.com/xtreaming/public/upload/post/thumb-YEkUHipzkj.png"
                                    alt="" class="lazyload img-fluid rounded-1" width="250"
                                    height="375">
                            </picture>
                            <picture>
                                <source
                                    data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-bEumEOmDYu.webp"
                                    type="image/webp" class="img-fluid"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-bEumEOmDYu.webp">
                                <source
                                    data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-bEumEOmDYu.png"
                                    type="image/png" class="img-fluid rounded-1"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-bEumEOmDYu.png">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="https://demo.codelug.com/xtreaming/public/upload/post/thumb-bEumEOmDYu.png"
                                    alt="" class="lazyload img-fluid rounded-1" width="250"
                                    height="375">
                            </picture>
                            <picture>
                                <source
                                    data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-LNjw2xfL3L.webp"
                                    type="image/webp" class="img-fluid"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-LNjw2xfL3L.webp">
                                <source
                                    data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-LNjw2xfL3L.png"
                                    type="image/png" class="img-fluid rounded-1"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-LNjw2xfL3L.png">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="https://demo.codelug.com/xtreaming/public/upload/post/thumb-LNjw2xfL3L.png"
                                    alt="" class="lazyload img-fluid rounded-1" width="250"
                                    height="375">
                            </picture>
                        </div>
                        <div class="ps-4">
                            <h3 class="title mb-1"><a
                                    href="https://demo.codelug.com/xtreaming/collection/new-movies-to-be-released-in-2022-2"
                                    class="text-current">New movies to be released in 2022</a></h3>
                            <ul class="list-inline list-separator fs-xs text-gray-500">
                                <li class="list-inline-item"><a
                                        href="https://demo.codelug.com/xtreaming/user/admin"
                                        class="text-current fw-semibold">admin</a></li>
                                <li class="list-inline-item">
                                    6 post available</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-6">
                    <div class="card card-collection">
                        <div class="card-cover">
                            <picture>
                                <source
                                    data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-5dv6eZGxyI.webp"
                                    type="image/webp" class="img-fluid"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-5dv6eZGxyI.webp">
                                <source
                                    data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-5dv6eZGxyI.png"
                                    type="image/png" class="img-fluid rounded-1"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-5dv6eZGxyI.png">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="https://demo.codelug.com/xtreaming/public/upload/post/thumb-5dv6eZGxyI.png"
                                    alt="" class="lazyload img-fluid rounded-1" width="250"
                                    height="375">
                            </picture>
                            <picture>
                                <source
                                    data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-cQ3Qb12u1r.webp"
                                    type="image/webp" class="img-fluid"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-cQ3Qb12u1r.webp">
                                <source
                                    data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-cQ3Qb12u1r.png"
                                    type="image/png" class="img-fluid rounded-1"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-cQ3Qb12u1r.png">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="https://demo.codelug.com/xtreaming/public/upload/post/thumb-cQ3Qb12u1r.png"
                                    alt="" class="lazyload img-fluid rounded-1" width="250"
                                    height="375">
                            </picture>
                            <picture>
                                <source
                                    data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-ailZSgtrYi.webp"
                                    type="image/webp" class="img-fluid"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-ailZSgtrYi.webp">
                                <source
                                    data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-ailZSgtrYi.png"
                                    type="image/png" class="img-fluid rounded-1"
                                    srcset="https://demo.codelug.com/xtreaming/public/upload/post/thumb-ailZSgtrYi.png">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="https://demo.codelug.com/xtreaming/public/upload/post/thumb-ailZSgtrYi.png"
                                    alt="" class="lazyload img-fluid rounded-1" width="250"
                                    height="375">
                            </picture>
                        </div>
                        <div class="ps-4">
                            <h3 class="title mb-1"><a
                                    href="https://demo.codelug.com/xtreaming/collection/everything-new-on-netflix-in-february-list-1"
                                    class="text-current">Everything New on Netflix in February
                                    list</a></h3>
                            <ul class="list-inline list-separator fs-xs text-gray-500">
                                <li class="list-inline-item"><a
                                        href="https://demo.codelug.com/xtreaming/user/admin"
                                        class="text-current fw-semibold">admin</a></li>
                                <li class="list-inline-item">
                                    8 post available</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="layout-section">
    <div class="layout-heading">
        <div class="layout-title">
            The newest TV Shows </div>
        <div class="layout-heading-filter">
            <a href="https://demo.codelug.com/xtreaming/series" class="fs-sm">
                Newest</a>
            <a href="https://demo.codelug.com/xtreaming/series?sorting=popular" class="fs-sm ">
                Most popular</a>
        </div>
    </div>
    <div class="row row-cols-xxl-6 row-cols-md-4 row-cols-2">
        <div class="col-lg-2">
            <a href="https://demo.codelug.com/xtreaming/serie/the-lord-of-the-rings-the-rings-of-power"
                class="card card-movie">
                <div class="card-overlay">
                    <picture>
                        <source
                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/GCpI9UIZnz.webp"
                            type="image/webp" class="img-fluid"
                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/GCpI9UIZnz.webp">
                        <source
                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/GCpI9UIZnz.png"
                            type="image/png" class="img-fluid rounded-1"
                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/GCpI9UIZnz.png">
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-src="https://demo.codelug.com/xtreaming/public/upload/post/GCpI9UIZnz.png"
                            alt="" class="lazyload img-fluid rounded-1" width="250" height="375">
                    </picture>
                    <div class="card-imdb">
                        <span>
                            7.4</span>
                        <svg x="0px" y="0px" width="36px" height="36px" viewBox="0 0 36 36">
                            <circle fill="none" stroke-width="1" cx="18" cy="18" r="16"
                                stroke-dasharray="77 100" stroke-dashoffset="0"
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
            <a href="https://demo.codelug.com/xtreaming/serie/the-secret-house"
                class="card card-movie">
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
                            alt="" class="lazyload img-fluid rounded-1" width="250" height="375">
                    </picture>
                    <div class="card-imdb">
                        <span>
                            5.25</span>
                        <svg x="0px" y="0px" width="36px" height="36px" viewBox="0 0 36 36">
                            <circle fill="none" stroke-width="1" cx="18" cy="18" r="16"
                                stroke-dasharray="77 100" stroke-dashoffset="0"
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
            <a href="https://demo.codelug.com/xtreaming/serie/a-family-affair"
                class="card card-movie">
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
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-src="https://demo.codelug.com/xtreaming/public/upload/post/HPmGlL3QiY.png"
                            alt="" class="lazyload img-fluid rounded-1" width="250" height="375">
                    </picture>
                    <div class="card-imdb">
                        <span>
                            3.2</span>
                        <svg x="0px" y="0px" width="36px" height="36px" viewBox="0 0 36 36">
                            <circle fill="none" stroke-width="1" cx="18" cy="18" r="16"
                                stroke-dasharray="77 100" stroke-dashoffset="0"
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
                        <source
                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/Y6V8PmapWk.webp"
                            type="image/webp" class="img-fluid"
                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/Y6V8PmapWk.webp">
                        <source
                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/Y6V8PmapWk.png"
                            type="image/png" class="img-fluid rounded-1"
                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/Y6V8PmapWk.png">
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-src="https://demo.codelug.com/xtreaming/public/upload/post/Y6V8PmapWk.png"
                            alt="" class="lazyload img-fluid rounded-1" width="250" height="375">
                    </picture>
                    <div class="card-imdb">
                        <span>
                            8.517</span>
                        <svg x="0px" y="0px" width="36px" height="36px" viewBox="0 0 36 36">
                            <circle fill="none" stroke-width="1" cx="18" cy="18" r="16"
                                stroke-dasharray="77 100" stroke-dashoffset="0"
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
                            alt="" class="lazyload img-fluid rounded-1" width="250" height="375">
                    </picture>
                    <div class="card-imdb">
                        <span>
                            8.517</span>
                        <svg x="0px" y="0px" width="36px" height="36px" viewBox="0 0 36 36">
                            <circle fill="none" stroke-width="1" cx="18" cy="18" r="16"
                                stroke-dasharray="77 100" stroke-dashoffset="0"
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
                        <source
                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/eYanjetTF6.webp"
                            type="image/webp" class="img-fluid"
                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/eYanjetTF6.webp">
                        <source
                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/eYanjetTF6.png"
                            type="image/png" class="img-fluid rounded-1"
                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/eYanjetTF6.png">
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-src="https://demo.codelug.com/xtreaming/public/upload/post/eYanjetTF6.png"
                            alt="" class="lazyload img-fluid rounded-1" width="250" height="375">
                    </picture>
                    <div class="card-imdb">
                        <span>
                            8.471</span>
                        <svg x="0px" y="0px" width="36px" height="36px" viewBox="0 0 36 36">
                            <circle fill="none" stroke-width="1" cx="18" cy="18" r="16"
                                stroke-dasharray="77 100" stroke-dashoffset="0"
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
                        <source
                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/37EDh5Cb6u.webp"
                            type="image/webp" class="img-fluid"
                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/37EDh5Cb6u.webp">
                        <source
                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/37EDh5Cb6u.png"
                            type="image/png" class="img-fluid rounded-1"
                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/37EDh5Cb6u.png">
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-src="https://demo.codelug.com/xtreaming/public/upload/post/37EDh5Cb6u.png"
                            alt="" class="lazyload img-fluid rounded-1" width="250" height="375">
                    </picture>
                    <div class="card-imdb">
                        <span>
                            5.622</span>
                        <svg x="0px" y="0px" width="36px" height="36px" viewBox="0 0 36 36">
                            <circle fill="none" stroke-width="1" cx="18" cy="18" r="16"
                                stroke-dasharray="77 100" stroke-dashoffset="0"
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
                        <source
                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/bwhMUEDcC9.webp"
                            type="image/webp" class="img-fluid"
                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/bwhMUEDcC9.webp">
                        <source
                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/bwhMUEDcC9.png"
                            type="image/png" class="img-fluid rounded-1"
                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/bwhMUEDcC9.png">
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-src="https://demo.codelug.com/xtreaming/public/upload/post/bwhMUEDcC9.png"
                            alt="" class="lazyload img-fluid rounded-1" width="250" height="375">
                    </picture>
                    <div class="card-imdb">
                        <span>
                            7.4</span>
                        <svg x="0px" y="0px" width="36px" height="36px" viewBox="0 0 36 36">
                            <circle fill="none" stroke-width="1" cx="18" cy="18" r="16"
                                stroke-dasharray="77 100" stroke-dashoffset="0"
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
            <a href="https://demo.codelug.com/xtreaming/serie/peaky-blinders"
                class="card card-movie">
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
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-src="https://demo.codelug.com/xtreaming/public/upload/post/egNy3srNqW.png"
                            alt="" class="lazyload img-fluid rounded-1" width="250" height="375">
                    </picture>
                    <div class="card-imdb">
                        <span>
                            8.562</span>
                        <svg x="0px" y="0px" width="36px" height="36px" viewBox="0 0 36 36">
                            <circle fill="none" stroke-width="1" cx="18" cy="18" r="16"
                                stroke-dasharray="77 100" stroke-dashoffset="0"
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
                        <source
                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/t7R0lHIbAA.webp"
                            type="image/webp" class="img-fluid"
                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/t7R0lHIbAA.webp">
                        <source
                            data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/t7R0lHIbAA.png"
                            type="image/png" class="img-fluid rounded-1"
                            srcset="https://demo.codelug.com/xtreaming/public/upload/post/t7R0lHIbAA.png">
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-src="https://demo.codelug.com/xtreaming/public/upload/post/t7R0lHIbAA.png"
                            alt="" class="lazyload img-fluid rounded-1" width="250" height="375">
                    </picture>
                    <div class="card-imdb">
                        <span>
                            5.622</span>
                        <svg x="0px" y="0px" width="36px" height="36px" viewBox="0 0 36 36">
                            <circle fill="none" stroke-width="1" cx="18" cy="18" r="16"
                                stroke-dasharray="77 100" stroke-dashoffset="0"
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
            <a href="https://demo.codelug.com/xtreaming/serie/stranger-things"
                class="card card-movie">
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
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-src="https://demo.codelug.com/xtreaming/public/upload/post/9SroQQJWVj.png"
                            alt="" class="lazyload img-fluid rounded-1" width="250" height="375">
                    </picture>
                    <div class="card-imdb">
                        <span>
                            8.635</span>
                        <svg x="0px" y="0px" width="36px" height="36px" viewBox="0 0 36 36">
                            <circle fill="none" stroke-width="1" cx="18" cy="18" r="16"
                                stroke-dasharray="77 100" stroke-dashoffset="0"
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
            <a href="https://demo.codelug.com/xtreaming/serie/game-of-thrones"
                class="card card-movie">
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
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-src="https://demo.codelug.com/xtreaming/public/upload/post/kcKF6P8BQH.png"
                            alt="" class="lazyload img-fluid rounded-1" width="250" height="375">
                    </picture>
                    <div class="card-imdb">
                        <span>
                            8.423</span>
                        <svg x="0px" y="0px" width="36px" height="36px" viewBox="0 0 36 36">
                            <circle fill="none" stroke-width="1" cx="18" cy="18" r="16"
                                stroke-dasharray="77 100" stroke-dashoffset="0"
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
    </div>
</div>
<div class="layout-section">
    <div class="layout-heading">
        <div class="layout-title fs-base">
            Most viewed </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <div class="card card-popular">
                <div class="number">
                    1 </div>
                <div class="px-4">
                    <h3 class="title"><a
                            href="https://demo.codelug.com/xtreaming/serie/the-secret-house"
                            class="text-current">
                            The Secret House</a></h3>
                    <div class="view">
                        39 K view </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card card-popular">
                <div class="number">
                    2 </div>
                <div class="px-4">
                    <h3 class="title"><a href="https://demo.codelug.com/xtreaming/serie/lucifer"
                            class="text-current">
                            Lucifer</a></h3>
                    <div class="view">
                        34.7 K view </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card card-popular">
                <div class="number">
                    3 </div>
                <div class="px-4">
                    <h3 class="title"><a
                            href="https://demo.codelug.com/xtreaming/serie/a-family-affair"
                            class="text-current">
                            A Family Affair</a></h3>
                    <div class="view">
                        32.2 K view </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card card-popular">
                <div class="number">
                    4 </div>
                <div class="px-4">
                    <h3 class="title"><a href="https://demo.codelug.com/xtreaming/serie/the-boys"
                            class="text-current">
                            The Boys</a></h3>
                    <div class="view">
                        30.8 K view </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card card-popular">
                <div class="number">
                    5 </div>
                <div class="px-4">
                    <h3 class="title"><a
                            href="https://demo.codelug.com/xtreaming/serie/game-of-thrones"
                            class="text-current">
                            Game of Thrones</a></h3>
                    <div class="view">
                        26.8 K view </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card card-popular">
                <div class="number">
                    6 </div>
                <div class="px-4">
                    <h3 class="title"><a
                            href="https://demo.codelug.com/xtreaming/serie/she-hulk-attorney-at-law"
                            class="text-current">
                            She-Hulk: Attorney at Law</a></h3>
                    <div class="view">
                        24.5 K view </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card card-popular">
                <div class="number">
                    7 </div>
                <div class="px-4">
                    <h3 class="title"><a
                            href="https://demo.codelug.com/xtreaming/serie/the-lord-of-the-rings-the-rings-of-power"
                            class="text-current">
                            The Lord of the Rings: The Rings of Power</a></h3>
                    <div class="view">
                        17.4 K view </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card card-popular">
                <div class="number">
                    8 </div>
                <div class="px-4">
                    <h3 class="title"><a
                            href="https://demo.codelug.com/xtreaming/serie/stranger-things"
                            class="text-current">
                            Stranger Things</a></h3>
                    <div class="view">
                        9.4 K view </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
