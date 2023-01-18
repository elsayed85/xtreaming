<?php

namespace App\Observers\Serie;

use App\Models\Genre;
use App\Models\Keyword;
use App\Models\Person;
use App\Models\Serie\Serie;
use Illuminate\Support\Facades\Http;

class SerieObserver
{
    /**
     * Handle the Serie "created" event.
     *
     * @param  \App\Models\Serie\Serie  $serie
     * @return void
     */
    public function created(Serie $serie)
    {
        $data = Http::tmdb("/tv/$serie->id", [
            "append_to_response" => "credits,keywords,translations"
        ]);

        $titles = collect($data['translations']['translations']);
        $en =  $titles->where('iso_639_1', 'en')->first();
        $title = $serie->original_title;

        if ($en) {
            $title = $en['data']['title'];
        }

        $serie->name = [
            'en' => $title,
            'ar' => $serie->title,
        ];

        $serie->save();

        $genres = $data['genres'];
        if (count($genres) > 0) {
            $generes = collect($genres)->map(function ($genre) {
                return Genre::firstOrCreate([
                    'id' => $genre['id'],
                    'name' => $genre['name'],
                ], [
                    'id' => $genre['id'],
                    'name' => $genre['name'],
                ])->id;
            });
            $serie->genres()->sync($generes);
        }

        $cast = $data['credits']['cast'];

        if (count($cast)) {
            $cast = collect($cast)
                ->where("known_for_department", "Acting")
                ->map(function ($cast) {
                    return Person::firstOrCreate(['id' => $cast['id']], [
                        'id' => $cast['id'],
                        'name' => $cast['name'],
                        'pp_url' => str_replace("/", "", $cast['profile_path']),
                        'is_male' => $cast['gender'] == "2" ? true : false,
                        'popularity' => $cast['popularity'],
                    ])->id;
                });

            $serie->cast()->sync($cast);
        }

        $keywords = $data['keywords']['results'];
        if (count($keywords) > 0) {
            $keywords = collect($keywords)->map(function ($keyword) {
                return Keyword::firstOrCreate([
                    'id' => $keyword['id'],
                ], [
                    'id' => $keyword['id'],
                    'name' => $keyword['name'],
                ])->id;
            });
            $serie->keywords()->sync($keywords);
        }

        $seasons = $data['seasons'];
        if ($seasons) {
            $season_list = [];
            foreach ($seasons as $season) {
                if ($season['season_number'] != 0)
                    $season_list[] = [
                        'id' => $season['id'],
                        'name' => $season['name'],
                        'overview' => $season['overview'],
                        'poster_path' => str_replace("/", "", $season['poster_path']),
                        'number' => $season['season_number'],
                        'air_date' => $season['air_date'],
                    ];
            }
            if (count($season_list) > 0)
                $serie->seasons()->createMany($season_list);
        }
    }

    /**
     * Handle the Serie "updated" event.
     *
     * @param  \App\Models\Serie\Serie  $serie
     * @return void
     */
    public function updated(Serie $serie)
    {
        //
    }

    /**
     * Handle the Serie "deleted" event.
     *
     * @param  \App\Models\Serie\Serie  $serie
     * @return void
     */
    public function deleted(Serie $serie)
    {
        //
    }

    /**
     * Handle the Serie "restored" event.
     *
     * @param  \App\Models\Serie\Serie  $serie
     * @return void
     */
    public function restored(Serie $serie)
    {
        //
    }

    /**
     * Handle the Serie "force deleted" event.
     *
     * @param  \App\Models\Serie\Serie  $serie
     * @return void
     */
    public function forceDeleted(Serie $serie)
    {
        //
    }
}
