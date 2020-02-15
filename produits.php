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
        $category_requete = 'SELECT Categorie, Image FROM produit GROUP BY Categorie';
        ?>

        <div class="products_container">
            <aside>
                <h3>Catégories</h3>
                <?php foreach ($bdd->query($category_requete) as $category): ?>
                    <ul class="list_category">
                        <li><a class="category_aside" href="produits.php?Categorie=<?php echo $category['Categorie'] ?>"><?php echo $category['Categorie']?></a></li>
                    </ul>
                <?php endforeach; ?>
            </aside>

            <section class="products_part">
                <?php foreach ($bdd->query($products_query) as $products): ?>
                    <article class="product">
                        <div class="image_product">
                            <img src="images/<?php echo $products['Image']?>">
                            <div class="hidden_description_product">
                                <h3><?php echo $products['Nom'] ?></h3>
                                <p class="description_product"><?php echo $products['Description'] ?></p>
                                <p class="price_product"><?php echo $products['Prix'] . "€" ?></p>
                            </div>
                        </div>
                        <a class="add_to_cart" href="#">Ajouter au panier</a>
                        <!-- <a class="products" href="produits.php">Ajouter au panier</a> -->
                    </article>
               
            <?php endforeach; ?>
            </section>
        </div>
    </main>
</body>

</html>