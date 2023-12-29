<?php

//

require_once(__DIR__.'/app/controller/dbcontroller.php ');

$db_handle = new DBController();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="http://localhost/coursweb/Projet_Integrateur_KevinBouhalassa/">
    <title>Livre Éclat</title>
    <link rel="stylesheet" href="src/resources/css/style.css">
</head>

<body >
<header >
    <section id="navmobile">
        <section class="nav">
            <div id="logo">
            <img src="src/resources/images/LivrÉclat.png" alt="Livre Éclat">
            </div>
            <div hidden><h1>Livre Éclat</h1></div>
            
            <div class="navbar">
                <ul>
                    <li><a href="principale.php">Accueil</a></li>
                    <li><a href="src/livres.php">Livres</a></li>
                </ul>
            </div>
        </section>
        <section class="navside">
            <div class="facebook">
                <p>Suivez-nous sur Facebook pour connaître les nouveautés et promotions</p>
                <a href="principale.html"><img src="src/resources/images/facebook.256x256.png" width="47.43" height="47.43" alt="Lien facebook Livre Éclat" ></a>
                </div>
                <div id="lang">
                <p>English</p>
                </div>
                <div class="mode">
                        <p>Mode Blanc</p>
                </div>
            </section>
    </section>
    <section id="navbarmob">
            <ul>
                <li><a href="principale.html">Accueil</a></li>
                <li><a href="src/livres.html">Livres</a></li>
            </ul>
    </section>
</header>
<main>
    <div class="img-prom">

        
        <div class="Slide fade">
            <div id="promotion">
                <img src="./src/resources/images/Harry-potter-promotion.jpg" alt="Collection Harry Potter">
            </div>
        </div>
        <a class="previous" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
</main>
    <footer>
        <section id="footer">
            <div id="adresse">
                <h4>Adresse:</h4>
                <p>50 rue du blois <br>
                    Montreal, H2T 1P1 

                    <h4>Heures d'ouvertures:</h4>
                    <p>Lundi au vendredi de 9h à 20h<br>
                    Samedi et dimanche de 10h à 16h</p>
                    
                    <p>514-555-5555 </p>
                    
                   <p><a href="mailto:info@livreeclat.com">info@livreeclat.com</a></p>
                </div>
                <div id="politique">
                <h4>Politique de remboursement:</h4>

                    <p>Remboursement ou échange dans les 30 jours suivant l'achat. <br> 
                    Le produit ne doit pas être endommagé.
                    </p>
                </div>
            
        </section>
        <div id="auteur">
                <p>©Tout droits réservés - Kevin Bouhalassa</p>
            </div>
    </footer>
    <script src="src/resources/javascript/script.js"></script>
</body>

</html>