<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PortailController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\CandidatDuController;
use App\Http\Controllers\CandidatureController;
use App\Http\Controllers\OffreFormationController;
use App\Http\Controllers\CandidatureFormationController;

Route::get('/',[PortailController::class,'portail'] );

// Route::get('/',[PortailController::class,'portail'] );

//route pour formations
Route::get('/listeFormation', [FormationController::class, 'listeFormation'])->name('formation.liste');
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
// details de la formation
Route::get('detail', [FormationController::class,'detailsformation']);
//routes qui permet de faire la candiadture
Route::get('formulaire_postuler',[CandidatureController::class,'formulaireCand']);
Route::post('postuler',[CandidatureController::class,'postuler'])->name('postuler');
Route::get('afficherDetailsCandidature/{id}',[CandidatureController::class,'index'])->name('fichiers.index');
Route::get('ListeCandidates',[AuthController::class,'listecandature']);//marche pas
//rejetter la candidature
Route::delete('candidatSup/{id}',[CandidatureController::class,'supprimercand'])->name('rejettercadidature');
// Route::get('afficher_candidat',[CandidatureController::class,'afficher']);
// details de la formation
// Route::get('detail', [FormationController::class,'detailsformation'])->name('details.formation');ça marche
Route::delete('/supprimmer_candidat/{id}', [CandidatDuController::class, 'supprimer_candidat'])->name('supprimer.candiate');
// gestion du dashbord
Route::get('formationAdsbord',[FormationController::class,'formation_dashbord']);
Route::get('detail/{id}', [FormationController::class,'detailsformation']);
Route::get('afficherFOR/{id}',[CandidatureController::class,'affichercandid']);
Route::get('/formations/afficher/{id}', [FormationController::class, 'afficher'])->name('candidatureFormation');
// offre de formation
// Route::get('offreform',[OffreFormationController::class,'offredetail']);
Route::get('offreform', [OffreFormationController::class, 'offreform']);

// Route::get('/candidature/dasboard', function()
// {
//     return view('candidatDashboard.listeCandidature');
// });
//Authentification
Route::get('/login', [AuthController::class, 'getLogin'])->name('auth.getLogin');
Route::post('/login', [AuthController::class, 'postLogin'])->name('auth.postLogin');
Route::get('/register', [AuthController::class, 'getRegister'])->name('auth.getRegister');
Route::post('/register', [AuthController::class, 'postRegister'])->name('auth.postRegister');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');

//candidature d'un seul elements
Route::get('/mes-candidatures', [CandidatureFormationController::class, 'candidatureListe']);
