@extends('layouts.app')

@section('main')
    <div class="flex-fill">
        {{ Breadcrumbs::render() }}
        <div class="d-flex">
            <div class="app-content">
                <div class="app-section">
                    <div class="mb-3">
                        <div class="text-24 text-white font-weight-bold">Categories</div>
                    </div>
                    <div class="row row-cols-md-5 row-cols-2">
                        @foreach ($genres as $genre)
                            <div class="col">
                                <a href="{{ route('genre.show', $genre) }}" class="list-category-box"
                                    style="background-color: {{ $genre->color }}" title="{{ $genre->name }}">
                                    {{ $genre->name }}
                                </a>
                            </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
