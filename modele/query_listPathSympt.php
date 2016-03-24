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

	//echo $rawquery;
	$query = $bdd ->prepare($rawquery);
	

	$query->execute();

	$liste_patho = array();

	//$i = 0;
	while($donnees = $query->fetch()){
		//$liste_patho[$i]['patho'] = $donnees['patho'];
		//$liste_patho[$i]['sympt'] = $donnees['sympt'];
		//$i++;
		if(!isset($liste_patho[$donnees['patho']])){
			$liste_patho[$donnees['patho']] = array();
		}
		array_push($liste_patho[$donnees['patho']], $donnees['sympt']);
	}
	
	//var_dump($liste_patho);

	return $liste_patho;
}
?>