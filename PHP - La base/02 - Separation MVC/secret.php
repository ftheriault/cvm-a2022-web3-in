<?php
    require_once("action/secretAction.php");

    $data = execute();
    // var_dump($data);
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Vérification</title>
		<meta charset="utf-8">
        <link href="css/global.css" rel="stylesheet"/>
    </head>
    <body>
		<div class="sectionAuthentification">
            <?php
                foreach ($data["spyList"] as $spy) {
                    ?>
                    <div><?= $spy ?></div>
                    <?php
                }
            ?>
		</div>
    </body>
</html>