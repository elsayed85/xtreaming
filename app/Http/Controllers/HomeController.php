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
        // top genres that has highest number of movies or series
        $topGenres = Genre::withCount('movies', 'series')
            ->orderBy('movies_count', 'desc')
            ->orderBy('series_count', 'desc')->take(5)->get();

        // top movie collection with count more than 1 movie
        $topCollections = MovieCollection::withCount('movies')
            ->orderBy('movies_count', 'desc')
            ->orderBy('created_at', 'desc')
            ->having('movies_count', '>', 1)
            ->take(3)->get();

        $recentMovies = Movie::latest()->Published()->paginate(10);
        $recentSeries = Serie::latest()->Published()->paginate(10);

        $recentEpisodes = Episode::latest()->Published()->whereHas('serie', function ($query) {
            return $query->Published();
        })->with('serie')->paginate(10);

        return view('index', [
            'popularActors' => $popularActors,
            'topGenres' => $topGenres,
            'topCollections' => $topCollections,
            'recentMovies' => $recentMovies,
            'recentSeries' => $recentSeries,
            'recentEpisodes' => $recentEpisodes,
        ]);
    }
}
