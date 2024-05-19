<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fr-rl.css">
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
            <h2 class='annee'>2023</h2>
            <div class="data-container-center">
                <div class="data-column">
                    <ul>
                        <?php
                        $palmares_2023 = array(
                            array("nom" => "QUAL RISING LEAGUE 1", "position" => "Top 25"),
                            array("nom" => "QUAL RISING LEAGUE 2", "position" => "Top 13"),
                            array("nom" => "QUAL RISING LEAGUE 3", "position" => "Top 13"),
                            array("nom" => "QUAL RISING LEAGUE 4", "position" => "Top 17")
                        );
                        foreach ($palmares_2023 as $item) {
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
