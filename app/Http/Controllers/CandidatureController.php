<?php

namespace App\Http\Controllers;

use App\Mail\Notification;
use App\Models\Candidature;
use App\Models\Formation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Notifications\candidatureNotification;

class CandidatureController extends Controller
{
    /**
     * Afficher le formulaire de candidature pour une formation spécifique.
     *
     * @param int $id L'identifiant de la formation.
     * @return \Illuminate\View\View
     */
    public function formulaireCand($id) {
        $formation = Formation::find($id);
        return view('candidatures.candidature', compact('formation'));
    }

    /**
     * Soumettre une candidature.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postuler(Request $request)
    {
        $user = Auth::user(); // Récupérer l'utilisateur actuellement connecté

        // Valider les données de la demande
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'formation_id' => 'required|exists:formations,id',
            'cv' => 'required|file|mimes:pdf,doc,docx,png,jpeg|max:12048',
            'biographie' => 'required|string',
            'motivations' => 'required|string',
        ]);

        // Vérifier si un fichier CV est présent et le stocker
        if ($request->hasFile('cv')) {
            $file = $request->file('cv');
            $path = $file->store('documents', 'public');

            // Créer une nouvelle candidature
            Candidature::create([
                'user_id' => $request->input('user_id'),
                'formation_id' => $request->input('formation_id'),
                'cv_path' => $path,
                'biographie' => $request->input('biographie'),
                'motivations' => $request->input('motivations'),
                'status' => 'En attente',
            ]);

            // Rediriger vers la liste des candidatures avec un message de succès
            return redirect()->route('mes.candidatures')->with('message', 'Candidature soumise avec succès.');
        }

        // Rediriger en arrière avec un message d'erreur si le CV n'a pas été téléchargé correctement
        return redirect()->back()->withErrors(['cv' => 'Le fichier n\'a pas été téléchargé correctement.']);
    }

    /**
     * Accepter une candidature.
     *
     * @param int $id L'identifiant de la candidature.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function accepter($id)
    {
        $candidature = Candidature::findOrFail($id);
        $candidature->update(['status' => 'accepter']);

        // Notifier l'utilisateur de l'acceptation de sa candidature
        $user = $candidature->user;
        $user->notify(new candidatureNotification());

        return redirect()->back()->with('message', 'Candidature acceptée avec succès.');
    }

    /**
     * Rejeter une candidature.
     *
     * @param int $id L'identifiant de la candidature.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function rejeter($id)
    {
        $candidature = Candidature::findOrFail($id);
        $candidature->update(['status' => 'Rejetée']);
        return redirect()->back()->with('message', 'Candidature rejetée avec succès.');
    }

    /**
     * Afficher la liste des candidatures de l'utilisateur connecté.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $user_id = Auth::id(); // Récupérer l'identifiant de l'utilisateur connecté
        $candidatures = Candidature::where('user_id', $user_id)->with('formation')->get(); // Récupérer les candidatures de l'utilisateur connecté
        return view('candidatures.listecandidat', compact('candidatures')); // Retourner la vue avec les candidatures
    }

    /**
     * Supprimer une candidature.
     *
     * @param int $id L'identifiant de la candidature.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $candidature = Candidature::findOrFail($id);
        $candidature->delete();
        return redirect()->back()->with('message', 'Candidature supprimée avec succès.');
    }

    /**
     * Afficher les candidatures d'un utilisateur spécifique.
     *
     * @param int $id L'identifiant de l'utilisateur.
     * @return \Illuminate\View\View
     */
    public function affichercandid($id)
    {
        $candidatures = User::find($id)->candidatures()->with('formation')->get();
        return view('dashbord.candidature', compact('candidatures'));
    }

    /**
     * Afficher la liste des candidatures de l'utilisateur actuellement connecté.
     *
     * @return \Illuminate\View\View
     */
    public function listeCandidatures()
    {
        $user = Auth::user(); // Récupérer l'utilisateur actuellement connecté
        $candidatures = Candidature::where('user_id', $user->id)->with('formation')->get(); // Récupérer les candidatures de l'utilisateur connecté

        return view('candidatDashboard.listeCandidature', compact('candidatures', 'user')); // Retourner la vue avec les candidatures et les informations de l'utilisateur
    }
}
