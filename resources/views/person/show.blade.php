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
                            @if ($p->movies_count)
                                <div class="profile-attr">
                                    <div class="attr">
                                        Acting ( {{ $p->movies_count }} ) Movie & ( {{ $p->series_count }} ) Serie
                                    </div>

                                    <div class="row row-cols-5 my-3">
                                        @foreach ($p->movies as $movie)
                                            @include('movie.includes.movie_item', ['movie' => $movie])
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                            @if ($p->series_count)
                                <div class="profile-attr">
                                    <div class="attr">
                                        Acting ( {{ $p->series_count }} ) Serie
                                    </div>

                                    <div class="row row-cols-5 my-3">
                                        @foreach ($p->series as $serie)
                                            @include('serie.includes.serie_item', ['serie' => $serie])
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
