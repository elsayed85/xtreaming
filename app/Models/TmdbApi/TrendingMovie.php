<?php

namespace App\Models\TmdbApi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class TrendingMovie extends Model
{
    use HasFactory;
    use \Sushi\Sushi;

    protected static $period;


    public static function setPeriod($period)
    {
        self::$period = $period;
        return self::query();
    }

    public function getRows()
    {
        $period = self::$period ?? 'day';
        $movies = Http::tmdb("trending/movie/$period", [
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
