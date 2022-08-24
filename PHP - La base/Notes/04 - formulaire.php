<?php
	// !empty = ça existe, pas null, pas 0, pas false, pas ""
	if (!empty($_GET["info"])) { // $_POST["info"]
		$userInput = $_GET["info"];
	}
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Les formulaires</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			if (!empty($userInput)) {
				?>
					<div style="color:red;padding:5px;border:1px solid pink">
						Vous avez écrit : <?= $userInput ?>
					</div>
				<?php
			}
		?>		
		<form action="" method="get">
			<div>
				Info : <input type="text" name="info" />
			</div>
			<div>
				<input type="submit" value="Go!" />
			</div>
		</form>
	</body>
</html>







