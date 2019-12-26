<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Mon compte</title>
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
</head>

<body>
    <header class="header_page">
        <?php include("entete_membre.php"); ?>
        <div class="view intro3">
            <div class="mask flex-center">
                <div class="container text-center black-text">
                    <h1 class="h1FadeIn h1-size">Vos Informations</h1>
                </div>
            </div>
        </div>
    </header>
    <br>
    <br>
    <?php
    /*
            Code afin de vérifier si on est connecté à la BDD
            */
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=projet;', 'root', 'root');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
    }
    ?>

    <main class="py-5">
        <div class="container">
            <br>
            <?php
            // Affichage des informations de l'utilisateur.
            $user = $_SESSION['identifiant'];
            $req = $bdd->prepare("select Username, Nom,Prenom,Email ,Telephone, Adresse ,Ville,CodePostal from clients where Username = :user");
            $req->execute(array('user' => $user));
            $display = $req->fetch(PDO::FETCH_ASSOC);
            echo "Nom : " . $display['Nom'] . '<br>';
            echo "Prenom : " . $display['Prenom'] . '<br>';
            echo "Email : " . $display['Email'] . '<br>';

            echo "Telephone : " . $display['Telephone'] . '<br>';

            echo "Adresse : " . $display['Adresse'] . '<br>';

            echo "Ville : " . $display['Ville'] . '<br>';
            echo "Code Postal : " . $display['CodePostal'] . '<br>';
            ?>

        </div>

    </main>
</body>

</html>