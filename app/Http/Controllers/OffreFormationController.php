<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Formation;
use Illuminate\Http\Request;
{

class OffreFormationController extends Controller

{
    public function offreform()
    {$formations=Formation::all();
        // Logic for the detail view
        return view('candidatDashboard.offreform',compact('formations')); // Assurez-vous que la vue existe
    }
}

}


//     public function detailsformation(){
//         return view('candidatDashbord.offre');
//    }
// // affichage de  l'offres dans le dashbord
//    public function formation_dashbord(){
//        $offre=Offre::all();
//        return view('dashbord.offre',compact('Offres'));
//    }


