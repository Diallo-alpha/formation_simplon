@extends('layout.base')
@section('dashboard')
<main class="main-content">
<div class="conteneur_element">
    <!-- les actions et l'image du profil -->
    <div class="" style="height:7rem; display:flex; justify-content:space-between; padding:1rem; align-items:center">
        <img style="width:5rem; height:auto; border-radius:10rem; border:brown solid 0.09rem" class="photo_dashbord" src="{{asset('images/1718204214.jpg')}}" alt="">
        <div class="d-flex gap-3">
            <a class="btn btn-dark p-2" href="/modif_profil">Modifier</a>
        </div>
    </div>
    <!-- fin les actions et l'image du profil -->
    <h4>Information personnel</h4>
    <div class="" style="display: flex; flex-wrap:wrap; gap: 1rem 6.1rem; align-items:center">
        <!-- box:nom -->
        <div class="col-5">
            <h6>Nom:</h6>
            <div class="col-12" style="border:gray 1px solid; border-radius:0.5rem; height:2rem; padding:0.4rem;">
                <p>{{$user->nom}}</p>
            </div>
        </div>
        <!-- box:prenom -->
        <div class="col-5">
            <h6>Prenom:</h6>
            <div class="col-12" style="border:gray 1px solid; border-radius:0.5rem; height:2rem; padding:0.4rem;">
                <p>{{$user->prenom}}</p>
            </div>
        </div>
        <!-- box:region -->
        <div class="col-5">
            <h6>Région:</h6>
            <div class="col-12" style="border:gray 1px solid; border-radius:0.5rem; height:2rem; padding:0.4rem;">
                <p>{{$user->adresse}}</p>
            </div>
        </div>
        <!-- box:telephone -->
        <div class="col-5">
            <h6>Téléphone:</h6>
            <div class="col-12" style="border:gray 1px solid; border-radius:0.5rem; height:2rem; padding:0.4rem;">
                <p>{{$user->telephone}}</p>
            </div>
        </div>
        <!-- box:addressee -->
        <div class="col-5">
            <h6>Niveau d'etude:</h6>
            <div class="col-12" style="border:gray 1px solid; border-radius:0.5rem; height:2rem; padding:0.4rem;">
                <p>Licence: {{$user->niveau}}</p>
            </div>
        </div>
        <!-- box:biographie-->

    </div>
</div>
</div>
</main>
@endsection
