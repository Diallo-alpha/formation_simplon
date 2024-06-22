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

</head>
<body>

    <header>
        <nav>
            <div class="logo">
                <img src="{{asset('images/simplon 1.svg')}}" alt="Simplon.co">
            </div>
            <ul>
                <li><a href="{{route('index')}}">Accueil</a></li>
                <li><a href="{{route('liste.offre')}}">Offres</a></li>
            </ul>
            <div class="auth-buttons">
          
        </nav>
    </header>
    <section class="baniere">
        <div class="box-baniere1">
            <img class="img-baniere" src="img/image 4.png" alt="">
        </div>
        <div class="box-baniere2">
            <h6  class="text-baniere">
                Découvrez nos nouvelles formations en technologie
        et innovation. Inscrivez-vous dès maintenant pour
         développer vos compétences et avancer votre
        carrière avec nos experts. Rejoignez-nous!
            </h6>
        </div>
    </section>
    <div class="cont-All ">
         <h1 class="text-danger text-center p-2" style="margin-top: -50px;">Nos Formations</h1>
        <section class="cont-box d-flex  flex-wrap ">
          @foreach ($formations as $formation )


          <div class="box">

            <img src="{{asset('/images/' . $formation->image)}}" class="card-img-top" alt="...">

            <div class="box-element1">
                <h3 class="title-dark text-center">{{ $formation->titre }}</h3>
              <p>
                {{ Str::limit($formation->description, 100) }}
              </p>
              <a href="{{route('detail.formation', $formation->id)}}" style="text-decoration: none"> <button class="btn btn-danger btn_postuler col-12" style="display: flex; justify-content: center; align-items: center; border-radius:100px">Voir plus</button>
              </a>
            </div>

        </div>


          @endforeach
      
   
           {{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simplon Footer</title> --}}
    <style>
        body {
            font-family: Arial, sans-serif;
            width: 1800px;
        }
        .footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #d31c26;
            border-top: 1px solid #ddd;
            width: 5020px;
        }
        .footer-logo {
            display: flex;
            align-items: center;
            height: 100px;
            width: 99px;
        }
        .footer-logo img {
            height: 100px;
            width: 200px;
        }
        .footer-column {
            margin: 0 20px;
        }
        .footer-column h2 {
            margin-bottom: 10px;
            font-size: 20px;
            color: #fff;
        }
        .footer-column ul {
            list-style-type: none;
            padding: 0; 
            /* font-family: inter;  */
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
{{-- </body>
</html> --}}

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>

</html>
