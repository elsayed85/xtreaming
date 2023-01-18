@extends('layouts.app')

@section('main')
    <div class="app-content">
        {{ Breadcrumbs::render() }}
        <div class="mb-4">
            <div class="text-24 text-white font-weight-bold">Notifications</div>
        </div>
        <div class="notification">
            <div class="notification-icon bg-primary">
                <svg>
                    <use xlink:href="{{ asset("images/sprite.svg") }}#comment"></use>
                </svg>
            </div>
            <div class="flex-fill">
                <a href="https://demo.codelug.com/wovie/movie/batman-begins-27">
                    Bsuhu replied to your comment</a>
                <div class="date">
                    3 month ago </div>
            </div>
        </div>
        <div class="notification">
            <div class="notification-icon bg-primary">
                <svg>
                    <use xlink:href="{{ asset("images/sprite.svg") }}#comment"></use>
                </svg>
            </div>
            <div class="flex-fill">
                <a href="https://demo.codelug.com/wovie/movie/iron-man-4">
                    gokyildiz replied to your comment</a>
                <div class="date">
                    5 month ago </div>
            </div>
        </div>
        <div class="notification">
            <div class="notification-icon bg-primary">
                <svg>
                    <use xlink:href="{{ asset("images/sprite.svg") }}#comment"></use>
                </svg>
            </div>
            <div class="flex-fill">
                <a href="https://demo.codelug.com/wovie/movie/iron-man-4">
                    Gök123 replied to your comment</a>
                <div class="date">
                    5 month ago </div>
            </div>
        </div>
    </div>
@endsection
