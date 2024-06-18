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

        // Créez l'utilisateur en définissant le rôle par défaut et en hachant le mot de passe
        User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'telephone' => $request->telephone,
            'niveau' => $request->niveau,
            'adresse' => $request->adresse,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'candidat',
        ]);

        return redirect()->route('auth.getLogin')->with('status', 'Inscription réussie ! Vous pouvez maintenant vous connecter.');
    }

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
                    return redirect('/mes-candidatures');
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

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
