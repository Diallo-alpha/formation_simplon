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
  

    // Récupérer le fichier
    $file = $request->file('cv');

    // Vérifier si le fichier est bien présent
    if ($file === null) {
        return redirect()->back()->with('error', 'Aucun fichier téléversé.');
    }

    // Stocker le fichier dans le répertoire public
    $filename = time() . '_' . $file->getClientOriginalName();
    $file->move(public_path(), $filename);

    // Créer une nouvelle candidature avec le chemin du fichier
    Candidature::create($request->all());

    // Rediriger vers une vue pour afficher tous les fichiers
    return redirect()->route('fichiers.index');
}

    public function index() {
        $candidatures = Candidature::all();
        $users = User::all();

        return view('candidatures.infocandid', compact('candidatures','users'));

    }
    
    
    
}
