<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class OfertesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("ofertes")->insert([
            "descripcio"=>"Oferta 1 prueba",
            "idEmpresa"=>"1",
            "vacants"=>"1",
            "idCicle"=>"2",
            "curs"=>"2010",
            "nomContacte"=>"Jose Luis",
            "cognomsContacte"=>"Santiago Rodrigez",
            "correuContacte"=>"JluisSR@carpediem.net",
            'created_at'=> Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table("ofertes")->insert([
            "descripcio"=>"Oferta 2 prueba",
            "idEmpresa"=>"1",
            "vacants"=>"2007",
            "idCicle"=>"3",
            "curs"=>"2",
            "nomContacte"=>"Roberto",
            "cognomsContacte"=>"Santiago Gonzalez",
            "correuContacte"=>"RobertoSG@carpediem.net",
            'created_at'=> Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
