<?php

require(__DIR__ . '\../app/controller/dbcontroller.php');

$db_handle = new DBController();
$id = $_GET['pid'];
$livres = $db_handle->runSingleQuery("SELECT * FROM Livres WHERE id = $id"); 
//var_dump($livres);

?>
<?php

include './pages/partials/header.php';

?>
<main>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['courriel'];
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $emailAdmin = "info@livreeclat.com";
    $toAdmin = "bouhalassak@gmail.com"; 

    $to = $_POST['courriel'];
    $sujet = "Confirmation de votre réservation";
    $sujetAdmin = "Nouvelle réservation";
    $headers = "From: $emailAdmin\r\n";
    $headers .= "Reply-To: $emailAdmin\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $message = nl2br(nl2br("Merci d'avoir choisi Livre Éclat. \r\nVotre livre " . $livres['Titre'] . " est maintenant réservé pour 30 jours.
    Vous pouvez passer en magasin durant nos heures d'ouvertures afin de pouvoir procéder à l'achat et récupérer votre livre.\r\nAdresse: 50 rue du blois Montreal, H2T 1P1
    Heures d'ouvertures: <br> Lundi au vendredi de 9h à 20h <br> Samedi au dimanche de 10h à 16h <br> 514-555-5555"));
    $headersAdmin = "From: $email\r\n";
    $headersAdmin .= "Reply-To: $email\r\n";
    $headersAdmin .= "Content-Type: text/html; charset=UTF-8\r\n";
    $messageAdmin = "Vous avez reçu une nouvelle réservation pour le livre " . $livres['Titre'] . ' de ' . $prenom . " " . $nom . ".";
}
    if (mail($email, $sujet, $message, $headers ) && mail($toAdmin, $sujetAdmin, $messageAdmin, $headersAdmin)) {
    ?>
    <section id="confirmation">
    <p style="color: green">Le courriel est envoyé</p>
    <?php } else {

    ?>
            <p style="color: red">L'envoi du courriel a échoué</p>
        <?php
    }
        ?>
        <h2>Confirmation réservation</h2>
        <p>Merci d'avoir choisi Livre Éclat. Votre livre <?= $livres['Titre'] ?> est maintenant réservé pour 30 jours. <br>
            Vous pouvez passer en magasin durant nos heures d'ouvertures afin de pouvoir procéder à l'achat et récupérer votre livre</p>
        <p>Vous serez redirigé à la boutique dans <span id="counter" style="color: red">10</span>.</p>
        </section>
</main>
<?php

include './pages/partials/footer.php';

?>
<script src="src/resources/javascript/confirmation.js"></script>
</body>

</html>