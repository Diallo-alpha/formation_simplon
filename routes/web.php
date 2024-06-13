<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PortailController;
use App\Http\Controllers\FormationController;

Route::get('/',[PortailController::class,'portail'] );
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

Route::get('afficher_candidat',[CandidatDuController::class,'afficher'])->name('candidate');


// details de la formation
Route::get('detail', [FormationController::class,'detailsformation']);
//routes qui permet de faire la candiadture
Route::get('formulaire_postuler',[CandidatureController::class,'formulaireCand']);
Route::post('postuler',[CandidatureController::class,'postuler'])->name('postuler');
Route::get('afficherDetailsCandidature',[CandidatureController::class,'index'])->name('fichiers.index');
Route::get('ListeCandidates',[AuthController::class,'listecandature']);
//rejetter la candidature
Route::delete('candidatSup/{id}',[CandidatureController::class,'supprimercand'])->name('rejettercadidature');

Route::get('afficher_candidat',[CandidatDuController::class,'afficher']);
// details de la formation
Route::get('detail', [FormationController::class,'detailsformation'])->name('details.formation');//ça marche
Route::delete('/supprimmer_candidat/{id}', [CandidatDuController::class, 'supprimer_candidat'])->name('supprimer.candiate');
// gestion du dashbord
Route::get('formationAdsbord',[FormationController::class,'formation_dashbord']);
Route::get('detail/{id}', [FormationController::class,'detailsformation']);
