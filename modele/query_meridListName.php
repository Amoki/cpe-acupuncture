<?php
include("connectBD.php");

function meridListName()
{

	$connexion=connectBD();
	
	/* Requête SELECT */
	$rawquery = 'SELECT nom
					FROM meridien
					ORDER BY nom';

	//echo $rawquery;

	$query = $connexion ->prepare($rawquery);
	
	$query->execute();

	$liste_meridien = array();


	$i = 0;
	while($donnees = $query->fetch()){
		$liste_meridien[$i]['nom'] = $donnees['nom'];
		$i++;
	}
	//var_dump($liste_meridien);

	return $liste_meridien;
}

meridListName();
?>