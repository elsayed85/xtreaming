<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Genre;
use App\Models\Platform;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            "name" => "Admin",
            "email" => "admin@gmail.com",
            "password" => Hash::make("admin123"),
            "is_male" => true,
            "bio" => "text here"
        ]);

        $this->call([
            CountrySeeder::class,
        ]);
    }
}
