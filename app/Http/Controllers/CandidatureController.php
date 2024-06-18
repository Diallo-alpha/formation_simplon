<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Models\Formation;
use App\Mail\Notification;

use App\Models\Candidature;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\CandidatureFormation;
// use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use App\Notifications\candidatureNotification;



use \Illuminate\Http\RedirectResponse;

class CandidatureController extends Controller
{
   

    public function formulaireCand($id) {
        $formation = Formation::find($id);
        return view('candidatures.candidature', compact('formation'));
    }



    public function offreform()
    {
        // Récupérer toutes les formations de la base de données
        $formations = Formation::all();
        $users = Auth::user();
        // Retourner la vue avec les données des formations
        return view('candidatDashboard.offreform', compact('formations','users'));
    }
    public function formulaireCandAuth($id)
    {
        $formations = Formation::findOrFail($id);
        return view('candidatures.candidature', compact('formations'));
    }
    /**
     * Soumettre une candidature.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function postuler(Request $request)
    {
            // Vérifier si l'utilisateur est connecté
    if (!Auth::check()) {
        return redirect()->route('auth.getLogin')->with('error', 'Vous devez être connecté pour postuler.');
    }

        $user = Auth::user(); // Récupérer l'utilisateur actuellement connecté

        // Valider les données de la demande
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'formation_id' => 'required|exists:formations,id',
            'cv' => 'required|file|mimes:pdf,doc,docx,png,jpeg|max:12048',
            'biographie' => 'required|string',
            'motivations' => 'required|string',
        ]);
        $user_id = $request->input('user_id');
        $formation_id = $request->input('formation_id');

        //verifier si l'utilisateur a déja postulé
        $verifierCandidature = Candidature::where('user_id', $user_id)
                                          ->where('formation_id', $formation_id)
                                          ->first();


        if ($verifierCandidature) {
            return redirect()->back()->withErrors(['error' => 'Vous avez déjà postulé pour cette formation.']);
        }
        // Vérifier si un fichier CV est présent et le stocker

        if ($request->hasFile('cv')) {
            $file = $request->file('cv');
            $path = $file->store('documents', 'public');

            Candidature::create([
                'user_id' => $request->input('user_id'),
                'formation_id' => $request->input('formation_id'),
                'cv_path' => $path,
                'biographie' => $request->input('biographie'),
                'motivations' => $request->input('motivations'),
                'status' => 'En attente',
            ]);


            return redirect()->route('mes.candidatures')->with('message', 'Candidature soumise avec succès.');
        } else {
            // Rediriger en arrière avec un message d'erreur si le CV n'a pas été téléchargé correctement
            return redirect()->back()->withErrors(['cv' => 'Le fichier n\'a pas été téléchargé correctement.']);
        }


    }

   
    public function accepter($id)
    {
        $candidature = Candidature::findOrFail($id);
        $candidature->update(['status' => 'accepter']);

        // Notifier l'utilisateur de l'acceptation de sa candidature
        // $user = $candidature->user;
        // $user->notify(new candidatureNotification());

        return redirect()->back()->with('message', 'Candidature acceptée avec succès.');
    }


    public function rejeter($id)
    {
        $candidature = Candidature::findOrFail($id);
        $candidature->update(['status' => 'Rejetée']);
        return redirect()->back()->with('message', 'Candidature rejetée avec succès.');
    }


    public function index()
    {
        $user_id = Auth::id(); // Récupérer l'identifiant de l'utilisateur connecté
        $candidatures = Candidature::where('user_id', $user_id)->with('formation')->get(); // Récupérer les candidatures de l'utilisateur connecté
        return view('candidatures.listecandidat', compact('candidatures')); // Retourner la vue avec les candidatures
    }


    public function destroy($id)
    {
        $candidature = Candidature::findOrFail($id);
        $candidature->delete();
        return redirect()->back()->with('message', 'Candidature supprimée avec succès.');
    }


    public function affichercandid($id)
    {
        $user = User::find($id);
        $candidatures = $user->candidatures()->with('formation')->get();
        return view('dashbord.candidature', compact('candidatures'));
    }


    public function listeCandidatures()
    {
        
        $user = Auth::user();
        $candidatures = Candidature::where('user_id', $user->id)->with('formation')->get();

        return view('candidatDashboard.listeCandidature', compact('candidatures', 'user'));
    }
    public function detailcandidature($id)
    {
        $user = Auth::user();
        $candidatures = Candidature::find($id);

        return view('candidatures.infocandid', compact('candidatures', 'user'));
    }
    public function afficher($path)
    {
        $path = 'public/' . $path; 
        if (!Storage::exists($path)) {
            abort(404, 'Fichier non trouvé');
        }

        return Storage::download($path);
    }
}

