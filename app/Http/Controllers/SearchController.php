<?php

namespace App\Http\Controllers;

use App\Models\Movie\Movie;
use App\Models\Serie\Serie;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchSuggestions()
    {
        $movies = Movie::where(function ($query) {
            return $query
                ->where(function ($subQuery) {
                    return $subQuery->where('title->en', 'like', '%' . request('q') . '%')
                        ->orWhere('title->ar', 'like', '%' . request('q') . '%');
                })
                ->orWhere('original_title', 'like', '%' . request('q') . '%');
        })
            ->limit(5)
            ->get()
            ->map(function ($el) {
                return [
                    'id' => $el->id,
                    'name' => $el->title,
                    'original_title' => $el->original_title,
                    'image' => tmdb_image($el->poster_path),
                    'url' => route('movie.show', $el->id),
                    'year' => $el->release_date->format('Y'),
                    'type' => 'movie',
                    'created_at' => $el->created_at->format('Y-m-d H:i:s'),
                ];
            });

        $series = Serie::where(function ($query) {
            return $query
                ->where(function ($subQuery) {
                    return $subQuery->where('title->en', 'like', '%' . request('q') . '%')
                        ->orWhere('title->ar', 'like', '%' . request('q') . '%');
                })
                ->orWhere('original_title', 'like', '%' . request('q') . '%');
        })
            ->limit(5)
            ->get()
            ->map(function ($el) {
                return [
                    'id' => $el->id,
                    'name' => $el->title,
                    'image' => tmdb_image($el->poster_path),
                    'url' => route('serie.show', $el->id),
                    'year' => $el->release_date->format('Y'),
                    'type' => 'series',
                    'created_at' => $el->created_at->format('Y-m-d H:i:s'),
                ];
            });

        if ($movies->count() == 0 && $series->count() == 0) {
            return response()->json([
                'data'  => [],
            ]);
        }

        if ($movies->count() == 0) {
            return response()->json([
                'data'  => $series->sortByDesc('created_at')->values()->toArray(),
            ]);
        }

        if ($series->count() == 0) {
            return response()->json([
                'data'  => $movies->sortByDesc('created_at')->values()->toArray(),
            ]);
        }

        $results = $movies->merge($series)->sortByDesc('created_at')->values()->toArray();
        return response()->json([
            'data'  => $results,
        ]);
    }
}
