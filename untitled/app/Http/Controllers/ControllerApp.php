<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Empreses;
use App\Models\Ofertes;
use Illuminate\Http\Request;

class ControllerApp extends Controller
{
    public function empresa(){
        $empreses = Empreses::all();
    return $empreses->toJson();

    }

    public function addEmpresa($nom/*,$adreça,$telefon,$correu*/){
        $empresa = new Empreses();
        $empresa->nom=$nom;
        //$empresa->adreça=$adreça;
        //$empresa->telefon=$telefon;
        //$empresa->correu=$correu;
        $empresa->save();
        $empresa2 = Empreses::findOrFail($empresa->idEmpresa);
        return $empresa2->toJson();
    }
    public function oferta(){
        $oferta = Ofertes::all();
return $oferta->toJson();

}

    public function addOferta($id){
        $oferta = new Ofertes();
        $oferta->idEmpresa=$id;
        $oferta->save();
        $oferta2 = Ofertes::findOrFail($oferta->idOferta);
        return $oferta2->toJson();
    }

}
