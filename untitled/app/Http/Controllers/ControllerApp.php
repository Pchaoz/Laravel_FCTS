<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Empreses;
use App\Models\Ofertes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControllerApp extends Controller
{
    public function empresa(){
        $empreses = Empreses::all();
        return view('empresas', compact('empreses'));
    }

    public function editaEmpresa($idEmpresa){
        $user = Auth::user();
        if(!$user->coordinador) {
            return "No ets coordinador!";
        }else {
            $empresa = Empreses::findOrFail($idEmpresa);
            return view('editarempresa', compact('empresa'));
        }
       
    }



    public function cambiarDadesEmpresa(Request $request){
        $empresa= Empreses::findOrFail($request->id);
        $empresa->nom=$request->nom;
        $empresa->adreça=$request->adreça;
        $empresa->telefon=$request->telefon;
        $empresa->correu=$request->correu;
        $empresa->save();
        //$empresa2 = Empreses::findOrFail($empresa->idEmpresa);
        //return $empresa2->toJson();
        return redirect('/empresa');
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
        $ofertes = Ofertes::all();
        return view('ofertes', compact('ofertes'));
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
    public function addOfertaVista(){
        $user = Auth::user();
        if(!$user->coordinador) {
            return "No ets coordinador!";
        }else {
            return view('afegirOferta');
        }
    }

    public function afegirOfertaVista(Request $request){
        $oferta = new Ofertes();
        $oferta->descripcio=$request->desc;
        $oferta->vacants=$request->vac;
        $oferta->curs=$request->curs;
        $oferta->nomContacte=$request->nomCont;
        $oferta->cognomsContacte=$request->cogCont;
        $oferta->correuContacte=$request->correuCont;
        $oferta->idEmpresa=$request->idEmp;
        $oferta->idCicle=$request->idCicle;
        $oferta->save();
        return redirect('/empresa/oferta');
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
