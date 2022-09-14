<?php
    require_once("action/IndexAction.php");

    $action = new IndexAction();
    $data = $action->execute();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SmartClass control</title>
        <link rel="stylesheet" href="css/global.css">
		<script src="https://notes-de-cours.com/dev/toggle-lab-info.js"></script>
    </head>
    <body>
        <div>
            <main>
                <div id="house">
                    <?php
                        foreach ($data["lights"] as $light) {
                            ?>
                            <img src="img/light-<?= $light["status"] == 1 ? "on" : "off" ?>.png" alt="<?= $light["name"] ?>" id="<?= $light["name"] ?>">                            
                            <?php
                        }
                    ?>
                </div>
            </main>
            <footer>
                <div>
                    <h3>Smart Home</h3>
                    <div>
                        <div>
                            <img src="img/btn-refresh.png" alt="refresh" class="btn-refresh">
                        </div>
                        <div class="steps-section">
                            <p>
                                L'objectif de cet exercice est de vous faire pratiquer la connexion à une base de données. En consultant la table "lights", vous devrez modifier l'état des lumières de la maison. Voici les étapes
                            </p>
                            <ol>
                                <li>
                                    Modifier la logique du bouton "btn-refresh" (à gauche) afin de rafraîchir la page lorsque l'usager clique dessus (via un formulaire ou une redirection en JavaScript).
                                </li>
                                <li>
                                    Créer un objet "Connection" (et un fichier de constantes), permettant d'établir une connexion à la base de données. Voici les informations nécessaire à la connexion :
                                    <ul>
                                        <li>Hôte : mysql:host=webmysql.notes-de-cours.com:13306</li>
                                        <li>Nom de la base de données : smarthome</li>
                                        <li>Usager : smarthomeuser</li>
                                        <li>Mot de passe : smhFTW!6l</li>
                                    </ul>
                                </li>
                                <li>
                                    Modifier la méthode getLightsStatus() (de SmartLightDAO) afin de faire votre requête SQL et retourner la liste des lumières (chaque ligne de la table "lights" possède un "name" et un "status"). Appelez la méthode dans votre IndexAction et retourner le résultat en utilisant <i>compact</i>.
                                </li>
                                <li>
                                    Modifiez les images du div#house afin qu'elle reflète l'état de la lumière. Un statut à 0 signifie que la lumière est éteinte. Un statut à 1 signifie qu'elle est ouverte.
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>