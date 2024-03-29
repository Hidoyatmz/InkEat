<?php
    require 'inc/bd.php';
    require 'inc/functions.php';
    session_start();
    if(isset($_POST['contactform'])) {
        newMessage($_POST, $bdd);
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>InkEat - Restaurant futuriste</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/common.css" />
    <link rel="stylesheet" href="style/index.css" />
</head>
<body>
    <header>
        <?php include 'inc/nav.php'; ?>
        <div class="header-main">
            <div class="header-main-image">
                <img src="images/repas/repas-laby.png" alt="Repas labyrinthe 3D"/>
            </div>
            <div class="header-main-text">
                <h1>InkEat</h1>
                <p>Goûtez au futur !</p>
                <a href="#about-us">Découvrir</a>
            </div>
        </div>
    </header>
    <main>
        <section id="about-us">
            <div class="about-us">
                <div class="about-us-text">
                    <h2>A propos</h2>
                    <p>Chez InkEat, venez vous asseoir aux tables d'un restaurant au concept encore jamais vu !</p>
                    <p>Nous proposons un menu unique au monde, retrouvez des plats <a target="_blank" href="https://www.aniwaa.fr/guide-achat/imprimantes-3d/impression-3d-alimentaire/">imprimés en 3D</a>, imposez vos propres taux de <a target="_blank"  href="https://fr.wikipedia.org/wiki/Nutriment">nutriments</a> ou goutez à la nourriture lyophilisée.</p>
                    <p>Notre carte est en total respect de l'environnement, nos ingrédients sont faits à base d'agriculture écologique.
                    Goutez au futur dès maintenant depuis chez vous avec notre livraison par drone, et un nouveau mode de paiement rejoint nos services : le Bitcoin pour plus de sécurité !</p>
                </div>
                <div class="about-us-image">
                    <img src="images/repas/dessert-fraise.jpg" alt="Dessert fraise 3D"/>
                </div>
            </div>
        </section>
    </main>
    
    <section id="inovations">
        <div class="inovations">
            <div class="inov-card">
                <div class="inov-card-icon"><img src="images/icons/leaf.svg" alt="Feuille"></div>
                <span class="inov-card-title">Ecologique</span>
                <p class="inov-card-text">Notre offre gastronomique est à base de produits respectueux du bien-être des animaux et de l’agriculture durable.<br><a href="pages/eco">En savoir plus.</a></p>
            </div>
            <div class="inov-card">
                <div class="inov-card-icon"><img src="images/icons/tachometer-alt-solid.svg" alt="Feuille"></div>
                <span class="inov-card-title">Rapide</span>
                <p class="inov-card-text">L'impression 3D de nos repas nous permet de configurer automatiquement tous les paramètres afin de produire des plats toujours excellent. Vous serez toujours satisfait !</p>
            </div>
            <div class="inov-card">
                <div class="inov-card-icon"><img src="images/icons/fly.svg" alt="Parachute"></div>
                <span class="inov-card-title">Livraison</span>
                <p class="inov-card-text">Nous vous offrons la possibilité d'être livré par drone. Cet usage des drones nous permet de couvrir tous les secteurs en plus d'assurer de meilleurs délais de livraison.</p>
            </div>
            <div class="inov-card">
                <div class="inov-card-icon"><img src="images/icons/btc.svg" alt="Bitcoin"></div>
                <span class="inov-card-title">Bitcoin</span>
                <p class="inov-card-text">Le Bitcoin a l'avantage d'être une monnnaie hyper sécurisé. Il permet des paiements entre personnes sans qu'un tiers de confiance ne soit nécessaire pour garantir la transaction.</p>
            </div>
        </div>
    </section>
    
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
    
    <section id="gallery">
        <h2>Galerie</h2>
        <div class="gallery">
            <div>
                <img src="images/repas/dessert-brez.jpg" alt="Brezel 3D">
                <div>
                    <h3>Le Brezel</h3>
                </div>
            </div>
            <div>
                <img src="images/repas/salade-legumes.jpg" alt="Salade de légumes">
                <div>
                    <h3>La mosaïque</h3>
                </div>
            </div>
            <div>
                <img src="images/repas/dessert-chocolat.png" alt="Dessert chocolat 3D">
                <div>
                    <h3>La toupie pralinée</h3>
                </div>
            </div>
            <div>
                <img src="images/repas/dessert-cerise.jpg" alt="Dessert cerise 3D">
                <div>
                    <h3>Le cerisier</h3>
                </div>
            </div>
            <div>
                <img src="images/repas/plat-dinde.png" alt="Plat dinde + feuille 3D">
                <div>
                    <h3>La mousse</h3>
                </div>
            </div>
            <div>
                <img src="images/repas/chocolat.jpg" alt="Dessert spirale 3D">
                <div>
                    <h3>La choco spirale</h3>
                </div>
            </div>
            <div>
                <img src="images/repas/plat-circuit.jpg" alt="Plat circuit 3D">
                <div>
                    <h3>Le circuit</h3>
                </div>
            </div>
            <div>
                <img src="images/repas/pizza.jpg" alt="Plat pizza 3D">
                <div>
                    <h3>La pizza</h3>
                </div>
            </div>
        </div>
    </section>
    
    <section id="contact">
        <h2>Contact</h2>
        <div class="contact">
            <div class="contact-form">
                <p>Nous envoyer un message :</p>
                <form class="form" method="POST">
                    <div>
                        <label for="prenom">Prénom* :</label>
                        <input type="text" name="prenom" id="prenom" placeholder="ex: John" required>
                    </div>
                    <div>
                        <label for="nom">Nom* :</label>
                        <input type="text" name="nom" id="nom" placeholder="ex: Doe" required>
                    </div>
                    <div>
                        <label for="email">Email* :</label>
                        <input type="email" name="email" id="email" placeholder="ex: john.doe@contact.com" required>
                    </div>
                    <div>
                        <label for="phone">Téléphone* :</label>
                        <input type="number" name="phone" id="phone" placeholder="ex: 0362104444" required>
                    </div>
                    <div class="form-textarea">
                        <label for="message">Message* :</label>
                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Votre message" required></textarea>
                    </div>
                    <div>
                        <input type="text" name="verif" placeholder="Que font 7+2" required>
                    </div>
                    <div>
                        <label><input type="checkbox" name="conditions" checked> J'accepte que mon adresse e-mail et mon numéro soient stockés pour recevoir une réponse</label>
                    </div>
                    <div class="form-submit">
                        <input type="submit" name="contactform" value="ENVOYER">
                    </div>
                </form>
            </div>
            <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2530.9061144938155!2d3.0594039159009365!3d50.62886088237407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d5854fb029d7%3A0x8dd4f230d47e12c8!2s45%20Rue%20Nicolas%20Leblanc%2C%2059000%20Lille!5e0!3m2!1sfr!2sfr!4v1615503321757!5m2!1sfr!2sfr" width="100%" height="100%" style="border:0; min-height: 400px;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>
    
    <footer>
        <div class="pied">
            <div class="footer-image">
                <img src="images/logo-big.png" alt="Image">
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
                    <li><a href="#"><span>></span> Accueil</a></li>
                    <li><a href="pages/carte.html"><span>></span> La carte</a></li>
                    <li><a href="pages/reserver.html"><span>></span> Réservation</a></li>
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

    <button class="buttonhaut" onclick="topFunction()" id="test"><i class="fas fa-arrow-up"></i></button>

    <script src="scripts/buttontop.js"></script>
    <script src="https://kit.fontawesome.com/e2f494c86d.js" crossorigin="anonymous"></script>
</body>