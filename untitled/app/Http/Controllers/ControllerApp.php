<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Empreses;
use App\Models\Ofertes;
use App\Models\Alumnes;
use App\Models\Estudis;
use App\Models\Enviaments;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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

    public function enviamentsTutor($idTutor){
        $enviamentsTutor = Enviaments::findOrFail($idTutor);
        return $enviamentsTutor->toJson();
    }

    public function enviaments(){
        $enviaments = Enviaments::all();
        $user = Auth::user();
        return view('enviaments', compact('enviaments','user'));
        //return $enviaments->toJson();
    }

    public function getalumnes(){
        $alumnes = Alumnes::all();
        $user = Auth::user();
        return view('alumnes', compact('alumnes', 'user'));
    }

    public function afegiralumne(){
        $user = Auth::user();
        $estudis = Estudis::all();
        return view('afegiralumne', compact('user','estudis'));
    }

    public function afegiralumnepost(Request $request){

        $user = Auth::user();

        /*$request->validate([
            //el campo file es obligatorio, debe ser extension pdf xlx o csv, tamaño maximo 2MB
            'file' => 'required|mimes:pdf|max:2048',
        ]);

        //nombre del fichero sacado a aprtir del time
        $fileName = 'cvalumne'.$request->id.'.'.$request->cv->extension();

        $request->cv->move(public_path('uploads'), $fileName);*/

        $alumne = new Alumnes();
        $alumne->nomAlumne=$request->nom;
        $alumne->CognomAlumne=$request->cognom;
        $alumne->DNI=$request->dni;
        $alumne->Curs=$request->curs;
        $alumne->Cicle=$request->cicle;
        $alumne->Telefon=$request->telefon;
        $alumne->Correu=$request->correu;
        $alumne->CognomAlumne=$request->cognom;
        //$alumne->CV=$fileName;
        $alumne->save();
        return redirect('/alumnes/');
    }

    public function editaralumne($idAlumne){
        $user = Auth::user();
        $estudis = Estudis::all();
        $alumne = Alumnes::findOrFail($idAlumne);
        return view('editaralumnes', compact('alumne','user','estudis'));
    }

    public function editaralumnepost(Request $request){
        /*$request->validate([
            //el campo file es obligatorio, debe ser extension pdf xlx o csv, tamaño maximo 2MB
            'file' => 'required|mimes:pdf|max:2048',
        ]);*/

        //nombre del fichero
        //$fileName = 'cvalumne'.$request->id.'.'.$request->cv->extension();

        //$request->cv->move(public_path('uploads'), $fileName);

        $alumne= Alumnes::findOrFail($request->id);
        $alumne->nomAlumne=$request->nom;
        $alumne->CognomAlumne=$request->cognom;
        $alumne->DNI=$request->dni;
        $alumne->Curs=$request->curs;
        $alumne->Cicle=$request->cicle;
        $alumne->Telefon=$request->telefon;
        $alumne->Correu=$request->correu;
        $alumne->CognomAlumne=$request->cognom;
        //$alumne->CV=$fileName;
        $alumne->save();
        return redirect('/alumnes');

    }

    public function afegirempresa(){
        $user = Auth::user();
        if(!$user->coordinador) {
            return "No ets coordinador!";
        }else {
            return view('afegirempresa', compact('user'));
        }
    }

    public function afegirempresapost(Request $request){
        $empresa = new Empreses();
        $empresa->nom=$request->nom;
        $empresa->adreça=$request->adresa;
        $empresa->telefon=$request->telefon;
        $empresa->correu=$request->correu;
        $empresa->save();
        return redirect('/empresa/');
    }

    public function editarfitxa(){
        $user = Auth::user();
        $estudis = Estudis::all();
        return view('fitxausuari', compact('user','estudis'));
    }

    public function editarfitxapost(Request $request){

        $user = Auth::user();
        $user->name=$request->nom;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->grup=$request->grup;
        $user->save();
        return redirect('/fitxa');

    }

    public function editaroferta($idOferta){
        $user = Auth::user();
        $empreses = Empreses::all();
        $estudis = Estudis::all();
        $oferta = Ofertes::findOrFail($idOferta);
        return view('editaroferta', compact('user','estudis','oferta','empreses'));
    }

    public function editarofertapost(Request $request){

        $oferta = Ofertes::findOrFail($request->id);
        $oferta->descripcio=$request->descripcio;
        $oferta->vacants=$request->vacants;
        $oferta->curs=$request->curs;
        $oferta->nomContacte=$request->nomcontacte;
        $oferta->cognomsContacte=$request->cognomscontacte;
        $oferta->correuContacte=$request->correucontacte;
        $oferta->idEmpresa=$request->empresa;
        $oferta->idCicle=$request->cicle;
        $oferta->save();
        return redirect('/empresa/oferta');

    }
}
