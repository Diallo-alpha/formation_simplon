<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/candidat.css') }}">

    <link rel="stylesheet" href="{{ asset('css/offre.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

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

           {{-- <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-6">
                <img src="{{asset('/images/' . $formation->image)}}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">{{ $formation->titre }}</h5>
                  <p class="card-text">{{ $formation->description }}</p>
                  <button class="btn btn-danger btn-center btn_postuler">Postuler</button>
                </div>
              </div>
            </div>
          </div>  --}}
          {{-- <div class="card" style="width: 20rem;">
            <div class="d-flex">
                <!-- Image à gauche -->
                <img src="{{asset('/images/' . $formation->image)}}" class="card-img-top" alt="..." style="flex: 0 0 50%; max-width: 50%;">

                <!-- Contenu de la carte à droite -->
                <div class="card-body" style="flex: 1;">
                    <h5 class="card-title">{{ $formation->titre }}</h5>
                    <p class="card-text">{{ $formation->description }}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div> --}}
        {{-- <div class="container">
          <div class="card">
            <div class="image">
              <img src="{{asset('/images/' . $formation->image)}}" alt="Image 1">
            </div>
            <div class="text">
              <h2>Titre 1</h2>
              <p>Texte de description 1...</p>
            </div>
          </div> --}}

          <div class="card" style="width: 22rem; margin-top: -250px;">
            <img src="{{asset('/images/' . $formation->image)}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $formation->titre }}</h5>
              <p class="card-text">{{ Str::limit($formation->description, 100) }}</p>
              <h5 class="card-title">Date limite:  {{ $formation->date_expiration }}</h5>

             <a href="{{route('details.formation')}}" class="btn btn-danger">Voir plus</a>

            </div>
          </div>


          @endforeach
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
