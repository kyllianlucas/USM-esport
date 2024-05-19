<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tft-tournoi.css">
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
                    <a href="./int-tft.php"><li class="palmares-pic int"><br><br><br><br><br><br><br><br><br><h3 class="texte-image-int">International</h3></li></a>
                    <a href="./fr-tft.php"><li class="palmares-pic fr"><br><br><br><br><br><br><br><br><br><h3 class="texte-image-fr">National</h3></li></a>
                    <a href="./commu-tft.php"><li class="palmares-pic commu"><br><br><br><br><br><br><br><br><br><h3 class="texte-image-commu" data-lang="Commu">Communautaire</h3></li></a>
                </ul>
            </main>
        </section>
        <?php
            include 'footer.php';
        ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    </body>
</html>