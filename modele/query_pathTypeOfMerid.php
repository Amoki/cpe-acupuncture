<?php

function pathTypeOfMerid($meridien)
{
	global $bdd;
	//Si aucun meridien selectionné: $meridien = "default"

	if($meridien=="default"){
	/* Requête SELECT */
	$rawquery = 'SELECT DISTINCT p.type
					FROM patho p';
	}
	else{
	$rawquery = 'SELECT DISTINCT p.type
					FROM patho p 
					JOIN meridien m ON m.code=p.mer
					WHERE m.nom = ?';
	}


	$query = $bdd ->prepare($rawquery);
	

	$query->execute(array($meridien));

	$pathoType = array();

	$i = 0;
	while($donnees = $query->fetch()){
		$pathoType[$i]['type'] = $pathoType['type'];
		$i++;
	}
	

	return $pathoType;
}

?>