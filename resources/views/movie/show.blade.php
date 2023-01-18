@extends('layouts.app')
@section('after_css')
<x-comments::styles />
@endsection
@section('main')
    <div class="app-detail flex-fill">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="https://demo.codelug.com/wovie/movies">
                        Movies</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    Interstellar </li>
            </ol>
        </nav>
        <div class="detail-header d-flex align-items-center">
            <div class="nav-player-select dropdown">
                <a class="dropdown-toggle btn-service selected" href="#" data-embed="2664">
                    Source : <span>plyr.io HLS</span>
                </a>
            </div>
            <div class="d-flex align-items-center">
                <div class="dropdown">
                    <button type="button" class="btn-svg share" role="button" id="shareDropdown" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <svg class="icon">
                            <use xlink:href="{{ asset('images/sprite.svg') }}#share"></use>
                        </svg>
                        <span>Share</span>
                    </button>
                    <div class="dropdown-menu dropdown-share" aria-labelledby="shareDropdown">
                        <a href="#" class="bg-facebook share-link" data-type="facebook"
                            data-sef="https://demo.codelug.com/wovie/movie/interstellar-1">
                            <svg class="icon">
                                <use xlink:href="{{ asset('images/sprite.svg') }}#facebook">
                                </use>
                            </svg>
                        </a>
                        <a href="#" class="bg-twitter share-link" data-type="twitter" data-title="Interstellar"
                            data-sef="https://demo.codelug.com/wovie/movie/interstellar-1">
                            <svg class="icon">
                                <use xlink:href="{{ asset('images/sprite.svg') }}#twitter"></use>
                            </svg>
                        </a>
                    </div>
                </div>
                <button type="button" class="btn-svg report mr-0" data-toggle="modal" data-target="#m"
                    data-remote="https://demo.codelug.com/wovie/modal/report?id=1">
                    <svg class="icon" stroke-width="3">
                        <use xlink:href="{{ asset('images/sprite.svg') }}#alert"></use>
                    </svg>
                    <span>Report</span>
                </button>
            </div>
        </div>
        <div class="app-detail-embed">
            {{-- <div class="embed-col">
                <div class="spinner d-none">
                    <div class="bounce1"></div>
                    <div class="bounce2"></div>
                    <div class="bounce3"></div>
                </div>
                <div class="embed-code d-none"></div>
                <div class="embed-play">
                    <div class="embed-cover lazy"
                        style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/large-cover-interstellar.webp&quot;);">
                    </div>
                    <div class="play-btn" data-id="" data-embed="2664">
                        <svg class="icon">
                            <use xlink:href="{{ asset('images/sprite.svg') }}#play"></use>
                        </svg>
                    </div>
                </div>
            </div> --}}
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
            <a href="https://codelug.com/item/xtreaming-movie-and-tv-show-streaming-platform-6" rel="noreferrer"
                class="ads-embed embed-ads" target="_blank"><img
                    src="https://demo.codelug.com/wovie/public/upload/ads/250-x-432.webp" alt="Reklam"></a>
        </div>
        <div class="detail-content">
            <div class="cover">
                <div class="media media-cover"
                    style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-interstellar.webp&quot;);">
                </div>
            </div>
            <div class="detail-text flex-fill">
                <div class="caption">
                    <div class="caption-content">
                        <div class="category">
                            <a href="https://demo.codelug.com/wovie/movies/adventure">
                                Adventure</a>
                            <a href="https://demo.codelug.com/wovie/movies/drama">
                                Drama</a>
                            <a href="https://demo.codelug.com/wovie/movies/science-fiction">
                                Science Fiction</a>
                        </div>
                        <h1>
                            Interstellar </h1>
                        <h2>
                            Interstellar </h2>
                    </div>
                    <button type="button" class="btn btn-theme-lt mr-2 px-md-5 mb-2" data-toggle="modal" data-target="#lg"
                        data-remote="https://demo.codelug.com/wovie/modal/trailer?trailer=https%3A%2F%2Fwww.youtube.com%2Fembed%2F2LqzF5WauAw">
                        Trailer</button>
                    <div class="video-attr">
                        <div class="attr">
                            Country </div>
                        <div class="text">
                            England </div>
                    </div>
                    <div class="video-attr">
                        <div class="attr">
                            Release Date </div>
                        <div class="text">
                            2014 </div>
                    </div>
                    <div class="video-attr">
                        <div class="attr">
                            Actors </div>
                        <div class="text" data-more="" data-element="a" data-limit="6">
                            <a href="https://demo.codelug.com/wovie/actor/matthew-mcconaughey-1">
                                Matthew McConaughey</a>
                            <a href="https://demo.codelug.com/wovie/actor/jessica-chastain-2">
                                Jessica Chastain</a>
                            <a href="https://demo.codelug.com/wovie/actor/anne-hathaway-3">
                                Anne Hathaway</a>
                            <a href="https://demo.codelug.com/wovie/actor/michael-caine-4">
                                Michael Caine</a>
                            <a href="https://demo.codelug.com/wovie/actor/casey-affleck-5">
                                Casey Affleck</a>
                            <a href="https://demo.codelug.com/wovie/actor/mackenzie-foy-6">
                                Mackenzie Foy</a>
                            <a href="https://demo.codelug.com/wovie/actor/timothee-chalamet-7" class="toggle"
                                style="display: none;">
                                Timothée Chalamet</a>
                            <a href="https://demo.codelug.com/wovie/actor/bill-irwin-8" class="toggle"
                                style="display: none;">
                                Bill Irwin</a>
                            <a href="https://demo.codelug.com/wovie/actor/matt-damon-9" class="toggle"
                                style="display: none;">
                                Matt Damon</a>
                            <a href="https://demo.codelug.com/wovie/actor/david-gyasi-10" class="toggle"
                                style="display: none;">
                                David Gyasi</a>
                            <a href="https://demo.codelug.com/wovie/actor/ellen-burstyn-11" class="toggle"
                                style="display: none;">
                                Ellen Burstyn</a>
                            <a href="https://demo.codelug.com/wovie/actor/john-lithgow-12" class="toggle"
                                style="display: none;">
                                John Lithgow</a>
                            <a href="https://demo.codelug.com/wovie/actor/wes-bentley-13" class="toggle"
                                style="display: none;">
                                Wes Bentley</a>
                            <a href="https://demo.codelug.com/wovie/actor/topher-grace-14" class="toggle"
                                style="display: none;">
                                Topher Grace</a>
                            <a href="https://demo.codelug.com/wovie/actor/david-oyelowo-15" class="toggle"
                                style="display: none;">
                                David Oyelowo</a>
                            <a href="https://demo.codelug.com/wovie/actor/william-devane-16" class="toggle"
                                style="display: none;">
                                William Devane</a>
                            <a href="https://demo.codelug.com/wovie/actor/josh-stewart-17" class="toggle"
                                style="display: none;">
                                Josh Stewart</a>
                            <a href="https://demo.codelug.com/wovie/actor/collette-wolfe-18" class="toggle"
                                style="display: none;">
                                Collette Wolfe</a>
                            <a href="https://demo.codelug.com/wovie/actor/leah-cairns-19" class="toggle"
                                style="display: none;">
                                Leah Cairns</a>
                            <a href="https://demo.codelug.com/wovie/actor/russ-fega-20" class="toggle"
                                style="display: none;">
                                Russ Fega</a>
                            <a href="https://demo.codelug.com/wovie/actor/lena-georgas-21" class="toggle"
                                style="display: none;">
                                Lena Georgas</a>
                            <a href="https://demo.codelug.com/wovie/actor/jeff-hephner-22" class="toggle"
                                style="display: none;">
                                Jeff Hephner</a>
                            <a href="https://demo.codelug.com/wovie/actor/elyes-gabel-23" class="toggle"
                                style="display: none;">
                                Elyes Gabel</a>
                            <a href="https://demo.codelug.com/wovie/actor/brooke-smith-24" class="toggle"
                                style="display: none;">
                                Brooke Smith</a>
                            <a href="https://demo.codelug.com/wovie/actor/francis-x-mccarthy-25" class="toggle"
                                style="display: none;">
                                Francis X. McCarthy</a>
                            <div class="more">Show more</div>
                        </div>
                    </div>
                    <div class="video-attr">
                        <div class="attr">
                            Overview </div>
                        <div class="text">
                            The adventures of a group of explorers who make use of a newly discovered wormhole to surpass
                            the limitations on human space travel and conquer the vast distances involved in an interstellar
                            voyage. </div>
                    </div>
                    <div class="nav-social">
                    </div>
                </div>
                <div class="action">
                    <div class="video-view">
                        <div class="view-text">
                            1,567<span>
                                views</span>
                        </div>
                    </div>
                    <div class="action-bar"><span style="width: 0%"></span></div>
                    <div class="action-btns">
                        <div class="action-btn like " data-id="1">
                            <svg>
                                <use xlink:href="{{ asset('images/sprite.svg') }}#like"></use>
                            </svg>
                            <span data-votes="0">
                                0</span>
                        </div>
                        <div class="action-btn dislike " data-id="1">
                            <svg>
                                <use xlink:href="{{ asset('images/sprite.svg') }}#dislike">
                                </use>
                            </svg>
                            <span data-votes="1">
                                1</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="https://codelug.com/item/xtreaming-movie-and-tv-show-streaming-platform-6" rel="noreferrer"
            class="ads-embed my-3" target="_blank"><img
                src="https://demo.codelug.com/wovie/public/upload/ads/728-x-90.webp" alt="Reklam"></a>
        <div class="app-section">
            <div class="app-heading">
                <div class="text">
                    Similar content </div>
            </div>
            <div class="row row-cols-6 list-scrollable">
                <div class="col">
                    <div class="list-movie">
                        <a href="https://demo.codelug.com/wovie/movie/guardians-of-the-galaxy-2" class="list-media">
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
                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-guardians-of-the-galaxy.webp&quot;);">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://demo.codelug.com/wovie/movie/guardians-of-the-galaxy-2"
                                class="list-titlesub">
                                Guardians of the Galaxy </a>
                            <a href="https://demo.codelug.com/wovie/movie/guardians-of-the-galaxy-2" class="list-title">
                                Guardians of the Galaxy </a>
                            <a href="https://demo.codelug.com/wovie/movie/guardians-of-the-galaxy-2"
                                class="list-category">
                                2014 </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="list-movie">
                        <a href="https://demo.codelug.com/wovie/movie/harry-potter-and-the-philosophers-stone-3"
                            class="list-media">
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
                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-harry-potter-and-the-philosophers-stone.webp&quot;);">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://demo.codelug.com/wovie/movie/harry-potter-and-the-philosophers-stone-3"
                                class="list-titlesub">
                                Harry Potter and the Philosopher's Stone </a>
                            <a href="https://demo.codelug.com/wovie/movie/harry-potter-and-the-philosophers-stone-3"
                                class="list-title">
                                Harry Potter and the Philosopher's Stone </a>
                            <a href="https://demo.codelug.com/wovie/movie/harry-potter-and-the-philosophers-stone-3"
                                class="list-category">
                                2001 </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="list-movie">
                        <a href="https://demo.codelug.com/wovie/movie/iron-man-4" class="list-media">
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
                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-iron-man.webp&quot;);">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://demo.codelug.com/wovie/movie/iron-man-4" class="list-titlesub">
                                Iron Man </a>
                            <a href="https://demo.codelug.com/wovie/movie/iron-man-4" class="list-title">
                                Iron Man </a>
                            <a href="https://demo.codelug.com/wovie/movie/iron-man-4" class="list-category">
                                2008 </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="list-movie">
                        <a href="https://demo.codelug.com/wovie/movie/the-shawshank-redemption-5" class="list-media">
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
                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-the-shawshank-redemption.webp&quot;);">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://demo.codelug.com/wovie/movie/the-shawshank-redemption-5"
                                class="list-titlesub">
                                The Shawshank Redemption </a>
                            <a href="https://demo.codelug.com/wovie/movie/the-shawshank-redemption-5" class="list-title">
                                The Shawshank Redemption </a>
                            <a href="https://demo.codelug.com/wovie/movie/the-shawshank-redemption-5"
                                class="list-category">
                                1994 </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="list-movie">
                        <a href="https://demo.codelug.com/wovie/movie/django-unchained-6" class="list-media">
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
                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-django-unchained.webp&quot;);">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://demo.codelug.com/wovie/movie/django-unchained-6" class="list-titlesub">
                                Django Unchained </a>
                            <a href="https://demo.codelug.com/wovie/movie/django-unchained-6" class="list-title">
                                Django Unchained </a>
                            <a href="https://demo.codelug.com/wovie/movie/django-unchained-6" class="list-category">
                                2012 </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="list-movie">
                        <a href="https://demo.codelug.com/wovie/movie/mad-max-fury-road-7" class="list-media">
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
                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-mad-max-fury-road.webp&quot;);">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://demo.codelug.com/wovie/movie/mad-max-fury-road-7" class="list-titlesub">
                                Mad Max: Fury Road </a>
                            <a href="https://demo.codelug.com/wovie/movie/mad-max-fury-road-7" class="list-title">
                                Mad Max: Fury Road </a>
                            <a href="https://demo.codelug.com/wovie/movie/mad-max-fury-road-7" class="list-category">
                                2015 </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <livewire:comments :model="$movie" />


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
    @endsection
