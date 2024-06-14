<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/listCandidature.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="logo">
            <img src="{{asset('images/simplon 1.svg')}}" alt="Logo">
        </div>
        <div class="login-button">
            <i class="fa-solid fa-bell"></i>
        </div>
    </header>
    <main>
        <div class="cont_all">
            <!-- la dashbord -->
            <div class="dashbord">
                <section class="info_perso" style="display: flex">
                    <div class="info_img"><img style=" width:4rem; height:auto ; border-radius:4rem;  margin:1rem; " class="photo_dashbord" src="{{asset('images/1718204214.jpg')}}" alt=""></div>
                    <div style="margin:1rem 0; color:white"> <h5>caoch Barro</h5>
                          <p>77 000 00 00 </p>
                    </div>
                </section>
                <div class="navbar">
                    <!-- le sidebar -->
                    <ul>
                        <li class="colonne">
                            <i class="fa-solid fa-bars-progress"></i>
                            <a href="/dashbord.html">Tableau de bord</a>
                        </li>
                        <li class="colonne colonne_cote ">
                            <i class="fa-solid fa-school"></i>
                            <a href="formation_dashbord">Formations</a>
                        </li>
                        <li class="colonne colonne_CHEF">
                            <i class="fa-solid fa-people-group"></i>
                            <a href="/dashbord_candidat.html">Profil</a>
                        </li>
                        <li class="colonne">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <a href="/dashbord_candidature.html">Candidatures</a>
                        </li>
                        <li class="colonne">
                            <a href="#">Connexion</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="conteneur_element">
<!-- les actions et l'image du profil -->
 <div class="" style="height:7rem ; display:flex; justify-content:space-between; padding:1rem; align-items:center" >
    <img style=" width:5rem; height:auto ; border-radius:10rem;  border:brown solid 0.09rem" class="photo_dashbord" src="{{asset('images/1718204214.jpg')}}" alt="">
<div class="d-flex gap-3"> <a  class="btn btn-dark p-2" href="/modif_profil"> Modifier</a>
    <a  class="btn btn-danger p-2" href="">Ajouter CV</a>
</div>
 </div>
<!-- fin les actions et l'image du profil -->
<h4>Information personnel</h4>
<div class="" style="display: flex; flex-wrap:wrap; gap: 1rem 6.1rem; align-items:center">
 <!-- box:nom -->
    <div class="col-5 ">
        <h6>Nom:</h6>
    <div class="col-12 " style="border:gray 1px solid ; border-radius:0.5rem; height:2rem; padding:0.4rem;">
    <p> {{$user->nom}}  </p>
</div>
    </div>

    <!-- box:prenom -->
    <div class="col-5 ">
        <h6>Prenom:</h6>
    <div class="col-12 " style="border:gray 1px solid ; border-radius:0.5rem; height:2rem; padding:0.4rem;">
    <p>  {{$user->prenom}} </p>
</div>
    </div>

    <!-- box:region -->
    <div class="col-5 ">
        <h6>Région:</h6>
    <div class="col-12 " style="border:gray 1px solid ; border-radius:0.5rem; height:2rem; padding:0.4rem;">
    <p>  {{$user->adresse}} </p>
</div>
    </div>

      <!-- box:telephone -->
      <div class="col-5 ">
        <h6>Téléphone:</h6>
    <div class="col-12 " style="border:gray 1px solid ; border-radius:0.5rem; height:2rem; padding:0.4rem;">
    <p>  {{$user->telephone}} </p>
</div>
    </div>
     <!-- box:addressee -->
    <div class="col-5 ">
        <h6>Niveau d'etude:</h6>
    <div class="col-12 " style="border:gray 1px solid ; border-radius:0.5rem; height:2rem; padding:0.4rem;">
    <p> Licence: {{$user->niveau}}  </p>
</div>
    </div>
 <!-- box:biographie-->
 <div class="col-12">
    <h6>Biographie:</h6>
<div class="col-11 p-1" style="border:gray 1px solid ; border-radius:0.5rem; height:9rem; padding:0.4rem;" >
<p>la users n'a pas de biographie  </p>
</div>
</div>



</div>

        </div>
    </main>
</body>
</html>
