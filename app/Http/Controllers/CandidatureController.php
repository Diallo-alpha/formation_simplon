<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Formation;

use App\Models\Candidature;
use Illuminate\Http\Request;
use App\Models\CandidatureFormation;

class CandidatureController extends Controller
{
    //
    public function formulaireCand(){
        return view('candidatures.candidature');
    }
    public function postuler(Request $request)
    {
        // Valider les champs de la requête
        // $request->validate([
        //     'user_id' => 'required|exists:users,id',
        // 'formation_id' => 'required|exists:formations,id',
        // 'cv' => 'required|file|mimes:pdf,doc,docx|max:2048', // Validation du fichier
        // 'biographie' => 'required|string',
        // 'motivations' => 'required|string',// Validation du fichier
        // ]);
    
        $userId = $request->input('user_id');
        $formationId = $request->input('formation_id');
        $user = User::findOrFail($userId);
        $formation = Formation::findOrFail($formationId);
    
        // Attacher la formation à l'utilisateur
        $user->formations()->attach($formationId);
    
        // Gérer le fichier téléchargé
        if ($request->hasFile('cv')) {
            $file = $request->file('cv');
            $path = $file->store('public'); // Enregistrer le fichier dans 'public/documents'
    
            // Créer la candidature avec les autres champs du formulaire
            Candidature::create([
                'user_id' => $userId,
            'formation_id' => $formationId,
            'cv' => $path,
            'biographie' => $request->input('biographie'),
            'motivations' => $request->input('motivations')
            ]);
            return redirect()->route('fichier.afficher', ['path' => $path]);
        }
    
        return redirect()->back()->withErrors(['cv' => 'Le fichier n\'a pas été téléchargé correctement.']);
    }
    public function afficher($path)
    {
        $filePath = storage_path('app/public/' . $path);
    
        if (!file_exists($filePath)) {
            return redirect()->back()->withErrors(['message' => 'Le fichier n\'existe pas ou n\'est pas lisible.']);
        }
    
        return response()->file($filePath);
    }
        


    public function index($id) {
        $candidatures = Candidature::find($id);
        $users = User::find($id);

        return view('candidatures.infocandid', compact('candidatures','users'));

    }
    public function affichercandid($id){
        
        $candidatures=User::find($id);
        return view('dashbord.candidature',compact('candidatures'));
    }
   
  
    
}
