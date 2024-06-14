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
                <p>{{ $user->nom}}</p>
                <p>{{ $user->telephone }}</p>
            </div>
            <nav>
                <ul>
                    <li> <i class="fa-solid fa-bars-progress"></i> <a href="#">TABLEAU DE BORD</a></li>
                    <li><i class="fa-solid fa-school"></i> <a href="#">Formation</a></li>
                    <li><i class="fa-solid fa-people-group"></i> <a href="#">candidature</a></li>
                    <li>
                        <i class="fa-solid fa-sign-out-alt"></i>
                        <a href="{{ route('auth.logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Déconnexion
                        </a>
                        <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                </ul>
            </nav>
        </aside>
        <div class="dashboard">
            <header>
                <h1>TABLEAU DE BORD</h1>
                <div class="user-info">
                    <i class="fa-solid fa-bell icon"></i>
                </div>
            </header>
            {{-- <section class="stats">
                <div class="stat-item">
                    <p>Candidats</p>
                    <p>8600</p>
                </div>
                <div class="stat-item">
                    <p>Formation passer</p>
                    <p>7000</p>
                </div>
                <div class="stat-item">
                    <p>Formation en cours</p>
                    <p>3</p>
                </div> --}}
                <h1>Mes candidatures</h1>
            </section>
            <section class="table-section">
                <h2>Formation</h2>
                <table>
                    <thead>
                        <tr>
                            <th>NUMERO</th>
                            <th>PRENOM</th>
                            <th>TELEPHONE</th>
                            <th>DATE</th>
                            <th>ADRESSE</th>
                            <th>ETAT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($candidatures as $candidature): ?>
                        <tr>
                            <td><?php echo $candidature->id; ?></td>
                            <td><?php echo $candidature->formation->date_debut; ?></td>
                            <td><?php echo $candidature->formation->date_fin; ?></td>
                            <td><?php echo $candidature->statut; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                    </tbody>
                </table>
            </section>
        </div>
    </div>
</body>
</html>
