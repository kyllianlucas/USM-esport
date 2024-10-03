<?php
session_start();

// Afficher les erreurs PHP pour le débogage
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!isset($_SESSION['user_id']) || !in_array($_SESSION['role'], ['Admin'])) {
    $_SESSION['redirect_url'] = $_SERVER['REQUEST_URI'];
    header("Location: ../login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Chrono - MONKEY CUP</title>
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
        <h2>Ajouter un Chrono pour la Compétition</h2>
        <form action="ajout-chrono.php" method="post">
            <label for="nom_tournoi">Nom du tournoi :</label>
            <input type="text" id="nom_tournoi" name="nom_tournoi" required>
            <label for="date">Date de la compétition :</label>
            <input type="date" id="date" name="date" required>
            <label for="time">Heure de la compétition :</label>
            <input type="time" id="time" name="time" required>
            <button type="submit">Ajouter</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          	$nom_tournoi = $_POST['nom_tournoi'];
            $date = $_POST['date'];
            $time = $_POST['time'];
            $datetime = $date . ' ' . $time;


            $host_name = 'db5004543497.hosting-data.io';
  			$database = 'dbs3795152';
  			$user_name = 'dbu363339';
  			$password = 'ALLEZmirabel2019!';

            $conn = new mysqli($host_name, $user_name, $password, $database);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "INSERT INTO chrono (competition_date, nom_tournoi) VALUES ('$datetime', '$nom_tournoi')";

            if ($conn->query($sql) === TRUE) {
                echo "Nouvelle date de compétition ajoutée avec succès.";
            } else {
                echo "Erreur: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        }
        ?>
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
