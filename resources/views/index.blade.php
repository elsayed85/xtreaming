@extends('layouts.app')
@section('after_css')
@endsection
@section('main')
    <div class="app-content pt-md-3">
        <div style="width:100%;height:auto;border-radius:5px; padding:15px;color:#fff;font-weight:bold;text-align:center;background-color:#8951ff;">Join our discord for adfree content! <a href="https://discord.gg/PvAg9Rc7kQ" target="_blank" style="text-decoration: none;color:#fff;">https://discord.gg/PvAg9Rc7kQ</a></div>
        <div class="app-section">
            <div class="app-slider">
                <div id="slider" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <ol class="carousel-indicators">
                            <li data-target="#slider" data-slide-to="0" class="active"></li>
                            <li data-target="#slider" data-slide-to="1" class=""></li>
                            <li data-target="#slider" data-slide-to="2" class=""></li>
                            <li data-target="#slider" data-slide-to="3" class=""></li>
                        </ol>
                        <div class="carousel-item active">
                            <a href="https://demo.codelug.com/wovie/movie/shutter-island-9" class="slide media media-slide"
                                data-src="https://demo.codelug.com/wovie/public/upload/slide/shutter-island.webp">
                                <div class="slide-caption">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="slide-header">
                                                <div class="imdb">IMDB :
                                                    8.2 </div>
                                                <div>
                                                    2010 </div>
                                                <div class="category text-12">
                                                    Movie </div>
                                            </div>
                                            <div class="title">
                                                Shutter Island </div>
                                            <div class="description">
                                                World War II soldier-turned-U.S. Marshal Teddy
                                                Daniels investigates the disappearance of a patient
                                                from a hospital for the criminally insane, but his
                                                efforts are compromised by his troubling visions and
                                                also by a mysterious doctor. </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item ">
                            <a href="https://demo.codelug.com/wovie/movie/interstellar-1" class="slide media media-slide"
                                data-src="https://demo.codelug.com/wovie/public/upload/slide/interstellar.webp">
                                <div class="slide-caption">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="slide-header">
                                                <div class="imdb">IMDB :
                                                    8.3 </div>
                                                <div>
                                                    2014 </div>
                                                <div class="category text-12">
                                                    Movie </div>
                                            </div>
                                            <div class="title">
                                                Interstellar </div>
                                            <div class="description">
                                                The adventures of a group of explorers who make use
                                                of a newly discovered wormhole to surpass the
                                                limitations on human space travel and conquer the
                                                vast distances involved in an interstellar voyage.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item ">
                            <a href="https://demo.codelug.com/wovie/movie/mad-max-fury-road-7"
                                class="slide media media-slide"
                                data-src="https://demo.codelug.com/wovie/public/upload/slide/mad-max-fury-road.webp">
                                <div class="slide-caption">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="slide-header">
                                                <div class="imdb">IMDB :
                                                    19404 </div>
                                                <div>
                                                    2015 </div>
                                                <div class="category text-12">
                                                    Movie </div>
                                            </div>
                                            <div class="title">
                                                Mad Max: Fury Road </div>
                                            <div class="description">
                                                An apocalyptic story set in the furthest reaches of
                                                our planet, in a stark desert landscape where
                                                humanity is broken, and most everyone is crazed
                                                fighting for the necessities of life. </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item ">
                            <a href="https://demo.codelug.com/wovie/movie/captain-americathe-first-avenger-10"
                                class="slide media media-slide"
                                data-src="https://demo.codelug.com/wovie/public/upload/slide/captain-america-the-first-avenger.webp">
                                <div class="slide-caption">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="slide-header">
                                                <div class="imdb">IMDB :
                                                    6.9 </div>
                                                <div>
                                                    2011 </div>
                                                <div class="category text-12">
                                                    Movie </div>
                                            </div>
                                            <div class="title">
                                                Captain America: The First Avenger </div>
                                            <div class="description">
                                                During World War II, Steve Rogers is a sickly man
                                                from Brooklyn who's transformed into super-soldier
                                                Captain America to aid in the war effort. </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-control">
                        <a class="control-next" href="#slider" role="button" data-slide="next" aria-label="Next">
                            <svg>
                                <use xlink:href="{{ asset('images/sprite.svg') }}#chevron-right" />
                            </svg>
                        </a>
                        <a class="control-prev" href="#slider" role="button" data-slide="prev" aria-label="Prev">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="{{ asset('images/sprite.svg') }}#chevron-left" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-section">
            <div class="app-trailer">
                <div class="row row-cols-7 list-story">
                    <div class="col">
                        <a href="https://demo.codelug.com/wovie/movie/captain-americathe-first-avenger-10"
                            class="list-trailer">
                            <div class="media-story active" style="background-color: #f5c518">
                                <div class="media"
                                    data-src="https://demo.codelug.com/wovie/public/upload/story/captain-america-the-first-avenger.webp">
                                </div>
                            </div>
                            <div class="list-caption">
                                <div class="list-title">Captain America: The First Avenger</div>
                                <div class="list-description">New Movie</div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="https://demo.codelug.com/wovie/serie/chilling-adventures-of-sabrina-22"
                            class="list-trailer">
                            <div class="media-story active" style="background-color: #f5c518">
                                <div class="media"
                                    data-src="https://demo.codelug.com/wovie/public/upload/story/chilling-adventures-of-sabrina.webp">
                                </div>
                            </div>
                            <div class="list-caption">
                                <div class="list-title">Chilling Adventures of Sabrina</div>
                                <div class="list-description">Watch Now</div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="https://demo.codelug.com/wovie/movie/django-unchained-6" class="list-trailer">
                            <div class="media-story " style="background-color: ">
                                <div class="media"
                                    data-src="https://demo.codelug.com/wovie/public/upload/story/django-unchained.webp">
                                </div>
                            </div>
                            <div class="list-caption">
                                <div class="list-title">Django Unchained</div>
                                <div class="list-description">Cooming Soon</div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="https://demo.codelug.com/wovie/serie/fear-the-walking-dead-18" class="list-trailer">
                            <div class="media-story " style="background-color: ">
                                <div class="media"
                                    data-src="https://demo.codelug.com/wovie/public/upload/story/fear-the-walking-dead.webp">
                                </div>
                            </div>
                            <div class="list-caption">
                                <div class="list-title">Fear the Walking Dead</div>
                                <div class="list-description">Watch Now</div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="https://demo.codelug.com/wovie/movie/mad-max-fury-road-7" class="list-trailer">
                            <div class="media-story active" style="background-color: #f5c518">
                                <div class="media"
                                    data-src="https://demo.codelug.com/wovie/public/upload/story/mad-max-fury-road.webp">
                                </div>
                            </div>
                            <div class="list-caption">
                                <div class="list-title">Mad Max: Fury Road</div>
                                <div class="list-description">Custom Title</div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13" class="list-trailer">
                            <div class="media-story active" style="background-color: #f5c518">
                                <div class="media"
                                    data-src="https://demo.codelug.com/wovie/public/upload/story/breaking-bad.webp">
                                </div>
                            </div>
                            <div class="list-caption">
                                <div class="list-title">Breaking Bad</div>
                                <div class="list-description">Watch Now</div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="https://demo.codelug.com/wovie/serie/american-horror-story-17" class="list-trailer">
                            <div class="media-story active" style="background-color: #f5c518">
                                <div class="media"
                                    data-src="https://demo.codelug.com/wovie/public/upload/story/american-horror-story_1.webp">
                                </div>
                            </div>
                            <div class="list-caption">
                                <div class="list-title">American Horror Story</div>
                                <div class="list-description">New Movie</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-section">
            <div class="app-heading">
                <div class="text">
                    Featured Collections </div>
                <a href="https://watcha.movie/collections" class="all">All</a>
            </div>
            <div class="row row-wrap row-cols-lg-3 row-cols-md-2 mobile_slide_monthly mobile_slide"
                style="margin-top:-10px;">
                <div class="col">
                    <div class="collection-container">
                        <div class="list-collection"
                            style="width: 100%;background-size: cover;background-position: center;background-image: url('https://fdn.gsmarena.com/imgroot/news/22/08/netflix-ad-tier-no-offline-viewing/-1200/gsmarena_002.jpg');background-color: ;color: ">
                            <div class="list-caption">
                                <center>
                                    <a href="collection/netflix-originals-28"
                                        style="padding-top: 40px;padding-bottom: 70px;font-size: 25px; font-weight: bold;"
                                        class="list-title">
                                    </a>
                                </center>
                            </div>
                        </div>
                        <div
                            style="margin-bottom:10px;float:left;width:50%;height: 20px;overflow: hidden;white-space: pre;">
                            Netflix Originals</div>
                        <div style="float:right;width:50%;text-align:right;">63 items</div>
                    </div>
                </div>
                <div class="col">
                    <div class="collection-container">
                        <div class="list-collection"
                            style="width: 100%;background-size: cover;background-position: center;background-image: url('https://www.apple.com/v/apple-tv-plus/aa/images/meta/apple-tv__e7aqjl2rqzau_og.png');background-color: ;color: ">
                            <div class="list-caption">
                                <center>
                                    <a href="collection/apple-tv-2"
                                        style="padding-top: 40px;padding-bottom: 70px;font-size: 25px; font-weight: bold;"
                                        class="list-title">
                                    </a>
                                </center>
                            </div>
                        </div>
                        <div
                            style="margin-bottom:10px;float:left;width:50%;height: 20px;overflow: hidden;white-space: pre;">
                            Apple TV+</div>
                        <div style="float:right;width:50%;text-align:right;">42 items</div>
                    </div>
                </div>
                <div class="col">
                    <div class="collection-container">
                        <div class="list-collection"
                            style="width: 100%;background-size: cover;background-position: center;background-image: url('https://static-assets.bamgrid.com/product/disneyplus/images/share-default.14fadd993578b9916f855cebafb71e62.png');background-color: ;color: ">
                            <div class="list-caption">
                                <center>
                                    <a href="collection/disney-1"
                                        style="padding-top: 40px;padding-bottom: 70px;font-size: 25px; font-weight: bold;"
                                        class="list-title">
                                    </a>
                                </center>
                            </div>
                        </div>
                        <div
                            style="margin-bottom:10px;float:left;width:50%;height: 20px;overflow: hidden;white-space: pre;">
                            Disney+</div>
                        <div style="float:right;width:50%;text-align:right;">27 items</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-section app-weekly">
            <div class="app-heading">
                <div class="text">Popular This Week</div>
                <a href="https://watcha.movie/discovery" class="all">Trending</a>
            </div>
            <style>
                @media only screen and (max-width: 981px) {
                    .mobile_slide_weekly {
                        overflow-x: auto;
                        flex-wrap: nowrap;
                    }
                }
            </style>
            <style>
                @media only screen and (min-width: 981px) {
                    .mobile_slide_weekly {
                        overflow-x: auto;
                        flex-wrap: nowrap;
                    }
                }
            </style>
            <div class="row row-cols-5 mobile_slide_weekly mobile_slide">
                <div class="col">
                    <div class="list-movie">
                        <a href="https://watcha.movie/show/the-last-of-us-2023-13933" class="list-media">
                            <div class="list-media-attr">
                                <div class="quality">HD</div>
                                <div class="imdb">
                                    <span>
                                        9.222</span>
                                    <svg x="0px" y="0px" width="36px" height="36px"
                                        viewBox="0 0 36 36">
                                        <circle fill="none" stroke-width="1" cx="18" cy="18"
                                            r="16" stroke-dasharray="92 100" stroke-dashoffset="0"
                                            transform="rotate(-90 18 18)"></circle>
                                    </svg>
                                </div>
                            </div>
                            <div class="play-btn"><svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#play"></use>
                                </svg></div>
                            <div class="media media-cover"
                                style="background-image:url('https://image.tmdb.org/t/p/w780/uKvVjHNqB5VmOrdxqAt2F7J78ED.jpg');">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://watcha.movie/serie/the-last-of-us-13933" class="list-title">
                                The Last of Us</a>
                            <div class="list-year" style="display:inline">2023</div>
                            <div class="mpaa float-right" style="display:inline;margin-top: 0px;">serie</div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="list-movie">
                        <a href="https://watcha.movie/show/rick-and-morty-2013-52" class="list-media">
                            <div class="list-media-attr">
                                <div class="quality">HD</div>
                                <div class="imdb">
                                    <span>
                                        8.73</span>
                                    <svg x="0px" y="0px" width="36px" height="36px"
                                        viewBox="0 0 36 36">
                                        <circle fill="none" stroke-width="1" cx="18" cy="18"
                                            r="16" stroke-dasharray="87 100" stroke-dashoffset="0"
                                            transform="rotate(-90 18 18)"></circle>
                                    </svg>
                                </div>
                            </div>
                            <div class="play-btn"><svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#play"></use>
                                </svg></div>
                            <div class="media media-cover"
                                style="background-image:url('https://image.tmdb.org/t/p/w780/cvhNj9eoRBe5SxjCbQTkh05UP5K.jpg');">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://watcha.movie/serie/rick-and-morty-52" class="list-title">
                                Rick and Morty</a>
                            <div class="list-year" style="display:inline">2013</div>
                            <div class="mpaa float-right" style="display:inline;margin-top: 0px;">serie</div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="list-movie">
                        <a href="/movie/puss-in-boots-the-last-wish-2022-12395" class="list-media">
                            <div class="list-media-attr">
                                <div class="quality">HD</div>
                                <div class="imdb">
                                    <span>
                                        7.981</span>
                                    <svg x="0px" y="0px" width="36px" height="36px"
                                        viewBox="0 0 36 36">
                                        <circle fill="none" stroke-width="1" cx="18" cy="18"
                                            r="16" stroke-dasharray="80 100" stroke-dashoffset="0"
                                            transform="rotate(-90 18 18)"></circle>
                                    </svg>
                                </div>
                            </div>
                            <div class="play-btn"><svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#play"></use>
                                </svg></div>
                            <div class="media media-cover"
                                style="background-image:url('https://image.tmdb.org/t/p/w780/lmf0zzR7ritjOL3qumRh3hfvOFK.jpg');">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://watcha.movie/movie/puss-in-boots-the-last-wish-12395" class="list-title">
                                Puss in Boots: The Last Wish</a>
                            <div class="list-year" style="display:inline">2022</div>
                            <div class="mpaa float-right" style="display:inline;margin-top: 0px;">movie</div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="list-movie">
                        <a href="https://watcha.movie/show/grey-s-anatomy-2005-5" class="list-media">
                            <div class="list-media-attr">
                                <div class="quality">HD</div>
                                <div class="imdb">
                                    <span>
                                        8.26</span>
                                    <svg x="0px" y="0px" width="36px" height="36px"
                                        viewBox="0 0 36 36">
                                        <circle fill="none" stroke-width="1" cx="18" cy="18"
                                            r="16" stroke-dasharray="83 100" stroke-dashoffset="0"
                                            transform="rotate(-90 18 18)"></circle>
                                    </svg>
                                </div>
                            </div>
                            <div class="play-btn"><svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#play"></use>
                                </svg></div>
                            <div class="media media-cover"
                                style="background-image:url('https://image.tmdb.org/t/p/w780/daSFbrt8QCXV2hSwB0hqYjbj681.jpg');">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://watcha.movie/serie/grey-s-anatomy-5" class="list-title">
                                Grey's Anatomy</a>
                            <div class="list-year" style="display:inline">2005</div>
                            <div class="mpaa float-right" style="display:inline;margin-top: 0px;">serie</div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="list-movie">
                        <a href="https://watcha.movie/show/young-sheldon-2017-8" class="list-media">
                            <div class="list-media-attr">
                                <div class="quality">HD</div>
                                <div class="imdb">
                                    <span>
                                        8.05</span>
                                    <svg x="0px" y="0px" width="36px" height="36px"
                                        viewBox="0 0 36 36">
                                        <circle fill="none" stroke-width="1" cx="18" cy="18"
                                            r="16" stroke-dasharray="81 100" stroke-dashoffset="0"
                                            transform="rotate(-90 18 18)"></circle>
                                    </svg>
                                </div>
                            </div>
                            <div class="play-btn"><svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#play"></use>
                                </svg></div>
                            <div class="media media-cover"
                                style="background-image:url('https://image.tmdb.org/t/p/w780/5Gf83qYgLY8Qivn7jpv5nxxZPu6.jpg');">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://watcha.movie/serie/young-sheldon-8" class="list-title">
                                Young Sheldon</a>
                            <div class="list-year" style="display:inline">2017</div>
                            <div class="mpaa float-right" style="display:inline;margin-top: 0px;">serie</div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="list-movie">
                        <a href="https://watcha.movie/show/legacies-2018-11675" class="list-media">
                            <div class="list-media-attr">
                                <div class="quality">HD</div>
                                <div class="imdb">
                                    <span>
                                        8.521</span>
                                    <svg x="0px" y="0px" width="36px" height="36px"
                                        viewBox="0 0 36 36">
                                        <circle fill="none" stroke-width="1" cx="18" cy="18"
                                            r="16" stroke-dasharray="85 100" stroke-dashoffset="0"
                                            transform="rotate(-90 18 18)"></circle>
                                    </svg>
                                </div>
                            </div>
                            <div class="play-btn"><svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#play"></use>
                                </svg></div>
                            <div class="media media-cover"
                                style="background-image:url('https://image.tmdb.org/t/p/w780/mwJ3OxbliRwCvceSJvAzPiFu4WZ.jpg');">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://watcha.movie/serie/legacies-11675" class="list-title">
                                Legacies</a>
                            <div class="list-year" style="display:inline">2018</div>
                            <div class="mpaa float-right" style="display:inline;margin-top: 0px;">serie</div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="list-movie">
                        <a href="https://watcha.movie/show/yellowstone-2018-313" class="list-media">
                            <div class="list-media-attr">
                                <div class="quality">HD</div>
                                <div class="imdb">
                                    <span>
                                        8.091</span>
                                    <svg x="0px" y="0px" width="36px" height="36px"
                                        viewBox="0 0 36 36">
                                        <circle fill="none" stroke-width="1" cx="18" cy="18"
                                            r="16" stroke-dasharray="81 100" stroke-dashoffset="0"
                                            transform="rotate(-90 18 18)"></circle>
                                    </svg>
                                </div>
                            </div>
                            <div class="play-btn"><svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#play"></use>
                                </svg></div>
                            <div class="media media-cover"
                                style="background-image:url('https://image.tmdb.org/t/p/w780/iqWCUwLcjkVgtpsDLs8xx8kscg6.jpg');">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://watcha.movie/serie/yellowstone-313" class="list-title">
                                Yellowstone</a>
                            <div class="list-year" style="display:inline">2018</div>
                            <div class="mpaa float-right" style="display:inline;margin-top: 0px;">serie</div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="list-movie">
                        <a href="https://watcha.movie/show/the-walking-dead-2010-34" class="list-media">
                            <div class="list-media-attr">
                                <div class="quality">HD</div>
                                <div class="imdb">
                                    <span>
                                        8.111</span>
                                    <svg x="0px" y="0px" width="36px" height="36px"
                                        viewBox="0 0 36 36">
                                        <circle fill="none" stroke-width="1" cx="18" cy="18"
                                            r="16" stroke-dasharray="81 100" stroke-dashoffset="0"
                                            transform="rotate(-90 18 18)"></circle>
                                    </svg>
                                </div>
                            </div>
                            <div class="play-btn"><svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#play"></use>
                                </svg></div>
                            <div class="media media-cover"
                                style="background-image:url('https://image.tmdb.org/t/p/w780/xf9wuDcqlUPWABZNeDKPbZUjWx0.jpg');">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://watcha.movie/serie/the-walking-dead-34" class="list-title">
                                The Walking Dead</a>
                            <div class="list-year" style="display:inline">2010</div>
                            <div class="mpaa float-right" style="display:inline;margin-top: 0px;">serie</div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="list-movie">
                        <a href="https://watcha.movie/show/the-big-bang-theory-2007-159" class="list-media">
                            <div class="list-media-attr">
                                <div class="quality">HD</div>
                                <div class="imdb">
                                    <span>
                                        7.841</span>
                                    <svg x="0px" y="0px" width="36px" height="36px"
                                        viewBox="0 0 36 36">
                                        <circle fill="none" stroke-width="1" cx="18" cy="18"
                                            r="16" stroke-dasharray="78 100" stroke-dashoffset="0"
                                            transform="rotate(-90 18 18)"></circle>
                                    </svg>
                                </div>
                            </div>
                            <div class="play-btn"><svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#play"></use>
                                </svg></div>
                            <div class="media media-cover"
                                style="background-image:url('https://image.tmdb.org/t/p/w780/ooBGRQBdbGzBxAVfExiO8r7kloA.jpg');">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://watcha.movie/serie/the-big-bang-theory-159" class="list-title">
                                The Big Bang Theory</a>
                            <div class="list-year" style="display:inline">2007</div>
                            <div class="mpaa float-right" style="display:inline;margin-top: 0px;">serie</div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="list-movie">
                        <a href="https://watcha.movie/show/game-of-thrones-2011-470" class="list-media">
                            <div class="list-media-attr">
                                <div class="quality">HD</div>
                                <div class="imdb">
                                    <span>
                                        8.426</span>
                                    <svg x="0px" y="0px" width="36px" height="36px"
                                        viewBox="0 0 36 36">
                                        <circle fill="none" stroke-width="1" cx="18" cy="18"
                                            r="16" stroke-dasharray="84 100" stroke-dashoffset="0"
                                            transform="rotate(-90 18 18)"></circle>
                                    </svg>
                                </div>
                            </div>
                            <div class="play-btn"><svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#play"></use>
                                </svg></div>
                            <div class="media media-cover"
                                style="background-image:url('https://image.tmdb.org/t/p/w780/u3bZgnGQ9T01sWNhyveQz0wH0Hl.jpg');">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://watcha.movie/serie/game-of-thrones-470" class="list-title">
                                Game of Thrones</a>
                            <div class="list-year" style="display:inline">2011</div>
                            <div class="mpaa float-right" style="display:inline;margin-top: 0px;">serie</div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="list-movie">
                        <a href="https://watcha.movie/show/wednesday-2022-8169" class="list-media">
                            <div class="list-media-attr">
                                <div class="quality">HD</div>
                                <div class="imdb">
                                    <span>
                                        8.801</span>
                                    <svg x="0px" y="0px" width="36px" height="36px"
                                        viewBox="0 0 36 36">
                                        <circle fill="none" stroke-width="1" cx="18" cy="18"
                                            r="16" stroke-dasharray="88 100" stroke-dashoffset="0"
                                            transform="rotate(-90 18 18)"></circle>
                                    </svg>
                                </div>
                            </div>
                            <div class="play-btn"><svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#play"></use>
                                </svg></div>
                            <div class="media media-cover"
                                style="background-image:url('https://image.tmdb.org/t/p/w780/jeGtaMwGxPmQN5xM4ClnwPQcNQz.jpg');">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://watcha.movie/serie/wednesday-8169" class="list-title">
                                Wednesday</a>
                            <div class="list-year" style="display:inline">2022</div>
                            <div class="mpaa float-right" style="display:inline;margin-top: 0px;">serie</div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="list-movie">
                        <a href="https://watcha.movie/show/fear-the-walking-dead-2015-509" class="list-media">
                            <div class="list-media-attr">
                                <div class="quality">HD</div>
                                <div class="imdb">
                                    <span>
                                        7.689</span>
                                    <svg x="0px" y="0px" width="36px" height="36px"
                                        viewBox="0 0 36 36">
                                        <circle fill="none" stroke-width="1" cx="18" cy="18"
                                            r="16" stroke-dasharray="77 100" stroke-dashoffset="0"
                                            transform="rotate(-90 18 18)"></circle>
                                    </svg>
                                </div>
                            </div>
                            <div class="play-btn"><svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#play"></use>
                                </svg></div>
                            <div class="media media-cover"
                                style="background-image:url('https://image.tmdb.org/t/p/w780/zyshFjmlDXSzfns2Qk81cfIFfPP.jpg');">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://watcha.movie/serie/fear-the-walking-dead-509" class="list-title">
                                Fear the Walking Dead</a>
                            <div class="list-year" style="display:inline">2015</div>
                            <div class="mpaa float-right" style="display:inline;margin-top: 0px;">serie</div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="list-movie">
                        <a href="https://watcha.movie/show/the-resident-2018-6757" class="list-media">
                            <div class="list-media-attr">
                                <div class="quality">HD</div>
                                <div class="imdb">
                                    <span>
                                        8.519</span>
                                    <svg x="0px" y="0px" width="36px" height="36px"
                                        viewBox="0 0 36 36">
                                        <circle fill="none" stroke-width="1" cx="18" cy="18"
                                            r="16" stroke-dasharray="85 100" stroke-dashoffset="0"
                                            transform="rotate(-90 18 18)"></circle>
                                    </svg>
                                </div>
                            </div>
                            <div class="play-btn"><svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#play"></use>
                                </svg></div>
                            <div class="media media-cover"
                                style="background-image:url('https://image.tmdb.org/t/p/w780/2IkYQJlT26yXef2iot7dhRtavSC.jpg');">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://watcha.movie/serie/the-resident-6757" class="list-title">
                                The Resident</a>
                            <div class="list-year" style="display:inline">2018</div>
                            <div class="mpaa float-right" style="display:inline;margin-top: 0px;">serie</div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="list-movie">
                        <a href="https://watcha.movie/show/his-dark-materials-2019-10771" class="list-media">
                            <div class="list-media-attr">
                                <div class="quality">HD</div>
                                <div class="imdb">
                                    <span>
                                        7.998</span>
                                    <svg x="0px" y="0px" width="36px" height="36px"
                                        viewBox="0 0 36 36">
                                        <circle fill="none" stroke-width="1" cx="18" cy="18"
                                            r="16" stroke-dasharray="80 100" stroke-dashoffset="0"
                                            transform="rotate(-90 18 18)"></circle>
                                    </svg>
                                </div>
                            </div>
                            <div class="play-btn"><svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#play"></use>
                                </svg></div>
                            <div class="media media-cover"
                                style="background-image:url('https://image.tmdb.org/t/p/w780/1ljcoM9hFNiXpcoevZQwwc7oCYT.jpg');">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://watcha.movie/serie/his-dark-materials-10771" class="list-title">
                                His Dark Materials</a>
                            <div class="list-year" style="display:inline">2019</div>
                            <div class="mpaa float-right" style="display:inline;margin-top: 0px;">serie</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-section">
            <div class="app-heading">
                <div class="text">
                    Newest Movies </div>
                <a href="https://demo.codelug.com/wovie/movies" class="all">All</a>
            </div>
            <div class="row row-cols-5 list-scrollable">
                <div class="col">
                    <div class="list-movie">
                        <a href="https://demo.codelug.com/wovie/movie/batman-begins-27" class="list-media">
                            <div class="list-media-attr">
                                <div class="quality">
                                    SD </div>
                                <div class="imdb">
                                    <span>
                                        7.7</span>
                                    <svg x="0px" y="0px" width="36px" height="36px"
                                        viewBox="0 0 36 36">
                                        <circle fill="none" stroke-width="1" cx="18" cy="18"
                                            r="16" stroke-dasharray="77 100" stroke-dashoffset="0"
                                            transform="rotate(-90 18 18)"></circle>
                                    </svg>
                                </div>
                            </div>
                            <div class="play-btn">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#play" />
                                </svg>
                            </div>
                            <div class="media media-cover"
                                data-src="https://demo.codelug.com/wovie/public/upload/cover/batman-begins.webp">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://demo.codelug.com/wovie/movie/batman-begins-27" class="list-titlesub">
                                Batman Begins </a>
                            <a href="https://demo.codelug.com/wovie/movie/batman-begins-27" class="list-title">
                                Batman Begins</a>
                            <a href="https://demo.codelug.com/wovie/movie/batman-begins-27" class="list-category">
                                Action</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="list-movie">
                        <a href="https://demo.codelug.com/wovie/movie/bird-box-25" class="list-media">
                            <div class="list-media-attr">
                                <div class="quality">
                                    HD </div>
                                <div class="imdb">
                                    <span>
                                        6.9</span>
                                    <svg x="0px" y="0px" width="36px" height="36px"
                                        viewBox="0 0 36 36">
                                        <circle fill="none" stroke-width="1" cx="18" cy="18"
                                            r="16" stroke-dasharray="69 100" stroke-dashoffset="0"
                                            transform="rotate(-90 18 18)"></circle>
                                    </svg>
                                </div>
                            </div>
                            <div class="play-btn">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#play" />
                                </svg>
                            </div>
                            <div class="media media-cover"
                                data-src="https://demo.codelug.com/wovie/public/upload/cover/bird-box_1.webp">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://demo.codelug.com/wovie/movie/bird-box-25" class="list-titlesub">
                                Bird Box </a>
                            <a href="https://demo.codelug.com/wovie/movie/bird-box-25" class="list-title">
                                Bird Box</a>
                            <a href="https://demo.codelug.com/wovie/movie/bird-box-25" class="list-category">
                                Drama</a>
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
                                <div class="imdb">
                                    <span>
                                        6.9</span>
                                    <svg x="0px" y="0px" width="36px" height="36px"
                                        viewBox="0 0 36 36">
                                        <circle fill="none" stroke-width="1" cx="18" cy="18"
                                            r="16" stroke-dasharray="69 100" stroke-dashoffset="0"
                                            transform="rotate(-90 18 18)"></circle>
                                    </svg>
                                </div>
                            </div>
                            <div class="play-btn">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#play" />
                                </svg>
                            </div>
                            <div class="media media-cover"
                                data-src="https://demo.codelug.com/wovie/public/upload/cover/captain-america-the-first-avenger.webp">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://demo.codelug.com/wovie/movie/captain-americathe-first-avenger-10"
                                class="list-titlesub">
                                Captain America:The First Avenger </a>
                            <a href="https://demo.codelug.com/wovie/movie/captain-americathe-first-avenger-10"
                                class="list-title">
                                Captain America:The First Avenger</a>
                            <a href="https://demo.codelug.com/wovie/movie/captain-americathe-first-avenger-10"
                                class="list-category">
                                Action</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="list-movie">
                        <a href="https://demo.codelug.com/wovie/movie/shutter-island-9" class="list-media">
                            <div class="list-media-attr">
                                <div class="quality">
                                    Ultra HD </div>
                                <div class="imdb">
                                    <span>
                                        8.2</span>
                                    <svg x="0px" y="0px" width="36px" height="36px"
                                        viewBox="0 0 36 36">
                                        <circle fill="none" stroke-width="1" cx="18" cy="18"
                                            r="16" stroke-dasharray="82 100" stroke-dashoffset="0"
                                            transform="rotate(-90 18 18)"></circle>
                                    </svg>
                                </div>
                            </div>
                            <div class="play-btn">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#play" />
                                </svg>
                            </div>
                            <div class="media media-cover"
                                data-src="https://demo.codelug.com/wovie/public/upload/cover/shutter-island.webp">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://demo.codelug.com/wovie/movie/shutter-island-9" class="list-titlesub">
                                Shutter Island </a>
                            <a href="https://demo.codelug.com/wovie/movie/shutter-island-9" class="list-title">
                                Shutter Island</a>
                            <a href="https://demo.codelug.com/wovie/movie/shutter-island-9" class="list-category">
                                Drama</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="list-movie">
                        <a href="https://demo.codelug.com/wovie/movie/avengers-age-of-ultron-8" class="list-media">
                            <div class="list-media-attr">
                                <div class="quality">
                                    Ultra HD </div>
                                <div class="imdb">
                                    <span>
                                        7.3</span>
                                    <svg x="0px" y="0px" width="36px" height="36px"
                                        viewBox="0 0 36 36">
                                        <circle fill="none" stroke-width="1" cx="18" cy="18"
                                            r="16" stroke-dasharray="73 100" stroke-dashoffset="0"
                                            transform="rotate(-90 18 18)"></circle>
                                    </svg>
                                </div>
                            </div>
                            <div class="play-btn">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#play" />
                                </svg>
                            </div>
                            <div class="media media-cover"
                                data-src="https://demo.codelug.com/wovie/public/upload/cover/avengers-age-of-ultron.webp">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://demo.codelug.com/wovie/movie/avengers-age-of-ultron-8" class="list-titlesub">
                                Avengers: Age of Ultron </a>
                            <a href="https://demo.codelug.com/wovie/movie/avengers-age-of-ultron-8" class="list-title">
                                Avengers: Age of Ultron</a>
                            <a href="https://demo.codelug.com/wovie/movie/avengers-age-of-ultron-8" class="list-category">
                                Action</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="list-movie">
                        <a href="https://demo.codelug.com/wovie/movie/mad-max-fury-road-7" class="list-media">
                            <div class="list-media-attr">
                                <div class="quality">
                                    HD </div>
                                <div class="imdb">
                                    <span>
                                        19404</span>
                                    <svg x="0px" y="0px" width="36px" height="36px"
                                        viewBox="0 0 36 36">
                                        <circle fill="none" stroke-width="1" cx="18" cy="18"
                                            r="16" stroke-dasharray="194040 100" stroke-dashoffset="0"
                                            transform="rotate(-90 18 18)"></circle>
                                    </svg>
                                </div>
                            </div>
                            <div class="play-btn">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#play" />
                                </svg>
                            </div>
                            <div class="media media-cover"
                                data-src="https://demo.codelug.com/wovie/public/upload/cover/mad-max-fury-road.webp">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://demo.codelug.com/wovie/movie/mad-max-fury-road-7" class="list-titlesub">
                                Mad Max: Fury Road </a>
                            <a href="https://demo.codelug.com/wovie/movie/mad-max-fury-road-7" class="list-title">
                                Mad Max: Fury Road</a>
                            <a href="https://demo.codelug.com/wovie/movie/mad-max-fury-road-7" class="list-category">
                                Action</a>
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
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#play" />
                                </svg>
                            </div>
                            <div class="media media-cover"
                                data-src="https://demo.codelug.com/wovie/public/upload/cover/django-unchained.webp">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://demo.codelug.com/wovie/movie/django-unchained-6" class="list-titlesub">
                                Django Unchained </a>
                            <a href="https://demo.codelug.com/wovie/movie/django-unchained-6" class="list-title">
                                Django Unchained</a>
                            <a href="https://demo.codelug.com/wovie/movie/django-unchained-6" class="list-category">
                                Drama</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="list-movie">
                        <a href="https://demo.codelug.com/wovie/movie/the-shawshank-redemption-5" class="list-media">
                            <div class="list-media-attr">
                                <div class="quality">
                                    HD </div>
                                <div class="imdb">
                                    <span>
                                        8.7</span>
                                    <svg x="0px" y="0px" width="36px" height="36px"
                                        viewBox="0 0 36 36">
                                        <circle fill="none" stroke-width="1" cx="18" cy="18"
                                            r="16" stroke-dasharray="87 100" stroke-dashoffset="0"
                                            transform="rotate(-90 18 18)"></circle>
                                    </svg>
                                </div>
                            </div>
                            <div class="play-btn">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#play" />
                                </svg>
                            </div>
                            <div class="media media-cover"
                                data-src="https://demo.codelug.com/wovie/public/upload/cover/the-shawshank-redemption.webp">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://demo.codelug.com/wovie/movie/the-shawshank-redemption-5"
                                class="list-titlesub">
                                The Shawshank Redemption </a>
                            <a href="https://demo.codelug.com/wovie/movie/the-shawshank-redemption-5" class="list-title">
                                The Shawshank Redemption</a>
                            <a href="https://demo.codelug.com/wovie/movie/the-shawshank-redemption-5"
                                class="list-category">
                                Drama</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="list-movie">
                        <a href="https://demo.codelug.com/wovie/movie/iron-man-4" class="list-media">
                            <div class="list-media-attr">
                                <div class="quality">
                                    HD </div>
                                <div class="imdb">
                                    <span>
                                        7.6</span>
                                    <svg x="0px" y="0px" width="36px" height="36px"
                                        viewBox="0 0 36 36">
                                        <circle fill="none" stroke-width="1" cx="18" cy="18"
                                            r="16" stroke-dasharray="76 100" stroke-dashoffset="0"
                                            transform="rotate(-90 18 18)"></circle>
                                    </svg>
                                </div>
                            </div>
                            <div class="play-btn">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#play" />
                                </svg>
                            </div>
                            <div class="media media-cover"
                                data-src="https://demo.codelug.com/wovie/public/upload/cover/iron-man.webp">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://demo.codelug.com/wovie/movie/iron-man-4" class="list-titlesub">
                                Iron Man </a>
                            <a href="https://demo.codelug.com/wovie/movie/iron-man-4" class="list-title">
                                Iron Man</a>
                            <a href="https://demo.codelug.com/wovie/movie/iron-man-4" class="list-category">
                                Action</a>
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
                                <div class="imdb">
                                    <span>
                                        7.9</span>
                                    <svg x="0px" y="0px" width="36px" height="36px"
                                        viewBox="0 0 36 36">
                                        <circle fill="none" stroke-width="1" cx="18" cy="18"
                                            r="16" stroke-dasharray="79 100" stroke-dashoffset="0"
                                            transform="rotate(-90 18 18)"></circle>
                                    </svg>
                                </div>
                            </div>
                            <div class="play-btn">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#play" />
                                </svg>
                            </div>
                            <div class="media media-cover"
                                data-src="https://demo.codelug.com/wovie/public/upload/cover/harry-potter-and-the-philosophers-stone.webp">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://demo.codelug.com/wovie/movie/harry-potter-and-the-philosophers-stone-3"
                                class="list-titlesub">
                                Harry Potter and the Philosopher's Stone </a>
                            <a href="https://demo.codelug.com/wovie/movie/harry-potter-and-the-philosophers-stone-3"
                                class="list-title">
                                Harry Potter and the Philosopher's Stone</a>
                            <a href="https://demo.codelug.com/wovie/movie/harry-potter-and-the-philosophers-stone-3"
                                class="list-category">
                                Adventure</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if ($topCollections->count())
            <div class="app-section">
                <div class="app-heading">
                    <div class="text"> Collections </div>
                    <a href="{{ route('collections') }}" class="all">All</a>
                </div>
                <div class="row row-wrap row-cols-lg-3 row-cols-md-2 list-scrollable list-scrollablev2 list-grouped">
                    @foreach ($topCollections as $c)
                        <div class="col">
                            <div class="list-collection" style="background-color: ;color: ">
                                <div class="list-caption">
                                    <a href="{{ route('genre.collection.show', $c) }}" class="list-title">
                                        {{ $c->name }}
                                    </a>
                                    <a href="{{ route('genre.collection.show', $c) }}" class="list-desc">
                                        {{ $c->movies_count }} Movies
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
        <div class="app-section">
            <div class="app-heading">
                <div class="text">
                    أحدث المسلسلات </div>
                <a href="https://demo.codelug.com/wovie/series" class="all">
                    All</a>
            </div>
            <div class="row row-cols-5 list-scrollable">
                <div class="col">
                    <div class="list-movie">
                        <a href="https://demo.codelug.com/wovie/serie/chilling-adventures-of-sabrina-22"
                            class="list-media">
                            <div class="list-media-attr">
                                <div class="quality">
                                    HD </div>
                                <div class="imdb">
                                    <span>
                                        8.4</span>
                                    <svg x="0px" y="0px" width="36px" height="36px"
                                        viewBox="0 0 36 36">
                                        <circle fill="none" stroke-width="1" cx="18" cy="18"
                                            r="16" stroke-dasharray="84 100" stroke-dashoffset="0"
                                            transform="rotate(-90 18 18)"></circle>
                                    </svg>
                                </div>
                            </div>
                            <div class="play-btn">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#play" />
                                </svg>
                            </div>
                            <div class="media media-cover"
                                data-src="https://demo.codelug.com/wovie/public/upload/cover/chilling-adventures-of-sabrina.webp">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://demo.codelug.com/wovie/serie/chilling-adventures-of-sabrina-22"
                                class="list-titlesub">
                                Chilling Adventures of Sabrina </a>
                            <a href="https://demo.codelug.com/wovie/serie/chilling-adventures-of-sabrina-22"
                                class="list-title">
                                Chilling Adventures of Sabrina</a>
                            <a href="https://demo.codelug.com/wovie/serie/chilling-adventures-of-sabrina-22"
                                class="list-category">
                                Mystery</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="list-movie">
                        <a href="https://demo.codelug.com/wovie/serie/the-act-21" class="list-media">
                            <div class="list-media-attr">
                                <div class="quality">
                                    HD </div>
                                <div class="imdb">
                                    <span>
                                        7.5</span>
                                    <svg x="0px" y="0px" width="36px" height="36px"
                                        viewBox="0 0 36 36">
                                        <circle fill="none" stroke-width="1" cx="18" cy="18"
                                            r="16" stroke-dasharray="75 100" stroke-dashoffset="0"
                                            transform="rotate(-90 18 18)"></circle>
                                    </svg>
                                </div>
                            </div>
                            <div class="play-btn">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#play" />
                                </svg>
                            </div>
                            <div class="media media-cover"
                                data-src="https://demo.codelug.com/wovie/public/upload/cover/the-act.webp">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://demo.codelug.com/wovie/serie/the-act-21" class="list-titlesub">
                                The Act </a>
                            <a href="https://demo.codelug.com/wovie/serie/the-act-21" class="list-title">
                                The Act</a>
                            <a href="https://demo.codelug.com/wovie/serie/the-act-21" class="list-category">
                                Drama</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="list-movie">
                        <a href="https://demo.codelug.com/wovie/serie/sherlock-20" class="list-media">
                            <div class="list-media-attr">
                                <div class="quality">
                                    Ultra HD </div>
                                <div class="imdb">
                                    <span>
                                        8.4</span>
                                    <svg x="0px" y="0px" width="36px" height="36px"
                                        viewBox="0 0 36 36">
                                        <circle fill="none" stroke-width="1" cx="18" cy="18"
                                            r="16" stroke-dasharray="84 100" stroke-dashoffset="0"
                                            transform="rotate(-90 18 18)"></circle>
                                    </svg>
                                </div>
                            </div>
                            <div class="play-btn">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#play" />
                                </svg>
                            </div>
                            <div class="media media-cover"
                                data-src="https://demo.codelug.com/wovie/public/upload/cover/sherlock.webp">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://demo.codelug.com/wovie/serie/sherlock-20" class="list-titlesub">
                                Sherlock </a>
                            <a href="https://demo.codelug.com/wovie/serie/sherlock-20" class="list-title">
                                Sherlock</a>
                            <a href="https://demo.codelug.com/wovie/serie/sherlock-20" class="list-category">
                                Crime</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="list-movie">
                        <a href="https://demo.codelug.com/wovie/serie/prison-break-19" class="list-media">
                            <div class="list-media-attr">
                                <div class="quality">
                                    HD </div>
                                <div class="imdb">
                                    <span>
                                        8</span>
                                    <svg x="0px" y="0px" width="36px" height="36px"
                                        viewBox="0 0 36 36">
                                        <circle fill="none" stroke-width="1" cx="18" cy="18"
                                            r="16" stroke-dasharray="80 100" stroke-dashoffset="0"
                                            transform="rotate(-90 18 18)"></circle>
                                    </svg>
                                </div>
                            </div>
                            <div class="play-btn">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#play" />
                                </svg>
                            </div>
                            <div class="media media-cover"
                                data-src="https://demo.codelug.com/wovie/public/upload/cover/prison-break.webp">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://demo.codelug.com/wovie/serie/prison-break-19" class="list-titlesub">
                                Prison Break </a>
                            <a href="https://demo.codelug.com/wovie/serie/prison-break-19" class="list-title">
                                Prison Break</a>
                            <a href="https://demo.codelug.com/wovie/serie/prison-break-19" class="list-category">
                                Crime</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="list-movie">
                        <a href="https://demo.codelug.com/wovie/serie/fear-the-walking-dead-18" class="list-media">
                            <div class="list-media-attr">
                                <div class="quality">
                                    HD </div>
                                <div class="imdb">
                                    <span>
                                        7.6</span>
                                    <svg x="0px" y="0px" width="36px" height="36px"
                                        viewBox="0 0 36 36">
                                        <circle fill="none" stroke-width="1" cx="18" cy="18"
                                            r="16" stroke-dasharray="76 100" stroke-dashoffset="0"
                                            transform="rotate(-90 18 18)"></circle>
                                    </svg>
                                </div>
                            </div>
                            <div class="play-btn">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#play" />
                                </svg>
                            </div>
                            <div class="media media-cover"
                                data-src="https://demo.codelug.com/wovie/public/upload/cover/fear-the-walking-dead.webp">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://demo.codelug.com/wovie/serie/fear-the-walking-dead-18"
                                class="list-titlesub">
                                Fear the Walking Dead </a>
                            <a href="https://demo.codelug.com/wovie/serie/fear-the-walking-dead-18" class="list-title">
                                Fear the Walking Dead</a>
                            <a href="https://demo.codelug.com/wovie/serie/fear-the-walking-dead-18"
                                class="list-category">
                                Drama</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="list-movie">
                        <a href="https://demo.codelug.com/wovie/serie/american-horror-story-17" class="list-media">
                            <div class="list-media-attr">
                                <div class="quality">
                                    Ultra HD </div>
                                <div class="imdb">
                                    <span>
                                        8</span>
                                    <svg x="0px" y="0px" width="36px" height="36px"
                                        viewBox="0 0 36 36">
                                        <circle fill="none" stroke-width="1" cx="18" cy="18"
                                            r="16" stroke-dasharray="80 100" stroke-dashoffset="0"
                                            transform="rotate(-90 18 18)"></circle>
                                    </svg>
                                </div>
                            </div>
                            <div class="play-btn">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#play" />
                                </svg>
                            </div>
                            <div class="media media-cover"
                                data-src="https://demo.codelug.com/wovie/public/upload/cover/american-horror-story.webp">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://demo.codelug.com/wovie/serie/american-horror-story-17"
                                class="list-titlesub">
                                American Horror Story </a>
                            <a href="https://demo.codelug.com/wovie/serie/american-horror-story-17" class="list-title">
                                American Horror Story</a>
                            <a href="https://demo.codelug.com/wovie/serie/american-horror-story-17"
                                class="list-category">
                                Drama</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="list-movie">
                        <a href="https://demo.codelug.com/wovie/serie/arrow-16" class="list-media">
                            <div class="list-media-attr">
                                <div class="quality">
                                    HD </div>
                                <div class="imdb">
                                    <span>
                                        6.6</span>
                                    <svg x="0px" y="0px" width="36px" height="36px"
                                        viewBox="0 0 36 36">
                                        <circle fill="none" stroke-width="1" cx="18" cy="18"
                                            r="16" stroke-dasharray="66 100" stroke-dashoffset="0"
                                            transform="rotate(-90 18 18)"></circle>
                                    </svg>
                                </div>
                            </div>
                            <div class="play-btn">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#play" />
                                </svg>
                            </div>
                            <div class="media media-cover"
                                data-src="https://demo.codelug.com/wovie/public/upload/cover/arrow.webp">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://demo.codelug.com/wovie/serie/arrow-16" class="list-titlesub">
                                Arrow </a>
                            <a href="https://demo.codelug.com/wovie/serie/arrow-16" class="list-title">
                                Arrow</a>
                            <a href="https://demo.codelug.com/wovie/serie/arrow-16" class="list-category">
                                Crime</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="list-movie">
                        <a href="https://demo.codelug.com/wovie/serie/greys-anatomy-15" class="list-media">
                            <div class="list-media-attr">
                                <div class="quality">
                                    HD </div>
                                <div class="imdb">
                                    <span>
                                        8.2</span>
                                    <svg x="0px" y="0px" width="36px" height="36px"
                                        viewBox="0 0 36 36">
                                        <circle fill="none" stroke-width="1" cx="18" cy="18"
                                            r="16" stroke-dasharray="82 100" stroke-dashoffset="0"
                                            transform="rotate(-90 18 18)"></circle>
                                    </svg>
                                </div>
                            </div>
                            <div class="play-btn">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#play" />
                                </svg>
                            </div>
                            <div class="media media-cover"
                                data-src="https://demo.codelug.com/wovie/public/upload/cover/greys-anatomy.webp">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://demo.codelug.com/wovie/serie/greys-anatomy-15" class="list-titlesub">
                                Grey's Anatomy </a>
                            <a href="https://demo.codelug.com/wovie/serie/greys-anatomy-15" class="list-title">
                                Grey's Anatomy</a>
                            <a href="https://demo.codelug.com/wovie/serie/greys-anatomy-15" class="list-category">
                                Drama</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="list-movie">
                        <a href="https://demo.codelug.com/wovie/serie/the-mandalorian-14" class="list-media">
                            <div class="list-media-attr">
                                <div class="quality">
                                    Ultra HD </div>
                                <div class="imdb">
                                    <span>
                                        8.5</span>
                                    <svg x="0px" y="0px" width="36px" height="36px"
                                        viewBox="0 0 36 36">
                                        <circle fill="none" stroke-width="1" cx="18" cy="18"
                                            r="16" stroke-dasharray="85 100" stroke-dashoffset="0"
                                            transform="rotate(-90 18 18)"></circle>
                                    </svg>
                                </div>
                            </div>
                            <div class="play-btn">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#play" />
                                </svg>
                            </div>
                            <div class="media media-cover"
                                data-src="https://demo.codelug.com/wovie/public/upload/cover/the-mandalorian.webp">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://demo.codelug.com/wovie/serie/the-mandalorian-14" class="list-titlesub">
                                The Mandalorian </a>
                            <a href="https://demo.codelug.com/wovie/serie/the-mandalorian-14" class="list-title">
                                The Mandalorian</a>
                            <a href="https://demo.codelug.com/wovie/serie/the-mandalorian-14" class="list-category">
                                Crime</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="list-movie">
                        <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13" class="list-media">
                            <div class="list-media-attr">
                                <div class="quality">
                                    Ultra HD </div>
                                <div class="imdb">
                                    <span>
                                        8.7</span>
                                    <svg x="0px" y="0px" width="36px" height="36px"
                                        viewBox="0 0 36 36">
                                        <circle fill="none" stroke-width="1" cx="18" cy="18"
                                            r="16" stroke-dasharray="87 100" stroke-dashoffset="0"
                                            transform="rotate(-90 18 18)"></circle>
                                    </svg>
                                </div>
                            </div>
                            <div class="play-btn">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#play" />
                                </svg>
                            </div>
                            <div class="media media-cover"
                                data-src="https://demo.codelug.com/wovie/public/upload/cover/breaking-bad.webp">
                            </div>
                        </a>
                        <div class="list-caption">
                            <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13" class="list-titlesub">
                                Breaking Bad </a>
                            <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13" class="list-title">
                                Breaking Bad</a>
                            <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13" class="list-category">
                                Drama</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if ($topGenres->count())
            <div class="app-section">
                <div class="row row-cols-5 list-scrollable">
                    @foreach ($topGenres as $g)
                        <div class="col">
                            <a href="{{ route('genre.show', $g) }}" class="list-category-box"
                                style="background-color: {{ $g->color }}" title="{{ $g->name }}">
                                {{ $g->name }}
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
        <div class="app-section">
            <div class="app-heading">
                <div class="text">
                    Newest Episodes </div>
            </div>
            <div class="row row-cols-1 row-cols-md-4 list-scrollable">
                <div class="col">
                    <a href="https://demo.codelug.com/wovie/serie/chilling-adventures-of-sabrina-22-2-season-16-episode"
                        class="list-movie list-episode">
                        <div class="list-media">
                            <div class="media media-episode"
                                data-src="https://demo.codelug.com/wovie/public/upload/episode/chilling-adventures-of-sabrina-3-16.webp">
                            </div>
                        </div>
                        <div class="list-caption">
                            <div class="list-title">Chilling Adventures of Sabrina</div>
                            <div class="list-category">2. Season 16. Episode</div>
                        </div>
                        <div class="list-date">30 Jan</div>
                    </a>
                </div>
                <div class="col">
                    <a href="https://demo.codelug.com/wovie/serie/chilling-adventures-of-sabrina-22-2-season-15-episode"
                        class="list-movie list-episode">
                        <div class="list-media">
                            <div class="media media-episode"
                                data-src="https://demo.codelug.com/wovie/public/upload/episode/chilling-adventures-of-sabrina-3-15.webp">
                            </div>
                        </div>
                        <div class="list-caption">
                            <div class="list-title">Chilling Adventures of Sabrina</div>
                            <div class="list-category">2. Season 15. Episode</div>
                        </div>
                        <div class="list-date">30 Jan</div>
                    </a>
                </div>
                <div class="col">
                    <a href="https://demo.codelug.com/wovie/serie/chilling-adventures-of-sabrina-22-2-season-14-episode"
                        class="list-movie list-episode">
                        <div class="list-media">
                            <div class="media media-episode"
                                data-src="https://demo.codelug.com/wovie/public/upload/episode/chilling-adventures-of-sabrina-3-14.webp">
                            </div>
                        </div>
                        <div class="list-caption">
                            <div class="list-title">Chilling Adventures of Sabrina</div>
                            <div class="list-category">2. Season 14. Episode</div>
                        </div>
                        <div class="list-date">30 Jan</div>
                    </a>
                </div>
                <div class="col">
                    <a href="https://demo.codelug.com/wovie/serie/chilling-adventures-of-sabrina-22-2-season-13-episode"
                        class="list-movie list-episode">
                        <div class="list-media">
                            <div class="media media-episode"
                                data-src="https://demo.codelug.com/wovie/public/upload/episode/chilling-adventures-of-sabrina-3-13.webp">
                            </div>
                        </div>
                        <div class="list-caption">
                            <div class="list-title">Chilling Adventures of Sabrina</div>
                            <div class="list-category">2. Season 13. Episode</div>
                        </div>
                        <div class="list-date">30 Jan</div>
                    </a>
                </div>
                <div class="col">
                    <a href="https://demo.codelug.com/wovie/serie/chilling-adventures-of-sabrina-22-2-season-12-episode"
                        class="list-movie list-episode">
                        <div class="list-media">
                            <div class="media media-episode"
                                data-src="https://demo.codelug.com/wovie/public/upload/episode/chilling-adventures-of-sabrina-3-12.webp">
                            </div>
                        </div>
                        <div class="list-caption">
                            <div class="list-title">Chilling Adventures of Sabrina</div>
                            <div class="list-category">2. Season 12. Episode</div>
                        </div>
                        <div class="list-date">30 Jan</div>
                    </a>
                </div>
                <div class="col">
                    <a href="https://demo.codelug.com/wovie/serie/chilling-adventures-of-sabrina-22-2-season-11-episode"
                        class="list-movie list-episode">
                        <div class="list-media">
                            <div class="media media-episode"
                                data-src="https://demo.codelug.com/wovie/public/upload/episode/chilling-adventures-of-sabrina-3-11.webp">
                            </div>
                        </div>
                        <div class="list-caption">
                            <div class="list-title">Chilling Adventures of Sabrina</div>
                            <div class="list-category">2. Season 11. Episode</div>
                        </div>
                        <div class="list-date">30 Jan</div>
                    </a>
                </div>
                <div class="col">
                    <a href="https://demo.codelug.com/wovie/serie/chilling-adventures-of-sabrina-22-2-season-10-episode"
                        class="list-movie list-episode">
                        <div class="list-media">
                            <div class="media media-episode"
                                data-src="https://demo.codelug.com/wovie/public/upload/episode/chilling-adventures-of-sabrina-3-10.webp">
                            </div>
                        </div>
                        <div class="list-caption">
                            <div class="list-title">Chilling Adventures of Sabrina</div>
                            <div class="list-category">2. Season 10. Episode</div>
                        </div>
                        <div class="list-date">30 Jan</div>
                    </a>
                </div>
                <div class="col">
                    <a href="https://demo.codelug.com/wovie/serie/chilling-adventures-of-sabrina-22-2-season-9-episode"
                        class="list-movie list-episode">
                        <div class="list-media">
                            <div class="media media-episode"
                                data-src="https://demo.codelug.com/wovie/public/upload/episode/chilling-adventures-of-sabrina-3-9.webp">
                            </div>
                        </div>
                        <div class="list-caption">
                            <div class="list-title">Chilling Adventures of Sabrina</div>
                            <div class="list-category">2. Season 9. Episode</div>
                        </div>
                        <div class="list-date">30 Jan</div>
                    </a>
                </div>
                <div class="col">
                    <a href="https://demo.codelug.com/wovie/serie/chilling-adventures-of-sabrina-22-2-season-8-episode"
                        class="list-movie list-episode">
                        <div class="list-media">
                            <div class="media media-episode"
                                data-src="https://demo.codelug.com/wovie/public/upload/episode/chilling-adventures-of-sabrina-3-8.webp">
                            </div>
                        </div>
                        <div class="list-caption">
                            <div class="list-title">Chilling Adventures of Sabrina</div>
                            <div class="list-category">2. Season 8. Episode</div>
                        </div>
                        <div class="list-date">30 Jan</div>
                    </a>
                </div>
                <div class="col">
                    <a href="https://demo.codelug.com/wovie/serie/chilling-adventures-of-sabrina-22-2-season-7-episode"
                        class="list-movie list-episode">
                        <div class="list-media">
                            <div class="media media-episode"
                                data-src="https://demo.codelug.com/wovie/public/upload/episode/chilling-adventures-of-sabrina-3-7.webp">
                            </div>
                        </div>
                        <div class="list-caption">
                            <div class="list-title">Chilling Adventures of Sabrina</div>
                            <div class="list-category">2. Season 7. Episode</div>
                        </div>
                        <div class="list-date">30 Jan</div>
                    </a>
                </div>
                <div class="col">
                    <a href="https://demo.codelug.com/wovie/serie/chilling-adventures-of-sabrina-22-2-season-6-episode"
                        class="list-movie list-episode">
                        <div class="list-media">
                            <div class="media media-episode"
                                data-src="https://demo.codelug.com/wovie/public/upload/episode/chilling-adventures-of-sabrina-3-6.webp">
                            </div>
                        </div>
                        <div class="list-caption">
                            <div class="list-title">Chilling Adventures of Sabrina</div>
                            <div class="list-category">2. Season 6. Episode</div>
                        </div>
                        <div class="list-date">30 Jan</div>
                    </a>
                </div>
                <div class="col">
                    <a href="https://demo.codelug.com/wovie/serie/chilling-adventures-of-sabrina-22-2-season-5-episode"
                        class="list-movie list-episode">
                        <div class="list-media">
                            <div class="media media-episode"
                                data-src="https://demo.codelug.com/wovie/public/upload/episode/chilling-adventures-of-sabrina-3-5.webp">
                            </div>
                        </div>
                        <div class="list-caption">
                            <div class="list-title">Chilling Adventures of Sabrina</div>
                            <div class="list-category">2. Season 5. Episode</div>
                        </div>
                        <div class="list-date">30 Jan</div>
                    </a>
                </div>
                <div class="col">
                    <a href="https://demo.codelug.com/wovie/serie/chilling-adventures-of-sabrina-22-2-season-4-episode"
                        class="list-movie list-episode">
                        <div class="list-media">
                            <div class="media media-episode"
                                data-src="https://demo.codelug.com/wovie/public/upload/episode/chilling-adventures-of-sabrina-3-4.webp">
                            </div>
                        </div>
                        <div class="list-caption">
                            <div class="list-title">Chilling Adventures of Sabrina</div>
                            <div class="list-category">2. Season 4. Episode</div>
                        </div>
                        <div class="list-date">30 Jan</div>
                    </a>
                </div>
                <div class="col">
                    <a href="https://demo.codelug.com/wovie/serie/chilling-adventures-of-sabrina-22-2-season-3-episode"
                        class="list-movie list-episode">
                        <div class="list-media">
                            <div class="media media-episode"
                                data-src="https://demo.codelug.com/wovie/public/upload/episode/chilling-adventures-of-sabrina-3-3.webp">
                            </div>
                        </div>
                        <div class="list-caption">
                            <div class="list-title">Chilling Adventures of Sabrina</div>
                            <div class="list-category">2. Season 3. Episode</div>
                        </div>
                        <div class="list-date">30 Jan</div>
                    </a>
                </div>
                <div class="col">
                    <a href="https://demo.codelug.com/wovie/serie/chilling-adventures-of-sabrina-22-2-season-2-episode"
                        class="list-movie list-episode">
                        <div class="list-media">
                            <div class="media media-episode"
                                data-src="https://demo.codelug.com/wovie/public/upload/episode/chilling-adventures-of-sabrina-3-2.webp">
                            </div>
                        </div>
                        <div class="list-caption">
                            <div class="list-title">Chilling Adventures of Sabrina</div>
                            <div class="list-category">2. Season 2. Episode</div>
                        </div>
                        <div class="list-date">30 Jan</div>
                    </a>
                </div>
                <div class="col">
                    <a href="https://demo.codelug.com/wovie/serie/chilling-adventures-of-sabrina-22-2-season-1-episode"
                        class="list-movie list-episode">
                        <div class="list-media">
                            <div class="media media-episode"
                                data-src="https://demo.codelug.com/wovie/public/upload/episode/chilling-adventures-of-sabrina-3-1.webp">
                            </div>
                        </div>
                        <div class="list-caption">
                            <div class="list-title">Chilling Adventures of Sabrina</div>
                            <div class="list-category">2. Season 1. Episode</div>
                        </div>
                        <div class="list-date">30 Jan</div>
                    </a>
                </div>
            </div>
        </div>
        @if ($popularActors->count())
            <div class="app-section">
                <div class="app-heading">
                    <div class="text"> Popular Actors </div>
                    <a href="{{ route('persons') }}" class="all">All</a>
                </div>
                <div class="row row-cols-6 list-scrollable">
                    @foreach ($popularActors as $p)
                        <div class="col">
                            <div class="list-actor">
                                <a href="{{ route('person.show', $p) }}" class="list-media"
                                    title="{{ $p->name }}">
                                    <div class="media" style="background-image: url({{ $p->avatar }});">
                                    </div>
                                </a>
                                <div class="list-caption">
                                    <a href="{{ route('person.show', $p) }}" class="list-title"
                                        title="{{ $p->name }}">{{ $p->name }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
@endsection
@section('scripts')
@endsection
