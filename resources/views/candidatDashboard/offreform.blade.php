

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/personnel.css') }}">
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
</div>



<!-- le conteneur des elements -->
<div class="conteneur_element">

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
</head>
<body>
<div class="card">
<div class="card-content">
    <h2>Developpement</h2> <h2>Web</h2>
    <div class="date">Date limite: 18/05/2020</div>
    <ul class="qualities">
        <li><img src="https://img.icons8.com/ios-filled/20/000000/checkmark.png"/>Qualite</li>
        <li><img src="https://img.icons8.com/ios-filled/20/000000/checkmark.png"/>Qualite</li>
        <li><img src="https://img.icons8.com/ios-filled/20/000000/checkmark.png"/>Qualite</li>
    </ul>
</div>
<div class="card-image">
    <img src="https://via.placeholder.com/100 " alt="Profile Picture">
    <div class="contact">
        <a href="tel:+3338900997">📞 33 890 09 97</a>
        <a href="mailto:simplon@gmail.com">📧 simplon@gmail.com</a>
        <button class="apply-button">postuler</button>
    </div>
</div>
</div>





</div>










</div>
</body>
</html>
