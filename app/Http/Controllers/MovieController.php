<?php

namespace App\Http\Controllers;

use App\Models\Movie\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::Published()->latest()->paginate(20);
        return view('movie.index' , [
            'movies' => $movies
        ]);
    }

    public function show(Movie $movie)
    {
        return view('movie.show');
    }
}
