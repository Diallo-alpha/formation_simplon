<?php

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PortailController;
use App\Http\Controllers\FormationController;

Route::get('/',[PortailController::class,'portail'] );

use App\Http\Controllers\CandidatDuController;
use App\Http\Controllers\CandidatureController;
use App\Http\Controllers\CandidatureFormationController;

//route pour formations
Route::get('/liste/formation', [FormationController::class, 'listeFormation'])->name('formation.liste');
Route::get('/formations/ajouter', [FormationController::class, 'afficherFormAjouterFormation'])->name('formulaire.ajout.formation');
Route::post('/formations', [FormationController::class, 'traitementAjouFormation'])->name('formations.traitement');
//modifier une formation
Route::get('/formation/{id}', [FormationController::class, 'modifierFormation'])->name('form.modification.formation');
Route::put('/formations/{id}', [FormationController::class, 'traitementModiifier'])->name('miseAjourTraitement');
Route::delete('/formation/{id}', [FormationController::class, 'supprimmerFormation'])->name('formation.supprimer');


// Route::get('/', function () {
//     return view('formations.ListeFormation');
// });

Route::get('/candidature',[CandidatureController ::class,'formulaireCand']);
Route::post('/candidature',[CandidatureController ::class,'postuler'])->name('postuler');
Route::get('/info',[CandidatureController ::class,'affichercv']);
Route::get('/fichiers', [CandidatureController::class, 'index'])->name('fichiers.index');

Route::get('/offre', function()
    {
        return view('portails.offre');
    }
);

// route pour le formulaire pour l'inscription des candidat
Route::get('candidat_inscription',[CandidatDuController::class,'inscription']);
Route::post('sauvegarde_candidat',[CandidatDuController::class,'sauvegarde']);
Route::get('afficher_candidat',[CandidatDuController::class,'afficher']);


// details de la formation
Route::get('detail', [FormationController::class,'detailsformation']);

//AUTHENTIFICATION DU CANDIDAT
//la route pour la page d'inscription
 Route::get('/inscription_candidat',[AuthController::class,'inscription_candidat']);
 //la route pour sauvegarder un enregistrement
 Route::post('/enregistre_candidat',[AuthController::class,'enregistre_candidat']);
// la route pour la connexion
 Route::get('/connexion_candidat',[Authcontroller::class,'connexion_candidat']);
 // la route pour l'authentification
 Route::post('/auth_candidat',[AuthController::class,'auth_candidat']);
 // la route pour la deconnexion

