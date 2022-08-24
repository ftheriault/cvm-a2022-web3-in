<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Boucles</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h1>Champs radio</h1>
		<?php
			for ($i = 0; $i < 10; $i++) {
				?>
				<div>
					<input type="radio" name="a" value="<?= $i ?>"> <?= $i ?>
				</div>
				<?php
				// phpr = php tags, reversed
			}

			$tab = array();
			$tab = []; // même chose

			$tab[] = "Hello"; // push!
			$tab[] = "World";

			var_dump($tab);

			foreach ($tab as $element) {
				?>
				<div>
					<?= $element ?>
				</div>
				<?php
			}
		?>
	</body>
</html>







