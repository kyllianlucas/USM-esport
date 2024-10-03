<?php
if (isset($_POST['generate'])) {
    // Connexion à la base de données
    $host_name = '************';
    $database = '************';
    $user_name = '************';
    $password = '************!';

    $link = new mysqli($host_name, $user_name, $password, $database);

    if ($link->connect_error) {
        die("Connexion échouée : " . $link->connect_error);
    }

    // Requête pour récupérer les équipes
    $sql = "SELECT nom, logo FROM equipes ORDER BY id ASC";
    $result = $link->query($sql);

    $teams = [];
    while ($row = $result->fetch_assoc()) {
        $teams[] = [
            'name' => $row['nom'],
            'logo' => base64_encode($row['logo'])
        ];
    }

    // Fonction pour générer le bracket
    function createBracket($teams) {
        $numTeams = count($teams);
        $numRounds = ceil(log($numTeams, 2)) * 2; // Nombre de tours nécessaires pour la double élimination
        ob_start(); // Commencer la mise en mémoire tampon de sortie
        echo '<div class="bracket">';
        for ($round = 1; $round <= $numRounds; $round++) {
            echo '<div class="round round-' . $round . '">';
            $numMatches = $numTeams / (2 ** ceil($round / 2));
            for ($match = 1; $match <= $numMatches; $match++) {
                $team1 = isset($teams[$match - 1]) ? $teams[$match - 1] : ["name" => "TBD", "logo" => ""];
                $team2 = isset($teams[$numTeams - $match]) ? $teams[$numTeams - $match] : ["name" => "TBD", "logo" => ""];
                echo '<div class="match">';
                echo '<div class="team team-1">';
                if (!empty($team1['logo'])) {
                    echo '<img src="data:image/png;base64,' . $team1['logo'] . '" alt="Logo équipe">';
                }
                echo $team1['name'] . '</div>';
                echo '<div class="team team-2">';
                if (!empty($team2['logo'])) {
                    echo '<img src="data:image/png;base64,' . $team2['logo'] . '" alt="Logo équipe">';
                }
                echo $team2['name'] . '</div>';
                echo '<div class="score">Score: <input type="text" name="score1" size="2"> - <input type="text" name="score2" size="2"></div>';
                echo '</div>';
            }
            echo '</div>';
        }
        echo '</div>';
        $content = ob_get_clean(); // Récupérer le contenu mis en mémoire tampon et nettoyer la mémoire tampon
        file_put_contents('generated_bracket.html', $content); // Sauvegarder le contenu dans un fichier HTML
    }

    createBracket($teams);
    $link->close();
    header('Location: generated_bracket.html'); // Rediriger vers la page générée
    exit();
}
?>