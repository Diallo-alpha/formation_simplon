<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/profilCandidat.css')}}">
    <link rel="stylesheet" href="{{ asset('css/dasboardCandidat.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    {{-- <header>
        <div class="logo">
            <img src="{{ asset($user->profil) }}" alt="Profil Utilisateur" style="width: 50px; height: 50px; border-radius: 50%;">
        </div>
        <div class="login-button">
            <i class="fa-solid fa-bell"></i>
        </div>
    </header> --}}
    <main>
        <div class="cont_all">
            <!-- la dashbord -->
            <div class="sidebar">
                <div class="profile">
                    <img src="{{asset('images/'. $user->profil)}}" alt="Image de Profil">
                    <div class="profile-info">
                        <h3>{{$user->nom}}</h3>
                        <p>{{$user->telephone}}</p>
                    </div>
                </div>
                <ul class="menu">
                    <li class="menu-item active">
                        <a href="#"><i class="fa-solid fa-bars-progress"></i> Tableau de Bord</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{route('liste.formation.candidat')}}"><i class="fa-solid fa-school"></i> Formation</a>
                    </li>
                    <li class="menu-item">
                        <a href="/candidat_profil/{{$user->id}}"><i class="fas fa-user"></i> Profil</a>
                    </li>

                    <li class="menu-item">
                        <a href="{{route('mes.candidatures')}}"><i class="fas fa-user-tie"></i> Candidature</a>
                    </li>
                    <li class="menu-item">
                            <a href="{{ route('auth.logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                               <i class="fa-solid fa-sign-out-alt"></i>
                                Déconnexion
                            </a>
                            <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                 </ul>
            </div>
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
</body>
</html>
