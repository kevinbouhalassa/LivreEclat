<?php

require(__DIR__ . '\../app/controller/dbcontroller.php');

$db_handle = new DBController();

?>
<?php

include './pages/partials/header.php';

?>
<main>
    <input id="searchbar" onkeyup="return search()" type="search" name="recherche" placeholder="Recherchez votre livre">
    <p id="warn-box">Notez qu'il n'est pas possible de commander et acheter le livre en ligne,
        vous devrez passer en magasin afin de pouvoir procéder au paiement et récupérer le produit que vous aurez réservé</p>
        <section class="boutique">
        <?php

        $livres = $db_handle->runQuery("SELECT * FROM livres ORDER BY id ASC LIMIT 0,20");

        foreach ($livres as $livre) :
        ?>
            <div class="livres">
                <h3 class="titre"><?= $livre['Titre'] ?></h3>
                <img title="<?= $livre['Titre'] ?> " class="img-livre" src="./src/resources/images/<?= $livre['NomImage'] ?>.webp" alt="<?= $livre['Titre'] ?>" width="160" height="225">
                <div class="Infos">
                    <p class="prix"><?= $livre['Prix'] ?>$</p>
                    <?php
                    $reserver = "Réservation";
                    $detail = "Plus d'infos";
                    $change = $livre['Disponibilité'];
                    $output = $reserver;

                    if ($change !== "Disponible") {

                        $output = $detail;
                    }
                    ?>
                    <p name="disponibilité" class="disponibilité"><?= $livre['Disponibilité'] ?></p>
                </div>
                <a class="btnReserver" title="Réservation" href="./src/reservation.php?pid=<?= $livre["id"] ?>"><?php echo $output ?></a>
            </div>
        <?php endforeach ?>
    </section>
</main>
<?php

include './pages/partials/footer.php';

?>
<script src="src/resources/javascript/livres.js"></script>
</body>


</html>