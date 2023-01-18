@extends('layouts.app')

@section('main')
    <div class="flex-fill">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="https://demo.codelug.com/wovie/discussions">Discussions</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    Avatar new </li>
            </ol>
        </nav>
        <div class="forum-detail">
            <a href="https://demo.codelug.com/wovie/profile/admin" class="forum-avatar">
                <div class="avatar" style="">W</div> <svg x="0px" y="0px" width="36px" height="36px"
                    viewBox="0 0 36 36">
                    <circle fill="none" stroke-width="1" cx="18" cy="18" r="16"
                        stroke-dasharray="100 100" stroke-dashoffset="0" transform="rotate(-90 18 18)"></circle>
                </svg>
            </a>
            <div class="forum-content">
                <h1>
                    Avatar new </h1>
                <div class="forum-footer">
                    <a href="https://demo.codelug.com/wovie/profile/admin" class="user">
                        admin</a>,
                    0 sec ago
                </div>
                <p>
                    last disc </p>
                <div class="forum-post">
                    <div class="head">Related Content</div>
                    <a href="https://demo.codelug.com/wovie/movie/avatar-23" class="post-content">
                        <div class="cover">
                            <div class="media media-cover"
                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-avatar.webp&quot;);">
                            </div>
                        </div>
                        <div class="flex-fill">
                            <div class="name">
                                Avatar </div>
                            <div class="category">
                                Action </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="comments app-section pt-0" data-content="9" data-type="discussion">
            <div class="app-heading">
                <div class="text">Comments</div>
            </div>
            <form method="POST" class="post-form">
                <div class="postbox">
                    <div class="comment-form">
                        <div class="comment-avatar">
                            <div class="avatar avatar-sm" style="">W</div>
                        </div>
                        <div class="comment-content">
                            <div class="form-comment">
                                <textarea name="comment" class="form-control mb-2" rows="1" wrap="hard" maxlength="500" placeholder="Comment"></textarea>
                                <div class="character-count">500</div>
                                <button type="submit" class="btn" data-loading-text="Loading ..">Write Comment</button>
                                <div class="cancel"></div>
                            </div>
                        </div>
                    </div>
                    <div class="response"></div>
                </div>
                <input type="hidden" name="content_id" value="9">
                <input type="hidden" name="action" value="post">
                <input type="hidden" name="type" value="discussion">
                <input type="hidden" name="parent_id" value="">
            </form>
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
@endsection


@section('scripts')
    <script src="{{ asset('js/plyr.hls.js') }}"></script>
    <script src="{{ asset('js/plyr.js') }}"></script>
    <script src="{{ asset('js/jquery.comment.js') }}"></script>
    <script src="{{ asset('js/detail.js') }}"></script>
@endsection
