<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/listCandidature.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
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
                {{-- <section class="info_perso">
                    <div class="info_img"><img class="photo_dashbord" src="{{asset('images/1718204214.jpg')}}" alt=""></div>
                    <div>
                        <h1>Coach Barro</h1>
                        <p>78 225 17 74</p>
                    </div>
                </section> --}}
                <div class="navbar">
                    <!-- le sidebar -->
                    <ul>
                        <li class="colonne">
                            <i class="fa-solid fa-bars-progress"></i>
                            <a href="/dashbord.html">Tableau de bord</a>
                        </li>
                        <li class="colonne colonne_cote colonne_CHEF">
                            <i class="fa-solid fa-school"></i>
                            <a href="formation_dashbord">Formations</a>
                        </li>
                        <li class="colonne">
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
                <div class="container mt-5">
                    <h1 class="mb-4">Liste des Candidatures</h1>
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Titre</th>
                                <th>DATE DE DÉBUT</th>
                                <th>DATE DE FIN</th>
                                <th>Statut</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Exemple Titre</td>
                                <td>01/01/2024</td>
                                <td>31/12/2024</td>
                                <td>En cours</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
