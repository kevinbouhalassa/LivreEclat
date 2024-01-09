<?php

require(__DIR__.'\../app/controller/dbcontroller.php');

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
print_r($_POST);
                /* if(isset($_POST['submit'])) {
                    $email_to1 = "bouhalassak@gmail.com";
                    $email_to2 = $_POST['courriel'];
                    $email_subject = "Confirmation de la réservation";
                    $email_from1 = "bouhalassak@gmail.com";
                    $email_from2 = $_POST['courriel'];
                    $prenom = $_POST['prenom'];
                    $nom = $_POST['nom'];

                    function clean_str($string) {
                        $bad = array("content-type" ,"bcc:","to:","cc:","href");
                        return str_replace($bad,"",$string);
                    }

                    $emailAdmin = "Confirmation de la réservation de. \n\n";
                    $emailAdmin .= "Prenom: ".$prenom. "\n";
                    $emailAdmin .= "Nom: ".$nom. "\n";

                    $emailClient = "Merci d'avoir choisi Livre Éclat. Votre livre" . $livres['Titre'] . "est maintenant réservé pour 30 jours. 
                    Vous pouvez passer en magasin durant nos heures d'ouvertures afin de pouvoir procéder à l'achat et récupérer votre livre";

                    $headersAdmin = "From: ".$email_from2. "\r\n" . "Reply-To: ".$email_from2. "\r\n" .
                    'X-Mailer: PHP/' . phpversion();
                    mail($email_to1, $email_subject, $emailAdmin, $headersAdmin);
                } else {
                    
                    echo 'Mail failed';
                } */
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
                    /* $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; */
                    $headers = "From:" . $de . "\r\n" . "Reply-To:" . $de . "\r\n"; mail($to,$subject,$message,$headers);
                    $headers2 = "From:" . $to . "\r\n" . "Reply-To:" . $to . "\r\n"; mail($to2,$subject2,$message2,$headers2);
                     // sends a copy of the message to the sender
        
                    
                    }
                    
                     else {
                        echo 'mail failed';
                    } 
                ?>
            <section id="confirmation">
                    <h2>Confirmation réservation</h2>
                    <p>Merci d'avoir choisi Livre Éclat. Votre livre <?=$livres['Titre']?> est maintenant réservé pour 30 jours. <br> 
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