<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ParticipationController;
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
    return view('connexion.login');
});

Route::post('/profile', [HomeController::class, 'connection'])->name('connection');

Route::get('/profile{idUserG}', [HomeController::class, 'acceuil'])->name('acceuil');

Route::get('/profile', [EventController::class, 'connection']);

Route::get('/signin', [HomeController::class, 'inscription'])->name('inscription');

Route::post('/signin', [HomeController::class, 'getInscription']);

Route::get('/deconnexion', [HomeController::class, 'deconnexion']);

Route::get('/newevenement{idUserG}', [EventController::class, 'newevement'])->name('newevement');
Route::post('/CreerEventPart', [EventController::class, 'CreerEventPart'])->name('CreerEventPart');
Route::get('/CreerEventPart', [EventController::class, 'CreerEventPart'])->name('CreerEventPart');

Route::get('/evenements', [EventController::class, 'listevenements']);

Route::get('/listeEventsRecus{idUserG}', [ParticipationController::class, 'listeEventsRecus'])->name('listeEventsRecus');

  //  Route::get('/profile', [ParticipationController::class, 'listeEventsRecus'])->name('profilelisteEventsRecus');

Route::post('/detailEvenement', [EventController::class, 'detailEvenement'])->name('detailEvenement');

Route::post('/participationAccepte', [ParticipationController::class, 'participationAccepte'])->name('participationAccepte');
//route ajouté
    Route::get('/listeMescontributions{idUserG}', [ParticipationController::class, 'listeMescontributions'])->name('listeMescontributions');
    Route::get('/listeMesevenementorganise{idUserG}', [EventController::class, 'listeMesevenementorganise'])->name('listeMesevenementorganise');
Route::get('/etatRefuser', [ParticipationController::class, 'participationRefuse'])->name('participationRefuse');

