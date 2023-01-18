@extends('layouts.app')

@section('main')
    <div class="flex-fill">
        {{ Breadcrumbs::render() }}
        <div class="d-flex">
            <div class="app-content">
                <div class="app-section">
                    <div class="mb-3">
                        <div class="text-24 text-white font-weight-bold">Actors</div>
                    </div>

                    <div class="row row-cols-md-5 row-cols-2">
                        @foreach ($persons as $p)
                            <div class="col">
                                <div class="list-actor">
                                    <a href="{{ route('person.show' , $p) }}" class="list-media"
                                        title="{{ $p->name }}">
                                        <div class="media"
                                            style="background-image: url({{ $p->avatar }});">
                                        </div>
                                    </a>
                                    <div class="list-caption">
                                        <a href="{{ route('person.show' , $p) }}" class="list-title"
                                            title="{{ $p->name }}">{{ $p->name }}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    {{ $persons->render() }}
                </div>
            </div>
        </div>
    </div>
@endsection
