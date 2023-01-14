@extends('layouts.app')
@section('main')
    <div class="layout-section">
        <ol class="breadcrumb d-inline-flex text-muted mb-2">
            <li class="breadcrumb-item"><a href="https://demo.codelug.com/xtreaming">
                    Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">
                Community </li>
        </ol>
        <div class="row gx-xl-5 justify-content-lg-center">
            <div class="col-lg">
                <div class="layout-heading mb-3">
                    <h1 class="mb-0 h3">
                        Community </h1>
                    <div class="layout-heading-filter">
                        <a href="https://demo.codelug.com/xtreaming/community/" class="fs-sm text-white">
                            Newest</a>
                        <a href="https://demo.codelug.com/xtreaming/community/popular" class="fs-sm ">
                            Most popular</a>
                    </div>
                </div>
                <div class="py-2 mb-2">
                    <div class="row">
                        <div class="col-auto">
                            <a href="https://demo.codelug.com/xtreaming/user/admin" class="d-block"
                                data-bs-tooltip="tooltip" data-bs-placement="top" title="Xtreaming - @admin">
                                <div class="avatar avatar-xl rounded-circle text-white fs-xs"
                                    style="background-color:#864bfc;">A</div>
                            </a>
                        </div>
                        <div class="col text-gray-600">
                            <ul class="list-inline list-separator fs-xs text-gray-500 mb-1">
                                <li class="list-inline-item"><a href="https://demo.codelug.com/xtreaming/user/admin"
                                        class="text-current fw-semibold">
                                        admin</a></li>
                                <li class="list-inline-item">
                                    Sep. 02, 2022 </li>
                                <li class="list-inline-item">
                                    0 reply </li>
                            </ul>
                            <h3 class="fs-sm text-heading fw-semibold mb-1 h-1x"><a
                                    href="https://demo.codelug.com/xtreaming/thread/the-lord-of-the-rings-the-rings-of-power-2"
                                    class="text-current">
                                    The Lord of the Rings: The Rings of Power</a></h3>
                            <p class="fs-sm h-1x mb-2 text-muted">
                                Beginning in a time of relative peace, we follow an ensemble cast of
                                characters as they confront the re-emergence of evil to Middle-earth.
                                From the darkest depths of the Misty Mountains, to the majestic forests
                                of Lindon, to the breathtaking island kingdom of Númenor, to the
                                furthest reaches of the </p>
                        </div>
                    </div>
                </div>
                <div class="py-2 mb-2">
                    <div class="row">
                        <div class="col-auto">
                            <a href="https://demo.codelug.com/xtreaming/user/admin" class="d-block"
                                data-bs-tooltip="tooltip" data-bs-placement="top" title="Xtreaming - @admin">
                                <div class="avatar avatar-xl rounded-circle text-white fs-xs"
                                    style="background-color:#864bfc;">A</div>
                            </a>
                        </div>
                        <div class="col text-gray-600">
                            <ul class="list-inline list-separator fs-xs text-gray-500 mb-1">
                                <li class="list-inline-item"><a href="https://demo.codelug.com/xtreaming/user/admin"
                                        class="text-current fw-semibold">
                                        admin</a></li>
                                <li class="list-inline-item">
                                    Sep. 02, 2022 </li>
                                <li class="list-inline-item">
                                    0 reply </li>
                            </ul>
                            <h3 class="fs-sm text-heading fw-semibold mb-1 h-1x"><a
                                    href="https://demo.codelug.com/xtreaming/thread/great-movies-to-watch-1"
                                    class="text-current">
                                    Great movies to watch</a></h3>
                            <p class="fs-sm h-1x mb-2 text-muted">
                                Airship venture is an html5 arcade game, press and hold the screen to
                                fly avoid enemies and get score to win </p>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center flex-nowrap mt-3">
                </div>
            </div>
            <div class="col-lg-auto">
                <div class="w-xl-300">
                    <div class="mb-3 d-grid">
                        <a href="https://demo.codelug.com/xtreaming/login" class="btn btn-theme py-3">
                            Open thread</a>
                    </div>
                    <div class="mb-3 d-grid">
                        <button type="button" class="btn btn-theme py-3" data-bs-toggle="modal" data-bs-target="#m"
                            data-remote="https://demo.codelug.com/xtreaming/modal/thread">
                            Open thread loged
                        </button>
                    </div>
                    <div class="card bg-gray-200 mb-3">
                        <div class="card-body">
                            <h3 class="fw-semibold fs-sm mb-3">
                                Leaderboard </h3>
                            <div class="leaderboard">
                                <div class="row align-items-center mb-3">
                                    <div class="col-auto">
                                        <a href="https://demo.codelug.com/xtreaming/user/admin" class="d-block avatar"
                                            data-bs-tooltip="tooltip" data-bs-placement="top" title="Xtreaming - @admin">
                                            <div class="avatar-body rounded-circle text-white fs-xs"
                                                style="background-color:#864bfc;">A</div> <span class="avatar-badge">
                                                1</span>
                                        </a>
                                    </div>
                                    <div class="col text-gray-700 lh-sm">
                                        <div class="text-uppercase text-muted fw-bold fs-xxs">
                                            Enthusiast </div>
                                        <a href="https://demo.codelug.com/xtreaming/user/admin"
                                            class="text-current fs-xs fw-semibold">
                                            admin</a>
                                    </div>
                                    <div class="col-auto">
                                        <div class="fs-xxs fw-bold text-theme">
                                            1270 XP </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
