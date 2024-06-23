<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use App\Models\Formation;
use App\Models\Candidature;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function listeFormation()
    {
        $formations = Formation::all();
        return view('formations.ListeFormation', compact('formations'));
    }

    public function listeOffre()
    {
        $formations = Formation::all();
        return view('portails.offre', compact('formations'));
    }

    public function afficherFormAjouterFormation()
    {
        return view('formations.ajouterFormation');
    }
    public function traitementAjouFormation(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required |text',
            'date_expiration' => 'required|date',
            'image' => 'nullable|file|image|mimes:jpeg,png,jpg,gif|max:2048',
            'users_id' => 'nullable|exists:users,id',
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }

        Formation::create([
            'titre' => $request->titre,
            'description' => $request->description,
            'date_expiration' => $request->date_expiration,
            'image' => $imageName,
            'users_id' => $request->users_id,
        ]);

        return redirect()->route('formation.personnel')->with('success', 'Formation créée avec succès');
    }

    public function modifierFormation($id)
    {
        $formation = Formation::findOrFail($id);
        return view('formations.modifierFormation', compact('formation'));
    }

    public function traitementModiifier(Request $request, $id)
    {
        // Valider les données entrantes
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'date_expiration' => 'required|date',
            'image' => 'nullable|file|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Récupérer la formation par son id
        $formation = Formation::findOrFail($id);

        // Mettre à jour les champs de la formation
        $formation->titre = $request->titre;
        $formation->description = $request->description;
        $formation->date_expiration = $request->date_expiration;

        // Gestion de l'image
        if ($request->hasFile('image')) {
            // Supprimer l'ancienne image si elle existe
            if ($formation->image) {
                $oldImagePath = public_path('images') . '/' . $formation->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Enregistrer la nouvelle image
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $formation->image = $imageName;
        }

        // Sauvegarder les changements
        $formation->save();

        // Redirection avec message de succès
        return redirect()->route('formation.personnel')->with('success', 'Formation mise à jour avec succès.');
    }

    public function supprimmerFormation($id)
    {
        $formation = Formation::findOrFail($id);
        $formation->delete();
        return redirect()->route('formation.personnel')->with('success', 'Formation supprimée avec succès.');
    }
    // Controller details

    public function detailsformation($id){
        $formation=Formation::findOrFail($id);
         return view('formations.details',compact('formation'));
    }
// affichage des formation dans le dashbord
    public function formation_dashbord(){
        $formations=Formation::all();
        return view('dashbord.formation',compact('formations'));
    }

    public function candidats($id)
    {
        $formation = Formation::findOrFail($id);
        $candidatures = $formation->candidatures()->with('user')->get();

        return view('dashbord.candidature', compact('formation', 'candidatures'));
    }
    public function valide(request $request){

    }

    



}
