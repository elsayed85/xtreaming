@extends('layouts.app')
@section('main')
    <div class="flex-fill">
        {{ Breadcrumbs::render() }}
        <div class="app-section">
            <div class="user-profile">
                <div class="cover"></div>
                <div class="profile-header">
                    <div class="profile-avatar">
                        <div class="avatar" style="">{{ authNameFirstLetter() }}</div> <svg x="0px" y="0px" width="36px"
                            height="36px" viewBox="0 0 36 36">
                            <circle fill="none" stroke-width="1" cx="18" cy="18" r="16"
                                stroke-dasharray="100 100" stroke-dashoffset="0" transform="rotate(-90 18 18)"></circle>
                        </svg>
                    </div>
                    <div class="profile-content">
                        <div class="name">{{ $u->name }}</div>
                        <div class="username">{{ "@" . $u->username }}</div>
                    </div>
                </div>
                <div class="profile-tab mt-3">
                    <div class="nav-active-border b-primary bottom">
                        <ul class="nav pt-0" id="myTab" role="tablist">
                            <li>
                                <a class="nav-link active" id="general-tab" data-toggle="tab" href="#general" role="tab"
                                    aria-controls="general" aria-selected="true">
                                    Overview</a>
                            </li>
                            <li>
                                <a class="nav-link " id="collections-tab" data-toggle="tab" href="#collections"
                                    role="tab" aria-controls="collections" aria-selected="false">
                                    Collections</a>
                            </li>
                            <li>
                                <a class="nav-link " id="discussions-tab" data-toggle="tab" href="#discussions"
                                    role="tab" aria-controls="discussions" aria-selected="false">
                                    Discussions</a>
                            </li>
                            <li>
                                <a class="nav-link " id="following-tab" data-toggle="tab" href="#following" role="tab"
                                    aria-controls="following" aria-selected="false">
                                    Following</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content py-3">
                    <div class="tab-pane active" id="general" role="tabpanel" aria-labelledby="general-tab">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="profile-heading">About</div>
                                @if(isAdmin())
                                <div class="profile-attr">
                                    <div class="text">Admin</div>
                                </div>
                                @endif
                                <div class="profile-attr">
                                    <div class="attr">
                                        Gender </div>
                                    <div class="text"> {{ genderText() }} </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="profile-box">
                                    <div class="profile-heading">
                                        Liked Content </div>
                                    <div class="row row-cols-6 list-scrollable">
                                        <div class="col">
                                            <div class="list-movie">
                                                <a href="https://demo.codelug.com/wovie/movie/iron-man-4"
                                                    class="list-media">
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
                                                    <a href="https://demo.codelug.com/wovie/movie/iron-man-4"
                                                        class="list-title text-12">
                                                        Iron Man </a>
                                                    <a href="https://demo.codelug.com/wovie/movie/iron-man-4"
                                                        class="list-category">
                                                        Movie </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane " id="collections" role="tabpanel" aria-labelledby="collections-tab">
                        <div class="row row-cols-lg-3 row-cols-md-2 list-grouped">
                            <div class="col">
                                <div class="list-collection" style="background-color: ;color: ">
                                    <div class="list-caption">
                                        <a href="https://demo.codelug.com/wovie/collection/1" class="list-title">
                                            New movies to be released in 2021</a>
                                        <a href="https://demo.codelug.com/wovie/collection/1" class="list-desc">4 there is
                                            content</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane " id="discussions" role="tabpanel" aria-labelledby="discussions-tab">
                        <div class="list-forum">
                            <a href="https://demo.codelug.com/wovie/profile/admin" class="list-avatar">
                                <div class="avatar" style="">W</div>
                            </a>
                            <div class="flex-fill">
                                <div class="list-footer">
                                    <a href="https://demo.codelug.com/wovie/profile/admin" class="user">
                                        admin</a>, by 5 month ago opened
                                </div>
                                <a href="https://demo.codelug.com/wovie/tartisma/6">
                                    <div class="name">
                                        ddd </div>
                                    <div class="desc">
                                        ddddd </div>
                                </a>
                            </div>
                            <div class="list-forum-comment">
                                <span class="count">2</span>
                                <span class="text">Reply</span>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane " id="following" role="tabpanel" aria-labelledby="following-tab">
                        <div class="profile-box">
                            <div class="profile-heading"> Following Contents </div>
                            <div class="row row-cols-6 list-scrollable">
                                <div class="col">
                                    <div class="list-movie">
                                        <a href="https://demo.codelug.com/wovie/serie/riverdale-12" class="list-media">
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
                                            <a href="https://demo.codelug.com/wovie/serie/riverdale-12"
                                                class="list-title text-12">
                                                Riverdale </a>
                                            <a href="https://demo.codelug.com/wovie/serie/riverdale-12"
                                                class="list-category">
                                                Serie </a>
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
