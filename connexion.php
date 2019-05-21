<?php
 //session_start()?>

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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />

    <script src="Bootstrap/js/jquery-3.3.1.min.js"></script>
    <script src="Bootstrap/js/popper.min.js"></script>
    <script src="Bootstrap/js/bootstrap.min.js"></script>
    <script src="Bootstrap/js/mdb.min.js"></script>
    <script src="main.js"></script>
    <!-- DANS CET ORDRE -->
</head>

<body id="Connexion">
    <nav><?php include("entete.php"); ?></nav>
    <!-- Formulaires de contact -->
    <div class="intro2 container align-content-center">
       

        <main class="text-center">

            <form action="" class="login" method="post">

                <H1>Espace Membre</H1>            

                <H3>Connexion</H3>

                <input type="text" name="Identifiant" id="identifiant" placeholder="Identifiant"><br><br>

                <input type="password" name="password" id="password" placeholder="Mot de passe" required><br>

                <a href="#">Mot de passe oublié?</a><br><br>

                <input type="submit" id="connexion" value="Connexion"><br><br>

                <input type="checkbox" id="bouton" value="Se souvenir de moi">Se souvenir de moi <br><br><br><br>

               <div id="membre">Nouveau Membre <a href="#">Inscrivez-vous?</a></div>
            </form>
    </div>
    </main>
</body>

</html>