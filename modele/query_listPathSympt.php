<?php
function listPathSympt()
{
	global $bdd;
	/* Requête SELECT */
	$rawquery = 'SELECT (p.desc) as patho, (s.desc) as sympt
						FROM symptome s
						JOIN symptpatho sp ON s.idS=sp.idP
						JOIN patho p ON sp.idS=p.idP
						ORDER BY p.desc' ;

	$query = $bdd->prepare($rawquery);

	$query->execute();

	$liste_patho = array();

	while($donnees = $query->fetch()){

		if(!isset($liste_patho[$donnees['patho']])){
			$liste_patho[$donnees['patho']] = array();
		}
		array_push($liste_patho[$donnees['patho']], $donnees['sympt']);
	}


	return $liste_patho;
}
?>
