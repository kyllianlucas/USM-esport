<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contact.css">
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
        
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="col-8 m-4">
                    <form method="POST">
                        <div class="form-group">
                            <div class="text-center">
                                <br>
                                <h1 data-lang="Contact">Nous contacter </h1>
                                <br>
                            </div>
                            <input type="text" name="pseudo" data-placeholder-lang="Pseudo" placeholder=" Pseudo" autocomplete="off" class="form-control" required/>
                            <br/>
                            <input type="email" name="email" data-placeholder-lang="Mail" placeholder="Votre email" autocomplete="off" class="form-control" required/>
                            <br/>
                            <input type="texte" name="sujet" data-placeholder-lang="Sujet" placeholder="Sujet" autocomplete="off" class="form-control" required/>
                            <br/>
                            <textarea rows="10" name="message" data-placeholder-lang="Message" placeholder="Votre message" class="form-control" required></textarea>
                            <br/>
                            <button type="submit" class="btn btn-lg btn-primary" data-lang="Envoie">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <?php
            if (isset($_POST["message"])) {
                $pseudo = isset($_POST["pseudo"]) ? $_POST["pseudo"] : "";
                $email_placeholder = isset($_POST["email"]) ? $_POST["email"] : "";
                $sujet_placeholder = isset($_POST["sujet"]) ? $_POST["sujet"] : "";
                $message_placeholder = isset($_POST["message"]) ? $_POST["message"] : "";

                $message =  " Pseudo : " . $pseudo . "
                email : " . $email_placeholder . "
                Sujet : " . $sujet_placeholder . "
                message : " . $message_placeholder . "
                ";
                $retour = mail("contact@usmesport.com", $sujet_placeholder, $message, "From:recrutement@usmesport.com" . "\r\n" . "Reply-to:" . $email_placeholder);
                if ($retour) {
                    echo "<p>L'email a bien été envoyé.</p>";
                }
            }
        ?>
    </section>
    <?php
            include 'footer.php';
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
</body>
</html>
