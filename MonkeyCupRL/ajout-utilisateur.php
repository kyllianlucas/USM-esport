<?php
session_start();

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

try {
    $dsn = "mysql:host=$host_name;dbname=$database;charset=utf8mb4";
    $pdo = new PDO($dsn, $user_name, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $user_password = password_hash($_POST['user_password'], PASSWORD_BCRYPT);  // Hasher le mot de passe
        $role = $_POST['role'];

        $stmt = $pdo->prepare("INSERT INTO users (username, password, role) VALUES (:username, :password, :role)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $user_password); // Corriger ici : user_password doit être password
        $stmt->bindParam(':role', $role);
        $stmt->execute();

        $success_message = "Utilisateur ajouté avec succès.";
    }
} catch (PDOException $e) {
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
    <div class="add-user-container">
        <h1>Ajout d'un Utilisateur</h1>
        <form action="ajout-utilisateur.php" method="post">
            <label for="username">Nom d'utilisateur :</label>
            <input type="text" id="username" name="username" required>
            <label for="user_password">Mot de passe :</label> <!-- Changé id et name de password à user_password -->
            <input type="password" id="user_password" name="user_password" required>
            <label for="role">Rôle :</label>
            <select id="role" name="role" required>
                <option value="Joueur">Joueur</option>
                <option value="Admin">Admin</option>
            </select>
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
