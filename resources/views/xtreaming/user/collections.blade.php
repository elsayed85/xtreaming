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
                            Collections </h3>
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
                                        <li class="list-inline-item"><a href="https://demo.codelug.com/xtreaming/user/admin"
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
                                        <li class="list-inline-item"><a href="https://demo.codelug.com/xtreaming/user/admin"
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
                                        <li class="list-inline-item"><a href="https://demo.codelug.com/xtreaming/user/admin"
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
            </div>
        </div>
    </div>
@endsection
