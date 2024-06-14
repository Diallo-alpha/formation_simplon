<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simplon.co</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img src="{{asset('images/simplon 1.svg')}}" alt="Simplon.co">
            </div>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <div class="auth-buttons">
                <button>se connecter</button>
                <button>S'INSCRIRE</button>
            </div>
        </nav>
    </header>
    <section class="hero" style="background-image: url('{{ asset('images/banner.png') }}');">
        <h1>L'informatique pour tous, <br> gratuitement.</h1>
        <p>Notre entreprise s'engage à offrir des <br> formations informatiques gratuites pour rendre <br>l'éducation numérique accessible à tous.</p>
    </section>

    <section class="offers">
        <h2>Nos Differentres offres</h2>
        <p>formations informatiques gratuites pour rendre l'éducation numérique accessible à tous.</p>
        <div class="offer-cards">
            <div class="card">
                <img src="{{asset('img/image 4.png')}}" alt="HTML5 Logo">
                <h3>Developpement web</h3>
                <p>Le développement web consiste à créer et maintenir des sites internet et des applications web. Il englobe plusieurs aspects, y compris la conception web, la programmation, la gestion de bases de données et la mise en réseau.</p>
            </div>
            <div class="card">
                <img src="{{asset('img/image 4.png')}}" alt="PHP Logo">
                <h3>Developpement Backend</h3>
                <p>Le développement web consiste à créer et maintenir des sites internet et des applications web. Il englobe plusieurs aspects, y compris la conception web, la programmation, la gestion de bases de données et la mise en réseau.</p>
            </div>
            <div class="card">
                <img src="{{asset('img/image 4.png')}}" alt="Referent Digital Logo">
                <h3>Referent Digital</h3>
                <p>Le développement web consiste à créer et maintenir des sites internet et des applications web. Il englobe plusieurs aspects, y compris la conception web, la programmation, la gestion de bases de données et la mise en réseau.</p>
            </div>
        </div>
    </section>
    <section class="a-propos">
        <h2>A propos de nous</h2>
        <div class="about-content">
            <img src="{{asset('img/image 4.png')}}" alt="About us">
            <div class="about-text">
                <p>Bienvenue chez Simplon, une entreprise dédiée à l'innovation et à l'excellence dans le domaine des technologies de l'information. Notre mission est de rendre le savoir numérique accessible à tous, en offrant des solutions de formation informatique gratuites et de haute qualité.</p>
            </div>
        </div>
    </section>
    <section class="chifrre" style="background-image: url('{{ asset('img/image chiffre.png') }}');">
       <div><img src="{{asset('img/image 5.png')}}" alt="simplon logo" class="chiffre-img"></div>
       <div class="chiffre-content">
       <div class="contenu-chiffre">
        <p><strong>140</strong> <br> <span>student</span> </p>
       </div>
    </div>
    </section>

    <section class="partners">
        <h2>Nos partenaires</h2>
        <div class="partner-logos">
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
