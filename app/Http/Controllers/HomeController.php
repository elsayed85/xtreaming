<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie\Movie;
use App\Models\Movie\MovieCollection;
use App\Models\Person;
use App\Models\Serie\Episode;
use App\Models\Serie\Serie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $popularActors = Person::orderBy("popularity", "desc")
            ->where("is_male", true)
            ->withCount('movies', 'series')
            ->orderBy('movies_count', 'desc')
            ->orderBy('series_count', 'desc')
            ->take(6)
            ->get();

        $topMoviesGenres = Genre::withCount('movies')
            ->orderBy('movies_count', 'desc')
            ->take(5)
            ->whereType("movie")
            ->get();

        $topSeriesGenres = Genre::withCount('series')
            ->orderBy('series_count', 'desc')
            ->take(5)
            ->whereType("serie")
            ->get();



        // top movie collection with count more than 1 movie
        $topCollections = MovieCollection::withCount('movies')
            ->orderBy('movies_count', 'desc')
            ->orderBy('created_at', 'desc')
            ->having('movies_count', '>', 1)
            ->take(3)
            ->get();

        $recentMovies = Movie::latest()->Published()->paginate(10);
        $recentSeries = Serie::latest()->Published()->paginate(10);

        $recentEpisodes = Episode::latest()->Published()->whereHas('serie', function ($query) {
            return $query->Published();
        })->with('serie')->paginate(10);

        $slideredMovies = Movie::Slidered()->take(4)->get()->map(function ($el) {
            return (object)[
                'id' => $el->id,
                'title' => $el->title,
                'backdrop_path' => $el->backdrop_path,
                'type' => 'movie',
                'rating' => $el->imdb_rating,
                'year' => $el->release_date->format('Y'),
                'overview' => $el->overview,
                'created_at' => $el->created_at,
            ];
        });

        $slideredSeries = Serie::Slidered()->take(4)->get()->map(function ($el) {
            return (object)[
                'id' => $el->id,
                'title' => $el->title,
                'backdrop_path' => $el->backdrop_path,
                'type' => 'serie',
                'rating' => $el->imdb_rating,
                'year' => $el->release_date->format('Y'),
                'overview' => $el->overview,
                'created_at' => $el->created_at,
            ];
        });

        $slidered = $slideredMovies->merge($slideredSeries)->sortByDesc('created_at');

        return view('index', [
            'popularActors' => $popularActors,
            'topMoviesGenres' => $topMoviesGenres,
            'topSeriesGenres' => $topSeriesGenres,
            'topCollections' => $topCollections,
            'recentMovies' => $recentMovies,
            'recentSeries' => $recentSeries,
            'recentEpisodes' => $recentEpisodes,
            'slidered' => $slidered,
        ]);
    }
}
