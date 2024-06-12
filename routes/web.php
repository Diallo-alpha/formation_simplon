<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortailController;

Route::get('/',[PortailController::class,'portail'] );