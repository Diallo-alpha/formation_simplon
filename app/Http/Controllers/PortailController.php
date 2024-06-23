<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PortailController extends Controller
{
    //
    public function portail(){

        return view('portails.index');
    }

    public function base()
        {
            return view('layouts.base');
        }
        public function candidat_profil($id){
            $id = Auth::id();
            $users = User::find($id);
            return view('layouts.base', compact('users'));
        }

}
