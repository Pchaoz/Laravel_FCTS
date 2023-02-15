<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    public function run()
    {
        DB::table("users")->insert([
            "name"=>"Eloi Vazquez",
            "email"=>"eloiv@gmail.com",
            "password"=>bcrypt("luz"),
            "grup"=> 1,
            'created_at'=> Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'Admin Admin',
            'email' => 'admin@lightbp.com',
            'password' => bcrypt("admin"),
            'grup'=> 1,
            'coordinador'=> true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
