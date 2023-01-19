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
            "append_to_response" => "credits,keywords,translations",
            'language' => 'ar'
        ]);

        $titles = collect($data['translations']['translations']);
        $en =  $titles->where('iso_639_1', 'en')->first();
        $title = $serie->original_title;
        $overview = $serie->overview;

        if ($en && !empty($en['data']['title'])) {
            $title = $en['data']['title'];
        }

        if ($en && !empty($en['data']['overview'])) {
            $overview = $en['data']['overview'];
        }

        $serie->title = [
            'en' => $title,
            'ar' => $serie->title,
        ];

        $serie->overview = [
            'en' => $overview,
            'ar' => $serie->overview,
        ];

        $serie->save();

        $genres = $data['genres'];
        if (count($genres) > 0) {
            $generes = collect($genres)->map(function ($genre) {
                return $genre['id'];
            })->toArray();
            $generes_db = Genre::whereIn('id', $generes)->get()->pluck('id')->toArray();
            $serie->genres()->sync($generes_db);
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

        $data_en = Http::tmdb("/tv/" . $serie->id, [
            'language' => 'en',
        ])['seasons'];
        $data_en = collect($data_en);
        $data_ar = $data['seasons'];
        $seasons = collect($data_ar)
            ->where("season_number", "!=", 0)
            ->map(function ($season) use ($data_en) {
                $en = $data_en->where('season_number', $season['season_number'])->first();
                return [
                    'id' => $season['id'],
                    'name' => [
                        'en' => $en['name'],
                        'ar' => $season['name'],
                    ],
                    'overview' => [
                        'en' => $en['overview'],
                        'ar' => $season['overview'],
                    ],
                    'poster_path' => str_replace("/", "", $season['poster_path']),
                    'number' => $season['season_number'],
                    'air_date' => $season['air_date'],
                ];
            });
        if ($seasons->isNotEmpty()) {
            $serie->seasons()->createMany($seasons);
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
