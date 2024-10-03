<!DOCTYPE html>
<html lang="fr" id="html-lang">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./asset/img/logo.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script> <!-- CDN de Tailwind -->
    <title>USM eSport</title>
</head>
<body class="bg-cover bg-fixed text-white font-sans m-0 p-0" style="background-image: url('/asset/img/bg1.png');">
    <nav class="bg-transparent py-4">
        <div class="container mx-auto flex items-center justify-between relative">
            <!-- Menu de Navigation -->
            <ul id="menu" class="flex items-center justify-center w-full bg-black/80 md:bg-transparent md:py-0 py-0 md:px-0 px-0">
                <!-- Liens à Gauche -->
                <div class="flex space-x-10 mr-10">
                    <li><a href="./index.php" class="text-white hover:text-red-500" data-lang="Accueil">Accueil</a></li>
                    <li><a href="./rosters.php" class="text-white hover:text-red-500" data-lang="Nos Rosters">Nos Rosters</a></li>
                    <li><a href="./staff.php" class="text-white hover:text-red-500" data-lang="Staff">Staff</a></li>
                    <li><a href="./palmares.php" class="text-white hover:text-red-500" data-lang="Palmarès">Palmarès</a></li>
                </div>
                <!-- Logo Centré -->
                <li class="flex-shrink-0">
                    <a href="#"><img src="./asset/img/logo.png" alt="USM eSport" class="w-[60px]"></a>
                </li>
                <!-- Liens à Droite -->
                <div class="flex space-x-10 ml-10">
                    <li><a href="./partenaires.php" class="text-white hover:text-red-500" data-lang="Partenaires">Partenaires</a></li>
                    <li><a href="./network.php" class="text-white hover:text-red-500" data-lang="Réseaux">Réseaux</a></li>
                    <li><a href="./shop.php" class="text-white hover:text-red-500" data-lang="Shop">Boutique</a></li>
                    <li><a href="./contact.php" class="text-white hover:text-red-500" data-lang="Contact">Nous contacter</a></li>
                    <!-- Sélecteur de Drapeau -->
                    <li class="relative group z-10">
                        <div class="inline-block mt-1">
                            <!-- Drapeau Français -->
                            <a href="#" class="text-white flag-link" onclick="changeLanguage('fr');">
                                <img src="./asset/img/france-flag.png" alt="Drapeau Français" class="w-6 h-auto">
                            </a>
                            <!-- Sous-menu pour le Drapeau Anglais -->
                            <ul class="absolute right-0 top-full hidden group-hover:block">
                                <li>
                                    <a href="#" class="text-white english-flag">
                                        <img src="./asset/img/uk-flag.png" alt="Drapeau UK" class="w-6 h-auto mt-2" onclick="changeLanguage('en');">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </div>
            </ul>
            <!-- Bouton Menu pour Mobile -->
            <button id="menu-button" class="text-white border border-white rounded p-2 md:hidden ml-auto">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </nav>
    <script src="js/language.js"></script>
    <script src="js/navbar.js"></script>
</body>
</html>
