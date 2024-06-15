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
    <header style="position: fixed">
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

                <div class="col-11 d-flex justify-content-between " >

                    <a href="/candidat_profil/{{$user->id}}" class="btn btn-danger">Retour</a>
                </div>
                <div class="container mt-5">

                        @if(session('success'))
                        <div style="margin-top: -1rem" class="alert bg-dark-subtle text-lith">
                            {{session('success') }}
                        </div>
                    @endif

                    <h4>Information personnelle</h4>
                    <form action="/save_modif_profil/{{$user->id}}" method="POST">
                        @csrf
                        <div  style="display: flex; flex-wrap:wrap; gap: 1rem 6.1rem; align-items:center">

                            <!-- Box: Nom -->
                            <div class="col-md-5 mb-3">
                                <h6>Nom:</h6>
                                <div class="col-12 " style="border:gray 1px solid ; border-radius:0.5rem; height:2rem; padding:0.4rem;">
                                    <input type="text" class="form-control border-0 p-0" id="nom" name="nom" value="{{ old('nom', $user->nom) }}" required>
                                </div>
                            </div>

                            <!-- Box: Prénom -->
                            <div class="col-md-5 mb-3">
                                <h6>Prénom:</h6>
                                <div class="col-12 " style="border:gray 1px solid ; border-radius:0.5rem; height:2rem; padding:0.4rem;">
                                    <input type="text" class="form-control border-0 p-0" id="prenom" name="prenom" value="{{ old('prenom', $user->prenom) }}" required>
                                </div>
                            </div>

                            <!-- Box: Région -->
                            <div class="col-md-5 mb-3">
                                <h6>Région:</h6>
                                <div class="col-12 " style="border:gray 1px solid ; border-radius:0.5rem; height:2rem; padding:0.4rem;">
                                    <input type="text" class="form-control border-0 p-0" id="adresse" name="adresse" value="{{ old('adresse', $user->adresse) }}" required>
                                </div>
                            </div>

                            <!-- Box: Téléphone -->
                            <div class="col-md-5 mb-3">
                                <h6>Téléphone:</h6>
                                <div class="col-12 " style="border:gray 1px solid ; border-radius:0.5rem; height:2rem; padding:0.4rem;">
                                    <input type="text" class="form-control border-0 p-0" id="telephone" name="telephone" value="{{ old('telephone', $user->telephone) }}" required>
                                </div>
                            </div>

                            <!-- Box: Niveau d'étude -->
                            <div class="col-md-5 mb-3">
                                <h6>Niveau d'étude:</h6>
                                <div class="col-12 " style="border:gray 1px solid ; border-radius:0.5rem; height:2rem; padding:0.4rem;">
                                    <input type="text" class="form-control border-0 p-0" id="niveau" name="niveau" value="{{ old('niveau', $user->niveau) }}" required>
                                </div>
                            </div>

                            <!-- Box: Biographie -->
                            <div div class="col-12">
                                <h6>Biographie:</h6>
                                <div class="col-11 p-1" style="border:gray 1px solid ; border-radius:0.5rem; height:9rem; padding:0.4rem;" >

                                </div>
                            </div>

                            <!-- Boutons d'action -->
                            <div class="col-11 d-flex justify-content-end mt-3 gap-2">
                                <button type="submit" class="btn btn-dark mr-2">Enregistrer</button>

                                <a href="/candidat_profil/{{$user->id}}" class="btn btn-danger">Annuler</a>
                            </div>

                        </div>
                    </form>
                </div>

        </div>
    </main>
</body>
</html>
