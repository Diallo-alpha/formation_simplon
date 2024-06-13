<?php

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortailController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\CandidatDuController;

Route::get('/',[PortailController::class,'portail'] );

use App\Http\Controllers\CandidatureController;
use App\Http\Controllers\CandidatureFormationController;

//route pour formations
Route::get('/', [FormationController::class, 'listeFormation'])->name('formation.liste');
Route::get('/formations/ajouter', [FormationController::class, 'afficherFormAjouterFormation'])->name('formulaire.ajout.formation');
Route::post('/formations', [FormationController::class, 'traitementAjouFormation'])->name('formations.traitement');
//modifier une formation
Route::get('/formation/{id}', [FormationController::class, 'modifierFormation'])->name('form.modification.formation');
Route::put('/formations/{id}', [FormationController::class, 'traitementModiifier'])->name('miseAjourTraitement');
Route::delete('/formation/{id}', [FormationController::class, 'supprimmerFormation'])->name('formation.supprimer');
Route::get('/offre',[FormationController::class, 'listeOffre'])->name('liste.offre');
// route pour le formulaire pour l'inscription des candidat
Route::get('candidat_inscription',[CandidatDuController::class,'inscription']);
Route::post('sauvegarde_candidat',[CandidatDuController::class,'sauvegarde']);
Route::get('afficher_candidat',[CandidatDuController::class,'afficher']);
// details de la formation
Route::get('detail', [FormationController::class,'detailsformation'])->name('details.formation');//ça marche
Route::delete('/supprimmer_candidat/{id}', [CandidatDuController::class, 'supprimer_candidat'])->name('supprimer.candiate');
// gestion du dashbord
Route::get('detail/{id}', [FormationController::class,'detailsformation']);
