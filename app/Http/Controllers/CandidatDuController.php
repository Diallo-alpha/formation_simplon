<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CandidatDuController extends Controller
{
    public function inscription(){
        return view('Candidats.inscription');
    }

    public function sauvegarde(Request $request){
        // Validez les champs du formulaire
        $request->validate([
            'nom' => 'required|string|max:50',
            'prenom' => 'required|string|max:100',
            'telephone' => 'required|string',
            'niveau' => 'nullable|string',
            'adresse' => 'required|string',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:4|confirmed',
        ]);
        $data = $request->all();
        if ($request->hasFile('profil')) {
            $file = $request->file('profil');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $fileName);
            $data['profil'] = 'images/' . $fileName;
        }
        User::create($data);
        return redirect()->back()->with('status', 'Vous avez été ajouté avec succès');
    }

    public function afficher(){
        $users = User::all();
        return view('dashbord.candidat', compact('users'));
    }

    public function supprimer_candidat($id){
        $user = User::find($id);
        if ($user->profil) {
            $oldImagePath = public_path('images/' . basename($user->profil));
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }
        $user->delete();
        return redirect()->back();
    }



    public function candidat_dashbord(){
        $users = User::where('role', 'candidat')->get();
        return view('dashbord.candidat', compact('users'));
    }

    public function profil_candidat($id){
        if (Auth::check()) {
            $user = User::find($id);
            return view('dashbord.candidat', compact('user'));
        } else {
            return redirect()->back()->with('status', 'Impossible');
        }
    }

    public function candidat_profil(){
        $id = Auth::id();
        $user = User::find($id);
        return view('candidatDashboard.profilcandidat', compact('user'));
    }

    public function modif_profil(){
        $id = Auth::id();
        $user = User::find($id);
        return view('candidatDashboard.modif_profilcandidat', compact('user'));
    }

    public function save_modif_profil(Request $request, $id){
        $user = User::find($id);
        $data = $request->all();

        if ($request->hasFile('profil')) {
            if ($user->profil) {
                $oldImagePath = public_path('images/' . basename($user->profil));
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $file = $request->file('profil');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $fileName);

            $data['profil'] = 'images/' . $fileName;
        }

        $user->update($data);
        return redirect()->back()->with('success', 'Modification réussie');
    }
}
