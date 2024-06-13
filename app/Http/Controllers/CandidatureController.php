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
public function postuler(Request $request) {
    $request->validate([
        'user_id' => 'required|exists:users,id',
        'formation_id' => 'required|exists:formations,id',
    ]);
    $userId = $request->input('user_id');
    $formationId = $request->input('formation_id');
    $user = User::findOrFail($userId);

    $formation = Formation::findOrFail($formationId);
    $user->formations()->attach($formationId);

    $file = $request->file('cv');
    if ($file === null) {
        return redirect()->back()->with('error', 'Aucun fichier téléversé.');
    }
    $filename = time() . '_' . $file->getClientOriginalName();
    $file->move(public_path(), $filename);
    Candidature::create($request->all());

    return redirect()->back()->with('success', 'Candidature ajoutée avec succès.');
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
