<?php


require(__DIR__ . '\../app/controller/dbcontroller.php');

$db_handle = new DBController();
$id = $_GET['pid'];
$livres = $db_handle->runSingleQuery("SELECT * FROM Livres WHERE id = $id");
//var_dump($livres);

$erreurs = [];
$MsgErreur = '';




/* if(isset($_POST['submit'])){
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
    $headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From:" . $de . "\r\n" . "Reply-To:" . $to . "\r\n" . mail($to,$subject,$message,$headers);
    $headers2 .= "From:" . $to . "\r\n" . "Reply-To:" . $de . "\r\n" . mail($to2,$subject2,$message2,$headers2);
     // sends a copy of the message to the sender
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    mail($to,$subject,$message,$headers);
    }
    
     else {
        echo 'mail failed';
    }  */


?>
<?php

include './pages/partials/header.php';

?>
<main id="pageReservation">
    <section class="reservation">
        <div class="livres">
            <h3 class="titre"><?= $livres['Titre'] ?></h3>
            <img class="img-livre" src="./src/resources/images/<?= $livres['NomImage'] ?>.jpg" alt="<?= $livres['Titre'] ?>">
            <div class="Infos">
                <p class="prix"><?= $livres['Prix'] ?>$</p>
                <p class="disponibilité"><?= $livres['Disponibilité'] ?></p>
            </div>
            <p class="btnSynopsis"></p>
        </div>
    </section>
    <div id="resume" class="">
        <h3>Synopsis</h3>
        <p><?= $livres['Synopsis'] ?></p>
    </div>
    </section>
    <?php
    $dispo = $livres['Disponibilité'];

    if ($dispo !== "Disponible") {
    ?>
        <p id="dispo" style="color: red">Malheureusement, ce livre n'est pas disponible pour réservation. <br> <br> Pour plus d'infos, <?php  echo '<a href="#adresse">veuillez nous contacter</a>' ?> 
            et/ou nous suivre sur facebook pour obtenir les dernières mises à jour.
        </p>

    <?php
    } else {
    ?>
        <form name="formulaire" method="POST" id="formulaire" action="./src/Confirmation.php?pid=<?= $livres["id"] ?>">
            <label class="" for="prenom">Prénom</label>
            <input type="text" id="prenom" name="prenom" required>
            <label class="" for="nom">Nom</label>
            <input type="text" id="nom" name="nom" required>
            <label class="" for="courriel">Courriel</label>
            <input type="email" id="courriel" name="courriel" required>
            <button type="submit" value="" id="envoi" name="Réservez">Réservez</button>
        </form>
    <?php
    }
    ?>

</main>
<?php

include './pages/partials/footer.php';

?>
<script src="src/resources/javascript/reservation.js"></script>
</body>
</body>

</html>