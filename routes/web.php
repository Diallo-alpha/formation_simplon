<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortailController;
use App\Http\Controllers\CandidatureController;
use App\Http\Controllers\CandidatureFormationController;
use Illuminate\Http\Request;

Route::get('/',[PortailController::class,'portail'] );

Route::get('/', function () {
    return view('formations.ListeFormation');
});
Route::get('/candidature',[CandidatureController ::class,'formulaireCand']);
Route::post('/candidature',[CandidatureController ::class,'postuler'])->name('postuler');
Route::get('/info',[CandidatureController ::class,'affichercv']);
Route::get('/fichiers', [CandidatureController::class, 'index'])->name('fichiers.index');
