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
            "append_to_response" => "credits,keywords"
        ]);

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
            $movie->genres()->sync($generes);
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
                'name' => $collection['name'],
                'poster_path' => $collection['poster_path'],
                'backdrop_path' => $collection['backdrop_path'],
            ], [
                'id' => $collection['id'],
                'name' => $collection['name'],
                'poster_path' => $collection['poster_path'],
                'backdrop_path' => $collection['backdrop_path'],
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
