<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortailController extends Controller
{
    //
    public function portail(){
        
        return view('portails.index');
    }
  
}
