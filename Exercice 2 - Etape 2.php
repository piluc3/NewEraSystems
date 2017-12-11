<!DOCTYPE html>
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <title>Exercice 2 - Étape 2</title>
</head>
<body>
	<p>
	<?php
		$listeProduits = array(
			"Pomme" => 0.6,
			"Orange" => 1.25
		);
		
		$listePromo = array(
			"Pomme" => (1/2),
			"Orange" => (2/3)
		);
		
		$listeArticles = ["Pomme", "Pomme", "Orange", "Pomme"];	
		$totalArticles = 0;
		
		$listeNbArticles = $listeProduits;
		foreach($listeNbArticles as $cle => $val) $listeNbArticles[$cle] = 0;
		
		for ($i = 0; $i < count($listeArticles); $i++) {
			if (array_key_exists($listeArticles[$i], $listeProduits)) {
				$listeNbArticles[$listeArticles[$i]]++;
			}	
		}
		/*print_r($listeProduits);
		print_r($listeNbArticles);
		print_r($listePromo);*/
		
		//for ($j = 0; $j < count($listeNbArticles); $j++) {
		for ($j = count($listeNbArticles); $j > 0 ; $j--) {
			if (array_key_exists($listeArticles[$j], $listePromo)) {
				$prixArti = $listeProduits[$listeArticles[$j]];
				$nbArti = $listeNbArticles[$listeArticles[$j]];
				$modifPromo = $listePromo[$listeArticles[$j]];
				//echo "$prixArti, $nbArti, $modifPromo"; echo "\n";
				$totalArticles += $prixArti * ceil($nbArti * $modifPromo);
			} else $totalArticles += $listeProduits[$listeArticles[$j]];
		}
		
		echo $totalArticles;
	?>
	</p>
</body>
</html>