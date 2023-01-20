<?php

namespace App\Http\Controllers;

use App\Models\Serie\Serie;
use Illuminate\Http\Request;

class SerieController extends Controller
{
    public function index()
    {
        $movies = Serie::Published()->latest()->paginate(20);
        return view('serie.index', [
            'movies' => $movies
        ]);
    }

    public function show(Serie $serie)
    {
        $serie->load([
            'genres',
            'country',
            'cast' => function ($query) {
                return $query->orderBy("popularity", "desc")
                    ->where("is_male", true)
                    ->limit(20);
            },
            'seasons' => function ($query) {
                return $query->orderBy("number", "asc");
            },
            'seasons.episodes' => function ($query) {
                return $query->orderBy("episodes.number", "asc");
            },
        ]);

        $rgb = getRGBof(tmdb_backdrop($serie['backdrop_path']));
        $rgb = implode(',', $rgb);
        return view('serie.show', [
            'serie' => $serie,
            'rgb' => $rgb
        ]);
    }
}
