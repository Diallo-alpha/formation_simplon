<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Centered Card Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      .custom-card {
        max-width: 1200px; /* Adjust the width as needed */
        margin: 0 auto; /* Center the card horizontally */
        margin-top: 30px;
      }
      .custom-img {
        width: 50%; /* Ensure image takes half width of its container */
        height: auto; /* Maintain aspect ratio */
      }
      .custom-card-body {
        width: 50%; /* Ensure text takes half width of its container */
        padding: 20px; /* Adjust padding as needed */
      }
      .custom-card-container {
        display: flex;
        align-items: center; /* Vertically align items */
      }

      .card-text{
        font-size: 20px
      }
/* carte */

.card-container {
  display: flex;
  justify-content: space-between; /* Pour espacer également les cartes horizontalement */
  width: 1000px; /* Largeur souhaitée pour le conteneur */
  height: 100;
}

.card {
  flex: 0 0 48%; /* Permet à chaque carte de prendre environ la moitié de l'espace disponible */
  padding: 20px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  border-radius: 8px;
  background-color: #fff;
}

.card h2 {
  margin-top: 0;
}

.card hr {
  margin: 10px 0;
}

.card p {
  font-size: 16px; /* Taille du texte */
}


    </style>
  </head>
  <body>
    <div class="card mb-3 custom-card container">
      <div class="custom-card-container">
        <img src="{{asset('img/Image_collée.png')}}" class="img-fluid custom-img" alt="...">
        <div class="custom-card-body">
          <h1 class="card-title">Internet Industriel des Objets (IIoT)</h1>
          <p class="card-text ">
            Découvrez l'Internet des Objets Industriels (IIOT) avec notre formation chez SIMPLON. Apprenez à collecter, analyser et utiliser des données en temps réel pour optimiser les processus industriels. Nos formateurs experts vous guideront à travers des projets pratiques. Aucune expérience préalable n'est requise, juste une passion pour la technologie. Rejoignez-nous et devenez un acteur de l'industrie.
          </p>
          <p class="card-text">
            <small class="text-body-secondary">Contactez-nous pour plus d'informations et inscriptions.</small>
          </p>
        </div>
      </div>
    </div>
    <h2 class="text-center mt-5">SIMPLON vous offre une opportunité unique de vous <br>
      former dans ce secteur en pleine croissance !</h2>


<div class="container " style="display: flex; align-items: center;">
      <div class="card border mb-3 m-5" style="max-width: 50rem;">
        <div class="card-header"><h1>Programme</h1></div>
        <div style="width: 40%; height: 2px; background-color: red; margin: 20px 0;"></div>
        <div class="card-body m-4 " style="height: 150px;">
          <h5 class="card-title">Primary card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <div style="position: absolute; bottom: 10px; right: 10px;color: red">durée 6 mois</div>
        </div>
      </div>

      <div class="card border mb-3 m-5" style="max-width: 50rem;">
        <div class="card-header"><h1>Competences</h1></div>
        <div style="width: 40%; height: 2px; background-color: red; margin: 20px 0;"></div>
        <div class="card-body m-4 " style="height: 150px;">
          <h5 class="card-title">Primary card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <div style="position: absolute; bottom: 10px; right: 10px;color: red">durée 6 mois</div>
        </div>
      </div>
    </div>

    <div class="container " style="display: flex; align-items: center;">
      <div class="card border mb-3 m-5" style="max-width: 50rem;">
        <div class="card-header"><h1>Programme</h1></div>
        <div style="width: 40%; height: 2px; background-color: red; margin: 20px 0;"></div>
        <div class="card-body m-4 " style="height: 150px;">
          <h5 class="card-title">Primary card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <div style="position: absolute; bottom: 10px; right: 10px;color: red">durée 6 mois</div>
        </div>
      </div>

      <div class="card border mb-3 m-5" style="max-width: 50rem;">
        <div class="card-header"><h1>Competences</h1></div>
        <div style="width: 40%; height: 2px; background-color: red; margin: 20px 0;"></div>
        <div class="card-body m-4 " style="height: 150px;">
          <h5 class="card-title">Primary card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <div style="position: absolute; bottom: 10px; right: 10px; color: red">durée 6 mois</div>

        </div>
      </div>
    </div>

    <div class="container " style="display: flex; align-items: center;">
        <div class="card border mb-3 m-5" style="max-width: 50rem;">
          <div class="card-header"><h1>solftskil</h1></div>
          <div style="width: 40%; height: 2px; background-color: red; margin: 20px 0;"></div>
          <div class="card-body m-4 " style="height: 150px;">
            <h5 class="card-title">Primary card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <div style="position: absolute; bottom: 10px; right: 10px;color: red">durée 6 mois</div>
          </div>
        </div>

        <div class="card border mb-3 m-5" style="max-width: 50rem;">
          <div class="card-header"><h1>debouche</h1></div>
          <div style="width: 40%; height: 2px; background-color: red; margin: 20px 0;"></div>
          <div class="card-body m-4 " style="height: 150px;">
            <h5 class="card-title">Primary card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <div style="position: absolute; bottom: 10px; right: 10px; color: red">durée 6 mois</div>

          </div>
        </div>
      </div>

      <div class="container col-12">

      <div class="text-center pr-30px"style="position:center;">

        <button class="btn btn-danger text-white btn-adjusted">Postuler</button>
      </div>
      </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
