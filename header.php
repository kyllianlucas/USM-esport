<!DOCTYPE html>
<html lang="en" id="html-lang">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/header.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./asset/img/logo.png" type="image/x-icon">
    <title>USM eSport</title>
</head>
<body>
    <nav class="nav">
        <div class="container">
            <ul id="menu" class="menu">
                <li><a href="./index.php" class="nav-link" data-lang="Accueil">Accueil</a></li>
                <li><a href="./rosters.php" class="nav-link" data-lang="Nos Rosters">Nos Rosters</a></li>
                <li><a href="./staff.php" class="nav-link" data-lang="Staff">Responsables</a></li>
                <li><a href="./palmares.php" class="nav-link" data-lang="Palmarès">Palmarès</a></li>
                <li><a href="#"><img src="./asset/img/logo.png" alt="USM eSport" class="logo"></a></li>
                <li><a href="./partenaires.php" class="nav-link" data-lang="Partenaires">Partenaires</a></li>
                <li><a href="./network.php" class="nav-link" data-lang="Réseaux">Réseaux</a></li>
                <li><a href="./shop.php" class="nav-link" data-lang="Shop">Boutique</a></li>
                <li><a href="./contact.php" class="nav-link" data-lang="Contact">Nous contacter</a></li>
                <li class="relative">
                    <div class="language-selector inline-block">
                        <a href="#" class="nav-link" onclick="changeLanguage('fr');">
                            <img src="./asset/img/france-flag.png" alt="French Flag">
                        </a>
                        <ul class="dropdown-menu">
                            <li class="language-option">
                                <a href="#" onclick="changeLanguage('en');">
                                    <img src="./asset/img/uk-flag.png" alt="UK Flag">
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            <button id="menu-button" class="menu-button">
                <svg class="menu-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </nav>
    <script src="js/language.js"></script>
    <script src="js/navbar.js"></script>
</body>
</html>
