@extends('layouts.app')

@section('main')
    <div class="app-content">
        {{ Breadcrumbs::render() }}
        <div class="filter-btn" data-toggle="modal" data-target="#filter">
            <svg class="icon">
                <use xlink:href="{{ asset('images/sprite.svg') }}#filter"></use>
            </svg>
        </div>
        <div class="d-flex">
            <div class="app-content">
                <div class="app-toolbar">
                    <div class="mb-3">
                        <div class="text-24 text-white font-weight-bold">
                            Discovery </div>
                    </div>
                    <form method="post" class="form">
                        <input type="hidden" name="_ACTION" value="filter">
                        <div class="filter-toolbar">
                            <div class="filter-item" id="category">
                                <label> Category</label>
                                <div class="filter-item-content dropdown-toggle" role="button" id="filter-category"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <input type="hidden" name="category" value="">
                                    <div class="filter-value">
                                        All </div>
                                    <div class="dropdown-btn"></div>
                                </div>
                                <div class="dropdown-menu dropdown-2x" aria-labelledby="filter-category">
                                    <li value="" class="selected">
                                        All </li>
                                    <li value="1">
                                        Action </li>
                                    <li value="2">
                                        Adventure </li>
                                    <li value="3">
                                        Animation </li>
                                    <li value="4">
                                        Comedy </li>
                                    <li value="5">
                                        Crime </li>
                                    <li value="6">
                                        Documentary </li>
                                    <li value="7">
                                        Drama </li>
                                    <li value="8">
                                        Family </li>
                                    <li value="9">
                                        Fantasy </li>
                                    <li value="10">
                                        History </li>
                                    <li value="11">
                                        Horror </li>
                                    <li value="12">
                                        Music </li>
                                    <li value="13">
                                        Mystery </li>
                                    <li value="14">
                                        Romance </li>
                                    <li value="15">
                                        Science Fiction </li>
                                    <li value="16">
                                        War </li>
                                    <li value="17">
                                        Western </li>
                                </div>
                            </div>
                            <div class="filter-item" id="imdb">
                                <label>
                                    Imdb</label>
                                <div class="filter-item-content dropdown-toggle" role="button" id="filter-imdb"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <input type="hidden" name="imdb" value="">
                                    <div class="filter-value">
                                        Imdb </div>
                                    <div class="dropdown-btn"></div>
                                </div>
                                <div class="dropdown-menu" aria-labelledby="filter-imdb">
                                    <li value="" class="selected">
                                        Imdb </li>
                                    <li value="4">
                                        4 and over </li>
                                    <li value="5">
                                        5 and over </li>
                                    <li value="6">
                                        6 and over </li>
                                    <li value="7">
                                        7 and over </li>
                                    <li value="8">
                                        8 and over </li>
                                    <li value="9">
                                        9 and over </li>
                                </div>
                            </div>
                            <div class="filter-item" id="quality">
                                <label>
                                    Quality</label>
                                <div class="filter-item-content dropdown-toggle" role="button" id="filter-quality"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <input type="hidden" name="quality" value="">
                                    <div class="filter-value">
                                        Quality </div>
                                    <div class="dropdown-btn"></div>
                                </div>
                                <div class="dropdown-menu" aria-labelledby="filter-quality">
                                    <li value="" class="selected">
                                        Quality </li>
                                    <li value="SD">
                                        SD </li>
                                    <li value="HD">
                                        HD </li>
                                    <li value="Ultra HD">
                                        Ultra HD </li>
                                </div>
                            </div>
                            <div class="filter-item" id="year">
                                <label>
                                    Released</label>
                                <div class="filter-item-content dropdown-toggle" role="button" id="filter-released"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <input type="hidden" name="released" value="">
                                    <div class="filter-value">
                                        All </div>
                                    <div class="dropdown-btn"></div>
                                </div>
                                <div class="dropdown-menu" aria-labelledby="filter-released">
                                    <li value="" class="selected">
                                        All </li>
                                    <li value="2010-2020">2010 -
                                        2023 </li>
                                    <li value="2000-2009">2000 - 2009</li>
                                    <li value="1990-1999">1990 - 1999</li>
                                    <li value="1980-1989">1980 - 1989</li>
                                </div>
                            </div>
                            <div class="filter-item" id="sorting">
                                <label>
                                    Sorting</label>
                                <div class="filter-item-content dropdown-toggle" role="button" id="filter-sorting"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <input type="hidden" name="sorting" value="newest">
                                    <div class="filter-value">
                                        Newest </div>
                                    <div class="dropdown-btn"></div>
                                </div>
                                <div class="dropdown-menu" aria-labelledby="filter-sorting">
                                    <li value="newest" class="selected">
                                        Newest </li>
                                    <li value="popular">
                                        Popular </li>
                                    <li value="released">
                                        Featured </li>
                                    <li value="released">
                                        Released </li>
                                    <li value="imdb">
                                        Imdb </li>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-theme btn-apply">
                                Apply</button>
                        </div>
                    </form>
                    <div class="app-filter aside aside-lg aside-sm app-filter-md" id="filter">
                        <div class="modal-dialog p-3">
                            <button class="modal-close d-md-none d-block" data-dismiss="modal">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg') }}#close">
                                    </use>
                                </svg>
                            </button>
                            <form method="post" class="pt-4">
                                <input type="hidden" name="_ACTION" value="filter">
                                <div class="form-group">
                                    <label class="custom-label">
                                        Type</label>
                                    <select name="category" class="custom-select">
                                        <option value="">
                                            All </option>
                                        <option value="movie">
                                            Movie </option>
                                        <option value="serie">
                                            Serie </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="custom-label">
                                        Category</label>
                                    <select name="category" class="custom-select">
                                        <option value="">
                                            Category </option>
                                        <option value="1">
                                            Action </option>
                                        <option value="2">
                                            Adventure </option>
                                        <option value="3">
                                            Animation </option>
                                        <option value="4">
                                            Comedy </option>
                                        <option value="5">
                                            Crime </option>
                                        <option value="6">
                                            Documentary </option>
                                        <option value="7">
                                            Drama </option>
                                        <option value="8">
                                            Family </option>
                                        <option value="9">
                                            Fantasy </option>
                                        <option value="10">
                                            History </option>
                                        <option value="11">
                                            Horror </option>
                                        <option value="12">
                                            Music </option>
                                        <option value="13">
                                            Mystery </option>
                                        <option value="14">
                                            Romance </option>
                                        <option value="15">
                                            Science Fiction </option>
                                        <option value="16">
                                            War </option>
                                        <option value="17">
                                            Western </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="custom-label">
                                        Imdb</label>
                                    <select name="imdb" class="custom-select change-ajax">
                                        <option value="">
                                            Imdb </option>
                                        <option value="4">
                                            4 and over </option>
                                        <option value="5">
                                            5 and over </option>
                                        <option value="6">
                                            6 and over </option>
                                        <option value="7">
                                            7 and over </option>
                                        <option value="8">
                                            8 and over </option>
                                        <option value="9">
                                            9 and over </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="custom-label">
                                        Released</label>
                                    <select name="released" class="custom-select">
                                        <option value="">
                                            Released </option>
                                        <option value="2010-2023">2010 -
                                            2023 </option>
                                        <option value="2000-2009">2000 - 2009</option>
                                        <option value="1990-1999">1990 - 1999</option>
                                        <option value="1980-1989">1980 - 1989</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="custom-label">
                                        Sorting</label>
                                    <select name="sorting" class="custom-select">
                                        <option value="newest">
                                            Newest </option>
                                        <option value="popular">
                                            Popular </option>
                                        <option value="released">
                                            Released </option>
                                        <option value="imdb">
                                            Imdb </option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-block btn-theme">
                                    Apply</button>
                            </form>
                        </div>
                    </div>
                    <div class="app-section">

                        <div class="row row-cols-2 row-cols-md-5">
                            @foreach ($movies as $movie)
                                @include('movie.includes.movie_item', ['movie' => $movie])
                            @endforeach
                        </div>

                        {{ $movies->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
