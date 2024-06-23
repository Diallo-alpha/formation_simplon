<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Tableau de Bord')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/personnel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dasboardCandidat.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="sidebar">

        <div class="profile">
            <img src="{{ asset('images/samba.svg') }}" alt="Profile Picture">
            <div>
                <h2>samba berry</h2>
                <p>778552525</p>
            </div>
        </div>
        <ul>
            <li class="">
                <a href="{{ route('base.index') }}" class="nav-link {{ request()->route()->getName() === 'base.index' ? 'active' : '' }}" aria-current="page">
                    <i class="fa-solid fa-bars-progress"></i> Tableau de Bord
                </a>
            </li>
            <li class="">
                <a href="{{ route('liste.formation.candidat') }}" class="nav-link {{ request()->route()->getName() === 'liste.formation.candidat' ? 'active' : '' }}">
                    <i class="fa-solid fa-school"></i> Formation
                </a>
            </li>
            {{-- <li class="">
                <a href="/candidat_profil/{{$users->id}}" class="nav-link {{ request()->route()->getName() === 'mes.candidatures' ? 'active' : '' }}"><i class="fas fa-user"></i> Profil</a>
            </li> --}}
            <li class="">
                <a href="{{ route('mes.candidatures') }}" class="nav-link {{ request()->route()->getName() === 'mes.candidatures' ? 'active' : '' }}">
                    <i class="fas fa-user-tie"></i> Candidature
                </a>
            </li>
            <li class="">
                <a href="{{ route('auth.logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">
                   <i class="fa-solid fa-sign-out-alt"></i> Déconnexion
                </a>
                <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
    <div class="dashboard">
        @yield('dashboard')
        {{-- <main class="main-content">
            <h1>LISTE DES CANDIDATURES</h1>
            <section class="section-content">
                <table>
                    <thead>
                        <tr>
                            <th>TITRE</th>
                            <th>DATE DE DÉBUT</th>
                            <th>DATE DE FIN</th>
                            <th>STATUT</th>
                            <th>SUPPRIMER</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Développement web</td>
                            <td>20/01/2023</td>
                            <td>14/11/2024</td>
                            <td><span class="status en-cours">en cours</span></td>
                            <td><button>Supprimer</button></td>
                        </tr>
                        <tr>
                            <td>Développement web</td>
                            <td>20/01/2023</td>
                            <td>14/11/2024</td>
                            <td><span class="status en-cours">en cours</span></td>
                            <td><button>Supprimer</button></td>
                        </tr>
                        <!-- Répéter pour d'autres lignes -->
                    </tbody>
                </table>
            </section>
        </main> --}}
    </div>
</body>
</html>
