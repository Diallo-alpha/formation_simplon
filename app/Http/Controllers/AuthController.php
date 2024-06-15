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
        return view('Auth.register'); // Retourne la vue d'inscription
    }

    public function postRegister(Request $request)
    {
        // Valide les données de la requête
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'telephone' => 'required|string|max:15',
            'adresse' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|min:4|max:255',
        ]);

        // Crée un nouvel utilisateur
        User::create([
            'nom' => $validatedData['nom'],
            'prenom' => $validatedData['prenom'],
            'telephone' => $validatedData['telephone'],
            'adresse' => $validatedData['adresse'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        // Redirige vers la page de connexion après inscription
        return redirect()->route('auth.getLogin')->with('success', 'Inscription réussie. Vous pouvez maintenant vous connecter.');
    }

    public function getLogin()
    {
        return view('Auth.login'); // Retourne la vue de connexion
    }

    public function postLogin(Request $request)
    {
        // Valide les informations d'identification
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Tente de connecter l'utilisateur
        if (Auth::attempt($credentials)) {
            // Regénère la session pour éviter les attaques de fixation de session
            $request->session()->regenerate();

            // Récupérer l'utilisateur connecté
            $user = Auth::user();

            // Vérifiez le rôle de l'utilisateur et redirigez en conséquence
            switch ($user->role) {
                case 'personnel':
                    return redirect('formationAdsbord');
                case 'candidat':
                    return redirect('mes-candidatures');
                default:
                    // Redirigez vers une page par défaut ou de tableau de bord si le rôle n'est pas défini
                    return redirect()->intended('offre');
            }
        }

        // Si l'authentification échoue, redirige vers la page de connexion avec un message d'erreur
        return back()->withErrors([
            'email' => 'Les informations d\'identification fournies ne correspondent pas à nos enregistrements.',
        ])->onlyInput('email');
    }

    public function logout()
    {
        Auth::logout(); // Déconnecte l'utilisateur
        return redirect()->route('auth.getLogin')->with('success', 'Vous avez été déconnecté avec succès.'); // Redirige vers la page de connexion
    }
}
