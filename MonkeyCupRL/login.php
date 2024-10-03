<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();

  $host_name = 'db5004543497.hosting-data.io';
  $database = 'dbs3795152';
  $user_name = 'dbu363339';
  $password = 'ALLEZmirabel2019!';

$link = new mysqli($host_name, $user_name, $password, $database);

// Vérifiez la connexion
if ($link->connect_error) {
    die("Échec de la connexion : " . $link->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $user_password = $_POST['password'];

    // Préparez et exécutez la requête
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $link->prepare($sql);
    if ($stmt === false) {
        die("Erreur de préparation de la requête : " . $link->error);
    }
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();

        if (password_verify($user_password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];

            $redirect_url = isset($_SESSION['redirect_url']) ? $_SESSION['redirect_url'] : 'index.php';
            unset($_SESSION['redirect_url']);
            header("Location: $redirect_url");
            exit;
        } else {
            $error_message = "Nom d'utilisateur ou mot de passe incorrect";
        }
    } else {
        $error_message = "Nom d'utilisateur ou mot de passe incorrect";
    }

    $stmt->close();
}
$link->close();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Application Ping</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <h1>Connexion</h1>
        <form action="login.php" method="post">
            <label for="username">Nom d'utilisateur :</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Se connecter</button>
        </form>
        <?php
            if (isset($error_message)) {
                echo '<p class="error-message">' . $error_message . '</p>';
            }
        ?>
    </div>
</body>
</html>
