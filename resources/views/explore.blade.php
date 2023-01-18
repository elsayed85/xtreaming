@extends('layouts.app')

@section('main')
    <div class="app-content">
        {{ Breadcrumbs::render() }}
        <div class="filter-btn" data-toggle="modal" data-target="#filter">
            <svg class="icon">
                <use xlink:href="{{ asset("images/sprite.svg") }}#filter"></use>
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
                            <div class="filter-item" id="type">
                                <label>
                                    Type</label>
                                <div class="filter-item-content dropdown-toggle" role="button" id="filter-type"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <input type="hidden" name="type" value="">
                                    <div class="filter-value">
                                        All </div>
                                    <div class="dropdown-btn"></div>
                                </div>
                                <div class="dropdown-menu" aria-labelledby="filter-type">
                                    <li value="" class="selected">
                                        All </li>
                                    <li value="movie">
                                        Movie </li>
                                    <li value="serie">
                                        Serie </li>
                                </div>
                            </div>
                            <div class="filter-item" id="category">
                                <label>
                                    Category</label>
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
                                    <use xlink:href="{{ asset("images/sprite.svg") }}#close">
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
                                                    <circle fill="none" stroke-width="1" cx="18"
                                                        cy="18" r="16" stroke-dasharray="77 100"
                                                        stroke-dashoffset="0" transform="rotate(-90 18 18)"></circle>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="play-btn">
                                            <svg class="icon">
                                                <use
                                                    xlink:href="{{ asset("images/sprite.svg") }}#play">
                                                </use>
                                            </svg>
                                        </div>
                                        <div class="media media-cover"
                                            style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-batman-begins.webp&quot;);">
                                        </div>
                                    </a>
                                    <div class="list-caption">
                                        <a href="https://demo.codelug.com/wovie/movie/batman-begins-27"
                                            class="list-titlesub">
                                            Batman Begins </a>
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
                                    <a href="https://demo.codelug.com/wovie/movie/bird-box-25" class="list-media">
                                        <div class="list-media-attr">
                                            <div class="quality">
                                                HD </div>
                                            <div class="imdb">
                                                <span>
                                                    6.9</span>
                                                <svg x="0px" y="0px" width="36px" height="36px"
                                                    viewBox="0 0 36 36">
                                                    <circle fill="none" stroke-width="1" cx="18"
                                                        cy="18" r="16" stroke-dasharray="69 100"
                                                        stroke-dashoffset="0" transform="rotate(-90 18 18)"></circle>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="play-btn">
                                            <svg class="icon">
                                                <use
                                                    xlink:href="{{ asset("images/sprite.svg") }}#play">
                                                </use>
                                            </svg>
                                        </div>
                                        <div class="media media-cover"
                                            style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-bird-box_1.webp&quot;);">
                                        </div>
                                    </a>
                                    <div class="list-caption">
                                        <a href="https://demo.codelug.com/wovie/movie/bird-box-25" class="list-titlesub">
                                            Bird Box </a>
                                        <a href="https://demo.codelug.com/wovie/movie/bird-box-25" class="list-title">
                                            Bird Box </a>
                                        <a href="https://demo.codelug.com/wovie/movie/bird-box-25" class="list-category">
                                            Drama </a>
                                    </div>
                                </div>
                            </div>
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
                                                    <circle fill="none" stroke-width="1" cx="18"
                                                        cy="18" r="16" stroke-dasharray="84 100"
                                                        stroke-dashoffset="0" transform="rotate(-90 18 18)"></circle>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="play-btn">
                                            <svg class="icon">
                                                <use
                                                    xlink:href="{{ asset("images/sprite.svg") }}#play">
                                                </use>
                                            </svg>
                                        </div>
                                        <div class="media media-cover"
                                            style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-chilling-adventures-of-sabrina.webp&quot;);">
                                        </div>
                                    </a>
                                    <div class="list-caption">
                                        <a href="https://demo.codelug.com/wovie/serie/chilling-adventures-of-sabrina-22"
                                            class="list-titlesub">
                                            Chilling Adventures of Sabrina </a>
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
                                            <div class="imdb">
                                                <span>
                                                    7.5</span>
                                                <svg x="0px" y="0px" width="36px" height="36px"
                                                    viewBox="0 0 36 36">
                                                    <circle fill="none" stroke-width="1" cx="18"
                                                        cy="18" r="16" stroke-dasharray="75 100"
                                                        stroke-dashoffset="0" transform="rotate(-90 18 18)"></circle>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="play-btn">
                                            <svg class="icon">
                                                <use
                                                    xlink:href="{{ asset("images/sprite.svg") }}#play">
                                                </use>
                                            </svg>
                                        </div>
                                        <div class="media media-cover"
                                            style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-the-act.webp&quot;);">
                                        </div>
                                    </a>
                                    <div class="list-caption">
                                        <a href="https://demo.codelug.com/wovie/serie/the-act-21" class="list-titlesub">
                                            The Act </a>
                                        <a href="https://demo.codelug.com/wovie/serie/the-act-21" class="list-title">
                                            The Act </a>
                                        <a href="https://demo.codelug.com/wovie/serie/the-act-21" class="list-category">
                                            Drama </a>
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
                                                    <circle fill="none" stroke-width="1" cx="18"
                                                        cy="18" r="16" stroke-dasharray="84 100"
                                                        stroke-dashoffset="0" transform="rotate(-90 18 18)"></circle>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="play-btn">
                                            <svg class="icon">
                                                <use
                                                    xlink:href="{{ asset("images/sprite.svg") }}#play">
                                                </use>
                                            </svg>
                                        </div>
                                        <div class="media media-cover"
                                            style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-sherlock.webp&quot;);">
                                        </div>
                                    </a>
                                    <div class="list-caption">
                                        <a href="https://demo.codelug.com/wovie/serie/sherlock-20" class="list-titlesub">
                                            Sherlock </a>
                                        <a href="https://demo.codelug.com/wovie/serie/sherlock-20" class="list-title">
                                            Sherlock </a>
                                        <a href="https://demo.codelug.com/wovie/serie/sherlock-20" class="list-category">
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
                                            <div class="imdb">
                                                <span>
                                                    8</span>
                                                <svg x="0px" y="0px" width="36px" height="36px"
                                                    viewBox="0 0 36 36">
                                                    <circle fill="none" stroke-width="1" cx="18"
                                                        cy="18" r="16" stroke-dasharray="80 100"
                                                        stroke-dashoffset="0" transform="rotate(-90 18 18)"></circle>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="play-btn">
                                            <svg class="icon">
                                                <use
                                                    xlink:href="{{ asset("images/sprite.svg") }}#play">
                                                </use>
                                            </svg>
                                        </div>
                                        <div class="media media-cover"
                                            style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-prison-break.webp&quot;);">
                                        </div>
                                    </a>
                                    <div class="list-caption">
                                        <a href="https://demo.codelug.com/wovie/serie/prison-break-19"
                                            class="list-titlesub">
                                            Prison Break </a>
                                        <a href="https://demo.codelug.com/wovie/serie/prison-break-19" class="list-title">
                                            Prison Break </a>
                                        <a href="https://demo.codelug.com/wovie/serie/prison-break-19"
                                            class="list-category">
                                            Crime </a>
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
                                            <div class="imdb">
                                                <span>
                                                    7.6</span>
                                                <svg x="0px" y="0px" width="36px" height="36px"
                                                    viewBox="0 0 36 36">
                                                    <circle fill="none" stroke-width="1" cx="18"
                                                        cy="18" r="16" stroke-dasharray="76 100"
                                                        stroke-dashoffset="0" transform="rotate(-90 18 18)"></circle>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="play-btn">
                                            <svg class="icon">
                                                <use
                                                    xlink:href="{{ asset("images/sprite.svg") }}#play">
                                                </use>
                                            </svg>
                                        </div>
                                        <div class="media media-cover"
                                            style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-fear-the-walking-dead.webp&quot;);">
                                        </div>
                                    </a>
                                    <div class="list-caption">
                                        <a href="https://demo.codelug.com/wovie/serie/fear-the-walking-dead-18"
                                            class="list-titlesub">
                                            Fear the Walking Dead </a>
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
                                    <a href="https://demo.codelug.com/wovie/serie/american-horror-story-17"
                                        class="list-media">
                                        <div class="list-media-attr">
                                            <div class="quality">
                                                Ultra HD </div>
                                            <div class="imdb">
                                                <span>
                                                    8</span>
                                                <svg x="0px" y="0px" width="36px" height="36px"
                                                    viewBox="0 0 36 36">
                                                    <circle fill="none" stroke-width="1" cx="18"
                                                        cy="18" r="16" stroke-dasharray="80 100"
                                                        stroke-dashoffset="0" transform="rotate(-90 18 18)"></circle>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="play-btn">
                                            <svg class="icon">
                                                <use
                                                    xlink:href="{{ asset("images/sprite.svg") }}#play">
                                                </use>
                                            </svg>
                                        </div>
                                        <div class="media media-cover"
                                            style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-american-horror-story.webp&quot;);">
                                        </div>
                                    </a>
                                    <div class="list-caption">
                                        <a href="https://demo.codelug.com/wovie/serie/american-horror-story-17"
                                            class="list-titlesub">
                                            American Horror Story </a>
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
                                            <div class="imdb">
                                                <span>
                                                    6.6</span>
                                                <svg x="0px" y="0px" width="36px" height="36px"
                                                    viewBox="0 0 36 36">
                                                    <circle fill="none" stroke-width="1" cx="18"
                                                        cy="18" r="16" stroke-dasharray="66 100"
                                                        stroke-dashoffset="0" transform="rotate(-90 18 18)"></circle>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="play-btn">
                                            <svg class="icon">
                                                <use
                                                    xlink:href="{{ asset("images/sprite.svg") }}#play">
                                                </use>
                                            </svg>
                                        </div>
                                        <div class="media media-cover"
                                            style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-arrow.webp&quot;);">
                                        </div>
                                    </a>
                                    <div class="list-caption">
                                        <a href="https://demo.codelug.com/wovie/serie/arrow-16" class="list-titlesub">
                                            Arrow </a>
                                        <a href="https://demo.codelug.com/wovie/serie/arrow-16" class="list-title">
                                            Arrow </a>
                                        <a href="https://demo.codelug.com/wovie/serie/arrow-16" class="list-category">
                                            Crime </a>
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
                                                    <circle fill="none" stroke-width="1" cx="18"
                                                        cy="18" r="16" stroke-dasharray="82 100"
                                                        stroke-dashoffset="0" transform="rotate(-90 18 18)"></circle>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="play-btn">
                                            <svg class="icon">
                                                <use
                                                    xlink:href="{{ asset("images/sprite.svg") }}#play">
                                                </use>
                                            </svg>
                                        </div>
                                        <div class="media media-cover"
                                            style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-greys-anatomy.webp&quot;);">
                                        </div>
                                    </a>
                                    <div class="list-caption">
                                        <a href="https://demo.codelug.com/wovie/serie/greys-anatomy-15"
                                            class="list-titlesub">
                                            Grey's Anatomy </a>
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
                                    <a href="https://demo.codelug.com/wovie/serie/the-mandalorian-14" class="list-media">
                                        <div class="list-media-attr">
                                            <div class="quality">
                                                Ultra HD </div>
                                            <div class="imdb">
                                                <span>
                                                    8.5</span>
                                                <svg x="0px" y="0px" width="36px" height="36px"
                                                    viewBox="0 0 36 36">
                                                    <circle fill="none" stroke-width="1" cx="18"
                                                        cy="18" r="16" stroke-dasharray="85 100"
                                                        stroke-dashoffset="0" transform="rotate(-90 18 18)"></circle>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="play-btn">
                                            <svg class="icon">
                                                <use
                                                    xlink:href="{{ asset("images/sprite.svg") }}#play">
                                                </use>
                                            </svg>
                                        </div>
                                        <div class="media media-cover"
                                            style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-the-mandalorian.webp&quot;);">
                                        </div>
                                    </a>
                                    <div class="list-caption">
                                        <a href="https://demo.codelug.com/wovie/serie/the-mandalorian-14"
                                            class="list-titlesub">
                                            The Mandalorian </a>
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
                                    <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13" class="list-media">
                                        <div class="list-media-attr">
                                            <div class="quality">
                                                Ultra HD </div>
                                            <div class="imdb">
                                                <span>
                                                    8.7</span>
                                                <svg x="0px" y="0px" width="36px" height="36px"
                                                    viewBox="0 0 36 36">
                                                    <circle fill="none" stroke-width="1" cx="18"
                                                        cy="18" r="16" stroke-dasharray="87 100"
                                                        stroke-dashoffset="0" transform="rotate(-90 18 18)"></circle>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="play-btn">
                                            <svg class="icon">
                                                <use
                                                    xlink:href="{{ asset("images/sprite.svg") }}#play">
                                                </use>
                                            </svg>
                                        </div>
                                        <div class="media media-cover"
                                            style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-breaking-bad.webp&quot;);">
                                        </div>
                                    </a>
                                    <div class="list-caption">
                                        <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13"
                                            class="list-titlesub">
                                            Breaking Bad </a>
                                        <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13" class="list-title">
                                            Breaking Bad </a>
                                        <a href="https://demo.codelug.com/wovie/serie/breaking-bad-13"
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
                                            <div class="imdb">
                                                <span>
                                                    8.6</span>
                                                <svg x="0px" y="0px" width="36px" height="36px"
                                                    viewBox="0 0 36 36">
                                                    <circle fill="none" stroke-width="1" cx="18"
                                                        cy="18" r="16" stroke-dasharray="86 100"
                                                        stroke-dashoffset="0" transform="rotate(-90 18 18)"></circle>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="play-btn">
                                            <svg class="icon">
                                                <use
                                                    xlink:href="{{ asset("images/sprite.svg") }}#play">
                                                </use>
                                            </svg>
                                        </div>
                                        <div class="media media-cover"
                                            style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-riverdale.webp&quot;);">
                                        </div>
                                    </a>
                                    <div class="list-caption">
                                        <a href="https://demo.codelug.com/wovie/serie/riverdale-12" class="list-titlesub">
                                            Riverdale </a>
                                        <a href="https://demo.codelug.com/wovie/serie/riverdale-12" class="list-title">
                                            Riverdale </a>
                                        <a href="https://demo.codelug.com/wovie/serie/riverdale-12" class="list-category">
                                            Mystery </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="list-movie">
                                    <a href="https://demo.codelug.com/wovie/serie/the-walking-dead-11" class="list-media">
                                        <div class="list-media-attr">
                                            <div class="quality">
                                                HD </div>
                                            <div class="imdb">
                                                <span>
                                                    8</span>
                                                <svg x="0px" y="0px" width="36px" height="36px"
                                                    viewBox="0 0 36 36">
                                                    <circle fill="none" stroke-width="1" cx="18"
                                                        cy="18" r="16" stroke-dasharray="80 100"
                                                        stroke-dashoffset="0" transform="rotate(-90 18 18)"></circle>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="play-btn">
                                            <svg class="icon">
                                                <use
                                                    xlink:href="{{ asset("images/sprite.svg") }}#play">
                                                </use>
                                            </svg>
                                        </div>
                                        <div class="media media-cover"
                                            style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-the-walking-dead.webp&quot;);">
                                        </div>
                                    </a>
                                    <div class="list-caption">
                                        <a href="https://demo.codelug.com/wovie/serie/the-walking-dead-11"
                                            class="list-titlesub">
                                            The Walking Dead </a>
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
                                                    <circle fill="none" stroke-width="1" cx="18"
                                                        cy="18" r="16" stroke-dasharray="69 100"
                                                        stroke-dashoffset="0" transform="rotate(-90 18 18)"></circle>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="play-btn">
                                            <svg class="icon">
                                                <use
                                                    xlink:href="{{ asset("images/sprite.svg") }}#play">
                                                </use>
                                            </svg>
                                        </div>
                                        <div class="media media-cover"
                                            style="background-image: url(&quot;https://demo.codelug.com/wovie/public/upload/cover/thumb-captain-america-the-first-avenger.webp&quot;);">
                                        </div>
                                    </a>
                                    <div class="list-caption">
                                        <a href="https://demo.codelug.com/wovie/movie/captain-americathe-first-avenger-10"
                                            class="list-titlesub">
                                            Captain America:The First Avenger </a>
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
                                    <a href="https://demo.codelug.com/wovie/movie/shutter-island-9" class="list-media">
                                        <div class="list-media-attr">
                                            <div class="quality">
                                                Ultra HD </div>
                                            <div class="imdb">
                                                <span>
                                                    8.2</span>
                                                <svg x="0px" y="0px" width="36px" height="36px"
                                                    viewBox="0 0 36 36">
                                                    <circle fill="none" stroke-width="1" cx="18"
                                                        cy="18" r="16" stroke-dasharray="82 100"
                                                        stroke-dashoffset="0" transform="rotate(-90 18 18)"></circle>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="play-btn">
                                            <svg class="icon">
                                                <use
                                                    xlink:href="{{ asset("images/sprite.svg") }}#play">
                                                </use>
                                            </svg>
                                        </div>
                                        <div class="media media-cover"
                                            data-src="https://demo.codelug.com/wovie/public/upload/cover/thumb-shutter-island.webp">
                                        </div>
                                    </a>
                                    <div class="list-caption">
                                        <a href="https://demo.codelug.com/wovie/movie/shutter-island-9"
                                            class="list-titlesub">
                                            Shutter Island </a>
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
                                    <a href="https://demo.codelug.com/wovie/movie/avengers-age-of-ultron-8"
                                        class="list-media">
                                        <div class="list-media-attr">
                                            <div class="quality">
                                                Ultra HD </div>
                                            <div class="imdb">
                                                <span>
                                                    7.3</span>
                                                <svg x="0px" y="0px" width="36px" height="36px"
                                                    viewBox="0 0 36 36">
                                                    <circle fill="none" stroke-width="1" cx="18"
                                                        cy="18" r="16" stroke-dasharray="73 100"
                                                        stroke-dashoffset="0" transform="rotate(-90 18 18)"></circle>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="play-btn">
                                            <svg class="icon">
                                                <use
                                                    xlink:href="{{ asset("images/sprite.svg") }}#play">
                                                </use>
                                            </svg>
                                        </div>
                                        <div class="media media-cover"
                                            data-src="https://demo.codelug.com/wovie/public/upload/cover/thumb-avengers-age-of-ultron.webp">
                                        </div>
                                    </a>
                                    <div class="list-caption">
                                        <a href="https://demo.codelug.com/wovie/movie/avengers-age-of-ultron-8"
                                            class="list-titlesub">
                                            Avengers: Age of Ultron </a>
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
                                    <a href="https://demo.codelug.com/wovie/movie/mad-max-fury-road-7" class="list-media">
                                        <div class="list-media-attr">
                                            <div class="quality">
                                                HD </div>
                                            <div class="imdb">
                                                <span>
                                                    19404</span>
                                                <svg x="0px" y="0px" width="36px" height="36px"
                                                    viewBox="0 0 36 36">
                                                    <circle fill="none" stroke-width="1" cx="18"
                                                        cy="18" r="16" stroke-dasharray="194040 100"
                                                        stroke-dashoffset="0" transform="rotate(-90 18 18)"></circle>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="play-btn">
                                            <svg class="icon">
                                                <use
                                                    xlink:href="{{ asset("images/sprite.svg") }}#play">
                                                </use>
                                            </svg>
                                        </div>
                                        <div class="media media-cover"
                                            data-src="https://demo.codelug.com/wovie/public/upload/cover/thumb-mad-max-fury-road.webp">
                                        </div>
                                    </a>
                                    <div class="list-caption">
                                        <a href="https://demo.codelug.com/wovie/movie/mad-max-fury-road-7"
                                            class="list-titlesub">
                                            Mad Max: Fury Road </a>
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
                                    <a href="https://demo.codelug.com/wovie/movie/django-unchained-6" class="list-media">
                                        <div class="list-media-attr">
                                            <div class="quality">
                                                Ultra HD </div>
                                        </div>
                                        <div class="play-btn">
                                            <svg class="icon">
                                                <use
                                                    xlink:href="{{ asset("images/sprite.svg") }}#play">
                                                </use>
                                            </svg>
                                        </div>
                                        <div class="media media-cover"
                                            data-src="https://demo.codelug.com/wovie/public/upload/cover/thumb-django-unchained.webp">
                                        </div>
                                    </a>
                                    <div class="list-caption">
                                        <a href="https://demo.codelug.com/wovie/movie/django-unchained-6"
                                            class="list-titlesub">
                                            Django Unchained </a>
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
                                    <a href="https://demo.codelug.com/wovie/movie/the-shawshank-redemption-5"
                                        class="list-media">
                                        <div class="list-media-attr">
                                            <div class="quality">
                                                HD </div>
                                            <div class="imdb">
                                                <span>
                                                    8.7</span>
                                                <svg x="0px" y="0px" width="36px" height="36px"
                                                    viewBox="0 0 36 36">
                                                    <circle fill="none" stroke-width="1" cx="18"
                                                        cy="18" r="16" stroke-dasharray="87 100"
                                                        stroke-dashoffset="0" transform="rotate(-90 18 18)"></circle>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="play-btn">
                                            <svg class="icon">
                                                <use
                                                    xlink:href="{{ asset("images/sprite.svg") }}#play">
                                                </use>
                                            </svg>
                                        </div>
                                        <div class="media media-cover"
                                            data-src="https://demo.codelug.com/wovie/public/upload/cover/thumb-the-shawshank-redemption.webp">
                                        </div>
                                    </a>
                                    <div class="list-caption">
                                        <a href="https://demo.codelug.com/wovie/movie/the-shawshank-redemption-5"
                                            class="list-titlesub">
                                            The Shawshank Redemption </a>
                                        <a href="https://demo.codelug.com/wovie/movie/the-shawshank-redemption-5"
                                            class="list-title">
                                            The Shawshank Redemption </a>
                                        <a href="https://demo.codelug.com/wovie/movie/the-shawshank-redemption-5"
                                            class="list-category">
                                            Drama </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <ul class="pagination mb-3">
                            <li class="page-item active"><a class="page-link border-0"
                                    href="https://demo.codelug.com/wovie/discovery?filter=null&amp;page=1"
                                    rel="nofollow">1</a></li>
                            <li class="page-item "><a class="page-link border-0"
                                    href="https://demo.codelug.com/wovie/discovery?filter=null&amp;page=2"
                                    rel="nofollow">2</a></li>
                            <li class="page-item"><a class="page-link border-0"
                                    href="https://demo.codelug.com/wovie/discovery?filter=null&amp;page=2"
                                    rel="nofollow">Next</a></li>
                        </ul>
                        <div class="text-muted text-12">
                            24 contains content </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
