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
                            @foreach ($slidered as $element)
                                <li data-target="#slider" data-slide-to="{{ $loop->index }}"
                                    class="{{ $loop->first ? 'active' : '' }}"></li>
                            @endforeach
                        </ol>
                        @foreach ($slidered as $element)
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                <a href="{{ route($element->type . '.show', $element->id) }}"
                                    class="slide media media-slide" data-src="{{ tmdb_backdrop($element->backdrop_path) }}">
                                    <div class="slide-caption">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <div class="slide-header">
                                                    <div class="imdb">IMDB :
                                                        {{ $element->rating }}</div>
                                                    <div>
                                                        {{ $element->year }}</div>
                                                    <div class="category text-12">
                                                        {{ $element->type }}</div>
                                                </div>
                                                <div class="title">
                                                    {{ $element->title }}</div>
                                                <div class="description">
                                                    {{ $element->overview }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="carousel-control-next">
                        <a class="control-next floatright" href="#slider" role="button" data-slide="next"
                            aria-label="Next">
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
        @if ($topMoviesGenres->count())
            <div class="app-section">
                <div class="row row-cols-5 list-scrollable">
                    @foreach ($topMoviesGenres as $g)
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
        @if ($topSeriesGenres->count())
            <div class="app-section">
                <div class="row row-cols-5 list-scrollable">
                    @foreach ($topSeriesGenres as $g)
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
                                <a href="{{ route('person.show', $p) }}" class="list-media" title="{{ $p->name }}">
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
