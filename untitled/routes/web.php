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
//Formulari edit oferta
Route::get('/empresa/oferta/edit/{idAlumne}', [ControllerApp::class,'editaroferta']);
//Acció edit oferta
Route::post('/empresa/oferta/edit', [ControllerApp::class,'editarofertapost']);
//post de la oferta desde la vista
Route::post('/novaOferta',[ControllerApp::class,'afegirOfertaVista']);

//afegir alumne(le falta algo de testeo para que funcione)
//Route::get('/alumne/add/',[ControllerApp::class,'addAlumne']);

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
Route::get('/alumnes/',[ControllerApp::class,'getalumnes'])->name('alumnes');

//Formulari agregar alumne
Route::get('/alumne/add', [ControllerApp::class,'afegiralumne']);
//Acció afegir alumne
Route::post('/alumne/add', [ControllerApp::class,'afegiralumnepost']);

//Formulari edit alumne
Route::get('/alumne/edit/{idAlumne}', [ControllerApp::class,'editaralumne']);
//Acció afegir alumne
Route::post('/alumne/edit', [ControllerApp::class,'editaralumnepost']);

//Formulari afegir una empresa
Route::get('/empresa/add',[ControllerApp::class,'afegirempresa']);
//accio afegir una empresa
Route::post('/empresa/add',[ControllerApp::class,'afegirempresapost']);


//Formulari editar fitxa
Route::get('/fitxa',[ControllerApp::class,'editarfitxa']);
//accio editar fitxa
Route::post('/fitxa',[ControllerApp::class,'editarfitxapost']);

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
