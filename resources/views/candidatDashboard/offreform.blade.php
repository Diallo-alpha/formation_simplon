<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Formations</title>
    <link rel="stylesheet" href="{{ asset('css/personnel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dasboardCandidat.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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
    <div class="sidebar">
        <div class="profile">
            <img src="{{asset('images/'. $users->profil)}}" alt="Image de Profil">
            <div class="profile-info">
                <h3>{{$users->nom}}</h3>
                <p>{{$users->telephone}}</p>
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
                <a href="/candidat_profil/{{$users->id}}"><i class="fas fa-user"></i> Profil</a>
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
                <a href="{{ url('formulaire_postuler',$formation->id)  }}"><button class="btn btn-danger text-white btn-adjusted">Postuler</button></a> <br> <br>
                <a href="{{route('detail.formation', $formation->id)}}" style="text-decoration: none"> <button class="btn btn-danger text-white btn-adjusted">Voir plus</button>
            </div>
        </div>
        @endforeach
    </div>
</div>
</body>
</html>
