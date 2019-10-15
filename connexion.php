<?php
 session_start()?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Connexion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="screen" href="Bootstrap/css/bootstrap.css" />
    <link href="Bootstrap/css/mdb.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />

    <script src="Bootstrap/js/jquery-3.3.1.min.js"></script>
    <script src="Bootstrap/js/popper.min.js"></script>
    <script src="Bootstrap/js/bootstrap.min.js"></script>
    <script src="Bootstrap/js/mdb.min.js"></script>
    <script src="main.js"></script>
    <!-- DANS CET ORDRE -->
</head>

<header class="header_page">
    <?php include("entete.php"); ?>
    <div class="view intro3">
        <div class="mask flex-center">
            <div class="container text-center white-text">
                <h1 class="h1FadeIn h1-size">Connexion</h1>
            </div>
        </div>
    </div>
</header>

<body id="Connexion">
    <!-- Formulaires de contact -->
    <div class="intro2 container align-content-center">
        <main class="text-center">

            <form action="verif.php" class="login" method="post">

                <H1>Espace Membre</H1>

                <H3>Connexion</H3>

                <input type="text" name="identifiant" id="identifiant" placeholder="Identifiant" required><br>

                <input type="password" name="mdp" id="password" placeholder="Mot de passe" required><br>

                <a href="#">Mot de passe oublié?</a><br>

                <input type="submit" id="connexion" value="Connexion"><br>

                <input type="checkbox" id="bouton" value="Se souvenir de moi">Se souvenir de moi <br>

                <div id="membre">Nouveau Membre ?<a href="form.php"><br>Inscrivez-vous !</a></div>
            </form>
    </div>
    </main>
</body>

</html>