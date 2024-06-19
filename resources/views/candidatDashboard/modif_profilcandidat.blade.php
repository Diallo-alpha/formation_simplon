<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/profilCandidat.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dasboardCandidat.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <main>
        <div class="cont_all">
            <!-- la dashbord -->
            <div class="sidebar">
                <div class="profile">
                    <img src="{{asset('images/'. $user->profil)}}" alt="Image de Profil">
                    <div class="profile-info">
                        <h3>Samba Bery</h3>
                        <p>Code 232 445 000 435</p>
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
                <div class="col-11 d-flex justify-content-between">
                    <a href="/candidat_profil/{{$user->id}}" class="btn btn-danger">Retour</a>
                </div>
                <div class="container mt-5">
                    @if(session('success'))
                        <div style="margin-top: -1rem" class="alert bg-dark-subtle text-light">
                            {{ session('success') }}
                        </div>
                    @endif
                    <h4>Information personnelle</h4>
                    <form action="/save_modif_profil/{{$user->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div style="display: flex; flex-wrap:wrap; gap: 1rem 6.1rem; align-items:center">
                            <!-- Box: Nom -->
                            <div class="col-md-5 mb-3">
                                <h6>Nom:</h6>
                                <div class="col-12" style="border:gray 1px solid; border-radius:0.5rem; height:2rem; padding:0.4rem;">
                                    <input type="text" class="form-control border-0 p-0" id="nom" name="nom" value="{{ old('nom', $user->nom) }}" required>
                                </div>
                            </div>
                            <!-- Box: Prénom -->
                            <div class="col-md-5 mb-3">
                                <h6>Prénom:</h6>
                                <div class="col-12" style="border:gray 1px solid; border-radius:0.5rem; height:2rem; padding:0.4rem;">
                                    <input type="text" class="form-control border-0 p-0" id="prenom" name="prenom" value="{{ old('prenom', $user->prenom) }}" required>
                                </div>
                            </div>
                            <!-- Box: Photo de profil -->
                            <div class="col-md-5 mb-3">
                                <h6>Photo de profil:</h6>
                                <div class="col-12" style="border:gray 1px solid; border-radius:0.5rem; height:2rem; padding:0.4rem;">
                                    <input type="file" class="form-control border-0 p-0" id="profil" name="profil">
                                </div>
                            </div>
                            <!-- Box: Région -->
                            <div class="col-md-5 mb-3">
                                <h6>Région:</h6>
                                <div class="col-12" style="border:gray 1px solid; border-radius:0.5rem; height:2rem; padding:0.4rem;">
                                    <input type="text" class="form-control border-0 p-0" id="adresse" name="adresse" value="{{ old('adresse', $user->adresse) }}" required>
                                </div>
                            </div>
                            <!-- Box: Téléphone -->
                            <div class="col-md-5 mb-3">
                                <h6>Téléphone:</h6>
                                <div class="col-12" style="border:gray 1px solid; border-radius:0.5rem; height:2rem; padding:0.4rem;">
                                    <input type="text" class="form-control border-0 p-0" id="telephone" name="telephone" value="{{ old('telephone', $user->telephone) }}" required>
                                </div>
                            </div>
                            <!-- Box: Niveau d'étude -->
                            <div class="col-md-5 mb-3">
                                <h6>Niveau d'étude:</h6>
                                <div class="col-12" style="border:gray 1px solid; border-radius:0.5rem; height:2rem; padding:0.4rem;">
                                    <input type="text" class="form-control border-0 p-0" id="niveau" name="niveau" value="{{ old('niveau', $user->niveau) }}" required>
                                </div>
                            </div>
                            <!-- Box: Biographie -->
                            <div class="col-12 mb-3">
                                <h6>Biographie:</h6>
                                <div class="col-12" style="border:gray 1px solid; border-radius:0.5rem; height:9rem; padding:0.4rem;">
                                    <textarea class="form-control border-0 p-0" id="biographie" name="biographie" rows="4">{{ old('biographie', $user->biographie) }}</textarea>
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
        </div>
    </main>
</body>
</html>
