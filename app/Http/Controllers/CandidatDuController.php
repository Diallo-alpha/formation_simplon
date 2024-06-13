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
// suppression des candidats
    public function supprimer_candidat($id){
        $user=User::find($id);
        $user->delete();
        return redirect()->back();
    }

    // affichage des candidats dans le dashbord
    public function candidat_dashbord(){
        $users=User::where('role','candidat')->get();
        return view('dashbord.candidat',compact('users'));

    } 
}
