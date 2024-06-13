<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Candidature;

use Illuminate\Http\Request;
use App\Models\CandidatureFormation;

class CandidatureController extends Controller
{
    //
    public function formulaireCand(){
        return view('candidatures.candidature');
    }
public function postuler(Request $request) {
    $file = $request->file('cv');
    if ($file === null) {
        return redirect()->back()->with('error', 'Aucun fichier téléversé.');
    }
    $filename = time() . '_' . $file->getClientOriginalName();
    $file->move(public_path(), $filename);
    Candidature::create($request->all());
    return redirect()->route('fichiers.index');
}

    public function index() {
        $candidatures = Candidature::all();
        $users = User::all();

        return view('candidatures.infocandid', compact('candidatures','users'));

    }
    public function afficher(){
        $users=User::all();
        return view('Candidats.afficher',compact('users'));
    }
    
    
    
}
