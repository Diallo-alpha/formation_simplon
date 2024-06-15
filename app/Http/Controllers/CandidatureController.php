<?php

namespace App\Http\Controllers;
use App\Mail\Notification;

use App\Http\Controllers\Controller;
use App\Models\Candidature;

use App\Models\CandidatureFormation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Notifications\candidatureNotification;

class CandidatureController extends Controller
{
    //
    public function formulaireCand(){
        return view('candidatures.candidature');
    }

        public function postuler(Request $request)
        {
            $request->validate([
                'user_id' => 'required|exists:users,id',
                'formation_id' => 'required|exists:formations,id',
                'cv' => 'required|file|mimes:pdf,doc,docx,png,jpeg|max:12048',
                'biographie' => 'required|string',
                'motivations' => 'required|string',
            ]);

            if ($request->hasFile('cv')) {
                $file = $request->file('cv');
                $path = $file->store('public/documents');

                Candidature::create([
                    'user_id' => $request->input('user_id'),
                    'formation_id' => $request->input('formation_id'),
                    'cv_path' => $path,
                    'biographie' => $request->input('biographie'),
                    'motivations' => $request->input('motivations'),
                    'status' => 'En attente',
                ]);

                return redirect()->route('candidatures.index')->with('message', 'Candidature soumise avec succès.');
            }

            return redirect()->back()->withErrors(['cv' => 'Le fichier n\'a pas été téléchargé correctement.']);
        }
        public function afficher($path)
{
    $filePath = 'public/' . $path;

    if (Storage::exists($filePath)) {
        return Storage::download($filePath);
    }

    return abort(404, 'Fichier non trouvé');
}

        public function accepter($id)
        {
            $candidature = Candidature::findOrFail($id);
            $candidature->update(['status' => 'accepter']);
            // recherche du user a qui appartient la candidature
            $user = $candidature->user;
            $user->notify(new candidatureNotification());

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
            $candidatures = Candidature::with('user', 'formation')->get();
            return view('candidatures.listecandidat', compact('candidatures'));
        }

        public function destroy($id)
        {
            $candidature = Candidature::findOrFail($id);
            $candidature->delete();
            return redirect()->back()->with('message', 'Candidature supprimée avec succès.');
        }



    public function affichercandid($id){

        $candidatures=User::find($id);
        return view('dashbord.candidature',compact('candidatures'));
    }

    public function candidatureListe()
    {
        $user = Auth::user(); // Utilisez l'utilisateur actuellement connecté
        $candidatures = Candidature::where('user_id', $user->id)->with('formation')->get();

        return view('candidatDashboard.listeCandidature', compact('candidatures', 'user'));
    }

}

