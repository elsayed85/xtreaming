<?php

namespace App\Http\Controllers;

use App\Models\Movie\MovieCollection;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function index()
    {
        $collections = MovieCollection::withCount('movies')
            ->orderBy('movies_count', 'desc')
            ->orderBy('created_at', 'desc')
            ->having('movies_count', '>', 1)
            ->paginate(21);
        return view('collection.index', [
            'collections' => $collections
        ]);
    }

    public function show(MovieCollection $collection)
    {
        $collection->loadCount('movies');
        return view('collection.show', [
            'c' => $collection
        ]);
    }
}
