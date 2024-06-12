<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormationController;

//route pour formations
Route::get('/liste/formation', [FormationController::class, 'listeFormation'])->name('formation.liste');
Route::get('/formations/ajouter', [FormationController::class, 'afficherFormAjouterFormation'])->name('formulaire.ajout.formation');
Route::post('/formations', [FormationController::class, 'traitementAjouFormation'])->name('formations.traitement');
//modifier une formation
Route::get('/formation/{id}', [FormationController::class, 'modifierFormation'])->name('form.modification.formation');
Route::put('/formations/{id}', [FormationController::class, 'traitementModiifier'])->name('miseAjourTraitement');
Route::delete('/formation/{id}', [FormationController::class, 'supprimmerFormation'])->name('formation.supprimer');

Route::get('/', function () {
    return view('formations.ListeFormation');
});
// Route::get('/offre', function()
//     {   
//         return view('portails.offre');
//     }
// );


// route pour le formulaire pour l'inscription des candidat
Route::get('candidat_inscription',[CandidatDuController::class,'inscription']);
Route::post('sauvegarde_candidat',[CandidatDuController::class,'sauvegarde']);
Route::get('afficher_candidat',[CandidatDuController::class,'afficher']);
