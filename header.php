<!DOCTYPE html>
<html lang="en" id="html-lang">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="./asset/img/logo.png" type="image/x-icon">
    <title>USM eSport</title>
</head>
<body>
    <nav class="bg-transparent py-4">
        <div class="container mx-auto flex items-center justify-between">
            <ul id="menu" class="hidden lg:flex flex-col lg:flex-row items-center space-x-4 lg:space-x-0 lg:space-y-0 w-full justify-between">
                <li class="lg:flex lg:items-center"><a href="./index.php" class="nav-link px-3 py-2 text-sm uppercase" data-lang="Accueil">Accueil</a></li>
                <li class="lg:flex lg:items-center"><a href="./rosters.php" class="nav-link px-3 py-2 text-sm uppercase" data-lang="Nos Rosters">Nos Rosters</a></li>
                <li class="lg:flex lg:items-center"><a href="./staff.php" class="nav-link px-3 py-2 text-sm uppercase" data-lang="Staff">Responsables</a></li>
                <li class="lg:flex lg:items-center"><a href="./palmares.php" class="nav-link px-3 py-2 text-sm uppercase" data-lang="Palmarès">Palmarès</a></li>
                <li><a href="#"><img src="./asset/img/logo.png" alt="USM eSport" class="w-20"></a></li>
                <li class="lg:flex lg:items-center"><a href="./partenaires.php" class="nav-link px-3 py-2 text-sm uppercase" data-lang="Partenaires">Partenaires</a></li>
                <li class="lg:flex lg:items-center"><a href="./network.php" class="nav-link px-3 py-2 text-sm uppercase" data-lang="Réseaux">Réseaux</a></li>
                <li class="lg:flex lg:items-center"><a href="./shop.php" class="nav-link px-3 py-2 text-sm uppercase" data-lang="Shop">Boutique</a></li>
                <li class="lg:flex lg:items-center"><a href="./contact.php" class="nav-link px-3 py-2 text-sm uppercase" data-lang="Contact">Nous contacter</a></li>
                <li class="relative">
                    <div class="language-selector inline-block">
                        <a href="#" class="nav-link px-3 py-2 flex items-center" onclick="changeLanguage('fr');">
                            <img src="./asset/img/france-flag.png" alt="French Flag" class="w-6 h-auto">
                        </a>
                        <ul class="dropdown-menu mt-1">
                            <li>
                                <a href="#" class="block px-3 py-2" onclick="changeLanguage('en');">
                                    <img src="./asset/img/uk-flag.png" alt="UK Flag" class="w-6 h-auto mr-2">
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            <button id="menu-button" class="absolute top-4 right-4 lg:hidden text-white focus:outline-none">
                <svg class="w-8 h-8 border border-white rounded p-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </nav>
    <script src="js/language.js"></script>
    <script src="js/navbar.js"></script>
</body>
</html>
