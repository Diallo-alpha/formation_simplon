<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/personnel.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>.conteneur_element {
      flex-grow: 1;
      padding: 20px;
  }

  .container {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  h1 {
      font-size: 24px;
      margin-bottom: 20px;
  }

  .table {
      width: 100%;
      margin-bottom: 20px;
      border-collapse: collapse;
  }

  .table th,
  .table td {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #ddd;
  }

  .table th {
      background-color: #343a40;
      color: #fff;
  }

  .table tr:nth-child(even) {
      background-color: #f2f2f2;
  }

  .table tr:hover {
      background-color: #ddd;
  }

  .table img {
      width: 100px;
      height: auto;
  }

  .btn {
      text-decoration: none;
      padding: 10px 20px;
      border-radius: 5px;
      transition: background-color 0.3s;
  }

  .btn-success {
      background-color: #28a745;
      color: #fff;
  }

  .btn-success:hover {
      background-color: #218838;
  }

  .btn-warning {
      background-color: #ffc107;
      color: #000;
  }

  .btn-warning:hover {
      background-color: #e0a800;
  }

  .btn-danger {
      background-color: #dc3545;
      color: #fff;
  }

  .btn-danger:hover {
      background-color: #c82333;
  }

  .alert {
      padding: 15px;
      background-color: #d4edda;
      color: #155724;
      border: 1px solid #c3e6cb;
      border-radius: 5px;
      margin-bottom: 20px;
  }


  </style>
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

{{-- 
<nav class="navbar">
    <!-- le sidebar -->

<ul>

<li class="colonne ">
    <i class="fa-solid fa-bars-progress" style="color: #ffffff;"></i>   <a href="formationAdsbord">Tableau de bord</a>
</li>
<li class="colonne   colonne_cote">
    <i class="fa-solid fa-school" style="color: #ffffff;"></i>   <a href="{{route('formation.personnel')}}">formations</a>
</li>
<li class="colonne colonne_CHEF">
    <i class="fa-solid fa-people-group" style="color: #000;"></i> <a href="afficher_candidat ">Candidats</a>
</li>
<li class="colonne">
    <i class="fa-solid fa-graduation-cap" style="color: #ffff;"></i>  <a href="/dashbord_candidature.html">Candidatures</a>
</li>
<li class="colonne ">
    <a href="">Connexion</a>
</li>

</ul>
</nav>
</div> --}}
<nav class='navbar'>
  <ul>
      <li class="colonne"><i class="fa-solid fa-bars-progress"></i><a href="#"><span> </span>TABLEAU DE BORD</a></li>
      <li class="colonne"><i class="fa-solid fa-school"></i> <a href="{{ route('formation.personnel') }}"><span> </span>Formation</a></li>
      <li class="colonne"><i class="fa-solid fa-people-group"></i><a href="afficher_candidat"><span> </span>Candidats</a></li>
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
<h1> Liste des candidats</h1>
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
      {{-- <th scope="col">Supprimer</th> --}}
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
      {{-- <form action="{{route('supprimer.candiate',$user->id )}}" method="post">
        @csrf
      <td><a href="" class="btn btn-danger"> supprimer</a></td>
      <i class='fas fa-eye' style='font-size:48px;color:red'></i>
    </form> --}}
      @endforeach
    </tr>
  </tbody>
</table>
</body>
</html>
