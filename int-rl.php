<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/int-rl.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>USM eSport</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" href="./asset/img/logo.png" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
    <?php include 'header.php'; ?>
    <section class="container-prim">
        <main>
            <h2 class ='annee'>2024</h2>
            <div class="data-container-center">
                <div class="data-column">
                    <ul>
                        <?php
                        $palmares = array(
                            array("nom" => "Qualifier 1", "date" => "2024", "position" => "Top 257 EUW"),
                            array("nom" => "Qualifier 2", "date" => "2024", "position" => "Top 257 EUW"),
                            array("nom" => "Qualifier 4", "date" => "2024", "position" => "Top 129 EUW")
                        );

                        foreach ($palmares as $item) {
                            if ($item['date'] == '2024') {
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
                            array("nom" => "RLCS 2022/2023 SPRING OPEN", "date" => "2023", "position" => "Top 202 EUW"),
                            array("nom" => "RSO#4", "date" => "2023", "position" => "Top 49 EUW"),
                            array("nom" => "RSO#1", "date" => "2023", "position" => "Top 97 EUW"),
                            array("nom" => "BUBBLE TRUBLE OPEN CUP 3", "date" => "2023", "position" => "Top 57 EUW")
                        );

                        foreach ($palmares as $item) {
                            if ($item['date'] == '2023') {
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
                        $palmares_2022 = array(
                            array("nom" => "RLCS 2022/2023 FALL CUP", "position" => "Top 105 EUW")
                        );
                        foreach ($palmares_2022 as $item) {
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
