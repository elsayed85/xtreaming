@extends('layouts.app')
@section('main')
    <div class="layout-section">
        <ol class="breadcrumb d-inline-flex text-muted mb-2">
            <li class="breadcrumb-item"><a href="https://demo.codelug.com/xtreaming/community/">
                    Community</a></li>
            <li class="breadcrumb-item active" aria-current="page">
                The Lord of the Rings: The Rings of Power </li>
        </ol>
        <div class="layout-section">
            <div class="row gx-xl-5 justify-content-lg-center">
                <div class="col-lg">
                    <div class="row">
                        <div class="col-auto">
                            <a href="https://demo.codelug.com/xtreaming/user/admin" class="d-block"
                                data-bs-tooltip="tooltip" data-bs-placement="top" title=""
                                data-bs-original-title="Xtreaming - @admin">
                                <div class="avatar avatar-xl rounded-circle text-white fs-xs"
                                    style="background-color:#864bfc;">A</div>
                            </a>
                        </div>
                        <div class="col text-gray-600">
                            <h1 class="h3 mb-1 fw-semibold">
                                The Lord of the Rings: The Rings of Power </h1>
                            <ul class="list-inline list-separator fs-xs text-gray-500 mb-3">
                                <li class="list-inline-item"><a href="https://demo.codelug.com/xtreaming/user/admin"
                                        class="text-current fw-semibold">
                                        admin</a></li>
                                <li class="list-inline-item">
                                    Sep. 02, 2022 </li>
                                <li class="list-inline-item">
                                    0 reply </li>
                            </ul>
                            <p>
                                Beginning in a time of relative peace, we follow an ensemble cast of characters as they
                                confront the re-emergence of evil to Middle-earth. From the darkest depths of the Misty
                                Mountains, to the majestic forests of Lindon, to the breathtaking island kingdom of Númenor,
                                to the furthest reaches of the </p>
                            <hr class="bg-gray-200 my-4">
                            <div class="comments" data-content="2" data-type="thread">
                                <div class="mb-3 fs-sm">
                                    The comment field is only for members. <a
                                        href="https://demo.codelug.com/xtreaming/login"
                                        class="text-current ms-2 fw-semibold">
                                        Login</a>, <a href="https://demo.codelug.com/xtreaming/register"
                                        class="text-current fw-semibold">
                                        Register</a>
                                </div>
                                <div class="empty-total text-muted fs-sm">No comments yet</div>
                                <div class="comment-toolbar comment-sorting" style="display: none;">
                                    <ul class="nav nav-active-border">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link active" data-sort="1">
                                                Newest</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link" data-sort="2">
                                                Most popular</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link" data-sort="3">
                                                Oldest</a>
                                        </li>
                                        <li class="nav-item ms-auto comment-total">No comments yet</li>
                                    </ul>
                                </div>
                                <ul class="comments-list" style=""></ul>
                                <div class="pagination-container"></div>
                            </div>
                            <div class="comments" data-content="2" data-type="thread">
                                <form method="POST" class="post-form">
                                    <div class="comment-form mb-3">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="avatar avatar-lg rounded-circle bg-theme text-white fs-sm"
                                                    style="background-color:#864bfc;">A</div>
                                            </div>
                                            <div class="col">
                                                <div class="position-relative">
                                                    <div class="fw-semibold fs-xs text-white">
                                                        admin </div>
                                                    <textarea name="comment" class="form-control px-0 py-2 shadow-none bg-transparent border-0"
                                                        placeholder="Enter your review or comment .." minlength="10" rows="1" wrap="hard" maxlength="255"></textarea>
                                                    <div class="character-count">255</div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <button type="submit"
                                                    class="btn btn-block btn-theme px-xl-4 fs-xs rounded-pill">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-alert"></div>
                                    <input type="hidden" name="post_id" value="2">
                                    <input type="hidden" name="_ACTION" value="post">
                                    <input type="hidden" name="type" value="thread">
                                    <input type="hidden" name="parent_id" value="">
                                </form>
                                <div class="empty-total text-muted fs-sm">No comments yet</div>
                                <div class="comment-toolbar comment-sorting" style="display: none;">
                                    <ul class="nav nav-active-border">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link active" data-sort="1">
                                                Newest</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link" data-sort="2">
                                                Most popular</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link" data-sort="3">
                                                Oldest</a>
                                        </li>
                                        <li class="nav-item ms-auto comment-total">No comments yet</li>
                                    </ul>
                                </div>
                                <ul class="comments-list" style=""></ul>
                                <div class="pagination-container"></div>
                            </div>
                            <script id="commentTemplate" type="text/template">
        <li class="comment-list {% if (spoiler == '1') { %} spoiler {% } %}" data-id="{%= id %}">
        {% if (spoiler == '1') { %}
        <div class="spoiler-btn" data-id="{%= id %}">
            This comment contains spoilers. Click to read    </div>
        {% } %}
        <div class="comment-flex">
            <div class="comment-avatar">
                {% if (author.url) { %}
                <a href="{%= author.url %}" target="_blank">{%= author.avatar %}</a>
                {% } else { %}
                {%= author.avatar %}
                {% } %}
            </div>
            <div class="comment-body">
                {% if (author.url) { %}
                <a href="{%= author.url %}" target="_blank" class="comment-name">{%= author.name %}</a>
                {% } else { %}
                <span class="comment-name">{%= author.name %}</span>
                {% } %}
                <a href="#!comment={%= id %}" class="comment-date">
                    <time title="{%= created %}">{%= created %}</time>
                </a>
                {% if (status == '2') { %} <span class="text-warning fs-xs">
                    Pending</span> {% } %}
                <div class="comment-text">{%= comment %}</div>
                <form method="POST" class="edit-form comment-form">
                    <input type="hidden" name="id" value="{%= id %}">
                    <input type="hidden" name="_ACTION" value="update">
                    <textarea name="comment" class="form-control mb-1" rows="1 wrap=" hard" maxlength="255" data-content="{%= comment %}" placeholder="Enter your comment"></textarea>
                    <button type="submit" class="btn btn-block btn-sm btn-ghost px-xl-4 fs-xs">
                        Edit</button>
                    <button type="button" class="btn cancel fs-xs">
                        Cancel</button>
                    <div class="comment-alert"></div>
                </form>
                <div class="comment-footer">
                    <div class="votes">
                        <a href="#" title="Like" class="like {%= (voted === 'up' ? 'voted' : '') %}">
                            <svg class="icon">
                                <use xlink:href="{{ asset('images/icons.svg') }}#like" />
                            </svg>
                            <span class="likes" data-votes="{%= likes %}">{%= likes || '' %}</span>
                        </a>
                        <a href="#" title="Dislike" class="dislike {%= (voted === 'down' ? 'voted' : '') %}">
                            <svg class="icon">
                                <use xlink:href="{{ asset('images/icons.svg') }}#dislike" />
                            </svg>
                            <span class="dislikes" data-votes="{%= dislikes %}">{%= dislikes || '' %}</span>
                        </a>
                    </div>
                    {% if (reply) { %}
                    <a href="#" class="reply" data-parent="{%= id %}" data-root="{%= parent_id || id %}">
                        Reply</a>
                    {% } %}
                    {% if (edit) { %}
                    <a href="#" class="quick-edit">
                        Edit</a>
                    {% } %}
                </div>
                <div class="replybox"></div>
            </div>
        </div>
        <ul class="comments-list children" data-parent="{%= id %}"></ul>
    </li>
    </script>
                            <script id="paginationTemplate" type="text/template">
        <ul class="pagination pagination-sm pagination-spaced mt-3">
        <li {% if (current_page===1) { %} class="disabled page-item" {% } %}>
            <a href="#!page={%= prev_page %}" data-page="{%= prev_page %}" title="Prev" class="page-link">
                Prev</a>
        </li>
        {% if (first_adjacent_page > 1) { %}
        <li class="page-item">
            <a href="#!page=1" data-page="1" class="page-link">1</a>
        </li>
        {% if (first_adjacent_page > 2) { %}
        <li class="disabled"><a class="page-link">...</a></li>
        {% } %}
        {% } %}
        {% for (var i = first_adjacent_page; i <= last_adjacent_page; i++) { %} <li class="page-item {% if (current_page === i) { %} active {% } %}">
            <a href="#!page={%= i %}" data-page="{%= i %}" class="page-link">{%= i %}</a>
            </li>
            {% } %}
            {% if (last_adjacent_page < last_page) { %} {% if (last_adjacent_page < last_page - 1) { %} <li class="disabled page-item"><a class="page-link">...</a></li>
                {% } %}
                <li class="page-item"><a href="#!page={%= last_page %}" data-page="{%= last_page %}" class="page-link">{%= last_page %}</a></li>
                {% } %}
                <li class="page-item {% if (current_page === last_page) { %} class=" disabled" {% } %}">
                    <a href="#!page={%= next_page %}" data-page="{%= next_page %}" title="Next" class="page-link">
                        Next</a>
                </li>
    </ul>
    </script>
                            <script id="alertTemplate" type="text/template">
        <div class="text-warning fs-sm mb-3">
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
                <div class="col-lg-auto">
                    <div class="w-xl-300">
                        <div class="mb-3 d-grid">
                            <a href="https://demo.codelug.com/xtreaming/login" class="btn btn-theme py-3">
                                Open thread</a>
                        </div>
                        <div class="card bg-gray-200 mb-3">
                            <div class="card-body">
                                <h3 class="fw-semibold fs-sm mb-3">
                                    Leaderboard </h3>
                                <div class="leaderboard">
                                    <div class="row align-items-center mb-3">
                                        <div class="col-auto">
                                            <a href="https://demo.codelug.com/xtreaming/user/admin" class="d-block avatar"
                                                data-bs-tooltip="tooltip" data-bs-placement="top" title=""
                                                data-bs-original-title="Xtreaming - @admin">
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
    </div>
@endsection
