<?php

namespace App\Http\Controllers;

use App\Models\Candidature;
use Illuminate\Http\Request;
use App\Models\CandidatureFormation;

class CandidatureController extends Controller
{
    //
    public function formulaireCand(){
        return view('candidatures.candidature');
    }
    public function postuler(Request $request): string {
        // Valider le fichier
        // $request->validate([
        //     'file_upload' => 'required|file|mimes:pdf,doc,docx|max:2048',
        // ]);
    
        // Récupérer le fichier
        $file = $request->file('cv');
        
        // Vérifier si le fichier est bien présent
        if ($file === null) {
            return "Aucun fichier téléversé.";
        }
    
        // Stocker le fichier
        $path = $file->store('public');
    
        // Créer une nouvelle candidature
        Candidature::create($request->all());
    $path_cv = str_replace('public',$path);
        return $path_cv;
    }
    
}
