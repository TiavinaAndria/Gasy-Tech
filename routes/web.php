<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/acceuil',[EtudiantController::class ,'acceuil']);
Route::get('/information',[EtudiantController::class,'information']);
Route::get('/ListeEtudiant',[EtudiantController::class,'ListeEtudiant']);
Route::get('/gestionEcolage',[EtudiantController::class,'gestionEcolage']);
Route::get('/ajouterInformateur',[EtudiantController::class,'ajouterInformateur']);
Route::post('/ajouterInformateur/Traitement',[EtudiantController::class,'ajouterInformateur_Traitement']);