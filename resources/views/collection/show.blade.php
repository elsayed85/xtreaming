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
                @foreach ($c->movies as $movie)
                    @include('movie.includes.movie_item' , ['movie' => $movie])
                @endforeach
            </div>
        </div>
    </div>
@endsection
