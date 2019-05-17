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
    <main>
        <?php
            /*
            Code afin de vérifier si on est connecté à la BDD
            */
              try {
                $bdd = new PDO('mysql:host=localhost;dbname=projet;', 'root', 'root');
              } 
              catch (Exception $e) {
                  die('Erreur: ' . $e->getMessage());
              }
            ?>

        <form action="checkout.php" method="post">

            <form class="needs-validation" novalidate>
                <div class="form-group">
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom01">Prénom</label>
                        <input type="text" class="form-control" id="validationCustom01" placeholder="Prénom" required
                            name="prenom">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom02">Nom</label>
                        <input type="text" class="form-control" id="validationCustom02" placeholder="Nom" required
                            name="nom">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustomUsername">Nom utilisateur</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                            </div>
                            <input type="text" class="form-control" id="validationCustomUsername"
                                placeholder="Nom d'utilisateur" aria-describedby="inputGroupPrepend" required
                                name="utilisateur">
                            <div class="invalid-feedback">
                                Entrez un nom d'utilisateur
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationBirthday">Date de naissance</label>
                        <input type="date" name="date" min="1940-01-01" max="2019-05-17" class="form-control" required>
                        <span class="validity"></span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom03">Adresse</label>
                        <input type="text" class="form-control" id="validationCustom03" placeholder="Adresse" required
                            name="adresse">
                        <div class="invalid-feedback">
                            Entrez une adresse
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom06">Email</label>
                        <input type="text" class="form-control" id="validationCustom05" placeholder="Email" required
                            name="email">
                        <div class="invalid-feedback">
                            Entrez un email
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom05">Code postal</label>
                        <input type="text" class="form-control" id="validationCustom05" placeholder="Code postal"
                            required name="code_postal" maxlength="5">
                        <div class="invalid-feedback">
                            Entrez un code postal
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Valider</button>
            </form>
        </form>
    </main>
</body>