<!DOCTYPE html>
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <title>Exercice 1</title>
</head>
<body>
	<p>
	<?php
		
		/*echo "Entrez un nombre.";
		$tabNbDepart = str_split();*/
		$tabNbDepart = str_split("3425");
		$tailleNb = count($tabNbDepart);
		$tabResultat = NULL;
		$cptPerm = $tailleNb-1;
		
		function permutation($tabNb, $cptPerm) {	
			global $tabResultat, $tailleNb, $tabNbDepart;
						
			for ($i = $tailleNb-1; $i > 0; $i--) {
				$tabPerm = $tabNb;
				// dernier chiffre remplacé par lavant dernier
				$tabPerm[$tailleNb-1] = $tabNb[$i-1];
				// avant dernier chiffre remplacé par le dernier
				$tabPerm[$i-1] = $tabNb[$tailleNb-1];
				echo implode($tabPerm);
				echo "\r\n";			
				if (intval(implode($tabNb)) > intval(implode($tabNbDepart))) {
					if ($tabResultat == null) {
						$tabResultat = $tabNb;
					} else if(intval(implode($tabNb)) < intval(implode($tabResultat))) {
						$tabResultat = $tabNb;
					}	
				}
				if ($cptPerm > 0) {
					permutation($tabPerm, $cptPerm-1);
				}
			}
						
		}
		
		permutation($tabNbDepart, $cptPerm);
		
		echo "Resultat: ";
		echo implode($tabResultat);
		
	?>
	</p>
</body>
</html>