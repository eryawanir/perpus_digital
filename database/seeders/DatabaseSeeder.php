<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Faker\Factory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // Harus diubah juga di config/app.php
        $faker  = Factory::create('id_ID');
        // Supaya saat generate hasil selalu sama
        $faker->seed(123);
        $this->call(AuthorSeeder::class);
    }
}
