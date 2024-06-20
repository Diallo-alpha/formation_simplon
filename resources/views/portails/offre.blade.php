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
                <li><a href="#">Services</a></li>
                <li><a href="{{route('liste.offre')}}">Offre</a></li>
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
              <a href="detaille/{{ $formation->id }}" style="text-decoration: none"> <button class="btn btn-danger btn_postuler col-12" style="display: flex; justify-content: center; align-items: center; border-radius:100px">Voir plus</button>
              </a>
            </div>

        </div>


          @endforeach
          
          <div class="container-fluid bg-gradient p-5">
         
      <div class="row m-auto text-center w-80">

      @foreach ($formations as $formation )
     
        <div class="col-4 princing-item red">
          <div class="pricing-divider ">
          <p>titre:{{ $formation->titre }}</p>
          <img src="{{asset('/images/' . $formation->image)}}" class="card-img-top" alt="...">
          </div>
          <div class="card-body bg-white mt-0 shadow">
           
            <button type="button" class="btn btn-lg btn-block  btn-custom ">Sign up for free</button>
          </div>
        </div>
        @endforeach
        
      </div>
    
    </div>
   
          <footer>
            <div class="footer-content">
                <div class="footer-logo">
                    <img src="{{asset('images/simplon 1.svg')}}" alt="Simplon.co">
                </div>
                <div class="footer-links">
                    <div class="footer-column">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Developpement web</a></li>
                            <li><a href="#">Referent digital</a></li>
                            <li><a href="#">SAASS</a></li>
                            <li><a href="#">Developpement web</a></li>
                        </ul>
                    </div>
                    <div class="footer-column">
                        <h3>Resources</h3>
                        <ul>
                            <li><a href="#">Fabrique</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Themes</a></li>
                        </ul>
                    </div>
                    <div class="footer-column">
                        <h3>Simplon</h3>
                        <ul>
                            <li><a href="#">A propos de nous</a></li>
                            <li><a href="#">Nous contactez</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-newsletter">
                    <input type="email" placeholder="Enter votre email">
                    <button>Abonner</button>
                </div>
            </div>
        </footer>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>

</html>
