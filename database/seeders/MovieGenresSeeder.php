<?php

namespace Database\Seeders;

use App\Models\Genre;
use App\Models\Movie\MovieGenre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class MovieGenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = Http::tmdb("genre/movie/list");
        foreach ($data["genres"] as $genre) {
            Genre::firstOrCreate(['id' => $genre['id']], [
                "name" => $genre["name"],
                "id" => $genre["id"],
            ]);
        }
    }
}
