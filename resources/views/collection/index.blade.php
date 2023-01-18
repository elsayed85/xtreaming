@extends('layouts.app')

@section('main')
    <div class="flex-fill">
        {{ Breadcrumbs::render() }}
        <div class="d-flex">
            <div class="app-content">
                <div class="app-section">
                    <div class="mb-3">
                        <div class="text-24 text-white font-weight-bold">Collections</div>
                    </div>

                    <div class="row row-cols-lg-3 row-cols-1 list-grouped">
                        @foreach ($collections as $c)
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
                    {{ $collections->render() }}
                </div>
            </div>
        </div>
    </div>
@endsection
