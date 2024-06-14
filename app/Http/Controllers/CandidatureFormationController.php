<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CandidatureFormation;
use Illuminate\Support\Facades\Auth;

class CandidatureFormationController extends Controller
{
    public function candidatureListe()
    {
        $user = Auth::user();
        $candidatures = CandidatureFormation::where('formation_id', $user->id)
                                             ->with('formation')
                                             ->get();

        return view('candidatDashboard.listeCandidature', compact('candidatures', 'user'));
    }

}
