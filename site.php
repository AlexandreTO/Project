<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Accueil</title>
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
    <header>
        <?php include("navbar_accueil.php"); ?>
        <div class="view intro">
            <div class="mask flex-center">
                <div class="container text-center white-text">
                    <h1 class="h1FadeIn h1-size">Easy Stockage</h1>
                    <h2 class="h1FadeIn h2-size">La magie de la gourmandise</h2>
                </div>
            </div>
        </div>
    </header>
    <br>
    <br>
    <main class="py-5">

        <div class="container2">
            <div class="row align-items-center">
                <div class="col-sm-5 m-1">
                    <img src="images/brian-chan-12168-unsplash.jpg" alt="" class="img1">
                </div>
                <div class="col-sm mx-3 text-center">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod tempor iaculis. Sed rutrum
                    finibus
                    nulla,
                    venenatis porttitor libero pretium id. Nam porttitor quam in dui facilisis sollicitudin. Proin
                    tempus
                    dapibus
                    nulla, eget facilisis orci varius nec. Vivamus dui libero, hendrerit vitae lorem vel, facilisis
                    fringilla
                    arcu.
                    Morbi faucibus vulputate tristique. Integer id ipsum justo. Integer at quam turpis. Donec
                    tincidunt
                    elit sed
                    felis varius auctor. Curabitur nec malesuada ipsum, venenatis molestie turpis. Curabitur
                    fringilla
                    ligula eu
                    leo
                    convallis volutpat
                </div>
            </div>
        </div>
        <br>
        <br><br>
        <section class="sect1">
            <div class="container2">
                <div class="row align-items-center">
                    <div class="col-sm mx-3 text-center">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod tempor iaculis. Sed rutrum
                        finibus
                        nulla,
                        venenatis porttitor libero pretium id. Nam porttitor quam in dui facilisis sollicitudin. Proin
                        tempus
                        dapibus
                        nulla, eget facilisis orci varius nec. Vivamus dui libero, hendrerit vitae lorem vel, facilisis
                        fringilla
                        arcu.
                        Morbi faucibus vulputate tristique. Integer id ipsum justo. Integer at quam turpis. Donec
                        tincidunt
                        elit sed
                        felis varius auctor. Curabitur nec malesuada ipsum, venenatis molestie turpis. Curabitur
                        fringilla
                        ligula eu
                        leo
                        convallis volutpat
                    </div>
                    <div class="col-sm-5 m-1 order-first order-lg-2">
                        <img src="images/joseph-gonzalez-208309-unsplash.jpg" alt="" class="img1 ">
                    </div>
                </div>
            </div>
        </section>
        <br>
        <br><br>
        <div class="container">
            <div class="row align-items-center">
                <img src="images/rod-long-787228-unsplash.jpg" alt="" class="img2">
            </div>
            <div class=" mx-3 text-center">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod tempor iaculis. Sed rutrum
                finibus
                nulla,
                venenatis porttitor libero pretium id. Nam porttitor quam in dui facilisis sollicitudin. Proin
                tempus
                dapibus
                nulla, eget facilisis orci varius nec. Vivamus dui libero, hendrerit vitae lorem vel, facilisis
                fringilla
                arcu.
                Morbi faucibus vulputate tristique. Integer id ipsum justo. Integer at quam turpis. Donec tincidunt
                elit sed
                felis varius auctor. Curabitur nec malesuada ipsum, venenatis molestie turpis. Curabitur fringilla
                ligula eu
                leo
                convallis volutpat
            </div>
        </div>
        <br>
        <div class="intro-2"></div>
        <div id="bts"></div>
        <br>
        <div class="container" id="a-propos">
            <div class="mx-3 text-center">
                <h1>A propos</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod tempor iaculis. Sed rutrum
                    finibus nulla, venenatis porttitor libero pretium id. Nam porttitor quam in dui facilisis
                    sollicitudin. Proin tempus dapibus nulla, eget facilisis orci varius nec. Vivamus dui libero,
                    hendrerit vitae lorem vel, facilisis fringilla arcu. Morbi faucibus vulputate tristique. Integer id
                    ipsum justo. Integer at quam turpis. Donec tincidunt elit sed felis varius auctor. Curabitur nec
                    malesuada ipsum, venenatis molestie turpis. Curabitur fringilla ligula eu leo convallis volutpat
                </p>
            </div>
        </div>
    </main>
    <!-- Footer -->
    <?php include("footer.php"); ?>
</body>

</html>