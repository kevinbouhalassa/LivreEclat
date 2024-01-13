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
        <div id="navmobile">
            <div class="nav">
                <div id="logo">
                    <img id="logoImg"src="src/resources/images/LivrÉclat.png" alt="Livre Éclat">
                </div>

                <div class="navbar">
                    <ul  class="change">
                        <li class="change"><a class="change" href="principale.php">Accueil</a></li>
                        <li class="change"><a class="change" href="src/livres.php">Livres</a></li>
                    </ul>
                </div>
            </div>
            <div class="navside">
                <div class="facebook">
                    <p class="change">Suivez-nous sur Facebook pour connaître les nouveautés et promotions</p>
                    <a href="principale."><img src="src/resources/images/facebook.256x256.png" width="47" height="47" alt="Lien facebook Livre Éclat"></a>
                </div>
                <div class="change" hidden>
                    <p>English</p>
                </div>
                <div class="mode" onclick="return colorToggle()">
                    <p>Mode Blanc</p>
                </div>
            </div>
        </div>
        <div id="navbarmob">
            <ul>
                <li class="change"><a class="change" href="principale.php">Accueil</a></li>
                <li class="change"><a class="change"href="src/livres.php">Livres</a></li>
            </ul>
        </div>
    </header>