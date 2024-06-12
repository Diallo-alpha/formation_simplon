<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('formations.ListeFormation');
});
Route::get('/offre', function()
    {
        return view('portails.offre');
    }
);
