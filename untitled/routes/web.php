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
    return view('welcome');
});

//mostrar empreses
Route::get('/empresa/',[ControllerApp::class,'empresa']);

//afegir una empresa
Route::get('/empresa/add/{nomEmpresa}/',[ControllerApp::class,'addEmpresa']);

//mostrar ofertes
Route::get('/empresa/oferta/',[ControllerApp::class,'oferta']);

//afegir oferta
Route::get('/empresa/oferta/add/{idEmpresa}',[ControllerApp::class,'addOferta']);



