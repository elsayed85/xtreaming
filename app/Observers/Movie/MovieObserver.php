<?php

namespace App\Observers\Movie;

use App\Models\Genre;
use App\Models\Keyword;
use App\Models\Movie\Movie;
use App\Models\Movie\MovieCollection;
use App\Models\Person;
use Illuminate\Support\Facades\Http;

class MovieObserver
{
    /**
     * Handle the Movie "created" event.
     *
     * @param  \App\Models\Movie\Movie  $movie
     * @return void
     */
    public function created(Movie $movie)
    {
        $data = Http::tmdb("/movie/$movie->id", [
            "append_to_response" => "credits,keywords,translations"
        ]);

        $titles = collect($data['translations']['translations']);
        $en =  $titles->where('iso_639_1', 'en')->first();
        $title = $movie->original_title;
        $overview = $movie->overview;

        if ($en && !empty($en['data']['title'])) {
            $title = $en['data']['title'];
        }

        if ($en && !empty($en['data']['overview'])) {
            $overview = $en['data']['overview'];
        }

        $movie->title = [
            'en' => $title,
            'ar' => $movie->title,
        ];

        $movie->overview = [
            'en' => $overview,
            'ar' => $movie->overview,
        ];

        $movie->save();

        $genres = $data['genres'];
        if (count($genres) > 0) {
            $generes = collect($genres)->map(function ($genre) {
                return $genre['id'];
            })->toArray();
            $generes_db = Genre::whereIn('id', $generes)->get()->pluck('id')->toArray();
            $movie->genres()->sync($generes_db);
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

            $movie->cast()->sync($cast);
        }

        $keywords = $data['keywords']['keywords'];
        if (count($keywords) > 0) {
            $keywords = collect($keywords)->map(function ($keyword) {
                return Keyword::firstOrCreate([
                    'id' => $keyword['id'],
                ], [
                    'id' => $keyword['id'],
                    'name' => $keyword['name'],
                ])->id;
            });
            $movie->keywords()->sync($keywords);
        }

        $collection = $data['belongs_to_collection'];
        if ($collection) {
            $collection_db = MovieCollection::firstOrCreate([
                'id' => $collection['id'],
            ], [
                'id' => $collection['id'],
                'name' => $collection['name'],
                'poster_path' => str_replace("/", "", $collection['poster_path']),
                'backdrop_path' => str_replace("/", "", $collection['backdrop_path']),
            ])->id;
            $movie->movieCollections()->attach($collection_db);
        }
    }

    /**
     * Handle the Movie "updated" event.
     *
     * @param  \App\Models\Movie\Movie  $movie
     * @return void
     */
    public function updated(Movie $movie)
    {
        //
    }

    /**
     * Handle the Movie "deleted" event.
     *
     * @param  \App\Models\Movie\Movie  $movie
     * @return void
     */
    public function deleted(Movie $movie)
    {
        //
    }

    /**
     * Handle the Movie "restored" event.
     *
     * @param  \App\Models\Movie\Movie  $movie
     * @return void
     */
    public function restored(Movie $movie)
    {
        //
    }

    /**
     * Handle the Movie "force deleted" event.
     *
     * @param  \App\Models\Movie\Movie  $movie
     * @return void
     */
    public function forceDeleted(Movie $movie)
    {
        //
    }
}
