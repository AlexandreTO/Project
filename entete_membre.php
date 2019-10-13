<?php
    session_start();
/*     if (isset($_SESSION['identifiant'])) {
        echo "Bonjour ".$_SESSION['identifiant']. " !";
    } */
?>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar navbar-default">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-fill w-100">
                <li class="nav-item">
                    <img src="images/logo.png" alt="" width="50px" height="50px">
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="site_membre.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Catalogue.php">Catalogue</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Services.php">Services</a>
                </li>
                <li class="nav-item">
                    <div class="btn-group" role="group">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            Mon compte
                        </a>
                        <div class="dropdown-menu">
                            <h6 class="dropdown-header">Bonjour <?php echo $_SESSION['identifiant']?> !</h6>
                            <a class="dropdown-item" href="#">Panier</a>
                            <a href="deconnexion.php" class="dropdown-item"> Deconnexion</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>