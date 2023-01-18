@extends('layouts.app')

@section('main')
    <div class="flex-fill">
        {{ Breadcrumbs::render() }}
        <div class="collection-detail">
            <h1>
                {{ $c->name }}
            </h1>
            <div class="collection-footer">
                @if($c->movies_count > 0)
                    <span>
                        {{ $c->movies_count }} Movies
                    </span>
                @endif
            </div>
            <div class="row row-cols-md-6 row-cols-2">
                <div class="col">
                    <div class="list-movie">
                        <input class="d-none" name="post[]" type="checkbox" value="33">
                        <a href="https://demo.codelug.com/wovie/movie/bird-box-25" class="list-media">
                            <div class="play-btn">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#play">
                                    </use>
                                </svg>
                            </div>
                            <div class="media media-cover"
                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-bird-box_1.webp&quot;);">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://demo.codelug.com/wovie/movie/bird-box-25" class="list-title">
                                Bird Box </a>
                            <a href="https://demo.codelug.com/wovie/category/drama" class="list-category">
                                Drama </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
