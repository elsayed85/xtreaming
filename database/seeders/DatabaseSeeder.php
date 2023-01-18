<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
            "username" => "admin",
            "password" => Hash::make("admin123"),
            "is_male" => true,
            "is_admin" => true,
        ]);

        $this->call([
            CountrySeeder::class,
            MovieGenresSeeder::class,
            SerieGenresSeeder::class,
        ]);
    }
}
