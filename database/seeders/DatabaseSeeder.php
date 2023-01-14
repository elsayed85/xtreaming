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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\User::create([
            "fname" => "Admin",
            "lname" => "1",
            "email" => "admin@gmail.com",
            "password" => Hash::make("admin123"),
            "username" => "admin",
            "is_male" => true,
            "bio" => "text here"
        ]);
    }
}
