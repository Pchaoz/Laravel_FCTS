<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnviamentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('enviaments')->insert([
            'estat' => 'Cursant',
            'idAlumne' => '1',
            'idOferta'=>'1',
            'creatPer'=>'1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('enviaments')->insert([
            'estat' => 'Cancelada',
            'idAlumne' => '1',
            'idOferta'=>'2',
            'creatPer'=>'1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
