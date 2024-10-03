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
                <li><a href="admin.php">Admin</a></li>
            </ul>
        </nav>
    </header>
    <main>
 <h2>Prochaine Compétition</h2>
        <?php
            $host_name = 'db5004543497.hosting-data.io';
  			$database = 'dbs3795152';
  			$user_name = 'dbu363339';
  			$password = 'ALLEZmirabel2019!';

        $conn = new mysqli($host_name, $user_name, $password, $database);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT competition_date, nom_tournoi FROM chrono ORDER BY id DESC LIMIT 1";
       $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $competition_date = $row['competition_date'];
            $nom_tournoi = $row['nom_tournoi'];
            echo "<div id='chrono-container'>";
            echo "<p id='chrono' data-date='$competition_date'></p>";
            echo "<p id='nom-tournoi'>$nom_tournoi</p>";
            echo "</div>";
        } else {
            echo "<p>Aucune date de compétition définie.</p>";
        }

        $conn->close();
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
 <script>
        document.addEventListener('DOMContentLoaded', function () {
            var chronoElement = document.getElementById('chrono');
            var competitionDate = new Date(chronoElement.getAttribute('data-date'));

            function updateChrono() {
                var now = new Date();
                var timeDifference = competitionDate - now;

                if (timeDifference > 0) {
                    var days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

                    chronoElement.textContent = days + "j " + hours + "h " + minutes + "m " + seconds + "s ";
                } else {
                    chronoElement.textContent = "La compétition a commencé !";
                }
            }

            setInterval(updateChrono, 1000);
        });
    </script>
</body>
</html>

