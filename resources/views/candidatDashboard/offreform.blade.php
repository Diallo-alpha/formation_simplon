<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Formations</title>
    <link rel="stylesheet" href="{{ asset('css/personnel.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            justify-content: center;
            align-items: center;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        .card {
            display: flex;
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            overflow: hidden;
            width: 800px;
            margin: 20px auto;
            padding: 20px;
            flex-direction: column;
        }
        .card-content {
            padding: 20px;
            flex: 1;
        }
        .card-content h2 {
            margin: 0;
            font-size: 24px;
            color: #333;
            text-align: center;
        }
        .card-content .date {
            margin: 10px 0;
            color: #777;
            text-align: center;
        }
        .card-content p {
            margin: 10px 0;
            text-align: center;
            color: #333;
        }
        .card-content .actions {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }
        .card-content .actions form {
            display: inline-block;
        }
        .card-image {
            text-align: center;
            margin-bottom: 20px;
        }
        .card-image img {
            width: 100%;
            height: auto;
            max-width: 200px;
            border-radius: 10px;
        }
        .contact {
            text-align: center;
            color: #777;
        }
        .contact a {
            color: #e74c3c;
            text-decoration: none;
            display: block;
            padding: 10px 0;
        }
        .apply-button {
            background: #e74c3c;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            cursor: pointer;
            transition: background 0.3s;
        }
        .apply-button:hover {
            background: #ce0033;
        }
    </style>
</head>
<body>
<div class="cont_all">
    <div class="dashbord">
        <section class="info_perso">
            <div class="info_img"><img class="photo_dashbord" src="img/1693355856042.jpeg" alt=""></div>
            <div>
                <h1>Coach Barro</h1>
                <p>78 225 17 74</p>
            </div>
        </section>
        <div class="navbar">
            <!-- le sidebar -->
            <ul>
                <li class="colonne">
                    <i class="fa-solid fa-bars-progress"></i>
                    <a href="#">Tableau de bord</a>
                </li>
                <li class="colonne colonne_cote ">
                    <i class="fa-solid fa-school"></i>
                    <a href="{{route('liste.formation.candidat')}}">Formations</a>
                </li>
                <li class="colonne colonne_CHEF">
                    <i class="fa-solid fa-people-group"></i>
                    <a href="{{route('candidat_profil', $users->id)}}">Profil</a>
                </li>
                <li class="colonne">
                    <i class="fa-solid fa-graduation-cap"></i>
                    <a href="{{route('mes.candidatures')}}">Candidatures</a>
                </li>
                <li class="colonne">
                        <i class="fa-solid fa-sign-out-alt"></i>
                        <a href="{{ route('auth.logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Déconnexion
                        </a>
                        <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                </li>
            </ul>
        </div>
    </div>
    <div class="conteneur_element">
        <h1 class="mb-4">Liste des Formations</h1>
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        @foreach($formations as $formation)
        <div class="card">
            <div class="card-image">
                <img src="{{ asset('images/'.$formation->image)}}" alt="Formation Image" onerror="this.onerror=null;this.src='{{ asset('images/default.jpg') }}';">
            </div>
            <div class="card-content">
                <h2>{{ $formation->titre }}</h2>
                <p>{{ Str::limit($formation->description, 100) }}</p>
                <div class="date">Date limite: {{ $formation->date_expiration }}</div>
                <a href="{{ route('formulaire.candidature.auth', $formation->id) }}" class="btn btn-primary btn-sm">Postuler</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
</body>
</html>
