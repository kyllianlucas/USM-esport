<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/commu-rl.css">
    <title>USM eSport</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" href="./asset/img/logo.png" type="image/x-icon">
</head>

<body>
    <?php include 'header.php'; ?>
    <section class="container-prim">
        <main>
            <h2 class='annee'>2023</h2>
            <div class="data-container-center">
                <div class="data-column">
                    <ul>
                        <?php
                        $palmares = array(
                            array("nom" => "SCL IX LIGUE 2", "position" => "1ère place"),
                            array("nom" => "SCL IX LIGUE 1", "position" => "Top 16"),
                            array("nom" => "SCL IX LIGUE 1", "position" => "Top 17"),
                            array("nom" => "ISG 5", "position" => "Top 5"),
                            array("nom" => "CUP RTV GC1", "position" => "3eme place"),
                            array("nom" => "ISG 6", "position" => "Top 5"),
                            array("nom" => "ISG 7", "position" => "Top 6"),
                            array("nom" => "ISG 8", "position" => "3eme place"),
                            array("nom" => "SCL X LIGUE 3", "position" => "Top 14"),
                            array("nom" => "CUP RTV GC2", "position" => "Top 5"),
                            array("nom" => "DTM CUP 2", "position" => "Top 5/8"),
                            array("nom" => "DTM CUP 2", "position" => "Top 9/16"),
                            array("nom" => "SCL IX OPEN LEAGUE", "position" => "2eme place"),
                            array("nom" => "SCL X LIGUE 1", "position" => "Top 19"),
                            array("nom" => "ROCKET TV GC1", "position" => "3eme place")                     
                        );

                        foreach ($palmares as $item) {
                            if ($item['position'] == '1ère place') {
                                echo "<li class=palmares-nom>" . $item['nom'] . " - " . "<span class='or'>" . $item['position'] . "</span>" . "</li>";
                            } elseif ($item['position'] == '2eme place') {
                                echo "<li class=palmares-nom>" . $item['nom'] . " - " . "<span class='argent'>" . $item['position'] . "</span>" . "</li>";
                            } elseif ($item['position'] == '3eme place') {
                                echo "<li class=palmares-nom>" . $item['nom'] . " - " . "<span class='bronze'>" . $item['position'] . "</span>" . "</li>";
                            } else {
                                echo "<li class=palmares-nom>" . $item['nom'] . " - " . $item['position'] . "</li>";
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <h2 class='annee'>2022</h2> 
            <div class="data-container-center">
                <div class="data-column">
                    <ul>
                        <?php
                        $palmares = array(
                            array("nom" => "SCL VIII LIGUE 3", "date" => "2022", "position" => "3eme place"),
                            array("nom" => "SHARKS UNITED 2S", "date" => "2022", "position" => "1ère place"),
                            array("nom" => "SHARKS UNITED 3S", "date" => "2022", "position" => "1ère place"),
                            array("nom" => "NO LIFE TOURNAMENT", "date" => "2022", "position" => "Top 8"),
                            array("nom" => "NOOBIZES TOURNAMENT", "date" => "2022", "position" => "Top 5"),
                            array("nom" => "EVYL FALL SERIES", "date" => "2022", "position" => "Top 8"),
                            array("nom" => "TOURNOI GAMEVERSE", "date" => "2022", "position" => "Top 4"),
                            array("nom" => "CYBERLEAGUE 3", "date" => "2022", "position" => "Top 5")
                        );

                        foreach ($palmares as $item) {
                            if ($item['position'] == '1ère place') {
                                echo "<li class=palmares-nom>" . $item['nom'] . " - " . "<span class='or'>" . $item['position'] . "</span>" . "</li>";
                            } elseif ($item['position'] == '2eme place') {
                                echo "<li class=palmares-nom>" . $item['nom'] . " - " . "<span class='argent'>" . $item['position'] . "</span>" . "</li>";
                            } elseif ($item['position'] == '3eme place') {
                                echo "<li class=palmares-nom>" . $item['nom'] . " - " . "<span class='bronze'>" . $item['position'] . "</span>" . "</li>";
                            } else {
                                echo "<li class=palmares-nom>" . $item['nom'] . " - " . $item['position'] . "</li>";
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </main>
    </section>
    <?php include 'footer.php'; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
</body>

</html>
