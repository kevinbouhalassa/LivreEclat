<?php

require(__DIR__ . '\../app/controller/dbcontroller.php');

$db_handle = new DBController();
$id = $_GET['pid'];
$livres = $db_handle->runSingleQuery("SELECT * FROM Livres WHERE id = $id");

?>
<?php

include './pages/partials/header.php';

?>
<main id="pageReservation">
    <section class="reservation">
        <div class="livres">
            <h3 class="titre"><?= $livres['Titre'] ?></h3>
            <img class="img-livre" src="./src/resources/images/<?= $livres['NomImage'] ?>.webp" alt="<?= $livres['Titre'] ?>">
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
        <p id="dispo" style="color: red">Malheureusement, ce livre n'est pas disponible pour réservation. <br> <br> Pour plus d'infos, <?php echo '<a href="#adresse">veuillez nous contacter</a>' ?>
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

</html>