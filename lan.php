<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/lan.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>USM eSport</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" href="./asset/img/logo.png" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>


    <body>
        <?php include 'header.php'; ?>
        <section class="container-prim">
            <main>
                <h2 class='annee'>2024</h2>
                <div class="data-container-center">
                    <div class="data-column">
                        <ul>
                            <?php
                            $palmares = array(
                                array("nom" => "Gamer Assembly","jeux" => "League of Legends","tournoi" => "Tounoi intermédiaire","date" => "2024", "position" => "1ère place"),
                            );
                            foreach ($palmares as $item) {
                                if ($item['position'] == '1ère place') {
                                    echo "<li class=palmares-nom>" . $item['nom'] ." | ".$item['jeux']." | ".$item['tournoi']." - " . "<span class='or'>" . $item['position'] . "</span>" . "</li>";
                                } elseif ($item['position'] == '2eme place') {
                                    echo "<li class=palmares-nom>" . $item['nom'] ." | ". $item['jeux']." | ".$item['tournoi']. " - " . "<span class='argent'>" . $item['position'] . "</span>" . "</li>";
                                } elseif ($item['position'] == '3eme place') {
                                    echo "<li class=palmares-nom>" . $item['nom'] ." | ". $item['jeux']." | ".$item['tournoi']. " - " . "<span class='bronze'>" . $item['position'] . "</span>" . "</li>";
                                } else {
                                    echo "<li class=palmares-nom>" . $item['nom'] ." | ". $item['jeux']." | ".$item['tournoi']. " - " . $item['position'] . "</li>";
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div> 
                <h2 class='annee'>2023</h2>
                <div class="data-container-center">
                    <div class="data-column">
                        <ul>
                            <?php
                            $palmares = array(
                                array("nom" => "Gamer Assembly","jeux" => "Teamfight tactics", "joueur" => "USM Cydrill", "position" => "3eme place"),  
                                array("nom" => "TFT Vegas Open","jeux" => "Teamfight tactics", "joueur" => "USM Flwders", "position" => "Top 144")
                            );
                            foreach ($palmares as $item) {
                                if ($item['position'] == '1ère place') {
                                    echo "<li class=palmares-nom>" . $item['nom'] ." | ". $item['jeux']. " | ".$item['joueur']. " - " . "<span class='or'>" . $item['position'] . "</span>" . "</li>";
                                } elseif ($item['position'] == '2eme place') {
                                    echo "<li class=palmares-nom>" . $item['nom'] ." | ". $item['jeux']. " | ".$item['joueur']. " - " . "<span class='argent'>" . $item['position'] . "</span>" . "</li>";
                                } elseif ($item['position'] == '3eme place') {
                                    echo "<li class=palmares-nom>" . $item['nom'] ." | ".$item['jeux']. " | ". $item['joueur']. " - " . "<span class='bronze'>" . $item['position'] . "</span>" . "</li>";
                                } else {
                                    echo "<li class=palmares-nom>" . $item['nom'] ." | ".$item['jeux']. " | ". $item['joueur']. " - " . $item['position'] . "</li>";
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
                                array("nom" => "LAN ESPOT#1","jeux" => "Rocket League", "date" => "2022", "position" => "2eme place"),
                            );
                            foreach ($palmares as $item) {
                                if ($item['position'] == '1ère place') {
                                    echo "<li class=palmares-nom>" . $item['nom'] ." | ".$item['jeux']." - " . "<span class='or'>" . $item['position'] . "</span>" . "</li>";
                                } elseif ($item['position'] == '2eme place') {
                                    echo "<li class=palmares-nom>" . $item['nom'] ." | ".$item['jeux']." - " . "<span class='argent'>" . $item['position'] . "</span>" . "</li>";
                                } elseif ($item['position'] == '3eme place') {
                                    echo "<li class=palmares-nom>" . $item['nom'] ." | ".$item['jeux']." - " . "<span class='bronze'>" . $item['position'] . "</span>" . "</li>";
                                } else {
                                    echo "<li class=palmares-nom>" . $item['nom'] ." | ".$item['jeux']." - " . $item['position'] . "</li>";
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