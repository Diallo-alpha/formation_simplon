<?php
namespace App\Http\Controllers;

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
            'description' => 'required|string',
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

        return redirect()->route('formation.liste')->with('success', 'Formation créée avec succès');
    }

    public function modifierFormation($id)
    {
        $formation = Formation::findOrFail($id);
        return view('formations.modifierFormation', compact('formation'));
    }

    public function traitementModiifier(Request $request, Formation $formation)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'date_expiration' => 'required|date',
            'image' => 'nullable|file|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $formation->titre = $request->titre;
        $formation->description = $request->description;
        $formation->date_expiration = $request->date_expiration;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $formation->image = $imageName;
        }

        $formation->update();

        return redirect()->route('formation.liste')->with('success', 'Formation mise à jour avec succès.');
    }

    public function supprimmerFormation($id)
    {
        $formation = Formation::findOrFail($id);
        $formation->delete();
        return redirect()->route('formation.liste')->with('success', 'Formation supprimée avec succès.');
    }
    // Controller details

    public function detailsformation(){
         return view('formations.details');
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
