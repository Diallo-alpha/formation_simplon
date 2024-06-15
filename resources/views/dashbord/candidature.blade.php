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


<nav class="navbar">
    <!-- le sidebar -->

<ul>

<li class="colonne ">
    <i class="fa-solid fa-bars-progress" style="color: #ffffff;"></i>   <a href="formationAdsbord">Tableau de bord</a>
</li>
<li class="colonne   colonne_cote">
    <i class="fa-solid fa-school" style="color: #ffffff;"></i>  <a href="{{route('dashbord')  }}">formations</a>
</li>
<li class="colonne colonne_CHEF">
    <i class="fa-solid fa-people-group" style="color: #000;"></i> <a href="# ">Candidats</a>
</li>
<li class="colonne">
    <i class="fa-solid fa-graduation-cap" style="color: #ffff;"></i>  <a href="/dashbord_candidature.html">Candidatures</a>
</li>
<li class="colonne ">
    <a href="">Connexion</a>
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
            <td><a href="#">{{$candidature->user->nom}}</td>
            <td>{{$candidature->user->prenom}}</td>
            <td>{{$candidature->user->niveau}}</td>
            <td>{{$candidature->user->adresse}}</td>
            <td>{{$candidature->created_at}}</td>
            <td>
                            @if ($candidature->cv_path)
                                <a href="{{ route('fichier.afficher', ['path' => $candidature->cv_path]) }}" target="_blank">Télécharger</a>
                            @else
                                Aucun fichier
                            @endif
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
