@extends('layouts.app')
@section('after_css')
@endsection
@section('main')
    <div class="app-content pt-md-3">
        {{-- <div
            style="width:100%;height:auto;border-radius:5px; padding:15px;color:#fff;font-weight:bold;text-align:center;background-color:#8951ff;">
            Join our discord for adfree content! <a href="https://discord.gg/PvAg9Rc7kQ" target="_blank"
                style="text-decoration: none;color:#fff;">https://discord.gg/PvAg9Rc7kQ</a></div> --}}
        <div class="app-section">
            <div class="app-slider">
                <div id="slider" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <ol class="carousel-indicators">
                            <li data-target="#slider" data-slide-to="0" class="active"></li>
                            <li data-target="#slider" data-slide-to="1" class=""></li>
                            <li data-target="#slider" data-slide-to="2" class=""></li>
                            <li data-target="#slider" data-slide-to="3" class=""></li>
                        </ol>
                        <div class="carousel-item active">
                            <a href="https://demo.codelug.com/wovie/movie/shutter-island-9" class="slide media media-slide"
                                data-src="https://demo.codelug.com/wovie/public/upload/slide/shutter-island.webp">
                                <div class="slide-caption">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="slide-header">
                                                <div class="imdb">IMDB :
                                                    8.2 </div>
                                                <div>
                                                    2010 </div>
                                                <div class="category text-12">
                                                    Movie </div>
                                            </div>
                                            <div class="title">
                                                Shutter Island </div>
                                            <div class="description">
                                                World War II soldier-turned-U.S. Marshal Teddy
                                                Daniels investigates the disappearance of a patient
                                                from a hospital for the criminally insane, but his
                                                efforts are compromised by his troubling visions and
                                                also by a mysterious doctor. </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item ">
                            <a href="https://demo.codelug.com/wovie/movie/interstellar-1" class="slide media media-slide"
                                data-src="https://demo.codelug.com/wovie/public/upload/slide/interstellar.webp">
                                <div class="slide-caption">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="slide-header">
                                                <div class="imdb">IMDB :
                                                    8.3 </div>
                                                <div>
                                                    2014 </div>
                                                <div class="category text-12">
                                                    Movie </div>
                                            </div>
                                            <div class="title">
                                                Interstellar </div>
                                            <div class="description">
                                                The adventures of a group of explorers who make use
                                                of a newly discovered wormhole to surpass the
                                                limitations on human space travel and conquer the
                                                vast distances involved in an interstellar voyage.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item ">
                            <a href="https://demo.codelug.com/wovie/movie/mad-max-fury-road-7"
                                class="slide media media-slide"
                                data-src="https://demo.codelug.com/wovie/public/upload/slide/mad-max-fury-road.webp">
                                <div class="slide-caption">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="slide-header">
                                                <div class="imdb">IMDB :
                                                    19404 </div>
                                                <div>
                                                    2015 </div>
                                                <div class="category text-12">
                                                    Movie </div>
                                            </div>
                                            <div class="title">
                                                Mad Max: Fury Road </div>
                                            <div class="description">
                                                An apocalyptic story set in the furthest reaches of
                                                our planet, in a stark desert landscape where
                                                humanity is broken, and most everyone is crazed
                                                fighting for the necessities of life. </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item ">
                            <a href="https://demo.codelug.com/wovie/movie/captain-americathe-first-avenger-10"
                                class="slide media media-slide"
                                data-src="https://demo.codelug.com/wovie/public/upload/slide/captain-america-the-first-avenger.webp">
                                <div class="slide-caption">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="slide-header">
                                                <div class="imdb">IMDB :
                                                    6.9 </div>
                                                <div>
                                                    2011 </div>
                                                <div class="category text-12">
                                                    Movie </div>
                                            </div>
                                            <div class="title">
                                                Captain America: The First Avenger </div>
                                            <div class="description">
                                                During World War II, Steve Rogers is a sickly man
                                                from Brooklyn who's transformed into super-soldier
                                                Captain America to aid in the war effort. </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                        <div class="carousel-control-next">
                            <a class="control-next floatright" href="#slider" role="button" data-slide="next" aria-label="Next">
                                <svg>
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#chevron-right" />
                                </svg>
                            </a>
                        </div>

                        <div class="carousel-control-prev">
                            <a class="control-prev floatleft" href="#slider" role="button" data-slide="prev" aria-label="Prev">
                                <svg>
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                        xlink:href="{{ asset('images/sprite.svg') }}#chevron-left" />
                                </svg>
                            </a>
                        </div>
                </div>
            </div>
        </div>
        {{-- @include('includes.index.stories') --}}
        {{-- @include('includes.index.featured_collections') --}}
        {{-- @include('includes.index.popular_weekly') --}}
        @if ($recentMovies->count())
            <div class="app-section">
                <div class="app-heading">
                    <div class="text"> Newest Movies </div>
                    <a href="{{ route('movie.index') }}" class="all">All</a>
                </div>
                <div class="row row-cols-5 list-scrollable">
                    @foreach ($recentMovies as $movie)
                        @include('movie.includes.movie_item', ['movie' => $movie])
                    @endforeach
                </div>
            </div>
        @endif
        @if ($topCollections->count())
            <div class="app-section">
                <div class="app-heading">
                    <div class="text"> Collections </div>
                    <a href="{{ route('collections') }}" class="all">All</a>
                </div>
                <div class="row row-wrap row-cols-lg-3 row-cols-md-2 list-scrollable list-scrollablev2 list-grouped">
                    @foreach ($topCollections as $c)
                        <div class="col">
                            <div class="list-collection" style="background-color: ;color: ">
                                <div class="list-caption">
                                    <a href="{{ route('genre.collection.show', $c) }}" class="list-title">
                                        {{ $c->name }}
                                    </a>
                                    <a href="{{ route('genre.collection.show', $c) }}" class="list-desc">
                                        {{ $c->movies_count }} Movies
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
        @if ($recentSeries->count())
            <div class="app-section">
                <div class="app-heading">
                    <div class="text">Latest Series</div>
                    <a href="{{ route('serie.index') }}" class="all">
                        All</a>
                </div>
                <div class="row row-cols-5 list-scrollable">
                    @foreach ($recentSeries as $serie)
                        @include('serie.includes.serie_item', ['serie' => $serie])
                    @endforeach
                </div>
            </div>
        @endif
        @if ($topGenres->count())
            <div class="app-section">
                <div class="row row-cols-5 list-scrollable">
                    @foreach ($topGenres as $g)
                        <div class="col">
                            <a href="{{ route('genre.show', $g) }}" class="list-category-box"
                                style="background-color: {{ $g->color }}" title="{{ $g->name }}">
                                {{ $g->name }}
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
        @if ($recentEpisodes->count())
            <div class="app-section">
                <div class="app-heading">
                    <div class="text"> Newest Episodes </div>
                </div>
                <div class="row row-cols-1 row-cols-md-4 list-scrollable">
                    @foreach ($recentEpisodes as $episode)
                        @include('serie.episode.includes.episode_list_item', ['ep' => $episode])
                    @endforeach
                </div>
            </div>
        @endif
        @if ($popularActors->count())
            <div class="app-section">
                <div class="app-heading">
                    <div class="text"> Popular Actors </div>
                    <a href="{{ route('persons') }}" class="all">All</a>
                </div>
                <div class="row row-cols-6 list-scrollable">
                    @foreach ($popularActors as $p)
                        <div class="col">
                            <div class="list-actor">
                                <a href="{{ route('person.show', $p) }}" class="list-media"
                                    title="{{ $p->name }}">
                                    <div class="media" style="background-image: url({{ $p->avatar }});">
                                    </div>
                                </a>
                                <div class="list-caption">
                                    <a href="{{ route('person.show', $p) }}" class="list-title"
                                        title="{{ $p->name }}">{{ $p->name }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
@endsection
@section('scripts')
@endsection
