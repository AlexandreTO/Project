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
        <h2 class="title_category">Catégories</h2>

<!--Bdd connection-->
        <?php
        $bdd = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', 'root');
        $category_requete = 'SELECT Categorie, Image FROM produit GROUP BY Categorie';
        ?>

        <section class="categories_container">
            <?php foreach ($bdd->query($category_requete) as $products_categories): ?>
            <a class="category" href="produits.php?Categorie=<?php echo $products_categories['Categorie'] ?>">
                <article>
                    <img src="images/<?php echo $products_categories['Image']?>">
                    <h3><?php echo $products_categories['Categorie'] ?></h3>
                </article>
            </a>
        <?php endforeach; ?>
        </section>
    </main>
</body>

</html>

 <!-- , array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)) -->
