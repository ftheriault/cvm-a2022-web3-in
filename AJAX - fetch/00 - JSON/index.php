<?php
	$tab = array("elem1", "elem2", "elem3");
	$tab2 = json_encode($tab); // obj/structure à une représentation JSON (string)
?>
<!DOCTYPE html>
<html>
	<head>
		<title>JSON</title>
		<meta charset="utf-8">
	</head>
	<body>
		<div>
			<?= $tab2 ?>
			<script>
				let tab = '<?= $tab2 ?>';
				tab = JSON.parse(tab); // JSON.stringify()
				console.log(tab);
			</script>
		</div>
	</body>
</html>
