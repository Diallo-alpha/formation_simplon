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
    <i class="fa-solid fa-bars-progress" style="color: #ffffff;"></i>   <a href="/dashbord.html">Tableau de bord</a>
</li>
<li class="colonne   colonne_cote">
    <i class="fa-solid fa-school" style="color: #ffffff;"></i>   <a href="formation_dashbord">formations</a>
</li>
<li class="colonne colonne_CHEF">
    <i class="fa-solid fa-people-group" style="color: #000;"></i> <a href="candidat_dashbord ">Candidats</a>
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
<h1> tous les contenus element doit etre ici</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Prenom</th>
        <th scope="col">Nom</th>
        <th scope="col">email</th>
        <th scope="col">telephone</th>
        <th scope="col">Adresse</th>
        <th scope="col">niveau</th>
        <th scope="col">Supprimer</th>
      </tr>
    </thead>
    @foreach ($users as $user )
    <tbody>
      <tr>
        
        <th scope="row">{{ $user->id }}</th>
        <td>{{ $user->prenom }}</td>
        <td>{{ $user->nom }}</td>
        <td>{{ $user->email}}</td>
        <td>{{ $user->telephone}}</td>
        <td>{{ $user->adresse}}</td>
        <td>{{ $user->niveau}}</td>
        <td><a href="supprimer_candidat/{{ $user->id }}" class="btn btn-danger"> supprimer</a></td>
        @endforeach
      </tr>
    </tbody>
  </table>
</div>












</div>
</body>
</html>
