<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/personnel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/offre.css') }}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
 body {
    font-family: Arial, sans-serif;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0%;
}
.card {
    display: flex;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    overflow: hidden;
    width: 800px;
    height: 600px;
}
.card-content {
    padding: 20px;
    flex: 100%;
}
.card-content h2 {
    margin: 0;
    font-size: 60px;
    color: #333;
    display: center;
}
.card-content .date {
    margin: 10px 0;
    color: #777;
}
.qualities {
    list-style: none;
    padding: 0;
}
.qualities li {
    display: flex;
    align-items: center;
    background: #f5f5f5;
    border-radius: 20px;
    padding: 10px;
    margin: 10px 0;
}
.qualities li img {
    margin-right: 10px;
}
.card-image {
    background: #f5f5f5;
    padding: 20px;
    display:inline-flex;
    flex-direction: column;
    /* justify-content: space-between; */
    align-items: center;
    width: 1000px
}
.card-image img {
    border-radius: 50%;
    width: 100px;
    height: 100px;
}
.contact {
    text-align: center;
    color: #777;
}
.contact a {
    color: #e74c3c;
    text-decoration: none;
    display: block;
    margin: 5px 0;
}
.apply-button {
    background: #e74c3c;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 20px;
    cursor: pointer;
    transition: background 0.3s;
}
.apply-button:hover {
    background: #c0392b;
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
    <i class="fa-solid fa-people-group" style="color: #ffffff;"></i> <a href="/dashbord_candidat.html">Candidats</a>
</li>
<li class="colonne">
    <i class="fa-solid fa-graduation-cap" style="color: #ffffff;"></i> <a href="/dashbord_candidature.html">Candidatures</a>
</li>
<li class="colonne">

    <a href="">Connexion</a>
</li>

</ul>
</nav>
<<div class="container mt-4" > 
    <div class="row">
        @foreach ($formations as $formation)
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-content p-3">
                    <h2>{{ $formation->titre }}</h2>
                    <div class="date">Date limite: {{ $formation->date_expiration }}</div>
                    <ul class="qualities list-unstyled">
                        <li><img src="https://img.icons8.com/ios-filled/20/000000/checkmark.png"/> Qualite</li>
                        <li><img src="https://img.icons8.com/ios-filled/20/000000/checkmark.png"/> Qualite</li>
                        <li><img src="https://img.icons8.com/ios-filled/20/000000/checkmark.png"/> Qualite</li>
                    </ul>
                </div>
                <div class="card-image p-3">
                    <img src="{{ $formation->image }}" class="img-fluid" alt="Profile Picture">
                    <div class="contact mt-3">
                        <a href="tel:+3338900997" class="d-block">📞 33 890 09 97</a>
                        <a href="mailto:simplon@gmail.com" class="d-block">📧 simplon@gmail.com</a>
                        <button class="apply-button btn btn-danger mt-3">Postuler</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>




<!-- le conteneur des elements -->
{{-- <div class="conteneur_element">
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
    
         @endforeach --}}

 




    
    
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>

