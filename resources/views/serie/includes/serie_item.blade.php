<div class="col">
    <div class="list-movie">
        <a href="{{ route('serie.show' , $serie) }}" class="list-media">
            <div class="list-media-attr">
                <div class="imdb">
                    <span>{{ $serie->imdb_rating }}</span>
                    <svg x="0px" y="0px" width="36px" height="36px" viewBox="0 0 36 36">
                        <circle fill="none" stroke-width="1" cx="18" cy="18" r="16"
                            stroke-dasharray="{{ $serie->imdb_rating * 10 }} 100" stroke-dashoffset="0" transform="rotate(-90 18 18)"></circle>
                    </svg>
                </div>
            </div>
            <div class="play-btn">
                <svg class="icon">
                    <use xlink:href="{{ asset('images/sprite.svg') }}#play">
                    </use>
                </svg>
            </div>
            <div class="media media-cover"
                style="background-image: url({{ tmdb_image($serie->poster_path) }});">
            </div>
        </a>
        <div class="list-caption">
            <a href="{{ route('serie.show' , $serie) }}" class="list-titlesub">{{ $serie->original_title }}</a>
            <a href="{{ route('serie.show' , $serie) }}" class="list-title">{{ $serie->title }}</a>
        </div>
    </div>

</div>
