@extends('layouts.app')
@section('after_css')
    <link rel="stylesheet" href="{{ asset('css/player.css') }}">
    <style>
        #player {
            position: absolute;
            width: 100% !important;
            height: 100% !important;
        }
    </style>
    <script>
        _SHOW_TYPE = 'episode';
    </script>
@endsection
@section('main')
    <style>
        .backdrop_bg {
            background-image: linear-gradient(to right, rgba({{ $rgb }}, 80) calc((50vw - 170px) - 340px), rgba({{ $rgb }}, 0.90) 30%, rgba({{ $rgb }}, 0.80) 100%), url("{{ tmdb_backdrop($episode->serie->backdrop_path) }}");
            background-repeat: no-repeat;
            background-size: cover;
            box-shadow: 0px 5px 10px rgba({{ $rgb }});
            margin-bottom: 10px;
            padding: 15px;
        }

        .app-detail .season-list .episodes a {
            background-color: transparent;
        }

        .app-detail .season-list {
            background-color: #00000073;
        }

        .app-detail .detail-content .cover {
            flex: 0 0 25%;
            max-width: 25%;
        }
    </style>
    <div class="app-detail flex-fill">
        {{ Breadcrumbs::render() }}
        @if ($episode->watchPlaylists->count())
            <div class="detail-header d-flex align-items-center">
                <div class="nav-player-select dropdown">
                    <a class="dropdown-toggle btn-service selected" href="#"
                        data-embed="{{ $episode->watchPlaylists->first()->id }}" role="button" id="videoSource"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Source : <span></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="videoSource">
                        @foreach ($episode->watchPlaylists as $source)
                            <button type="button"
                                class="btn-service dropdown-source @if ($loop->first) selected @endif"
                                data-embed="{{ $source->id }}">
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
                                data-sef="{{ route('episode.show', ['serie' => $episode->serie_id, 'number' => $episode->number]) }}">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#facebook">
                                    </use>
                                </svg>
                            </a>
                            <a href="#" class="bg-twitter share-link" data-type="twitter" data-title="Breaking Bad"
                                data-sef="{{ route('episode.show', ['serie' => $episode->serie_id, 'number' => $episode->number]) }}">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#twitter"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <button type="button" class="btn-svg report mr-0" data-toggle="modal" data-target="#m"
                        data-remote="{{ route('episode.report', ['serie' => $episode->serie_id, 'number' => $episode->number]) }}">
                        <svg class="icon" stroke-width="3">
                            <use xlink:href="{{ asset('images/sprite.svg') }}#alert"></use>
                        </svg>
                        <span>Report</span>
                    </button>
                </div>
            </div>
        @endif
        <div class="app-detail-embed">
            @if ($episode->watchPlaylists->count())
                <div class="embed-col">
                    <div class="spinner d-none">
                        <div class="bounce1"></div>
                        <div class="bounce2"></div>
                        <div class="bounce3"></div>
                    </div>
                    <div class="embed-code d-none"></div>
                    <div class="embed-play">
                        <div class="embed-cover lazy"
                            style="background-image: url({{ tmdb_backdrop($episode->serie->backdrop_path) }});">
                        </div>
                        <div class="play-btn" data-epn="{{ $episode->number }}" data-epsid="{{ $episode->serie->id }}"
                            data-embed="{{ $episode->watchPlaylists->first()->id }}">
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
        <div class="episode-nav">
            @if ($prev)
                <a href="{{ route('episode.show', ['serie' => $prev->serie_id, 'number' => $prev->number]) }}"
                    class="pr-md-5">
                    <div class="svg-icon">
                        <svg>
                            <use xlink:href="{{ asset('images/sprite.svg') }}#chevron-left"></use>
                        </svg>
                    </div>
                    <div class="ml-3">
                        <div class="name">Prev episode</div>
                        <div class="episode"> {{ $prev->season_number }}.Season {{ $prev->number }}.Episode </div>
                    </div>
                </a>
            @endif
            @if ($next)
                <a href="{{ route('episode.show', ['serie' => $next->serie_id, 'number' => $next->number]) }}"
                    class="pl-md-5 ml-auto">
                    <div class="mr-3 text-right">
                        <div class="name">
                            Next episode </div>
                        <div class="episode">{{ $next->season_number }}.Season {{ $next->number }}.Episode</div>
                    </div>
                    <div class="svg-icon">
                        <svg>
                            <use xlink:href="{{ asset('images/sprite.svg') }}#chevron-right"></use>
                        </svg>
                    </div>
                </a>
            @endif
        </div>
        <div class="backdrop_bg">
            <div class="detail-content">
                <div class="cover">
                    <div class="media media-cover mb-2"
                        style="background-image: url({{ tmdb_image($serie->poster_path) }});">
                    </div>
                </div>
                <!-- ADS -->
                <div class="detail-text flex-fill">
                    <div class="caption">
                        <div class="caption-content">
                            <h3 class="mb-1">{{ $episode->season_number }}.Season, {{ $episode->number }}.Episode </h3>
                            <a href="{{ route('serie.show', $episode->serie_id) }}">
                                <h1>{{ $episode->serie->title }} </h1>
                            </a>
                            <h2>{{ $episode->name }}</h2>
                            <div class="categories">
                                @foreach ($episode->serie->genres as $genre)
                                    <a href="{{ route('genre.show', $genre) }}">
                                        {{ $genre->name }}</a>
                                @endforeach
                            </div>
                        </div>

                        @if ($episode->serie->country)
                            <div class="video-attr">
                                <div class="attr">
                                    Country </div>
                                <div class="text">{{ $serie->country->name }}</div>
                            </div>
                        @endif
                        <div class="video-attr">
                            <div class="attr">
                                Release Date </div>
                            <div class="text">{{ $episode->serie->release_date->format('Y-m-d') }}</div>
                        </div>
                        <div class="video-attr">
                            <div class="attr">
                                Actors </div>
                            <div class="text" data-more="" data-element="a" data-limit="6">
                                @foreach ($episode->serie->cast as $cast)
                                    <a href="{{ route('person.show', $cast) }}">
                                        {{ $cast->name }}</a>
                                @endforeach
                                <div class="more">Show more</div>
                            </div>
                        </div>
                    </div>
                    <div class="action">
                        <div class="action-bar"><span style="width: NAN%"></span></div>
                        <div class="action-btns">
                            <div class="action-btn like " data-id="13">
                                <svg>
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#like"></use>
                                </svg>
                                <span data-votes="0">--</span>
                            </div>
                            <div class="action-btn dislike " data-id="13">
                                <svg>
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#dislike">
                                    </use>
                                </svg>
                                <span data-votes="0">--</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ADS -->
            <div class="season-list">
                <div class="seasons">
                    <ul class="nav" role="tablist">
                        @foreach ($episode->serie->seasons as $season)
                            <li class="nav-item">
                                <a class="nav-link {{ $season->number == $episode->season_number ? 'active' : '' }}"
                                    id="season-{{ $season->number }}-tab" data-toggle="tab"
                                    href="#season-{{ $season->number }}" role="tab"
                                    aria-controls="season-{{ $season->number }}"
                                    aria-selected="{{ $loop->first ? 'true' : '' }}">
                                    {{ $season->number }}.Season</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="episodes tab-content">
                    @foreach ($episode->serie->seasons as $season)
                        <div class="tab-pane {{ $season->number == $episode->season_number ? 'active' : '' }}"
                            id="season-{{ $season->number }}" role="tabpanel"
                            aria-labelledby="season-{{ $season->number }}-tab">
                            @if ($season->episodes->count())
                                @foreach ($season->episodes as $episode)
                                    <a class="episode_item {{ $episode->number == $episode->number ? 'hover' : '' }}"
                                        href="{{ route('episode.show', ['serie' => $episode->serie_id, 'number' => $episode->number]) }}">
                                        <div class="episode">
                                            {{ $episode->number }}.Episode </div>
                                        <div class="name">
                                            {{ $episode->name }} </div>
                                    </a>
                                @endforeach
                            @else
                                <div class="episode">
                                    No episode found Or Not Added By us yet. </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="app-section">
            <div class="app-heading">
                <div class="text">Similar content </div>
            </div>
            <div class="row row-cols-6 list-scrollable">
                <div class="col">
                    <div class="list-movie">
                        <a href="https://demo.codelug.com/wovie/serie/the-walking-dead-11" class="list-media">
                            <div class="list-media-attr">
                                <div class="quality">
                                    HD </div>
                            </div>
                            <div class="play-btn">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#play">
                                    </use>
                                </svg>
                            </div>
                            <div class="media media-cover"
                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-the-walking-dead.webp&quot;);">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://demo.codelug.com/wovie/serie/the-walking-dead-11" class="list-titlesub">
                                The Walking Dead </a>
                            <a href="https://demo.codelug.com/wovie/serie/the-walking-dead-11" class="list-title">
                                The Walking Dead </a>
                            <a href="https://demo.codelug.com/wovie/category/drama" class="list-category">
                                Drama </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="list-movie">
                        <a href="https://demo.codelug.com/wovie/serie/riverdale-12" class="list-media">
                            <div class="list-media-attr">
                                <div class="quality">
                                    Ultra HD </div>
                            </div>
                            <div class="play-btn">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#play">
                                    </use>
                                </svg>
                            </div>
                            <div class="media media-cover"
                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-riverdale.webp&quot;);">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://demo.codelug.com/wovie/serie/riverdale-12" class="list-titlesub">
                                Riverdale </a>
                            <a href="https://demo.codelug.com/wovie/serie/riverdale-12" class="list-title">
                                Riverdale </a>
                            <a href="https://demo.codelug.com/wovie/category/drama" class="list-category">
                                Drama </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="list-movie">
                        <a href="https://demo.codelug.com/wovie/serie/greys-anatomy-15" class="list-media">
                            <div class="list-media-attr">
                                <div class="quality">
                                    HD </div>
                            </div>
                            <div class="play-btn">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#play">
                                    </use>
                                </svg>
                            </div>
                            <div class="media media-cover"
                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-greys-anatomy.webp&quot;);">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://demo.codelug.com/wovie/serie/greys-anatomy-15" class="list-titlesub">
                                Grey's Anatomy </a>
                            <a href="https://demo.codelug.com/wovie/serie/greys-anatomy-15" class="list-title">
                                Grey's Anatomy </a>
                            <a href="https://demo.codelug.com/wovie/category/drama" class="list-category">
                                Drama </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="list-movie">
                        <a href="https://demo.codelug.com/wovie/serie/arrow-16" class="list-media">
                            <div class="list-media-attr">
                                <div class="quality">
                                    HD </div>
                            </div>
                            <div class="play-btn">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#play">
                                    </use>
                                </svg>
                            </div>
                            <div class="media media-cover"
                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-arrow.webp&quot;);">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://demo.codelug.com/wovie/serie/arrow-16" class="list-titlesub">
                                Arrow </a>
                            <a href="https://demo.codelug.com/wovie/serie/arrow-16" class="list-title">
                                Arrow </a>
                            <a href="https://demo.codelug.com/wovie/category/drama" class="list-category">
                                Drama </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="list-movie">
                        <a href="https://demo.codelug.com/wovie/serie/american-horror-story-17" class="list-media">
                            <div class="list-media-attr">
                                <div class="quality">
                                    Ultra HD </div>
                            </div>
                            <div class="play-btn">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#play">
                                    </use>
                                </svg>
                            </div>
                            <div class="media media-cover"
                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-american-horror-story.webp&quot;);">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://demo.codelug.com/wovie/serie/american-horror-story-17" class="list-titlesub">
                                American Horror Story </a>
                            <a href="https://demo.codelug.com/wovie/serie/american-horror-story-17" class="list-title">
                                American Horror Story </a>
                            <a href="https://demo.codelug.com/wovie/category/drama" class="list-category">
                                Drama </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="list-movie">
                        <a href="https://demo.codelug.com/wovie/serie/fear-the-walking-dead-18" class="list-media">
                            <div class="list-media-attr">
                                <div class="quality">
                                    HD </div>
                            </div>
                            <div class="play-btn">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#play">
                                    </use>
                                </svg>
                            </div>
                            <div class="media media-cover"
                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-fear-the-walking-dead.webp&quot;);">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://demo.codelug.com/wovie/serie/fear-the-walking-dead-18" class="list-titlesub">
                                Fear the Walking Dead </a>
                            <a href="https://demo.codelug.com/wovie/serie/fear-the-walking-dead-18" class="list-title">
                                Fear the Walking Dead </a>
                            <a href="https://demo.codelug.com/wovie/category/drama" class="list-category">
                                Drama </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="comments app-section pt-0" data-content="281" data-type="episode">
                    <div class="app-heading">
                        <div class="text">Comments</div>
                    </div>
                    <div class="py-3">The comment field is only for members. <a
                            href="https://demo.codelug.com/wovie/login" class="text-white font-weight-bold">Login</a>, <a
                            href="https://demo.codelug.com/wovie/register"
                            class="text-white font-weight-bold">Register</a></div>
                    <div class="d-flex align-items-center">
                        <div class="comment-total">No comments yet</div>
                        <div class="sort dropdown" style="display: none;">
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
                    <ul class="list-comments" style=""></ul>
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
    <script src="{{ asset('js/player.js') }}"></script>
@endsection
