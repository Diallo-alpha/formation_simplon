<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PortailController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\CandidatDuController;
use App\Http\Controllers\CandidatureController;
// use App\Http\Controllers\OffreFormationController;
use App\Http\Controllers\CandidatureFormationController;

                                     // Route pour tous le monde
Route::get('/', [PortailController::class, 'portail'])->name('index');
Route::get('/offre', [FormationController::class, 'listeOffre'])->name('liste.offre'); // Liste des offres de formation
Route::get('detail/{id}', [FormationController::class, 'detailsformation'])->name('detail.formation'); // Détails d'une formation
                                 // Authentification
Route::get('/login', [AuthController::class, 'getLogin'])->name('login'); // Formulaire de login
Route::post('/login', [AuthController::class, 'postLogin'])->name('auth.postLogin'); // Traitement du login
Route::get('/register', [AuthController::class, 'getRegister'])->name('auth.getRegister'); // Formulaire d'inscription
Route::post('/register', [AuthController::class, 'postRegister'])->name('auth.postRegister'); // Traitement de l'inscription
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::get('notif', [FormationController::class, 'notify']);

                            ///middleware pour le personnel
Route::middleware(['auth', 'role:personnel'])->group(function ()
    {
        Route::get('/formations/ajouter', [FormationController::class, 'afficherFormAjouterFormation'])->name('formulaire.ajout.formation');
        Route::post('/formations', [FormationController::class, 'traitementAjouFormation'])->name('formations.traitement');
        Route::get('/formation/{id}', [FormationController::class, 'modifierFormation'])->name('form.modification.formation');
        Route::put('/formations/{id}', [FormationController::class, 'traitementModiifier'])->name('miseAjourTraitement');
        Route::delete('/formation/{id}', [FormationController::class, 'supprimmerFormation'])->name('formation.supprimer');
        Route::get('formationAdsbord', [FormationController::class, 'formation_dashbord'])->name('formation.personnel'); // Afficher le tableau de bord des formations
        Route::delete('/formation/{id}', [FormationController::class, 'supprimmerFormation'])->name('formation.supprimer'); // Supprimer une formation
        Route::get('afficherFOR/{id}', [CandidatureController::class, 'affichercandid'])->name('candidats.formation'); // Afficher les candidats pour une formation

        //candidature
        Route::get('afficherDetailsCandidature/{id}', [CandidatureController::class, 'index'])->name('fichiers.index'); // Afficher les détails d'une candidature
        Route::delete('candidature/{id}', [CandidatureController::class, 'destroy'])->name('candidatures.destroy'); // Supprimer une candidature
        Route::get('candidature/rejeter/{id}', [CandidatureController::class, 'rejeter'])->name('candidature.rejeter'); // Rejeter une candidature
        Route::get('candidature/accepter/{id}', [CandidatureController::class, 'accepter'])->name('candidature.accepter'); // Accepter une candidature
        Route::get('detailcandature/{id}',[CandidatureController::class,'detailcandidature'])->name('detail.candidature');
        Route::get('candidatures', [CandidatureController::class, 'index'])->name('candidatures.index'); // Liste des candidatures
        Route::delete('candidatSup/{id}', [CandidatureController::class, 'supprimercand'])->name('rejettercadidature'); // Rejeter une candidature
        Route::get('afficherDetailsCandidature/{id}', [CandidatureController::class, 'index'])->name('fichiers.index'); // Afficher les détails d'une candidature
        Route::delete('candidatSup/{id}', [CandidatureController::class, 'supprimercand'])->name('rejettercadidature'); // Rejeter une candidature
        Route::get('cadidate/{id}',[FormationController::class,'candidats'])->name('candidatureFormation');
        Route::get('/fichiers/{path}', [CandidatureController::class, 'afficher'])->where('path', '.*')->name('fichier.cv');
        Route::get('afficher_candidat',[CandidatDuController::class,'afficher']);


    });
                                //mddleware pour les candidats
Route::middleware(['auth', 'role:candidat'])->group(function ()
    {
        Route::get('/listeFormation', [FormationController::class, 'listeFormation'])->name('formation.liste'); // Liste des formations
        Route::delete('/supprimmer_candidat/{id}', [CandidatDuController::class, 'supprimer_candidat'])->name('supprimer.candiate'); // Supprimer un candidat

        Route::get('candidat_inscription', [CandidatDuController::class, 'inscription']); // Formulaire d'inscription des candidats
        Route::post('sauvegarde_candidat', [CandidatDuController::class, 'sauvegarde']); // Sauvegarder les informations du candidat
        Route::get('/candidat_profil/{id}', [CandidatDuController::class, 'candidat_profil'])->name('candidat_profil'); // Afficher le profil d'un candidat
        Route::get('/modif_profil', [CandidatDuController::class, 'modif_profil']); // Formulaire de modification du profil
        Route::post('/save_modif_profil/{id}', [CandidatDuController::class, 'save_modif_profil']); // Enregistrer les modifications du profil
        Route::get('formulaire_postuler/{id}', [CandidatureController::class, 'formulaireCandAuth'])->name('formulaire.candidature.auth'); // Formulaire de candidature authentifiée
        Route::post('postuler', [CandidatureController::class, 'postuler'])->name('postuler'); // Postuler à une formation
        Route::get('/mes-candidatures', [CandidatureController::class, 'listeCandidatures'])->name('mes.candidatures'); // Lister mes candidatures
        Route::get('offreform', [CandidatureController::class, 'offreform'])->name('liste.formation.candidat'); // Afficher l'offre de formation

    });


Route::get('notif', [FormationController::class, 'notify']);
//route base
Route::get('/layout', [PortailController::class, 'base'])->name('base.index');

