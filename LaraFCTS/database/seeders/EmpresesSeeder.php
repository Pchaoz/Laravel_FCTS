<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpresesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Empreses')->insert([
            'nom' => 'Xiaomi',
            'adreça' => "Avinguda de la Granvia de l’Hospitalet, 75, 08908 L'Hospitalet de Llobregat, Barcelona",
            'telefon' => '+34931783992',
            'correu' => '+service.us@support.mi.com',
            'created_at'=> Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
