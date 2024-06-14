<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CandidatDuController extends Controller
{
    public function inscription(){
        return view('Candidats.inscription');
    }

    public function sauvegarde(Request $request){
        User::create($request->all());
        return redirect()->back()->with('status','vous etes ajoutes avec succes');
    }
    public function afficher(){
        $users=User::all();
        return view('Candidats.afficher',compact('users'));
    }
// suppression des candidats
    public function supprimer_candidat($id){
        $user=User::find($id);
        $user->delete();
        return redirect()->back();
    }

    // affichage des candidats dans le dashbord
    public function candidat_dashbord(){
        $users=User::where('role','candidat')->get();
        return view('dashbord.candidat',compact('users'));

    }
    //afficher le profil d'une candidat
     public function profil_candidat($id){

        if(Auth::check() ) {
            $user = User::find($id);
           $user->id = auth()->user()->id;

        return view('/dashbord.candidat');
        }else {
            return  redirect()->back()->with('status','impossible');
              }}

//la methode pour voir afficher profil
    public function candidat_profil($id)
{

   $id= '1';

  $request['id'] = $id;

    $user = User::find($id);

    // Passer l'utilisateur à la vue
    return view('candidatDashboard.profilcandidat', compact('user'));
}
//la methode pour afficher modifier profil
public function modif_profil($id){

    //   $id= '17';

    // $request['id'] = $id;

  $user = User::find($id);

    return view ('/candidatDashboard.modif_profilcandidat',compact('user'));

}
//la methode pour enregistrer modification
public function save_modif_profil( Request $request ,$id){
    $user = User::find($id);
    $user->update($request->all());
    return redirect()->back()->with('success','Modification reussi');
}
    //     return view('/dashbord.candidat');
    //     }else {
    //         return  redirect()->back()->with('status','impossible');
    //           }
    //
}
