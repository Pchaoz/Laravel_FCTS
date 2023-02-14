<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Alumnes;
use App\Models\Empreses;
use App\Models\Ofertes;
use Illuminate\Http\Request;
use function MongoDB\BSON\toJSON;

class ControllerApp extends Controller
{
    public function empresa(){
        $empreses = Empreses::all();
        return view('empresas', compact('empreses'));
        //return $empreses->toJson();
    }

    public function editaEmpresa($idEmpresa){
        $empresa = Empreses::findOrFail($idEmpresa);
        return view('editarempresa', compact('empresa'));

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
    //TODO pillarlo de un formulario con todos los alumnos
    // en el cual pases la id como con el del Raul
    public function formAlumne() {
        return view('editAlumne');
    }
    public function editAlumne(Request $request) {

        $alumne = Alumnes::findOrFail(1);
        //DD($alumne);
        $alumne->nomAlumne=$request->nom;
        $alumne->CognomAlumne=$request->cognom;
        $alumne->Telefon=$request->telefon;
        $alumne->Correu=$request->correu;
        $alumne->DNI=$request->dni;
        $alumne->Curs=(int) $request->curs;
        //DD($alumne);
        $alumne->save();
        return redirect('/home');
    }


}
