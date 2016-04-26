<?php

function meridListName()
{
	global $bdd;

	/* Requête SELECT */
	$rawquery = 'SELECT nom, code 
					FROM meridien
					ORDER BY nom';

	//echo $rawquery;

	$query = $bdd->prepare($rawquery);

	$query->execute();

	$liste_meridien = array();


	$i = 0;
	while($donnees = $query->fetch()){
		$liste_meridien[$i]['nom'] = $donnees['nom'];
		$liste_meridien[$i]['code'] = $donnees['code'];
		$i++;
	}
	//var_dump($liste_meridien);

	return $liste_meridien;
}
?>
