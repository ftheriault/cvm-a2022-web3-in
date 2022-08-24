<?php
	$len = null;

	if (!empty($_GET["searchBox"])) {
		$len = strlen($_GET["searchBox"]);
	}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>String stats</title>
        <meta charset="utf-8" />
		<link href="css/global.css" rel="stylesheet" />
	</head>
	<body>
		<div>
			<div id="analyze-icon">
				
			</div>
			<div id="analyze-result">
				<?php
					if (!empty($len)) {
						echo $len;
					}
					else {
						?>
						Entrez une chaîne de caractères et appuyez sur analyser						
						<?php
					}
				?>
			</div>
			<form action="" method="get">
				<div id="search-line">
					<div>
						<input type="text" name="searchBox" placeholder="Texte à analyser" />
					</div>
					<div class="btn">
						<button>Analyser</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>