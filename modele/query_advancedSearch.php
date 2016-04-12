<?php
function advancedSearch($meridien,$pathoType,$caract,$sympt,$motsCles)
{
	//$meridien = "Du Mai"
	//$pathoType = "mv";
	//$caract = ["p","v"];
	//$sympt = ["2ème orteil",.....]
	//$motsCles = ["....","...."];

	global $bdd;
	
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

	$val = 0;

	if ($meridien!="default") {
		$rawquery.= 'm.nom ="'.$meridien.'"';
		$val = 1;
	}

	/*****************************************************/
	//PATHOLOGIE TYPE
	if(!checkVal($val)){
		if($pathoType!="default") {
			$rawquery.=' p.type LIKE "'.$pathoType.'%"';
		}
	}
	else{
		if($pathoType!="default") {
			$rawquery.=' AND p.type LIKE "'.$pathoType.'%"';
		}
	}
	//cas particulier "m"
	if($pathoType=="m"){
		$rawquery.=' AND p.type NOT LIKE "mv"';
	}
	
	/*****************************************************/
	//CARACTERISTIQUE(S)
	if(!checkVal($val)){
		if($caract!="default") {
			foreach ($caract as $value) {
				$rawquery.='p.type ="'.$value.'"';
			}
		}

	}
	else{
		if($caract!="default") {
			foreach ($caract as $value) {
				$rawquery.=' AND p.type ="'.$value.'"';
			}
		}
	}

	/*****************************************************/
	//SYMPTOME(S)
	if(!checkVal($val)){
		if($sympt!="default") {
			foreach ($sympt as $value) {
				$rawquery.='s.desc LIKE "%'.$value.'%"';
			}
		}
	}
	else{
		if($sympt!="default") {
			foreach ($sympt as $value) {
				$rawquery.=' AND s.desc LIKE "%'.$value.'%"';
			}
		}
	}

	/*****************************************************/
	//MOT(S) CLE(S)
	if(!checkVal($val)){
		if($motsCles!="default") {
			foreach ($motsCles as $value) {
				$rawquery.='k.name LIKE "%'.$value.'%"';
			}
		}	
	}
	else{
		if($motsCles!="default") {
			foreach ($motsCles as $value) {
				$rawquery.=' AND k.name LIKE "%'.$value.'%"';
			}
		}	
	}

	/*****************************************************/
	//RUN QUERY

	echo $rawquery;
	$query = $bdd ->prepare($rawquery);
	
	$query->execute();

	$liste_patho = array();

	$i = 0;
	while($donnees = $query->fetch()){
		$liste_patho[$i]['type'] = $donnees['type'];
		$i++;
	}
	
	var_dump($liste_patho);

	return $liste_patho;
}

function checkVal($val){
	if($val==1){
		return 1;
	}
	else{
		return 0;
	}
}

/*$caract = array();
$caract = ["v","p"];

$sympt = array();
$sympt = ["toux"];

$motsCles = array();
$motsCles = ["orteil"];
*/
//advancedSearch("Du Mai","mv",$caract,$sympt,$motsCles);
?>
