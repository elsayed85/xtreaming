<div class="col">
    <a href="{{ route('episode.show' , ['serie' => $ep->serie_id , 'number' => $ep->number]) }}"
        class="list-movie list-episode">
        <div class="list-media">
            <div class="media media-episode"
                data-src="{{ tmdb_image($ep->poster_path) }}">
            </div>
        </div>
        <div class="list-caption">
            <div class="list-title">{{ $ep->serie->title }}</div>
            <div class="list-category">2. Season {{ $ep->season_number }}. Episode {{ $ep->number }}</div>
        </div>
        <div class="list-date">{{ $ep->created_at }}</div>
    </a>
</div>
