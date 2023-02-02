<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EmpresesSeeder::class);
        $this->call(EstudisSeeder::class);
        $this->call(AlumnesSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(EnviamentsSeeder::class);
        $this->call(OfertesSeeder::class);

    }
}
