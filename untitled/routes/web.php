<?php

use App\Http\Controllers\ControllerApp;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $user = Auth::user();
    if($user != null) {
        return redirect()->route('enviaments');
    } else {
        return view('auth.login');
    }
});

//mostrar empreses
Route::get('/empresa/',[ControllerApp::class,'empresa']);

//afegir una empresa
Route::get('/empresa/add/{nomEmpresa}/',[ControllerApp::class,'addEmpresa']);

//mostrar ofertes
Route::get('/empresa/oferta/',[ControllerApp::class,'oferta']);

//afegir oferta
Route::get('/empresa/oferta/add/{idEmpresa}',[ControllerApp::class,'addOferta']);
//afegir oferta desde la vista
Route::get('/empresa/oferta/VistaAdd/',[ControllerApp::class,'addOfertaVista']);
//post de la oferta desde la vista
Route::post('/novaOferta',[ControllerApp::class,'afegirOfertaVista']);

//afegir alumne(le falta algo de testeo para que funcione)
Route::get('/alumne/add/',[ControllerApp::class,'addAlumne']);

//modificar estat enviament
Route::get('/oferta/enviar/canviEstat/{idEnviament}/{Estat}',[ControllerApp::class,'modEstatEnviament']);

//Modificar vacants ofertes
Route::get('/empresa/tutor/oferta/{idOferta}/{numVacants}',[ControllerApp::class,'restaVacants']);

//ruta de edicion de empresas
Route::get('/empresa/edit/{idEmpresa}',[ControllerApp::class,'editaEmpresa']);
//post de esa edicion
Route::post('/novesDadesEmpresa',[ControllerApp::class,'cambiarDadesEmpresa']);

//Mostrar tots els enviaments
Route::get('/enviaments/',[ControllerApp::class,'enviaments'])->name('enviaments');

//Mostrar tots els alumnes
Route::get('/alumnes/',[ControllerApp::class,'getalumnes']);

//Formulari agregar alumne
Route::get('/afegiralumne/', function(){
   return view('afegiralumne');
});
//Acci?? afegir alumne
Route::post('/afegiralumne/', [ControllerApp::class,'afegiralumne']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('dashboard');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::patch('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::patch('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
