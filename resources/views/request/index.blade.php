@extends('layouts.app')
@section('main')
    <div class="layout-section">
        <ol class="breadcrumb d-inline-flex text-muted mb-2">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">
                Request </li>
        </ol>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <form method="post" class="card shadow-none bg-gray-300 mb-4">
                    <input type="hidden" name="_TOKEN"
                        value="JDJ5JDEwJGF2ZjhFY1R1NWhzSUlnR252MnY4Rk91alpuay9tUUdCNjczYkdRQUhGS2p1L09JRjRDQXNl">
                    <input type="hidden" name="_ACTION" value="search">
                    <div class="py-1 px-3">
                        <div class="row gx-xl-0 align-items-xl-center">
                            <div class="col-lg-3">
                                <select class="form-select border-0 shadow-none bg-gray-300 py-3">
                                    <option value="movie">Movie</option>
                                    <option value="tv">TV Show</option>
                                </select>
                            </div>
                            <div class="col">
                                <input type="search" name="q"
                                    class="form-control bg-transparent py-3 border-0 shadow-none"
                                    placeholder="Search a title .." value="last">
                            </div>
                            <div class="col-lg-auto">
                                <button type="submit" class="btn btn-square lh-1 shadow-none">
                                    <svg width="18" height="18" stroke="currentColor" stroke-width="2"
                                        fill="none">
                                        <use
                                            xlink:href="{{ asset('images/icons.svg') }}#search">
                                        </use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row row-cols-xl-6">
            <div class="col-lg-2">
                <div class="card card-movie">
                    <div class="ratio rounded bg-img-cover"
                        style="--bs-aspect-ratio: 150%;background-image:url(https://image.tmdb.org/t/p/w780/1NqwE6LP9IEdOZ57NCT51ftHtWT.jpg);">
                    </div>
                    <div class="card-body">
                        <h3 class="title">
                            Puss in Boots: The Last Wish </h3>
                        <div class="d-grid mt-2">
                            <button class="btn btn-ghost btn-request btn-sm" data-id="315162" data-type="movie">
                                Request</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card card-movie">
                    <div class="ratio rounded bg-img-cover"
                        style="--bs-aspect-ratio: 150%;background-image:url(https://image.tmdb.org/t/p/w780/uKvVjHNqB5VmOrdxqAt2F7J78ED.jpg);">
                    </div>
                    <div class="card-body">
                        <h3 class="title">
                            The Last of Us </h3>
                        <div class="d-grid mt-2">
                            <button class="btn btn-ghost btn-request btn-sm" data-id="100088" data-type="tv">
                                Request</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card card-movie">
                    <div class="ratio rounded bg-img-cover"
                        style="--bs-aspect-ratio: 150%;background-image:url(https://image.tmdb.org/t/p/w780/8eJf0hxgIhE6QSxbtuNCekTddy1.jpg);">
                    </div>
                    <div class="card-body">
                        <h3 class="title">
                            The Last Kingdom </h3>
                        <div class="d-grid mt-2">
                            <button class="btn btn-ghost btn-request btn-sm" data-id="63333" data-type="tv">
                                Request</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card card-movie">
                    <div class="ratio rounded bg-img-cover"
                        style="--bs-aspect-ratio: 150%;background-image:url(https://image.tmdb.org/t/p/w780/85Fx3ax4PLQlAODI1K8Kk0kAUdO.jpg);">
                    </div>
                    <div class="card-body">
                        <h3 class="title">
                            LOL: Last One Laughing </h3>
                        <div class="d-grid mt-2">
                            <button class="btn btn-ghost btn-request btn-sm" data-id="84969" data-type="tv">
                                Request</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card card-movie">
                    <div class="ratio rounded bg-img-cover"
                        style="--bs-aspect-ratio: 150%;background-image:url(https://image.tmdb.org/t/p/w780/qvqyDj34Uivokf4qIvK4bH0m0qF.jpg);">
                    </div>
                    <div class="card-body">
                        <h3 class="title">
                            Last Seen Alive </h3>
                        <div class="d-grid mt-2">
                            <button class="btn btn-ghost btn-request btn-sm" data-id="961484" data-type="movie">
                                Request</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card card-movie">
                    <div class="ratio rounded bg-img-cover"
                        style="--bs-aspect-ratio: 150%;background-image:url(https://image.tmdb.org/t/p/w780/bAQ8O5Uw6FedtlCbJTutenzPVKd.jpg);">
                    </div>
                    <div class="card-body">
                        <h3 class="title">
                            The Last: Naruto the Movie </h3>
                        <div class="d-grid mt-2">
                            <button class="btn btn-success btn-sm">
                                Ready</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card card-movie">
                    <div class="ratio rounded bg-img-cover"
                        style="--bs-aspect-ratio: 150%;background-image:url(https://image.tmdb.org/t/p/w780/5qLmBQU0wyzTXt8iT7yANkeW3Gk.jpg);">
                    </div>
                    <div class="card-body">
                        <h3 class="title">
                            Last Man Standing </h3>
                        <div class="d-grid mt-2">
                            <button class="btn btn-ghost btn-request btn-sm" data-id="39297" data-type="tv">
                                Request</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card card-movie">
                    <div class="ratio rounded bg-img-cover"
                        style="--bs-aspect-ratio: 150%;background-image:url(https://image.tmdb.org/t/p/w780/43pAddeD10rllMQMGN7ucuOi4NI.jpg);">
                    </div>
                    <div class="card-body">
                        <h3 class="title">
                            The Last Ship </h3>
                        <div class="d-grid mt-2">
                            <button class="btn btn-ghost btn-request btn-sm" data-id="60802" data-type="tv">
                                Request</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card card-movie">
                    <div class="ratio rounded bg-img-cover"
                        style="--bs-aspect-ratio: 150%;background-image:url(https://image.tmdb.org/t/p/w780/s5HQf2Gb3lIO2cRcFwNL9sn1o1o.jpg);">
                    </div>
                    <div class="card-body">
                        <h3 class="title">
                            Transformers: The Last Knight </h3>
                        <div class="d-grid mt-2">
                            <button class="btn btn-ghost btn-request btn-sm" data-id="335988" data-type="movie">
                                Request</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card card-movie">
                    <div class="ratio rounded bg-img-cover"
                        style="--bs-aspect-ratio: 150%;background-image:url(https://image.tmdb.org/t/p/w780/kTQ3J8oTTKofAVLYnds2cHUz9KO.jpg);">
                    </div>
                    <div class="card-body">
                        <h3 class="title">
                            Rambo: Last Blood </h3>
                        <div class="d-grid mt-2">
                            <button class="btn btn-ghost btn-request btn-sm" data-id="522938" data-type="movie">
                                Request</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card card-movie">
                    <div class="ratio rounded bg-img-cover"
                        style="--bs-aspect-ratio: 150%;background-image:url(https://image.tmdb.org/t/p/w780/4B7liCxNCZIZGONmAMkCnxVlZQV.jpg);">
                    </div>
                    <div class="card-body">
                        <h3 class="title">
                            Last Man Down </h3>
                        <div class="d-grid mt-2">
                            <button class="btn btn-ghost btn-request btn-sm" data-id="860623" data-type="movie">
                                Request</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card card-movie">
                    <div class="ratio rounded bg-img-cover"
                        style="--bs-aspect-ratio: 150%;background-image:url(https://image.tmdb.org/t/p/w780/cHFZA8Tlv03nKTGXhLOYOLtqoSm.jpg);">
                    </div>
                    <div class="card-body">
                        <h3 class="title">
                            Avatar: The Last Airbender </h3>
                        <div class="d-grid mt-2">
                            <button class="btn btn-ghost btn-request btn-sm" data-id="246" data-type="tv">
                                Request</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card card-movie">
                    <div class="ratio rounded bg-img-cover"
                        style="--bs-aspect-ratio: 150%;background-image:url(https://image.tmdb.org/t/p/w780/zjrJE0fpzPvX8saJXj8VNfcjBoU.jpg);">
                    </div>
                    <div class="card-body">
                        <h3 class="title">
                            The Last Duel </h3>
                        <div class="d-grid mt-2">
                            <button class="btn btn-ghost btn-request btn-sm" data-id="617653" data-type="movie">
                                Request</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card card-movie">
                    <div class="ratio rounded bg-img-cover"
                        style="--bs-aspect-ratio: 150%;background-image:url(https://image.tmdb.org/t/p/w780/zgwRTYWEEPivTwjB9S03HtmMcbM.jpg);">
                    </div>
                    <div class="card-body">
                        <h3 class="title">
                            The Last Airbender </h3>
                        <div class="d-grid mt-2">
                            <button class="btn btn-ghost btn-request btn-sm" data-id="10196" data-type="movie">
                                Request</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card card-movie">
                    <div class="ratio rounded bg-img-cover"
                        style="--bs-aspect-ratio: 150%;background-image:url(https://image.tmdb.org/t/p/w780/lPsD10PP4rgUGiGR4CCXA6iY0QQ.jpg);">
                    </div>
                    <div class="card-body">
                        <h3 class="title">
                            Raya and the Last Dragon </h3>
                        <div class="d-grid mt-2">
                            <button class="btn btn-ghost btn-request btn-sm" data-id="527774" data-type="movie">
                                Request</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card card-movie">
                    <div class="ratio rounded bg-img-cover"
                        style="--bs-aspect-ratio: 150%;background-image:url(https://image.tmdb.org/t/p/w780/u2MNENZmIg1ktAPiqmjrNqm0g4c.jpg);">
                    </div>
                    <div class="card-body">
                        <h3 class="title">
                            The Last Leg </h3>
                        <div class="d-grid mt-2">
                            <button class="btn btn-ghost btn-request btn-sm" data-id="63706" data-type="tv">
                                Request</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card card-movie">
                    <div class="ratio rounded bg-img-cover"
                        style="--bs-aspect-ratio: 150%;background-image:url(https://image.tmdb.org/t/p/w780/nb9fc9INMg8kQ8L7sE7XTNsZnUX.jpg);">
                    </div>
                    <div class="card-body">
                        <h3 class="title">
                            Insidious: The Last Key </h3>
                        <div class="d-grid mt-2">
                            <button class="btn btn-ghost btn-request btn-sm" data-id="406563" data-type="movie">
                                Request</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card card-movie">
                    <div class="ratio rounded bg-img-cover"
                        style="--bs-aspect-ratio: 150%;background-image:url(https://image.tmdb.org/t/p/w780/kOVEVeg59E0wsnXmF9nrh6OmWII.jpg);">
                    </div>
                    <div class="card-body">
                        <h3 class="title">
                            Star Wars: The Last Jedi </h3>
                        <div class="d-grid mt-2">
                            <button class="btn btn-ghost btn-request btn-sm" data-id="181808" data-type="movie">
                                Request</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card card-movie">
                    <div class="ratio rounded bg-img-cover"
                        style="--bs-aspect-ratio: 150%;background-image:url(https://image.tmdb.org/t/p/w780/dhfM8t16UlDwljSkKlYVGkL92Mf.jpg);">
                    </div>
                    <div class="card-body">
                        <h3 class="title">
                            Grounded: Making The Last of Us </h3>
                        <div class="d-grid mt-2">
                            <button class="btn btn-ghost btn-request btn-sm" data-id="211707" data-type="movie">
                                Request</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card card-movie">
                    <div class="ratio rounded bg-img-cover"
                        style="--bs-aspect-ratio: 150%;background-image:url(https://image.tmdb.org/t/p/w780/z3l5iwWQLxcInVnNkC8k8hxqZ60.jpg);">
                    </div>
                    <div class="card-body">
                        <h3 class="title">
                            デジモンアドベンチャー LAST EVOLUTION 絆 </h3>
                        <div class="d-grid mt-2">
                            <button class="btn btn-ghost btn-request btn-sm" data-id="571265" data-type="movie">
                                Request</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
