<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>InkEat - Restaurant futuriste</title>
        <link rel="stylesheet" href="../style/common.css" />
        <link rel="stylesheet" href="style/carte.css" />
    </head>
    <body>
        <header>
            <?php include '../inc/nav.php'; ?>
            <div class="header-main">
                <div class="header-main-image">
                    <img src="../images/repas/repas-laby.png" alt="Image"/>
                </div>
                <div class="header-main-text">
                    <h1>InkEat</h1>
                    <p>Goûtez au futur !</p>
                    <a href="../index.html">Découvrir</a>
                </div>
            </div>
        </header>
        <main>
            <section>
                <h2>Notre carte</h2>*
                <div class="conteneur">
                    <div>
                        <a target="_blank" href="images/carte/carte1.pdf"><img src="images/carte/carte1.jpg" alt="Carte plats" /></a>
                    </div>
                    <div>
                        <a target="_blank" href="images/carte/carte2.pdf"><img src="images/carte/carte2.jpg" alt="Carte boissons" /></a>
                    </div>
                </div>
            </section>
        </main>
        <section>
            <h2>Horaires</h2>
            <div class="horaires">
                <div>
                    <h3>8H00-22H00</h3>
                    <p>LUN-VEN</p>
                </div>
                <div>
                    <h3>9H00-23H00</h3>
                    <p>SAMEDI</p>
                </div>
                <div>
                    <h3>9H00-00H00</h3>
                    <p>DIMANCHE</p>
                </div>
            </div>
        </section>
        <button class="buttonhaut" onclick="topFunction()" id="test"><i class="fas fa-arrow-up"></i></button>
        <footer>
            <div class="pied">
                <div class="footer-image">
                    <img src="../images/logo-big.png" alt="Image">
                </div>
                <div class="footer-contact">
                    <h3><i></i>Nous contacter</h3>
                    <p>45, Rue Nicolas Leblanc, 59000 Lille</p>
                    <p>03 20 91 71 31</p>
                    <p>contact@inkeat.fr</p>
                </div>
                <div class="footer-plan">
                    <h3><i></i>Plan du site</h3>
                    <ul>
                        <li><a href="../index.html"><span>></span> Accueil</a></li>
                        <li><a href="#"><span>></span> La carte</a></li>
                        <li><a href="reserver.html"><span>></span> Réservation</a></li>
                        <li><span>></span> CGU / CGV</li>
                    </ul>
                </div>
                <div class="footer-info">
                    <h3><i></i>Ink Eat</h3>
                    <p> Restaurant sur Lille, notre 
                        nourriture est 100% écologique
                        et contient des taux de 
                        macronutriments pensés par
                        nos spécialistes
                    </p>
                    <p>© InkEat 2021 - Tous droits réservés</p>
                </div>
            </div>
        </footer>

        <script src="../scripts/buttontop.js"></script>
        <script src="https://kit.fontawesome.com/e2f494c86d.js" crossorigin="anonymous"></script>
    </body>
</html>