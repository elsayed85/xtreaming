<?php

namespace App\Nova\Movie;

use App\Models\Platform;
use App\Nova\Resource;
use Eminiarts\Tabs\Tab;
use Eminiarts\Tabs\Tabs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Country;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\HasOne;
use Laravel\Nova\Fields\Hidden;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\MultiSelect;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Tag;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\URL;
use Laravel\Nova\Http\Requests\NovaRequest;
use Ryanito\CountryFlag\CountryFlag;
use Tmdb\PosterPreview\PosterPreview;
use Trin4ik\NovaSwitcher\NovaSwitcher;

class Movie extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Movie\Movie>
     */
    public static $model = \App\Models\Movie\Movie::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        $referer = $request->headers->get('referer');
        $str = parse_url($referer, PHP_URL_QUERY);
        parse_str($str, $query);
        $tmdb_id = $query['tmdb_id'] ?? null;
        $imdb_id = null;
        $title = '';
        $overview = '';
        $country_code = '';
        $imdb_rating = '';
        $release_date = '';
        $duration = '';
        $trailer_url = '';
        $keywords = '';
        $genres = '';
        $poster_path = '';
        $backdrop_path = '';
        if ($tmdb_id) {
            $movie = Http::tmdb("movie/{$tmdb_id}", [
                'append_to_response' => 'videos,keywords'
            ]);
            $title = $movie['title'];
            $overview = $movie['overview'];
            $country_code = $movie['production_countries'][0]['iso_3166_1'];
            $imdb_rating = $movie['vote_average'];
            $release_date = $movie['release_date'];
            $duration = $movie['runtime'];
            $trailer_url = "https://www.youtube.com/watch?v=" . $movie['videos']['results'][0]['key'];
            $keywords = $movie['keywords']['keywords'];
            $keywords = array_map(function ($genre) {
                return $genre['name'];
            }, $keywords);
            $keywords = implode(',', $keywords);
            $genres = $movie['genres'];
            $genres = array_map(function ($genre) {
                return $genre['name'];
            }, $genres);
            $genres = implode(',', $genres);
            $poster_path = $movie['poster_path'];
            $backdrop_path = $movie['backdrop_path'];
            $imdb_id = $movie['imdb_id'];
        }

        return [
            ID::make()->sortable(),
            new Tabs('data', [
                new Tab('General', [
                    Hidden::make('poster', 'poster_path')
                        ->default($poster_path),
                    Hidden::make("backdrop", 'backdrop_path')
                        ->default($backdrop_path),
                    PosterPreview::make('Poster', 'poster_preview')
                        ->default($poster_path)
                        ->readonly(true)
                        ->displayUsing(fn () => $this->poster_path)
                        ->resolveUsing(fn () => $this->poster_path),
                    Number::make('Tmdb Id', 'tmdb_id')
                        ->default($tmdb_id),
                    Text::make('Imdb Id', 'imdb_id')
                        ->default($imdb_id),
                    Text::make('Title', 'title')
                        ->default($title),
                    // Tag::make('Genres', 'genres'),
                    Textarea::make('Overview', 'overview')
                        ->default($overview),
                    Country::make('Country', 'country_code')
                        ->default($country_code)
                        ->hideFromIndex()
                        ->hideFromDetail(),
                    Select::make('Platfrom', 'platform_id')
                        ->options(Platform::all()->pluck('name', 'id')),
                    Number::make('IMDb Rating', 'imdb_rating')
                        ->step('any')
                        ->default($imdb_rating),
                    Date::make('Release Date', 'release_date')
                        ->default($release_date),
                    Number::make('Duration', 'duration')
                        ->step('any')
                        ->default($duration),
                    URL::make('Trailer', 'trailer_url')
                        ->default($trailer_url),
                    // Textarea::make('Keywords', 'keywords')
                    //     ->default($keywords),
                    NovaSwitcher::make('Publish', "published")->trueLabel('Publish')->falseLabel('Darft')
                        ->hideFromIndex()
                        ->hideFromDetail(),
                    NovaSwitcher::make('Feature', 'featured')->trueLabel('On')->falseLabel('Off')
                        ->hideFromIndex()
                        ->hideFromDetail(),
                    NovaSwitcher::make('Slider', 'slidered')->trueLabel('Show')->falseLabel('Hide')
                        ->hideFromIndex()
                        ->hideFromDetail(),
                    NovaSwitcher::make('Closed Comment', "comment_closed")->trueLabel('Closed')->falseLabel('Open')
                        ->hideFromIndex()
                        ->hideFromDetail(),

                    Boolean::make('Publish', "published")
                        ->hideWhenCreating()
                        ->hideWhenUpdating(),
                    Boolean::make('Feature', 'featured')
                        ->hideWhenCreating()
                        ->hideWhenUpdating(),
                    Boolean::make('Slider', 'slidered')
                        ->hideWhenCreating()
                        ->hideWhenUpdating(),
                    Boolean::make('Closed Comment', "comment_closed")
                        ->hideWhenCreating()
                        ->hideWhenUpdating(),
                ]),
                // new Tab('Tab 2', [
                //     Boolean::make('Param 1', 'param_1'),
                //     Boolean::make('Param 2', 'param_2'),
                //     Boolean::make('Param 3', 'param_3'),
                // ]),
                // new Tab('Tab 3', [
                //     Boolean::make('Param 1', 'param_1'),
                //     Boolean::make('Param 2', 'param_2'),
                //     Boolean::make('Param 3', 'param_3'),
                // ]),
            ]),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
