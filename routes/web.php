<?php

use App\Http\Controllers\CandidatDuController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('formations.ListeFormation');
});
Route::get('/offre', function()
    {
        return view('portails.offre');
    }
);

// route pour le formulaire pour l'inscription des candidat
Route::get('candidat_inscription',[CandidatDuController::class,'inscription']);
Route::post('sauvegarde_candidat',[CandidatDuController::class,'sauvegarde']);
Route::get('afficher_candidat',[CandidatDuController::class,'afficher']);