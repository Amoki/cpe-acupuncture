<?php

function advancedSearch($meridien,$pathoType,$caract,$sympt,$motsCles)
{
	global $bdd;
	//$meridien = "Du Mai"
	//$pathoType = "mv";
	//$caract = ["p","v"];
	//$sympt = ["2ème orteil",.....]
	//$motsCles = ["....","...."];

	/*****************************************************/
	//MERIDIEN

	/* Requête SELECT */
	$rawquery = 'SELECT p.desc
					FROM patho p
					JOIN meridien m ON m.code=p.mer
					JOIN symptpatho sp ON p.idP=sp.idP
					JOIN symptome s ON sp.idS=s.idS
					JOIN keysympt ks ON s.idS=ks.idS
					JOIN keywords k ON ks.idK=k.idk
					WHERE ';


	if ($meridien!="") {
	$rawquery.= 'm.nom ="'.$meridien.'"';
	}

	/*****************************************************/
	//PATHOLOGIE TYPE

	if($pathoType!="") {
	$rawquery.='AND p.type LIKE "'.$pathoType.'%"';
	}

	//cas particulier "m"
	if($pathoType=="m"){
		$rawquery.=' AND p.type NOT LIKE "mv"';
	}
	
	/*****************************************************/
	//CARACTERISTIQUE(S)

	foreach ($caract as $value) {
		$rawquery.='AND p.type ="'.$value.'"';
	}
	
					
	/*****************************************************/
	//SYMPTOME(S)

	foreach ($sympt as $value) {
		$rawquery.='WHERE s.desc LIKE "%'.$value.'%"';
	}


	/*****************************************************/
	//MOT(S) CLE(S)

	foreach ($motsCles as $value) {
		$rawquery.='WHERE k.name LIKE "%'.$value.'%"';
	}



	/*****************************************************/
	//RUN QUERY

	$query = $bdd ->prepare($rawquery);
	
	$query->execute();
	var_dump($rawquery);
	$liste_patho = array();

	$i = 0;
	while($donnees = $query->fetch()){
		$liste_patho[$i]['type'] = $donnees['type'];
		$i++;
	}
	

	return $liste_patho;
}


// 	$caract = array();
// 	$caract = ["v","p"];

// 	$sympt = array();
// 	$sympt = ["toux"];

// 	$motsCles = array();
// 	$motsCles = ["orteil"];

// advancedSearch("Du Mai","mv",$caract,$sympt,$motsCles);
?>