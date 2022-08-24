<?php
    require_once("action/contactAction.php");

    $data = execute();
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
                if (!empty($data["msgSent"])) {
                    ?>
                    <div style="color:green">
                        Message envoyé
                    </div>
                    <?php
                }
            ?>
           <form action="" method="post">
               <div>
                   <textarea name="commentaire" id="" cols="30" rows="10" style="width:100%;height:60px"></textarea>
               </div>
               <div>
                   <button>Envoyer</button>
               </div>
           </form>
		</div>
    </body>
</html>