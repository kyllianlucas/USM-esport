<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monkey CUP</title>
    <link rel="stylesheet" href="test.css">
</head>
<body>
    <header>
        <h1>Monkey CUP</h1>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="reglement.html">Règlement</a></li>
                <li><a href="equipe.php">Equipes</a></li>
                <li><a href="etapes.html">Étapes</a></li>
                <li><a href="#">Classement</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h2>Les Équipes</h2>
            <div id="teams-container" class="teams-container">
            <?php

  $host_name = 'db5004543497.hosting-data.io';
  $database = 'dbs3795152';
  $user_name = 'dbu363339';
  $password = 'ALLEZmirabel2019!';

  $link = new mysqli($host_name, $user_name, $password, $database);

try {
    $sql = "SELECT * FROM equipes ORDER BY id ASC";
    $sth = $link->prepare($sql);

    if ($sth === false) {
        throw new Exception('La préparation de la requête a échoué: ' . $link->error);
    }

    $sth->execute();
    $result = $sth->get_result();

    if ($result === false) {
        throw new Exception('L\'exécution de la requête a échoué: ' . $sth->error);
    }

    while ($row = $result->fetch_assoc()) {
        $imageData = base64_encode($row['logo']);

        // Utilisation de finfo pour déterminer le type MIME
        $finfo = new finfo(FILEINFO_MIME_TYPE);
        $mimeType = $finfo->buffer($row['logo']);

        echo "<div class='team-card'>
                <h3>" . htmlspecialchars($row["nom"]) . "</h3>
                <img src='data:$mimeType;base64," . $imageData . "' alt='Image équipe'>
                <div class='team-players'>
                    <p>" . htmlspecialchars($row["joueur1"]) . "</p>
                    <p>" . htmlspecialchars($row["joueur2"]) . "</p>
                    <p>" . htmlspecialchars($row["joueur3"]) . "</p>
                </div>
              </div>";
    }
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage() . "<br/>";
}

$link->close();
?>
            </div>
        </section>
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
</body>
</html>