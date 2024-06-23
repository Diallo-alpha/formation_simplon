



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
    .navbar li{
    margin-left: -30%;
    display: flex;
}
.navbar a{
    margin-left: 5%;
    font-size:20px;
    font-weight: bolder;
    
}
.profil{
    margin-left: -20%;
    display: flex; 
}
.profil p{
    margin-left: 10px;
    
}
.infop{
    font-size:18px;
    font-weight: bolder;
}
.telephone{
    font-size: 14px;
    font-weight:5px;
}


    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
<div class="cont_all">
<!-- la dashbord -->
<div class="dashbord">

 <nav class='navbar'>
 <div class="profil">
        <img src="https://cdn.pixabay.com/photo/2016/11/14/17/39/person-1824147_1280.png" alt="" class="info_img">
        <p><span class="infop">{{Auth::user()->prenom}} {{Auth::user()->nom}}</span> <br><span class="telephone">{{Auth::user()->telephone}}</span></p>

    </div>
                <ul>
                    <li class="colonne" id="tableaubord"><img src="{{asset('img/dashboard.png')}}" alt="" width="24px" height="24px"><a href="{{ route('formulaire.ajout.formation') }}"><span> </span>Dashboard</a></li>
                    <li class="colonne" id="tableauformation"><img src="{{asset('img/formation.png')}}"  > <a href="{{ route('formation.personnel') }}"><span> </span>Formation</a></li>
                    <li class="colonne"id="tableaucandidat"><img src="{{asset('img/people.png')}}" width="24px" height="24px"><a href="{{url('afficher_candidat')}}"><span> </span>Candidats</a></li>
                    <li class="colonne"><img src="{{asset('img/setting.png')}}"width="24px" height="24px"><a href="{{ route('auth.logout') }}"
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
    @yield('contenu')
   
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

