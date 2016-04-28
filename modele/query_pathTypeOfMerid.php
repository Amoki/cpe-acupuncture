<?php
include("connectBD.php");

function pathTypeOfMerid($meridien)
{
	//Si aucun meridien selectionné: $meridien = "default"

	$connexion=connectBD();
	
	if($meridien=="default"){
	/* Requête SELECT */
	$rawquery = 'SELECT DISTINCT p.type
					FROM patho p';
	}
	else{
	$rawquery = 'SELECT DISTINCT p.type
					FROM patho p 
					JOIN meridien m ON m.code=p.mer
					WHERE m.nom ="'.$meridien.'"';
	}


	$query = $connexion ->prepare($rawquery);
	

	$query->execute();

	$pathoType = array();

	$i = 0;
	while($donnees = $query->fetch()){
		$pathoType[$i]['type'] = $pathoType['type'];
		$i++;
	}
	

	return $pathoType;
}

pathTypeOfMerid("Du Mai");
?>