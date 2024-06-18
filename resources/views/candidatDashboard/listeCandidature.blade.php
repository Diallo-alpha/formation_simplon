<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord</title>
    <link rel="stylesheet" href="{{asset('css/listCandidature.css')}}">
    <link rel="stylesheet" href="{{ asset('css/dasboardCandidat.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="profile">
                <img src="{{asset('images/'. $user->profil)}}" alt="Image de Profil">
                <div class="profile-info">
                    <p>{{ $user->nom }}</p>
                    <p>{{ $user->telephone }}</p>
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
        <div class="dashboard">

            <header>
                <h1>TABLEAU DE BORD</h1>
                <div class="user-info">
                    <i class="fa-solid fa-bell icon"></i>
                </div>
            </header>
            <section class="stats">
                <h1>Mes candidatures</h1>
            </section>
            <section class="table-section">
                <h2>Formation</h2>
                <table>
                    <thead>
                        <tr>
                            <th>NUMERO</th>
                            <th>FORMATION</th>
                            {{-- <th>DATE DEBUT</th> --}}
                            <th>DATE FIN</th>
                            <th>STATUT</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($candidatures as $candidature)
                        <tr>
                            <td>{{ $candidature->id }}</td>
                            <td>{{ $candidature->formation->titre }}</td>
                            {{-- <td>{{ $candidature->formation->date_debut}}</td> --}}
                            <td>{{ $candidature->formation->date_expiration }}</td>
                            <td>{{ $candidature->status }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </section>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
