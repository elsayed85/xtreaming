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
        if ($genre->type == "movie") {
            $data = $genre->movies()->paginate(20);
        } else {
            $data = $genre->series()->paginate(20);
        }
        return view('category.show', [
            'genre' => $genre,
            'data' => $data
        ]);
    }
}
