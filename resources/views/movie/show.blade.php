@extends('layouts.app')
@section('after_css')
    <x-comments::styles />
    <link rel="stylesheet" href="{{ asset('css/player.css') }}">
    <style>
        #player {
            position: absolute;
            width: 100% !important;
            height: 100% !important;
        }
    </style>
@endsection
@section('main')
    <div class="app-detail flex-fill">
        {{ Breadcrumbs::render() }}
        @if ($movie->watchPlaylists->count())
            <div class="detail-header d-flex align-items-center">
                <div class="nav-player-select dropdown">
                    <a class="dropdown-toggle btn-service selected" href="#"
                        data-embed="{{ $movie->watchPlaylists->first()->id }}" role="button" id="videoSource"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Source : <span></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="videoSource">
                        @foreach ($movie->watchPlaylists as $source)
                            <button type="button" class="btn-service dropdown-source @if($loop->first) selected @endif" data-embed="{{ $source->id }}">
                                <span class="name">{{ $source->provider }}</span>
                            </button>
                        @endforeach
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="dropdown">
                        <button type="button" class="btn-svg share" role="button" id="shareDropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg class="icon">
                                <use xlink:href="{{ asset('images/sprite.svg') }}#share"></use>
                            </svg>
                            <span>Share</span>
                        </button>
                        <div class="dropdown-menu dropdown-share" aria-labelledby="shareDropdown">
                            <a href="#" class="bg-facebook share-link" data-type="facebook"
                                data-sef="{{ route('movie.show', $movie) }}">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#facebook">
                                    </use>
                                </svg>
                            </a>
                            <a href="#" class="bg-twitter share-link" data-type="twitter" data-title="Interstellar"
                                data-sef="{{ route('movie.show', $movie) }}">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#twitter"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <button type="button" class="btn-svg report mr-0" data-toggle="modal" data-target="#m"
                        data-remote="{{ route('movie.report', $movie) }}">
                        <svg class="icon" stroke-width="3">
                            <use xlink:href="{{ asset('images/sprite.svg') }}#alert"></use>
                        </svg>
                        <span>Report</span>
                    </button>
                </div>
            </div>
        @endif
        <div class="app-detail-embed">
            @if ($movie->watchPlaylists->count())
                <div class="embed-col">
                    <div class="spinner d-none">
                        <div class="bounce1"></div>
                        <div class="bounce2"></div>
                        <div class="bounce3"></div>
                    </div>
                    <div class="embed-code d-none"></div>
                    <div class="embed-play">
                        <div class="embed-cover lazy"
                            style="background-image: url({{ tmdb_backdrop($movie->backdrop_path) }});">
                        </div>
                        <div class="play-btn" data-id="{{ $movie->id }}"
                            data-embed="{{ $movie->watchPlaylists->first()->id }}">
                            <svg class="icon">
                                <use xlink:href="{{ asset('images/sprite.svg') }}#play"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            @else
                <div class="embed-col">
                    <div class="spinner d-none">
                        <div class="bounce1"></div>
                        <div class="bounce2"></div>
                        <div class="bounce3"></div>
                    </div>
                    <div class="embed-code d-none"></div>
                    <div class="embed-play">
                        <div class="embed-lock">
                            <div class="heading">Not yet available !</div>
                            <div class="subtext">Content not yet trackable</div>
                        </div>
                    </div>
                </div>
            @endif
            <!-- Ads -->
        </div>
        <div class="detail-content">
            <div class="media media-cover"
                style="background-image: url({{ tmdb_image($movie->poster_path) }});width:260px">
            </div>
            <div class="detail-text flex-fill">
                <div class="caption">
                    <div class="caption-content">
                        <div class="category">
                            @foreach ($movie->genres as $genre)
                                <a href="{{ route('genre.show', $genre) }}">{{ $genre->name }}</a>
                            @endforeach
                        </div>
                        <h1>{{ $movie->title }}</h1>
                        <h2>{{ $movie->original_title }}</h2>
                    </div>
                    <button type="button" class="btn btn-theme-lt mr-2 px-md-5 mb-2" data-toggle="modal" data-target="#lg"
                        data-remote="{{ route('movie.trailer', $movie) }}">
                        Trailer</button>
                    @if ($movie->country)
                        <div class="video-attr">
                            <div class="attr"> Country </div>
                            <div class="text">{{ $movie->country->name }}</div>
                        </div>
                    @endif
                    @if ($movie->release_date)
                        <div class="video-attr">
                            <div class="attr">
                                Release Date </div>
                            <div class="text">{{ $movie->release_date->format('Y-m-d') }}</div>
                        </div>
                    @endif
                    <div class="video-attr">
                        <div class="attr">
                            Actors </div>
                        <div class="text" data-more="" data-element="a" data-limit="6">
                            @foreach ($movie->cast as $cast)
                                <a href="{{ route('person.show', $cast) }}">
                                    {{ $cast->name }}</a>
                            @endforeach
                            <div class="more">Show more</div>
                        </div>
                    </div>
                    @if (!empty($movie->overview))
                        <div class="video-attr">
                            <div class="attr">
                                Overview </div>
                            <div class="text">
                                <div class="text-content">
                                    {{ $movie->overview }}
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="nav-social">
                    </div>
                </div>
                <div class="action">
                    <div class="action-bar"><span style="width: 0%"></span></div>
                    <div class="action-btns">
                        <div class="action-btn like " data-id="1">
                            <svg>
                                <use xlink:href="{{ asset('images/sprite.svg') }}#like"></use>
                            </svg>
                            <span data-votes="0">--</span>
                        </div>
                        <div class="action-btn dislike " data-id="1">
                            <svg>
                                <use xlink:href="{{ asset('images/sprite.svg') }}#dislike">
                                </use>
                            </svg>
                            <span data-votes="1">--</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ads -->
        @if ($similarMovies->count())
            <div class="app-section">
                <div class="app-heading">
                    <div class="text"> Similar content </div>
                </div>
                <div class="row row-cols-6 list-scrollable">
                    @foreach ($similarMovies as $movie)
                        @include('movie.includes.movie_item', ['movie' => $movie])
                    @endforeach
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col">
                {{-- <livewire:comments :model="$movie" /> --}}
                <div class="comments app-section pt-0" data-content="1" data-type="post">
                    <div class="app-heading">
                        <div class="text">Comments</div>
                    </div>
                    <div class="py-3">The comment field is only for members. <a
                            href="https://demo.codelug.com/wovie/login" class="text-white font-weight-bold">Login</a>, <a
                            href="https://demo.codelug.com/wovie/register"
                            class="text-white font-weight-bold">Register</a></div>
                    <div class="d-flex align-items-center">
                        <div class="comment-total">1 Comment</div>
                        <div class="sort dropdown">
                            <button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                                Sorting <span class="current">Newest</span>
                            </button>
                            <ul class="dropdown-menu selected">
                                <a href="#" class="dropdown-item" data-sort="1">Newest</a>
                                <a href="#" class="dropdown-item" data-sort="3">Popular</a>
                                <a href="#" class="dropdown-item" data-sort="2">Oldest</a>
                            </ul>
                        </div>
                    </div>
                    <div class="loader" style=""></div>
                    <ul class="list-comments" style="">
                    </ul>
                    <div class="pagination-container"></div>
                </div>
                <script id="commentTemplate" type="text/template">
                <li class="list-comment {% if (spoiler == '1') { %} spoiler {% } %}" data-id="{%= id %}">
                {% if (spoiler == '1') { %}
                    <div class="spoiler-btn" data-id="{%= id %}">This comment contains spoilers. Click to read</div>
                {% } %}
                <div class="list-comment-content">
                    <div class="list-avatar">
                        {% if (author.url) { %}
                        <a href="{%= author.url %}" target="_blank">{%= author.avatar %}</a>
                        {% } else { %}
                        {%= author.avatar %}
                        {% } %}
                    </div>
                    <div class="list-body">
                        {% if (author.url) { %}
                        <a href="{%= author.url %}" target="_blank" class="list-name">{%= author.name %}</a>
                        {% } else { %}
                        <span class="list-name">{%= author.name %}</span>
                        {% } %}
                        <a href="#!comment={%= id %}" class="list-date">
                            <time title="{%= created %}">{%= created %}</time>
                        </a>
                        {% if (status != '1') { %} <span class="text-warning text-12">Pending</span> {% } %}
                        <div class="text">{%= comment %}</div>
                        <form method="POST" class="edit-form comment-form">
                            <input type="hidden" name="id" value="{%= id %}">
                            <input type="hidden" name="action" value="update">
                            <textarea name="comment" class="form-control mb-2" rows="1 wrap=" hard" maxlength="500" data-content="{%= comment %}" placeholder="Yorum"></textarea>
                            <div class="comment-btn">
                                <button type="submit" class="btn btn-theme" data-loading-text="..">Edit</button>
                                <button type="button" class="btn cancel">Cancel</button>
                            </div>
                            <div class="response"></div>
                        </form>
                        <div class="list-comment-footer">
                            <div class="votes">
                                <a href="#" title="Beğen" class="like {%= (voted === 'up' ? 'voted' : '') %}">
                                    <svg class="icon">
                                        <use xlink:href="{{ asset("images/sprite.svg") }}#like" />
                                    </svg>
                                <span class="likes" data-votes="{%= likes %}">
                                    {%= likes || '' %}
                                </span>
                                </a>
                                <a href="#" title="Beğenme" class="dislike {%= (voted === 'down' ? 'voted' : '') %}">
                                    <svg class="icon">
                                        <use xlink:href="{{ asset("images/sprite.svg") }}#dislike" />
                                    </svg>
                                    <span class="dislikes" data-votes="{%= dislikes %}">
                                        {%= dislikes || '' %}
                                    </span>
                                </a>
                            </div>
                            {% if (reply) { %}
                            <a href="#" class="reply" data-parent="{%= id %}" data-root="{%= parent_id || id %}">Reply</a>
                            {% } %}

                            {% if (edit) { %}
                            <a href="#" class="quick-edit">Edit</a>
                            {% } %}
                        </div>
                        <div class="replybox"></div>
                    </div>
                </div>
                <ul class="list-comments children" data-parent="{%= id %}"></ul>
            </li>
            </script>
                <script id="paginationTemplate" type="text/template">
                <ul class="pagination pagination-sm">
                    <li {% if (current_page === 1) { %} class="disabled page-item" {% } %}>
                        <a href="#!page={%= prev_page %}" data-page="{%= prev_page %}" title="Prev" class="page-link">&laquo;</a>
                    </li>

                    {% if (first_adjacent_page > 1) { %}
                        <li class="page-item">
                            <a href="#!page=1" data-page="1" class="page-link">1</a>
                        </li>
                        {% if (first_adjacent_page > 2) { %}
                            <li class="disabled"><a class="page-link">...</a></li>
                        {% } %}
                    {% } %}

                    {% for (var i = first_adjacent_page; i <= last_adjacent_page; i++) { %}
                        <li class="page-item {% if (current_page === i) { %} active {% } %}">
                            <a href="#!page={%= i %}" data-page="{%= i %}" class="page-link">{%= i %}</a>
                        </li>
                    {% } %}

                    {% if (last_adjacent_page < last_page) { %}
                        {% if (last_adjacent_page < last_page - 1) { %}
                            <li class="disabled page-item"><a class="page-link">...</a></li>
                        {% } %}
                        <li class="page-item"><a href="#!page={%= last_page %}" data-page="{%= last_page %}" class="page-link">{%= last_page %}</a></li>
                    {% } %}

                    <li class="page-item {% if (current_page === last_page) { %} class="disabled" {% } %}">
                        <a href="#!page={%= next_page %}" data-page="{%= next_page %}" title="Next" class="page-link">&raquo</a>
                    </li>
                </ul>
            </script>
                <script id="alertTemplate" type="text/template">
                <div class="alert bg-warning-lt text-12 my-2">
                    {% if (typeof message === 'object') { %}

                            {% for (var i in message) { %}
                                <div>{%= message[i] %}</div>
                            {% } %}

                    {% } else { %}
                        {%= message %}
                    {% } %}
                </div>
            </script>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/plyr.hls.js') }}"></script>
    <script src="{{ asset('js/plyr.js') }}"></script>
    <script src="{{ asset('js/jquery.comment.js') }}"></script>
    <script src="{{ asset('js/detail.js') }}"></script>
    <x-comments::scripts />
    <script src="{{ asset('js/player.js') }}"></script>
@endsection
