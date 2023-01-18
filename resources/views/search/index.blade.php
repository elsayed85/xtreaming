@extends('layouts.app')

@section('main')
    <div class="app-content">
        {{ Breadcrumbs::render() }}
        <div class="filter-btn" data-toggle="modal" data-target="#filter">
            <svg class="icon">
                <use xlink:href="https://demo.codelug.com/wovie/public/assets/img/sprite.svg#filter"></use>
            </svg>
        </div>
        <div class="d-flex">
            <div class="app-content">
                <div class="app-section">
                    <div class="mb-4">
                        <div class="text-24 text-white font-weight-bold">
                            Search Results </div>
                        <div class="subtext text-12">
                            "a" verbal 72 result found </div>
                        <div class="nav-active-border text-12 b-primary bottom mt-3">
                            <ul class="nav pt-0" id="myTab" role="tablist">
                                <li>
                                    <a class="nav-link active" id="movies-tab" data-toggle="tab" href="#movies"
                                        role="tab" aria-controls="movies" aria-selected="true">Movies</a>
                                </li>
                                <li>
                                    <a class="nav-link" id="series-tab" data-toggle="tab" href="#series" role="tab"
                                        aria-controls="series" aria-selected="false">Series</a>
                                </li>
                                <li>
                                    <a class="nav-link" id="actors-tab" data-toggle="tab" href="#actors" role="tab"
                                        aria-controls="actors" aria-selected="false">Actors</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content">

                        <div class="tab-pane active" id="movies" role="tabpanel" aria-labelledby="movies-tab">
                            <div class="row row-cols-5">
                                <div class="col">
                                    <div class="list-movie">
                                        <a href="https://demo.codelug.com/wovie/movie/interstellar-1" class="list-media">
                                            <div class="list-media-attr">
                                                <div class="quality">
                                                    Ultra HD </div>
                                            </div>
                                            <div class="play-btn">
                                                <svg class="icon">
                                                    <use
                                                        xlink:href="https://demo.codelug.com/wovie/public/assets/img/sprite.svg#play">
                                                    </use>
                                                </svg>
                                            </div>
                                            <div class="media media-cover"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-interstellar.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/movie/interstellar-1"
                                                class="list-title">
                                                Interstellar </a>
                                            <a href="https://demo.codelug.com/wovie/movie/interstellar-1"
                                                class="list-category">
                                                Adventure </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-movie">
                                        <a href="https://demo.codelug.com/wovie/movie/shutter-island-9" class="list-media">
                                            <div class="list-media-attr">
                                                <div class="quality">
                                                    Ultra HD </div>
                                            </div>
                                            <div class="play-btn">
                                                <svg class="icon">
                                                    <use
                                                        xlink:href="https://demo.codelug.com/wovie/public/assets/img/sprite.svg#play">
                                                    </use>
                                                </svg>
                                            </div>
                                            <div class="media media-cover"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-shutter-island.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/movie/shutter-island-9"
                                                class="list-title">
                                                Shutter Island </a>
                                            <a href="https://demo.codelug.com/wovie/movie/shutter-island-9"
                                                class="list-category">
                                                Drama </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-movie">
                                        <a href="https://demo.codelug.com/wovie/movie/mad-max-fury-road-7"
                                            class="list-media">
                                            <div class="list-media-attr">
                                                <div class="quality">
                                                    HD </div>
                                            </div>
                                            <div class="play-btn">
                                                <svg class="icon">
                                                    <use
                                                        xlink:href="https://demo.codelug.com/wovie/public/assets/img/sprite.svg#play">
                                                    </use>
                                                </svg>
                                            </div>
                                            <div class="media media-cover"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-mad-max-fury-road.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/movie/mad-max-fury-road-7"
                                                class="list-title">
                                                Mad Max: Fury Road </a>
                                            <a href="https://demo.codelug.com/wovie/movie/mad-max-fury-road-7"
                                                class="list-category">
                                                Action </a>
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
                                                    <use
                                                        xlink:href="https://demo.codelug.com/wovie/public/assets/img/sprite.svg#play">
                                                    </use>
                                                </svg>
                                            </div>
                                            <div class="media media-cover"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-iron-man.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/movie/iron-man-4" class="list-title">
                                                Iron Man </a>
                                            <a href="https://demo.codelug.com/wovie/movie/iron-man-4"
                                                class="list-category">
                                                Action </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-movie">
                                        <a href="https://demo.codelug.com/wovie/movie/django-unchained-6"
                                            class="list-media">
                                            <div class="list-media-attr">
                                                <div class="quality">
                                                    Ultra HD </div>
                                            </div>
                                            <div class="play-btn">
                                                <svg class="icon">
                                                    <use
                                                        xlink:href="https://demo.codelug.com/wovie/public/assets/img/sprite.svg#play">
                                                    </use>
                                                </svg>
                                            </div>
                                            <div class="media media-cover"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-django-unchained.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/movie/django-unchained-6"
                                                class="list-title">
                                                Django Unchained </a>
                                            <a href="https://demo.codelug.com/wovie/movie/django-unchained-6"
                                                class="list-category">
                                                Drama </a>
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
                                                    <use
                                                        xlink:href="https://demo.codelug.com/wovie/public/assets/img/sprite.svg#play">
                                                    </use>
                                                </svg>
                                            </div>
                                            <div class="media media-cover"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-harry-potter-and-the-philosophers-stone.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/movie/harry-potter-and-the-philosophers-stone-3"
                                                class="list-title">
                                                Harry Potter and the Philosopher's Stone </a>
                                            <a href="https://demo.codelug.com/wovie/movie/harry-potter-and-the-philosophers-stone-3"
                                                class="list-category">
                                                Adventure </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-movie">
                                        <a href="https://demo.codelug.com/wovie/movie/avengers-age-of-ultron-8"
                                            class="list-media">
                                            <div class="list-media-attr">
                                                <div class="quality">
                                                    Ultra HD </div>
                                            </div>
                                            <div class="play-btn">
                                                <svg class="icon">
                                                    <use
                                                        xlink:href="https://demo.codelug.com/wovie/public/assets/img/sprite.svg#play">
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
                                            <a href="https://demo.codelug.com/wovie/movie/avengers-age-of-ultron-8"
                                                class="list-category">
                                                Action </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-movie">
                                        <a href="https://demo.codelug.com/wovie/movie/the-shawshank-redemption-5"
                                            class="list-media">
                                            <div class="list-media-attr">
                                                <div class="quality">
                                                    HD </div>
                                            </div>
                                            <div class="play-btn">
                                                <svg class="icon">
                                                    <use
                                                        xlink:href="https://demo.codelug.com/wovie/public/assets/img/sprite.svg#play">
                                                    </use>
                                                </svg>
                                            </div>
                                            <div class="media media-cover"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-the-shawshank-redemption.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/movie/the-shawshank-redemption-5"
                                                class="list-title">
                                                The Shawshank Redemption </a>
                                            <a href="https://demo.codelug.com/wovie/movie/the-shawshank-redemption-5"
                                                class="list-category">
                                                Drama </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-movie">
                                        <a href="https://demo.codelug.com/wovie/movie/batman-begins-27"
                                            class="list-media">
                                            <div class="list-media-attr">
                                                <div class="quality">
                                                    SD </div>
                                            </div>
                                            <div class="play-btn">
                                                <svg class="icon">
                                                    <use
                                                        xlink:href="https://demo.codelug.com/wovie/public/assets/img/sprite.svg#play">
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
                                                Action </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-movie">
                                        <a href="https://demo.codelug.com/wovie/movie/captain-americathe-first-avenger-10"
                                            class="list-media">
                                            <div class="list-media-attr">
                                                <div class="quality">
                                                    Ultra HD </div>
                                            </div>
                                            <div class="play-btn">
                                                <svg class="icon">
                                                    <use
                                                        xlink:href="https://demo.codelug.com/wovie/public/assets/img/sprite.svg#play">
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
                                            <a href="https://demo.codelug.com/wovie/movie/captain-americathe-first-avenger-10"
                                                class="list-category">
                                                Action </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-movie">
                                        <a href="https://demo.codelug.com/wovie/movie/guardians-of-the-galaxy-2"
                                            class="list-media">
                                            <div class="list-media-attr">
                                                <div class="quality">
                                                    Ultra HD </div>
                                            </div>
                                            <div class="play-btn">
                                                <svg class="icon">
                                                    <use
                                                        xlink:href="https://demo.codelug.com/wovie/public/assets/img/sprite.svg#play">
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
                                            <a href="https://demo.codelug.com/wovie/movie/guardians-of-the-galaxy-2"
                                                class="list-category">
                                                Action </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane" id="series" role="tabpanel" aria-labelledby="series-tab">
                            <div class="row row-cols-5">
                                <div class="col">
                                    <div class="list-movie">
                                        <a href="https://demo.codelug.com/wovie/serie/chilling-adventures-of-sabrina-22"
                                            class="list-media">
                                            <div class="list-media-attr">
                                                <div class="quality">
                                                    HD </div>
                                            </div>
                                            <div class="play-btn">
                                                <svg class="icon">
                                                    <use
                                                        xlink:href="https://demo.codelug.com/wovie/public/assets/img/sprite.svg#play">
                                                    </use>
                                                </svg>
                                            </div>
                                            <div class="media media-cover"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-chilling-adventures-of-sabrina.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/serie/chilling-adventures-of-sabrina-22"
                                                class="list-title">
                                                Chilling Adventures of Sabrina </a>
                                            <a href="https://demo.codelug.com/wovie/serie/chilling-adventures-of-sabrina-22"
                                                class="list-category">
                                                Mystery </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-movie">
                                        <a href="https://demo.codelug.com/wovie/serie/the-act-21" class="list-media">
                                            <div class="list-media-attr">
                                                <div class="quality">
                                                    HD </div>
                                            </div>
                                            <div class="play-btn">
                                                <svg class="icon">
                                                    <use
                                                        xlink:href="https://demo.codelug.com/wovie/public/assets/img/sprite.svg#play">
                                                    </use>
                                                </svg>
                                            </div>
                                            <div class="media media-cover"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-the-act.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/serie/the-act-21" class="list-title">
                                                The Act </a>
                                            <a href="https://demo.codelug.com/wovie/serie/the-act-21"
                                                class="list-category">
                                                Drama </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-movie">
                                        <a href="https://demo.codelug.com/wovie/serie/fear-the-walking-dead-18"
                                            class="list-media">
                                            <div class="list-media-attr">
                                                <div class="quality">
                                                    HD </div>
                                            </div>
                                            <div class="play-btn">
                                                <svg class="icon">
                                                    <use
                                                        xlink:href="https://demo.codelug.com/wovie/public/assets/img/sprite.svg#play">
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
                                            <a href="https://demo.codelug.com/wovie/serie/fear-the-walking-dead-18"
                                                class="list-category">
                                                Drama </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-movie">
                                        <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13" class="list-media">
                                            <div class="list-media-attr">
                                                <div class="quality">
                                                    Ultra HD </div>
                                            </div>
                                            <div class="play-btn">
                                                <svg class="icon">
                                                    <use
                                                        xlink:href="https://demo.codelug.com/wovie/public/assets/img/sprite.svg#play">
                                                    </use>
                                                </svg>
                                            </div>
                                            <div class="media media-cover"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-breaking-bad.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13"
                                                class="list-title">
                                                Breaking Bad </a>
                                            <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13"
                                                class="list-category">
                                                Drama </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-movie">
                                        <a href="https://demo.codelug.com/wovie/serie/american-horror-story-17"
                                            class="list-media">
                                            <div class="list-media-attr">
                                                <div class="quality">
                                                    Ultra HD </div>
                                            </div>
                                            <div class="play-btn">
                                                <svg class="icon">
                                                    <use
                                                        xlink:href="https://demo.codelug.com/wovie/public/assets/img/sprite.svg#play">
                                                    </use>
                                                </svg>
                                            </div>
                                            <div class="media media-cover"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-american-horror-story.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/serie/american-horror-story-17"
                                                class="list-title">
                                                American Horror Story </a>
                                            <a href="https://demo.codelug.com/wovie/serie/american-horror-story-17"
                                                class="list-category">
                                                Drama </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-movie">
                                        <a href="https://demo.codelug.com/wovie/serie/arrow-16" class="list-media">
                                            <div class="list-media-attr">
                                                <div class="quality">
                                                    HD </div>
                                            </div>
                                            <div class="play-btn">
                                                <svg class="icon">
                                                    <use
                                                        xlink:href="https://demo.codelug.com/wovie/public/assets/img/sprite.svg#play">
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
                                            <a href="https://demo.codelug.com/wovie/serie/arrow-16" class="list-category">
                                                Crime </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-movie">
                                        <a href="https://demo.codelug.com/wovie/serie/the-mandalorian-14"
                                            class="list-media">
                                            <div class="list-media-attr">
                                                <div class="quality">
                                                    Ultra HD </div>
                                            </div>
                                            <div class="play-btn">
                                                <svg class="icon">
                                                    <use
                                                        xlink:href="https://demo.codelug.com/wovie/public/assets/img/sprite.svg#play">
                                                    </use>
                                                </svg>
                                            </div>
                                            <div class="media media-cover"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-the-mandalorian.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/serie/the-mandalorian-14"
                                                class="list-title">
                                                The Mandalorian </a>
                                            <a href="https://demo.codelug.com/wovie/serie/the-mandalorian-14"
                                                class="list-category">
                                                Crime </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-movie">
                                        <a href="https://demo.codelug.com/wovie/serie/prison-break-19" class="list-media">
                                            <div class="list-media-attr">
                                                <div class="quality">
                                                    HD </div>
                                            </div>
                                            <div class="play-btn">
                                                <svg class="icon">
                                                    <use
                                                        xlink:href="https://demo.codelug.com/wovie/public/assets/img/sprite.svg#play">
                                                    </use>
                                                </svg>
                                            </div>
                                            <div class="media media-cover"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-prison-break.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/serie/prison-break-19"
                                                class="list-title">
                                                Prison Break </a>
                                            <a href="https://demo.codelug.com/wovie/serie/prison-break-19"
                                                class="list-category">
                                                Crime </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-movie">
                                        <a href="https://demo.codelug.com/wovie/serie/greys-anatomy-15"
                                            class="list-media">
                                            <div class="list-media-attr">
                                                <div class="quality">
                                                    HD </div>
                                            </div>
                                            <div class="play-btn">
                                                <svg class="icon">
                                                    <use
                                                        xlink:href="https://demo.codelug.com/wovie/public/assets/img/sprite.svg#play">
                                                    </use>
                                                </svg>
                                            </div>
                                            <div class="media media-cover"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-greys-anatomy.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/serie/greys-anatomy-15"
                                                class="list-title">
                                                Grey's Anatomy </a>
                                            <a href="https://demo.codelug.com/wovie/serie/greys-anatomy-15"
                                                class="list-category">
                                                Drama </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-movie">
                                        <a href="https://demo.codelug.com/wovie/serie/the-walking-dead-11"
                                            class="list-media">
                                            <div class="list-media-attr">
                                                <div class="quality">
                                                    HD </div>
                                            </div>
                                            <div class="play-btn">
                                                <svg class="icon">
                                                    <use
                                                        xlink:href="https://demo.codelug.com/wovie/public/assets/img/sprite.svg#play">
                                                    </use>
                                                </svg>
                                            </div>
                                            <div class="media media-cover"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-the-walking-dead.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/serie/the-walking-dead-11"
                                                class="list-title">
                                                The Walking Dead </a>
                                            <a href="https://demo.codelug.com/wovie/serie/the-walking-dead-11"
                                                class="list-category">
                                                Drama </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-movie">
                                        <a href="https://demo.codelug.com/wovie/serie/riverdale-12" class="list-media">
                                            <div class="list-media-attr">
                                                <div class="quality">
                                                    Ultra HD </div>
                                            </div>
                                            <div class="play-btn">
                                                <svg class="icon">
                                                    <use
                                                        xlink:href="https://demo.codelug.com/wovie/public/assets/img/sprite.svg#play">
                                                    </use>
                                                </svg>
                                            </div>
                                            <div class="media media-cover"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-riverdale.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/serie/riverdale-12"
                                                class="list-title">
                                                Riverdale </a>
                                            <a href="https://demo.codelug.com/wovie/serie/riverdale-12"
                                                class="list-category">
                                                Mystery </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane" id="actors" role="tabpanel" aria-labelledby="actors-tab">
                            <div class="row row-cols-5">
                                <div class="col">
                                    <div class="list-actor">
                                        <a href="https://demo.codelug.com/wovie/actor/aaron-himelstein-379"
                                            class="list-media" title="Aaron Himelstein">
                                            <div class="media"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/actor/aaron-himelstein.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/actor/aaron-himelstein-379"
                                                class="list-title" title="Aaron Himelstein">
                                                Aaron Himelstein</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-actor">
                                        <a href="https://demo.codelug.com/wovie/actor/aaron-paul-473" class="list-media"
                                            title="Aaron Paul">
                                            <div class="media"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/actor/aaron-paul.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/actor/aaron-paul-473"
                                                class="list-title" title="Aaron Paul">
                                                Aaron Paul</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-actor">
                                        <a href="https://demo.codelug.com/wovie/actor/aaron-taylor-johnson-335"
                                            class="list-media" title="Aaron Taylor-Johnson">
                                            <div class="media"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/actor/aaron-taylor-johnson.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/actor/aaron-taylor-johnson-335"
                                                class="list-title" title="Aaron Taylor-Johnson">
                                                Aaron Taylor-Johnson</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-actor">
                                        <a href="https://demo.codelug.com/wovie/actor/abbey-lee-310" class="list-media"
                                            title="Abbey Lee">
                                            <div class="media"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/actor/abbey-lee.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/actor/abbey-lee-310"
                                                class="list-title" title="Abbey Lee">
                                                Abbey Lee</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-actor">
                                        <a href="https://demo.codelug.com/wovie/actor/adam-harrington-163"
                                            class="list-media" title="Adam Harrington">
                                            <div class="media"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/actor/adam-harrington.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/actor/adam-harrington-163"
                                                class="list-title" title="Adam Harrington">
                                                Adam Harrington</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-actor">
                                        <a href="https://demo.codelug.com/wovie/actor/adeline-rudolph-546"
                                            class="list-media" title="Adeline Rudolph">
                                            <div class="media"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/actor/adeline-rudolph.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/actor/adeline-rudolph-546"
                                                class="list-title" title="Adeline Rudolph">
                                                Adeline Rudolph</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-actor">
                                        <a href="https://demo.codelug.com/wovie/actor/adrian-rawlins-115"
                                            class="list-media" title="Adrian Rawlins">
                                            <div class="media"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/actor/adrian-rawlins.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/actor/adrian-rawlins-115"
                                                class="list-title" title="Adrian Rawlins">
                                                Adrian Rawlins</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-actor">
                                        <a href="https://demo.codelug.com/wovie/actor/adrienne-c-moore-661"
                                            class="list-media" title="Adrienne C. Moore">
                                            <div class="media"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/actor/adrienne-c-moore.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/actor/adrienne-c-moore-661"
                                                class="list-title" title="Adrienne C. Moore">
                                                Adrienne C. Moore</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-actor">
                                        <a href="https://demo.codelug.com/wovie/actor/ajani-perkins-182"
                                            class="list-media" title="Ajani Perkins">
                                            <div class="media"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/actor/ajani-perkins.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/actor/ajani-perkins-182"
                                                class="list-title" title="Ajani Perkins">
                                                Ajani Perkins</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-actor">
                                        <a href="https://demo.codelug.com/wovie/actor/alan-r-kessler-209"
                                            class="list-media" title="Alan R. Kessler">
                                            <div class="media"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/actor/alan-r-kessler.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/actor/alan-r-kessler-209"
                                                class="list-title" title="Alan R. Kessler">
                                                Alan R. Kessler</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-actor">
                                        <a href="https://demo.codelug.com/wovie/actor/alan-rickman-90" class="list-media"
                                            title="Alan Rickman">
                                            <div class="media"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/actor/alan-rickman.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/actor/alan-rickman-90"
                                                class="list-title" title="Alan Rickman">
                                                Alan Rickman</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-actor">
                                        <a href="https://demo.codelug.com/wovie/actor/alex-moggridge-634"
                                            class="list-media" title="Alex Moggridge">
                                            <div class="media"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/actor/alex-moggridge.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/actor/alex-moggridge-634"
                                                class="list-title" title="Alex Moggridge">
                                                Alex Moggridge</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-actor">
                                        <a href="https://demo.codelug.com/wovie/actor/alex-rose-68" class="list-media"
                                            title="Alex Rose">
                                            <div class="media"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/actor/alex-rose.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/actor/alex-rose-68" class="list-title"
                                                title="Alex Rose">
                                                Alex Rose</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-actor">
                                        <a href="https://demo.codelug.com/wovie/actor/alexa-nisenson-507"
                                            class="list-media" title="Alexa Nisenson">
                                            <div class="media"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/actor/alexa-nisenson.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/actor/alexa-nisenson-507"
                                                class="list-title" title="Alexa Nisenson">
                                                Alexa Nisenson</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-actor">
                                        <a href="https://demo.codelug.com/wovie/actor/alexandra-bastedo-623"
                                            class="list-media" title="Alexandra Bastedo">
                                            <div class="media"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/actor/alexandra-bastedo.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/actor/alexandra-bastedo-623"
                                                class="list-title" title="Alexandra Bastedo">
                                                Alexandra Bastedo</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-actor">
                                        <a href="https://demo.codelug.com/wovie/actor/alexis-denisof-61"
                                            class="list-media" title="Alexis Denisof">
                                            <div class="media"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/actor/alexis-denisof.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/actor/alexis-denisof-61"
                                                class="list-title" title="Alexis Denisof">
                                                Alexis Denisof</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-actor">
                                        <a href="https://demo.codelug.com/wovie/actor/alfonso-freeman-205"
                                            class="list-media" title="Alfonso Freeman">
                                            <div class="media"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/actor/alfonso-freeman.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/actor/alfonso-freeman-205"
                                                class="list-title" title="Alfonso Freeman">
                                                Alfonso Freeman</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-actor">
                                        <a href="https://demo.codelug.com/wovie/actor/alfred-enoch-106" class="list-media"
                                            title="Alfred Enoch">
                                            <div class="media"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/actor/alfred-enoch.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/actor/alfred-enoch-106"
                                                class="list-title" title="Alfred Enoch">
                                                Alfred Enoch</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-actor">
                                        <a href="https://demo.codelug.com/wovie/actor/alison-lintott-58"
                                            class="list-media" title="Alison Lintott">
                                            <div class="media"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/actor/alison-lintott.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/actor/alison-lintott-58"
                                                class="list-title" title="Alison Lintott">
                                                Alison Lintott</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-actor">
                                        <a href="https://demo.codelug.com/wovie/actor/alma-noce-372" class="list-media"
                                            title="Alma Noce">
                                            <div class="media"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/actor/alma-noce.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/actor/alma-noce-372"
                                                class="list-title" title="Alma Noce">
                                                Alma Noce</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-actor">
                                        <a href="https://demo.codelug.com/wovie/actor/alonzo-f-jones-232"
                                            class="list-media" title="Alonzo F. Jones">
                                            <div class="media"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/actor/alonzo-f-jones.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/actor/alonzo-f-jones-232"
                                                class="list-title" title="Alonzo F. Jones">
                                                Alonzo F. Jones</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-actor">
                                        <a href="https://demo.codelug.com/wovie/actor/alycia-debnam-carey-500"
                                            class="list-media" title="Alycia Debnam-Carey">
                                            <div class="media"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/actor/alycia-debnam-carey.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/actor/alycia-debnam-carey-500"
                                                class="list-title" title="Alycia Debnam-Carey">
                                                Alycia Debnam-Carey</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-actor">
                                        <a href="https://demo.codelug.com/wovie/actor/alysia-reiner-672"
                                            class="list-media" title="Alysia Reiner">
                                            <div class="media"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/actor/alysia-reiner.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/actor/alysia-reiner-672"
                                                class="list-title" title="Alysia Reiner">
                                                Alysia Reiner</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-actor">
                                        <a href="https://demo.codelug.com/wovie/actor/amanda-abbington-529"
                                            class="list-media" title="Amanda Abbington">
                                            <div class="media"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/actor/amanda-abbington.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/actor/amanda-abbington-529"
                                                class="list-title" title="Amanda Abbington">
                                                Amanda Abbington</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-actor">
                                        <a href="https://demo.codelug.com/wovie/actor/amanda-righetti-448"
                                            class="list-media" title="Amanda Righetti">
                                            <div class="media"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/actor/amanda-righetti.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/actor/amanda-righetti-448"
                                                class="list-title" title="Amanda Righetti">
                                                Amanda Righetti</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-actor">
                                        <a href="https://demo.codelug.com/wovie/actor/amanda-walker-432"
                                            class="list-media" title="Amanda Walker">
                                            <div class="media"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/actor/amanda-walker.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/actor/amanda-walker-432"
                                                class="list-title" title="Amanda Walker">
                                                Amanda Walker</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-actor">
                                        <a href="https://demo.codelug.com/wovie/actor/amari-cheatom-271"
                                            class="list-media" title="Amari Cheatom">
                                            <div class="media"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/actor/amari-cheatom.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/actor/amari-cheatom-271"
                                                class="list-title" title="Amari Cheatom">
                                                Amari Cheatom</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-actor">
                                        <a href="https://demo.codelug.com/wovie/actor/amaury-nolasco-520"
                                            class="list-media" title="Amaury Nolasco">
                                            <div class="media"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/actor/amaury-nolasco.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/actor/amaury-nolasco-520"
                                                class="list-title" title="Amaury Nolasco">
                                                Amaury Nolasco</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-actor">
                                        <a href="https://demo.codelug.com/wovie/actor/amber-tamblyn-254"
                                            class="list-media" title="Amber Tamblyn">
                                            <div class="media"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/actor/amber-tamblyn.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/actor/amber-tamblyn-254"
                                                class="list-title" title="Amber Tamblyn">
                                                Amber Tamblyn</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-actor">
                                        <a href="https://demo.codelug.com/wovie/actor/america-olivo-180"
                                            class="list-media" title="America Olivo">
                                            <div class="media"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/actor/america-olivo.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/actor/america-olivo-180"
                                                class="list-title" title="America Olivo">
                                                America Olivo</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-actor">
                                        <a href="https://demo.codelug.com/wovie/actor/amy-gumenick-565" class="list-media"
                                            title="Amy Gumenick">
                                            <div class="media"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/actor/amy-gumenick.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/actor/amy-gumenick-565"
                                                class="list-title" title="Amy Gumenick">
                                                Amy Gumenick</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-actor">
                                        <a href="https://demo.codelug.com/wovie/actor/anatole-taubman-436"
                                            class="list-media" title="Anatole Taubman">
                                            <div class="media"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/actor/anatole-taubman.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/actor/anatole-taubman-436"
                                                class="list-title" title="Anatole Taubman">
                                                Anatole Taubman</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-actor">
                                        <a href="https://demo.codelug.com/wovie/actor/anders-agger-641" class="list-media"
                                            title="Anders Agger">
                                            <div class="media"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/actor/anders-agger.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/actor/anders-agger-641"
                                                class="list-title" title="Anders Agger">
                                                Anders Agger</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-actor">
                                        <a href="https://demo.codelug.com/wovie/actor/andrew-pleavin-632"
                                            class="list-media" title="Andrew Pleavin">
                                            <div class="media"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/actor/andrew-pleavin.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/actor/andrew-pleavin-632"
                                                class="list-title" title="Andrew Pleavin">
                                                Andrew Pleavin</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-actor">
                                        <a href="https://demo.codelug.com/wovie/actor/andy-serkis-345" class="list-media"
                                            title="Andy Serkis">
                                            <div class="media"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/actor/andy-serkis.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/actor/andy-serkis-345"
                                                class="list-title" title="Andy Serkis">
                                                Andy Serkis</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-actor">
                                        <a href="https://demo.codelug.com/wovie/actor/angelica-ross-497"
                                            class="list-media" title="Angelica Ross">
                                            <div class="media"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/actor/angelica-ross.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/actor/angelica-ross-497"
                                                class="list-title" title="Angelica Ross">
                                                Angelica Ross</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-actor">
                                        <a href="https://demo.codelug.com/wovie/actor/angus-sampson-315"
                                            class="list-media" title="Angus Sampson">
                                            <div class="media"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/actor/angus-sampson.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/actor/angus-sampson-315"
                                                class="list-title" title="Angus Sampson">
                                                Angus Sampson</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-actor">
                                        <a href="https://demo.codelug.com/wovie/actor/anna-gunn-474" class="list-media"
                                            title="Anna Gunn">
                                            <div class="media"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/actor/anna-gunn.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/actor/anna-gunn-474"
                                                class="list-title" title="Anna Gunn">
                                                Anna Gunn</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-actor">
                                        <a href="https://demo.codelug.com/wovie/actor/annasophia-robb-534"
                                            class="list-media" title="AnnaSophia Robb">
                                            <div class="media"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/actor/annasophia-robb.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/actor/annasophia-robb-534"
                                                class="list-title" title="AnnaSophia Robb">
                                                AnnaSophia Robb</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-actor">
                                        <a href="https://demo.codelug.com/wovie/actor/anne-hathaway-3" class="list-media"
                                            title="Anne Hathaway">
                                            <div class="media"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/actor/anne-hathaway.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/actor/anne-hathaway-3"
                                                class="list-title" title="Anne Hathaway">
                                                Anne Hathaway</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-actor">
                                        <a href="https://demo.codelug.com/wovie/actor/anthony-mackie-338"
                                            class="list-media" title="Anthony Mackie">
                                            <div class="media"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/actor/anthony-mackie.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/actor/anthony-mackie-338"
                                                class="list-title" title="Anthony Mackie">
                                                Anthony Mackie</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-actor">
                                        <a href="https://demo.codelug.com/wovie/actor/anthony-martins-178"
                                            class="list-media" title="Anthony Martins">
                                            <div class="media"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/actor/anthony-martins.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/actor/anthony-martins-178"
                                                class="list-title" title="Anthony Martins">
                                                Anthony Martins</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-actor">
                                        <a href="https://demo.codelug.com/wovie/actor/antoinette-kellerman-317"
                                            class="list-media" title="Antoinette Kellerman">
                                            <div class="media"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/actor/antoinette-kellerman.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/actor/antoinette-kellerman-317"
                                                class="list-title" title="Antoinette Kellerman">
                                                Antoinette Kellerman</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-actor">
                                        <a href="https://demo.codelug.com/wovie/actor/antony-acheampong-361"
                                            class="list-media" title="Antony Acheampong">
                                            <div class="media"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/actor/antony-acheampong.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/actor/antony-acheampong-361"
                                                class="list-title" title="Antony Acheampong">
                                                Antony Acheampong</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-actor">
                                        <a href="https://demo.codelug.com/wovie/actor/arthur-lee-369" class="list-media"
                                            title="Arthur Lee">
                                            <div class="media"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/actor/arthur-lee.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/actor/arthur-lee-369"
                                                class="list-title" title="Arthur Lee">
                                                Arthur Lee</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-actor">
                                        <a href="https://demo.codelug.com/wovie/actor/ashley-alvarado-568"
                                            class="list-media" title="Ashley Alvarado">
                                            <div class="media"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/actor/ashley-alvarado.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/actor/ashley-alvarado-568"
                                                class="list-title" title="Ashley Alvarado">
                                                Ashley Alvarado</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-actor">
                                        <a href="https://demo.codelug.com/wovie/actor/ato-essandoh-246" class="list-media"
                                            title="Ato Essandoh">
                                            <div class="media"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/actor/ato-essandoh.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/actor/ato-essandoh-246"
                                                class="list-title" title="Ato Essandoh">
                                                Ato Essandoh</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-actor">
                                        <a href="https://demo.codelug.com/wovie/actor/augustus-prew-521"
                                            class="list-media" title="Augustus Prew">
                                            <div class="media"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/actor/augustus-prew.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/actor/augustus-prew-521"
                                                class="list-title" title="Augustus Prew">
                                                Augustus Prew</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-actor">
                                        <a href="https://demo.codelug.com/wovie/actor/austin-amelio-505"
                                            class="list-media" title="Austin Amelio">
                                            <div class="media"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/actor/austin-amelio.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/actor/austin-amelio-505"
                                                class="list-title" title="Austin Amelio">
                                                Austin Amelio</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-actor">
                                        <a href="https://demo.codelug.com/wovie/actor/barry-aird-378" class="list-media"
                                            title="Barry Aird">
                                            <div class="media"
                                                style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/actor/barry-aird.webp&quot;);">
                                            </div>
                                        </a>
                                        <div class="list-caption">
                                            <a href="https://demo.codelug.com/wovie/actor/barry-aird-378"
                                                class="list-title" title="Barry Aird">
                                                Barry Aird</a>
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
