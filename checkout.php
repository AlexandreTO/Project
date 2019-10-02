<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Test PHP</title>
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
<body>
    <nav><?php include("entete.php"); ?></nav>
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
        $nom= $_POST['nom'];
        $prenom= $_POST['prenom'];
        $date= $_POST['date'];
        $adresse= $_POST['adresse'];
        $code_postal= $_POST['code_postal'];
        $email = $_POST['email'];
        $user = $_POST['utilisateur'];
        $mdp = $_POST['password'];
        $pass_hache = password_hash($mdp,PASSWORD_DEFAULT);
        echo $pass_hache;
        try{
            // On compare le mail entré à ceux qui sont présents dans la base de données avant de décider de l'intégrer dans la BDD
            $req = $bdd -> prepare("select Email from clients where Email = ?");
            $req -> execute(array($email));
            $row = $req -> rowCount(); //renvoie 0 ou 1 si la variable $req est présent dans la base de données ou non.
            echo '<br>';
            $req1 = $bdd -> prepare("select Utilisateur from clients where Utilisateur =?");
            $req1 -> execute(array($user));
            $row1 = $req1 -> rowCount();    
            echo '<br>';
            if ($row == 0 && $row1 == 0) {

                // Si le mail et le nom d'utilisateur ne sont pas présents , il va être ensuite ajouté dans la base de données.
                $response  = $bdd ->prepare("insert into clients(Nom,Prenom,Utilisateur,MDP,DateNaissance,Adresse,CodePostal,Email)
                values(?,?,?,?,?,?,?,?)");
                $response -> execute(array($nom,$prenom,$user,$pass_hache,$date,$adresse,$code_postal,$email));
                $response -> closeCursor();
                echo "Insertion réussie";
            }
            elseif ($row == 1 && $row1 == 0) {
                echo "Le mail est déja utilisé";
                $req -> closeCursor();
            }
            elseif ($row == 0 && $row1 == 1) {
                echo "Le nom d'utilisateur est déja utilisé";
                $req1 -> closeCursor();
            }

        }
        catch(Exception $e){
            die($e-> getMessage());
        }
    ?>
    <form action="connexion.php" method="post">
        <button class="btn btn-primary" type="submit">Retour</button>
    </form>
</body>

</html>