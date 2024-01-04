<?php


require(__DIR__.'\../app/controller/dbcontroller.php');

$db_handle = new DBController();
$id = $_GET['pid'];
$livres = $db_handle->runSingleQuery("SELECT * FROM Livres WHERE id = $id");
//var_dump($livres);

$erreurs = [];
 $MsgErreur = '';

 


if(isset($_POST['submit'])){
    $to = "bouhalassak@gmail.com";
    $to2 = "info@livreeclat.com";
    $de = $_POST['courriel']; 
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $subject = "Nouvelle réservation";
    $subject2 = "Confirmation de votre réservation";
    $message = 'Vous avez reçu une nouvelle réservation pour le livre'. $livres['Titre'] . 'de' . $prenom . $nom ;
    $message2 = "Merci d'avoir choisi Livre Éclat. Votre livre" . $livres['Titre'] . "est maintenant réservé pour 30 jours.
    Vous pouvez passer en magasin durant nos heures d'ouvertures afin de pouvoir procéder à l'achat et récupérer votre livre";

    $headers = "From:" . $de;
    $headers2 = "From:" . $to2;
    mail($to,$subject,$message,$headers);
    mail($to2,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }

    if (mail($to,$subject,$message,$headers)) {
        echo 'mail sent';
    } else {
        echo 'mail failed';
    } 


?>
</script>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="http://localhost/coursweb/Projet_Integrateur_KevinBouhalassa/">
    <title>Livre Éclat</title>
    <link rel="stylesheet" href="src/resources/css/style.css">
</head>

<body>
    <header>
        <section id="navmobile">
            <section class="nav">
                <div id="logo">
                    <img src="src/resources/images/LivrÉclat.png" alt="Livre Éclat">
                </div>
                <div hidden>
                    <h1>Livre Éclat</h1>
                </div>

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
                    <a href="principale.html"><img src="src/resources/images/facebook.256x256.png" width="47.43"
                            height="47.43" alt="Lien facebook Livre Éclat"></a>
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
                <li><a href="principale.php">Accueil</a></li>
                <li><a href="./src/livres.php">Livres</a></li>
            </ul>
        </section>
    </header>
    <main id="pageReservation">
        <section class="reservation">
            <div class="livres">
                <h3 class="titre"><?=$livres['Titre']?></h3>
                <img class="img-livre" src="./src/resources/images/<?=$livres['NomImage']?>.jpg"
                    alt="<?=$livres['Titre']?>">
                <div class="Infos">
                    <p class="prix"><?=$livres['Prix']?>$</p>
                    <p class="disponibilité">Disponible</p>
                </div>
                <p class="btnSynopsis"></p>
            </div>
        </section>
        <div id="resume">
            <h3>Synopsis</h3>
            <p><?=$livres['Synopsis']?></p>
        </div>
    </section>
    <form method="POST" id="formulaire" action="./src/Confirmation.php?pid=<?=$livres["id"]?>">
        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="prenom" required>
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom" required>
        <label for="courriel">Courriel</label>
        <input type="email" id="courriel" name="courriel" required>
        <small class="ErrorMessage">Error Message</small>
        <button type="submit" id="envoi" name="Réservez">Réservez</button>
        <?php echo((!empty($MsgErreur)) ? $MsgErreur : '') ?>
    </form>
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
</body>

</html>