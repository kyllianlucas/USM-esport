<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monkey Cup - Day 1</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Monkey Cup - Day 1</h1>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="reglement.html">Règlement</a></li>
                <li><a href="equipe.php">Equipes</a></li>
                <li class="dropdown">
                    <a href="etapes.html" class="dropbtn">Étapes</a>
                    <div class="dropdown-content">
                        <a href="day1.html">Day 1</a>
                        <a href="day2.html">Day 2</a>
                        <a href="day3.html">Day 3</a>
                        <a href="day4.html">Day 4</a>
                    </div>
                </li>
                <li><a href="#">Classements</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h2>Day 1 : Arbre à double élimination (64 équipes)</h2>
            <form action="generate_bracket.php" method="POST">
                <button type="submit">Générer le bracket</button>
            </form>
            <div id="tournament-bracket" class="tournament-bracket">
                <?php
                if (file_exists('generated_bracket.html')) {
                    include('generated_bracket.html');
                }
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