<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie\MovieCollection;
use App\Models\Person;
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

        return view('index', [
            'popularActors' => $popularActors,
            'topGenres' => $topGenres,
            'topCollections' => $topCollections
        ]);
    }
}
