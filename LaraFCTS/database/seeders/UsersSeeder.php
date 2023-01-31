<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{

    public function run()
    {
        DB::table("users")->insert([
            "name"=>"Eloi Vazquez",
            "email"=>"eliov@gmail.com",
            "password"=>bcrypt("luz"),
            "grup"=>"1r Iluminatti",
            'created_at'=> Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
