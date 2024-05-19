<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/palmares.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>USM eSport</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" href="./asset/img/logo.png" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>


    <body>
        <?php
            include 'header.php';
        ?>
        <section class="container-prim">
            <main>
                <ul class="palmares-list list-unstyled d-flex justify-content-center">
                    <a href="./rl-tournoi.php"><li class="palmares-pic rl"><br><br><br><br><br><br><br><br><br><h3 class="texte-image-palma-rl">Rocket League</h3></li></a>
                    <a href="./tft-tournoi.php"><li class="palmares-pic tft"><br><br><br><br><br><br><br><br><br><h3 class="texte-image-palma-tft">TFT</h3></li></a>
                    <a href="./lan.php"><li class="palmares-pic lan"><br><br><br><br><br><br><br><br><br><h3 class="texte-image-lan">LAN</h3></li></a>
                </ul>
            </main>
        </section>
        <?php
            include 'footer.php';
        ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    </body>
</html>