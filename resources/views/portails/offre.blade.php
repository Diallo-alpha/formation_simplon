<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/candidat.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/index.css') }}"> --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/offre.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        header {
            background-color: #f8f9fa;
            padding: 10px 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            height: 88px;
        }

        menu {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        menu img {
            height: 74px;
            width: 106px;
        }

        nav {
            flex-grow: 1;
            display: flex;
            justify-content: center; /* Centrer les liens horizontalement */
            gap: 20px;
            margin-left: 180px; /* Retirer la marge gauche */
        }

        nav a {
            text-decoration: none;
            color: black;
            font-size: 20px;
            padding: 8px 12px;
            font-family: inter;
            font-weight: bold;
            text-align: center;
        }

        nav a:hover {
            background-color: #e9ecef;
            border-radius: 4px;
        }

        .auth-links {
            display: flex;
            gap: 15px;
            justify-content: center;
            margin-right: 25px;
        }

        .auth-links a {
            text-decoration: none;
            color: black;
            font-size: 20px;
            padding: 8px 12px;
            font-family: inter;
            font-weight: bold;
            justify-content: center;
        }

        .auth-links .connecter {
            background-color: #ce0033;
            color: white;
            border: none;
            justify-content: center;
            border-radius: 30px;
            width: 150px;
            height: 43px;
            padding: 8px 16px;
            cursor: pointer;
            font-size: 16px;
            position: relative;
            margin-top: -15px;
            font-weight: bold;
        }

        .auth-links .inscrire {
            background-color: white;
            color: #ce0033;
            border: 1px solid #ce0033;
            justify-content: center;
            width: 150px;
            height: 43px;
            border-radius: 30px;
            padding: 8px 16px;
            cursor: pointer;
            font-size: 16px;
            position: relative;
            margin-top: -15px;
            font-weight: bold;
        }

        .auth-links button:hover {
            background-color: #0056b3;
        }

        .auth-links a:hover {
            color: #0056b3;
        }

        .active {
            color: #ce0033;
        }

        .text-baniere {
            font-family: inter;
        }

        /* footer */
        .footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #d31c26;
            border-top: 1px solid #ddd;
            margin-top: 70px;
            font-size: 20px;
        }
        .footer-logo {
            display: flex;
            align-items: center;
            height: 100px;
            width: 150px;
        }
        .footer-logo img {
            height: 100px;
            width: 250px;
        }
        .footer-column {
            margin: 0 20px;
        }
        .footer-column h2 {
            margin-bottom: 10px;
            font-size: 20px;
            color: #fff;
            font-family: inter;
            font-family: 20px;
        }
        .footer-column ul {
            list-style-type: none;
            padding: 0; 
        }
        .footer-column ul li {
            margin-bottom: 10px;
            font-family: inter; 
        }
        .footer-column ul li a {
            text-decoration: none;
            color: #fff;
        }
        .footer-subscribe {
            display: flex;
            align-items: center;
        }
        .footer-subscribe input[type="email"] {
            padding: 10px;
            border: 1px solid #fff;
            border-radius: 5px 0 0 5px;
            outline: none;
        }
        .footer-subscribe button {
            padding: 10px 20px;
            border: none;
            background-color: #2b2b2b;
            color: #fff;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
        <menu>
            <img src="{{ asset('images/Rectangle 2.png') }}" alt="Logo">
            <nav>
                <a href="/" class="active">Accueil</a>
                <a href="offre">Offres</a>
            </nav>
            <div class="vertical-line"></div>
            <div class="auth-links">
                <a href="register"><button class="inscrire">S'inscrire</button></a>
                <a href="login"><button class="connecter">Se connecter</button></a>
            </div>
        </menu>
    </header>
    <section class="baniere">
        <div class="box-baniere1">
            <img class="img-baniere" src="img/image 4.png" alt="">
        </div>
        <div class="box-baniere2">
            <h6 class="text-baniere">
                Découvrez nos nouvelles formations en technologie
                et innovation. Inscrivez-vous dès maintenant pour
                développer vos compétences et avancer votre
                carrière avec nos experts. Rejoignez-nous!
            </h6>
        </div>
    </section>
    <div class="cont-All">
        <h1 class="text-danger text-center p-2" style="margin-top: -50px;">Nos Formations</h1>
        <section class="cont-box d-flex flex-wrap">
            @foreach ($formations as $formation)
                <div class="box">
                    <img src="{{asset('/images/' . $formation->image)}}" class="card-img-top" alt="...">
                    <div class="box-element1">
                        <h3 class="title-dark text-center">{{ $formation->titre }}</h3>
                        <p>{{ Str::limit($formation->description, 100) }}</p>
                        <a href="{{route('detail.formation', $formation->id)}}" style="text-decoration: none">
                            <button class="btn btn-danger btn_postuler col-12" style="display: flex; justify-content: center; align-items: center; border-radius:100px">Voir plus</button>
                        </a>
                    </div>
                </div>
            @endforeach
        </section>
    </div>
    <footer class="footer">
        <div class="footer-logo">
            <img src="{{ asset('img/logo-footer.svg') }}" alt="Simplon Logo">
        </div>
        <div class="footer-column">
            <h2>Services</h2>
            <ul>
                <li><a href="#">Développement web</a></li>
                <li><a href="#">Référent digital</a></li>
                <li><a href="#">SAASS</a></li>
                <li><a href="#">Développement web</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h2>Ressources</h2>
            <ul>
                <li><a href="#">Fabrique</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Themes</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h2>Simplon</h2>
            <ul>
                <li><a href="#">À propos de nous</a></li>
                <li><a href="#">Nous contactez</a></li>
            </ul>
        </div>
        <div class="footer-subscribe">
            <input type="email" placeholder="Enter votre email">
            <button>Abonner</button>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
