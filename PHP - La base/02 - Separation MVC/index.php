<?php
	require_once("action/indexAction.php");

	$data = execute();
	// $data["hasError"] 
	// $data["user"] 
	// $data contient les variables nécessaires à gérer l'interface graphique
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
			<h1>
				Authentification nécessaire
			</h1>
			<?php
				if (!empty($data["hasError"] )) {
					?>
					<div style="color:red;text-align:center">
						!!! Erreur d'authentification !!!
					</div>
					<?php
				}
			?>
			<form action="" method="post">
				<div class="formLabel"><label for="courriel"> Courriel : </label></div>
				<div class="formInput"><input type="text" name="champCourriel" /></div>
				<div class="formSeparator"></div>
				
				<div class="formLabel"><label for="pwd"> Mot de passe : </label> </div>
				<div class="formInput"><input type="password" name="champMotDePasse" /></div>
				<div class="formSeparator"></div>
				
				<div class="formLabel">&nbsp;</div>
				<div class="formInput"><input type="image" src="images/submit.png" /></div>
				<div class="formSeparator"></div>
			</form>
		</div>
    </body>
</html>