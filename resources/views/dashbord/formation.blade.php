

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/personnel.css') }}">
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
    <i class="fa-solid fa-people-group" style="color: #ffffff;"></i> <a href="candidat_dashbord">Candidats</a>
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
    <div class="container mt-5">
        <h1 class="mb-4">Liste des Formations</h1>
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
        <table class="table table-striped"><a href="#"></a>
            <thead class="thead-dark">
                <tr>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Date d'Expiration</th>
                    {{-- <th>Image</th> --}}
                    {{-- <th>Utilisateur</th> --}}
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($formations as $formation)
                <tr>
                    <td>{{ $formation->titre }}</td>
                    <td>{{Str::limit( $formation->description ,100)}}</td>
                    <td>{{ $formation->date_expiration }}</td>
                    <td><img src="{{asset('/images/' . $formation->image)}}" alt="{{ $formation->titre }}" width="100"></td>
                    <td><a href="{{ route('form.modification.formation', $formation->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                        <form action="{{ route('formation.supprimer', $formation->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                        </form>
                        <a href="{{ route('form.modification.formation', $formation->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                        <form action="{{ route('formation.supprimer', $formation->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                        </form>
                    </td>
                  
                   
                  <td>
                   <a href="{{Route('candidatureFormation',$formation->id)}}">candidat</a>
                   </td>
                </tr>
            @endforeach
            </tbody>
        </table> 












</div>
</body>
</html>

