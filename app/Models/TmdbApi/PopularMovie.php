<?php

namespace App\Models\TmdbApi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class PopularMovie extends Model
{
    use HasFactory;
    use \Sushi\Sushi;
    
    public function getRows()
    {
        $movies = Http::tmdb("movie/popular", [
            'language' => 'en',
        ])['results'];

        return collect($movies)->map(function ($movie) {
            return [
                'id' => $movie['id'],
                'title' => $movie['title'],
                'release_date' => $movie['release_date'],
                'vote_average' => $movie['vote_average'],
                'vote_count' => $movie['vote_count'],
                'poster_path' => $movie['poster_path'] ?? ''
            ];
        })->toArray();
    }
}
