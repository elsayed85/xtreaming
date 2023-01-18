@extends('layouts.app')

@section('main')
    <div class="flex-fill">
        {{ Breadcrumbs::render() }}
        <div class="app-section">
            <div class="actor-profile">
                <div class="row">
                    <div class="col-md-3">
                        <div class="media" style="background-image: url('{{ $p->avatar }}');">
                        </div>
                        <div class="profile-attr-small">
                            <div class="attr">Gender</div>
                            <div class="text">{{ genderText($p) }}</div>
                        </div>
                        <div class="nav-social">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="pl-lg-4">
                            <h1>{{ $p->name }} </h1>
                            <div class="profile-attr">
                                <div class="attr">
                                    Acting ( {{ $p->movies_count }} ) Movie & ( {{ $p->series_count }} ) Serie
                                </div>

                                <div class="row row-cols-5 my-3">
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
                                                    class="list-title">
                                                    Batman Begins </a>
                                                <a href="https://demo.codelug.com/wovie/movie/batman-begins-27"
                                                    class="list-category">
                                                    Narrows Bridge Cop </a>
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
    </div>
@endsection
