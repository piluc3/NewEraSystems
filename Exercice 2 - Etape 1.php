<!DOCTYPE html>
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <title>Exercice 2 - Étape 1</title>
</head>
<body>
	<p>
	<?php
	$listeProduits = array(
		"Pomme" => 0.6,
		"Orange" => 1.25
	);
	
	$listeArticles = ["Pomme", "Pomme", "Orange", "Pomme"];
	$totalArticles = 0;
	
	for ($i = 0; $i < count($listeArticles); $i++) {
		if (array_key_exists($listeArticles[$i], $listeProduits))
			$totalArticles += $listeProduits[$listeArticles[$i]];
	}
	
	echo $totalArticles;
	?>
	</p>
</body>
</html>