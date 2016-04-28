<?php
include("connectBD.php");

function keywordToPatho($array)
{

$connexion=connectBD();

	
	/* Requête SELECT */
	$rawquery = 'SELECT (p.desc)
									FROM patho p
									JOIN symptpatho sp ON p.idP=sp.idP
									JOIN symptome s ON sp.idS=s.idS
									JOIN keysympt ks ON s.idS=ks.idS
									JOIN keywords k ON ks.idK=k.idk
									WHERE' ;
	$val=1;
	foreach ($array as $value) {
	if ($val==1) {
		$val=0;
	}
	else{
		$rawquery.=' AND ';
	}

	$rawquery.=' k.name LIKE "'.$value.'"';
	}

	$query = $connexion ->prepare($rawquery);

	$query->execute();
	$liste_patho = array();
	$i = 0;
	while($donnees = $query->fetch()){
		//$liste_patho[$i]['idP'] = $donnees['idP'];
		//$liste_patho[$i]['mer'] = $donnees['mer'];
		//$liste_patho[$i]['type'] = $donnees['type'];
		$liste_patho[$i]['desc'] = $donnees['desc'];
		$i++;
	}
	

	return $liste_patho;
}

$test = array();
$test = ["orteil","orteil"];
keywordToPatho($test);
?>