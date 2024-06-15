<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord</title>
    <link rel="stylesheet" href="{{asset('css/listCandidature.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="profile">
                <img src="{{ asset('img/fall.jpeg') }}" alt="Profile Picture">
                <p>{{ $user->nom }}</p>
                <p>{{ $user->telephone }}</p>
            </div>
            <nav>
                <ul>
                    <li> <i class="fa-solid fa-bars-progress"></i> <a href="#">TABLEAU DE BORD</a></li>
                    <li><i class="fa-solid fa-school"></i> <a href="#">Formation</a></li>
                    <li><a href="/candidat_profil/{{$user->id}}"><i class="fas fa-user"></i> Profil</a></li>
                    <li><i class="fa-solid fa-people-group"></i> <a href="#">Candidature</a></li>
                    <li>
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
            </nav>
        </aside>
        <div class="dashboard">
            <header>
            @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
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
</body>
</html>
