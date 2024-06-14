<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
{

class OffreFormationController extends Controller

{
    public function offreform()
    {
        // Logic for the detail view
        return view('candidatDashboard.offreform'); // Assurez-vous que la vue existe
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


