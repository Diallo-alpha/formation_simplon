<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1> Formation en IIOT chez SIMPLON</h1>
    <style>.card {
        margin: 20px; /* Marge autour de la carte */
      }
      
      .card-img-top {
        width: 50%; /* Largeur de l'image à 50% */
        height: auto; /* Conserver le ratio d'aspect de l'image */
        object-fit: cover; /* Recouvrir entièrement la zone d'image tout en conservant le ratio d'aspect */
        margin: 0 auto; /* Centrer l'image horizontalement */
        display: block; /* S'assurer que l'image est un bloc */
      }
      
      .card-body {
        padding: 20px; /* Marge intérieure de la carte */
      }
      </style>
    
    <div class="card mb-3 container witdh:75px d-center" style="max-width: 2500px;">
        <div class="row g-0">
          <div class="col-md-4 width:280px">
            <img  src="{{asset('img/Image_collée.png')}}" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Internet Industriel des Objets (IIoT)</h5>
              <p class="card-text">Découvrez l'Internet des Objets Industriels (IIOT) avec notre formation chez SIMPLON. Apprenez à collecter, analyser et utiliser des données en temps réel pour optimiser les processus industriels. Nos formateurs experts vous guideront à travers des projets pratiques. Aucune expérience préalable n'est requise, juste une passion pour la technologie. Rejoignez-nous et devenez un acteur de l'industrie .
                </p>
              <p class="card-text"><small class="text-body-secondary"> Contactez-nous pour plus d'informations et inscriptions.</small></p>
            </div>
          </div>
        </div>
      </div>
    
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>