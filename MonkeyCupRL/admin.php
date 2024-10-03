<?php
session_start();

if (!isset($_SESSION['user_id']) || !in_array($_SESSION['role'], ['Admin'])) {
    $_SESSION['redirect_url'] = $_SERVER['REQUEST_URI'];
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MONKEY CUP</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>MONKEY CUP</h1>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="reglement.html">Règlement</a></li>
                <li><a href="equipe.php">Equipes</a></li>
                <li><a href="etapes.html">Etapes</a></li>
                <li><a href="#">Classement</a></li>
              	<li><a href="admin.php">admin</a></li>
                <li><a href="ajout-equipe.php">Ajouter Equipe</a></li>
                <li><a href="ajout-utilisateur.php">Ajouter User</a></li>
              	<li><a href="ajout-chrono.php">Ajouter Chrono</a></li>


            </ul>
        </nav>
    </header>
    <main>
    </main>
    <footer>
        <p>© 2024 USM eSport</p>
		  <div class="social-links">
            <a href="https://www.twitch.tv/usmesport" target="_blank">Twitch</a>
            <a href="https://www.youtube.com/channel/usmesport" target="_blank">YouTube</a>
            <a href="https://twitter.com/usmesport" target="_blank">Twitter</a>
            <a href="https://discord.gg/usmesport" target="_blank">Discord</a>
        </div>
    </footer>
    <script src="scripts/main.js"></script>
</body>
</html>