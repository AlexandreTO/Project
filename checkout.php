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
        $nom= htmlspecialchars($_POST['nom']);
        $prenom= htmlspecialchars($_POST['prenom']);
        $date= htmlspecialchars($_POST['date']);
        $adresse= htmlspecialchars($_POST['adresse']);
        $code_postal= $_POST['code_postal'];
        $email = $_POST['email'];
        $user = htmlspecialchars($_POST['utilisateur']);
        $mdp = $_POST['password'];
        $ville = htmlspecialchars($_POST['ville']);
        $tel = $_POST['tel'];
        $pass_hache = password_hash($mdp,PASSWORD_DEFAULT);
        try{
            // On compare le mail entré à ceux qui sont présents dans la base de données avant de décider de l'intégrer dans la BDD
            $req = $bdd -> prepare("select Email from clients where Email = ?");
            $req -> execute(array($email));
            $row = $req -> fetchColumn(); //renvoie 1 si le mail entré est présent dans la base de données ou non.
            $req1 = $bdd -> prepare("select Username from clients where Username =?");
            $req1 -> execute(array($user));
            $row1 = $req1 -> fetchColumn();//renvoie 1 si le nom d'utilisateur entré est présent dans la base de données ou no
            $ranID = rand(1,9500);
            if ($row == 0 && $row1 == 0) {

                // Si le mail et le nom d'utilisateur ne sont pas présents , il va être ensuite ajouté dans la base de données.
                $response  = $bdd ->prepare("insert into clients(id,Nom,Prenom,Username,PWD,Email,DateDeNaissance,Adresse,CodePostal,Ville,Telephone)
                values(?,?,?,?,?,?,?,?,?,?,?)");
                $response -> execute(array($ranID,$nom,$prenom,$user,$pass_hache,$email,$date,$adresse,$code_postal,$ville,$tel));
                $response -> closeCursor();
                echo "Compte crée !";
            }
            elseif ($row == 1 && $row1 == 0) {
                echo "Le mail est déja utilisé";
                $req -> closeCursor();
                header("refresh: 5 ; url=connexion.php");
            }
            elseif ($row == 0 && $row1 == 1) {
                echo "Le nom d'utilisateur est déja utilisé";
                $req1 -> closeCursor();
                header("refresh: 5 ; url=connexion.php");
            }

        }
        catch(Exception $e){
            die($e-> getMessage());
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
