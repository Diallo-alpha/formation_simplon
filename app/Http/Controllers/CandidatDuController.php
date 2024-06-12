<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CandidatDuController extends Controller
{
    public function inscription(){
        return view('Candidats.inscription');
    }

    public function sauvegarde(Request $request){
        User::create($request->all());
        return redirect()->back()->with('status','vous etes ajoutes avec succes');
    }
    public function afficher(){
        $users=User::all();
        return view('Candidats.afficher',compact('users'));
    }

    public function supprimer_candidat($id){
        $user=User::find($id);
        $user->delete();
        return redirect()->back();
    }
}
