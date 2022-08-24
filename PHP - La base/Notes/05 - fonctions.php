<?php
	function hasher($mot1, $mot2 = "") {

		return password_hash($mot1 . $mot2, PASSWORD_DEFAULT);
	}
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Les fonctions</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h1>Création d'un hash</h1>
		<div>
			<?= hasher("john") ?>
		</div>
		<div>
			<?= hasher("john") ?>
		</div>
	</body>
</html>







