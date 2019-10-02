
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Verification</title>
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

<body>
    <?php include("entete.php"); ?>
        <?php
            /*
            Code afin de vérifier si on est connecté à la BDD
            */
              try {
                $bdd = new PDO('mysql:host=localhost;dbname=projet;', 'root', 'root');
                // $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              } 
              catch (Exception $e) {
                  die('Erreur: ' . $e->getMessage());
              }
        ?>

        <?php
        //Récupération des identifiants
            $id = $_POST['identifiant'];
            $req = $bdd ->prepare("select Utilisateur,MDP from clients where Utilisateur = :id");
            $req ->execute(array('id' => $id));
            $resultat = $req -> fetch();
            
        // Récupération du mot de passe et comparaison avec le mdp hashé dans la base de données.
            $isPwdCorrect = password_verify($_POST['mdp'],$resultat['MDP']);
            if (!$resultat) {
                echo "Mauvais mot de passe ou identifiant !";
                header('refresh : 5 ; url=connexion.php');
            }
            else {
                if ($isPwdCorrect) {
                    // Création de la session si les entrées sont correctes
                    session_start();
                    $_SESSION['identifiant'] = $_POST['identifiant'];
                    header('location:site_membre.php'); //renvoie vers le site réservé aux membres
                }
                else {
                    echo "Mauvais mot de passe ou identifiant !";
                }
            } 
        ?>
        <p> Vous allez être redirigé dans <span id="counter">5</span> seconde(s)</p>
        <!-- Comptes à rebours -->
        <script type="text/javascript">
            function countdown() {
                var i = document.getElementById('counter');
                if (parseInt(i.innerHTML)<=0) {
                    location.href = 'connexion.php';
             }
            if (parseInt(i.innerHTML)!=0) {
                i.innerHTML = parseInt(i.innerHTML)-1;
                }
            }
            setInterval(function(){ countdown(); },1000);
        </script>
        

</body>
</html>