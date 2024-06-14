<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function getRegister()
    {
        return view('Auth.register'); // Retournez la vue d'inscription
    }

    public function postRegister(Request $request)
    {
        // Validez et créez l'utilisateur
        $request->validate([
            // 'nam' => 'required|string|max:255',
            // 'email' => 'required|string|email|unique:users|max:255',
            // 'password' => 'required|string|min:4|max:255',
        ]);

        // Créer l'utilisateur

        // $user = new User();
        User::create($request->all() );
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = Hash::make($request->password);
        // $user->save();


        return redirect()->route('auth.getLogin');
         }

        public function login() {
            return view('login');
        }





        // User::create($request->all() );

        // Connectez l'utilisateur après son inscription
        // Auth::login($user);

    //     // Redirigez vers la page de tableau de bord ou une autre page
    //     return redirect()->route('login');
    // }

    public function getLogin()
    {
        return view('Auth.login'); // Retournez la vue de connexion
    }

    public function postLogin(Request $request)
{
    // Validez les informations d'identification
    $credentials = $request->validate([
        'email' => 'required|string|email',
        'password' => 'required|string',
    ]);

    // Connectez l'utilisateur
    if (Auth::attempt($credentials)) {
        // Regénérer la session pour éviter les attaques de fixation de session
        $request->session()->regenerate();

        // Récupérer l'utilisateur connecté
        $user = Auth::user(); 

        // Vérifiez le rôle de l'utilisateur et redirigez en conséquence
        switch ($user->role) {
            case 'personnel':
                return redirect('formationAdsbord');
            case 'candidat':
                return redirect('formulaire_postuler ');
            default:
                // Redirigez vers une page par défaut ou de tableau de bord si le rôle n'est pas défini
                return redirect()->intended('offre');
        }
    }

    // Si l'authentification échoue, redirigez vers la page de connexion avec un message d'erreur
    return back()->withErrors([
        'email' => 'Les informations d\'identification fournies ne correspondent pas à nos enregistrements.',
    ]);
}


    public function logout()
    {
        Auth::logout(); // Déconnectez l'utilisateur
        return redirect()->route('auth.getLogin'); // Redirigez vers la page de connexion
}   

}