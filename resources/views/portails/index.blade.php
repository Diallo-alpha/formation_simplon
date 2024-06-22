<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styliser le Header</title>
    <link rel="stylesheet" href="styles.css">
    <style>/* Styles généraux */
      
        
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
            justify-content: center;
            gap: 20px;
            margin-left: 130px
        }
        
        nav a {
            text-decoration: none;
            color: black;
            font-size: 20px;
            padding: 8px 12px;
            font-family: inter;
            font-weight: bold;
        }
        
        nav a:hover {
            background-color: #e9ecef;
            border-radius: 4px;
        }
        
        .auth-links {
            display: flex;
            gap: 15px;
            justify-content: center;
            margin-right: 25px

        }
        
        .auth-links a {
            text-decoration: none;
            color:black;
            font-size: 20px;
            padding: 8px 12px;
            font-family: inter;
            font-weight: bold;
            justify-content: center;
        }
        
        .auth-links .connecter{
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

        .auth-links .inscrire{
            background-color:white ;
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
        .active{
            color: #ce0033
        }

        .container {
    display: flex;
    flex-direction: row;
    align-items: center;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    max-width: 100%;
    padding: 20px;
}

/* Section contenu */
.content {
    padding: 20px;
   
}

.content h1 {
    color: #ce0033;
    margin-bottom: 20px;
    margin-left: 100px;
}

.content p {
    font-size: 18px;
    font-weight: 400;
    margin-bottom: 20px;
    margin-left: 100px;
    text-align: justify;
}


.content ul {
    list-style:none ;
    color: #ce0033
    padding: 0;
    margin-left: 60px;

}

.content ul li {
    font-size: 18px;
    font-weight: 700;
    margin-bottom: 10px;
    position: relative; /* Nécessaire pour positionner le pseudo-élément */
    padding-left: 30px; /* Ajoute un espace pour les nouvelles puces */
}
.content ul li::before {
    content: "";
    width: 12px; /* Diamètre du cercle */
    height: 12px; /* Diamètre du cercle */
    border: 1px solid #ce0033;
    border-radius: 50%; /* Forme de cercle */
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%); /* Centre verticalement */
}

/* Section image */
.image {
    margin-left: 300px;
}

.image img {
    max-width: 100%;
    height: auto;
   margin-top: 50px;
}
/* la premiere section */
.contenu{
    background-image: url('images/Rectangle 12.png');
    background-size: cover;
    height: 650px;
    display: flex;
    border-bottom: 13px solid #ce0033
    
}
.text h1{
    color: #ce0033;
    position: absolute;
    margin-top: 200px;
    margin-left: 150px
    
} 
.text p{
    font-size: 20px;
    font-family: inter;
    margin-left: 150px;
    position: absolute;
    font-weight: 400;
   
margin-top:270px;
} 
.une_image img{
    max-width: 100%;
    height: auto;
   margin-top: 100px;
   margin-left: 900px;

} 

.service{
    text-align: center;
    color: #ce0033;
    margin-top: 100px;
}
 .section3{
    width: 100%;
    height: 900px;
     background-color: #ce0033; 
    margin-top: 100px; */
    display: flex;
    justify-content: center;
    align-items: center;
    /* margin-top: 50px; */
} 
 .mes_cards{
    display: flex;
    position: relative;
    margin-top: 50px;
    margin-left: 50px;
}

 .card{
    background-color: white;
    width: 404px;
    height: 312px;
    margin-left: 50px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
    padding: 20px;
    position: relative;
    margin-top: 50px;
    display: flex;
    flex-direction: column;
    align-items: center;
   
    
} 
.card p{
    font-size: 18px;
}
/* section des chiffres */
.chiffres{
    width: 100%;
    height: 242px;
    display: flex;
    background-image: url('images/Group 272.png');
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap; /* Pour s'assurer que les éléments se déplacent sur la ligne suivante s'ils sont trop nombreux */
    margin-top: 50px;
    gap: 20px; 
}
.les_chiffres p {
    color: white;
    font-family: inter;
    font-weight: bold;
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    font-size: 22px;
    font-weight: 400;
    margin: 10px 0;
}
.les_chiffres h1 {
    color: white;
    font-family: inter;
    font-weight: bold;
    font-size: 48px; 
    margin: 10px 0;

   
    
}

.les_chiffres {
    display: flex;
    flex-direction: column;
    justify-content: center; /* Centrer verticalement */
    align-items: center; /* Centrer horizontalement */
    text-align: center; /* Centrer le texte */
    justify-content: space-between;
    margin: 20px 60px 15px;
}

.chiffre{
    color: #ce0033;
    text-align: center;
    margin-top: 70px
}
/* partenaires  */
.partenaires {
    display: flex;
    margin-top: 70px;
}

.partenaire{
    margin-left: 100px ;
}

/* temoignage */

.temoignage {
    text-align: center;
    margin-top: 60px;
}
.metier{
    color: #ce0033;
}






 </style>
</head>
<body>
    <header>
        <menu>
            <img src="{{ asset('images/Rectangle 2.png') }}" alt="Logo">
            <nav>
                <a href="" class="active">Accueil</a>
                <a href="offre">Offres</a>
            </nav>
            <div class="vertical-line"></div>
            <div class="auth-links">
                <a href="register" ><button class="inscrire">S'inscrire</button></a>
                <a href="login"><button class="connecter">Se connecter</button></a>
            </div>
        </menu>
    </header>

    <div class="container">
        <div class="content">
            <h1>L'informatique pour tous,  gratuitement.</h1>
            <p>En combinant apprentissage pratique et <br>
               développement personnel, Simplon Sénégal <br>
               prépare ses apprenants à une insertion <br>
               professionnelle réussie et contribue au <br>
               développement des compétences <br>
               numériques dans la région.</p>
            <ul>
                <li>Formation</li>
                <li>Bootcamps Intensifs</li>
                <li>Ateliers</li>
                <li>Programmes de Mentorat</li>
                <li>Projets Réels et Stages</li>
            </ul>
        </div>
        <div class="image">
            <img src="{{ asset('images/Group 9 1.png') }}" alt="Description de l'image">
        </div>
    </div>

    <section class="contenu">
        <div class="text">
            <h1>Simplon le réseau de centres de formation <br>
                gratuit aux métiers du numérique</h1>

            <p>​​​​​​Simplon Sénégal vous forme aux métiers du numérique, <br>
                 développement web et mobile, digitalisation et <br>
                  maintenance d’une chaîne de production industrielle ou <br>
                   encore formation référent.e digital.  N'hésitez plus et formez <br>
                   vous avec Simplon Sénégal pour vous ouvrir à de nouvelles <br>
                    perspectives professionnelles.</p>    
        </div>
        <div class="une_image"><img src="{{ asset('images/Rectangle 13.png') }}" alt=""></div>
    </section>

    <h1 class="service">Nos services</h1> 

    <section>
        <div class="section3">
            <div class="mes_cards">
                <div class="card">
                 <img src="{{ asset('images/Group 254.png') }}" alt="">
                    <h2>Accompagnement à l'Insertion Professionnelle</h2>
                    <p>Modules de développement personnel et
                     professionnel pour préparer les
                      apprenants au marché du travail.</p>

                </div>

                <div class="card">
                    <img src="{{ asset('images/Group 254.png') }}" alt="">
                       <h2>Accompagnement à l'Insertion Professionnelle</h2>
                       <p>Modules de développement personnel et
                        professionnel pour préparer les
                         apprenants au marché du travail.</p>
   
                   </div>

                   <div class="card">
                    <img src="{{ asset('images/Group 254.png') }}" alt="">
                       <h2>Accompagnement à l'Insertion Professionnelle</h2>
                       <p>Modules de développement personnel et
                        professionnel pour préparer les
                         apprenants au marché du travail.</p>
   
                   </div>
            </div>
            <div class="mes_cards">
                <div class="card">
                 <img src="{{ asset('images/Group 254.png') }}" alt="">
                    <h2>Accompagnement à l'Insertion Professionnelle</h2>
                    <p>Modules de développement personnel et
                     professionnel pour préparer les
                      apprenants au marché du travail.</p>

                </div>

                <div class="card">
                    <img src="{{ asset('images/Group 254.png') }}" alt="">
                       <h2>Accompagnement à l'Insertion Professionnelle</h2>
                       <p>Modules de développement personnel et
                        professionnel pour préparer les
                         apprenants au marché du travail.</p>
   
                   </div>

                   <div class="card">
                    <img src="{{ asset('images/Group 254.png') }}" alt="">
                       <h2>Accompagnement à l'Insertion Professionnelle</h2>
                       <p>Modules de développement personnel et
                        professionnel pour préparer les
                         apprenants au marché du travail.</p>
   
                   </div>
            </div>

        </div>

    </section>
    <h1 class="chiffre">Chiffres cles</h1> 
    <section>
        <div class="chiffres">
            <div class="les_chiffres">
                <h1>1901</h1>
                <p>Apprenant.es formé.es depuis <br>
                    l’ouverture dans le pays</p>
            </div>
            <div class="les_chiffres">
                <h1>1901</h1>
                <p>Apprenant.es formé.es depuis <br>
                    l’ouverture dans le pays</p>
            </div>
            <div class="les_chiffres">
                <h1>1901</h1>
                <p>Apprenant.es formé.es depuis <br>
                    l’ouverture dans le pays</p>
            </div>
        </div>
    </section>
    <h1 class="chiffre">Nos partenaires</h1>
    <section>
        <div class="partenaires">
            <div class="partenaire">
                <img src="{{ asset('images/Rectangle 28.png') }}" alt="">
            </div>
            <div  class="partenaire">
                <img src="{{ asset('images/Rectangle 29.png') }}" alt="">
            </div>
            <div  class="partenaire">
                <img src="{{ asset('images/Rectangle 30.png') }}" alt="">
            </div>
            <div  class="partenaire">
                <img src="{{ asset('images/Rectangle 31.png') }}" alt="">
            </div>

        </div>
    </section>
        <h1 class="chiffre">Temoiganges</h1>
    <section>
        <div class="temoignage">
            <img src="{{ asset('images/Ellipse 17.png') }}" alt="">
            <p>"Avant de rejoindre Simplon, je n'avais aucune expérience en programmation. Grâce à <br> leur formation intensive et à l'accompagnement des formateurs, j'ai acquis des compétences solides en développement web. Aujourd'hui, je travaille comme <br> développeuse front-end dans une entreprise tech à Dakar. Simplon m'a non seulement donné des compétences techniques, mais <br> aussi la confiance nécessaire pour entrer sur le marché du travail."</p>
            <h3>Anna Marone</h3>
            <h3 class="metier">Developpeuse Full stack</h3>
        </div>
    </section>


</body>
</html>
