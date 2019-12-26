<?php
session_start();
/*     if (isset($_SESSION['identifiant'])) {
        echo "Bonjour ".$_SESSION['identifiant']. " !";
    } */
?>
<nav class="navbar navbar-light navbar-expand-md opaque-navbar justify-content-center fixed-top">
    <a href="site.php" class="navbar-brand d-flex w-50 mr-auto"><img src="images/logo.png" alt="" width="50px" height="50px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse w-100" id="navbarSupportedContent">
        <ul class="navbar-nav w-100 justify-content-center">
            <li class="nav-item ">
                <a class="nav-link" href="#a-propos">A propos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Services.php">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Catalogue_membre.php">Catalogue</a>
            </li>
        </ul>
        <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
            <li class="nav-item">
                <div class="btn-group" role="group">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        Bonjour <?php echo $_SESSION['identifiant'] ?>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Panier</a>
                        <a href="compte_client.php" class="dropdown-item"> Mon Compte </a>
                        <a href="deconnexion.php" class="dropdown-item"> Deconnexion</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>