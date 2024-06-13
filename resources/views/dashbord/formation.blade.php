

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/personnel.css') }}">
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

    <i class="fa-solid fa-bars-progress" style="color: #fff;"></i>
    <a href="/dashbord.html">Tableau de bord</a>
</li>
<li class="colonne   colonne_cote  colonne_CHEF">
    <i class="fa-solid fa-school" style="color: #000;"></i> <a href="formation_dashbord">formations</a>
</li>
<li class="colonne">
    <i class="fa-solid fa-people-group" style="color: #ffffff;"></i> <a href="/dashbord_candidat.html">Candidats</a>
</li>
<li class="colonne">
    <i class="fa-solid fa-graduation-cap" style="color: #ffffff;"></i> <a href="/dashbord_candidature.html">Candidatures</a>
</li>
<li class="colonne">

    <a href="">Connexion</a>
</li>

</ul>
</nav>
</div>



<!-- le conteneur des elements -->
<div class="conteneur_element">
 <p>hello</p>
 <h1> tous les elements du dashbord doit se figurer ici</h1>

 
    <div class="container mt-5">
        <h1 class="mb-4">Liste des Formations</h1>
        <a href="{{ route('formulaire.ajout.formation') }}" class="btn btn-success mb-3">Ajouter une Formation</a>
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Date d'Expiration</th>
                    <th>Image</th>
                    <th>Utilisateur</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($formations as $formation)
                <tr>
                    <td>{{ $formation->titre }}</td>
                    <td>{{ $formation->description }}</td>
                    <td>{{ $formation->date_expiration }}</td>
                    <td><img src="{{asset('/images/' . $formation->image)}}" alt="{{ $formation->titre }}" width="100"></td>
                    <td>
                        <a href="{{ route('form.modification.formation', $formation->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                        <form action="{{ route('formation.supprimer', $formation->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                        </form>
                    </td>
                  <td> <a href="{{url('afficher_candidat')}}">candidates</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    
    

</div>












</div>
</body>
</html>

