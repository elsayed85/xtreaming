@extends('layouts.app')

@section('main')
    <style>
        .backdrop_bg {
            background-image: linear-gradient(to right, rgba({{ $rgb }}, 80) calc((50vw - 170px) - 340px), rgba({{ $rgb }}, 0.90) 30%, rgba({{ $rgb }}, 0.80) 100%), url("{{ tmdb_backdrop($serie->backdrop_path) }}");
            background-repeat: no-repeat;
            background-size: cover;
            box-shadow: 0px 5px 10px rgba({{ $rgb }});
            margin-bottom: 10px;
            padding-top: 17px;
            display: flex;
    flex-wrap: wrap;
        }

        .app-detail .season-list .episodes a {
            background-color: transparent;
        }

        .app-detail .season-list {
            background-color: #00000073;
        }
    </style>
    <div class="app-detail flex-fill">
        {{ Breadcrumbs::render() }}
        <div class="row">
            <div class="backdrop_bg">
                <div class="col-md-3">
                    <div class="media media-cover mb-2" style="background-image: url({{ tmdb_image($serie->poster_path) }});">
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="pl-md-4">
                        <div class="categories">
                            @foreach ($serie->genres as $genre)
                                <a href="{{ route('genre.show', $genre) }}">
                                    {{ $genre->name }}</a>
                            @endforeach
                        </div>
                        <h1>{{ $serie->title }}</h1>
                        <h2>{{ $serie->original_title }}</h2>
                        <div class="featured-box">
                            <div class="featured-attr">
                                <div class="attr">
                                    IMDB </div>
                                <div class="text">{{ $serie->imdb_rating }}</div>
                            </div>
                            @if ($serie->country)
                                <div class="featured-attr">
                                    <div class="attr">
                                        Country </div>
                                    <div class="text">{{ $serie->country->name }}</div>
                                </div>
                            @endif
                            <div class="featured-attr">
                                <div class="attr">
                                    Release Date </div>
                                <div class="text">{{ $serie->release_date->format("Y-m-d") }}</div>
                            </div>
                        </div>
                        @if (!empty($serie->overview))
                            <div class="detail-attr">
                                <div class="attr">
                                    Overview </div>
                                <div class="text">
                                    <div class="text-content">
                                        {{ $serie->overview }}
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="featured-attr">
                            <div class="attr">
                                Actors </div>
                            <div class="text" data-more="" data-element="a" data-limit="6">
                                @foreach ($serie->cast as $cast)
                                    <a href="{{ route('person.show', $cast) }}">
                                        {{ $cast->name }}</a>
                                @endforeach
                                <div class="more">Show more</div>
                            </div>
                        </div>
                        <div class="nav-social">
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="season-list">
                        <div class="seasons">
                            <ul class="nav" role="tablist">
                                @foreach ($serie->seasons as $season)
                                    <li class="nav-item">
                                        <a class="nav-link {{ $loop->first ? 'active' : '' }}"
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
                            @foreach ($serie->seasons as $season)
                                <div class="tab-pane {{ $loop->first ? 'show active' : '' }}"
                                    id="season-{{ $season->number }}" role="tabpanel"
                                    aria-labelledby="season-{{ $season->number }}-tab">
                                    @if ($season->episodes->count())
                                        @foreach ($season->episodes as $episode)
                                            <a
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
            </div>
            <div class="col-md-12 comments_bg"
                <!-- ADS -->
                <div class="row">
                    <div class="col">
                        <div class="comments app-section pt-0" data-content="13" data-type="post">
                            <div class="app-heading">
                                <div class="text">Comments</div>
                            </div>
                            <div class="py-3">The comment field is only for members. <a
                                    href="https://demo.codelug.com/wovie/login"
                                    class="text-white font-weight-bold">Login</a>, <a
                                    href="https://demo.codelug.com/wovie/register"
                                    class="text-white font-weight-bold">Register</a></div>
                            <div class="d-flex align-items-center">
                                <div class="comment-total">3 Comment</div>
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
                                <li class="list-comment" data-id="25">
                                    <div class="spoiler-btn" data-id="25" style="display: none;">This comment contains
                                        spoilers. Click to read</div>
                                    <div class="list-comment-content">
                                        <div class="list-avatar"> <a href="https://demo.codelug.com/wovie/profile/admin"
                                                target="_blank">
                                                <div class="avatar avatar-sm" style="">W</div>
                                            </a> </div>
                                        <div class="list-body"> <a href="https://demo.codelug.com/wovie/profile/admin"
                                                target="_blank" class="list-name">admin</a> <a href="#!comment=25"
                                                class="list-date"> <time title="4 month ago">4 month ago</time> </a>
                                            <div class="text">Tt5tghhgrtyuhb</div>
                                            <form method="POST" class="edit-form comment-form"> <input type="hidden"
                                                    name="id" value="25"> <input type="hidden" name="action"
                                                    value="update">
                                                <textarea name="comment" class="form-control mb-2" rows="1 wrap=" hard"="" maxlength="500"
                                                    data-content="Tt5tghhgrtyuhb" placeholder="Yorum"></textarea>
                                                <div class="comment-btn"> <button type="submit" class="btn btn-theme"
                                                        data-loading-text="..">Edit</button> <button type="button"
                                                        class="btn cancel">Cancel</button> </div>
                                                <div class="response"></div>
                                            </form>
                                            <div class="list-comment-footer">
                                                <div class="votes"> <a href="#" title="Beğen" class="like ">
                                                        <svg class="icon">
                                                            <use xlink:href="{{ asset('images/sprite.svg') }}#like">
                                                            </use>
                                                        </svg> <span class="likes" data-votes="0"> </span> </a> <a
                                                        href="#" title="Beğenme" class="dislike "> <svg
                                                            class="icon">
                                                            <use xlink:href="{{ asset('images/sprite.svg') }}#dislike">
                                                            </use>
                                                        </svg> <span class="dislikes" data-votes="0"> </span> </a> </div>
                                                <a href="#" class="reply" data-parent="25"
                                                    data-root="25">Reply</a>
                                            </div>
                                            <div class="replybox"></div>
                                        </div>
                                    </div>
                                    <ul class="list-comments children" data-parent="25"></ul>
                                </li>
                                <li class="list-comment " data-id="24">
                                    <div class="list-comment-content">
                                        <div class="list-avatar"> <a href="https://demo.codelug.com/wovie/profile/admin"
                                                target="_blank">
                                                <div class="avatar avatar-sm" style="">W</div>
                                            </a> </div>
                                        <div class="list-body"> <a href="https://demo.codelug.com/wovie/profile/admin"
                                                target="_blank" class="list-name">admin</a> <a href="#!comment=24"
                                                class="list-date"> <time title="4 month ago">4 month ago</time> </a>
                                            <div class="text">G55555tghyyy</div>
                                            <form method="POST" class="edit-form comment-form"> <input type="hidden"
                                                    name="id" value="24"> <input type="hidden" name="action"
                                                    value="update">
                                                <textarea name="comment" class="form-control mb-2" rows="1 wrap=" hard"="" maxlength="500"
                                                    data-content="G55555tghyyy" placeholder="Yorum"></textarea>
                                                <div class="comment-btn"> <button type="submit" class="btn btn-theme"
                                                        data-loading-text="..">Edit</button> <button type="button"
                                                        class="btn cancel">Cancel</button> </div>
                                                <div class="response"></div>
                                            </form>
                                            <div class="list-comment-footer">
                                                <div class="votes"> <a href="#" title="Beğen" class="like ">
                                                        <svg class="icon">
                                                            <use xlink:href="{{ asset('images/sprite.svg') }}#like">
                                                            </use>
                                                        </svg> <span class="likes" data-votes="0"> </span> </a> <a
                                                        href="#" title="Beğenme" class="dislike "> <svg
                                                            class="icon">
                                                            <use xlink:href="{{ asset('images/sprite.svg') }}#dislike">
                                                            </use>
                                                        </svg> <span class="dislikes" data-votes="0"> </span> </a> </div>
                                                <a href="#" class="reply" data-parent="24"
                                                    data-root="24">Reply</a>
                                            </div>
                                            <div class="replybox"></div>
                                        </div>
                                    </div>
                                    <ul class="list-comments children" data-parent="24"></ul>
                                </li>
                                <li class="list-comment" data-id="23">
                                    <div class="spoiler-btn" data-id="23" style="display: none;">This comment contains
                                        spoilers. Click to read</div>
                                    <div class="list-comment-content">
                                        <div class="list-avatar"> <a href="https://demo.codelug.com/wovie/profile/admin"
                                                target="_blank">
                                                <div class="avatar avatar-sm" style="">W</div>
                                            </a> </div>
                                        <div class="list-body"> <a href="https://demo.codelug.com/wovie/profile/admin"
                                                target="_blank" class="list-name">admin</a> <a href="#!comment=23"
                                                class="list-date"> <time title="4 month ago">4 month ago</time> </a>
                                            <div class="text">Bhgy5ru7hbgf</div>
                                            <form method="POST" class="edit-form comment-form"> <input type="hidden"
                                                    name="id" value="23"> <input type="hidden" name="action"
                                                    value="update">
                                                <textarea name="comment" class="form-control mb-2" rows="1 wrap=" hard"="" maxlength="500"
                                                    data-content="Bhgy5ru7hbgf" placeholder="Yorum"></textarea>
                                                <div class="comment-btn"> <button type="submit" class="btn btn-theme"
                                                        data-loading-text="..">Edit</button> <button type="button"
                                                        class="btn cancel">Cancel</button> </div>
                                                <div class="response"></div>
                                            </form>
                                            <div class="list-comment-footer">
                                                <div class="votes"> <a href="#" title="Beğen" class="like ">
                                                        <svg class="icon">
                                                            <use xlink:href="{{ asset('images/sprite.svg') }}#like">
                                                            </use>
                                                        </svg> <span class="likes" data-votes="0"> </span> </a> <a
                                                        href="#" title="Beğenme" class="dislike "> <svg
                                                            class="icon">
                                                            <use xlink:href="{{ asset('images/sprite.svg') }}#dislike">
                                                            </use>
                                                        </svg> <span class="dislikes" data-votes="0"> </span> </a> </div>
                                                <a href="#" class="reply" data-parent="23"
                                                    data-root="23">Reply</a>
                                            </div>
                                            <div class="replybox"></div>
                                        </div>
                                    </div>
                                    <ul class="list-comments children" data-parent="23"></ul>
                                </li>
                            </ul>
                            <div class="pagination-container"></div>
                        </div>
                    </div>
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
@endsection
