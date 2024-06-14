<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/candidat.css') }}">
<<<<<<< HEAD
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">


=======
>>>>>>> feature/frontEnd
    <link rel="stylesheet" href="{{ asset('css/offre.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>
<body>
  <header>
    <div class="logo">
        <img src="images/simplon 1.svg" alt="Logo">
    </div>
    <nav class="nav-menu">
      <ul>
          <li><a href="#">Accueil</a></li>
          <li><a href="#">Service</a></li>
          <li><a href="#">Projet</a></li>
          <li><a href="#">Support</a></li>
        </ul>
  </nav>
    <div class="login-button">
        <button>S'inscrire</button>
    </div>
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
           <button class="btn btn-danger rounded-3  "> S'abonner </button>
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
              <a href="detail" style="text-decoration: none"> <button class="btn btn-danger btn_postuler col-12" style="display: flex; justify-content: center; align-items: center; border-radius:100px">Voir plus</button> 
              </a>
            </div>

        </div>


          @endforeach
          {{-- <footer>
            <div class="container">
              <div class="row">
                <div class="col">
                  <img src="images/simplon 1.svg" alt="" class="footer-logo">
                </div>
                <div class="col">
                  <h3>Sevices</h3>
                  <ul>
                    <li>Developpement web</li>
                    <li>Referent digital</li>
                    <li>SAASS</li>
                    <li>Developpement web </li>
                    <br>
                  </ul>
                </div>
                <div class="col">
                  <h3>Resources</h3>
                  <ul>
                  <li>Fabrique</li>
                  <li>Blog</li>
                  <li>Themes</li>
                </ul>
                <br>
                </div>
                <div class="col">
                  <h3>Simplons</h3>
                    <ul>
                      <li>A propos de nous</li>
                      <li>Nous contactez</li>
                    </ul>
                    <div class="newsletter">
                      <input type="email" placeholder="votre adresse e-mail">
                      <button type="button" class="btn btn-danger button-newletter">Abonner</button>
                    </div>
                    <br>
                </div>
              </div>
            </div>
            <div><br></div> --}}
          </footer>
          

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   

</body>

</html>
