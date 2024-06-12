<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortailController;
use App\Http\Controllers\CandidatureController;
use App\Http\Controllers\CandidatureFormationController;


Route::get('/',[PortailController::class,'portail'] );

Route::get('/', function () {
    return view('formations.ListeFormation');
});
Route::get('/candidature',[CandidatureController ::class,'formulaireCand']);
Route::post('/candidature',[CandidatureController ::class,'postuler'])->name('postuler');
