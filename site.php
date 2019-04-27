<?php $tab='Accueil'; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Accueil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="all" href="main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="main.js"></script>
</head>

<body>
    <header class="navbar ">
        <?php include("entete.php");?>
    </header>
    <!--Pour voir le site avec la mise en forme il faut l'ouvrir sur un serveur local avec WAMPS et faire un pull (ou un clone) du git dans WWW-->
    <main>
        <div class="view header-img">
            <div class="contenu">
                <p class="title">EasyStockage
                    <br/>La magie de la gourmandise</p>
                <!--  -->
            </div>
        </div>
        <section class="corps">

            <div class="ligne">
                <img src="images/brian-chan-12168-unsplash.jpg" alt="cupcake" class="ligne img-1">
            </div>
            <div class="colonne">
                <span>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam in sapien sagittis, egestas lectus
                    in,
                    ultricies purus. Donec ipsum felis, rhoncus non ultrices id, vehicula aliquam quam. Nulla sit
                    amet
                    odio
                    a orci pulvinar suscipit eget in dui. Nullam viverra ultrices ex at aliquam. Duis elementum
                    hendrerit
                    purus vitae congue. Maecenas ipsum neque, pulvinar ut tincidunt quis, faucibus sit amet mauris.
                    Nullam
                    elit tortor, elementum id nulla quis, mollis rhoncus augue. Donec sagittis velit in ornare
                    commodo.
                </span>
            </div>
        </section>
        <section class="corps">
            <div class="colonne1">
                <span>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam in sapien sagittis, egestas lectus
                    in,
                    ultricies purus. Donec ipsum felis, rhoncus non ultrices id, vehicula aliquam quam. Nulla sit
                    amet
                    odio
                    a orci pulvinar suscipit eget in dui. Nullam viverra ultrices ex at aliquam. Duis elementum
                    hendrerit
                    purus vitae congue. Maecenas ipsum neque, pulvinar ut tincidunt quis, faucibus sit amet mauris.
                    Nullam
                    elit tortor, elementum id nulla quis, mollis rhoncus augue. Donec sagittis velit in ornare
                    commodo.
                </span>
            </div>
            <div class="ligne1">
                <img src="images/joseph-gonzalez-208309-unsplash.jpg" alt="" class="ligne1 img-1">
            </div>
        </section>

        <section class="corps">
            <div class="colonne3">
                <img src="rod-long-787228-unsplash.jpg" alt="" class="img-3">
                <p class="arti3">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam in sapien sagittis, egestas lectus
                    in,
                    ultricies purus. Donec ipsum felis, rhoncus non ultrices id, vehicula aliquam quam. Nulla sit
                    amet
                    odio
                    a orci pulvinar suscipit eget in dui. Nullam viverra ultrices ex at aliquam. Duis elementum
                    hendrerit
                    purus vitae congue. Maecenas ipsum neque, pulvinar ut tincidunt quis, faucibus sit amet mauris.
                    Nullam
                    elit tortor, elementum id nulla quis, mollis rhoncus augue. Donec sagittis velit in ornare
                    commodo.
                </p>
            </div>

        </section>
    </main>
    <footer>
        <div class="ligne3">
            <div class="col-1">
                <h3>A propos</h3>
                <p> <a href="#">Nous contacter</a><br />
                    <a href="#">Qui sommes nous</a> <br />
                    <a href="#">Partenariat</a>
                </p>
            </div>
            <div class="col-1">
                <h3>Mentions légales</h3>
            </div>
            <div class="col-1">
                <h3>Réseaux Sociaux</h3>
            </div>
        </div>
        <div class="footer-copyright">
            © 2019 Copyright: EasyStockage
        </div>
    </footer>
</body>

</html>