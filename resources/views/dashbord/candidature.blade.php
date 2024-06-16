<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/candidature.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
<div class="cont_all">
<!-- la dashbord -->
<div class="dashbord">
<section class="info_perso">
    <div class="info_img"><img class="photo_dashbord" src="img/1693355856042.jpeg" alt=""></div>
    <div>
        <h1>Coach Barro</h1>
        <p>78 225 17 74</p>
    </div>
</section>


<nav class='navbar'>
    <ul>
        <li class="colonne"><i class="fa-solid fa-bars-progress"></i><a href="#"><span> </span>TABLEAU DE BORD</a></li>
        <li class="colonne"><i class="fa-solid fa-school"></i> <a href="{{ route('formation.personnel') }}"><span> </span>Formation</a></li>
        <li class="colonne"><i class="fa-solid fa-people-group"></i><a href="{{route('candidatures.index')}}"><span> </span>Candidats</a></li>
        <li class="colonne"><i class="fa-solid fa-sign-out-alt"></i><a href="{{ route('auth.logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Déconnexion
        </a>
        <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        </li>
    </ul>
</nav>
</div>
<!-- le conteneur des elements -->
<div class="conteneur_element">
<h1>
    tous element de la candidature doit etre ici
</h1>


<div>

<table class="dataTable">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>niveau</th>
            <th>adresse</th>
            <th>date</th>
            <th>cv</th>
            <th>statut</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>

        @foreach ($candidatures as $candidature)

        <tr>
            <td><a href="{{Route('detail.candidature',$candidature->id)}}">{{$candidature->user->nom}}</td>
            <td>{{$candidature->user->prenom}}</td>
            <td>{{$candidature->user->niveau}}</td>
            <td>{{$candidature->user->adresse}}</td>
            <td>{{$candidature->created_at}}</td>
            <td>
                            
                               
                                <a href="{{ route('fichier.afficher', ['path' => str_replace('public/', '', $candidature->cv_path)]) }}" target="_blank">Télécharger</a>
                           
                        </td>
                        <td>{{ ucfirst($candidature->status) }}</td>
                        <td>
                            @if ($candidature->status == 'En attente')
                                <a href="{{ route('candidature.accepter', $candidature->id) }}" class="btn btn-success">Accepter</a>
                                <a href="{{ route('candidature.rejeter', $candidature->id) }}" class="btn btn-danger">Rejeter</a>
                            @else
                                <span>{{ ucfirst($candidature->status) }}</span>
                            @endif
                            <form action="{{ route('candidatures.destroy', $candidature->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
            @endforeach
    </tbody>
</table>

</div>



</div>











</div>
</body>
</html>
