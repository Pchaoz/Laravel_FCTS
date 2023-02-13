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
        return view('empresas', compact('empreses'));
        //return $empreses->toJson();
    }

    public function editarEmpresa(){
        return view('editarempresa');
    }

    public function addEmpresa($nom){
        $empresa = new Empreses();
        $empresa->nom=$nom;
        $empresa->adreça="";
        $empresa->telefon="";
        $empresa->correu="";
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
        $oferta->descripcio="Por rellenar";
        $oferta->curs="";
        $oferta->vacants=1;
        $oferta->nomContacte="";
        $oferta->cognomsContacte="";
        $oferta->correuContacte="";
        $oferta->save();
        $oferta2 = Ofertes::findOrFail($oferta->idOferta);
        return $oferta2->toJson();
    }

    public function addAlumne(){
        $alumne = new Alumnes();
        $alumne->nomAlumne="";
        $alumne->CognomAlumne="";
        $alumne->DNI="";
        $alumne->Telefon="";
        $alumne->Curs="";
        $alumne->correu="";
        $alumne->save();
        $alumne2 = Alumnes::findOrFail($alumne->idAlumne);
        return $alumne2->toJson();
    }

    public function modEstatEnviament($idEnviament,$nouEstat){
        $enviament= Enviaments::findOrFail($idEnviament);
        $enviament->estat=$nouEstat;
        $enviament->save();
        $enviament= Enviaments::findOrFail($idEnviament);
        return $enviament->toJson();

    }

    public function restaVacants($idOferta,$numVacants){
        $oferta= Ofertes::findOrFail($idOferta);
        $oferta->vacants-=$numVacants;
        $oferta->save();
        $oferta= Ofertes::findOrFail($idOferta);
        return $oferta->toJson();

    }




}
