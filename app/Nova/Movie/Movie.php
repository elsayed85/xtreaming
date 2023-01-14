<?php

namespace App\Nova\Movie;

use App\Models\Platform;
use App\Nova\Resource;
use Eminiarts\Tabs\Tab;
use Eminiarts\Tabs\Tabs;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Country;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\HasOne;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\MultiSelect;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Tag;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\URL;
use Laravel\Nova\Http\Requests\NovaRequest;
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
        return [
            ID::make()->sortable(),
            new Tabs('data', [
                new Tab('General', [
                    Text::make('Title', 'title'),
                    // Tag::make('Genres', 'genres'),
                    Textarea::make('Overview', 'overview'),
                    Country::make('Country', 'country_code'),
                    Select::make('Platfrom', 'platform')
                        ->options(Platform::all()->pluck('name', 'id')),
                    Number::make('IMDb Rating', 'imdb_rating'),
                    Date::make('Release Date', 'release_date'),
                    Number::make('Duration', 'duration'),
                    URL::make('Trailer', 'trailer_url'),
                    Textarea::make('Keywords', 'keywords'),
                    NovaSwitcher::make('Publish', "published")->trueLabel('Publish')->falseLabel('Darft'),
                    NovaSwitcher::make('Feature', 'featured')->trueLabel('On')->falseLabel('Off'),
                    NovaSwitcher::make('Slider', 'slidered')->trueLabel('Show')->falseLabel('Hide'),
                    NovaSwitcher::make('Closed Comment', "comment_closed")->trueLabel('Closed')->falseLabel('Open'),
                ]),
                new Tab('Tab 2', [
                    Boolean::make('Param 1', 'param_1'),
                    Boolean::make('Param 2', 'param_2'),
                    Boolean::make('Param 3', 'param_3'),
                ]),
                new Tab('Tab 3', [
                    Boolean::make('Param 1', 'param_1'),
                    Boolean::make('Param 2', 'param_2'),
                    Boolean::make('Param 3', 'param_3'),
                ]),
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
