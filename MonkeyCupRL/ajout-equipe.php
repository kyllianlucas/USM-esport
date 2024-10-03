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
<?php
  $host_name = 'db5004543497.hosting-data.io';
  $database = 'dbs3795152';
  $user_name = 'dbu363339';
  $password = 'ALLEZmirabel2019!';

function compressImage($source, $destination, $quality) {
    $info = getimagesize($source);
    if ($info['mime'] == 'image/jpeg') {
        $image = imagecreatefromjpeg($source);
    } elseif ($info['mime'] == 'image/gif') {
        $image = imagecreatefromgif($source);
    } elseif ($info['mime'] == 'image/png') {
        $image = imagecreatefrompng($source);
    } else {
        throw new Exception('Format de fichier non supporté.');
    }

    imagejpeg($image, $destination, $quality);
    imagedestroy($image);
}
try {
    $dsn = "mysql:host=$host_name;dbname=$database;charset=utf8mb4";
    $pdo = new PDO($dsn, $user_name, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = $_POST['nom'];
        $joueur1 = $_POST['joueur1'];
        $joueur2 = $_POST['joueur2'];
        $joueur3 = $_POST['joueur3'];

// Gestion de l'upload du logo
        if (isset($_FILES['logo']) && $_FILES['logo']['error'] == UPLOAD_ERR_OK) {
            $logoTmpPath = $_FILES['logo']['tmp_name'];

            // Redimensionnement de l'image à 500x500 pixels
            list($width, $height) = getimagesize($logoTmpPath);
            if ($width !== 500 || $height !== 500) {
                $image = imagecreatefromstring(file_get_contents($logoTmpPath));
                $resizedImage = imagescale($image, 500, 500);
                ob_start();
                imagejpeg($resizedImage, null, 90); // Qualité initiale à 90%
                $logo = ob_get_contents();
                ob_end_clean();
                imagedestroy($image);
                imagedestroy($resizedImage);
            } else {
                $logo = file_get_contents($logoTmpPath);
            }

            // Compression pour que le fichier soit sous 64 Ko
            $compressedLogoPath = tempnam(sys_get_temp_dir(), 'logo');
            $quality = 90; // Qualité initiale
            do {
                compressImage($logoTmpPath, $compressedLogoPath, $quality);
                $compressedSize = filesize($compressedLogoPath);
                $quality -= 10; // Réduction progressive de la qualité
            } while ($compressedSize > 64 * 1024 && $quality > 0);

            if ($compressedSize > 64 * 1024) {
                throw new Exception('Impossible de compresser l\'image sous 64 Ko.');
            }

            $logo = file_get_contents($compressedLogoPath);
            unlink($compressedLogoPath); // Supprimer le fichier temporaire
        } else {
            throw new Exception('Logo non téléchargé ou une erreur s\'est produite lors du téléchargement.');
        }

        $stmt = $pdo->prepare("INSERT INTO equipes (nom, logo, joueur1, joueur2, joueur3) VALUES (:nom, :logo, :joueur1, :joueur2, :joueur3)");
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':logo', $logo);
        $stmt->bindParam(':joueur1', $joueur1);
        $stmt->bindParam(':joueur2', $joueur2);
        $stmt->bindParam(':joueur3', $joueur3);
        $stmt->execute();

        $success_message = "Équipe ajoutée avec succès.";
    }
} catch (PDOException $e) {
    $error_message = "Erreur PDO : " . $e->getMessage();
} catch (Exception $e) {
    $error_message = "Erreur : " . $e->getMessage();
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
    <div class="add-equipe-container">
        <h1>Ajouter une équipe</h1>
        <form action="ajout-equipe.php" method="post" enctype="multipart/form-data">
            <label for="nom">Nom de l'équipe :</label>
            <input type="text" id="nom" name="nom" required>
            <label for="logo">Logo :</label>
            <input type="file" id="logo" name="logo" required>
            <label for="joueur1">Joueur 1 :</label>
            <input type="text" id="joueur1" name="joueur1" required>
            <label for="joueur2">Joueur 2 :</label>
            <input type="text" id="joueur2" name="joueur2" required>
            <label for="joueur3">Joueur 3 :</label>
            <input type="text" id="joueur3" name="joueur3" required>

            <button type="submit">Ajouter</button>
        </form>
        <?php
        if (isset($success_message)) {
            echo '<p class="success-message">' . $success_message . '</p>';
        }
        if (isset($error_message)) {
            echo '<p class="error-message">' . $error_message . '</p>';
        }
        ?>
    </div>
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