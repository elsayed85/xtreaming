<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $genres = Genre::all();
        return view('category.index', [
            'genres' => $genres
        ]);
    }

    public function show(Genre $genre)
    {
        return view('category.show', [
            'genre' => $genre
        ]);
    }
}
