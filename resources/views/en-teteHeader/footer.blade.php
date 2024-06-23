  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simplon Footer</title> 
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #d31c26;
            border-top: 1px solid #ddd;
        }
        .footer-logo {
            display: flex;
            align-items: center;
            height: 100px;
            width: 150px;
        }
        .footer-logo img {
            height: 100px;
            width: 250px;
        }
        .footer-column {
            margin: 0 20px;
        }
        .footer-column h2 {
            margin-bottom: 10px;
            font-size: 20px;
            color: #fff;
        }
        .footer-column ul {
            list-style-type: none;
            padding: 0; 
        }
        .footer-column ul li {
            margin-bottom: 10px;
            font-family: inter; 
        }
        .footer-column ul li a {
            text-decoration: none;
            color: #fff;
        }
        .footer-subscribe {
            display: flex;
            align-items: center;
        }
        .footer-subscribe input[type="email"] {
            padding: 10px;
            border: 1px solid #fff;
            border-radius: 5px 0 0 5px;
            outline: none;
        }
        .footer-subscribe button {
            padding: 10px 20px;
            border: none;
            background-color: #2b2b2b;
            color: #fff;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <footer class="footer">
        <div class="footer-logo">
            <img src="{{ asset('img/logo-footer.svg') }}" alt="Simplon Logo">
        </div>
        <div class="footer-column">
            <h2>Services</h2>
            <ul>
                <li><a href="#">Développement web</a></li>
                <li><a href="#">Référent digital</a></li>
                <li><a href="#">SAASS</a></li>
                <li><a href="#">Développement web</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h2>Ressources</h2>
            <ul>
                <li><a href="#">Fabrique</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Themes</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h2>Simplon</h2>
            <ul>
                <li><a href="#">À propos de nous</a></li>
                <li><a href="#">Nous contactez</a></li>
            </ul>
        </div>
        <div class="footer-subscribe">
            <input type="email" placeholder="Enter votre email">
            <button>Abonner</button>
        </div>
    </footer>
</body>
</html>