<?php

namespace App\Models\TmdbApi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
use Sushi\Sushi;

class PopularSerie extends Model
{
    use HasFactory;
    use Sushi;

    public function getRows()
    {
        $tv = Http::tmdb("tv/popular", [
            'language' => 'en',
        ])['results'];

        return collect($tv)->map(function ($tv) {
            return [
                'id' => $tv['id'],
                'name' => $tv['name'],
                'poster_path' => $tv['poster_path'],
                'vote_average' => $tv['vote_average'],
                'first_air_date' => $tv['first_air_date'],
            ];
        })->toArray();
    }
}
