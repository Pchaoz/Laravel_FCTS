<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
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
        //$this->call([UsersTableSeeder::class]);
        $this->call([AlumnesSeeder::class]);
        $this->call([EstudisSeeder::class]);
        $this->call([UsersSeeder::class]);
        $this->call([EmpresesSeeder::class]);
        $this->call([OfertesSeeder::class]);
        $this->call([EnviamentsSeeder::class]);
    }
}
