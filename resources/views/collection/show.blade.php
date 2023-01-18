@extends('layouts.app')

@section('main')
    <div class="flex-fill">
        {{ Breadcrumbs::render() }}
        <div class="collection-detail">
            <form method="post">
                <input type="hidden" name="_ACTION" value="save">
                <input type="hidden" name="_TOKEN"
                    value="JDJ5JDEwJEFCS1cuOGdrOWpRNjAyS2lJbkQwS2Vmd2ZnbW5tczBVMTBJakF1VnkwSEdzZ09hTzI2Qm5P">
                <h1>
                    The Best TV and Movies to Watch in February </h1>
                <input type="text" name="name" class="form-control form-control-lg" placeholder="Name"
                    value="The Best TV and Movies to Watch in February" required="true">
                <div class="collection-footer">
                    <a href="https://demo.codelug.com/wovie/profile/admin" class="user">
                        admin </a>
                    <span>, by 2 year ago created</span>
                    <a href="#" class="edit">Edit</a>
                </div>
                <button type="submit" class="btn btn-theme">Save Changes</button>

                <div class="row row-cols-md-6 row-cols-2">
                    <div class="col">
                        <div class="list-movie">
                            <input class="d-none" name="post[]" type="checkbox" value="33">
                            <a href="https://demo.codelug.com/wovie/movie/bird-box-25" class="list-media">
                                <div class="play-btn">
                                    <svg class="icon">
                                        <use xlink:href="{{ asset("images/sprite.svg") }}#play">
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
                    <div class="col">
                        <div class="list-movie">
                            <input class="d-none" name="post[]" type="checkbox" value="6">
                            <a href="https://demo.codelug.com/wovie/serie/arrow-16" class="list-media">
                                <div class="play-btn">
                                    <svg class="icon">
                                        <use xlink:href="{{ asset("images/sprite.svg") }}#play">
                                        </use>
                                    </svg>
                                </div>
                                <div class="media media-cover"
                                    style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-arrow.webp&quot;);">
                                </div>
                            </a>
                            <div class="list-caption">
                                <a href="https://demo.codelug.com/wovie/serie/arrow-16" class="list-title">
                                    Arrow </a>
                                <a href="https://demo.codelug.com/wovie/category/crime" class="list-category">
                                    Crime </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="list-movie">
                            <input class="d-none" name="post[]" type="checkbox" value="10">
                            <a href="https://demo.codelug.com/wovie/movie/django-unchained-6" class="list-media">
                                <div class="play-btn">
                                    <svg class="icon">
                                        <use xlink:href="{{ asset("images/sprite.svg") }}#play">
                                        </use>
                                    </svg>
                                </div>
                                <div class="media media-cover"
                                    style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-django-unchained.webp&quot;);">
                                </div>
                            </a>
                            <div class="list-caption">
                                <a href="https://demo.codelug.com/wovie/movie/django-unchained-6" class="list-title">
                                    Django Unchained </a>
                                <a href="https://demo.codelug.com/wovie/category/drama" class="list-category">
                                    Drama </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="list-movie">
                            <input class="d-none" name="post[]" type="checkbox" value="7">
                            <a href="https://demo.codelug.com/wovie/movie/captain-americathe-first-avenger-10"
                                class="list-media">
                                <div class="play-btn">
                                    <svg class="icon">
                                        <use xlink:href="{{ asset("images/sprite.svg") }}#play">
                                        </use>
                                    </svg>
                                </div>
                                <div class="media media-cover"
                                    style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-captain-america-the-first-avenger.webp&quot;);">
                                </div>
                            </a>
                            <div class="list-caption">
                                <a href="https://demo.codelug.com/wovie/movie/captain-americathe-first-avenger-10"
                                    class="list-title">
                                    Captain America:The First Avenger </a>
                                <a href="https://demo.codelug.com/wovie/category/action" class="list-category">
                                    Action </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="list-movie">
                            <input class="d-none" name="post[]" type="checkbox" value="11">
                            <a href="https://demo.codelug.com/wovie/serie/fear-the-walking-dead-18" class="list-media">
                                <div class="play-btn">
                                    <svg class="icon">
                                        <use xlink:href="{{ asset("images/sprite.svg") }}#play">
                                        </use>
                                    </svg>
                                </div>
                                <div class="media media-cover"
                                    style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-fear-the-walking-dead.webp&quot;);">
                                </div>
                            </a>
                            <div class="list-caption">
                                <a href="https://demo.codelug.com/wovie/serie/fear-the-walking-dead-18"
                                    class="list-title">
                                    Fear the Walking Dead </a>
                                <a href="https://demo.codelug.com/wovie/category/drama" class="list-category">
                                    Drama </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="list-movie">
                            <input class="d-none" name="post[]" type="checkbox" value="8">
                            <a href="https://demo.codelug.com/wovie/movie/avengers-age-of-ultron-8" class="list-media">
                                <div class="play-btn">
                                    <svg class="icon">
                                        <use xlink:href="{{ asset("images/sprite.svg") }}#play">
                                        </use>
                                    </svg>
                                </div>
                                <div class="media media-cover"
                                    style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-avengers-age-of-ultron.webp&quot;);">
                                </div>
                            </a>
                            <div class="list-caption">
                                <a href="https://demo.codelug.com/wovie/movie/avengers-age-of-ultron-8"
                                    class="list-title">
                                    Avengers: Age of Ultron </a>
                                <a href="https://demo.codelug.com/wovie/category/action" class="list-category">
                                    Action </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="list-movie">
                            <input class="d-none" name="post[]" type="checkbox" value="16">
                            <a href="https://demo.codelug.com/wovie/movie/guardians-of-the-galaxy-2" class="list-media">
                                <div class="play-btn">
                                    <svg class="icon">
                                        <use xlink:href="{{ asset("images/sprite.svg") }}#play">
                                        </use>
                                    </svg>
                                </div>
                                <div class="media media-cover"
                                    style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-guardians-of-the-galaxy.webp&quot;);">
                                </div>
                            </a>
                            <div class="list-caption">
                                <a href="https://demo.codelug.com/wovie/movie/guardians-of-the-galaxy-2"
                                    class="list-title">
                                    Guardians of the Galaxy </a>
                                <a href="https://demo.codelug.com/wovie/category/action" class="list-category">
                                    Action </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="list-movie">
                            <input class="d-none" name="post[]" type="checkbox" value="9">
                            <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13" class="list-media">
                                <div class="play-btn">
                                    <svg class="icon">
                                        <use xlink:href="{{ asset("images/sprite.svg") }}#play">
                                        </use>
                                    </svg>
                                </div>
                                <div class="media media-cover"
                                    style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-breaking-bad.webp&quot;);">
                                </div>
                            </a>
                            <div class="list-caption">
                                <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13" class="list-title">
                                    Breaking Bad </a>
                                <a href="https://demo.codelug.com/wovie/category/drama" class="list-category">
                                    Drama </a>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
