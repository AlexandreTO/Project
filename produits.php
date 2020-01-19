<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Catalogue</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="screen" href="Bootstrap/css/bootstrap.css" />
    <link href="Bootstrap/css/mdb.css" rel="stylesheet" />
    <link rel="stylesheet" href="catalogue.css">
    <link rel="stylesheet" href="style.css">
 <!--    <script src="Bootstrap/js/jquery-3.3.1.min.js"></script>
    <script src="Bootstrap/js/popper.min.js"></script>
    <script src="Bootstrap/js/bootstrap.min.js"></script>
    <script src="Bootstrap/js/mdb.min.js"></script>
    <script src="main.js"></script> -->
    <!-- DANS CET ORDRE -->
</head>

<header class="header_page">
        <?php include("entete.php"); ?>
        <div class="view intro">
            <div class="mask flex-center">
                <div class="container text-center white-text">
                    <h1 class="h1FadeIn">Catalogue</h1>
                </div>
            </div>
        </div>
    </header>
<body>

    <main>     
        <h2 class="title_category">Produits</h2>
        <?php
        $bdd = new PDO('mysql:host=localhost;dbname=projet_two;charset=utf8', 'root', '');

        $products_query = 'SELECT * FROM Produit WHERE Categorie = "' . $_GET["Categorie"] . '"';

        ?>

        <section class="products_page">

            <article>
                
            </article>
            
        </section>




        <section class="products_categories">
            <?php foreach ($bdd->query($products_query) as $products): ?>
                <article class="category">
                    <img src="images/<?php echo $products['Image']?>" width = 200px; height = 150px;>
                    <h3><?php echo $products['Nom'] ?></h3>
                    <a class="products" href="produits.php">Ajouter au panier</a>
                </article>
           
        <?php endforeach; ?>
        </section>
    </main>
</body>

</html>