<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumnesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("Alumnes")->insert([
            "NomAlumne"=>"Jose",
            "CognomAlumne"=>"Fuentes",
            "DNI"=>"81928419A",
            "Curs"=>"2",
            "Telefon"=>"69696969",
            "Correu"=>"supervivientedamvi@jodermail.com",
            "idTutor"=>1,
            "Cicle"=>1,
            "IsPractiques"=>true,
            'created_at'=> Carbon::now()->format('Y-m-d H:i:s')
            ]);

        DB::table("Alumnes")->insert([
            "NomAlumne"=>"Raul",
            "CognomAlumne"=>"Martín-Caro",
            "DNI"=>"19825198M",
            "Curs"=>"2",
            "Telefon"=>"891258128",
            "Correu"=>"raulmartincaro@gmaispuntocon.com",
            "idTutor"=>1,
            "Cicle"=>2,
            "IsPractiques"=>false,
            'created_at'=> Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table("Alumnes")->insert([
            "NomAlumne"=>"Pol",
            "CognomAlumne"=>"Sotillos",
            "DNI"=>"18295199A",
            "Curs"=>"2",
            "Telefon"=>"5817215912",
            "Correu"=>"polsotillos@gmail.com",
            "idTutor"=>1,
            "Cicle"=>3,
            "IsPractiques"=>true,
            'created_at'=> Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table("Alumnes")->insert([
            "NomAlumne"=>"Abraham",
            "CognomAlumne"=>"Nose",
            "DNI"=>"12481249A",
            "Curs"=>"2",
            "Telefon"=>"33333333",
            "Correu"=>"eldeasix@gmail.com",
            "idTutor"=>1,
            "Cicle"=>4,
            "IsPractiques"=>true,
            'created_at'=> Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
