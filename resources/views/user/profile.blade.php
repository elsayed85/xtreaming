@extends('layouts.app')
@section('main')
    <div class="flex-fill">
        {{ Breadcrumbs::render() }}
        <div class="app-section">
            <div class="user-profile">
                <div class="cover"></div>
                <div class="profile-header">
                    <div class="profile-avatar">
                        <div class="avatar" style="">W</div> <svg x="0px" y="0px" width="36px"
                            height="36px" viewBox="0 0 36 36">
                            <circle fill="none" stroke-width="1" cx="18" cy="18" r="16"
                                stroke-dasharray="100 100" stroke-dashoffset="0" transform="rotate(-90 18 18)"></circle>
                        </svg>
                    </div>
                    <div class="profile-content">
                        <div class="name">
                            Wovie </div>
                        <div class="username">
                            admin </div>
                        <div class="nav-social">
                            <a href="https://www.facebook.com/SSSS" target="_blank" title="facebook">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#facebook">
                                    </use>
                                </svg>
                            </a>
                            <a href="https://www.twitter.com/FAFA" target="_blank" title="twitter">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#twitter">
                                    </use>
                                </svg>
                            </a>
                            <a href="https://www.youtube.com/FAFA" target="_blank" title="youtube">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#youtube">
                                    </use>
                                </svg>
                            </a>
                        </div>
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
                                <div class="profile-heading">
                                    About </div>
                                <div class="profile-attr">
                                    <div class="text">
                                        Admin </div>
                                </div>
                                <div class="profile-attr">
                                    <div class="attr">
                                        Location </div>
                                    <div class="text">
                                        Brasil </div>
                                </div>
                                <div class="profile-attr">
                                    <div class="attr">
                                        Gender </div>
                                    <div class="text">
                                        Female </div>
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
                                        <div class="col">
                                            <div class="list-movie">
                                                <a href="https://demo.codelug.com/wovie/movie/mad-max-fury-road-7"
                                                    class="list-media">
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
                                                    <a href="https://demo.codelug.com/wovie/movie/mad-max-fury-road-7"
                                                        class="list-title text-12">
                                                        Mad Max: Fury Road </a>
                                                    <a href="https://demo.codelug.com/wovie/movie/mad-max-fury-road-7"
                                                        class="list-category">
                                                        Movie </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="list-movie">
                                                <a href="https://demo.codelug.com/wovie/serie/arrow-16"
                                                    class="list-media">
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
                                                    <a href="https://demo.codelug.com/wovie/serie/arrow-16"
                                                        class="list-title text-12">
                                                        Arrow </a>
                                                    <a href="https://demo.codelug.com/wovie/serie/arrow-16"
                                                        class="list-category">
                                                        Serie </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="list-movie">
                                                <a href="https://demo.codelug.com/wovie/serie/fear-the-walking-dead-18"
                                                    class="list-media">
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
                                                    <a href="https://demo.codelug.com/wovie/serie/fear-the-walking-dead-18"
                                                        class="list-title text-12">
                                                        Fear the Walking Dead </a>
                                                    <a href="https://demo.codelug.com/wovie/serie/fear-the-walking-dead-18"
                                                        class="list-category">
                                                        Serie </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="list-movie">
                                                <a href="https://demo.codelug.com/wovie/serie/chilling-adventures-of-sabrina-22"
                                                    class="list-media">
                                                    <div class="play-btn">
                                                        <svg class="icon">
                                                            <use xlink:href="{{ asset('images/sprite.svg') }}#play">
                                                            </use>
                                                        </svg>
                                                    </div>
                                                    <div class="media media-cover"
                                                        style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-chilling-adventures-of-sabrina.webp&quot;);">
                                                    </div>
                                                </a>
                                                <div class="list-caption">
                                                    <a href="https://demo.codelug.com/wovie/serie/chilling-adventures-of-sabrina-22"
                                                        class="list-title text-12">
                                                        Chilling Adventures of Sabrina </a>
                                                    <a href="https://demo.codelug.com/wovie/serie/chilling-adventures-of-sabrina-22"
                                                        class="list-category">
                                                        Serie </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="list-movie">
                                                <a href="https://demo.codelug.com/wovie/movie/batman-begins-27"
                                                    class="list-media">
                                                    <div class="play-btn">
                                                        <svg class="icon">
                                                            <use xlink:href="{{ asset('images/sprite.svg') }}#play">
                                                            </use>
                                                        </svg>
                                                    </div>
                                                    <div class="media media-cover"
                                                        style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-batman-begins.webp&quot;);">
                                                    </div>
                                                </a>
                                                <div class="list-caption">
                                                    <a href="https://demo.codelug.com/wovie/movie/batman-begins-27"
                                                        class="list-title text-12">
                                                        Batman Begins </a>
                                                    <a href="https://demo.codelug.com/wovie/movie/batman-begins-27"
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
                            <div class="col">
                                <div class="list-collection" style="background-color: ;color: ">
                                    <div class="list-caption">
                                        <a href="https://demo.codelug.com/wovie/collection/2" class="list-title">
                                            The Best TV and Movies to Watch in February</a>
                                        <a href="https://demo.codelug.com/wovie/collection/2" class="list-desc">9 there is
                                            content</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="list-collection" style="background-color: ;color: ">
                                    <div class="list-caption">
                                        <a href="https://demo.codelug.com/wovie/collection/3" class="list-title">
                                            Everything New on Netflix in February list</a>
                                        <a href="https://demo.codelug.com/wovie/collection/3" class="list-desc">6 there is
                                            content</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="list-collection" style="background-color: ;color: ">
                                    <div class="list-caption">
                                        <a href="https://demo.codelug.com/wovie/collection/15" class="list-title">
                                            tata</a>
                                        <a href="https://demo.codelug.com/wovie/collection/15" class="list-desc">2 there
                                            is content</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="list-collection" style="background-color: ;color: ">
                                    <div class="list-caption">
                                        <a href="https://demo.codelug.com/wovie/collection/21" class="list-title">
                                            12</a>
                                        <a href="https://demo.codelug.com/wovie/collection/21" class="list-desc">1 there
                                            is content</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="list-collection" style="background-color: ;color: ">
                                    <div class="list-caption">
                                        <a href="https://demo.codelug.com/wovie/collection/26" class="list-title">
                                            AHS</a>
                                        <a href="https://demo.codelug.com/wovie/collection/26" class="list-desc">3 there
                                            is content</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="list-collection" style="background-color: ;color: ">
                                    <div class="list-caption">
                                        <a href="https://demo.codelug.com/wovie/collection/27" class="list-title">
                                            test</a>
                                        <a href="https://demo.codelug.com/wovie/collection/27" class="list-desc">1 there
                                            is content</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="list-collection" style="background-color: ;color: ">
                                    <div class="list-caption">
                                        <a href="https://demo.codelug.com/wovie/collection/31" class="list-title">
                                            2020 En iyi filmleri</a>
                                        <a href="https://demo.codelug.com/wovie/collection/31" class="list-desc">1 there
                                            is content</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="list-collection" style="background-color: ;color: ">
                                    <div class="list-caption">
                                        <a href="https://demo.codelug.com/wovie/collection/48" class="list-title">
                                            Favoritos </a>
                                        <a href="https://demo.codelug.com/wovie/collection/48" class="list-desc">0 there
                                            is content</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="list-collection" style="background-color: ;color: ">
                                    <div class="list-caption">
                                        <a href="https://demo.codelug.com/wovie/collection/49" class="list-title">
                                            Favoritos </a>
                                        <a href="https://demo.codelug.com/wovie/collection/49" class="list-desc">0 there
                                            is content</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="list-collection" style="background-color: ;color: ">
                                    <div class="list-caption">
                                        <a href="https://demo.codelug.com/wovie/collection/50" class="list-title">
                                            Favoritos </a>
                                        <a href="https://demo.codelug.com/wovie/collection/50" class="list-desc">2 there
                                            is content</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="list-collection" style="background-color: ;color: ">
                                    <div class="list-caption">
                                        <a href="https://demo.codelug.com/wovie/collection/51" class="list-title">
                                            Favoritos </a>
                                        <a href="https://demo.codelug.com/wovie/collection/51" class="list-desc">0 there
                                            is content</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="list-collection" style="background-color: ;color: ">
                                    <div class="list-caption">
                                        <a href="https://demo.codelug.com/wovie/collection/52" class="list-title">
                                            Test My colletion</a>
                                        <a href="https://demo.codelug.com/wovie/collection/52" class="list-desc">0 there
                                            is content</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="list-collection" style="background-color: ;color: ">
                                    <div class="list-caption">
                                        <a href="https://demo.codelug.com/wovie/collection/53" class="list-title">
                                            5</a>
                                        <a href="https://demo.codelug.com/wovie/collection/53" class="list-desc">0 there
                                            is content</a>
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
                        <div class="list-forum">
                            <a href="https://demo.codelug.com/wovie/profile/admin" class="list-avatar">
                                <div class="avatar" style="">W</div>
                            </a>
                            <div class="flex-fill">
                                <div class="list-footer">
                                    <a href="https://demo.codelug.com/wovie/profile/admin" class="user">
                                        admin</a>, by 5 month ago opened
                                </div>
                                <a href="https://demo.codelug.com/wovie/tartisma/5">
                                    <div class="name">
                                        1111111111 </div>
                                    <div class="desc">
                                        11111111111111 </div>
                                </a>
                            </div>
                            <div class="list-forum-comment">
                                <span class="count">0</span>
                                <span class="text">Reply</span>
                            </div>
                        </div>
                        <div class="list-forum">
                            <a href="https://demo.codelug.com/wovie/profile/admin" class="list-avatar">
                                <div class="avatar" style="">W</div>
                            </a>
                            <div class="flex-fill">
                                <div class="list-footer">
                                    <a href="https://demo.codelug.com/wovie/profile/admin" class="user">
                                        admin</a>, by 5 month ago opened
                                </div>
                                <a href="https://demo.codelug.com/wovie/tartisma/4">
                                    <div class="name">
                                        Title </div>
                                    <div class="desc">
                                        Dedc </div>
                                </a>
                            </div>
                            <div class="list-forum-comment">
                                <span class="count">0</span>
                                <span class="text">Reply</span>
                            </div>
                        </div>
                        <div class="list-forum">
                            <a href="https://demo.codelug.com/wovie/profile/admin" class="list-avatar">
                                <div class="avatar" style="">W</div>
                            </a>
                            <div class="flex-fill">
                                <div class="list-footer">
                                    <a href="https://demo.codelug.com/wovie/profile/admin" class="user">
                                        admin</a>, by 6 month ago opened
                                </div>
                                <a href="https://demo.codelug.com/wovie/tartisma/3">
                                    <div class="name">
                                        dsfsd </div>
                                    <div class="desc">
                                        fsfsf </div>
                                </a>
                            </div>
                            <div class="list-forum-comment">
                                <span class="count">0</span>
                                <span class="text">Reply</span>
                            </div>
                        </div>
                        <div class="list-forum">
                            <a href="https://demo.codelug.com/wovie/profile/admin" class="list-avatar">
                                <div class="avatar" style="">W</div>
                            </a>
                            <div class="flex-fill">
                                <div class="list-footer">
                                    <a href="https://demo.codelug.com/wovie/profile/admin" class="user">
                                        admin</a>, by 7 month ago opened
                                </div>
                                <a href="https://demo.codelug.com/wovie/tartisma/1">
                                    <div class="name">
                                        Test </div>
                                    <div class="desc">
                                        Test discussions </div>
                                </a>
                            </div>
                            <div class="list-forum-comment">
                                <span class="count">1</span>
                                <span class="text">Reply</span>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane " id="following" role="tabpanel" aria-labelledby="following-tab">
                        <div class="profile-box">
                            <div class="profile-heading">
                                Following Contents </div>
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
                                <div class="col">
                                    <div class="list-movie">
                                        <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13" class="list-media">
                                            <div class="play-btn">
                                                <svg class="icon">
                                                    <use xlink:href="{{ asset('images/sprite.svg') }}#play">
                                                    </use>
                                                </svg>
                                            </div>
                                            <div class="media media-cover"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-breaking-bad.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13"
                                                class="list-title text-12">
                                                Breaking Bad </a>
                                            <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13"
                                                class="list-category">
                                                Serie </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-movie">
                                        <a href="https://demo.codelug.com/wovie/serie/american-horror-story-17"
                                            class="list-media">
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
                                            <a href="https://demo.codelug.com/wovie/serie/american-horror-story-17"
                                                class="list-title text-12">
                                                American Horror Story </a>
                                            <a href="https://demo.codelug.com/wovie/serie/american-horror-story-17"
                                                class="list-category">
                                                Serie </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-movie">
                                        <a href="https://demo.codelug.com/wovie/serie/fear-the-walking-dead-18"
                                            class="list-media">
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
                                            <a href="https://demo.codelug.com/wovie/serie/fear-the-walking-dead-18"
                                                class="list-title text-12">
                                                Fear the Walking Dead </a>
                                            <a href="https://demo.codelug.com/wovie/serie/fear-the-walking-dead-18"
                                                class="list-category">
                                                Serie </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-movie">
                                        <a href="https://demo.codelug.com/wovie/serie/prison-break-19" class="list-media">
                                            <div class="play-btn">
                                                <svg class="icon">
                                                    <use xlink:href="{{ asset('images/sprite.svg') }}#play">
                                                    </use>
                                                </svg>
                                            </div>
                                            <div class="media media-cover"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-prison-break.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/serie/prison-break-19"
                                                class="list-title text-12">
                                                Prison Break </a>
                                            <a href="https://demo.codelug.com/wovie/serie/prison-break-19"
                                                class="list-category">
                                                Serie </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-movie">
                                        <a href="https://demo.codelug.com/wovie/serie/sherlock-20" class="list-media">
                                            <div class="play-btn">
                                                <svg class="icon">
                                                    <use xlink:href="{{ asset('images/sprite.svg') }}#play">
                                                    </use>
                                                </svg>
                                            </div>
                                            <div class="media media-cover"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-sherlock.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/serie/sherlock-20"
                                                class="list-title text-12">
                                                Sherlock </a>
                                            <a href="https://demo.codelug.com/wovie/serie/sherlock-20"
                                                class="list-category">
                                                Serie </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-movie">
                                        <a href="https://demo.codelug.com/wovie/serie/the-act-21" class="list-media">
                                            <div class="play-btn">
                                                <svg class="icon">
                                                    <use xlink:href="{{ asset('images/sprite.svg') }}#play">
                                                    </use>
                                                </svg>
                                            </div>
                                            <div class="media media-cover"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-the-act.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/serie/the-act-21"
                                                class="list-title text-12">
                                                The Act </a>
                                            <a href="https://demo.codelug.com/wovie/serie/the-act-21"
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
