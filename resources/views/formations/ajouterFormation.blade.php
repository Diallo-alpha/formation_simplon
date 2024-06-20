<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord</title>
    <link rel="stylesheet" href="{{ asset('css/listCandidature.css') }}">
    <link rel="stylesheet" href="{{ asset('css/formStyle.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="profile">
                <img src="{{ asset('img/fall.jpeg') }}" alt="Profile Picture">
                {{-- <p>{{ $user->nom }}</p>
                <p>{{ $user->prenom }}</p> --}}
            </div>
            <nav>
                <ul>
                    <li><i class="fa-solid fa-bars-progress"></i><a href="#"><span> </span>TABLEAU DE BORD</a></li>
                    <li><i class="fa-solid fa-school"></i> <a href="{{ route('formation.personnel') }}"><span> </span>Formation</a></li>
                    <li><i class="fa-solid fa-people-group"></i><a href="{{route('candidatures.index')}}"><span> </span>Candidats</a></li>
                    <li><i class="fa-solid fa-sign-out-alt"></i><a href="{{ route('auth.logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Déconnexion
                    </a>
                    <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    </li>
                </ul>
            </nav>
        </aside>
    </div>
    <div class="tete-side2"> <h1> Ajuter une formation</h1>
        <br>
        <br>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ route('formations.traitement') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="titre">Titre</label>
                        <br>
                        <input type="text" class="form-control" id="titre" name="titre" required>
                        <br>
                    </div>
                    <div class="form-group">
                        <br>
                        <label for="description">Description</label>
                        <br>
                        <textarea class="form-control" id="description" name="description" rows="10" required></textarea>
                        <br>
                    </div>
                    <div class="form-group">
                        <br>
                        <label for="date_expiration">Date d'Expiration</label>
                        <br>
                        <input type="date" class="form-control" id="date_expiration" name="date_expiration" required>
                        <br>
                    </div>
                    <div class="form-group">
                        <br>
                        <label for="image">Image</label>
                        <br>
                        <input type="file" class="form-control" id="image" name="image" required>
                        <br>
                    </div>
                    <div class="form-group">
                        <br>
                        <label for="users_id"></label>
                        <br>
                        <input type="hidden" class="form-control" id="users_id" name="users_id">
                        <br>
                    </div>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
            </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
