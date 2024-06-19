<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simplon.co</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <style>
        .text_baniere{
            font-size: 2px;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img src="{{asset('images/simplon 1.svg')}}" alt="Simplon.co">
            </div>
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="{{route('liste.offre')}}">Offers</a></li>
            </ul>
            <div class="auth-buttons">
                <button><a href="{{route('auth.getLogin')}}">se connecter</a></button>
                <button> <a href="{{route('auth.getRegister')}}">S'INSCRIRE</a></button>
            </div>
        </nav>
    </header>
    <section class="hero" style="background-image: url('{{ asset('images/banner.png') }}');">
        <h1  class="first_titre">L'informatique pour tous, <br> gratuitement.</h1>
        <p class="text_baniere">Notre entreprise s'engage à offrir des <br> formations informatiques gratuites pour rendre <br>l'éducation numérique accessible à tous.</p>
    </section>

    <section class="offers">
        <h2 class="All_titre">Nos Différents offres</h2>
        <p style="margin:0rem 0rem 2rem 0rem ">formations informatiques gratuites pour rendre <br> l'éducation numérique accessible à tous.</p>
        <div class="offer-cards">
            <div class="card">
                <img class="img_box" src="{{asset('img/pexels-alxs-919734.jpg')}}" alt="HTML5 Logo">
             <div class="card-text">
                <h3 class="card_text_titre" >Developpement web</h3>
                <p>Le développement web consiste à créer et maintenir des sites
                    internet et des applications web. Il englobe plusieurs aspects,
                    y compris la conception web, la programmation, la gestion de bases de
                     données et la mise en réseau.</p>
            </div>
            </div>
            <div class="card">
                <img class="img_box" src="{{asset('img/pexels-pixabay-50711.jpg')}}" alt="PHP Logo">

                <div class="card-text">
                    <h3 class="card_text_titre">Developpement web</h3>
                    <p>Le développement web consiste à créer et maintenir des sites
                        internet et des applications web. Il englobe plusieurs aspects,
                        y compris la conception web, la programmation, la gestion de bases de
                         données et la mise en réseau.</p>
                </div>
            </div>
            <div class="card">
                <img class="img_box" src="{{asset('img/pexels-pixabay-270408.jpg')}}" alt="Referent Digital Logo">
                <div class="card-text">
                    <h3 class="card_text_titre">Developpement web</h3>
                    <p>Le développement web consiste à créer et maintenir des sites
                        internet et des applications web. Il englobe plusieurs aspects,
                        y compris la conception web, la programmation, la gestion de bases de
                         données et la mise en réseau.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="a-propos">
        <h2 class="All_titre">A propos de nous</h2>
        <div class="about-content">
            <img src="{{asset('img/pexels-kevin-ku-92347-577585.jpg')}}" alt="About us">
            <div class="about-text">
                <p>Bienvenue chez Simplon, une entreprise dédiée à
                    l'innovation et à l'excellence dans le domaine des technologies de
                     l'information. Notre mission est de rendre le savoir numérique accessible à
                      tous, en offrant des solutions de formation informatique gratuites et de haute qualité.</p>
            </div>
        </div>
    </section>
    <h2 class="All_titre">Nos Chiffres</h2>
    <section class="chifrre" style="background-image: url('{{ asset('img/Bg.png') }}'); ">
       <div class="cont-img-chiffre"></div>
       <div class="chiffre-content">
        <div class="contenu-chiffre-texte">
            <div  class="cont-text">

                <div class="text1"> <h1> 140</h1></div>
                <div class="text2"> <p class="text2n1"> student</p>  <h1>0+</h1>  </div>
            </div>
           <div> <p class="text3">Lorem ipsum dolor sit amet consectetur,
             adipisicing elit. Culpa eos adipisci ipsum rerum
             s corporis nostrum sequi!</p></div>
           </div>
       <div class="contenu-chiffre-texte">
        <div  class="cont-text">

            <div class="text1"> <h1> 140</h1></div>
            <div class="text2"> <p class="text2n1"> student</p>  <h1>0+</h1>  </div>
        </div>
       <div> <p class="text3">Lorem ipsum dolor sit amet consectetur,
         adipisicing elit. Culpa eos adipisci ipsum rerum
         s corporis nostrum sequi!</p></div>
       </div>
       <div class="contenu-chiffre-texte">
        <div  class="cont-text">

            <div class="text1"> <h1> 140</h1></div>
            <div class="text2"> <p class="text2n1"> student</p>  <h1>0+</h1>  </div>
        </div>
       <div> <p class="text3">Lorem ipsum dolor sit amet consectetur,
         adipisicing elit. Culpa eos adipisci ipsum rerum
         s corporis nostrum sequi!</p></div>
       </div>
       <div class="contenu-chiffre-texte">
        

    </div>

    </section>

    <section class="partners">
        <h2 class="partenaire">Nos partenaires</h2>
        <div class="partner-logos">
            <div class="partner-logo"><img src="{{asset('images/simplon 1.svg')}}" alt=""></div>
            <div class="partner-logo"><img src="{{asset('images/simplon 1.svg')}}" alt=""></div>
            <div class="partner-logo"><img src="{{asset('images/simplon 1.svg')}}" alt=""></div>
            <div class="partner-logo"><img src="{{asset('images/simplon 1.svg')}}" alt=""></div>
            <div class="partner-logo"><img src="{{asset('images/simplon 1.svg')}}" alt=""></div>

        </div>
    </section>

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
</body>
</html>
