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
    return redirect('/');
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
    public function supprimercand($id){
        $user = request('user_id');
        $candidature=Candidature::findOrFail($id);
        if ($candidature->user_id !== $user->id) {
            return redirect()->back()->withErrors(['message' => 'Non autorisé à supprimer cette candidature.']);
        }
      
        return redirect()->back();
    }
  
    
}
